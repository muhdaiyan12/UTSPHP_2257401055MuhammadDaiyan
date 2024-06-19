<?php
/**
 * NIM   : 2257401055
 * Nama  : Muhammad Daiyan Illallah
 * Kelas : MI22B
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loop</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: rgb(182, 226, 80);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
h1 {
  text-align: center;
  color: #333;
}
form {
    display: flex;
    flex-direction: column;
}
label {
    font-weight: bold;
    margin-bottom: 5px;
}
input[type="text"],
input[type="number"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
    transition: border-color 0.3s;
}
input[type="text"]:focus,
input[type="number"]:focus {
    border-color: #333;
}
input[type="submit"],
    button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            font-weight: bold;
            align-items: center;
            font-family: 'Arial',sans-serif:
}
input[type="submit"]:hover,
    button:hover {
    background-color: #575757;
}
.message {
    text-align:center;
    color: red;
    margin-top: 10px;
}



    </style>
</head>
<body>
    <form method="post">
        <label for="text">Teks:</label>
        <input type="text" id="text" name="text" required><br>
        <label for="count">Jumlah Perulangan:</label>
        <input type="number" id="count" name="count" required><br>
        <input type="submit" name="submit" value="Cetak">

        <button onclick="location.href='indexlama.php'">Kembali ke Beranda</button>
     </form>    

     <?php
    if (isset($_POST['submit'])) {
        $text = $_POST['text'];
        $count = $_POST['count'];

        for ($i = 0; $i < $count; $i++) {
            echo $text . '<br>';
        }
    }
    ?>

</body>
</html>