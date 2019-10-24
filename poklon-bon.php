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
$email = $_POST['email'];
$ime2 = $_POST['ime2'];
$email2 = $_POST['email2'];

$email_from = "Email od: $ime";
$email_subject = "Poklon bon.";
$email_body = "Ime i prezime osobe koja kupuje poklon bon: $ime\n E-mail adresa osobe koja kupuje poklon bon: $email\n Ime osobe kojoj se poklanja bon: $ime2\n Email osobe kojoj se poklanja bon: $email2\n\n Vrsta masaže: $vrsta_masaze\n Korištenje saune: $sauna\n Trajanje masaže: $trajanje_masaze minuta  " ;
                           

$to = "info@soriya-thai-room.hr";
$headers .= "MIME-Version: 1.0\r\n";
$headers = "Content-Type: text/html; charset=UTF-8";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

if(isset($_POST['Potvrdi'])) {
	mail($to, $email_subject, $email_body, $header);
}

?>

Vaša zahtjev za poklon bon je poslan. Nakon uplate pune cijene odabrane masaže, na mail ćete zaprimiti POKLON VAUCHER.

<input type="button" value="Natrag" onclick="natrag()" />
