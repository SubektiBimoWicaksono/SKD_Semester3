<?php
function deskripsi(){

        $input = $_POST["input_deskripsi"];

        $key = array(
            '~' => 'a', '$' => 'i', '^' => 'u', '#' => 'e', '+' => 'o',
            '!' => 'A', '%' => 'I', '_' => 'U', '=' => 'E', '*' => 'O',
            ']' => 'd', ';' => 'g', '@' => 'h', '{' => 'r', '[' => 'n',
            '8' => 's', '3' => 'W', '>' => 'y'
        );

        $deskripsi = str_replace(array_keys($key),$key, $input);

        echo "Kata yang dideskripsi adalah: ", $input; 
        echo "<br><br>";
        echo "Hasil deskripsi adalah: ", $deskripsi; 

    };
    ?>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    deskripsi();
}
?>