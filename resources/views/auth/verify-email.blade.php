<x-guest-layout>
<<<<<<< HEAD
    <div class="mb-4 text-sm text-gray-600">
=======
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
>>>>>>> 2108107010011
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
<<<<<<< HEAD
        <div class="mb-4 font-medium text-sm text-green-600">
=======
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
>>>>>>> 2108107010011
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

<<<<<<< HEAD
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
=======
            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
>>>>>>> 2108107010011
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
