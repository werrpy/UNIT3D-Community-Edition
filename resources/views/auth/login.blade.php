@extends('layout.auth')

@section('content')
    <section class="absolute w-full h-full">
        <div class="absolute top-0 w-full h-full bg-gray-900"
             style="background-image: url(/img/pipes/silver.png);
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-position: center;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;">
        </div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}.</span>
                        </div>
                    @endif
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="text-center mb-3">
                                <h6 class="text-gray-600 text-xl font-bold">
                                    {{ config('app.name') }}
                                </h6>
                            </div>
                            <div class="btn-wrapper text-center">
                                <button class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                        type="button"
                                        style="transition: all 0.15s ease 0s;">
                                    Login
                                </button>
                                <button
                                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                        type="button"
                                        style="transition: all 0.15s ease 0s;">
                                    Reset Pass
                                </button>
                                <button
                                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                        type="button"
                                        style="transition: all 0.15s ease 0s;">
                                    Register
                                </button>
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400" />
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <div class="text-gray-500 text-center mb-3 font-bold">
                                <small>Sign In With Your Credentials</small>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf()
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                           for="grid-password">
                                        Username
                                    </label>
                                    <input type="username" name="username" id="username"
                                           class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full @error('username') border-red-500 @enderror"
                                           placeholder="Username"
                                           style="transition: all 0.15s ease 0s;"/>

                                    @error('username')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                           for="grid-password">
                                        Password
                                    </label>
                                    <input type="password" name="password" id="password"
                                           class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full @error('password') border-red-500 @enderror"
                                           placeholder="Password"
                                           style="transition: all 0.15s ease 0s;"/>

                                    @error('password')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input name="remember" id="remember"
                                               type="checkbox"
                                               class="form-checkbox text-gray-800 ml-1 w-5 h-5"
                                               style="transition: all 0.15s ease 0s;"/>
                                        <span class="ml-2 text-sm font-semibold text-gray-700">
                                            Remember me
                                        </span>
                                    </label>
                                </div>
                                <div class="text-center mt-6">
                                    <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                            type="submit"
                                            style="transition: all 0.15s ease 0s;">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
            <div class="container mx-auto px-4">
                <hr class="mb-6 border-b-1 border-gray-700" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4">
                        <div class="text-sm text-white font-semibold py-1">
                            Powered By
                            <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold py-1">
                                UNIT3D Community Edition
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection