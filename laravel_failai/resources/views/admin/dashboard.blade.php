<h2>Orders</h2>

@foreach($latestProducts as $product)
    <div class="card">
        <div class="card-content">
            <span class="card-title">Product #{{ $product->id }}</span>
            <p>Created at: {{ $product->created_at }}</p>
            <p>Updated at: {{ $product->updated_at }}</p>
            <p>Product name: {{ $product->name }}</p>
            <p>Product price: {{ $product->price }}</p>
            <p>Product description: {{ $product->description }}</p>
            <p>Product category: {{ $product->category }}</p>
        </div>
        <div class="card-action">
            <a href="{{ route('products.show', $product) }}">View</a>
        </div>
    </div>
@endforeach
