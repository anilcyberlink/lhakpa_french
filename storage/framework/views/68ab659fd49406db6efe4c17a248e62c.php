
<?php $__env->startSection('title', Request::segment(2)); ?>

<?php $__env->startSection('breadcrumb'); ?>
<button type="button" class="btn btn-default btn-sm backlink"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back </button>
<a href="<?php echo e(url('admin/teams')); ?>" class="btn btn-default btn-sm backlink"><i class="fa fa-list" aria-hidden="true"></i> Show List </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" id="teamData" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<section class="content">
      <div class="container-fluid">

      <footer>                        
        <div id="publishing-action">
          <button type="submit" name="submit" class="btn btn-success" value="publish"> Publish</button>         
        </div>
        <div class="clearfix"></div>
      </footer>     

<div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <!-- <h3 class="card-title p-3">Manage Trips</h3> -->
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item active"><a class="nav-link active" href="#tab_1" data-toggle="tab"> GENERAL</a></li>
              
                  
                                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                     <div class="tab-pane active" id="tab_1">
                  <!--General tab starts -->                   
                  <?php echo $__env->make('admin.team.create.create-general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <!--//-->
                  </div>
           
                  <!-- /.tab-pane -->
                               
                 
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
</div>
</section>

</form>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">


  /******** For certificates *******/
  jQuery(document).delegate('a.add-certificates', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#row_certificates_additional .row'),
     size = jQuery('#row_certificates_body >.row').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'certificates-rec-'+size);
     element.find('.delete-certificates').attr('certificates-data-id', size);
     element.appendTo('#row_certificates_body');
     element.find('.sn').html(size);
   });

   jQuery(document).delegate('button.delete-certificates', 'click', function(e) {
     e.preventDefault();    
     var makeConfirm = confirm("Are you sure You want to delete");
     if (makeConfirm == true) {
      var id = jQuery(this).attr('certificates-data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#certificates-rec-' + id).remove();
      return true;
    } else {
      return false;
    }
  });   
/******** End For certificates *******/


 $(function () {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    $("#teamData").on('submit',function(e){
      // tinymce.triggerSave();
    e.preventDefault();    
    let url = "<?php echo e(route('teams.store')); ?>";
    let teamData = document.getElementById('teamData');
    let data = new FormData(teamData);    
    $.ajax({
        url: url,
        type: 'POST', 
        data: data,
        cache: false,
        processData: false,
        contentType : false,
        beforeSend:function() {},
        success: function (data) {     
            // location.reload();     
            document.getElementById("teamData").reset();
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,                
              })
              Toast.fire({
                icon: 'success',
                title: data.message
              })
        },
        error: function (jqXHR, textStatus, errorThrown) {
           // console.log(jqXHR, textStatus, errorThrown);
           console.log('Error');
           console.log(textStatus);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,                
              })
              Toast.fire({
                icon: 'warning',
                title: textStatus
              })              
        }
    });
}); 
 

});

// ## //
$(document).ready(function(){
    $('#name').on('keyup',function(){
      var trip_title;
      trip_title = $('#name').val();
      trip_title=trip_title.replace(/[^a-zA-Z0-9 ]+/g,"");
      trip_title=trip_title.replace(/\s+/g, "-");
      $('#uri').val(trip_title);
    });
});

// Go back link
$('.backlink').click(function(){
  var url = '<?=url()->previous(); ?>';
  window.location=url;
});
 $(function() {
        $('.team-select').change(function(){
            $('.team-category').hide();
            $('.' + $(this).val()).show();
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/team/create.blade.php ENDPATH**/ ?>