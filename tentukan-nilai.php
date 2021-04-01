<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-3 Tentukan Nilai</title>
</head>

<body>
    <h1>Tentukan Nilai</h1>

    <?php
        function tentukan_nilai($number)
        {
        //  kode disini
            if($number>=85)
            {
                echo "Sangat Baik<br>";
            }

            else if(70<=$number && $number<85)
            {
                echo "Baik<br>";
            }

            else if(60<=$number && $number<70)
            {
               echo "Cukup<br>";
            }

            else
            {
                echo "Kurang<br>";
            }
        }

        //TEST CASES
        echo tentukan_nilai(98); //Sangat Baik
        echo tentukan_nilai(76); //Baik
        echo tentukan_nilai(67); //Cukup
        echo tentukan_nilai(43); //Kurang
    ?>
</body>

</html>