<x-app-layout>
    <x-slot name=header>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Tailwind CSS -->
            <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        </head>

        <body>
            <button onclick="location.href='/cars/create'"
                class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Post
            </button>
            <div class="m-5 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach($posts as $post)
                <div class="m-3 rounded overflow-hidden shadow-lg">
                    <img class="cursor-pointer" onclick="location.href='/cars/{{$post->id}}'" class="w-full"
                        src="/storage/images/{{$post->image}}" alt="No Image">
                    <div class="px-6 py-4">
                        <a class="font-bold text-xl mb-2"
                            href="{{route('cars.show',['car'=>$post->id,'page'=>$posts->currentPage()])}}"
                            style="text-decoration: none; color:black">{{$post->name}}
                        </a>
                        <p class="text-gray-700 text-base">
                            company : {{$post->company}}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">작성자
                            : {{$post->user->name}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">가격
                            : {{$post->price}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">외관
                            : {{$post->shape}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">종류
                            : {{$post->category}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$post->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $posts->links()}}
            </div>
        </body>

        </html>
    </x-slot>
</x-app-layout>