$(document).ready(function()
{
    // Handlebars
    Handlebars.registerHelper('ifCond', function (v1, operator, v2, options) {

        switch (operator) {
            case '==':
                return (v1 == v2) ? options.fn(this) : options.inverse(this);
            case '===':
                return (v1 === v2) ? options.fn(this) : options.inverse(this);
            case '<':
                return (v1 < v2) ? options.fn(this) : options.inverse(this);
            case '<=':
                return (v1 <= v2) ? options.fn(this) : options.inverse(this);
            case '>':
                return (v1 > v2) ? options.fn(this) : options.inverse(this);
            case '>=':
                return (v1 >= v2) ? options.fn(this) : options.inverse(this);
            case '&&':
                return (v1 && v2) ? options.fn(this) : options.inverse(this);
            case '||':
                return (v1 || v2) ? options.fn(this) : options.inverse(this);
            default:
                return options.inverse(this);
        }
    });

    // Thumbnail Popup
    $('.thumbnail-popup').on('click', function(event)
    {
        event.preventDefault();
        var src = $(this).attr('href');
        var caption = $(this).data('caption');
        var source = $("#img-modal-template").html();
        var template = Handlebars.compile(source);
        var html = template({
            src: src,
            caption: caption
        });
        $('#img-modal .modal-body').html(html);
        $('#img-modal').modal('show');
        $(this).closest('.slideshow').slick('slickPause');
    });
});