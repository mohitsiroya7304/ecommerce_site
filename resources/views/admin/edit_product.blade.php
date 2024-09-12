<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
    
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
            color: white!important;
        }
        input[type='text']
        {
            width: 350px;
            height: 50px;
        }
        textarea
        {
            width: 450px;
            height: 80px;
        }
        .input_deg
        {
            padding: 15px;
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

            <h1 style="color: white">Add Product</h1>

            <div class="div_deg">
                {{-- From --}}
                <form action="{{ url('update_product',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input_deg">
                        <label>Product Title</label>
                        <input type="text" name="title" value="{{ $data->title }}">
                    </div>

                    <div class="input_deg">
                        <label>Description</label>
                        <textarea name="description" required>{{ $data->description }}</textarea>
                    </div>

                    <div class="input_deg">
                        <label>Price</label>
                        <input type="text" name="price" value="{{ $data->price }}">
                    </div>

                    <div class="input_deg">
                        <label>Quantity</label>
                        <input type="number" name="qty" value="{{ $data->quantity }}">
                    </div>

                    <div class="input_deg">
                        <label>Product category</label>
                        {{-- Select Category  --}}
                        <select name="category" value="{{ $data->category }}"  >
                            <option>{{ $data->category }}</option>
                            @foreach ($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="input_deg">
                        <label>Product Image</label>
                        <img width="150" src="/products/{{ $data->image }}" >
                    </div>

                    <div class="input_deg">
                        <label>New Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input_deg">
                        <input class="btn btn-success" type="submit" value="Update Product">
                    </div>
                </form>
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
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