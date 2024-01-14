<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Products Data</title>
</head>

<body>

    <h1 class="text-center mt-5 mb-5">Products Data</h1>

    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>
                            <a href="/update-product/{{ $product->id }}" class="btn btn-success">Update</a>
                            <a href="/delete-product/{{ $product->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/add-product-form" class="btn btn-primary mt-2 mb-5">Add New Product</a>
    </div>
</body>

</html>
