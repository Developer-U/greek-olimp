<?php
/**
 * The header for our theme
 */


?><!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>

<head>


	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://apartolimp.ru/wp-includes/js/wp-emoji-release.min.js?ver=6.9.1" defer=""></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=911b9f4c-3da2-4b95-9067-6a4eb4603498&lang=ru_RU"
		type="text/javascript">
		</script>
	<?php wp_head(); ?>


	<!-- start TL head script -->
	<script type='text/javascript'>
		(function (w) {
			var q = [
				["setContext", "TL-INT-greekolimp_2025-07-31", "ru"],
				["embed", "search-form", {
					container: "tl-search-form"
				}],
				["setContext", "TL-INT-greekolimp_2025-07-31.rooms", "ru"],
				["embed", "booking-form", {
					container: "tl-booking-form-rooms"
				}]
			];
			var h = ["ru-ibe.tlintegration.ru", "ibe.tlintegration.ru", "ibe.tlintegration.com"];
			var t = w.travelline = (w.travelline || {}),
				ti = t.integration = (t.integration || {});
			ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
			if (!ti.__loader) {
				ti.__loader = true;
				var d = w.document, c = d.getElementsByTagName("head")[0] || d.getElementsByTagName("body")[0];
				function e(s, f) { return function () { w.TL || (c.removeChild(s), f()) } }
				(function l(h) {
					if (0 === h.length) return; var s = d.createElement("script");
					s.type = "text/javascript"; s.async = !0; s.src = "https://" + h[0] + "/integration/loader.js";
					s.onerror = s.onload = e(s, function () { l(h.slice(1, h.length)) }); c.appendChild(s)
				})(h);
			}
		})(window);
	</script>
	<!-- end TL head script -->
</head>


<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>
	<?php
	$logo_color = get_field('logo_color', 'options');
	$tel = get_field('tel-link', 'options');
	$phone_num = get_field('tel', 'options');
	$address = get_field('address', 'options');
	?>

	<header class="header">
		<div class="container-fluid wide">
			<div class="header__wrapper d-flex justify-content-between align-items-center">
				<a href="/" class="header__logo">
					<?php
					if ($logo_color) { ?>
						<img src="<?php echo $logo_color['url']; ?>" alt="<?php echo $logo_color['alt']; ?>">
					<?php } else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" />
					<?php } ?>
				</a>

				<div class="header__center header-center">
					<!-- Здесь вставляем template-part -->
					<?php get_template_part('template-parts/nav', 'menu'); ?>
				</div>

				<?php
				if (($tel && $phone_num) || $address) { ?>
					<ul class="header__contacts header-list col-auto d-none d-lg-block">
						<?php
						if ($address) { ?>
							<li class="header-list__item address">
								<p>
									<?php echo $address; ?>
								</p>
							</li>
						<?php }
						if ($tel && $phone_num) { ?>
							<li class="header-list__item tel">

								<a href="tel:+7<?php echo $tel; ?>">
									<?php echo $phone_num; ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				<?php }
				; ?>

				<!-- Кнопка открытия страницы букинга -->
				<a class="button transparent-btn" href="?tl-booking-open=true">
					Забронировать
				</a>

				<!-- Кнопка открытия букинга в попапе -->
				<!-- <a class="button transparent-btn" href="#tl-booking-form-rooms" data-tl-booking-open="true">
					Забронировать
				</a> -->
			</div>
		</div>
	</header>