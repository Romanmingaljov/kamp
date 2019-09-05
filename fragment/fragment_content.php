<?php function fragment_content() { ?>	
<div id="cont" class="container main">
	<?php pageContent(); ?>
</div>
<?php if(isset($_POST['user_exit'])){
	user_exit(); 
} ?>
<?php } ?>

