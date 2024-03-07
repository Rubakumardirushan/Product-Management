<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4 mb-4 d-flex justify-content-between align-items-center">
                    View All Products
                    <a href="{{ route('products.create') }}" class="btn btn-success mr-2">Create Product</a>
                    <a href="{{route('products.delete')}}" class="btn btn-danger">Delete Products</a>
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 mt-5 small">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h6 class="card-title">Name: {{ $product->name }}</h6>
                            <p class="card-text">Description: {{ $product->description }}</p>
                            <p class="card-text">Price: {{ $product->price }}/=</p>
                            <a href="{{ route('products.updateview', $product->id) }}" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
