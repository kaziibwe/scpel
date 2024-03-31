<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function homePage() {
        return view('index');
    }



    public function userRegister(request $request){


        $userInsert=$request->validate([
            'email' => ['required', Rule::unique('users', 'email')],
            "firstname" => "required",
            "lastname" => "required",
            'password' => ['required', 'confirmed', 'min:4'],
        ]);
        $email =$request['email'];
        // dd($email);

        $userInsert['password']=bcrypt(  $userInsert['password']);
        DB::table('users')->insert($userInsert);
        return redirect()->route('sendMail', ['email' => $email]);

    }
    //

    public function authenticate(Request $request)
    {
//   dd($request->all());
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            // dd('loged');
            return redirect('/')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'logged out successfully !');
    }



    // otp verification
    public function otpverify(Request $request, $email)
    {
        $user = User::where('email', $email)->first(); // Find user by email
        $myEmail=$user->email;
        $myCode=$user->velification_code;
        // dd($myCode);


        $formFields = $request->validate([
            'velification_code' => 'required',
        ]);


        // Attempt to authenticate the user
        if ($myCode == $request['velification_code']){
            // dd('loged');
            $request->session()->regenerate();

            $velification_code=$user->velification_code;
            $velification_code=null;
            $user->velification_code = $velification_code;
            $user->save();
            return redirect('/')->with('success', 'User is registered  successfully!');
        }else{
            $velification_code=$user->velification_code;
            $velification_code=null;
            $user->velification_code = $velification_code;
            $user->save();
            return redirect()->route('otpverify', ['email' => $email])->with('danger','Otp is not collect .Try to resend the otp');
        }





    }



    //    public function logout(Request $request)
    // {
    //     Auth()->logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/login')->with('message', 'logged out successfully !');
    // }


}
