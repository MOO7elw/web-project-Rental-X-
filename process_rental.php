   
    <?php
    extract($_REQUEST);
    if (empty($name)) {
        echo "<p style ='font:18px;color:#0c31e8; margin:auto;width:60%;text-align:center'>Please enter your name.</p>";

    } else if (empty($car)) {
        echo "<p style ='font:18px;color:#0c31e8; margin:auto;width:60%;text-align:center'>Please select a car.</p>";
    } else {
        $file = fopen("rental_data.txt", "a");

        fwrite($file, "name:");
        fwrite($file, $name ."\n");
        fwrite($file, "car:");
        fwrite($file, $car ."\n");

        fclose($file);

        echo "<p style ='font:18px;color:#0c31e8; margin:auto;width:60%;text-align:center'>Your rental request has been saved successfully!</p>";

    }
    ?>
    