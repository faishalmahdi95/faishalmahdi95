<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-3 Tukar Besar Kecil</title>
</head>

<body>
    <h1>Tukar Besar Kecil</h1>

    <?php
        function tukar_besar_kecil($string)
        {
            //kode di sini
            $output="";
            for($i=0;$i<strlen($string);$i++)
            {
                if(ctype_upper($string[$i]))
                {
                    $output .= strtolower($string[$i]);
                }

                else
                {
                    $output .= strtoupper($string[$i]);
                }
            }
            return $output."<br>";
        }
            
        // TEST CASES
        echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
        echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
        echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
        echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
        echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
    ?>
</body>

</html>