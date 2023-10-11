<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi dan Deskripsi</title>
    <style>
        /* Style for the header */
header {
    text-align: center;
    font-size: 24px;
    margin: 20px 0;
}

/* Style for the forms */
form {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
}

label {
    display: block;
    margin: 10px 0;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

/* Style for form validation alerts */
.alert {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

    </style>
    <script>
        function validateEnkripsiForm() {
            var inputEnkripsi = document.getElementById("input_enkripsi").value;
            if (inputEnkripsi === "") {
                alert("Harap isi plaintext terlebih dahulu.");
                return false;
            }
        }

        function validateDeskripsiForm() {
            var inputDeskripsi = document.getElementById("input_deskripsi").value;
            if (inputDeskripsi === "") {
                alert("Harap isi chiperteks terlebih dahulu.");
                return false;
            }
        }
    </script>
</head>
<body>
    <header>Masukkan Salah Satu</header>
    <form action="enkripsi.php" method="post" onsubmit="return validateEnkripsiForm();">
        <label for="input_enkripsi">Masukkan Plaintext:</label>
        <input type="text" name="input_enkripsi" id="input_enkripsi">
        <input type="submit" value="Enkripsi">
    </form>

    <form action="deskripsi.php" method="post" onsubmit="return validateDeskripsiForm();">
        <label for="input_deskripsi">Masukkan Chiperteks:</label>
        <input type="text" name="input_deskripsi" id="input_deskripsi">
        <input type="submit" value="Deskripsi">
    </form>
</body>
</html>