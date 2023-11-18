<x-login-register-layout>
<div class="min-h-screen flex items-center justify-center">
      @if(session()->has('message'))
          <div class="text-center bg-red-600 p-3 text-white shadow-xl">{{session('message')}}</div>
      @endif
      <div
        class="p-8 py-8 w-[350px] md:w-[500px] border border-red-200 rounded-lg mx-auto mt-5 shadow-md shadow-slate-800"
      >
        <div class="w-[100px] rounded-full overflow-hidden mx-auto">
          <img src="./images/erobot-logo.jpg" alt="logo" class="object-fit" />
        </div>
        <p class="text-xl text-red-600 text-center font-bold mt-2  uppercase">
          SEND OTP TO
        </p>

       <div>
        <form method="POST" action="{{route('user.sendOtp')}}">
          @csrf
          @method('POST')
          <div class="mt-4">
            <div class="text-center font-semibold">
                {{session('phone')}}

                @error('phone')
                <div class="text-xs text-red-600">{{ $message }}</div>
                @enderror
                @if(session()->has('error'))
              <div class="text-xs text-red-600">{{session('error')}}</div>
               @endif
            </div>
            <input type="hidden" name="phone" value="{{session('phone')}}">
          </div>
          <div class="mt-8">
            <button
              type="submit"
              class="bg-red-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-red-600"
            >
              SEND OTP
            </button>
          </div>
        </form>
       </div>
        <div class="mt-4 ">
          <div class="text-xs text-gray-500 text-center">Don't have an account?</div>
          <div class="mt-4 flex items-center justify-between">
            <span class="border-b w-1/5 md:w-1/4"></span>
            <a href="/register" class="text-xs text-blue-500 underline">Sign up now</a>
            <span class="border-b w-1/5 md:w-1/4"></span>
          </div>
        </div>
      </div>
    </div>
</x-login-register-layout>