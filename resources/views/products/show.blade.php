<div class="container mx-auto">
<div class="bg-white shadow rounded-lg p-4">
<h5 class="text-lg
font-bold">{{$product->title}}</h5>
<p class="text-gray-700">{{ $product->description }}</p>
<p class="text-gray-900 font-bold">{{ $product->price }}</p>
<a href="{{route('products.index')}}">View all Products</a>
</div>
</div>