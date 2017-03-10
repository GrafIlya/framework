<html>
<head>
<style type="text/css">
.vhod
{
	margin-bottom: 50px;
}
  </style> 
</head>
<div class="body">
<?php
				if(!isset($_POST['login']) && !isset($_POST['pass']))
				{
					echo '
					<div class="vhod">
						<form method="POST"><div class="auto">
							<div class="user">
							<b style="color: #000;">Имя пользователя</b>
							<input maxlength="20" name="login">
							</div>
								<div class="pass">
								<b style="color: #000;">Пароль</b>
								<input type="password" name="pass">
								</div><br>
						<input class="but" type="submit" value="Вход" style="margin-left: 250px;">
              <br><br>
								</div>
						</form>
					</div>';
				}
        else
        {
            $file = fopen("logins.txt", "r");
            while(!feof($file))
            {
                $line = fgets($file);// Проверка логина, затем проверка пароля, после вывод каких-то данных. echo @$arr[1].'=='.$_POST['pwd'];
                $arr = explode('|', $line);
                if(@$arr[0] == $_POST['login'] && @$arr[1] == $_POST['pass'])
                {
                  echo '<p style="margin-top: 50px;font-size:25px;">Вы успешно авторизовались. </p>';
                  echo '<a href="/login"><p style="margin-top: 150px;font-size:25px;">Выход</p> </a>';
                  break;
                }
                if(feof($file))
                {
                  echo '<span>Такого аккаунта не существует!<br></span>';
                  echo '
        					<div class="vhod">
        						<form method="POST"><div class="auto">
        							<div class="user">
        							<b>Имя пользователя</b>
        							<input maxlength="20" name="login">
        							</div>
        								<div class="pass">
        								<b>Пароль</b><br>
        								<input type="password" name="pass">
        								</div>
        						<input class="but" type="submit" value="Вход">
                      <br><br>
        								</div>
        						</form>
        					</div>';
                  break;
                }
            }
            fclose($file);
        }

				?>
<a href="reset"><p>Сменить пароль</p></a>
</div>
</html>