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



<h1 id="header">Być piękną..</h1>

<h2 id="tagline">Z <b>nami</b>będziesz<em>...</em></h2>

</div>



<div id="hmenu">

<div id="hnav">



<!-- Tutaj zaczyna się menu-->

<ul id="navlist">



	<li><a href="http://www.ittechnology.us/szablony/uroda/" title="Link do strony głównej serwisu">Strona Główna</a></li>

<li><a href="http://www.ittechnology.us/szablony/uroda/o-firmie.html" title="Opis firmy Salon Piękności Uroda">O firmie</a></li>

          <li><a href="http://www.ittechnology.us/szablony/uroda/uslugi.html" title="Szczegółowy opis usług w naszym Salonie Piękności">Nasze usługi</a></li>

<li><a href="http://www.ittechnology.us/szablony/uroda/dojazd.html" title="Opis dojazdu do firmy Salon Piękności Uroda">Dojazd do nas</a></li>

          <li><a href="http://www.ittechnology.us/szablony/uroda/kontakt.php" title="Można się z nami skontaktować telefoniczne i mailowo">Kontakt</a></li>

</ul>



<!-- Tutaj kończy się menu -->



</div></div>





<div id="main">







<div id="content">



<div id="nav">





 <div id="archives">

<div id="title" >

 Salon Piękności Uroda</div>

 <address>

    ul. Dickensa 23/23

  <br />

  01-111 Kraków

  <br />

  tel. 046 22343456

  <br />

 </address>



 </div>





	



 	

</div>

<div style="width:500px">



  <!-- Tutaj zaczyna się treść -->



<h2>Nagłówek </h2>

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



<h2>Nagłówek 2</h2>



 <p>Jeżeli mają Państwo jakiekolwiek pytania z chęcią odpowiemy na nie. Prosimy o kontakt drogą telefoniczną lub mailową. Mamy nadzieję, że nasze usługi spełnią Państwa oczekiwania. </p>

		  

		

<?php

// sprawdzamy, czy zmienna $submit jest pusta

if (empty($_POST['submit'])) {

    // wyświetlamy formularz

    echo "<table border=\"0\"><form method=\"post\">

<tr>

<td>Temat wiadomości</td>

<td><input type=\"text\" name=\"temat\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>Treść wiadomości</td>

<td><textarea name=\"tresc\" style=\"width: 250px; height: 100px\"></textarea></td>

</tr>

<tr>

<td>Imię, nazwisko lub nick</td>

<td><input type=\"text\" name=\"imie\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>Adres e-mail</td>

<td><input type=\"text\" name=\"email\" style=\"width: 250px\"></td>

</tr>

<tr>

<td>&nbsp;</td>

<td><input type=\"submit\" name=\"submit\" value=\"Wyślij\">&nbsp;



</tr>

</table>";

}

// sprawdzamy, czy zmienne przesłane z formularza nie są puste

elseif (!empty($_POST['temat']) && !empty($_POST['tresc']) && !empty($_POST['imie']) && !empty($_POST['email'])) {

    // jeżeli powyższy warunek jest spełniony tworzona jest wiadomość

    // zmienna $message zawiera treść wiadomości

    $message = "Temat wiadomości:\n$_POST[temat]\nTreść wiadomości:\n$_POST[tresc]\nWysłał,: $_POST[imie]\ne-mail: $_POST[email]";

    // zmienna $header zawiera przede wszystkim adres zwrotny

    $header = "From: $_POST[imie] <$_POST[email]>";

    // funkcja mail() za pomocą której wiadomość zostanie wysłana

    @mail("mail@twoja-domena.pl","Wiadomosc ze strony WWW","$message","$header")

    or die('Nie udało się wysłać wiadomości');

    // wyświetlenie komunikatu w przypadku powodzenia 

    echo "<div align=\"center\"><strong>Wiadomość została wysłana poprawnie! Postaramy się jak najszybciej dostarczyć odpowiedź na Państwa zapytanie. </strong></div>";

}

// lub w przypadku nie wypełnienia formularza do końca

else echo "<span style=\"color: #FF0000; text-align: center;\">Wypełnij wszystkie pola formularza!</span>";



?> 

	<!-- Tutaj kończy się treść -->

		</div>





<br/>





</div>





</div>

</div>

<div id="menu">











</div>



<div id="clearer">&nbsp;</div>

<div id="footer">&copy; 2007 Salon Piękności Uroda | Projekt <a href="http://www.kumi.co.nr" style="color:#aaa;font-size:0.95em">Kumiko</a> Opracowanie <a href="http://www.ittechnology.us/" style="color:#aaa;font-size:0.95em">Marketing w Internecie</a>





</div>

</div>

</div>

</div>





</body>

</html>