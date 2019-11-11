<!doctype html>
<!--suppress JSAnnotator -->
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo e(asset('')); ?>">
	<link rel="icon" type="image/png" href="<?php echo e(asset("img/favicon1.png")); ?>">
	<title>20 - 10 for you!</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

	</script>

	<!-- Styles -->
	<style>
		@import  url('https://fonts.googleapis.com/css?family=Mali&subset=vietnamese');
		* {
			padding: 0;
			margin: 0;
		}

		html, body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Raleway', sans-serif;
			height: 100vh;
			margin: 0;
			background: url('<?php echo e(asset('img/bg-content.jpg')); ?>') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: relative;
			overflow: hidden;
			padding: 0;
		}

		.img-box-loading{
			position: absolute;
			width: 100%;
			height: 100%;
			margin: auto 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			justify-content: center;
			text-align: center;
			align-items: center;
			padding-top: 40%;
			background: #fff;
			transition: 0.5s;
			z-index: 9999;
		}

		.img-box-loading img{
			width: 100px;
			margin: auto 0;
			transition: 0.5s;
		}

		.img-box-loading img {
			animation: animate 0.8s infinite;
		}

		@keyframes  animate {
			0%{
				opacity: 1;
			}
			100% {
				opacity: 0;
			}
		}

		.img-box-loading.complete {
			visibility: hidden;
			opacity: 0;
			pointer-events: none;
		}

		.input-box{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			justify-content: center;
			text-align: center;
			align-items: center;
			z-index: 10;
			transition: .5s;
			width: 300px;
			height: 60px;
			border: 1px solid #000;
			border-radius: 30px;
			overflow: hidden;
		}

		.input-box input{
			border: none;
			width: 100%;
			height: 100%;
			background: rgba(255, 255, 255, 0.56);
			text-align: center;
			font-size: 30px;
			color: black;
			font-family: 'Mali', cursive;
			z-index: 8;
		}

		/* Slicebox Style */
		.sb-slider {
			margin: 10px auto;
			position: relative;
			overflow: hidden;
			width: 100%;
			list-style-type: none;
			padding: 0;
		}

		.sb-slider li {
			margin: 0;
			padding: 0;
			display: none;
		}

		.sb-slider li > a {
			outline: none;
		}

		.sb-slider li > a img {
			border: none;
		}

		.sb-slider img {
			max-width: 100%;
			display: block;
		}

		.sb-description {
			padding: 20px;
			bottom: 10px;
			left: 10px;
			right: 10px;
			z-index: 1000;
			position: absolute;
			background: #CBBFAE;
			background: rgba(190, 176, 155, 0.4);
			border-left: 4px solid rgba(255, 255, 255, 0.7);
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
			filter: alpha(opacity=0);
			opacity: 0;
			color: #fff;

			-webkit-transition: all 200ms;
			-moz-transition: all 200ms;
			-o-transition: all 200ms;
			-ms-transition: all 200ms;
			transition: all 200ms;
		}

		.sb-slider li.sb-current .sb-description {
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
			filter: alpha(opacity=80);
			opacity: 1;
		}

		.sb-slider li.sb-current .sb-description:hover {
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";
			filter: alpha(opacity=99);
			background: rgba(190, 176, 155, 0.7);
		}

		.sb-perspective {
			position: relative;
		}

		.sb-perspective > div {
			position: absolute;

			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			-o-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			transform-style: preserve-3d;

			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-o-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			backface-visibility: hidden;
		}

		.sb-side {
			margin: 0;
			display: block;
			position: absolute;

			-moz-backface-visibility: hidden;

			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			-o-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			transform-style: preserve-3d;
		}

		.shadow {
			width: 70%;
			margin-left: 40px;
			height: 168px;
			position: relative;
			margin-top: -130px;
			background: transparent url(<?php echo e(asset('img/shadow.png')); ?>) no-repeat bottom center;
			background-size: 100% 100%; /* stretches it */
			z-index: -1;
			opacity: 0.5;
			display: none;
		}

		.sb-description h3 {
			font-size: 20px;
			text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
		}

		.sb-description h3 a {
			color: #4a3c27;
			text-shadow: 0 1px 1px rgba(255, 255, 255, 0.5);
		}

		.nav-arrows {
			display: none;
		}

		.nav-arrows a {
			width: 42px;
			height: 42px;
			background: #cbbfae url(<?php echo e(asset('img/nav.png')); ?>) no-repeat top left;
			position: absolute;
			top: 50%;
			left: 2px;
			text-indent: -9000px;
			cursor: pointer;
			margin-top: -21px;
			opacity: 0.9;
			border-radius: 50%;
			box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
		}

		.nav-arrows a:first-child {
			left: auto;
			right: 2px;
			background-position: top right;
		}

		.nav-arrows a:hover {
			opacity: 1;
		}

		.nav-dots {
			text-align: center;
			position: absolute;
			bottom: -5px;
			height: 30px;
			width: 100%;
			left: 0;
			display: none;
		}

		.nav-dots span {
			display: inline-block;
			width: 16px;
			height: 16px;
			border-radius: 50%;
			margin: 3px;
			background: #cbbfae;
			cursor: pointer;
			box-shadow: 0 1px 1px rgba(255, 255, 255, 0.6),
			inset 0 1px 1px rgba(0, 0, 0, 0.1);
		}

		.nav-dots span.nav-dot-current {
			box-shadow: 0 1px 1px rgba(255, 255, 255, 0.6),
			inset 0 1px 1px rgba(0, 0, 0, 0.1),
			inset 0 0 0 3px #cbbfae,
			inset 0 0 0 8px #fff;
		}

		.nav-options span {
			width: 30px;
			height: 30px;
			background: #cbbfae url(<?php echo e(asset('img/options.png')); ?>) no-repeat top left;
			text-indent: -9000px;
			cursor: pointer;
			opacity: 0.7;
			display: inline-block;
			border-radius: 50%;
		}

		.nav-options span:first-child {
			background-position: -30px 0px;
			margin-right: 3px;
		}

		.nav-options span:hover {
			opacity: 1;
		}
		.hidden {
			opacity: 0;
			visibility: hidden;
		}
		.show{
			opacity: 1;
			visibility: visible;
		}

		.wrapper{
			margin: 7% 0 0 0;
		}
	</style>
</head>
<body>
<div class="img-box-loading">
	<img src="<?php echo e(asset('img/loading.png')); ?>" alt="">
</div>
<div class="input-box">
	<input type="text" name="username" class="name" placeholder="Tên của em ?">
</div>

<div class="wrapper hidden" style="transition: .5s; ">

	<ul id="sb-slider" class="sb-slider" style="z-index: 100">
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide1.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Creative Lifesaver</h3>
			</div>
		</li>
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide2.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Honest Entertainer</h3>
			</div>
		</li>
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide3.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Brave Astronaut</h3>
			</div>
		</li>
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide4.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Affectionate Decision Maker</h3>
			</div>
		</li>
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide5.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Faithful Investor</h3>
			</div>
		</li>
		<li>
			<a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank">
				<img src="<?php echo e(asset('img/slide6.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Groundbreaking Artist</h3>
			</div>
		</li>
		<li>
			<a href="javascript:void (0)" target="_blank">
				<img src="<?php echo e(asset('img/slide7.jpg')); ?>" alt="image1"/>
			</a>
			<div class="sb-description">
				<h3>Selfless Philantropist</h3>
			</div>
		</li>
	</ul>

	<div id="shadow" class="shadow" style="z-index: 99; margin-left: 200px; margin-top: -90px;" ></div>
	<embed name="bosse" src="<?php echo e(asset('media/CoDuocKhongEm-ChiDan-4820683.mp3')); ?>" loop="true" autostart="true" style="visibility:hidden;"/>

</div><!-- /wrapper -->

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="<?php echo e(asset('js/myJs.js')); ?>"></script>
<script src="<?php echo e(asset('js/slideBox.js')); ?>"></script>
<script type="text/javascript">
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows').hide(),
                $navOptions = $('#nav-options').hide(),
                $shadow = $('#shadow').hide(),
                slicebox = $('#sb-slider').slicebox({
                    onReady: function () {

                        $navArrows.show();
                        $navOptions.show();
                        $shadow.show();

                    },
                    orientation: 'h',
                    cuboidsCount: 3
                }),

                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':first').on('click', function () {

                        slicebox.next();
                        return false;

                    });

                    $navArrows.children(':last').on('click', function () {

                        slicebox.previous();
                        return false;

                    });

                    $('#navPlay').on('click', function () {

                        slicebox.play();
                        return false;

                    });
                    slicebox.play();
                };

            return {init: init};

        })();

        Page.init();

    });
</script>
<script>
    function getRandomArbitrary(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    $(document).ready(function () {
        setInterval(function () {
            var screenHeight = $(document).height();
            var screenWidth = $(document).width();

            var startLeft = getRandomArbitrary(0, screenWidth / 1, 5);

            var timeRun = getRandomArbitrary(4000, 6000);
            var opacityR = Math.random() * (0.9 - 0.2) + 0.2;
            var sizeR = getRandomArbitrary(5, 20);

            var endLeft = getRandomArbitrary(startLeft - 100, startLeft + 100);

            var snow = document.createElement('span');

            $(snow).addClass('snow-item fas fa-heart').css({
                'position': 'absolute',
                'z-index': 'auto',
                'color': '#dc413d',
                'display': 'block',
                'top': 0,
                'height': '10px',
                'left': startLeft,
                'opacity': opacityR,
                'font-size': sizeR + 'px'
            })
                .appendTo('body')
                .animate({
                    'top': screenHeight - sizeR,
                    'left': endLeft
                }, {
                    duration: timeRun,
                    easing: 'linear',
                    complete: function () {
                        $(this).fadeOut('fast', function () {
                            $(this).remove();
                        });
                    }
                });

        }, 500);
    });
    setTimeout(function () {
        $('.img-box-loading').fadeOut('slow');
        $('.img-box-loading img').attr('style', 'width:0px;')
    },2000);

    $('.name').keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        var name = $('.name').val();
        if (keycode == '13' && name != null) {
			if(name == "hoaianh" ){
			    $('.wrapper').addClass('show');
			    $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
			} else if (name == "Hoài Anh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "hoài Anh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc' + name + '20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "HoàiAnh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "hoaiAnh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "HOAIANH") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "hoài anh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            }else if (name == "Hoài anh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            } else if (name == "hoai anh") {
                $('.wrapper').addClass('show');
                $('.wrapper').removeClass('hidden');
                $('.sb-description h3').html('Chúc ' + name + ' 20 - 10 vui vẻ nhé em!');
                $('.input-box').addClass('hidden');
            } else {
                alert('Nhập đúng tên của em mà a đã biết :D')
            }
        }

    });

</script>

</html>
