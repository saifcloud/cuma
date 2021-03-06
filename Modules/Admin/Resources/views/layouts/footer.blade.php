<!-- Javascript -->
<script src="{{ url('public/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ url('public/assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ url('public/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ url('public/assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ url('public/assets/js/toastr.js') }}"></script>

<script src="{{ url('public/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ url('public/assets/js/index.js') }}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<!-- category -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#category-table').DataTable();
    } );
</script>


<!-- subcategory -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#subcategory-table').DataTable();
    } );
</script>


<!-- subcategory -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#subsubcategory-table').DataTable();
       

     $('#category').change(function(){

	        if($(this).val() !=''){

		     $.ajax({
		     	     url:"{{ url('admin/get-subcategory')}}",
		     	     type:"POST",
		     	     data:{category_id:$(this).val()},
		     	     success:function(response){
                     console.log(response)
                     $('#subsubcategory').html('<option value="">--select--</option>');
                      $('#type').html('<option value="">--select--</option>');
                     $('#subcategory').html(response);
		     	     }
		     })
		    }

     })

    } );
</script>





<!-- type -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#type-table').DataTable();


     // $('#category').change(function(){

	    //     if($(this).val() !=''){

		   //   $.ajax({
		   //   	     url:"{{ url('admin/get-subcategory')}}",
		   //   	     type:"POST",
		   //   	     data:{category_id:$(this).val()},
		   //   	     success:function(response){
     //                 console.log(response)
     //                 $('#subcategory').html(response);
		   //   	     }
		   //   })
		   //  }

     // })



     $('#subcategory').change(function(){

	        if($(this).val() !=''){

		     $.ajax({
		     	     url:"{{ url('admin/get-subsubcategory')}}",
		     	     type:"POST",
		     	     data:{subcategory_id:$(this).val()},
		     	     success:function(response){
                     console.log(response)
                      $('#subsubcategory').html(response);
		     	     }
		     })
		    }

     })
    } );
</script>



<!-- size -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#size-table').DataTable();


    
     $('#subsubcategory').change(function(){

	        if($(this).val() !=''){

		     $.ajax({
		     	     url:"{{ url('admin/get-type')}}",
		     	     type:"POST",
		     	     data:{subsubcategory_id:$(this).val()},
		     	     success:function(response){
                     console.log(response)
                      $('#type').html(response);
		     	     }
		     })
		    }

     })
    } );
</script>


<!-- size -->
<script type="text/javascript">
	$(document).ready( function () {
     $('#color-table').DataTable();


    
     // $('#subsubcategory').change(function(){

	    //     if($(this).val() !=''){

		   //   $.ajax({
		   //   	     url:"{{ url('admin/get-type')}}",
		   //   	     type:"POST",
		   //   	     data:{subsubcategory_id:$(this).val()},
		   //   	     success:function(response){
     //                 console.log(response)
     //                  $('#type').html(response);
		   //   	     }
		   //   })
		   //  }

     // })
    } );
</script>

<!-- size -->
<script type="text/javascript">
	$(document).ready(function(){
     

     $('.add_field_button_size').click(function(e){ 
     	e.preventDefault();
        
       $('.more-data-size').append('  <div class="form-group col-sm-12 row"><div class="form-group col-sm-6"><label>Size</label><input type="text" class="form-control" name="size[]" style="height: 35px;"><p class="text-danger">{{ $errors->first('size') }}</p></div> <div class="form-group col-sm-1" style="margin-top:22px;"><label></label><a href="javascript:void(0)" class="btn btn-danger  remove_field" style="margin-top:-19px;">Remove</a></div></div>');
       });


      $('body').on("click",".remove_field",function(e){ 
          // e.preventDefault();
          // alert('ok');
           $(this).parent().parent('div').remove();
        });

	});
</script>




<script type="text/javascript">
	$(document).ready(function(){
     

     $('.add_field_button').click(function(e){ 
     	e.preventDefault();
        
       $('.more-data').append('  <div class="form-group col-sm-12 row"><div class="form-group col-sm-6"><label>Color</label><input type="color" class="form-control" name="color[]" style="height: 35px;"><p class="text-danger">{{ $errors->first('color') }}</p></div> <div class="form-group col-sm-1" style="margin-top:22px;"><label></label><a href="javascript:void(0)" class="btn btn-danger  remove_field" style="margin-top:-19px;">Remove</a></div></div>');
       });


      $('body').on("click",".remove_field",function(e){ 
          // e.preventDefault();
          // alert('ok');
           $(this).parent().parent('div').remove();
        });

	});
</script>


</body>

</html>