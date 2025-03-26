<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border">                                
                        <thead>
                            <tr>
                                <th>In Stock</th>
                                <th>Total Stock</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $products as $product )
                                <tr>
                                    <td>{{ $product->quantity }}</td>
                                    
                                </tr>

                                
                            @endforeach

                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
