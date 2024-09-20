<x-layout>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data"
                  class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded-lg space-y-8"
    >
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"/>
        <div class="flex justify-center">
            <x-forms.button class="hover:bg-orange-400">Sign Up</x-forms.button>
        </div>
        <div class="flex justify-center mt-0">
            <p class="text-text justify-self-center">
                Already have an account?
                <a href="/login" class="underline">Log in!</a>
            </p>
        </div>
    </x-forms.form>
</x-layout>