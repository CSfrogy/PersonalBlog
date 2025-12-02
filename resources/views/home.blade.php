<x-layouts.main>
<section class="bg-white h-screen">
    @guest
        <div class="grid max-w px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-black">
                    The Easiest Way to Share Your Ideas.
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Enjoy an ad-light reading experience and use our intuitive editor to publish your thoughts without
                    any distractions
                </p>
                <a href="{{ route('register') }}" wire:navigate class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-blue-700 rounded-lg
                        border border-transparent
                        hover:border-blue-500
                        hover:ring-2 hover:ring-blue-300 hover:ring-offset-2 hover:ring-offset-white
                        transition duration-150">
                    Get started
                </a>

                <a href="{{ route('posts') }}" wire:navigate
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    Read Posts
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img class="rounded-2xl shadow-lg" src="{{ asset('images/hero-image.jpg') }}" alt="mockup">
            </div>
        </div>
</section>
    @endguest

    @auth
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-6">For You</h2>

                </div>
            </div>
        </div>
    @endauth



    <section id="latest-posts" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 text-center mb-12">
                Latest Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post"/>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('posts') }}" wire:navigate
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100">
                    View All Posts
                </a>
            </div>
        </div>
    </section>
</x-layouts.main>
