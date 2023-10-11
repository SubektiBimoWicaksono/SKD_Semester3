<?php
function enkripsi(){

        $input = $_POST["input_enkripsi"];

        $key = array(
            'a' => '~', 'i' => '$', 'u' => '^', 'e' => '#', 'o' => '+',
            'A' => '!', 'I' => '%', 'U' => '_', 'E' => '=', 'O' => '*',
            'd' => ']', 'g' => ';', 'h' => '@', 'r' => '{', 'n' => '[',
            's' => '8', 'W' => '3', 'y' => '>'
        );

        $enkripsi = str_replace(array_keys($key),$key, $input);

        echo "Kata yang dienkripsi adalah: ", $input; 
        echo "<br><br>";
        echo "Hasil enkripsi adalah: ", $enkripsi; 

    };
    ?>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    enkripsi();
}
?>