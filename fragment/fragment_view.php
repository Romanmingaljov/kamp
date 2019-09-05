<style>
	table td{
		border: 1px solid #ddd;
	}
</style>
<?php function fragment_view() { ?>
	<?php 
		$query = "SELECT * FROM building";
		$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

		echo "<table class=\"table table-responsive table-width\" style=\"width: 99%; border: 1px solid #ddd;\">
			<td>Название</td>
			<td>Кадастр</td>
			<td>Дата</td>
			<td>Адрес</td>
			<td>Тип</td>
			<td>Объект</td>
			<td>Год</td>
			<td>Площадь</td>
			<td>id</td>";
		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		    echo "\t<tr>\n";
		    foreach ($line as $col_value) {
		        echo "\t\t<td>$col_value</td>\n";
		    }
		    echo "\t</tr>\n";
		}
		echo "</table>\n";

		// Очистка результата
	?>
<?php } ?>
