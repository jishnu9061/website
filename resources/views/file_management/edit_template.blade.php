@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
    </head>
    <body>
  
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Update Template Category </u></b></span></button><br>
            
     </div>
            <br>
            <div class="row">
        <div class="col-md-12 ">
        <form method="post"action=""id="form">  
          <input type="hidden" name="id" value="">
        
            @csrf
            <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Document Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="doc_type" id="cars">
                                <option>---select---</option>
                                                            <option>doc_type 2</option>
                                                            <option>doc_type 3</option>
                                                            <option>doc_type 1</option>
                                                            <option>doc_type 4</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Template Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="title" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Template To Upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="file" class="form-control" name="to_upload" id="confirm_password" required>
                            </div>
                        </div>
                    </div>







                </div>
                <br>

                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;" onclick="history.back()">Cancel</button>
                    </div>
                </div>
        </div>



    </div>


</form>
</div>
</div>
</div>
</div>
</body>
</html>
@endsection