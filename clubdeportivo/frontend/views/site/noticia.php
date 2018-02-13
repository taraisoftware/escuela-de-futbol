<!-- blog -->
<?php

$not= backend\models\tablenoticias::findOne($id);
$user=	backend\models\User::findOne($not->created_by);
?>
<div class="blog">
			<!-- container -->
			<div class="container">
					
				<div class="col-md-8 blog-top-right-grid">
						<div class="w3ls-heading">
								<h3><?= $not->titulo ?></h3>
							</div>
							<br>
					<div class="left-blog left-single">
						<div class="blog-left">
							<div class="single-left-left">
									<p>Publicado por <a href="#"><?= $user->username  ?></a> &nbsp;&nbsp; en <?= $not->created_at ?> &nbsp;&nbsp;</p>
									<img src="<?= $not->imagen ?>" alt="" />
							</div>
							<div class="blog-left-bottom left-bottom">
							<br>
							<br>
								<p><?= $not->detalles?></p>
							</div>
						
						</div>

						<div class="clearfix"> </div>
			</div>
			</div>
			</div>