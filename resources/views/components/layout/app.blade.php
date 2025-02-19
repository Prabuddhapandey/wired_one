<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel SPA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="min-h-screen">
    <!-- Header -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" wire:click.prevent="$emitTo('main-component', 'changePage', 'welcome')"
                       class="text-xl font-bold text-gray-800">
                        Laravel SPA
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" wire:click.prevent="$emitTo('main-component', 'changePage', 'login')"
                       class="text-gray-600 hover:text-gray-900">
                        Login
                    </a>
                    <a href="#" wire:click.prevent="$emitTo('main-component', 'changePage', 'register')"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto py-6 px-4">
        @livewire('main-component')
    </main>
</div>
@livewireScripts
</body>
</html>
