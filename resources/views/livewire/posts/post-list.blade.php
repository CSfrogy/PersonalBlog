<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Blog Posts</h1>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input
                    wire:model.live.debounce.300ms="search"
                    type="search"
                    placeholder="Search posts..."
                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-gray-50 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 ease-in-out"
            />
        </div>
    </div>

    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="rounded-lg bg-white p-6 shadow-md flex gap-6">
                <div class="flex-shrink-0 w-48 h-32 overflow-hidden rounded-lg">
                    <img
                            src="https://picsum.photos/480/320?random={{ $post->id }}"
                            alt="{{ $post->title }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
                    >
                </div>
                <div class="flex-1">
                    <h2 class="mb-2 text-xl font-semibold text-gray-900">
                        <a href="{{route('posts.show',$post)}}" class="hover:text-blue-600 transition-colors duration-200">{{$post->title}}</a>
                    </h2>
                    <p class="text-sm text-gray-600 mb-2">By {{$post->user->name}} on {{ $post->published_at->format('F j, Y') }}</p>
                    <p class="text-gray-700">{{Str::limit($post->body,200)}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        <x-pagination :paginator="$posts" />
    </div>

</div>
