<x-layout title="Login">
    <div class="flex flex-col items-center justify-center h-full">
        <div class="w-1/4 border border-gray-200 p-6 rounded-xl drop-shadow-md">
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <x-form.input name="name" />
                <x-form.input type="email" name="email" />
                <x-form.input type="password" name="password" />
                <x-form.submit>
                    Register
                </x-form.submit>
                <p class=mt-3>
                    Already registered?
                    <a href="/login" class="text-blue-400 underline">Login here</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>
