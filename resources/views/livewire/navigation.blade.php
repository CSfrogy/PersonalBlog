<nav class="flex justify-between items-center bg-gray-800 p-4 shadow-md">
    <div class="flex space-x-4">
        <a href="{{ route('home') }}" wire:navigate
            class="text-white hover:text-blue-400 font-semibold px-3 py-2 rounded-md transition duration-150">Home</a>
        <a href="{{ route('post') }}" wire:navigate
            class="text-white hover:text-blue-400 font-semibold px-3 py-2 rounded-md transition duration-150">Post</a>
        <a href="{{ route('contact') }}" wire:navigate
            class="text-white hover:text-blue-400 font-semibold px-3 py-2 rounded-md transition duration-150">Contact
            Us</a>
    </div>

    <div class="flex space-x-3">
        <a href="{{ route('login') }}" wire:navigate
            class="text-white hover:text-blue-400 font-semibold px-3 py-2 rounded-md transition duration-150">Sign
            In</a>
        <a href="{{ route('register') }}" wire:navigate
            class="text-white hover:text-blue-400 font-semibold px-3 py-2 rounded-md transition duration-150">Sign
            Up</a>
    </div>
</nav>
