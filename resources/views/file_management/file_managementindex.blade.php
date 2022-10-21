@extends('layouts.hmsmain')
@section('content')

<section >
   {{-- heading --}}
   <h4 id="hdtpa"><b>File Management Details</b></h4>
   <br><br>
 


        
       {{--sub heading --}}
    <h5 id="hdbtb">Maintenance</h5>
    <br>


           
            <div class="row sm">
                <div class="col-sm-4 "> <a href="{{ url('file-list') }}"><img class="logo_size" src="assets\image\Manage file.png"
                            alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Manage
                            Files</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('file-progress-list') }}"><img class="logo_size"
                            src="assets\image\File progress bringup.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">File Progress/Bringups</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('file-archive') }}"><img class="logo_size"
                            src="assets\image\File Archive.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">File Archive</button></a></div>
            </div>
            <br>
                   {{--sub heading --}}
    <h5 id="hdbtb">File Status Reports</h5>
    <br>
            
            <div class="row sm">
                <div class="col-sm-4 "> <a href="{{ url('file-list-progress-report') }}"><img class="logo_size"
                            src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn"> File List Progress Report</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('bringup') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                            alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Bringup Report</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('file-progress-report') }}"><img class="logo_size"
                            src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">File Progress Report</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('file-status-summary') }}"><img class="logo_size"
                            src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">File Status Report Summary</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('client-monthly-file-status') }}"><img class="logo_size"
                            src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Monthly File Status Report</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('staff-monthly-status-report') }}"><img class="logo_size"
                            src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Monthly Staff Status Report</button></a></div>
            </div>
            <br>
            {{--sub heading --}}
    <h5 id="hdbtb">Notes</h5>
    <br>
            
            <div class="row sm">
                <div class="col-sm-4"> <a href="{{ url('diary-management') }}"><img class="logo_size"
                            src="assets\image\Diary management.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Diary Management</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('work-flow') }}"><img class="logo_size" src="assets\image\workflow management.png"
                            alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Workflow Management</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('template-category') }}"><img class="logo_size"
                            src="assets\image\Document templates.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Document Templates</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('document-manager') }}"><img class="logo_size"
                            src="assets\image\Document manager(DMS).png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Document Manager (DMS)</button></a></div>
            </div>
           
                <br>
                            {{--sub heading --}}
    <h5 id="hdbtb">Instructions</h5>
    <br>                <div class="row sm">
                    <div class="col-sm-4"> <a href="{{ url('file_instruction') }}"><img class="logo_size"
                                src="assets\image\File instruction.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">File Instructions</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('office_instructions') }}"><img class="logo_size"
                                src="assets\image\office instruction.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Office Instructions</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('instructions_report') }}"><img class="logo_size"
                                src="assets\image\instruction report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Instructions Report</button></a></div>
                </div>
                <br>
                                            {{--sub heading --}}
    <h5 id="hdbtb">File Reports</h5>
    <br> 
              
                <div class="row sm">
                    <div class="col-sm-4"> <a href="{{ url('file-report') }}"><img class="logo_size"
                                src="assets\image\file report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Files Reports</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('file-opened-report') }}"><img class="logo_size"
                                src="assets\image\file opened report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Files Opened Report</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('file-closed-report') }}"><img class="logo_size"
                                src="assets\image\file Closed report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Files Closed Report</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('file-pending') }}"><img class="logo_size"
                                src="assets\image\Files pending closure.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Files Pending Closure</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('file-pending-approval') }}"><img class="logo_size"
                                src="assets\image\Files pending Approval.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Files Pending Approval</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('instructions-past') }}"><img class="logo_size"
                                src="assets\image\Instruction Past TAT.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Instructions Past TAT</button></a></div>
                    <div class="col-sm-4"> <a href=""><img class="logo_size" src="assets\image\Unallocated file report.png" alt=""><button
                                type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Unallocated Files
                                Report</button></a></div>

                </div>
                <br>
                 {{--sub heading --}}
    <h5 id="hdbtb">Add Ons</h5>
    <br> 
              
                
                <div class="row sm">
                    <div class="col-sm-4"> <a href="{{ url('Safe_management') }}"><img class="logo_size"
                                src="assets\image\Safe management.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Safe Management</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('Request_staff_item') }}"><img class="logo_size"
                                src="assets\image\Request safe item.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Request Safe Item</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('Process_Request') }}"><img class="logo_size"
                                src="assets\image\process Request.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Process Request</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('outgoing-letters') }}"><img class="logo_size"
                                src="assets\image\Outgoing letter.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Outgoing Letters</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('incomming-letters') }}"><img class="logo_size"
                                src="assets\image\Incomming Letters.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Incomming Letters</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('safe-register-report') }}"><img class="logo_size"
                                src="assets\image\safe register report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Safe Register Report</button></a></div>
                    <div class="col-sm-4"> <a href="{{ url('safe-item-request') }}"><img class="logo_size"
                                src="assets\image\safe item request report.png" alt=""><button type="button" style="width:70%;"
                                class="btn btn-primary btn_align_btn">Safe Item Request Report</button></a></div>

                </div>
           

            </section>


@endsection