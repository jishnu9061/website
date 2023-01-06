@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Civil Litigation Details</b></h4>
    <br>

    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row">Matter Info:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Plaintiff:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Defendent:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Attorney:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Case Details:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Plaintiff Insurer:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Plaintiff Witness:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Plaintiff Expert:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Defendant Insurer:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Defendant Witness:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Defendant Expert:</td>
                            <td><input class="form-control" type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>

    </form>


</div>

@endsection


















<!-- <form action="">

        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="2016-10-155-ER/AP" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Charles Norris" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Civil Dispute" Disabled>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Defendent</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="jean C. Van Damme" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Attroney</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Deway Cheatum Contact Sara Howe</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label" Disabled>Case Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control"
                            rows="2" Disabled>Filed Date: 8/7/2017 Service by: Personal Cook First Civil</textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Insurer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Plaintiff's Insurer</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Witness</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Plaintiff's Witness</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Expert</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Plaintiff's Expert</textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Insurer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Defendant's Insurer</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Witness</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Defendant's Witness</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Expert</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Defendant's Expert</textarea>
                    </div>
                </div>
            </div>
        </div>

    </form> -->

<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->