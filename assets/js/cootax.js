$(document).ready(function () {

    $('div.bgParallax').each(function () {
        var $obj = $(this);

        $(window).scroll(function () {
            var yPos = -($(window).scrollTop() / $obj.data('speed'));

            var bgpos = '50% ' + yPos + 'px';

            $obj.css('background-position', bgpos);

        });
    });

});

$(document).ready(function () {

    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
    };


    $().UItoTop({easingType: 'easeOutQuart'});

    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 700);
    });

});

if (document.getElementById("mapa_contato")) {
    function initialize() {
        var myLocation = new google.maps.LatLng(-1.419717, -48.014989);
        var mapOptions = {
            center: myLocation,
            zoom: 14
        };
        var marker = new google.maps.Marker({
            position: myLocation,
            title: "Localização dos imoveis da Kananda Imobiliaria!",
            icon: base_url+"assets/imagens/marcado.png"
        });
        var map = new google.maps.Map(document.getElementById("mapa_contato"),
                mapOptions);
        marker.setMap(map);
    }
    initialize();
}