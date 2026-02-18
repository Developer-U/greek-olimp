<?php
/**
 * Map block / Блок Карта Яндекса
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$map_description = get_field('map_description', 'options');
$markImg = get_field('mark_img', 'options');
$markCoords = get_field('mark_coords', 'options');
$map_mark_zoom = get_field('map_mark_zoom', 'options') ? get_field('map_mark_zoom', 'options') : 14;
?>

<section class="map-block">
    <div class="container-fluid">
        <div class="map" id="map"></div>
    </div>
</section>

<script type="text/javascript">
    ymaps.ready(init);
    function init() {
        // Создает экземпляр карты и привязывает его к созданному контейнеру             
        var myMap = new ymaps.Map('map', {
            center: [<?php echo $markCoords; ?>],
            zoom: <?php echo $map_mark_zoom; ?>,
                controls: ['zoomControl']
    }, {
        searchControlProvider: 'yandex#search'
    });

    // Создает стиль значка метки               
    var myPlacemark = new ymaps.Placemark([<?php echo $markCoords; ?>], { }, {
        iconLayout: 'default#image',
            iconImageHref: '<?php echo get_stylesheet_directory_uri() ?>/assets/img/location.svg',
                iconImageSize: [70, 93],
                    iconImageOffset: [-24, -85],
                        hideIconOnBalloonOpen: false // чтобы не скрывалась метка
    });

    myMap.geoObjects.add(myPlacemark);

    // Событие открытия балуна по клику на метку
    myPlacemark.events.add('click', function (e) {
        myMap.balloon.open([<?php echo $markCoords; ?>], {
            contentHeader: '<figure class="map__image"><img src="<?php echo esc_url($markImg['url']); ?>"></figure>',
                contentBody: `                
                                        <div class="baloon__box">                    
                                            <p class="baloon__text descr"><?php echo $map_description; ?></p> 
                                        </div>`,
                    });
    return false;
                });

    myMap.behaviors.disable('scrollZoom');
            };
</script>