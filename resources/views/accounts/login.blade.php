<x-layout_user>

  <section class="w-[100%] mx-auto p-4 md:grid-cols-2">
    <div class="flex items-center mt-20 p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Let us know you!</span> Singing In helps you keep track of discussions, news and announcements in our mailing lists.
        </div>
      </div>
    <div class="grid grid-cols-1 w-full mt-10 m-auto gap-4 md:grid-cols-2">
      <div class="w-full">
        <div class="header bg-transparent items-center">
            <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400">Sign In</h1>
            <form   method="POST"    action="{{ route('user.auth') }}">
                @csrf
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LogIn:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username or e-mail">

                @error('email')
                <code>
                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                </code>
                @enderror

                <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                <input type="password" name="password" value="{{ old('password') }}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
                @error('password')
                <code>
                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                </code>
                @enderror
                <br>
                <button type="submit" class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Sign In >></button>
              </form>
            <div class="mt-10 flex flex-col">
              <!-- Full-width button below the first two buttons -->

            </div>
        </div>
    </div>
    <div>
        <div class="ml-60">
            <div class="w-full bg-gray-200 h-1 mb-2"></div>

            <div>
                <h1 class="text-xl font-bold mb-2 text-gray-400">Register</h1>
            </div>

            <p>Don't have a scpel.org account yet?</p>
            <div class="mt-40 pt-2">
                <!-- Full-width button below the first two buttons -->
                <a href="/registerUser">
                <button type="button" class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Register</button>     </a>
              </div>
        </div>
    </div>
  </div>
</section>

</x-layout_user>

