<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .invoice-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .product-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <h2>Invoice</h2>
        </div>
        <div class="invoice-details">
            <p><strong>Customer Name:</strong> {{ $data->name }}</p>
            <p><strong>Customer Address:</strong> {{ $data->rec_address }}</p>
            <p><strong>Phone:</strong> {{ $data->phone }}</p>
        </div>
        <div class="product-details">
            <h3>Product Details</h3>
            <p><strong>Title:</strong> {{ $data->product->title }}</p>
            <p><strong>Price:</strong> {{ $data->product->price }}</p>
            <img class="product-image" src="products/{{ $data->product->image }}" alt="Product Image">
        </div>
    </div>
</body>
</html>
