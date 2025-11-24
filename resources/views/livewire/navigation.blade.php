<nav class="flex justify-between items-center bg-white shadow-ms border-b border-gray-100 p-5"">
    <div class="flex space-x-4 text-black font-medium"> <a href="{{ route('home') }}" wire:navigate
            class="hover:text-blue-500 @if (request()->is('/')) font-bold text-blue-700 @endif">
            Home
        </a>

        <a href="{{ route('posts.index') }}" wire:navigate
            class="hover:text-blue-500 @if (request()->is('posts')) font-bold text-blue-700 @endif">
            Posts
        </a>

        <a href="{{ route('contact') }}" wire:navigate
            class="hover:text-blue-500 @if (request()->is('contact')) font-bold text-blue-700 @endif">
            Contact Us
        </a>
    </div>

    <div class="flex space-x-3">
        <a href="{{ route('login') }}" wire:navigate class="text-sm font-semibold px-4 py-2 rounded-lg
           bg-blue-600 text-white
           hover:bg-blue-700
           transition duration-150 shadow-md">
            Sign In
        </a>
    </div>
</nav>
