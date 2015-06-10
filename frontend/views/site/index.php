<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="wrap">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img class="first-slide" src="/yii2_advanced/frontend/web/img/3.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Awesome design</h1>
                        <p>Responsive web design is actually customize the content of a website to the size of a mobile device.And it was designed to be easy to use</p>
                        <p><a class="btn btn-lg btn-primary" href='index.php?r=/site/signup' role="button">Sign up now</a></p>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img class="second-slide" src="/yii2_advanced/frontend/web/img/2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>A voice of the artist</h1>
                        <p>Text, pictures, music, videos, are part of our lives, but also the artistic part.This is an artistic treasure house.</p>
                        <p><a class="btn btn-lg btn-primary" href="index.php?r=/site/about" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="/yii2_advanced/frontend/web/img/1.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Licensed under the MIT license.</h1>
                        <p>We opened the source code, so that people who like this product also can modify it personally. Add new features, through us.</p>
                        <p><a class="btn btn-lg btn-primary" href="https://github.com/" role="button" target="_blank">Source Code</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

	</br></br>
<div class="site-index">


    <!--<div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
	-->
	<section id="examples" class="examples-section">
		<div class="container" align="center">
			<strong><font color="red"><h2>Photos</h2></font></strong>
			<h3>Peoples</h3>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="img/demopage/image-1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" width="120px" height="80px" src="img/demopage/image-1.jpg" alt="image-1" /></a>
					<a class="example-image-link" width="400px" height="400px" href="img/demopage/image-2.jpg" data-lightbox="example-set" data-title="Optional caption."><img class="example-image" width="120px" height="150px" src="img/demopage/image-2.jpg" alt="image-1"/></a>
				</div>	
			</div>

			<hr />
			</br></br>

			<h3 style="clear: both;">Views</h3>

			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="img/demopage/image-3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="img/demopage/thumb-3.jpg" alt=""/></a>
					<a class="example-image-link" href="img/demopage/image-4.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="img/demopage/thumb-4.jpg" alt="" /></a>
					<a class="example-image-link" href="img/demopage/image-5.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="img/demopage/thumb-5.jpg" alt="" /></a>
					<a class="example-image-link" href="img/demopage/image-6.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="img/demopage/thumb-6.jpg" alt="" /></a>
				</div>
			</div>
		</div>
	</section>
</div>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
