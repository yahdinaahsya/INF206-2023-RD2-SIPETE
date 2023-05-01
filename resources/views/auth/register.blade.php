<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center pt-6 sm:pt-0 bg-gray-100">
            <div class="grid md:grid-cols-5 grid-cols-1 mt-20 md:mt-0">
            <div class="hidden md:block col-span-2 h-screen rounded-r bg-[#0B63F8] p-16 justify-center">
                    <p class="text-8xl pb-10 font-extrabold text-white">Halo!</p>
                    <p class="text-2xl font-semibold text-white">Selamat datang kembali</p>
                    
                    <div class="mt-2 text-sm font-medium flex text-white justify-between">
                        Ayo, tetap terhubung bersama kami ciptakan lingkungan bebas limbah tekstil!
                    </div>
                    <div class="flex justify-center h-auto">
                        <img class="rounded-xl" src="{{('images/login.png') }}" style="transform: scaleX(-1);">
                    </div>
                </div>
                <div class="md:col-span-3">
                    <div class="h-full grid grid-cols-1 content-center justify-center">
                        <div class="flex justify-center">
                            <form method="POST" action="{{ route('register') }}" class="md:w-3/4 w-full mx-5 grid grid-cols-1 gap-3">
                                @csrf
                                <div class="flex justify-center">
                                    <img src="{{ asset('images/logo.svg') }}">
                                </div>

                                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                                    <div>
                                        <label for="input-name">Name</label>
                                        <input type="text" name="name" id="input-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name">
                                    </div>
                                    <div>
                                        <label for="input-email">Email</label>
                                        <input type="email" name="email" id="input-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email">
                                    </div>
                                    <div>
                                        <label for="input-password">Password</label>
                                        <input type="password" name="password" id="input-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div>
                                        <label for="input-password-confirm">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Confirm Password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="flex justify-center mt-5">
                                    <button type="submit" class="px-4 py-3 bg-[#0B63F8] text-white font-bold md:w-1/2 w-full rounded-full">Register</button>
                                </div>

                                <div class="flex justify-center">
                                    <a href="{{ url('/login') }}" class="text-[#0B63F8] hover:text-black">Sudah memiliki akun</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>