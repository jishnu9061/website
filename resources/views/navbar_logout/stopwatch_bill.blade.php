<div style="border:1px solid black; border-radius:10px; width:140px;">
    <div class="stopwatch">
        <i id="displayWatch" style="padding:4px;" id="task">00:00:00
        </i>
        <i class="bi bi-caret-right" onclick="watchstart()"></i>
        <i class="bi bi-arrow-clockwise" onclick="watchReset()"></i>
        <i class="bi bi-stop-circle" onclick="watchstop()" data-toggle="modal" data-target="#myModel"></i>
    </div>
</div>

<div class="modal fade" id="myModel">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Edit time entry</b></h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 33%">
                                    <div class="">
                                        <label for="company_name"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;"></label>
                                        <input type="text" placeholder="Enter Certificate Of Incorporation "
                                            style="width=45%" class="form-control" name="certificate" id="" value="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary float:right;"
                                Style="width:45%;">Create</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
let [seconds, minutes, hours] = [0, 0, 0];
let displayWatch = document.getElementById("displayWatch");
let timer = null;

function stopwatch() {
    seconds++;
    if (seconds == 60) {
        seconds = 0;
        minutes++;
        if (minutes == 60) {
            minutes = 0;
            hours++;
        }
    }

    let h = hours < 10 ? "0" + hours : hours;
    let m = minutes < 10 ? "0" + minutes : minutes;
    let s = seconds < 10 ? "0" + seconds : seconds;

    displayWatch.innerHTML = h + ":" + m + ":" + s;
}

function watchstart() {

    if (timer !== null) {
        clearInterval(timer);
    }
    timer = setInterval(stopwatch, 1000);

}

function watchstop() {
    var name = $('#task').val();
    clearInterval(timer);

}

function watchReset() {
    clearInterval(timer);
    [seconds, minutes, hours] = [0, 0, 0];
    displayWatch.innerHTML = "00:00:00";
}
</script>