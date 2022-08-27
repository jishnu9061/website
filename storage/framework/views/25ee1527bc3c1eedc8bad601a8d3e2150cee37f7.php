
<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    


    </head>

    <body>
        <div class="container">
            <h3 class="text-center"><u><b>Supplier Details</b></u></h3>
            <br>
            <button type="button" class="btn btn-primary" style="width:15%" data-toggle="modal"
                data-target="#myModal"><b>Add Supplier</b></button>



            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header" style="background-color:#435ebe">
                            <h4 class="text-white">Add Supplier</h4>
                            <button type="button" class="close text-white" data-dismiss="modal"></i></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" action="<?php echo e(url('suppliers_save')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="supplier_name" class="form-control"
                                                placeholder="Supplier Name" required><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" id="percent" class="form-control"
                                                placeholder="Email" required><br>
                                            <input type="text" name="contact_no" id="percent" class="form-control"
                                                placeholder="Phone" required><br>
                                            <input type="text" name="mobile" id="percent" class="form-control"
                                                placeholder="Mobile No" required><br>
                                            <input type="text" name="fax" id="percent" class="form-control"
                                                placeholder="Fax"><br>
                                            <textarea class="form-control z-depth-1" name="address" id="exampleFormControlTextarea6" rows="3"
                                                placeholder="Address" required></textarea>

                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="city" id="percent" class="form-control"
                                                placeholder="City"><br>
                                            <input type="text" name="state" id="percent" class="form-control"
                                                placeholder="State"><br>
                                            <input type="text" name="country" id="percent" class="form-control"
                                                placeholder="Country"><br>
                                            
                                            <input type="text" name="postal_code" class="form-control"
                                                placeholder="Postal Code"><br>
                                            <textarea class="form-control z-depth-1" name="supplier_details" id="exampleFormControlTextarea6" rows="3"
                                                placeholder="Details"></textarea><br>


                                        </div>
                                    </div>

                            </div>
                            <div class="container">

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" style="background-color:#435ebe;width:20%;"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#435ebe;width:20%;">Save</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <table class="table table-hover" id="allsupplier">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Supplier</th>
                            <th class="text-center">Contact</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Payment Details</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="data">
                                <td scope="row" class="text-center"><?php echo e($data->id); ?></td>
                                <td scope="row" class="text-center" id="sup_name_x"><?php echo e($data->supplier_name); ?></td>
                                <td scope="row"class="text-center" id="supplier_mobile"><?php echo e($data->mobile); ?></td>
                                <td scope="row"class="text-center"><a
                                        href="<?php echo e(url('suppliers_details' . $data->id)); ?>"><i style="color:#435ebe;"
                                            class="fa fa-eye" aria-hidden="true"></i></td>
                                <input type="hidden" value="<?php echo e($data->id); ?>" id="sup_id_hidden" class="applicate"
                                    name="supplier_id_hidden">
                                <td class="text-center"><a href="<?php echo e(url('upload_suppliers' . $data->id)); ?>"
                                        class="edits" data-toggle="modal" id="sup_edit_supplier" data-bs-toggle="modal"
                                        data-bs-target="#edit"><i class="fas fa-edit" style="color:#435ebe;"></i></a>
                                </td>
                                <td class="text-center"><a onClick="return myFunction();"
                                        href="<?php echo e(url('delete_suppliers' . $data->id)); ?>" style="color:#435ebe;"><i
                                            class="fas fa-trash-alt"></i></a></td>
                                <td class="text-center"> <a type="button" class="btn btn-primary" style="width:50%"
                                        href="<?php echo e(url('supplier_ledger_details' . $data->id)); ?>"><b>View</b></a></td>
                                <input type="hidden" id="sup_email" value="<?php echo e($data->email); ?>">
                                <input type="hidden" id="sup_phone" value="<?php echo e($data->contact_no); ?>">
                                <input type="hidden" id="sup_mobile" value="<?php echo e($data->mobile); ?>">
                                <input type="hidden" id="sup_fax" value="<?php echo e($data->fax); ?>">
                                <input type="hidden" id="sup_address" value="<?php echo e($data->address); ?>">
                                <input type="hidden" id="sup_city" value="<?php echo e($data->city); ?>">
                                <input type="hidden" id="sup_state" value="<?php echo e($data->state); ?>">
                                <input type="hidden" id="sup_country" value="<?php echo e($data->country); ?>">
                                <input type="hidden" id="sup_postal_code" value="<?php echo e($data->zipcode); ?>">
                                <input type="hidden" id="sup_detailss" value="<?php echo e($data->details); ?>">
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                


                <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#435ebe">
                                <h4 class="text-white">Edit Supplier</h4>
                                <button type="button" class="close text-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('upload_suppliers')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="edit_name_z"
                                                    name="supplier_name" placeholder="Supplier Name"><br>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" id="edit_email"
                                                    name="email"placeholder="Email"><br>
                                                <input type="text" class="form-control" id="edit_phone"
                                                    name="phone" placeholder="Phone"><br>
                                                <input type="text" class="form-control" id="edit_mobile"
                                                    name="mobile"placeholder="Mobile"><br>
                                                <input type="text" class="form-control" id="edit_fax"
                                                    name="fax"placeholder="Fax"><br>
                                                <textarea class="form-control z-depth-1" name="address" id="edit_sup_address" rows="3" placeholder="Address"></textarea><br>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="city" id="edit_sup_city"
                                                    class="form-control" placeholder="City" required><br>
                                                <input type="text" name="state" id="edit_state"
                                                    class="form-control" placeholder="State" required><br>
                                                <input type="text" name="country" id="edit_country"
                                                    class="form-control" placeholder="Country" required><br>
                                                <input type="text" name="postal_code" class="form-control"
                                                    id="edit_postal_code" placeholder="Postal Code" required><br>
                                                <textarea class="form-control z-depth-1" name="details" id="edit_sup_details" rows="3" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control" id="supp_id123"
                                                    name="supplier_id">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control" id="editid"
                                                    name="hiddenid">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary text-white"
                                                style="width:20%;background-color:#435ebe"
                                                data-bs-dismiss="modal"">Close</button>
                                            <button type="submit" style="width:20%;background-color:#435ebe"
                                                class="btn btn-primary">Update</button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Supplier modal Edit End -->

        

        <!-- The Modal -->
        <div class="modal fade" id="myModal-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="#5e829d">
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h3 class="text-center"><u><b>Supplier Ledger Details</b></u></h3>
                        <br>
                        <table class="table  table-bordered " id="allpatients" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Purchase Date</th>
                                    <th>Order No</th>
                                    <th>Date</th>
                                    <th style="width:20%">Supplier Name</th>
                                    <th style="width:20%">Advance</th>
                                    <th>Balance</th>
                                    <th>Next Payment</th>
                                </tr>

                            </thead>
                            <tbody>


                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                style="width:90%">Back</button>
                        </div>

                        </table>
                    </div>


                </div>

                <!-- Modal footer -->
                

            </div>
        </div>
        </div>

        </div>



        </div>


        <div style="height: 50px;">

        </div>





        </div>


        <!-- Supplier modal Edit End -->

        <!-- Delete  confirmation Message -->
        <script>
            function myFunction() {
                if (!confirm("Are you sure to delete this"))
                    event.preventDefault();
            }
        </script>
        <!-- End delete confirmation message -->

        <div id="supply_ledger" class="tabcontent">
            <div style="height:20px;">

            </div>

            


            <div style="height: 50px;">

            </div>











        </div>
        <div id="issue" class="tabcontent">
            <div style="height:20px;">

            </div>






        </div>

        
        <script>
            $(document).ready(function() {
                $('.searchingBook').select2();
            });
        </script>
        

        <!-- Supplier Pagenation -->


        <!-- Delete  confirmation Message -->
        <script>
            function myFunction() {
                if (!confirm("Are you sure to delete this"))
                    event.preventDefault();
            }
        </script>
        <!-- End delete confirmation message -->

        <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <script>
            $(function() {
                $("#allsupplier").dataTable();
            })
        </script>
        

        <script>
            $(document).on('click', '#sup_edit_supplier', function() {

                var supplier_id = $(this).closest('#data').find('#sup_id_hidden').val();
                var supplier_name = $(this).closest('#data').find('#sup_name_x').text();
                var sup_email = $(this).closest('#data').find('#sup_email').val();
                var sup_phone = $(this).closest('#data').find('#sup_phone').val();
                var sup_mobile = $(this).closest('#data').find('#sup_mobile').val();
                var sup_fax = $(this).closest('#data').find('#sup_fax').val();
                var sup_address = $(this).closest('#data').find('#sup_address').val();
                var sup_city = $(this).closest('#data').find('#sup_city').val();
                var sup_state = $(this).closest('#data').find('#sup_state').val();
                var sup_country = $(this).closest('#data').find('#sup_country').val();
                var sup_postal_code = $(this).closest('#data').find('#sup_postal_code').val();
                var sup_detailss = $(this).closest('#data').find('#sup_detailss').val();

                $("#edit_name_z").val(supplier_name);
                $("#edit_email").val(sup_email);
                $("#edit_phone").val(sup_phone);
                $("#edit_mobile").val(sup_mobile);
                $("#edit_fax").val(sup_fax);
                $("#edit_sup_address").val(sup_address);
                $("#edit_sup_city").val(sup_city);
                $("#edit_state").val(sup_state);
                $("#edit_country").val(sup_country);
                $("#edit_postal_code").val(sup_postal_code);
                $("#edit_sup_details").val(sup_detailss);
                $("#supp_id123").val(supplier_id);
            });
        </script>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp-globaleyet\resources\views/store/view_suppliers.blade.php ENDPATH**/ ?>