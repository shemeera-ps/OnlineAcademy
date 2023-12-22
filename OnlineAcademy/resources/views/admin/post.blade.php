<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-sidebar></x-sidebar>
    <div class="flex justify-center items-center p-[8vw] ">
        <form action="{{ route('posts.store') }}" method="post" class="flex flex-col p-10 bg-blue-50 shadow" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="category">Choose a category</label>
                <select name="category" id="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <input type="text" name="name" id="" placeholder="Post title" class="w-full bg-white rounded mb-4">
            @error('short_description')
                <p>{{ $message }}</p>
            @enderror
            <textarea name="short_description" id="" cols="5" rows="5" class="w-full bg-white rounded mb-4" placeholder="Short Description"></textarea>
            @error('long_description')
                <p>{{ $message }}</p>
            @enderror
            <textarea name="long_description" id="" cols="10" rows="10" class="w-full bg-white rounded mb-4" placeholder="Long Description"></textarea>
            <input type="file" name="image" id="" class="w-full bg-white rounded mb-4">
            <x-primary-button>Add New Post</x-primary-button>
        </form>
    </div>
    
</x-app-layout>
