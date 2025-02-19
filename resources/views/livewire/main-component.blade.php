<div>
    @if($currentPage === 'welcome')
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Laravel SPA</h1>
            <p class="text-gray-600 mb-4">
                This is a single-page application built with Laravel and Livewire.
                Navigate through different pages without any refresh!
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Feature 1</h3>
                    <p class="text-blue-600">Single page navigation without refresh</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-green-700 mb-2">Feature 2</h3>
                    <p class="text-green-600">Real-time form validation</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Feature 3</h3>
                    <p class="text-purple-600">Seamless authentication</p>
                </div>
            </div>
        </div>
    @elseif($currentPage === 'login')
        @livewire('auth.login-component')
    @elseif($currentPage === 'register')
        @livewire('auth.register-component')
    @endif
</div>
