<x-app-style>
    {{-- navigation --}}
    <div class="flex container justify-between font-bold">
        <div>
            <ul class="flex gap-4">
                <li>home</li>
                <li>services</li>
                <li></li>
                <li></li>
                <li>about us</li>
            </ul>
        </div>
        <div>
            <ul>
                <li></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>

    <!-- banner -->
    <div class="container banner">
        <h1 class="text-4xl">Providing Superior Quality</h1>
        <p class="mt-2">Building Materials and Hardware Equipments</p>
        <div class="flex justify-between w-4/12 mt-4">
            <button class="rounded-md px-12 py-2 bg-yellow-500">Order</button>
            <a href="{{route('register')}}">
                <button class="rounded-md px-12 py-2 border border-gray-100 transition hover:bg-white hover:text-yellow-600 hover:font-semibold">Register</button>
            </a>
        </div>
    </div>

    <!-- email newsletter -->
    <div class="relative bottom-7 bg-yellow-500 w-1/2 mx-auto my-0 p-2 rounded-md">
        <div>
            <h1 class="text-center">_Success</h1>
        </div>
        <form action="{{route('welcome')}}" method="post" class="flex justify-around">
            @csrf
            <div class="flex flex-col">
                <label for="" class="font-semibold">Newsletter</label>
                <input type="text" class="py-2 w-72" placeholder="Email Newsletter">
            </div>
            <div>
                <button class="rounded-md px-20 py-2 ml-2 mt-6 bg-black text-white" type="submit">Get News</button>
            </div>
        </form>
    </div>

    <!-- products -->
    <div class="products container">
        <h1 class="text-4xl font-bold text-center my-4">Products</h1>
        <div class="flex justify-center gap-4 flex-wrap">
            @foreach($products as $product)
                <div class="border border-gray-300 px-4 py-2 flex-3 w-1/4">
                    <h1 class="text-2xl font-semibold">{{$product->name}}</h1>
                    <p>{{$product->description}}</p>
                    <p class="my-2 font-semibold">Quantity - {{$product->quantity}}</p>
                    <a href="{{route('products')}}">
                        <button class="my-2 px-12 py-2 text-white rounded-md bg-yellow-500">${{$product->price}}</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- about us -->
    <div class="about-us flex justify-around my-5 px-12 container flex-row-reverse gap-20">
        <div class="about-us-img w-1/2">
        </div>
        <div>
            <h1 class="text-4xl font-semibold">About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, dolorum. Lorem ipsum dolor 
                sit amet consectetur adipisicing elit. Saepe, asperiores?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita neque pariatur 
                repudiandae voluptatem non exercitationem sequi dolore cumque nisi dolorem!</p>
        </div>
    </div>

    <!-- google location -->
    <div class="text-center">
        <h1>Google Location</h1>
    </div>
    
    <!-- contact us -->
    <div class="container">
        <form action="" method="post">
            @csrf
            <div>
                <label for="">Email Address</label>
            </div>
        </form>
    </div>
</x-app-style>

