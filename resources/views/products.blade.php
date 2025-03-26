<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-4xl font-bold text-center my-4">Products</h1>

                    <div class="w-full my-4 container font-semibold text-2xl">    
                        <p class="text-red-600">
                            @if(session()->has('delete'))
                                {{ session('delete') }}
                            @endif
                        </p>

                        <p class="text-yellow-500">
                            @if(session()->has('update'))
                                {{ session('update') }}
                            @endif
                        </p>
                        
                        <p class="text-green-600">
                            @if(session()->has('created'))
                                {{ session('created') }}
                            @endif
                        </p>
                    </div>

                    <div class="flex justify-center gap-8 flex-wrap w-full">
                        @foreach($products as $product)
                            <div class="border border-gray-300 px-4 py-2 w-1/4">
                                <h1 class="text-2xl font-semibold">{{$product->name}}</h1>
                                <p>{{$product->description}}</p>
                                <p class="my-2 font-semibold">Quantity - {{$product->quantity}}</p>
                                <p class="text-yellow-500 font-bold">₱{{$product->price}}</p>
                                <p>
                                    <a href="{{route('view.product', $product->id)}}" class="text-green-800">View Details</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    

