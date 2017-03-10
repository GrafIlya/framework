<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $SERVER; ?>style/style.css" />
 <span id="liveclock" style="position:fixed;right:0;top:0;color:#00FA9A;"></span>


<script language="JavaScript">
<!-- Рождение часики !>
function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return

var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()

var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12

if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
myclock="<font size='5'>"+hours+":"+minutes+":"
+seconds+" "+dn+"</b></font>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
}
window.onload=show5
<!--Конец часиков-->
</script>
 </head>
<body>
	<div id="content">
		<h1 align=center><img src="<?php echo $SERVER; ?>image/logo.png"></img></h1>
		<ul id="menu" >
			<?php echo $menu;?>
		</ul>
		
		<div class="post">
			
			<?php echo $content_for_layout; ?>
			
			<div class="x"></div>
			
		</div>

		
		<div class="col">
			<h3><b>Основные положения</b></h3>
			<a href="termins"><p>Термины и определения</p></a>
			<a href="trebov"><p>Требования</p></a>
			<a href="prilog"><p>Приложения</p></a>
			<a href="ogranich"><p>Ограничения</p></a>
		</div>
		
		<div class="col">
		
			<h3><b>Атаки на стеганосистемы</b></h3>
			<p><a href="podrob">Подробнее об атаках</p></a>
			<p><a href="AIZ">Атака по известному заполненному контейнеру</p></a>
			<p><a href="AIM">Атака по известной математической модели контейнера</p></a>
			<p><a href="ANOI">Атака на основе известного пустого контейнера</p></a>
		</div>
		
		<div class="col">
			<h3><b>Применение стеганографии</b></h3>
			<p><a href="sp">В современных принтерах</p></a>
			<p><a href="cs">Цифровая стеганография</p></a>
			<p><a href="terror">Использование террористами</p></a>
			<p><a href="specs">Использование спецслужбами</p></a>
			<p><a href="pro4">Прочее</p></a>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; G-Graf</p>
		</div>	
	</div>
</body>
</html>