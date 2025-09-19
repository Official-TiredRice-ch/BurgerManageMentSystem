<!DOCTYPE html>
<html lang="en">
<head>
  <video autoplay loop style="position: fixed; left: 0; right: 0;" volume="0.2">
    <source src="./InventoryManagement/burger ads/burger add.mp4" type="video/mp4">
</video>

    </audio>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-style.css">

    <title>Sign Up</title>

	<style>
		.violet {
				color: #9b56c9
			}  
	hr {
		border-color: #9b56c9;
		border-width: 3px;
		padding: 0px;	}               

	form {
   		min-width: 270px;
    		height: 600px;
		width: 250px;
		padding:5px;
		}
	.form{
		border: 1px solid #9b56c9;
		}
	input{
		padding:10px;	
		
		
		}
	
	</style>

</head>
<body>
 
 <?php
        require("./conection.php");
        $errorMessage = '';
        $successMessage = '';

        if (isset($_POST["signUP_button"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confipassword = $_POST["confipassword"];

            if (!empty($name) && !empty($email) && !empty($password)) {
                if ($password == $confipassword) {
                    $p = crud::conect()->prepare("INSERT INTO admin(name,email,pass) VALUES(:n,:e,:p)");
                    $p->bindValue(":n", $name);
                    $p->bindValue(":e", $email);
                    $p->bindValue(":p", $password);
                    $p->execute();
		$successMessage = 'Successfully Sign Up... Log In Now!';
   
                } else {
                    $errorMessage = 'Password does not match!';
                }
            } else {
                $errorMessage = 'Please fill in all the required fields.';
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

            <p class="violet"> Account Admin Register <class="violet"></p>
	<hr>
        </div>


        <?php
            if (!empty($successMessage)) {
                echo '<p class="success-message">' .$successMessage. '</p>';
            }
        ?>

        <?php
            if (!empty($errorMessage)) {
                echo '<p class="error-message">' . $errorMessage . '</p>';
            }
        ?>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="confipassword" placeholder="Confirm Password">
           

            
            <input type="submit" value="Sign up" name="signUP_button"> 
            <a href="./login.php" class="violet">Do you have account? Log In Now!</a>
        </form>
    </div>


</body>
</html>