<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucket List Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-background text-text">
<nav class="flex justify-between items-center py-4 border-b border-white/10 m-3">
    <div class="flex-1"></div>

    <h1 class="text-center text-3xl font-extrabold md:text-5xl lg:text-6xl">
        <a href="/" class="text-transparent bg-clip-text bg-primary">
            My Bucket List
        </a>
    </h1>

    @auth
        <div class="space-x-6 font-bold flex-1 text-right mr-4">
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                <x-forms.button class="hover:bg-orange-400">Log Out</x-forms.button>
            </form>
        </div>
    @endauth

    @guest
        <div class="space-x-6 font-bold flex-1 text-right mr-4">
            <x-button href="/register" class="hover:bg-orange-400">Sign Up</x-button>
            <x-button href="/login" class="hover:bg-orange-400">Log In</x-button>
        </div>
    @endguest
</nav>
<div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
    {{$slot}}
</div>
</body>
</html>