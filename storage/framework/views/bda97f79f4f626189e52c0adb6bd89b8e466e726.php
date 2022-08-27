
<?php $__env->startSection('content'); ?>
    <?php if(Session::has('roomadded')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('roomadded')); ?>

        </div>
    <?php endif; ?>
    <?php if(Session::has('roomdeleted')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('roomdeleted')); ?>

        </div>
    <?php endif; ?>
    <?php if(Session::has('roomupdated')): ?>
        <div class="alert alert-dark" role="alert">
            <?php echo e(Session::get('roomupdated')); ?>

        </div>
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <div class="container">
	    <br>
        <div class="col-md-2">
            <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal" data-bs-target="#default" class="btn btn-block btn-secondary">Add</button>
        </div>
        <section class="section">
            <table class="table table-striped table-bordered" id="mydatatable">
                <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $roomcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table table-hover" id="data">
                            <td id="roomidx"><?php echo e($room->id); ?></td>
                            <td id="roomnamex"><?php echo e($room->category); ?></td>
                            <input type="hidden" id="amb_id" value="<?php echo e($room->id); ?>" name="">
                            <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
                            <td><a href="<?php echo e(url('delroomtypes'.$room->id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </section>
    </div>
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title bb" id="myModalLabel1">Add Room Types </h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?php echo e(url('saveroomstypes')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Room Type</label>
			                        <input type="text" class="form-control" name="roomcat" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="width:25%" >Save</button>
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title bb" id="myModalLabel1">edit </h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?php echo e(url('update_roomstype')); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <input type="hidden" name="m_room_id" id="m_id">
                                    <label>Room Type</label>
			                        <input type="text" class="form-control" name="m_roomtype" id="m_type">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="width:25%">Save</button>
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        </div>
                </form>
            </div>
        </div>
        <?php echo e(Session::forget('roomadded')); ?>

        <?php echo e(Session::forget('roomdeleted')); ?>

        <?php echo e(Session::forget('roomupdated')); ?>

    </div>
    <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        $(document).on('click','#amb_edit',function()
        {
            var roomid = $(this).closest('#data').find('#roomidx').text();
            var roomname = $(this).closest('#data').find('#roomnamex').text();
            $("#m_id").val(roomid);
            $("#m_type").val(roomname);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/hospitals/addroomstypes.blade.php ENDPATH**/ ?>