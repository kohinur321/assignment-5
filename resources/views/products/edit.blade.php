@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}">

        <label for="image">Image:</label>
        <input type="file" name="image">

        <button type="submit">Update Product</button>
    </form>
@endsection
