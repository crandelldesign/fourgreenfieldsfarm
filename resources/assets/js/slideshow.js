$(document).ready(function()
{
    $('.slideshow').each(function (idx, item) {
       var slideshowId = "slideshow" + idx;
       this.id = slideshowId;
       $(this).slick({
            slide: "#" + slideshowId +" .item",
            appendArrows: "#" + slideshowId + " .arrows",
            prevArrow: '<button type="button" class="slideshow-prev btn-link"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-left fa-stack-1x"></i></span></button>',
            nextArrow: '<button type="button" class="slideshow-next btn-link"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-right fa-stack-1x"></i></span></button>',
            autoplay: true,
       });
    });
    $('.slideshow-prev, .slideshow-next').on('click', function(event)
    {
        $(this).closest('.slideshow').slick('slickPause');
    });
});