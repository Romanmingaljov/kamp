<?php function check($login, $password) {
	if($login == 'roman'){
		if($password == 'user'){
			$name = 'ura';
			$_SESSION['name'] = $name;
			$_SESSION['id_user'] = '1'; 
			header('Refresh: 1; url=index.php?page=upr');
		}else{
			echo 'вы ввели неверный пароль';
		}
	}else{
		echo 'вы ввели неверный логин';
	}
} ?>