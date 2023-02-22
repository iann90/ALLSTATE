
<html lang="en">

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
                

                    <input type="submit" name="proses" class="btn btn-success" value="Sign In">
                    
                  </form>
                  <br>
                    <p style="text-align:center;"><a href="login.php">Login</a></p>

                </div>
                        <?php
                        include 'koneksi.php';

                        if(isset($_POST['proses'])){
                        
                        
                          $hasil =  mysqli_query($koneksi, 
                        
                        "INSERT INTO `user` (`nama`, `password`) 
                        VALUES 
                        ('$_POST[nama]', '$_POST[pass]');"
                        
                        );
                            echo "Data berhasil ditambah";
                            echo "<meta http-equiv=refresh content=1;URL='login.php'>";
                        
                        
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>