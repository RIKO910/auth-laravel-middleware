<nav class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="flex flex-1 items-center justify-end sm:items-stretch">
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login.index') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Login</a>
                        <a href="{{ route('registration.index') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Registration</a>
                    @else
                        <!-- Logout Button -->
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Logout</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 pb-4 pt-2">
            @guest
                <a href="{{ route('login.index') }}" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Login</a>
                <a href="{{ route('registration.index') }}" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Registration</a>
            @else
                <!-- Mobile Logout Button -->
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Logout</a>
            @endguest
        </div>
    </div>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
