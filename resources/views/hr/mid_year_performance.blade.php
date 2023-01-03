@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b>Performance Appraisal Form</b></h4>
    <br>
</div>
<br>

<style>
.stars-wrapper,
.stars-display {
    display: grid;
    grid: 2rem / repeat(5, 1fr);
}

.stars-wrapper {
    margin: 0 auto;
    max-width: 20rem;
}

.stars-display {
    grid-row: 1;
    grid-column: 1 / -1;
    fill: lightgrey;
    pointer-events: none;
    place-items: center;
}

#my-form-1 input {
    appearance: none;
    color: transparent;
    background: transparent;
}

#one-star-rating-1 {
    grid-row: 1;
    grid-column: 1;
}

#two-star-rating-1 {
    grid-row: 1;
    grid-column: 2;
}

#three-star-rating-1 {
    grid-row: 1;
    grid-column: 3;
}

#four-star-rating-1 {
    grid-row: 1;
    grid-column: 4;
}

#five-star-rating-1 {
    grid-row: 1;
    grid-column: 5;
}

#one-star-rating-1:checked~.stars-display svg:nth-child(-n + 1) {
    fill: orange;
}

#two-star-rating-1:checked~.stars-display svg:nth-child(-n + 2) {
    fill: orange;
}

#three-star-rating-1:checked~.stars-display svg:nth-child(-n + 3) {
    fill: orange;
}

#four-star-rating-1:checked~.stars-display svg:nth-child(-n + 4) {
    fill: orange;
}

#five-star-rating-1:checked~.stars-display svg:nth-child(-n + 5) {
    fill: orange;
}
</style>


<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('quarterly_performance_form') }}">Quarterly
                Performance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('mid_year_performance') }}">Mid-Year Performance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('annual_performance_form') }}">Annual Performance</a>
        </li>
    </ul>

    <br>



    <div class="container">
        <input class="btn btn-primary" type="button" value="Add New KPI" data-toggle="modal" data-target="#myModal">
        <br>
        <br>
    </div>

    <div class="card">

        <div class="card-body">
            <div class="text-center">
                <h5><b>Mid-Year Performance Report</b></h5>
            </div>
            <br>



            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="idnumber" class="form-label">ID Number</label>
                            <input type="number" class="form-control" id="idnumber">
                        </div>
                        <div class="mb-3">
                            <label for="currentsalary" class="form-label">Current Salary</label>
                            <input type="number" class="form-control" id="currentsalary">
                        </div>
                        <div class="mb-3">
                            <label for="Default select example" class="form-label">Department</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--- select ---</option>
                                <option value="1">HR</option>
                                <option value="2">Legal</option>
                                <option value="3">Receptionist</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="reviewperiodfrom" class="form-label">Review Period From</label>
                            <input type="date" class="form-control" id="reviewperiodfrom">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="currentdesignation" class="form-label">Current Designation</label>
                            <input type="text" class="form-control" id="currentdesignation">
                        </div>
                        <div class="mb-3">
                            <label for="reviewperiodto" class="form-label">Review Period To</label>
                            <input type="date" class="form-control" id="reviewperiodto">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Performance Category</th>
                                    <th scope="col">Rating Scale</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ability at the Position</td>
                                    <td>
                                        <div class="table-responsive">

                                            <svg id="svg-sprite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                style="display: none;">
                                                <symbol id="star-icon">
                                                    <title>star</title>
                                                    <path
                                                        d="M20 7h-7L10 .5 7 7H0l5.46 5.47-1.64 7 6.18-3.7 6.18 3.73-1.63-7z" />
                                                </symbol>
                                            </svg>

                                            <form id="my-form-1" method="POST">
                                                <div class="stars-wrapper">
                                                    <input id="one-star-rating-1" type="radio" name="reviewRating"
                                                        value="1">

                                                    <input id="two-star-rating-1" type="radio" name="reviewRating"
                                                        value="2">

                                                    <input id="three-star-rating-1" type="radio" name="reviewRating"
                                                        value="3">

                                                    <input id="four-star-rating-1" type="radio" name="reviewRating"
                                                        value="4">

                                                    <input id="five-star-rating-1" type="radio" name="reviewRating"
                                                        value="5">

                                                    <div class="stars-display">
                                                        <svg viewBox="0 0 20 20" width="30" height="30">
                                                            <use href="#star-icon"></use>
                                                        </svg>
                                                        <svg viewBox="0 0 20 20" width="30" height="30">
                                                            <use href="#star-icon"></use>
                                                        </svg>
                                                        <svg viewBox="0 0 20 20" width="30" height="30">
                                                            <use href="#star-icon"></use>
                                                        </svg>
                                                        <svg viewBox="0 0 20 20" width="30" height="30">
                                                            <use href="#star-icon"></use>
                                                        </svg>
                                                        <svg viewBox="0 0 20 20" width="30" height="30">
                                                            <use href="#star-icon"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </td>
                                    <td><input type="text" class="form-control" id="total"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <div class="container">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">(Note:
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> - Excellent
                    <span class="p-3"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> - Good
                    <span class="p-3"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> - Average
                    <span class="p-3"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> - Below Average
                    <span class="p-3"></span>
                    <span class="fa fa-star"></span> - Poor)
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="mb-3">
                        <label for="achievement" class="form-label">Achievements</label>
                        <textarea class="form-control" id="achievement" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="card">
        <div class="card-body">
            <h3>Remarks of the Reviewing Authority</h3><br>
            <p>Do you agree with the assessment by the Reporting Officer with respect to the work output ? In case
                you
                do not agree with any of the numerical assessments of attributes. Please record your assessment in
                the
                column Provided.</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Yes, I agree
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    No, I do not agree
                </label>
            </div>
            <br>
            <div class="container">
                <div class="mb-3">
                    <label for="in case of different opinion, please give the details," class="form-label">In case
                        of
                        different Opinion, please give the details,</label>
                    <textarea class="form-control" id="in case of different opinion, please give the details,"
                        rows="3"></textarea>
                    <div id="Note" class="form-text">(Note : Filled by the Reviewing Officer)</div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="mb-3">
                    <label for="Overall Grade on a Scale of 1-5 ( in numbers )" class="form-label">Overall Grade on
                        a
                        Scale
                        of 1-5 ( in numbers )</label>
                    <textarea class="form-control" id="Overall Grade on a Scale of 1-5 ( in numbers )" cols="30"
                        rows="3"></textarea>
                    <div id="Note" class="form-text">(Note : Filled by the Reviewing Officer)</div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="mx-auto" style="width: 200px;">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="card">
        <div class="card-body">
            <h3>Remarks of the Accepting Authority</h3><br>
            <p>Do you agree with the remarks and assessment by the Reporting / Reviewing Authorities ?</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Yes, I agree
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    No, I do not agree
                </label>
            </div>

            <br>
            <div class="container">
                <div class="mb-3">
                    <label for="In case of different Opinion, please give the details," class="form-label">In case
                        of
                        different Opinion, please give the details,</label>
                    <textarea class="form-control" id="In case of different Opinion, please give the details,"
                        rows="3"></textarea>
                    <div id="Note" class="form-text">(Note : Filled by the Accepting Officer)</div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="mb-3">
                    <label for="Overall Grade on a Scale of 1-5 ( in numbers )" class="form-label">Overall Grade on
                        a
                        Scale
                        of 1-5 ( in numbers )</label>
                    <textarea class="form-control" id="Overall Grade on a Scale of 1-5 ( in numbers )" cols="30"
                        rows="3"></textarea>
                    <div id="Note" class="form-text">(Note : Filled by the Accepting Officer)</div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="mx-auto" style="width: 200px;">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>





    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>Add KPI</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">

                        <form method="post" action="{{url('add_kpi')}}" enctype="multipart/form-data">
                            @csrf

                            <select name="department" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <div class="mb-3">
                                    <option selected>Select department</option>
                                    <option value="36">HR</option>
                                    <option value="2">Legal Advisor</option>
                                    <option value="3">Receptionist</option>
                            </select>
                            <input name="kpi" class="form-control form-control-lg" type="text"
                                placeholder="Enter the KPI" aria-label=".form-control-lg example">
                    </div>
                    <br>


                    <div style="float:right;">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>

                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
            <script src="{{ url('assets/js') }}/jquery.min.js"></script>

            @endsection