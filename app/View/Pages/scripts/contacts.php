<div class="body">
<?php
if (isset ($_POST['messageFF'])) {
  mail ("ilyaantar@yandex.ru",
        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Сообщение отправлено!</p>');
}
?>

<form method="POST" id="feedback-form">
<p>ФИО:
<input type="text" name="nameFF" required x-autocompletetype="name">
</br>Ваш Email:
<input type="email" name="contactFF" required x-autocompletetype="email">
</br>Сообщение:</p>
<textarea name="messageFF" required rows="5"></textarea>
</br><input type="submit" value="отправить">
</form>
</div>