<x-layouts.layout>
    <section class="bg-white">
        <div class="grid max-w px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-black">
                    The Easiest Way to Share Your Ideas.
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Enjoy an ad-light reading experience and use our intuitive editor to publish your thoughts without any distractions
                </p>
                <a href="{{ route('login') }}" wire:navigate"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-blue-700 border hover:text-blue-700 hover:bg-none rounded-lg hover:ring-2">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ route('posts') }}" wire:navigate
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border-gray-900 box-border border rounded-lg hover:ring-2 transition duration-150">
                    Read Posts
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img class="rounded-2xl" src="{{ asset('images/hero-image.jpg') }}" alt="mockup">
            </div>
        </div>
    </section>
</x-layouts.layout>
