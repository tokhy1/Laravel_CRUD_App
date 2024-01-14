<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Update Product</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mb-2 mt-5">Updating Product</h1>
        <form action="/update-product/{{ $product->id }}" method="post" class="form">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name" value={{ $product->product_name }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <input type="text" class="form-control" name="product_description"
                    value={{ $product->product_description }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control" name="product_price" value={{ $product->product_price }}>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>

</html>
