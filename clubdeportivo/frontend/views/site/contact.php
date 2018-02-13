<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>

<!-- contact -->
<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.139391884287!2d-72.91546528519224!3d11.54185699180493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8b62bad91fca0d%3A0x69000b206ab55fd8!2sCl.+14b+%2312-52%2C+Riohacha%2C+La+Guajira!5e0!3m2!1ses!2sco!4v1518416962973" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3>Contactanos</h3>
					<h4>Dirección:</h4>
					<p>
						 calle 14b # 12 – 52
					</p>
					<h4>Llamanos:</h4>
					<p>Teléfonos 300-3841893 - 3172716807
					</p>
					<p>
						E-mail: <a href="fundacion.sociodeportiva@gmail.com">fundacion.sociodeportiva@gmail.com</a>
					</p>
<br><br>
					<h4>Información: Escuela de Formación Deportiva Atlético Nacional Filial La Guajira</h4>
					<p>Correo:<a href=" atleticonacionalfilialguajira@gmail.com">atleticonacionalfilialguajira@gmail.com </a></p>
					<p> Facebook: atlético nacional filial guajira </p>

<h4>Dirección: </h4> calle 14b # 12 – 52
<h4>Llamanos:</h4>
<p> Tel: 300-3841893 - 3172716807 </p>
				</div>
				<div class="col-md-6 contact-form">
					<form action="#" method="post" id="contact-form">
						<input type="text" name="Name" placeholder="Nombre" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Asunto" required="">
						<textarea name="Message" placeholder="Mensaje" required=""></textarea>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->




