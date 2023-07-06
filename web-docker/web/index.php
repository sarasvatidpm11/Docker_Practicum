<html>
<head>
    <title>Kalkulator Berat Badan Ideal</title>
</head>
<body>
    <h1>Kalkulator Berat Badan Ideal</h1>

    <?php
    function hitungBeratBadanIdeal($tinggi) {
        $beratBadanIdeal = ($tinggi - 100) - (($tinggi - 100) * 0.1);

        return $beratBadanIdeal;
    }

    if (isset($_POST['submit'])) {
        $tinggiBadan = $_POST['tinggi'];

        if (!empty($tinggiBadan)) {
            $beratBadanIdeal = hitungBeratBadanIdeal($tinggiBadan);

            echo "Tinggi Badan: " . $tinggiBadan . " cm<br>";
            echo "Berat Badan Ideal: " . $beratBadanIdeal . " kg";
        } else {
            echo "Mohon masukkan tinggi badan!";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="tinggi">Tinggi Badan (cm):</label>
        <input type="text" name="tinggi" id="tinggi">

        <input type="submit" name="submit" value="Hitung">
    </form>
</body>
</html>