@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>

    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
