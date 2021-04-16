$(".imagen").click(function(e){
    var enlaceImagen = e.target.src;
    var boxbox ='<div class="boxbox">'+
                    '<img  src="'+enlaceImagen+'" width="500"  alt="">'+
                    '<div class="btn-close">X</div>'+
                '</div>';

    $("body").append(boxbox)
    $(".btn-close").click(function () {
        $(".boxbox").remove();
        
    })
    
})