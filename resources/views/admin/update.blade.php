<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/public') }}">
    @include('admin.css')
</head>
<style>
    .div_center {
        text-align: center;
        padding-top: 40px;
    }

    .font_size {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .text_color {
        color: black;
        padding-bottom: 20px;
    }

    label {
        display: inline-block;
        width: 200px;
    }

    .div_design {
        padding-bottom: 15px;
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
                    <div class="div_center">
                        <h1 class="font_size">Edit Product</h1>
                        <form action="{{ url('/update_product_confirm',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="div_design">
                            <label>Product Title:</label>
                            <input class="text_color" type="text" name="title" placeholder="Write A Title" required value="{{ $data->title }}">
                        </div>
                        <div class="div_design">
                            <label>Product Description:</label>
                            <input class="text_color" type="text" name="description"
                                placeholder="Write A Description" required value="{{ $data->description }}">
                        </div>
                        <div class="div_design">
                            <label>Product Price:</label>
                            <input class="text_color" type="number" name="price" placeholder="Write A Price" required value="{{ $data->price }}">
                        </div>
                        <div class="div_design">
                            <label>Discount Price:</label>
                            <input class="text_color" type="number" name="discount" placeholder="Write A Title" required value="{{ $data->discount_price }}">
                        </div>
                        <div class="div_design">
                            <label>Product Quantity:</label>
                            <input class="text_color" type="number" name="quantity" min="0"
                                placeholder="Write A Product Quantity" required value="{{ $data->quantity }}">
                        </div>
                        <div class="div_design">
                            <label>Product Category:</label>
                           
                            <select class="text_color" name="category" required>
                                <option value="{{ $data->category }}" selected>{{ $data->category }}</option>
                                @foreach($category as $cat)
                                <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                           
                        </div>
                        <div class="div_design">
                            <label>Product Current Image Here :</label>
                            <img style="margin:auto" height="100px" width="100px" src="/product/{{ $data->image }}">
                        </div>
                        <div class="div_design">
                            <label>Product Image Here :</label>
                            <input class="text_color" type="file" name="image" min="0"
                                placeholder="Write A Product Quantity" required value="{{ $data->image }}">
                        </div>
                        <div class="div_design">
                            <input type="submit" value="Update Product" class="btn btn-primary">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

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
