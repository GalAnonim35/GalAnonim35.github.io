<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />

<title>Beauty</title>

  

<style type="text/css" media="all">

		@import "beauty.css";

	</style>

</head>



<body>

<div id="farouter">

<div id="outer">

<div id="wrap">

<div id="headermain">



<h1 id="header">By� pi�kn�..</h1>

<h2 id="tagline">Z <b>nami</b>b�dziesz<em>...</em></h2>

</div>



<div id="hmenu">

<div id="hnav">



<!-- Tutaj zaczyna si� menu-->

<ul id="navlist">



	<li><a href="http://www.ittechnology.us/szablony/uroda/" title="Link do strony g��wnej serwisu">Strona G��wna</a></li>

<li><a href="http://www.ittechnology.us/szablony/uroda/o-firmie.html" title="Opis firmy Salon Pi�kno�ci Uroda">O firmie</a></li>

          <li><a href="http://www.ittechnology.us/szablony/uroda/uslugi.html" title="Szczeg�owy opis us�ug w naszym Salonie Pi�kno�ci">Nasze us�ugi</a></li>

<li><a href="http://www.ittechnology.us/szablony/uroda/dojazd.html" title="Opis dojazdu do firmy Salon Pi�kno�ci Uroda">Dojazd do nas</a></li>

          <li><a href="http://www.ittechnology.us/szablony/uroda/kontakt.php" title="Mo�na si� z nami skontaktowa� telefoniczne i mailowo">Kontakt</a></li>

</ul>



<!-- Tutaj ko�czy si� menu -->



</div></div>





<div id="main">







<div id="content">



<div id="nav">





 <div id="archives">

<div id="title" >

 Salon Pi�kno�ci Uroda</div>

 <address>

    ul. Dickensa 23/23

  <br />

  01-111 Krak�w

  <br />

  tel. 046 22343456

  <br />

 </address>



 </div>





	



 	

</div>

<div style="width:500px">



  <!-- Tutaj zaczyna si� tre�� -->



<h2>Nag��wek </h2>

		<p>



Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc venenatis erat

eget dolor. Praesent risus felis, mattis at, ultrices in, laoreet ac, nunc.

Pellentesque semper tempus pede. In hac habitasse platea dictumst. Integer

ipsum tortor, tempus ut, vehicula ac, consequat id, nisl. Aliquam sit amet nunc

ut tellus faucibus sodales. Nulla sed nisi. Fusce consectetuer dignissim leo.

Nullam mollis dui ultricies ipsum. Duis mollis, mi sit amet tincidunt

vestibulum, erat nisi mollis neque, in elementum massa dolor quis dolor.

Suspendisse sem diam, luctus ac, vestibulum interdum, accumsan vel, ligula.

Aliquam erat volutpat. Curabitur sed nisl.  </p>



<h2>Nag��wek 2</h2>



 <p>Je�eli maj� Pa�stwo jakiekolwiek pytania z ch�ci� odpowiemy na nie. Prosimy o kontakt drog� telefoniczn� lub mailow�. Mamy nadziej�, �e nasze us�ugi spe�ni� Pa�stwa oczekiwania. </p>

		  

		

<?php

// sprawdzamy, czy zmienna $submit jest pusta

if (empty($_POST['submit'])) {

    // wy�wietlamy formularz

    echo "<table border=\"0\"><form method=\"post\">

<tr>

<td>Temat wiadomo�ci</td>

<td><input type=\"text\" name=\"temat\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>Tre�� wiadomo�ci</td>

<td><textarea name=\"tresc\" style=\"width: 250px; height: 100px\"></textarea></td>

</tr>

<tr>

<td>Imi�, nazwisko lub nick</td>

<td><input type=\"text\" name=\"imie\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>Adres e-mail</td>

<td><input type=\"text\" name=\"email\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>&nbsp;</td>

<td><input type=\"submit\" name=\"submit\" value=\"Wy�lij\">&nbsp;



</tr>

</table>";

}

// sprawdzamy, czy zmienne przes�ane z formularza nie s� puste

elseif (!empty($_POST['temat']) && !empty($_POST['tresc']) && !empty($_POST['imie']) && !empty($_POST['email'])) {

    // je�eli powy�szy warunek jest spe�niony tworzona jest wiadomo��

    // zmienna $message zawiera tre�� wiadomo�ci

    $message = "Temat wiadomo�ci:\n$_POST[temat]\nTre�� wiadomo�ci:\n$_POST[tresc]\nWys�a�,: $_POST[imie]\ne-mail: $_POST[email]";

    // zmienna $header zawiera przede wszystkim adres zwrotny

    $header = "From: $_POST[imie] <$_POST[email]>";

    // funkcja mail() za pomoc� kt�rej wiadomo�� zostanie wys�ana

    @mail("mail@twoja-domena.pl","Wiadomosc ze strony WWW","$message","$header")

    or die('Nie uda�o si� wys�a� wiadomo�ci');

    // wy�wietlenie komunikatu w przypadku powodzenia 

    echo "<div align=\"center\"><strong>Wiadomo�� zosta�a wys�ana poprawnie! Postaramy si� jak najszybciej dostarczy� odpowied� na Pa�stwa zapytanie. </strong></div>";

}

// lub w przypadku nie wype�nienia formularza do ko�ca

else echo "<span style=\"color: #FF0000; text-align: center;\">Wype�nij wszystkie pola formularza!</span>";



?> 

	<!-- Tutaj ko�czy si� tre�� -->

		</div>





<br/>





</div>





</div>

</div>

<div id="menu">











</div>



<div id="clearer">&nbsp;</div>

<div id="footer">&copy; 2007 Salon Pi�kno�ci Uroda | Projekt <a href="http://www.kumi.co.nr" style="color:#aaa;font-size:0.95em">Kumiko</a> Opracowanie <a href="http://www.ittechnology.us/" style="color:#aaa;font-size:0.95em">Marketing w Internecie</a>





</div>

</div>

</div>

</div>





</body>

</html>