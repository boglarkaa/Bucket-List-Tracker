<x-layout>
    <x-forms.form method="POST" action="/login" class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded-lg space-y-8"
    >

        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <div class="flex justify-center">
            <x-forms.button class="hover:bg-orange-400">Log In</x-forms.button>
        </div>
        <div class="flex justify-center mt-0">
            <p class="text-text justify-self-center">
                Don't have an account yet?
                <a href="/register" class="underline">Sign Up!</a>
            </p>
        </div>
    </x-forms.form>
</x-layout>