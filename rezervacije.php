<script type="text/javascript">
    function natrag() {
        location.href="rezervacije.html";
    }
</script>

<?php

$vrsta_masaze = $_POST['vrsta_masaze'];
$sauna = $_POST['sauna'];
$trajanje_masaze = $_POST['trajanje_masaze'];
$ime = $_POST['ime'];
$broj = $_POST['broj'];
$email = $_POST['email'];
$datum = $_POST['datum'];
$vrijeme = $_POST['vrijeme'];


$email_from = "Email od: $ime";
$email_subject = "Rezervacija masaze.";
$email_body = "Ime i prezime: $ime\n E-mail adresa: $email\n Broj mobitela: $broj\n\n $ime želi rezervirati:\n Vrsta masaže: $vrsta_masaze\n Korištenje saune: $sauna\n Trajanje masaže: $trajanje_masaze minuta \n Datum: $datum\n Vrijeme: $vrijeme sati";
                           

$to = "info@soriya-thai-room.hr";
$headers .= "MIME-Version: 1.0\r\n";
$headers = "Content-Type: text/html; charset=UTF-8";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

if(isset($_POST['Potvrdi'])) {
	mail($to, $email_subject, $email_body, $header);
}

?>

Vaša narudžba je zaprimljena. Potvrdu rezervacije očekujte uskoro.

<input type="button" value="Natrag" onclick="natrag()" />
