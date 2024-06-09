<?php 
$koneksi = require('koneksi.php');
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$sql= "SELECT id, email, role FROM users WHERE username = ? and password = ?";
	$stmt = $koneksi->prepare($sql);
	$stmt->execute([$myusername, md5($mypassword)]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($result) {
		$id = $result['id'];
		$email = $result['email'];
		$role = $result['role'];

		$_SESSION['user'] = $myusername;
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;

		echo '<script>
			window.location.href="index.php";
			</script>';
	} else {
		$error = "Username / Password kamu salah, Tolong coba lagi ya";
		echo '<script>
				alert("' . $error . '");
				window.location.href="login.php";
				</script>';
		die();
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        <h2 class="text-center">Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">username</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 rounded-2">Login</button>
        </form>
    </br>
        <p>belum punya akun? <a href="register.php">Daftar</a></p>
    </div>

</body>
</html>