<style media='print' type='text/css'>
#navbar-iframe {display: none; height: 0px; visibility: hidden;}
.noprint {display: none;}
body {background:#FFF; color:#000;}
a {text-decoration: underline; color:#00F;}
}
</style>
<?php
require 'fragment/connection.php';
require 'fragment/fragment_view.php';
require 'fragment/fragment_insert.php';
require 'fragment/fragment_search.php';
?>
<span class="noprint">
<div id="left_menu">
	<ul class="ul_table">
		<li>Нежилое здание</li>
		<li>Беседка</li>
		<li>Специальное</li>
		<li>Водохранилище</li>
		<li>Ограждение</li>
		<li>Дорожное покрытие и тротуары</li>
		<li>Площадка демонстрационная</li>
		<li>Спортивная площадка</li>
		<li>Сети электропередачи</li>
		<li>Столовая</li>
		<li>Полигон учебный автошколы</li>
	</ul>
</div>
</span>
<div style="float: right; overflow-y: auto; width: 900px;">
<span class="noprint">
	<a href="#" onclick="print()"><img src="./images/print.png" width="20px;" height="20px;" style="position: absolute; right: 30px; top: 10px;"></a>
	<a href="index.php?page=added"><img src="./images/edit.png" width="20px;" height="20px;" style="position: absolute; right: 50px; top: 10px;"></a>
</span>
<div id="search_form">
	<form method="POST">
		<span class="noprint">
			<p>Поиск: </p>
			<input type="text" name="search_bn" placeholder="building_name">
			<input type="text" name="search_c" placeholder="type">

			<input type="submit" name="search" value="Найти"><p>
		</span>
	</form>
	<?php 
		if(isset($_POST['search'])){
		$search_bn = $_POST['search_bn'];
		$search_c = $_POST['search_c'];
		fragment_search($search_bn, $search_c);
	}
	?>
</div>
<div id="view_form">
	<?php fragment_view(); ?>
</div>
<!--<input type="button" value="Печать" onclick="print()"></input> -->
</div>

<?php 
	if(isset($_POST['added'])){
	$path = '/content/added.php';
    include $path;
	}
?>
<!-- 
	educational_building
	educational_building_room
	educational_room
	educational_room_type

	forms_object

	object_complex
	object_status_indicator
	object_status_kard
	object_type
	object_type_assignment
	

	land_appointment
	land_category
	land_plot
	land_status_kard
-->