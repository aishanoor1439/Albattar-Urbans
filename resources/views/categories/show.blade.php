<div class="container mx-auto">
<div class="bg-white shadow rounded-lg p-4">
<h5 class="text-lg font-bold">{{$category->name}}</h5>
<p class="text-gray-700">{{ $category->description }}</p>
<a href="{{route('categories.index')}}">View All Categories</a>
</div>
</div>