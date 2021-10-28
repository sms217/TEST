<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div>
        <link rel="stylesheet"
            href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            You can edit.
                        </h6>
                        <div class="float-right">
                            <a id="cancel" href="{{route('cars.show',['car'=>$post->id])}}"
                                class="mr-2 bg-yellow-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                onclick="confirmCancel()">
                                cancle
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form method="POST" action="{{route('cars.update',['car'=>$post->id])}}" id="form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="float-right bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                            save</button>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                                Name
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="name" type="text" placeholder="name" value="{{$post->name}}" />
                            @error('name')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2">
                                Company
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="company" type="text" placeholder="company" value="{{$post->company}}" />
                            @error('company')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2">
                                Year
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="year" type="text" placeholder="year" value="{{$post->year}}" />
                            @error('year')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2">
                                Price
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="price" type="text" placeholder="price" value="{{$post->price}}" />
                            @error('price')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2">
                                Shape
                            </label>
                            <input
                                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="shape" type="text" placeholder="shape" value="{{$post->shape}}" />
                            @error('shape')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600 text-sm font-semibold mb-2">
                                Category
                            </label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="category" type="text" placeholder="category" value="{{$post->category}}" />
                            @error('category')
                            <div class="text-red-600">
                                <span>{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Image
                        </label>
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                            <i class="fas fa-cloud-upload-alt fa-3x"></i>
                            <span class="mt-2 text-base leading-normal">Select a file</span>
                            <input type='file' class="hidden" name="image" />
                        </label>
                        <img class="mt-4" src="/storage/images/{{$post->image}}" alt="NO IMAGE">
                        <!-- <input type="file" name="image"> -->
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
                            target="_blank"> Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    function confirmCancel(e) {
        const form = document.getElementById('form');
        const cancel = document.getElementById('cancel');
        // cancel.href = '{{$post->id}}'
        const con = confirm('Do you want to cancel to edit?');
        if (con) {
            return true
            alert('Edit canceled.')
        } else cancel.href = 'edit'

    }
    </script>
    </div>
</x-app-layout>