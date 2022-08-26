 $(function () {
  $('[data-toggle="popover"]').popover()
})

 $(document).on('click','.remove-pr',function(){
    alert('asd');
   
   ("#hidedata").hide();

    $(this).find('.product_data').hide();


         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
       // var product_id = $(this).closest('.product_data').find('.product_id').val();
       
         
          $.ajax({
            method:"POST",
            url:"/cartdeleteitem",
            data:{

                'product_id':product_id,
            
            },
          
            //success: function (response){
              //  location.reload();
            

          });
          $(this).data('product_id').remove();
          
     ;
     })

 $(document).on('click','.update-pr',function(){


         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
        
         var product_id = $(this).closest('.product_data').find('.product_id').val();
         var update_value = $(this).closest('.product_data').find('.update-pr').val();
         
          
          



          $.ajax({
            method:"POST",
            url:"/cartupdateitem",
            data:{

                'product_id':product_id,
                'update_value':update_value,
            
            },
          
           

          });
          $(this).data('product_id').remove();
          
     ;
     })