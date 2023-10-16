<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: Login/index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>	
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<body class="bg-light">
        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form_login" type="text" name="username" placeholder="Username atau email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form_login" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="tombol_login" name="login" value="Masuk" />
            <p>&larr; <a href="index.php">Home</a>

            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        </form>
		
	</div>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

</body>
</html>