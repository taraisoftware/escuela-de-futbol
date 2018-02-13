
<div class="blog">
		<!-- container -->
		
		<div class="container">
			
			<div class="blog-top-grids">
				<div class="col-md-8 blog-top-right-grid">
					<div class="left-blog">
							<div class="w3ls-heading">
									<h3>Noticias</h3>
								</div>
								<br>
								<br><br>

								<?php
use yii\helpers\Url;  
            $noti= backend\models\tablenoticias::find()->all();

foreach ($noti as $value=>$key) {
$user=	backend\models\User::findOne($key['created_by']);
	echo '<div class="blog-left">
	<div class="blog-left-left">
<p>Publicado por  <a href="#">'.$user->username.'</a> &nbsp;&nbsp; en '.$key['created_at'].' &nbsp;&nbsp;</p>
<a href="'.Url::to(['site/noticia','id'=> $key['id']]).'"><img src="'.$key['imagen'].'" alt="" /></a>
							</div>
							<div class="blog-left-right">
								<a href="'.Url::to(['site/noticia','id'=> $key['id']]).'">'.$key['descripcion'].'
							</p>
							</div>
							<div class="clearfix"> </div>
						</div>

';
}

?>


					


					</div>
					
				</div>
                </div>
					
                    </div>