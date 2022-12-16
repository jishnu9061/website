@extends('layouts.hmsmain')
@section('content')

    <body>


        {{-- heading --}}
        <h4 id="hdtpa"><b>E- Library</b></h4>
        <br><br>

        {{-- sub heading --}}
        <h5 id="hdbtb">Library</h5>
      


        <div class="row sm">

           



            {{-- button with drop down --}}
           

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client conversation.png" alt=""><a
                    href="{{ url('subject') }}"><button type="button"style="width:70%;"
                        class="btn btn-primary btn_align_btn">Subject</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Complaint register.png" alt=""><a
                    href="file"><button type="button"
                        style="width:70%;"class="btn btn-primary btn_align_btn">File</button></a></div>

                        <div class="col-sm-4 "><img class="logo_size" src="image\logo\Complaint register.png" alt=""><a
                    href="complaint-list"><button type="button"
                        style="width:70%;"class="btn btn-primary btn_align_btn">Precedence Register
Repository
</button></a></div>
        </div>
        <br>


        {{-- sub heading --}}
        <h5 id="hdbtb">Links</h5>
        
            <div class="row sm">
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer registeration.png" alt=""><a
                    href="{{ url('site') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        legal sites</button></a></div>
            
        </div>
    @endsection
