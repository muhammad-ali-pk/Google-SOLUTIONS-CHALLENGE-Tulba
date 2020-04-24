$("#profile-container").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});

$("#logo-container").click(function(e) {
    $("#logoUpload").click();
});

function fasterPreview2( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#logoImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#logoUpload").change(function(){
    fasterPreview2( this );
});

/* Mobile nav */
$('#model').click(function() {
    var nav = $('.dropdown ul');
    nav.slideToggle(200);
});

$('#Profile').click(function() {
    var nav = $('.dropdown ul');
    nav.slideToggle(200);
});