<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{secure_asset('')}}">
	<link rel="icon" type="image/png" href="{{secure_asset("img/favicon.png")}}">
	<title>20 - 10 for you!</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


	<!-- Styles -->
	<style>
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
			background: url('{{secure_asset('img/bg-content.jpg')}}') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: relative;
			overflow: hidden;
			padding: 0;
		}

		.full-height {
			height: 100vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			text-align: right;
			position: fixed;
		}

		.title {
			font-size: 84px;
			z-index: auto;
			color: #000;
		}

		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		.m-b-md {
			margin: 0 0 30px 550px;
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
		}

		.img-box-loading img{
			width: 100px;
			margin: auto 0;
			transition: 0.5s;
		}

		.img-box-loading img {
			animation: animate 0.8s infinite;
		}

		@keyframes animate {
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

	</style>
</head>
<body>
<div class="img-box-loading">
	<img src="{{asset('img/loading.png')}}" alt="">
</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
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
</script>
</html>