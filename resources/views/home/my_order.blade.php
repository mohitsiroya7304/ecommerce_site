<!DOCTYPE html>
<html>
    
    <head>
        @include('home.css');
        
        <style type="text/css">
        .div_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table
        {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th
        {
            border: 2px solid skyblue;
            background-color: black;
            padding: 10px;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        td
        {
            color: black;
            padding: 10px;
            border: 1px solid skyblue;
        }

    </style>
</head>

<body>
  <div class="hero_area">

    <!-- header section strats -->
        @include('home.header')
    <!-- end header section -->

    <div class="div_center">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Delivery Status</th>
                <th>Image</th>
            </tr>
            @foreach ($order as $order)
                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <img height="200" width="300" src="products/{{ $order->product->image }}" alt="">
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
  </div>

   

  <!-- info section -->
    @include('home.footer')
  <!-- end info section -->

</body>

</html>