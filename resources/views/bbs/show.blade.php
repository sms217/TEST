<x-app-layout>
    <x-slot name='header'>
        <div>
            <link rel="stylesheet"
                href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
            <button onclick=location.href="{{route('cars.index')}}"
                class="float-right transition duration-500 ease-in-out bg-gray-400 hover:bg-black transform hover:-translate-y-1 hover:scale-110 text-white rounded-full py-3 px-3 font-bold">목록</button>
            <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Details
                            </h6>
                            <div class="float-right">
                                <a id="edit" href=""
                                    class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                    onclick="confirmEdit('{{$post->id}}')">edit</a>
                            </div>
                        </div>
                        <div class="mt-2 float-right">
                            <form method="post" action="{{route('cars.destroy',['car'=>$post->id])}}">
                                @csrf
                                @method('DELETE')
                                <button id="delete"
                                    class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <form method="POST" id="form" enctype=" multipart/form-data"
                            action="{{route('cars.destroy',['car'=>$post->id])}}">
                            @method('DELETE')
                            @csrf
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Post
                            </h6>
                            <div class="flex flex-wrap m-2">
                                <div class="mb-4 mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                                        Name
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="name" type="text" placeholder="name" readonly value="{{$post->name}}" />
                                    @error('name')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4 mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2">
                                        Company
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="company" type="text" placeholder="company" value="{{$post->company}}"
                                        readonly />
                                    @error('company')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4  mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2">
                                        Year
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="year" type="text" placeholder="year" value="{{$post->year}}" readonly />
                                    @error('year')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4  mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2">
                                        Price
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="price" type="text" placeholder="price" value="{{$post->price}}"
                                        readonly />
                                    @error('price')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4  mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2">
                                        Shape
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="shape" type="text" placeholder="shape" value="{{$post->shape}}"
                                        readonly />
                                    @error('shape')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4  mr-3">
                                    <label class="block text-gray-600 text-sm font-semibold mb-2">
                                        Category
                                    </label>
                                    <input
                                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="category" type="text" placeholder="category" value="{{$post->category}}"
                                        readonly />
                                    @error('category')
                                    <div class="text-red-600">
                                        <span>{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                                <img src="/storage/images/{{$post->image}}" alt="NO IMAGE" class="">
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <footer class="relative  pt-8 pb-6 mt-2">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with <a href="https://www.creative-tim.com/product/notus-js"
                                class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a
                                href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800"
                                target="_blank"> Creative
                                Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        </div>
    </x-slot>
</x-app-layout>