<?php
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    header('Location: welcome.php');
    
}

// Proses pendaftaran
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "loginnn";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Periksa koneksi ke database
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Mengecek apakah username sudah digunakan
    $checkUsername = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        // Username sudah digunakan
        $_SESSION['register_error'] = 'Username sudah digunakan.';
        header('Location: register.php');
       
    }

    // Menambahkan pengguna baru ke database
    $addUser = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    if ($conn->query($addUser) === TRUE) {
        // Pendaftaran berhasil, simpan ID pengguna ke dalam sesi
        $_SESSION['user'] = $conn->insert_id;

        header('Location: welcome.php');
        
    } else {
        echo "Error: " . $addUser . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Akun</h2>
        <?php if (isset($_SESSION['register_error'])) { ?>
            <p class="error"><?php echo $_SESSION['register_error']; ?></p>
            <?php unset($_SESSION['register_error']); ?>
        <?php } ?>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
</body>
</html>