<div class="flex items-center justify-center h-screen">
  <div class="w-full max-w-xs">
    <div class="flex justify-center mb-4">
      <img class="h-24 w-52" src="{{ asset('img/logo.png') }}"/>
    </div>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit="registerUser">
      
      @if (session('error') || $errors->any())
        <div class="mb-4 text-sm bg-rose-500 text-white p-2 rounded flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            @if (session('error'))
                {{ session('error') }}
            @else
                {{ $errors->first() }}
            @endif
        </div>
      @endif

      @if (session('success'))
        <div class="mb-4 text-sm bg-rose-500 text-white p-2 rounded flex items-center">
            Success
        </div>
      @endif

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('*') border-red  @enderror @if(session('error')) border-red @endif" type="text" wire:model='username' placeholder="Username">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('*') border-red  @enderror @if(session('error')) border-red @endif" type="password" wire:model='password' placeholder="******************">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
          Confirm Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('*') border-red  @enderror @if(session('error')) border-red @endif" type="password" wire:model='password_confirmation' placeholder="******************">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
          Role
        </label>
        <select class="cursor-pointer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model='role'>
            <option>Admin</option>
            <option>User</option>
        </select>
      </div>
      <div class="flex items-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Register
        </button>
      </div>

      <span class="inline-block align-baseline text-sm mt-5">Already have an accout?
        <a class="font-bold text-blue-500 hover:text-blue-800" href="/login">
          Login
        </a>
      </span>
    </form>
    <p class="text-center text-gray-500 text-xs">
      &copy;2023 Naomi Corp. All rights reserved.
    </p>
  </div>

</div>
