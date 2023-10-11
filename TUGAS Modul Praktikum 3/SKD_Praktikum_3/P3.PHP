<?php
function encryptShift($plaintext, $shift) {
    $encryptedText = '';
    
    for ($i = 0; $i < strlen($plaintext); $i++) {
        $char = $plaintext[$i];
        
        if (ctype_alpha($char)) {
            $isUpperCase = ctype_upper($char);
            $char = ord($char);
            $char = ($char - ($isUpperCase ? 65 : 97) + $shift) % 26;
            $char = $char < 0 ? $char + 26 : $char;
            $char = $char + ($isUpperCase ? 65 : 97);
            $char = chr($char);
        }
        
        $encryptedText .= $char;
    }
    
    return $encryptedText;
}

function decryptShift($encryptedText, $shift) {
    return encryptShift($encryptedText, -$shift);
}

if (isset($_POST['encrypt'])) {
    $plaintext = $_POST['plaintext'];
    $shift = 41;
    $encrypted = encryptShift($plaintext, $shift);
} elseif (isset($_POST['decrypt'])) {
    $ciphertext = $_POST['ciphertext'];
    $shift = 41;
    $decrypted = decryptShift($ciphertext, $shift);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi dan Dekripsi Pergeseran 41</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        form {
            text-align: center;
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        p {
            text-align: center;
            font-weight: bold;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Enkripsi dan Dekripsi Pergeseran 41</h1>
    <form method="post" action="">
        <label for="plaintext">Plaintext:</label>
        <input type="text" id="plaintext" name="plaintext">
        <input type="submit" name="encrypt" value="Enkripsi">
    </form>
    <?php
    if (isset($encrypted)) {
        echo "<p>Teks Terenkripsi: $encrypted</p>";
    }
    ?>
    <form method="post" action="">
        <label for="ciphertext">Ciphertext:</label>
        <input type="text" id="ciphertext" name="ciphertext">
        <input type="submit" name="decrypt" value="Dekripsi">
    </form>
    <?php
    if (isset($decrypted)) {
        echo "<p>Teks Terdekripsi: $decrypted</p>";
    }
    ?>
</body>
</html>
