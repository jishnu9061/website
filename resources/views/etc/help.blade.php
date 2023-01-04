@extends('layouts.hmsmain')
@section('content')


<h4 id="hdtpa"><b>Help</b></h4>
<br><br>



                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comments</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                   
                </form>

@endsection