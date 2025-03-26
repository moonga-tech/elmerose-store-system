<x-app-layout>
    <div class="products mb-8">
        <h1 class="text-4xl font-bold text-center my-4">Product Details</h1>
        <div class="flex justify-center gap-4 flex-wrap">
            <div class="border border-gray-300 px-4 py-2 flex-3 w-1/4">
                <h1 class="text-2xl font-semibold">{{$product->name}}</h1>
                <p>{{$product->description}}</p>
                <p class="my-2 font-semibold">Quantity - {{$product->quantity}}</p>
                <p class="text-yellow-500 font-bold">${{$product->price}}</p>
            </div>
        </div>

        <div class="justify-center my-4 flex gap-4">
            <a href="{{route('update.product', $product->id)}}">
                <button class="text-yellow-400 bg-black px-4 py-2 rounded-md">Edit</button>
            </a>
            <form action="" method="post">
                @csrf
                @method('DELETE')
                <button class="text-red-500 border border-red-500 px-4 py-2 rounded-md">Delete</button>
            </form>
            
        </div>
    </div>
</x-app-layout>

