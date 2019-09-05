<?php function fragment_search($search_bn, $search_c) { ?>
	<?php 
		$query = "SELECT * FROM building WHERE building_name LIKE '%$search_bn%' AND type LIKE '%$search_c%'";
		$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

		echo "<table class=\"table table-width\" style=\"border: 1px solid #ddd; width: 99%;\">
			<td>name</td>
			<td>cadastr</td>
			<td>date</td>
			<td>adress</td>
			<td>type</td>
			<td>object</td>
			<td>year</td>
			<td>area</td>
			<td>id</td>";
		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		    echo "\t<tr>\n";
		    foreach ($line as $col_value) {
		        echo "\t\t<td>$col_value</td>\n";
		    }
		    echo "\t</tr>\n";
		}
		echo "</table>\n";
		pg_free_result($result);
	?>
<?php } ?>
