<html>
<?php

    $url = "https://test.everforest.com";
    $mailTo = "info@everforest.com";

    $email = $_POST["email"];
    $name = $_POST["name"];
    if ($email) {
        $emailSubject = "Uus kiri EverForest.com lehelt ($name)";
        $headers = ['From' => 'website@everforest.com', 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
        $body = "Nimi: $name<br>E-post: $email<br><br>Teade:<br>" . nl2br($_POST['message']);
        $error = !mail($mailTo, $emailSubject, $body, $headers);
    } else
        $error = true;
?>
<head>
    <?if(!$error){?><meta http-equiv="refresh" content="3; url='<?=$url?>#contact-section'" /><?}?>
</head>
<body style="text-align: center"><br><br><br><br>
<h1>

<?if($error){?>
    Teate saatmine ebaõnnestus :|
<?}else{?>
    Aitäh! Teade saadetud!
<?}?>

</h1>
<br><a href="<?=$url?>">Tagasi EverForest.com lehele</a>
</body></html>