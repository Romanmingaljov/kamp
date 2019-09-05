<?php
require 'fragment/connection.php';
require 'fragment/fragment_insert.php';
?>
<span class="noprint">
<div id="insert_form" style="height: 120px;">
	<form method="POST">
		<p>Введите данные:</p>
		<input type="text" name="id" placeholder="id">
		<input type="text" name="building_name" placeholder="building_name">
		<input type="text" name="cadastr" placeholder="cadastr">
		<input type="text" name="date" placeholder="date">
		<input type="text" name="adress" placeholder="adress">
		<input type="text" name="type" placeholder="type">
		<input type="text" name="object" placeholder="object">
		<input type="text" name="year" placeholder="year">
		<input type="text" name="area" placeholder="area">

		<input type="submit" name="insert" onclick="document.location.reload(true);" value="Добавить">
	</form>

<!--<input type="button" value="Печать" onclick="print()"></input> -->
</div>
<?php 
	if(isset($_POST['insert'])){
		$id = $_POST['id'];
		$building_name = $_POST['building_name'];
		$cadastr = $_POST['cadastr'];
		$date = $_POST['date'];
		$adress = $_POST['adress'];
		$type = $_POST['type'];
		$object = $_POST['object'];
		$year = $_POST['year'];
		$area = $_POST['area'];

		fragment_insert($id, $building_name, $cadastr, $date, $adress, $type, $object, $year, $area);

		echo "<p class=\"printelse\">Запись успешно добавлена!</p>";

	}
?>
</span>
</div>
