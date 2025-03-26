<h1>Inventory Management</h1>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Low Stock Threshold</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->low_stock_threshold }}</td>
            <td>
                <form action="{{ route('inventory.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="number" name="quantity" value="{{ $product->quantity }}">
                    <button type="submit">Update Quantity</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
