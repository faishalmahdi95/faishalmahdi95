<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-3 Ubah Huruf</title>
</head>

<body>
    <h1>Ubah Huruf</h1>

    <?php
        function ubah_huruf($string)
        {
            //kode di sini
            $output="";
            for($i=0;$i<strlen($string);$i++)
            {
                    $output .= chr(ord($string[$i])+1);
            }
            return $output."<br>";
        }
            
        // TEST CASES
        echo ubah_huruf('wow'); // xpx
        echo ubah_huruf('developer'); // efwfmpqfs
        echo ubah_huruf('laravel'); // mbsbwfm
        echo ubah_huruf('keren'); // lfsfo
        echo ubah_huruf('semangat'); // tfnbohbu
    ?>
</body>