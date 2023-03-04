
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
    .div_center{
      text-align: center;
      padding-top: 40px;
    }
    .h2_font{
       font-size: 40px;
       padding-bottom: 40px;
    }
    .input_color{
      color: black
    }
    </style>
  </head>
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
                <h2 class="h2_font">Add Category</h2>
                <form action="{{ url('add_category') }}" method="post">
                  @csrf
                  <input class="input_color" type="text" name="category" placeholder="write category name">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
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