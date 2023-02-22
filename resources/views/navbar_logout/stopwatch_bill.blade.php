<div style="border:1px solid black; border-radius:10px; width:140px;" class="display-time">
    <div class="stopwatch">
        <h7 id="displayWatch" style="padding:4px;" id="task">00:00:00
        </h7>
        <i class="bi bi-caret-right" onclick="watchstart()"></i>
        <i class="bi bi-arrow-clockwise" onclick="watchReset()"></i>
        <i class="bi bi-stop-circle" onclick="watchstop()" data-toggle="modal" data-target="#myModel"></i>
    </div>
</div>

<div class="modal fade" data-backdrop="false" id="myModel">
    <div class="modal-dialog modal-lg">
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
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Duration</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="" id="" value=""
                                                placeholder="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-1">
                                        <label for="username">Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="" id="myText" value=""
                                                placeholder="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Matter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="matter" id="cars">
                                                <option value="">select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Activity Category</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="activity" id="cars">
                                                <option value="">select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="date" class="form-control" name="" id="date" value=""  placeholder="mm/dd/yyyy"
                                                placeholder="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-1">
                                        <label for="username">Firm user</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="user" id="cars">
                                                <option value="">{{$copmany_name_for_sidebar->company_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-1">
                                        <label for="username">Rate</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="rate" id="" value=""
                                                placeholder="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
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

function watchstop(response) {
    var name = $('#task').val();
    clearInterval(timer);
    document.getElementById("myText").value = displayWatch.innerHTML;
}

function watchReset() {
    clearInterval(timer);
    [seconds, minutes, hours] = [0, 0, 0];
    displayWatch.innerHTML = "00:00:00";
}

$('#date').val(new Date().toJSON().slice(0,10));


</script>