
<?php $__env->startSection('content'); ?>
<link  rel="stylesheet" href="css/style.css" />
<link  rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery/custom.js"></script>
<style>
   html body{
    background-color: #fff;
  font-family: 'Helvetica Neue';
  margin:0;
  font-size: 16px;
  color:#000;
  overflow-x: hidden;
  line-height: 1.4;
}
body h1, body h2, body h3, body h4, body h5, body h6{
  font-family: 'Helvetica Neue';
  line-height:1.2;
  color:#000;
  font-weight: normal;
  margin:0 0 15px;
}
body h1 { font-size: 40px;}
body h2 { font-size: 35px;}
body h3 { font-size: 30px;}
body h4 { font-size: 20px;}
body h5 { font-size: 18px;}
body h6 { font-size: 16px;}
body img {
  margin: 0 auto;
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height:auto;
  display:block;
}
body p {
  color: #000;
  font-family: 'Helvetica Neue';
  font-size:18px;
  line-height: 1.5;
  margin: 0 0 15px;
  padding: 0;
}
body .container{
  width:100%;
  max-width:1200px;
  margin:0 auto;
  position:relative;
  float:none;
}
.container:after{
  content:"";
  display:block;
  clear:both;
}
#section1 {
    background-color: #000;
    overflow: hidden;
}
.row {
    display: flex;
    flex-wrap: wrap;
}
.wrapper-right {
    width: 30%;
    height: 400px;
    display: flex;
  align-items: center;
    justify-content: center;
  margin-left: auto;
}
.card_wrap{
  display: flex;
    flex-wrap: wrap;
  margin: 0px -20px;
}
.box {
    padding: 20px;
  width: calc(50% - 40px);
}
.box-inner {
  background: #FFFFFF;
    padding: 20px;
    border-radius: 7px;
    text-align: center;
}
.icon {
    background: #ffe4c4;
    display: inline-block;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 50px;
}
.text{
  color: #ffffff;
}
.wrapper-left {
    width: 70%;
    overflow: hidden;
    position: absolute;
    top: 0;
  left:0;
    animation: 30s linear 0s infinite normal none running cardscroll;
    -webkit-animation: 30s linear 0s infinite normal none running cardscroll;
  -o-animation: 30s linear 0s infinite normal none running cardscroll;
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}
.wrapper-left:hover {
  animation-play-state: paused;
}
@keyframes  cardscroll {
  0 { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}
@-webkit-keyframes cardscroll {
  0 { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}
@media (max-width: 1024px) {
  .wrapper-right {
    order:1;
  }
  .card_inner_left {
    order:2;
  }
  .card_inner_right {
    order:3;
  }

  .wrapper-right {
      width: 100%;
      padding: 40px;
      height: auto;
    text-align: center;
  }
  .wrapper-left {
    width: auto;
    position: relative;
    top: auto;
    left: auto;
    overflow: visible;
    -webkit-animation: none;
    -o-animation: none;
    animation: none;
  }
  .box {
    padding: 15px;
    width: 250px;
  }
  .box-inner {
    padding: 15px;
  }
  .card_wrap {
      flex-wrap: nowrap;
    margin: 0px -15px;
    width: auto;
  }
  .card_inner_left {
    -webkit-animation: 30s linear 0s infinite alternate forwards running cardLeft;
    -o-animation: 30s linear 0s infinite alternate forwards running cardLeft;
    animation: 30s linear 0s infinite alternate forwards running cardLeft;
  }
  .card_inner_right {
    -webkit-animation: 30s linear 0s infinite alternate forwards running cardRight;
    -o-animation: 30s linear 0s infinite alternate forwards running cardRight;
    animation: 30s linear 0s infinite alternate forwards running cardRight;
  }

  @-webkit-keyframes cardLeft {
    0% {
      -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
      transform: translateX(0);
      left: 0;
    }
    100% {
        -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      transform: translateX(-100%);
      left: 100%;
    }
  }
  @keyframes  cardLeft {
    0% {
      -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
      transform: translateX(0);
      left: 0;
    }
    100% {
      -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      transform: translateX(-100%);
      left: 100%;
    }
  }
  @-webkit-keyframes cardRight {
    0% {
      -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      transform: translateX(-100%);
      left: 100%;
    }
    100% {
      -webkit-transform: translateX(0%);
      -ms-transform: translateX(0%);
      transform: translateX(0);
      left: 0;
    }
  }
  @keyframes  cardRight {
    0% {
      -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      transform: translateX(-100%);
      left: 100%;
    }
    100% {
      -webkit-transform: translateX(0%);
      -ms-transform: translateX(0%);
      transform: translateX(0);
      left: 0;
    }
  }
}
</style>

<section id="section1">
    <div class="container">
      <div class="row card-row">
        <div class="wrapper-left">
          <div class="card_wrap">
            <?php $__currentLoopData = $stock_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box">
              <div class="box-inner">
                
                <h3 style="color:red;"><b><?php echo e($order->Item_name); ?></b></h3>
                <h1 style="color:red;"><b><?php echo e($order->total_stock); ?></b></h1>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
          </div>
        </div>
        <div class="wrapper-right">
          <h1 class="text" style="color:red;">Empty Stock</h1>
        </div>
      </div>
    </div>
  </section>
<br>

    <script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
     jQuery(document).ready(function(){
  if (jQuery(window).width() <= 1024) {
    jQuery(".wrapper-left .card_wrap:nth-child(2)").remove();
    jQuery(".wrapper-left").clone().appendTo(".card-row");
    jQuery(".wrapper-left:nth-child(1)").addClass("card_inner_left");
    jQuery(".wrapper-left:nth-child(3)").addClass("card_inner_right");
  } else {
    jQuery(".card_wrap").clone().appendTo(".wrapper-left");
    jQuery(".wrapper-left:nth-child(1)").removeClass("card_inner_left");
    jQuery(".wrapper-left.card_inner_right").remove();
  }
  /* Window Resize JS */
  window.addEventListener('resize', function(event) {
    if (jQuery(window).width() <= 1024) {
      if( !jQuery('.card_inner_left').length && !jQuery('.card_inner_right').length ){
        jQuery(".wrapper-left .card_wrap:nth-child(2)").remove();
        jQuery(".wrapper-left").clone().appendTo(".card-row");
        jQuery(".wrapper-left:nth-child(1)").addClass("card_inner_left");
        jQuery(".wrapper-left:nth-child(3)").addClass("card_inner_right");
      }
    } else {
      jQuery(".wrapper-left.card_inner_right").remove();
      jQuery(".wrapper-left.card_inner_left").removeClass("card_inner_left");
      if( jQuery(".wrapper-left .card_wrap").length == 1 ){
        jQuery(".card_wrap").clone().appendTo(".wrapper-left");
      }
    }
  }, true);
});
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/store/empty_stock.blade.php ENDPATH**/ ?>