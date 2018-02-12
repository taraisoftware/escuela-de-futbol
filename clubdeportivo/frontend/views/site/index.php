<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">

				<?php 
				
				$ban= backend\models\tablebanners::find()->all();
$cont=0;
foreach ($ban as $value=>$key) {
	if ($cont==0) {
		echo '<li data-target="#carousel-example-generic" data-slide-to="'.$cont.'" class="active"></li>';
		$cont++;
	} else {
		echo '<li data-target="#carousel-example-generic" data-slide-to="'.$cont.'" ></li>';
		$cont++;
	}
	
	
}
				?>
				 
				</ol>
			  
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				<?php 
				
				$ban= backend\models\tablebanners::find()->all();
$cont=0;
foreach ($ban as $value=>$key) {
	if ($cont==0) {
		echo ' <div class="item active">
		<img src="'.$key['imagen'].'" alt="...">
		<div class="carousel-caption">
					
		</div>
		</div>';
		$cont++;
	} else {
		echo ' <div class="item">
		<img src="'.$key['imagen'].'" alt="...">
		<div class="carousel-caption">
					
		</div>
		</div>';
		$cont++;
	}
	
	
}
				?>

					</div>
			  
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
              <div class="news">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Noticias</h3>
			</div>
			<div class="w3-agileits-news-grids">
				<div class="col-md-6 news-left">
					<div class="w3-agile-news-date">
					<!--	<div class="agile-news-icon">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<p>Nov 24</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
							<p>2 comments</p>
						</div>
						<div class="agileits-line"> </div>
						<div class="agile-news-icon">
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
							<p>3482</p>
						</div> -->
					</div>
					<?php  
$noti= backend\models\tablenoticias::find()->all();
$cont=0;
foreach ($noti as $value=>$key) {
	if($cont==0){
echo '	<div class="w3-agile-news-img">
<a href="'.Url::to(['site/noticia','id'=> $key['id']]).'"><img src="'.$key['imagen'].'" /></a>
<h4><a href="'.Url::to(['site/noticia','id'=> $key['id']]).'">'.$key['titulo'].'</a></h4>
<p>'.$key['descripcion'].'</p>	</div>
<div class="clearfix"> </div>
</div> 
<div class="col-md-6 news-right">
<div class="w3-button">
		<a href="'.Url::to(['site/noticias']).'">Ver todas</a>
	</div>'
; 
$cont++;
} 
else{
	if($cont>0 && $cont<4){
		echo '	
		<div class="news-right-grid">
		<a href="'.Url::to(['site/noticia','id'=> $key['id']]).'">'.$key['titulo'].'</a>
		<h5>'.$key['created_at'].'</h5>
		<p>'.$key['descripcion'].'</p>
							</div>';
		}
		$cont++;
}
}
echo'	</div>
				
<div class="clearfix"> </div>

</div>
</div>

</div>';
		?>




<div class="welcome">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Nuestra Galeria</h2>
			</div>
			<div class="welcome-grids">
				<div class="col-md-12 agile-welcome-grid">
					<div class="grid">

					<?php  
$gale= backend\models\tablegalerias::find()->all();
$cont=0;
foreach ($gale as $value=>$key) {
	if($cont<4){				
			echo			'<div class="col-md-3 agileits-left">
							<figure class="effect-chico">
								<img src="'.$key['imagen'].'" alt="" />
								<figcaption>
							
								</figcaption>			
							</figure>
						</div>';
						$cont++;
	}}
	?>
						<div class="clearfix"> </div>
						<div class="w3-button">
								<a href="<?=Url::to(['site/galeria']); ?>">Ver todo</a>
							</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

				