<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
    $sayirand = rand(0,100);
    
    if ($sayirand %2 == 0){
        echo $sayirand.": "."Girilen Sayı Çifttir.<br/>";
    }
    else{
        echo $sayirand.": "."Girilen Sayı Tektir.<br/>";
    }
    


    $sayirand1 = rand(0,100);
    
    if ($sayirand1 < 50){
        echo $sayirand1.": "."Puan Aldınız Kaldınız.<br/>";
    }
    else{
        echo $sayirand1.": "."Puan Aldınız Geçtiniz.<br/>";
    }


    

    ?>

</body>
</html>