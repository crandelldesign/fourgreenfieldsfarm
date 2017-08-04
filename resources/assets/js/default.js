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

// Map
function initMap() {
    var location = {lat: 43.707156, lng: -85.397277};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: location,
        scrollwheel: false,
        styles: [
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#C5E3BF"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "lightness": 100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#D1D1B8"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#C6E2FF"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#647b97"
                    }
                ]
            }
        ]
    });
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);

    service.getDetails({
      placeId: 'ChIJC2nYWqU0H4gRRItb5sFDz6U'
    }, function(place, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
            place.formatted_address + '<br>'+
            '<a href="'+place.url+'" target="_blank">View on Google Maps</a>'+'</div>');
            infowindow.open(map, this);
        });
      }
    });
}
