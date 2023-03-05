
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <style>
    .center{
        margin: auto;
        width: 75%;
        border:2px solid white;
        text-align: center;
        margin-top: 40px;
    }
    .font_size{
        text-align: center;
        font-size: 30px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }
    .img_size{
             width: 100px;
             height: 100px;
    }
    .th_color{
        background: blue;
    }
    .th_deg{
        padding: 15px;
    }
    </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
                </div>
                  @endif
<h1 class="font_size">All Product </h1>
<table class="center">
    <tr class="th_color">
        <th class="th_deg">Prodct Title</th>
        <th class="th_deg">Description</th>
        <th class="th_deg">Quantity</th>
        <th class="th_deg">Category</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Discount Price</th>
        <th class="th_deg">Product Image</th>
        <th class="th_deg">Delete</th>
        <th class="th_deg">Edit</th>
    </tr>
    @foreach ($data as $product)
    <tr>
        <td>{{ $product->title }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->discount_price }}</td>
        <td><img class="img_size" src="product/{{ $product->image }}"></td>
        <td><a href="{{ url('/delete_product', $product->id ) }}" class="btn btn-danger">Delete</a></td>
        <td><a href="{{ url('/update_product', $product->id ) }}" class="btn btn-success">Edit</a></td>
    </tr>
    @endforeach
</table>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>