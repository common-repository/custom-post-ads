jQuery(function($){
    $(document).ready(function(){

        $('input[name="page_name"').keyup(function(){
            $('#changeme1').html(this.value);
        });

        $('textarea[name="mymessage"').keyup(function(){
            $('#changeme2').html(this.value);
        });

        $('select[name="vfselectone"').change(function(){
            $('#changeme3').html(this.value);
            if(this.value=='custom'){
                $('#onlybtname').show();
            }else{
                $('#onlybtname').hide();
            }
        });

        $('input[name="custombtname"').keyup(function(){
            $('#changeme3').html(this.value);
        });

        $('input[name="link_1"').keyup(function(){
            $('#changeme4').html(this.value);
        });

        $('input[name="link_2"').keyup(function(){
            $('#changeme5').html(this.value);
        });

        $('input[name="link_3"').keyup(function(){
            $('#changeme6').html(this.value);
        });

        $('input[name="sponsored"').keyup(function(){
            $('#changeme7').html(this.value);
        });

        $("#cs-image").on("click",function(){
            var images = wp.media({
                title: "Choose a file…",
                multiple: false
            }).open().on("select",function(e){
                var uploadedImages = images.state().get("selection");
                var selectedImages = uploadedImages.toJSON();
                jQuery.each(selectedImages,function(index,image){
                    $('#changeimg1').attr('src',image.url);
                    $('input[name="advrimg"]').val(image.url);
                })
            });
  
        });

        $("#cs-image2").on("click",function(){
            var images = wp.media({
                title: "Choose a file…",
                multiple: false
            }).open().on("select",function(e){
                var uploadedImages = images.state().get("selection");
                var selectedImages = uploadedImages.toJSON();
                jQuery.each(selectedImages,function(index,image){
                    $('#changeimg2').attr('src',image.url);
                    $('input[name="mainimg"]').val(image.url);
                })
            });
  
        });

        $('#advertiserinfo').click(function(){
            if($(this).is(':checked')){
                $('.head_prev').hide();
                $('input[name="advertiserinfo"]').val('no');
            }else{
                $('.head_prev').show();
                $('input[name="advertiserinfo"]').val('yes');
            }
        });
        
        $('#linkinfo').click(function(){
            if($(this).is(':checked')){
                $('.under_spon').hide();
                $('input[name="linkshow"]').val('no');
            }else{
                $('.under_spon').show();
                $('input[name="linkshow"]').val('yes');
            }
        });

        $('#imageinfo').click(function(){
            if($(this).is(':checked')){
                $('.img_result').hide();
                $('input[name="imagebkshow"]').val('no');
            }else{
                $('.img_result').show();
                $('input[name="imagebkshow"]').val('yes');
            }
        });

        $('#setactive').click(function(){
            if($(this).is(':checked')){
                $('input[name="setactive"]').val('no');
            }else{
                $('input[name="setactive"]').val('yes');
            }
        });

        $('#updatemyads').click(function(){

      
            if(confirm('Are you sure!')){
        
              var postdata = "action=chkgroupedit&param=save_vfcps&"+$('#mycustomform').serialize();
              jQuery.post(ajax_object,postdata,function(response){
        
                var data = jQuery.parseJSON(response);
                if(data.status==1){
                    // console.log(data);
                    window.location.reload();
                }
              });
        
            }
        
        });

        

        
    });
});
