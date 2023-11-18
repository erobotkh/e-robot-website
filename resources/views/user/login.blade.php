<x-login-register-layout>
    @if(session()->has('message'))
        <div class="text-center bg-red-600 p-3 text-white shadow-xl">{{ session('message') }}</div>
    @endif
    <div class="min-h-screen flex justify-center items-center">

        <div
            class="p-8 py-8 w-[350px] md:w-[500px] border border-red-200 rounded-lg mx-auto mt-5 shadow-md shadow-slate-800">
            <div class="w-[100px] rounded-full overflow-hidden mx-auto">
                <img src="./images/erobot-logo.jpg" alt="logo" class="object-fit" />
            </div>
            <p class="text-xl text-red-600 text-center font-semibold">
                Welcome to E-robot
            </p>

            <div class="flex gap-2">
                <a href="#"
                    class="flex items-center justify-center mt-2 text-white rounded-lg shadow-md hover:bg-gray-100 w-full">
                    <div class="px-4 py-3">
                        <svg class="h-6 w-6" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>github [#142]</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                    fill="#000000">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                            id="github-[#142]"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h1 class="py-3 w-5/6 text-center text-gray-600 font-bold hidden md:block">
                        Github
                    </h1>
                </a>
                <a href="#"
                    class="flex items-center justify-center mt-2 text-white rounded-lg shadow-md hover:bg-gray-100 w-full">
                    <div class="px-4 py-3">
                        <svg class="h-6 w-6" viewBox="0 0 40 40">
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#FFC107" />
                            <path
                                d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                fill="#FF3D00" />
                            <path
                                d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                fill="#4CAF50" />
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#1976D2" />
                        </svg>
                    </div>
                    <h1 class="py-3 w-5/6 text-center text-gray-600 font-bold hidden md:block">
                        Google
                    </h1>
                </a>
                <a href="#"
                    class="flex items-center justify-center mt-2 text-white rounded-lg shadow-md hover:bg-gray-100 w-full">
                    <div class="px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-7 w-7">
                            <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z" />
                            <path fill="#fff"
                                d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z" />
                        </svg>
                    </div>
                    <h1 class="px-3 py-3 w-5/6 text-center text-gray-600 font-bold hidden md:block">
                        Facebook
                    </h1>
                </a>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">or login with phone number</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <div>
                <form method="POST" action="{{ route('user.login') }}">
                    @csrf

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="text" name="phone" value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="text-xs text-red-600">{{ $message }}</div>
                        @enderror
                        @if(session()->has('error'))
                            <div class="text-xs text-red-600">{{ session('error') }}</div>
                        @endif
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between items-center">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <a href="#" class="text-xs text-red-500">Forget Password?</a>
                        </div>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="password" name="password" />
                        @error('password')
                            <div class="text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="bg-red-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-red-600">
                            Login
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
