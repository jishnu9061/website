@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Accounts</a> /
    <a href="#" style="color: #1D1D50;">Account Category</a>
</nav>
<br><br>
{{-- heading --}}
 <div class="container">
  <h4 id="hdtpa"><b>Add Account Category</b></h4>
  <br>

        {{-- <button  class="btn btn-primary "  data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default"  class="btn btn-secondary">Add Category</button> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-bs-toggle="modal" data-target="#myModal">Add Category</button>
        <br>

    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>

        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>


    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
  <thead>
    <tr class="text-center">
      <!-- <th scope="col">Sl</th> -->
      {{-- <th scope="col">Category</th> --}}
      <th scope="col">Account Category</th>
      <th scope="col">Description </th>
      <th scope="col">Action</th>
      <!-- <th scope="col">Delete</th> -->

    </tr>
  </thead>
  <tbody>
@php
$no=1;
@endphp
 @foreach($ledgeraccount_subcategories as $ledcat)
      <tr class="text-center product_data data">
          <!-- <td id="name">{{$no++ }}</td> -->
          {{-- <td id="expanse-name">{{ $ledcat->ledgeraccount_categories }}</td> --}}
          <td id="expanse-name">{{ $ledcat->ledgeraccount_subcategories }}</td>
          <td id="expanse_status">{{ $ledcat->ledgeraccount_subcategories_desc }}</td>
          <input type="hidden" id="id" value="{{ $ledcat->id }}" name="">
               <td>
    @if($ledcat->accountssub_update_privilage == 0)
                <a href="#" class="edits"    data-toggle="modal" id="amb_edit" data-bs-toggle="modal"
                   data-bs-target="#edit"><i style="color:rgb(13, 1, 56);" class="fas fa-edit" onclick="values_edit(`{{$ledcat->id}}`,`{{$ledcat->cat_id}}`,`{{$ledcat->ledgeraccount_subcategories}}`,`{{$ledcat->ledgeraccount_subcategories_desc}}`);" ></i></a>
                   @endif
               <span class="m-2"></span>
    @if($ledcat->accountssub_update_privilage == 0)
                    <a onclick="return confirm('Are you sure ?');" href="{{ url('delete_ledger_accounts_subcategories/'.$ledcat->id) }}"><i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></a>
                    @endif
                </td>
      </tr>
 @endforeach



  </tbody>
</table>
      </div>
</div>
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->



  {{-- <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h2 class="text-centre"><b>Add Account Category</b></h2>



     <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
         <i data-feather="x"></i>
          </button>
             </div>
              <form action="{{url('save_ledger_acounts_subcategories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">

                                            {{-- <div class="form-group mb-3">
                                                <label> Category </label>
                                               <select class="form-control" name="ledgeraccount_categories"  required>
                                                   <option value=""> Select</option>
                                                   @foreach($categories as $cat):
                                                    <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                                                   @endforeach;

                                               </select>
                                            </div> --}}

                        {{-- <div class="form-group mb-3">
                            <label>Account Category </label>
			                <input type="text" class="form-control" name="ledgeraccount_subcategories" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description </label>
			                <textarea  class="form-control" name="ledgeraccount_subcategories_desc">

                            </textarea>
                        </div>



                        </div>


                                    <div class="modal-footer" style="background-color:#d3e0ed;">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                    </div>



                                </div>
                            </form>
                        </div> --}}
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">

                                      <h2 class="text-centre"><b>Add Category</b></h2>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ url('save_ledger_acounts_subcategories') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Account Category </label>
                                                   <select class="form-control" name="ledgeraccount_categories"  required>
                                                       <option value=""> Select</option>
                                                       @foreach($categories as $cat):
                                                        <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                                                       @endforeach;

                                                   </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Description </label>
                                                    <textarea class="form-control" name="ledgeraccount_categories_desc">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer" style="background-color:#d3e0ed;">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                  </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>






                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">



                                    <h5 class="modal-title bb" id="myModalLabel1">Edit Groups</h5>



                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('update_ledger_acount_subcategories')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                        <div class="modal-body">

                                            <div class="card-body">

                                               {{-- <div class="form-group mb-3">
                                                   <label> Category </label>
                                                  <select class="form-control" name="ledgeraccount_categories" id="sub-cat"  required>
                                                      <option value=""> Select</option>
                                                      @foreach($categories as $cat):
                                                       <option value="{{ $cat->id }}" > {{ $cat->ledgeraccount_categories }}</option>
                                                      @endforeach;

                                                  </select>
                                               </div> --}}

                           <div class="form-group mb-3">
                               <label>Group Name </label>
                               <input type="text" class="form-control" name="ledgeraccount_subcategories" id="subcat-name" placeholder="" required>
                           </div>
                           <div class="form-group mb-3">
                               <label>Description </label>
                               <textarea  class="form-control" name="ledgeraccount_subcategories_desc" id="subcat-desc">

                               </textarea>
                           </div>


                           <input type="hidden" name="sub_cat_id" id="sub-cat-id" >
                           </div>
                        </div>
                        </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Update</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

                        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
  </script>

  <script>
    function values_edit(val1,val2,val3,val4){

               // $('#sub-cat').val(val2).change();
                $("#sub-cat-id").val(val1);
                $("#subcat-name").val(val3);
                $("#subcat-desc").val(val4);

      };
  </script>

@endsection



