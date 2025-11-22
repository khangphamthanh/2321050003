<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>

<body>
    <?php 
        echo "Hello world! <br>";
        echo "Hi ";

        $ten = "Khang";
        $tuoi = 20;
        echo $ten . " " . $tuoi . " tuổi <br>";

        define("soPi", "3.14");
        echo soPi . "<br>";

        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        echo strlen($ten) . "<br>";

        echo str_word_count($ten) . "<br>";

        echo strpos($ten, "a") . "<br>";

        echo str_replace("g", "h", $ten) . "<br>";

        $soThuNhat = 10;
        $soThuHai = 5;
        echo $soThuNhat + $soThuHai . "<br>";
        echo $soThuNhat - $soThuHai . "<br>";
        echo $soThuNhat * $soThuHai . "<br>";
        echo $soThuNhat / $soThuHai . "<br>";

        $tong = $soThuNhat + $soThuHai;
        if ($tong < 15){
            echo "Tổng 2 số < 15" . "<br>";
        }
        elseif($tong == 15){
            echo "Tổng 2 số = 15" . "<br>";
        }
        else{
            echo "Tổng 2 số > 15" . "<br>";
        }

        $color = "red";
        switch($color){
            case "red":
                echo "is red <br>";
                break;
            case "blue":
                echo "is blue <br>";
                break;
            default:
                echo "no color <br>";
                break;
        }

        for ($i = 0; $i < 100; $i++){
            echo $i;
        }
        echo "<br>";

        $mang = ["An", "Nhật Anh", "Vũ Anh"];
        echo count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r($mang) . "<br>";
        $mang[0] = "Hải Anh";
        print_r($mang) . "<br>";
        $mang[0] = "Tâm";
        print_r($mang) . "<br>";
        unset($mang[3]);
        print_r($mang) . "<br>";
    ?>
</body>
</html>