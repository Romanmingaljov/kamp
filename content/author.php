<?php require 'fragment/connection.php'; ?>
<?php require 'fragment/fragment_check.php'; ?>

<div class="row main" style="margin-top: 50px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Пожалуйста, войдите в систему</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
						<input type="text" name="login_email" class="form-control" placeholder="Email" class="login_inp"><br>
						<input type="password" name="login_password" class="form-control" placeholder="Password" class="login_inp"><br>
						
						<button type="submit" class="login_send" name="login_send">Отправить</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
	if(isset($_POST['login_send'])){
		$login = $_POST['login_email'];
		$password = $_POST['login_password'];
		check($login, $password);
	}
?>