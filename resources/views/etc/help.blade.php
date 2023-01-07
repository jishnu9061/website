@extends('layouts.hmsmain')
@section('content')


<h4 id="hdtpa"><b>Help</b></h4>
<br><br>



<main>
    <h6 class="faq-heading">FAQ'S</h6>
    <section class="faq-container">
        <div class="faq-one">
            <!-- faq question -->
            <h6 class="faq-page">What is an FAQ Page?</h6>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-two">
            <!-- faq question -->
            <h6 class="faq-page">Why do you need an FAQ page?</h6>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
<h6 class="faq-page">Does it improves the user experience of a website?</h6>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
    </section>
</main>
<script src="main.js"></script>



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