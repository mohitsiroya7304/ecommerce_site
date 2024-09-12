<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 400px;
            height: 50px;
        }
        input[type='search']
        {
            width: 500px;
            height: 60px;
            margin-left: 50px;
        }
    
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
    
        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            /* margin-top: 50px; */
            /* width: 400px; */
        }
    
        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            border: 1px solid black;    
        }
        
        td
        {
            color: white;
            border: 1px solid skyblue;
            text-align: center;
        }
    
        </style>
  </head>
  <body>
    {{-- header section --}}

        @include('admin.header')

    {{-- sidebar section --}}

        @include('admin.sidebar')

    {{-- Body section --}}

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="color: white">View Product</h1>
 
            <form action="{{ url('product_search') }}" method="GET">
                @csrf
                <input type="search" name="search" placeholder="Enter Product Name Or Category To See Result">
                <input type="submit" class="btn btn-secondary" value="Search">
            </form>

            <div class="div_deg">

                <div>
                    <table class="table_deg">
                        <tr>
                            <th> Id</th>
                            <th> Product Name</th>
                            <th> Description</th>
                            <th> Price</th>
                            <th> Category</th>
                            <th> Quantity</th>
                            <th> Image</th>
                            <th> Edit</th>
                            <th> Delete</th>
                        </tr>
                        @foreach ($product as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->title }}</td>
                            <td>{!!Str::limit($products->description,50)!!}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->category }}</td>
                            <td>{{ $products->quantity }}</td>
                            <td>
                                <img height="120" width="120" src="products/{{ $products->image }}" >
                            </td>

                            <td><a class="btn btn-success" href="{{ url('edit_product', $products->id) }}">Edit</a></td>
                            <td><a onclick="confirmation(event)" class="btn btn-danger" href="{{ url('delete_product', $products->id) }}">DELETE</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
                <div class="div_deg">
                    {{ $product->onEachSide(1)->links() }}
                </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->

   {{-- delete category confirmation script start --}}
   <script type="text/javascript">

    function confirmation(ev)
    {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
            title:"Are You Sure To Delete This",
            text: "This delete will be parmanent",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        
        .then((willCancel)=>{
            if(willCancel)
            {
                window.location.href=urlToRedirect;
            }
        });
    }

</script>
{{-- sweet alert script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

{{-- delete category confirmation script end --}}


    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }} "> </script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }} "> </script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }} "></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }} "></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
  </body>
</html>