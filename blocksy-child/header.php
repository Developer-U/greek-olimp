<?php
/**
 * The header for our theme
 */


?><!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>

<head>
	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="https://apartolimp.ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fapartolimp.ru%2Frooms%2F">
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="https://apartolimp.ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fapartolimp.ru%2Frooms%2F&amp;format=xml"> -->
	<script src="https://apartolimp.ru/wp-includes/js/wp-emoji-release.min.js?ver=6.9.1" defer=""></script>
	<?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>

	<!-- start TL head script -->
	<script type="text/javascript">

		(function (w) {
			var q = [
				["setContext", "TL-INT-greekolimp_2025-07-31", "ru"],
				["embed", "booking-form", {
					container: "tl-booking-form"
				}],
				["embed", "search-form", {
					container: "tl-search-form"
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
		document.addEventListener("DOMContentLoaded", function () {
			if (window.location.href.indexOf("/rooms") !== -1) {
				var link = document.getElementById("hb_room_load_booking_form");
				if (link) {
					if (window.location.href.indexOf("lang=en") !== -1) {
						link.textContent = "Book now";
					} else {
						link.textContent = "Забронировать";
					}

					link.setAttribute("href", "/booking?room-type=");
					link.setAttribute("target", "_self");

					Array.from(link.attributes).forEach(function (attr) {
						if (attr.name.startsWith("data-")) {
							link.removeAttribute(attr.name);
						}
					});

					link.removeAttribute("id");
				}

				const divElement = document.createElement("div");
				divElement.innerHTML = `
			<!-- start TL Search form script -->
			<div id="block-search" class="block-search--inner">
				<div id="tl-search-form" class="tl-container">
					<noindex><a href="https://www.travelline.ru/products/tl-hotel/" rel="nofollow" target="_blank">TravelLine</a></noindex>
				</div>
			</div>
			<!-- end TL Search form script -->
		`;

				const targetElement = document.querySelector(".sidebar");
				if (targetElement) {
					targetElement.insertAdjacentElement("afterBegin", divElement);
				}
			}

		});

	</script>

	<script type="text/javascript" async="" src="https://ru-ibe.tlintegration.ru/integration/loader.js"></script>

	<script type="text/javascript">(function () { document.addEventListener("DOMContentLoaded", function () { var elem = document.querySelector("#tl-search-form"); if (elem) { var elemTop = elem.getBoundingClientRect().top + window.pageYOffset; function scrollFix() { if ((elemTop <= window.pageYOffset) && (document.documentElement.offsetWidth >= 1199)) { elem.classList.add("fixed") } else { elem.classList.remove("fixed") } } scrollFix(); window.addEventListener("scroll", scrollFix); } }); })();
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

				<a class="button transparent-btn" href="/booking">
					Забронировать
				</a>
			</div>
		</div>
	</header>