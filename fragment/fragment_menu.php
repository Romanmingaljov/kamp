<?php function fragment_menu() { ?>
	<li><a <?php echo ($_GET['page'] == 'main') ? "class='active'" : ""; ?> href="?page=main">ГЛАВНАЯ</a></li>
    <li><a <?php echo ($_GET['page'] == 'upr') ? "class='active'" : ""; ?> href="?page=upr">УИ и ЗО</a></li>
    <li class="dropdown-top"><a <?php echo ($_GET['page'] == 'table_upr' || $_GET['page'] == 'map_upr') ? "class='active'" : ""; ?> href="">РЕЖИМ ОТОБРАЖЕНИЯ</a>
		<ul class="dropdown-inside">
			<li><a <?php echo ($_GET['page'] == 'table_upr') ? "class='active'" : ""; ?> href="?page=table_upr">ТАБЛИЧНЫЙ</a></li>
			<li><a <?php echo ($_GET['page'] == 'map_upr') ? "class='active'" : ""; ?> href="?page=map_upr">КАРТОГРАФИЧЕСКИЙ</a></li>
		</ul>
	</li>
    <li><a <?php echo ($_GET['page'] == 'backform_upr') ? "class='active'" : ""; ?> href="?page=backform_upr">КОНТАКТЫ</a></li>
    <li><a <?php echo ($_GET['page'] == 'author') ? "class='active'" : ""; ?> href="?page=author">ЛИЧНЫЙ КАБИНЕТ</a></li>
<?php }?>