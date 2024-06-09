<?php
$koneksi = require('./koneksi.php');

if (isset($_POST["register_account"])) {
      proses_tambah_petugas($_POST);
}

function proses_tambah_petugas($data)
{
      global $koneksi;

      $query = "INSERT INTO users VALUES (null, :username, :password, :email, :role)";
      $stmt = $koneksi->prepare($query);
      $stmt->execute([
            ':username' => $data['username'],
            ':password' => md5($data['password']),
            ':email' => $data['email'],
            ':role' => 'user',
           
      ]);

      if (!$stmt) {
            echo "<script>
					alert('Belum Berhasil Membuat Account!');
				</script>";
      } else {
            echo "<script>
					alert('Berhasil Membuat Account!');
					document.location.href = 'login.php';
				</script>";
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Content Container -->
    <div class="container shadow p-5">
        <h2 class="text-center">Register</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="register-username">username</label>
                <input name="username" type="text" class="form-control" id="register-username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password</label>
                <input name ="password" type="password" class="form-control" id="register-password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="register-email">Email</label>
                <input name="email" type="text" class="form-control" id="register-email" placeholder="email " required>
            </div>
            <button name ="register_account" type="submit" class="btn btn-primary w-100 rounded-2">Register</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
