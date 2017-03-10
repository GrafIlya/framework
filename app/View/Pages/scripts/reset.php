<div class="body">
<form method="post" align="center" class="resset">
<label style="color: #000;"> Введите логин для восстановления пароля.<br></label>
		<label style="color: #000;">Логин</label><br>
		<input type="text" name="log"><br>
        <label style="color: #000;">Старый пароль</label><br>
        <input type="password" name="pwd"><br>
        <label style="color: #000;">Новый пароль</label><br>
		<input type="password" name="pwd1"><br>
        <?php
		
			$filename = 'logins.txt';
			$file = file_get_contents($filename);
			$file = str_replace($_POST['pwd'], $_POST['pwd1'], $file);
			file_put_contents($filename, $file);
			if(file_put_contents($filename, $file) == true)
		?>
		<input class="knonka" type="submit" value="Сменить"/>
</form>
</div>