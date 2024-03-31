<?php

use App\Models\User;
use App\Mail\MailNotify;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class,'homePage']);

Route::get('/test',function(){
    return view('accounts.test');

});


Route::get('/',[UserController::class,'homePage']);




Route::get('/scpel_community',function(){
    return view('pages.scpel_community
    ');
})->name('scpel.community');



Route::get('/scpel_download',function(){
    return view('pages.scpel_download
    ');
})->name('scpel.scpel_download');


Route::get('/scpel_settings',function(){
    return view('pages.scpel_settings
    ');
})->name('scpel.scpel_settings');



route::post('/logout', [UserController::class, 'logout'])->name('logoutUser');


Route::get('/loginUser',function(){
    return view('accounts.login');
})->name('userlogin');



Route::get('/mail/{email}',function($email){

    // dd($email);
    // $user =User::find($email);
    $user = User::where('email', $email)->first(); // Find user by email

    $velification_code=$user->velification_code;

    $randomCode = '';
    for ($i = 0; $i < 6; $i++) {
        $randomCode .= mt_rand(0, 9); // Append a random digit (0-9) to the code
    }

    $velification_code=$randomCode;
    $user->velification_code = $velification_code;
    $user->save();

    // $myEmail=$user->email;
    // $firstname=$user->firstname;
    // $lastname=$user->lastname;
    // velification_code
    $data=[
        'firstname'=>$user->firstname,
        'lastname'=>$user->lastname,
        'velification_code'=>$randomCode,
        'email'=>$email

    ];


    // dd($data);
    Mail::to($email)
      ->send(new MailNotify($data));
      return redirect()->route('otpverify', ['email' => $email]);



})->name('sendMail');


Route::get('/otp/{email}',function($email){
    return view('accounts.otpRegistration',['email'=>$email]);
})->name('otpverify');

// process the opt for verification


Route::Post('otpVerification/{email}',[UserController::class,'otpverify'])->name('user.otpverify');
Route::get('/registerUser',function(){
    return view('accounts.register');
});

Route::post('/userRegister',[UserController::class,'userRegister'])->name('user.registering');


Route::post('/authenticating',[UserController::class,'authenticate'])->name('user.auth');




