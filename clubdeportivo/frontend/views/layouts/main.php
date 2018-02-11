<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);

$scroll='jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
	});
});';


$icon="$(document).ready(function() {
	/*
		var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear' 
		};
	*/
						
	$().UItoTop({ easingType: 'easeOutQuart' });
						
	});";
$this->registerJs($scroll);
$this->registerJs($icon);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode('club deportivo') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
 
<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">Club <span>Deportivo</span></a>
						</h1>
					</div>
				</div>
				<div class="header-right">
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="<?=Url::to(['site/index']); ?>">Inicio</a></li>
									<li><a href="<?=Url::to(['site/conocenos']); ?>">Quienes somos</a></li>
									
									<li><a href="<?=Url::to(['site/convenios']); ?>">Convenios</a></li>
									<li><a href="blog.html" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escuela formacion<span class="caret"></span></a>
									
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="icons.html">Categorias chupeta 10 y 11 años</a></li>
											<li><a class="hvr-bounce-to-bottom" href="typography.html">Categoria prebenjamin 2009 </a></li>     
											<li><a class="hvr-bounce-to-bottom" href="typography.html">Categoria prebenjamines 2007-2008</a></li>    
											<li><a class="hvr-bounce-to-bottom" href="typography.html">Pre juvenil 2005</a></li>    
											<li><a class="hvr-bounce-to-bottom" href="typography.html">Matriculas                </a></li>         
										</ul>
									</li>					
									<li><a href="gallery.html">Galeria</a></li>
								<!--	<li><a href="blog.html">Blog</a></li> -->
									<li><a href="contact.html">Contactenos</a></li>
									<li><a   href="<?=Yii::$app->urlManagerBackEnd->createUrl('index.php') ?>" target="_blank"  >Login</a><span> </span></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
					</div>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer>
		<div class="container">
			<div class="agileits-w3layouts-footer-grids">
				<div class="col-md-4 footer-left">
					<h3>
						<a href="index.html">Club <span>Deportivo</span></a>
					</h3>
					<div class="footer-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 footer-left">
					<h4>Navigation</h4>
					<div class="col-md-6 footer-grid-left">
						<ul>
							<li><a class="active" href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>								
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="icons.html">Icons</a></li>
						</ul>
					</div>
					<div class="col-md-6 footer-grid-left">
						<ul>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-left">
					<h4>Newsletter</h4>
					<p>Subscribe With Us</p>
					<form action="#" method="post">
						<input type="email" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1">Go</button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</footer>
	<!-- footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2018 club deportivo todos los derechos reservados</p>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
