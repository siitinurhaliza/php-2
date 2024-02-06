<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    /* Soal No 1 - Greetings */
    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!</br>";
    }
    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");

    echo "<br>"; 
    echo "<h3>Soal No 2 Reverse String</h3>";
    /* Soal No 2 - Reverse String */
    function reverseString($str) {
        $len = strlen($str);
        $reversedStr = "";
        for ($i = $len - 1; $i >= 0; $i--) {
            $reversedStr .= $str[$i];
        }
        echo $reversedStr;
    }
    reverseString("nama peserta");
    echo "<br>";
    reverseString("Garuda Cyber Institute");
    echo "<br>";
    reverseString("We Are GC-Ins Developer");

    echo "<br>"; 
    echo "<h3>Soal No 3 Palindrome </h3>";
    /* Soal No 3 - Palindrome */
    function palindrome($str) {
        $str = strtolower(str_replace(" ", "", $str));
        $len = strlen($str);
        for ($i = 0; $i < $len / 2; $i++) {
            if ($str[$i] != $str[$len - $i - 1]) {
                echo "false";
                return;
            }
        }
        echo "true";
    }
    palindrome("civic"); // true
    echo "<br>";
    palindrome("nababan"); // true
    echo "<br>";
    palindrome("jambaban"); // false
    echo "<br>";
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /* Soal No 4 - Tentukan Nilai */
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            echo "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            echo "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            echo "Cukup";
        } else {
            echo "Kurang";
        }
    }
    echo tentukan_nilai(98); // Sangat Baik
    echo "<br>";
    echo tentukan_nilai(76); // Baik
    echo "<br>";
    echo tentukan_nilai(67); // Cukup
    echo "<br>";
    echo tentukan_nilai(43); // Kurang
    ?>
</body>
</html>
