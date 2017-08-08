<html>
<head>
<title>Roemah Citra</title>
<link  rel='stylesheet' type='text/css' href='<?php echo esc_url( get_template_directory_uri() ); ?>/index.css'/>
<script type='text/javascript' src='<?php echo esc_url( get_template_directory_uri() ); ?>/JS/jquery.js'></script>
<!-- Stylesheet -->
<!--<link rel="stylesheet" href="./CSS/fss.css">-->
<!--<script src="<?php //echo esc_url( get_template_directory_uri() ); ?>/JS/fss.js"></script>-->
<?php if (is_front_page()) { ?>
<script>
$(document).ready(function(){!function(e){e.fn.freeSimpleSlider=function(r){var i=e.extend({dots:!1,arrows:!0,time:5e3,animation:"fade"},r);return this.each(function(){var r=e(this),n=r.children("li").length;parseInt(i.time,10);if("slide"===i.animation&&r.addClass("slide-animation"),r.addClass("slider-box").wrap("<div class='free-simple-slider'></div>"),r.children("li").children("img").each(function(){var r=e(this).attr("src");e(this).parent("li").css("background-image","url("+r+")")}),!0===i.dots){r.after('<ul class="slider-dots"></ul>');for(var a=r.parent(".free-simple-slider").children(".slider-dots"),l=0;l<n;l++)a.append("<li></li>");a.children("li").eq(0).addClass("current")}if(!0===i.arrows&&r.after(' <a class="arrows prev-arrow" href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/CSS/img/angle-left.png" alt=""></a><a class="arrows next-arrow" href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/CSS/img/angle-right.png" alt=""></a>'),"slide"===i.animation&&2===r.children().length&&(r.children("li").clone().appendTo(r),r.children("li:not(:first)").removeClass("current")),r.children().length>=2){var t=function(l){var t,s=r.children("li.current");t=!1===l?s.prev():s.next();var d=r.children("li.current").index();"basic"===i.animation&&(t.addClass("current"),s.removeClass("current"),!0===l?d+1===n&&r.children("li:first").addClass("current"):0===d&&r.children("li:last").addClass("current")),"fade"===i.animation&&(t.fadeIn(function(){e(this).addClass("current")}),s.fadeOut(function(){e(this).removeClass("current")}),!0===l?d+1===n&&r.children("li:first").fadeIn(function(){e(this).addClass("current")}):0===d&&r.children("li:last").fadeIn(function(){e(this).addClass("current")})),"slide"===i.animation&&(r.children("li").removeClass("prev"),s.addClass("prev").removeClass("current"),t.addClass("current"),!0===l?d+1===n&&r.children("li:first").addClass("current"):0===d&&r.children("li:last").addClass("current")),!0===i.dots&&(a.children("li.current").removeClass("current"),!0===l?t.length>0?a.children("li").eq(t.index()).addClass("current"):a.children("li:first").addClass("current"):t.length>0?a.children("li").eq(t.index()).addClass("current"):a.children("li:last").addClass("current"))};if(!0===i.arrows&&(r.parent(".free-simple-slider").children(".next-arrow").on("click",function(e){e.preventDefault(),clearInterval(void 0),t(!0)}),r.parent(".free-simple-slider").children(".prev-arrow").on("click",function(e){e.preventDefault(),clearInterval(void 0),t(!1)})),"undefined"!=typeof Hammer){var s=new Hammer(r[0]);s.on("swipeleft",function(){clearInterval(void 0),t(!0),startLoop()}),s.on("swiperight",function(){clearInterval(void 0),t(!1),startLoop()})}}})}}(jQuery)});
</script>
<?php } ?>
<style type='text/css'>
@font-face {
    font-family: arno;
    src: url(<?php echo esc_url( get_template_directory_uri() ); ?>/Font/Arno/ArnoPro-Regular.otf);
}
@font-face {
    font-family: bebas;
    src: url(<?php echo esc_url( get_template_directory_uri() ); ?>/Font/Bebas/BEBAS___.ttf);
}
@font-face {
    font-family: rogue;
    src: url(<?php echo esc_url( get_template_directory_uri() ); ?>/Font/Rogue/RougeScript-Regular.ttf);
}
</style>

</head>
<body>
<div id='headnav'>
<header>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Material/Images/Logo/logo.png">
</header>
<nav id='menu'>
<ul>
<li><a href='/'>Home</a></li>
<li><a href='/'>About</a></li>
<li><a href='/'>Blog</a></li>
<li><a href='/'>Package</a></li>
<li><a href='/'>Testimoni</a></li>
<li><a href='/'>Contact</a></li>
</ul>
</nav>
<div style='clear:both;'></div>
</div>