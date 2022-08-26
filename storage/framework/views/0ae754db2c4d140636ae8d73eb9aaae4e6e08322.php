
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="container">
    <div class="py-5 text-center">
        <?php if(Session::has('staffregistered')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('staffregistered')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::has('appointed')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('appointed')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::has('noappointmentstoday')): ?>
            <div class="alert alert-dark" role="alert">
                <?php echo e(Session::get('noappointmentstoday')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="row">
  	    <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
            <h6>Patient Id:<?php echo e($appointments[0]->patientid); ?></h6>
            <h6>Patient Name:<?php echo e($appointments[0]->firstname); ?></h6>
            <h6>Address:<?php echo e($appointments[0]->address); ?></h6>
            <h6>Age/Sex:<?php echo e($appointments[0]->age); ?>Y/<?php echo e($appointments[0]->gender); ?></h6>
            
        </div>
  	    <div class="col-md-5 col-lg-5" style="padding-top: 6px;">
            <h6><?php echo e(date('d-m-Y')); ?></h6>
            <h6 id='ct6'></h6>
  	    </div>
  	    <div class="col-md-3 col-lg-3">
  		    <h6>Token No</h6>
                <button class="btn btn-secondary">
  			        <?php echo e($appointments[0]->token); ?>

  		        </button>
  	    </div>
    </div>
</div>
<div class="spacer" style="padding: 20px;">
</div>
<hr class="mb-4">
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="<?php echo e(url('consult')); ?>" enctype="multipart/form-data">
	            <?php echo csrf_field(); ?>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="history-tab" data-bs-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="true">History</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Prescription</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lab</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Procedure</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="surgery-tab" data-bs-toggle="tab" href="#surgery" role="tab" aria-controls="surgery" aria-selected="false">Reference</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                            <button type="button" class="btn-primary btn-sm"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addhistory" style="float:right; width:150px;">Add History</button>
                            <div class="container">
                                <table class="table table-striped table-bordered" id="mydatatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">History</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Added By</th>
                                            <th scope="col">Document</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $view_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $his): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="table table-hover product_data" id="pat_his"> 
                                                <td id="history_date"><?php echo e(date('d-m-Y',strtotime($his->history_date))); ?></td>
                                                <td id="history_detailes"><?php echo e($his->history_detailes); ?></td>
                                                <td id="department"><?php echo e($his->history_dept); ?></td>
                                                <td id="added_by"><?php echo e($his->history_addedby); ?></td>
                                                <td id="history_doc"><img src="<?php echo e(asset('/images/history/'.$his->history_doc)); ?>" style="width:20%; height:25%;"/></td>
                                                <input type="hidden" id="history_id" value="<?php echo e($his->history_id); ?>" name="history_id">
                                                <td  scope="row"class="text-center"><a href="<?php echo e(url('edit_history'.$his->history_id)); ?>"><i  style="color:#435ebe;" class="fa fa-edit" aria-hidden="true"></i></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <button type="button" class="btn-primary btn-sm"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#myModal" style="float:right; width:150px;">Add Prescription</button>
                            <div class="container">
                                <table class="table table-striped table-bordered" id="mydatatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Consultant</th>
                                            <th scope="col">Sub Department</th>
                                            <th scope="col">Floor</th>
                                            <th scope="col">Prescribed Medicines</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $presc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="table table-hover">
                                                
                                                <input type="hidden" name="presc_id" id="presc_id" value="<?php echo e($prescription->id); ?>">
                                                <td><?php echo e(date('d-m-Y H:i:s',strtotime($prescription->presc_date))); ?></td>
                                                <td><?php echo e($prescription->presc_department); ?></td>
                                                <td><?php echo e($prescription->name); ?></td>
                                                <td><?php echo e($prescription->phar_sub_deptname); ?></td>
                                                <td><?php echo e($prescription->floor_name); ?></td>
                                                <td><a href="<?php echo e(url('view_prescription'.$prescription->id)); ?>"><i class="fas fa-eye"></i></a></td>
                                                <td><a href="<?php echo e(url('edit_prescription'.$prescription->id)); ?>"><i class="fas fa-edit"></i></a></td>
                                                <td><a onclick="return confirm('Are you sure ?');" href="<?php echo e(url('delete_prescription_med'.$prescription->id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            
                            <button type="button" class="btn-primary btn-sm ml-2"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#combomodal" style="float:right; width:150px;margin-left:10px;">Combo Test</button>
                            <button type="button" class="btn-primary btn-sm"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#testmodal" style="float:right; width:150px;">Test</button>
                            <br>
                            <div>
                                
                                    <table class="table table-striped table-bordered" id="mydatatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Consultant</th>
                                            <th scope="col">Lab</th>
                                            <th scope="col">Clinical Observation</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php $no=1;?>
                                            <?php $__currentLoopData = $labdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="table table-hover">
                                                    <td><?php echo $no++;?></td>
                                                    <td><?php echo e(date('d-m-Y H:i:s',strtotime($detail->date))); ?></td>
                                                    <td><?php echo e($detail->department); ?></td>
                                                    <td><?php echo e($detail->added_by); ?></td>
                                                    <td><?php echo e($detail->lab_deptname); ?></td>
                                                    <td><a href="<?php echo e(url('view_lab_description'.'/'.$detail->patientlab_id)); ?>"><i class="fa fa-eye"></i></a></td>
                                                    <td><a href="<?php echo e(url('edit_labtest/'.$detail->patientlab_id )); ?>"><i class="fa fa-edit"></i></a></td>
                                                    <td><a onClick="return myFunction();" href="<?php echo e(url('delete_labtest/'.$detail->patientlab_id)); ?>"><i class="fa fa-trash-alt"></i></a></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <button type="button" class="btn-primary btn-sm" style="float:right; width:150px;"><a class="text-white" href="<?php echo e(url('add_procedure/'.$appointments[0]->patientid)); ?>">Add</a></button>
                            <div>
                                    <table class="table table-hover" id="allpatients" style="margin-top: 40px;" id="mydatatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Start Time</th>
                                                <th scope="col">End Time</th>
                                                <th scope="col">Surgery</th>
                                                <th scope="col">Operation Theatre</th>
                                                
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;?>
                                            <?php $__currentLoopData = $surgery_dtl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <input type="hidden" id="opt_id" name="opt_id" value=<?php echo e($dtl->id); ?>>
                                                <td><?php echo e(date('d-m-Y',strtotime($dtl->surgery_date))); ?></td>
                                                <td><?php echo e($dtl->start_time); ?></td>
                                                <td><?php echo e($dtl->end_time); ?></td>
                                                <td><?php echo e($dtl->surgery_name); ?><input type="hidden" id="surgery_surgeryid" value="<?php echo e($dtl->surgery_surgeryid); ?>"></td>
                                                <td><?php echo e($dtl->theatre_name); ?></td>
                                                
                                                <td><a href="#" id="operationt_edit" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#edit_surgery1" onclick ="editdetails('<?php echo e($dtl->id); ?>','<?php echo e($dtl->theatre_name); ?>','<?php echo e($dtl->surgery_name); ?>','<?php echo e($dtl->surgery_surgeryid); ?>','<?php echo e($dtl->surgery_date); ?>','<?php echo e($dtl->start_time); ?>','<?php echo e($dtl->end_time); ?>')"><i class="fas fa-edit"></i></a></td>
                                                <td><a href="<?php echo e(url('/surgery_delete'.$dtl->id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                                            </tr> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="surgery" role="tabpanel" aria-labelledby="surgery-tab">
                                <button type="button" class="btn-primary btn-sm"  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addsurgery" style="float:right; width:150px;">Add Surgery</button>
                                <div>
                                    <table class="table table-striped table-bordered" id="mydatatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Surgery</th>
                                                <th scope="col">Doctor Name</th>
                                                <th scope="col">Department</th>
                                                <th scop="col">Document</th>
                                                <th scop="col">Edit</th>
                                                <th scop="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="spacer" style="padding: 20px;">
                        </div>
                        <?php echo e(Session::forget('staffregistered')); ?>

                        <?php echo e(Session::forget('noappointmentstoday')); ?>

                        <?php echo e(Session::forget('appointed')); ?>

                        
                    </div>
        </form>
    </div>
    <div class="container lst">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
</div>
<!--  History Add Modal -->
<div class="modal fade text-left" id="addhistory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bb" id="myModalLabel1"> </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="history-tab" data-bs-toggle="tab" href="#fixd" role="tab" aria-controls="home" aria-selected="true">Add History</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="fixd" role="tabpanel" aria-labelledby="history-tab">
                    <form action="<?php echo e(url('addhistory')); ?>" method="post" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <br>
                                        <label>Date</label>
                                            <input type="hidden" name="history_appid" id="history_appid" value="<?php echo e($appointments[0]->id); ?>">
                                            <input type="date" value="<?php echo e(date('Y-m-d')); ?>" class="form-control" name="history_date" id="history_date">
                                        <label>History</label>
                                            <textarea value="" id="history" class="form-control" name="history" required></textarea>
                                        <label>Upload Documents</label>
                                            <input type="file" value="" id="image" class="form-control " name="image">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Prescription Add Modal -->
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#5e829d">
        <h4 class="text-white"><b>Add Prescription</b></h4></div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo e(url('add_prescription')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <?php
                        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                    ?>
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="">Date</label>
                            
                            <input type="date-time" name="prescription_date" id="prescription_date" value="<?php echo date('d-m-Y');echo " ";echo date ('H');echo ':';echo date('i');echo ':';echo date('s')?>" class="form-control">
                            <input type="hidden" name="prescription_appid" id="prescription_appid" value="<?php echo e($appointments[0]->id); ?>">
                        </div>
                        
                        
                    </div>
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="">Added By</label>
                                <select class="form-control" aria-label="Default select example" name="prescription_addedby" id="prescription_addedby" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key2->id); ?>" <?php echo e(($key2->id==Auth::user()->id) ? "selected" : ""); ?> ><?php echo e($key2->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                        <div class="col-sm">
                            <label for="">Departments</label>
                                <select class="form-control" aria-label="Default select example" name="prescription_dept" id="prescription_dept" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row1->departments); ?>" <?php echo e(($row1->departments==Auth::user()->departments) ? "selected" : ""); ?> ><?php echo e($row1->departments); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <h4 style="text-align:center"><b>Medicines Details</b></h4><br>
                            <table class="table table-bordered table-hover order-list" id="tab_logic">
                                <tr>
                                    <td style="width:30%"><b>Medicines</b></td>
                                    <td style="width:20%"><b>Dosage</b></td>
                                    <td style="width:10%"><b>Instruction</b></td>
                                    <td style="width:20%"><b>Sub Pharmacy</b></td>
                                    <td style="width:20%"><b>Floor</b></td>
                                    <td><input type="button" class="add_Row adRow" style="width:100%" id="add_Row" value="Add Row"></td>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-select"  aria-label="select example" name="item_name[]" id="item_name">
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->Item_name); ?>--<?php echo e($row->item_group); ?>--<?php echo e($row->category_name); ?>(<?php echo e($row->quantity); ?>)</option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="dosage[]" id="dosage_" class="form-control text-right calculate">
                                        </td>
                                        <td>
                                            <input type="text" name="instruction[]" id="instruction_" class="form-control text-right calculate">
                                        </td>
                                        <td>
                                            <select class="form-control" aria-label="Default select example" name="sub_dept" id="sub_dept">
                                                <option value="0">Select</option>
                                                    <?php $__currentLoopData = $sub_dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_dept1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option class="dropdown-item" value="<?php echo e($sub_dept1->phar_deptid); ?>"><?php echo e($sub_dept1->phar_sub_deptname); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="floor" name="floor">
                                                <option value='0'>Select</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="add-Row ibtnDel btn btn-primary text-white " style="background-color:#5e829d;width:100%;color:white;">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" id="edit_id" name="medicine_id">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block"></span>Close</button>
                            <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                        </div>
            </div>
            <div class="container">



            </div>
      </div>


    </form>

    </div>
  </div>
</div>
</div>
<!--  Surgery Add Modal -->
<div class="modal fade" id="addsurgery">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color:#5e829d">
                <h4 class="text-white"><b>Add Surgery</b></h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="<?php echo e(url('add_surgery')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label>Date</label>
                            <input type="date" value="" class="form-control" id="surgery_date" name="surgery_date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Surgery Name</label>
                            <input type="text" value="" id="surgery_name" class="form-control" name="surgery_name" required>
                        </div>
                        <td>
                            <label>Department</label>
                            <select class="form-select" aria-label="Default select example" name="surgery_dept" id="surgery_dept">
                                <option value="">Select</option>

                            </select>
                        </td>
                        <div class="form-group mb-3">
                            <label>Doctor Name</label>
                            <input type="text" value="" id="dr_name" class="form-control " name="dr_name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Upload Documents</label>
                            <input type="file" value="" id="document" class="form-control " name="document">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end Surgery Add Modal -->
<!--edit surgery -->
<div class="modal fade" id="edit_surgery">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color:#5e829d">
                <h4 class="text-white"><b>Edit Surgery</b></h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="<?php echo e(url('edit_surgery')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label>Date</label>
                            <input type="date" value="" class="form-control" id="sur_date" name="sur_date" required>
                            <input type="hidden" name="sur_id" id="sur_id">
                        </div>
                        <div class="form-group mb-3">
                            <label>Surgery Name</label>
                            <input type="text" value="" id="sur_name" class="form-control" name="sur_name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Doctor Name</label>
                            <input type="text" value="" id="sur_dr" class="form-control " name="sur_dr" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Upload Documents</label>
                            <input type="file" value="" id="sur_patient_doc" class="form-control " name="sur_patient_doc">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"style="width: 25%" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="testmodal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#5e829d">
        <h4 class="text-white"><b>Lab Test</b></h4></div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo e(url('add_labtest')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-sm">
                        <div class="col-sm">
                            <?php
                             date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                            ?>
                            <label for="">Date</label>
                            <input type="hidden" name="test_type" value="1">
                            <input type="datetime-local" class="form-control" name="test_date" id="test_date" value="<?php echo date('Y-m-d');echo 'T';echo date ('H');echo ':';echo date('i');echo ':';echo date('s')?>"><br>
                            <input type="hidden" name="test_id" id="test_id" value="<?php echo e($appointments[0]->patientid); ?>">
                        </div>
                        <div class="col-sm">
                            <label for="">Lab Name</label>
                            <select class="form-select" aria-label="Default select example" name="lab_name" id="lab_name" style="">
                                <option value="">Select</option>
                                    <?php $__currentLoopData = $lab_dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dept1->lab_deptid); ?>"><?php echo e($dept1->lab_deptname); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="">Added By</label>
                                <select class="form-control" aria-label="Default select example" name="test_addedby" id="test_addedby" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <option value="<?php echo e($key2->name); ?>" <?php echo e(($key2->id==Auth::user()->id) ? "selected" : ""); ?> ><?php echo e($key2->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select><br>
                        </div>
                        <div class="col-sm">
                            <label for="">Departments</label>
                                <select class="form-control" aria-label="Default select example" name="test_added_dept" id="test_added_dept" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key1->departments); ?>" <?php echo e(($key1->departments==Auth::user()->departments) ? "selected" : ""); ?> ><?php echo e($key1->departments); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                          <table class="table table-borderless  order-list1" id="tab_logic">
                                    
                                    <tbody>
                                        <tr>
                                            <td style="width:auto">
                                                <select class="form-select select_groups product"data-row-id="row_3" id="product_detailes" name="testname[]"  style="width:100%;">
                                            <option selected>Select</option>
                                            <?php foreach ($labtests as $key):?>
                                           <option value="<?php echo $key->id ?>"><?php echo $key->name;?></option>
                                                                       <?php endforeach;?>
                                                                   </select>
                                                       </td>


                                                       <td> <button type="button" class="add_Row adRow btn btn-secondary" id="add_labRow">Add</button></td>
                                                   </tr>
                                    </tbody>
                          </table>
                    </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block"></span>Close</button>
                            <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                        </div>
            </div>
            
      </div>


    </form>

    </div>
  </div>
</div>
<!--  end Test Modal -->
<!-- Test Modal -->
<div class="modal fade" id="combomodal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#5e829d">
        <h4 class="text-white"><b>Combo Test</b></h4></div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo e(url('add_labtest')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-sm">
                        <div class="col-sm">
                            <?php
                             date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                            ?>
                            <label for="">Date</label>
                            <input type="hidden" name="test_type" value="2">
                            <input type="datetime-local" class="form-control" name="test_date" id="test_date" value="<?php echo date('Y-m-d');echo 'T';echo date ('H');echo ':';echo date('i');echo ':';echo date('s')?>"><br>
                            <input type="hidden" name="test_id" id="test_id" value="<?php echo e($appointments[0]->patientid); ?>">
                        </div>
                        <div class="col-sm">
                            <label for="">Lab Name</label>
                            <select class="form-select" aria-label="Default select example" name="lab_name" id="lab_name" style="">                                <option value="">Select</option>
                                    <?php $__currentLoopData = $lab_dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dept1->lab_deptid); ?>"><?php echo e($dept1->lab_deptname); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="">Added By</label>
                                <select class="form-control" aria-label="Default select example" name="test_addedby" id="test_addedby" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <option value="<?php echo e($key2->name); ?>" <?php echo e(($key2->id==Auth::user()->id) ? "selected" : ""); ?> ><?php echo e($key2->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select><br>
                        </div>
                        <div class="col-sm">
                            <label for="">Departments</label>
                                <select class="form-control" aria-label="Default select example" name="test_added_dept" id="test_added_dept" style="pointer-events:none">
                                    <option value="">Select</option>
                                        <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key1->departments); ?>" <?php echo e(($key1->departments==Auth::user()->departments) ? "selected" : ""); ?> ><?php echo e($key1->departments); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-borderless order-list2" id="tab_logic">
                            
                                <tbody>
                                    <tr>
                             <td style="width:auto">
                              <select class="form-select select_groups product"data-row-id="row_3" id="product_detailes" name="profilename[]" style="width:100%;">
                                  <option>Select</option>
                                  <?php foreach ($labprofiles as $key):?>
                                      <option value="<?php echo $key->id ?>"><?php echo $key->name;?></option>
                                  <?php endforeach;?>
                              </select>
                                        </td>


                                        <td>
                                            <button type="button" class="add_Row adRow btn btn-secondary" id="add_Row_again">Add</button>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block"></span>Close</button>
                            <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Save</button>
                        </div>
            </div>
      </div>


    </form>

    </div>
  </div>
</div>
<!--  end Test Modal -->
<div id="edit_surgery1" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-event" action="<?php echo e(url('edit_ot_patient')); ?>" method="post">
                <?php echo csrf_field(); ?> 
                <div class="modal-body" id="slotdata">
                    <div class="modal-header" style="background-color:#5e829d">
                        <h4 style="text-align:center;" class="text-white"><b>Edit Operation Theatre Booking</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="hidden" name="ot_id" id="ot_id">
                                    <input type="date" id="enamez" class="form-control" name="enamez">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <?php
                                    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                  ?>
                                 <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="time" name="sur_starttime" id="sur_starttime" class="form-control">
                                 </div>
                            </div>
                            <div class="col-md-3 col-lg-3"> 
                                <?php
                                    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                  ?>
                                 <div class="form-group">
                                    <label>End Time</label>
                                    <input type="time" name="end_surtime" id="end_surtime" class="form-control">
                                 </div>
                            </div>
                        </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Operation Theatre </label>
                                <input type="text" id="theatre_id" name="theatre_id" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Surgery name</label>
                            <select class="form-select" aria-label="Default select example" name="surge_name" id="surg_name">
                                <option value="">Select</option>
                              <?php $__currentLoopData = $surgery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($key->id); ?>"><?php echo e($key->surgery_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                        </div>
                    </div> 
                    
                    </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal"style="width:20%;background-color:#5e829d" data-dismiss="modal"> <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"></span>Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color:#5e829d;width:20%;">Update</button>
                </div>
            
                </div>
            </form>
        </div>
    </div>
    </div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function(){

          var lsthmtl = $(".clone").html();

          $(".increment").after(lsthmtl);

      });

      $("body").on("click",".btn-danger",function(){

          $(this).parents(".hdtuto control-group lst").remove();

      });

    });

</script>
<div class="container">

            </div>
<script>function display_ct6() {
var x = new DateTime;
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getDate()  +"/" + x.getMonth() + 1+"/" + x.getFullYear();
// var x1=new Date();
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>


<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>

<!-- Delete  confirmation Message -->
  <script>
    function myFunction(){
        if(!confirm("Are you sure to delete this"))
        event.preventDefault();
    }
</script>
<!-- End delete confirmation message -->

<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // add new product row on invoice
        var cloned = $('#tab_logic tr:last').clone();
        $("#add_Row").click(function (e) {
            e.preventDefault();
            cloned.clone().appendTo('#tab_logic');
        });
        $("table.order-list").on("click", ".ibtnDel", function(_event) {
            $(this).closest("tr").remove();
            counter -= 1
          });
});
</script>
<script>
    $(document).ready(function() {
      $(".select_group").select2();
      // $("#description").wysihtml5();
    });

// delete function
$("table.order-list").on("click", ".ibtnDel", function(_event) {
    $(this).closest("tr").remove();
    counter -= 1
  });

</script>

<!-- Table add row -->
<script type="text/javascript">
    $(document).ready(function() {
    var counter = 0;
    $("#add_labRow").on("click", function() {
      var newRow = $("<tr>");
      var cols = "";

      cols +='<td><select name="testname[]" class="form-control select2" style="width:100%;><option value="">Select</option> <?php foreach($labtests as $row):?><option value="<?php echo $row->id ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'

      cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
      newRow.append(cols);

      var defVal = $("select[name=acctname]").find(":selected").val();
      if (defVal) {
        $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
      }
      $("table.order-list1").append(newRow);
      setValCashVal('accountName'.concat(counter));
      bindScript();
      counter++;
    });

    // delete function
    $("table.order-list1").on("click", ".ibtnDel", function(_event) {
      $(this).closest("tr").remove();
      counter -= 1
    });

  });



  </script>
  <script type="text/javascript">
    $(document).ready(function() {
    var counter = 0;

    $("#add_Row_again").on("click", function() {

      var newRow = $("<tr>");
      var cols = "";

      cols +='<td><select name="profilename[]" class="form-control select2" style="width:100%;><option value="">Select</option> <?php foreach($labprofiles as $row):?><option value="<?php echo $row->id;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'

      cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
      newRow.append(cols);

      var defVal = $("select[name=acctname]").find(":selected").val();
      if (defVal) {
        $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
      }
      $("table.order-list2").append(newRow);
      setValCashVal('accountName'.concat(counter));
      bindScript();
      counter++;
    });

    // delete function
    $("table.order-list2").on("click", ".ibtnDel", function(_event) {
      $(this).closest("tr").remove();
      counter -= 1
    });

  });



  </script>
  <!-- End Table add row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $('#mydatatable').dataTable({
        colReorder: true,
        order: [],
        pageLength: 0,
        lengthMenu: [10,20, 40, 60, 80, 90, 100],
    });
</script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })

    $(document).on('click','#edit_item',function(){
var id = $(this).closest('#pat_his').find('#history_id').val();
   var date = $(this).closest('#pat_his').find('#history_date').text();
   var detailes= $(this).closest('#pat_his').find('#history_detailes').text();
   var doc = $(this).closest('#pat_his').find('#history_doc').text();
    $("#history_date1").val(date);
    $("#history1").val(detailes);
    $('#history_doc1').val(doc);
   $("#history_id1").val(id);



  });
  </script>
   <script>
    function values_edit(val1,val2,val3,val4,val5){
        $('#tests_id').val(val1);
        // $("#test1").val(val2);
       $('#dr_name').val(val3);
       $('#dr_depmt').val(val4);
       $('#testlab_name').val(val5).change();

      };
</script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })

    $(document).on('click','#surgery_edit',function(){
    //var itemvalue = $(this).val();
   var s_date = $(this).closest('#data1').find('#s_date').text();
   var s_name = $(this).closest('#data1').find('#s_name').text();
   var s_dr= $(this).closest('#data1').find('#s_dr').text();
   var p_doc = $(this).closest('#data1').find('#p_doc').text();
   var s_id = $(this).closest('#data1').find('#s_id').val();
   $("#sur_date").val(s_date);
    $("#sur_name").val(s_name);
    $("#sur_dr").val(s_dr);
    $('#sur_patient_doc').val(p_doc);
    $("#sur_id").val(s_id);


  });


  </script>
<script type='text/javascript'>
    $(document).ready(function(){
        // Department Change
        $('#sub_dept').change(function(){
            // Department id
            var id = $(this).val();
            // Empty the dropdown
            $('#floor').find('option').not(':first').remove();
            // AJAX request
            $.ajax({
                    url: 'get_subdept_floor'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response)
                    {
                        // console.log(response);
                        var len = 0;
                        if(response['data'] != null)
                        {
                            len = response['data'].length;
                        }
                        if(len > 0)
                        {
                            // Read data and create <option>
                            for(var i=0; i<len; i++)
                            {
                                var floor_id = response['data'][i].floor_id;
                                var floor_name = response['data'][i].floor_name;
                                var option = "<option value='"+floor_id+"'>"+floor_name+"</option>";
                                // $('#floor').append("<option value=''>Select</option>");
                                $("#floor").append(option);

                            }
                        }
                    }
                });
        });
    });
</script>
<script>
    function editdetails(val1,val2,val3,val4,val5,val6,val7)
    {
        $('#ot_id').val(val1);
        // console.log(val1);
        $('#theatre_id').val(val2);
        $('#surg_name').val(val4).change();
        $('#enamez').val(val5);
        $('#sur_starttime').val(val6);
        $('#end_surtime').val(val7);
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/Doctor/consultation.blade.php ENDPATH**/ ?>