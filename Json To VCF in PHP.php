<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- This is php code for receiving and converting json to key and value -->
<?php
$string = file_get_contents("result.json");
$json_file = json_decode($string,true);
foreach ($json_file as $key => $value)
{
?>
    <!-- This section is about the VCF text format in iCloud -->
    <div>
        <div>BEGIN:VCARD</div>
        <div>VERSION:3.0</div>
        <div>PRODID:-//Apple Inc.//iOS 12.5.5//EN</div>
        <div>N:
            <span><?= $value["last_name"] ?></span>;
            <span><?= $value["first_name"] ?></span>
            ;;;</div>
        <div>FN: <span><?= $value["first_name"] ?></span> <span><?= $value["last_name"] ?></span> </div>
        <div>TEL;type=CELL;type=VOICE;type=pref: <span><?= $value["phone_number"] ?></span> </div>
        <div>REV: <span><?= $value["date"] ?></span> </div>
        <div>END:VCARD</div>

    </div>
<?php
}
?>
</body>
</html>