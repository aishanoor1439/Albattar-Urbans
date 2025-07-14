@extends('layouts.app')
@section('title', 'Albattar Urbans')
@section('content')
@include('partials.banner')
@include('partials.categories', ['categories' => $categories])
@include('partials.products', ['products' => $products])
@endsection
