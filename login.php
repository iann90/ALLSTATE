<!DOCTYPE html>

<?php
session_start();


include 'koneksi.php';



if(isset($_POST["login"])){
 
    $nama = $_POST["nama"];
    $password = $_POST["pass"];
   



    $result= mysqli_query($koneksi,"SELECT * FROM user where nama = '$nama' AND password = '$password'");

    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION["login"] = true;

         
            header("location: index.php");
           
             exit;
        

    }
    
    else {
      ?>
      <script>
        alert("Username atau Password Salah!"); 
      </script>
      <?php
    }
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="login-form">
	<form class="" method="POST" autocomplete="off">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"  name="nama" placeholder="Masukan Nama ...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                     
                    </div>
                

                    <input type="submit" class="btn btn-success" name="login" value="Login"></input>
                    
                  </form>
                  <br>
                    <p style="text-align:center;"><a href="add_user.php">Sign in</a></p>
	</div>
</body>
</html>
