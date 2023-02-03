<div class="container">
    <STYle>
      .btn-position{
      top:50%;
      left:50%;
      transform:translate(-50%, -50%);
      position:absolute;
    }

    .modal.right.fade.in .modal-dialog {
    right:0 !important;
    transform: translateX(-50%);
    }
    .modal.right .modal-content {
    height:100%;
    overflow:auto;
    border-radius:0;
    }
    .modal.right .modal-dialog {
    position: fixed;
    margin: auto;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
    }
    .modal.right.fade.in .modal-dialog {
    transform: translateX(0%);
    }
    .modal.right.fade .modal-dialog {
      width: 30%;
    right: 0px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
    }
    .modal.right .modal-header {background-color:#ffffff; color:#fff}
    .modal.right .modal-header::after {content:""; display:inline-block;}
    .modal.right .close {text-shadow:none; opacity:1; color:#ff4d4d; font-size:26px}
/*  form-control  */
    .form-control {border-radius:0; box-shadow:none}
    .form-control:focus {box-shadow:none}
/*  Button  */
    .btn {border-radius:0}
</STYle>

<!-- Trigger the modal with a button -->
<!-- Modal -->
    <div class="modal right fade" id="yModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Student Information</h4> --}}
                <a type="button" class="btn btn-outline-primary" style="text-align: center; font-size:13px; padding: 0.2rem 0.2rem;"
                class="text-muted  " href="{{url('logt')}}">
                <i class="fas fa-sign-out-alt"></i>LogOut
                </a>
            </div>
            <div class="modal-body">
                  {{-- <a style="text-align:start " href="javascript:void(0)" class="closebtn" onclick="closeoffset()">×</a> --}}

            </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-success">Save</button>
                  <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                </div> --}}
        </div>
    
      </div>
    </div>

</div>





{{-- <div>
<div style="display:inline; align-content:space-between" id="mySidepanel" class="sidepanel">

          
    
    <a style="text-align:start " href="javascript:void(0)" class="closebtn" onclick="closeoffset()">×</a>
    <a type="button" class="btn btn-outline-primary" style="text-align: center; font-size:13px; padding: 0.2rem 0.2rem;"
    class="text-muted  " href="{{url('logt')}}">
    <i class="fas fa-sign-out-alt"></i>LogOut
</a>

</div>
</div>
<script>
    function openoffset() {
      document.getElementById("mySidepanel").style.width = "30%";
      document.getElementById("mySidepanel").style.padding = "3%";
    }
    function closeoffset() {
      document.getElementById("mySidepanel").style.width = "0";
      document.getElementById("mySidepanel").style.padding = "0%";
    }

    window.onclick = function(event) {
      if (event.target == modala) {
        modala.style.display = "none";
      }
    }
</script> --}}