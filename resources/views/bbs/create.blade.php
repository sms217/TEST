<x-app-layout>
    <x-slot name=header>
    </x-slot>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <div class="w-full">
        <form enctype="multipart/form-data" method="post" class="bg-white rounded px-8 pt-6 pb-8 mb-4"
            action="{{route('cars.store')}}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                    Name
                </label>
                <input
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" type="text" placeholder="name" />
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
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="company" type="text" placeholder="company" />
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
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="year" type="text" placeholder="year" />
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
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="price" type="text" placeholder="price" />
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
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="shape" type="text" placeholder="shape" />
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
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="category" type="text" placeholder="category" />
                @error('category')
                <div class="text-red-600">
                    <span>{{$message}}</span>
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2">
                    Image
                </label>
                <input rows="4" cols="50"
                    class="bg-gray-100 p-1 appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="image" type="file"></input>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Save
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                    href="{{route('cars.index')}}">
                    cancel
                </a>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 BT-7274. All rights reserved.
        </p>
    </div>
</x-app-layout>