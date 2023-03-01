<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hatchet Laravel</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Styles -->
    @livewireStyles
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
</head>

<body class="antialiased h-full">
<div class="min-h-full">
    <div class="bg-gray-800 pb-32">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="border-b border-gray-700">
                    <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="{{ asset('images/hatchet.svg') }}" alt="Hatchet">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a href="{{ url('/')  }}"
                                       class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                       aria-current="page">Offices</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </nav>
        <header class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Office List</h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg px-4 py-6">
                @livewire('office-filter')
                @livewire('office-list')
            </div>
        </div>
    </main>
</div>


@livewireScripts
</body>

</html>

