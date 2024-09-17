<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    <title>Helder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full pb-6">
    <div class="min-h-full">
        <nav class="bg-gray-800 mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <div class="flex-shrink-0">
                <img class="h-8 w-8" src="https://svgshare.com/i/19yU.svg"  alt="Your Company">
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Jobs</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center gap-1 md:ml-6">
                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                    @endguest
                    @auth
                        <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
                <x-button href="/jobs/create">Create Job</x-button>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>