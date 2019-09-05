<?php session_start(); ?>
<?php require 'fragment/functions.php'; ?>
<?php require 'fragment/connection.php'; ?>
<?php require 'fragment/fragment_header.php'; ?>
<?php require 'fragment/fragment_menu.php'; ?>
<?php require 'fragment/fragment_content.php'; ?>
<?php require 'fragment/fragment_footer.php'; ?>
<?php require 'fragment/fragment_exit.php'; ?>
<?php require 'fragment/fragment_galery.php'; ?>
<!DOCTYPE html>
<html>
<span class="noprint">
<head>
    <?php fragment_header(); ?>
</head>
</span>
<body>
	<?php fragment_content();?>
</body>
<?php fragment_footer(); ?>
</html>