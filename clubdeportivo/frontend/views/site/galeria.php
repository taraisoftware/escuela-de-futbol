<!-- gallery -->
<div class="gallery">
		<div class="container">
			<div class="gallery-grids">

            <?php  
            $gale= backend\models\tablegalerias::find()->all();
$cont=0;
foreach ($gale as $value=>$key) {

echo   '<div class="col-md-4 gallery-grid">
<div class="grid"> 
    <figure class="effect-apollo">
        <a class="example-image-link" href="'.$key['imagen'].'" data-lightbox="example-set" data-title="">
                <img src="'.$key['imagen'].'" alt="" />
                <figcaption>
                    <p></p>
                </figcaption>	
            </a>
        </figure>
    </div>
</div>'
;
}
?>

				
				



					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->