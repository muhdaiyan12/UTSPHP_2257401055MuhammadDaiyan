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
    <title>Profile</title>
    <style>
body {
        font-family: 'Arial',sans-serif:
        background-color: green;
        margin:0;
        padding:0;
        display: flex;
        justify-content:center;
        align-items: center;
        height:100vh
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
input[type="text"]
input[type="text"]
input[type="text"]
input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
    transition: border-color 0.3s;
 }
 input[type="text"],
input[type="text"]
input[type="text"]
input[type="text"]
input[type="text"] {
    border-color: #333;
}
button {
    background-color: #333;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
}
input[type="submit"]:hover,
            button:hover {
            background-color: #575757;
            }
    .message {
    text-align: center;
    color: red;
    margin-top: 10px;
}

    </style>
</head>
<body>
<form method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="class">Kelas:</label>
        <input type="text" id="class" name="class" required><br>
        <label for="email">Email:</label>
        <input type="text" id="class" name="class" required><br>
        <label for="phone">Nomor HP:</label>
        <input type="text" id="phone" name="phone" required><br>
        <input type="submit" name="Simpan" value="Simpan">
    
        <button onclick="location.href='indexlama.php'">Kembali ke Beranda</button>
    </form>

    

    <?php
    if (isset($_POST['Simpan'])) {
        echo 'NIM: ' . $_POST['nim'] . '<br>';
        echo 'Nama: ' . $_POST['name'] . '<br>';
        echo 'Kelas: ' . $_POST['class'] . '<br>';
        echo 'Email: ' . $_POST['email'] . '<br>';
        echo 'Nomor HP: ' . $_POST['phone'] . '<br>';
    }
    ?>

</body>
</html>