<div class="body">
<form method="post" align="center" class="regform">
          <label style="color: #000;">  *- поле обязательно для заполнения.<br></label>
		  <label style="color: #000;">  Все ошибки выводятся внизу экрана.<br></label>
        <label style="color: #000;">Логин *</label><br>
        <input type="text" name="log" required value="<? if(isset($_POST['log'])) echo $_POST['log']; ?>"><?php if(isset($login)) echo $login;?><br>
        <label style="color: #000;">Пароль *</label><br>
        <input type="password" name="pwd" required value="<? if(isset($_POST['pwd'])) echo $_POST['pwd']; ?>"><?php if(isset($password)) echo $password;?><br>
        <label style="color: #000;">Повторите пароль *</label><br>
        <input type="password" name="pwd1" required value="<? if(isset($_POST['pwd1'])) echo $_POST['pwd1']; ?>"><?php if(isset($password)) echo $password;?><br>
        <label style="color: #000;">Фамилия *</label><br>
        <input type="text" name="surname" required value="<? if(isset($_POST['surname'])) echo $_POST['surname']; ?>"><?php if(isset($surnname)) echo $surnname;?><br>
        <label style="color: #000;">Имя *</label><br>
        <input type="text" name="name" required value="<? if(isset($_POST['name'])) echo $_POST['name']; ?>"><?php if(isset($nam)) echo $nam;?><br>
        <label style="color: #000;">Отчество</label><br>
        <input type="text" name="midname" value="<? if(isset($_POST['midname'])) echo $_POST['midname']; ?>"><?php if(isset($mid)) echo $mid;?><br>
        <label style="color: #000;">Пол *</label><br>
        <select name="sex" required>
          <option value="Мужской">
          Мужской
          </option>
          <option value="Женский">
          Женский
          </option>
        </select><br>
        <label style="color: #000;">E-Mail *</label><br>
        <input type="email" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"><?php if(isset($poshta)) echo $poshta;?><br>
        <label style="color: #000;">Возраст *</label><br>
        <input type="text" name="age" required value="<? if(isset($_POST['age'])) echo $_POST['age']; ?>"><?php if(isset($ag)) echo $ag;?><br>
        <label style="color: #000;">Место нахождения *</label><br>
        <select name="country" required>
          <option>
          СНГ
          </option>
          <option>
          Европа
          </option>
          <option>
          Азия
          </option>
          <option>
          Америка
          </option>
        </select><br>

        <label style="color: #000;">О себе</label><br>
        <textarea style="resize: none;" rows="8" cols="35" name="about"><? if(isset($_POST['about'])) echo $_POST['about']; ?></textarea><br>

        <?
        if(isset($_POST['log']) && isset($_POST['pwd']) && isset($_POST['pwd1']) && isset($_POST['surname']) && isset($_POST['name'])
         && isset($_POST['sex']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['country'])
        && !empty($_POST['log']) && !empty($_POST['pwd']) && !empty($_POST['pwd1']) && !empty($_POST['surname']) && !empty($_POST['name'])
         && !empty($_POST['sex']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['country']))
        {
            if(!preg_match('/^[a-z0-9]{3,}+$/i',$_POST['log']))
            {
              echo '<span>Логин не соответсвует формату.<br>
                          Только английские буквы и цифры<br>
                          От 3 и более символов<br></span>';
            }
            else
                if(!preg_match('/^[A-Za-z0-9@!.#]{5,}+$/i',$_POST['pwd']))
            {
               echo '<span>Неправильно задан пароль.<br>
                          Используйте только английские буквы и эти симвалы @!.#.<br>
                        Длина пароль минимум 5 символов.<br></span>';
            }
            else
                	if($_POST['pwd'] != $_POST['pwd1'])
            {
               echo '<span>Пароли не совпадают.<br></span>';
            }
            else
                if(!preg_match('/^[А-ЯЁа-яё]{2,}+$/iu',$_POST['surname']))
            {
               echo '<span>Только русские символы.<br>
                          Длинна фамилии минимум 2 символа.<br></span>';
            }
            else
                if(!preg_match('/^[А-ЯЁа-яё]{3,}+$/iu',$_POST['name']))
            {
              echo '<span>Только русские символы.<br>
                         Длинна имени минимум 3 символа.<br></span>';
            }
            else
                if(!preg_match('/^[А-ЯЁа-яё]{5,}+$/iu',$_POST['midname']))
            {
              echo '<span>Только русские символы.<br>
                         Длинна отчества минимум 3 символа.<br></span>';
            }
            else
                if(!preg_match('/^[A-Za-z0-9]+@[a-z0-9]+\.[a-z]/i',$_POST['email']))
            {
               echo '<span>Неправильно задана почта.<br>
                          Например: example@google.ru<br></span>';
             }
            else
                if(!preg_match('/^[0-9]{1,3}+$/',$_POST['age']))
            {
              echo '<span>Неправильно указал возраст<br>
                          Только цифры.<br></span>';
            }
            else
              {
				  if(($file = fopen("logins.txt", "r"))==0)
				  {
					  $file = fopen("logins.txt", "w");
				  }
                if($_POST['pwd'] == $_POST['pwd1'])//Совпадение паролей
                {
                  $pd = false;
				  
                  $file = fopen("logins.txt", "r");
                  while(!feof($file))//Пока в файле
                  {
                    $line = fgets($file);
                    $arr = explode('|', $line);
                    if(@$arr[0] == $_POST['log']) $pd = true;
                  }
                  fclose($file);
                  if($pd == false)//Если логина не нашли
                  {
                    $str = $_POST['log'].'|'.$_POST['pwd'].'|'.$_POST['surname'].'|'.$_POST['name'].'|'.$_POST['midname'].'|'.$_POST['sex'].'|'.$_POST['email'].'|'.$_POST['age'].'|'
                    .$_POST['country'].'|'.$_POST['about'];
                    $file = file_put_contents('logins.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
                    header("Refresh: 3;  url=/");
                    echo '<span>Регистрация успешна!<br></span>';
                  }
                  else echo' <span>Логин уже занят.<br></span>';
              }
              else echo '<span>Пароли не совпадают.<br></span>';
            }
          }
            else if(isset($_POST['country'])) echo '<span>Введены не все данные.<br></span>';
          ?>

        <input class="knonka" type="submit" value="Регистрация"/>
        <input class="knonka" type="reset" value="Сброс"/>
        </form>
</div>