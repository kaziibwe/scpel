<x-layout_user>


  <section class="w-[100%] mx-auto p-4 md:grid-cols-2">
    <div id="info_box_1" class="flex items-center mt-20 p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          You <span class="font-medium">DON'T</span> need a scpel.org account to download or use Scpel.
        </div>
    </div>
    <div id="info_box_2" class="flex w-full items-center mt-20 p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 hidden" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        OTP <span class="font-medium">Expires</span> in 24 Hours.
      </div>
  </div>

      <div id="sign_up_form">
        <div class="grid grid-cols-1 w-full mt-10 m-auto gap-4 md:grid-cols-2">
          <div class="w-full">
            <div class="header bg-transparent items-center">
                <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400">Sign Up</h1>
                <form action="{{ route('user.registering') }}" method="POST">
                    @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                    <input type="email" name='email' value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="E-mail">

                    @error('email')
                    <code>
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                    </code>
                    @enderror
                    <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name:</label>
                    <input type="text" name='firstname' value="{{ old('firstname') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="kaziibwe">
                    @error('firstname')
                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Second Name:</label>
                    <input type="text" name='lastname' value="{{ old('lastname') }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alfred">
                    @error('lastname')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                    <input type="password" name='password' value="{{ old('password') }}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
                    @error('password')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                    @enderror


                    <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password:</label>
                    <input type="password"  name='password_confirmation' value="{{ old('password_confirmation') }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password">
                    @error('password_confirmation')
                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                    @enderror
                <div class="mt-10 flex flex-col">
                  <!-- Full-width button below the first two buttons -->
                  <button type="submit"  class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Sign Up >></button>

                </form>

                </div>
            </div>
        </div>
        <div>
            <div class="ml-60">
                <div class="w-full bg-gray-200 h-1 mb-2"></div>
                <div>
                    <h1 class="text-xl font-bold mb-2 text-gray-400">Login</h1>
                </div>
                <p>Already have an account?</p>
                <div class="mt-40 pt-2">
                    <!-- Full-width button below the first two buttons -->
                    <a
                     href="/loginUser">
                    <button type="button" class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Sign In </button> </a>
                  </div>
            </div>
        </div>
      </div>
      </div>
      <div  class="hidden w-full mt-20">
        <div class="w-full">
          <div class="header bg-transparent items-center">
              <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400">A One-Time-Password (OTP) has been sent to your email:</h1>
              <form>
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comfirm Email:</label>
                  <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="OTP expires in 24 hours - 000000">
              </form>
              <div class="mt-10 flex flex-col">
                <!-- Full-width button below the first two buttons -->
                <button type="button" class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a href="https://scpel.org"> Complete Registration >></a></button>
              </div>
          </div>
      </div>
      </div>
</section>



</x-layout_user>
