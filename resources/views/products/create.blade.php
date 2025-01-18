@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="product_id">Product ID:</label>
        <input type="text" name="product_id" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <label for="price">Price:</label>
        <input type="text" name="price" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock">

        <label for="image">Image:</label>
        <input type="file" name="image" required>

        <button type="submit">Create Product</button>
    </form>
@endsection
