<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" value="{{$product->name}}">
                        </div>
                        <div class="flex flex-col">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
                        </div>
                        <div class="flex flex-col">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="flex flex-col">
                            <label for="price">Price</label>
                            <input type="number" name="price" value="{{$product->price}}">
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
