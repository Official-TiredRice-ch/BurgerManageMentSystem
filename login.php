

<!DOCTYPE html>
<html lang="en">
<head>
 <video autoplay loop style="position: fixed; left:0; right:0;" volume="0.2">
        <source src="burger.mp4" type="video/mp4">
     </video>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-style.css">
    <title>log in</title>
    <style>


        .form {

    min-width: 270px;
    width: 230px;
    height: 1000px;
    background-color: rgba(255, 255, 255, 0.5);
    margin: 200px;
    Padding: 50px;
	border: 1px solid #4ea4dc;		
}
	
	hr {
		border-color: #4ea4dc;
		border-width: 3px;
		padding: 0px;	
	}
	
	.blue{
		color:#4ea4dc;
		}

	input{
		padding:10px;	
		
		}
	input[type="submit"]{ background-color:#4ea4dc;
				}
	
    </style>
</head>
<body>

 <?php
            require("./conection.php");
		 $errorMessage = '';
		$errorMessage2 = '';
            if (isset($_POST["login_button"])) {
                $_SESSION["validate"]=false;
                $name=$_POST["name"];
                $password=$_POST["password"];
                $p=crud::conect()->prepare("SELECT * FROM admin WHERE name=:n and pass=:p");
                $p->bindValue(":n",$name);
                $p->bindValue(":p",$password);
                $p->execute();
             	$d=$p->fetchAll(PDO::FETCH_ASSOC);
                if ($p->rowCount()>0) {
                    $_SESSION["name"]=$name;
                    $_SESSION["pass"]=$password;
                    $_SESSION["validate"]=true;
                    header("location:InventoryManagement/index.php");
		}else {
                    $errorMessage = 'Please fill in all the required fields no account? Registered Now!';
			}

            }
        
    ?>

    <div class="form">
    <div class="title">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <p class="blue">  Account Admin Log In </p>
        <hr>
    </div>
    <form action="" method="post">
        <h4><div class="error-message"><?= $errorMessage ?></div></h4>
        <input type="text" name="name" placeholder="User Name">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login" name="login_button" class="blu">
        <a href="sign-up.php" style="position:relative; left:0px;top:-8px; font-size:14px"class="blue" > No Account? Create an Account</a>
    </form>
</div>
</body>
</html>