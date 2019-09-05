<?php function fragment_insert($id, $building_name, $cadastr, $date, $adress, $type, $object, $year, $area) { ?>
	<?php 
		$result = pg_query("INSERT INTO building(building_name, cadastr, date_cadastr, adress, type, object, year, obl, id) 
                  VALUES('$building_name', '$cadastr', '$date', '$adress', '$type', '$object', '$year', '$area', '$id');")
		 or die('Ошибка запроса: ' . pg_last_error());
	?>
<?php } ?>