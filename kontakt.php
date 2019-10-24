<script type="text/javascript">
    function natrag() {
        location.href="kontakt.html";
    }
</script>


<?php

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$poruka = $_POST['poruka'];


$email_from = "Email od: $ime";
$email_subject = "Kontakt poruka.";
$email_body = "Ime i prezime: $ime $prezime \n E-mail adresa: $email\n\n Poruka: $poruka";
                           

$to = "info@soriya-thai-room.hr";
$header = "Od: $email_from \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

mail($to, $email_subject, $email_body, $header);

?>

Hvala što ste nas kontaktirali.

<input type="button" value="Natrag" onclick="natrag()" />