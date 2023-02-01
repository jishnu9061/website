<div id="mySidepanel" class="sidepanel">
    <a style="display: block ;text-align:end" href="javascript:void(0)" class="closebtn" onclick="closeoffset()">×</a>
    <div id="navr" class="m-1">
        <div class="" style=" text-decoration: none; list-style:none;">
            <a type="button" class="btn btn-outline-primary" style="text-align: center; font-size:13px; padding: 0.2rem 0.2rem;"
                class="text-muted  " href="{{url('logt')}}">
                <i class="fas fa-sign-out-alt"></i>LogOut
            </a>
        </div>
    </div>
</div>

<script>
    function openoffset() {
      document.getElementById("mySidepanel").style.width = "30%";
      document.getElementById("mySidepanel").style.padding = "0%";
    }
    function closeoffset() {
      document.getElementById("mySidepanel").style.width = "0";
      document.getElementById("mySidepanel").style.padding = "0%";
    }
</script>