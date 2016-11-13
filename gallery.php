<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Gallery", "gallery");
 ?>

    <head>
        <link rel="stylesheet" href="css/lightbox.css">
    </head>


 <div class="container">
     <h2>Gallery</h2>
     <p>Image including, see how well this webpage can cope with it. Also some PHP to mess shit up.</p>
 </div>
<br>



    <div class="container-fluid" id="gallery">
        <div class="gallery">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="gallery/Image%20(1).jpg" data-title="" data-lightbox="First"><img src="gallery/Image%20(1).jpg" class="img-responsive img-thumbnail"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="gallery/Image%20(2).jpg" data-title="" data-lightbox="First"><img src="gallery/Image%20(2).jpg" class="img-responsive img-thumbnail"></a>
                </div>
            </div>
        </div>
    </div>

<!--Modal Image-->

        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
                    </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" class="img-responsive img-thumbnail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    <br>
 <p id="more" class="container-fluid">More &#9660;</p>
 <div id="hidden" hidden class="container-fluid">
   <?php echo $lang['GALLERYMORE']; ?>
 <br><br><br>
 </div>
 <script type="text/javascript">
 $("#more").click(function() {
      $("#hidden").show();
 });

 $(document).ready(function(){
    $('li img').on('click',function(){
         var src = $(this).attr('src');
         var img = '<img src="' + src + '" class="img-responsive"/>';
        /* var index = $(this).parent('li').index();
         var html = '';
         html += img;
         html += '<div style="height:25px;clear:both;display:block;">';
         html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
         html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
         html += '</div>';*/
         $('#myModal').modal();
         $('#myModal').on('shown.bs.modal', function(){
             $('#myModal .modal-body').html(img);
         });
         $('#myModal').on('hidden.bs.modal', function(){
             $('#myModal .modal-body').html('');
         });
    });
 })
 </script>
    <script src="js/lightbox.min.js"></script>


<?php renderfooter(); ?>
