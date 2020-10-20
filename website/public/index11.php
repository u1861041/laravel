
<?php

session_start();  
$host = "localhost";  
$username = "root";  
$password = "root";  
$database = "gg1";  
$message = "";

	try  
	{  
		 $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
		 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		 if(isset($_POST["login"]))  
		 {  
			  if(empty($_POST["email"]) || empty($_POST["password"]))  
			  {  
				   $message = '<label>All fields are required</label>';  
			  }  
			  else  
			  {  
				   $query = "SELECT * FROM users WHERE  email = :email AND password = :password";  
				   $statement = $connect->prepare($query);  
				   $statement->execute(  
						array(  
							 'email'     =>     $_POST["email"],  
							 'password'     =>     $_POST["password"]  
						)  
				   );  
				   $hash = 'password';
				   $count = $statement->rowCount(); 
				   $row   = $statement->fetchAll(PDO::FETCH_ASSOC);
				   if($count == 1 && !empty($row) )  
				   {  
						$_SESSION["email"] = $_POST["email"];  
						header("location:home.php");  
				   }  
				   else  
				   {  
						$message = '<label>Wrong Data</label>';  
				   }  
			  }  
		 }  
	}  
	catch(PDOException $error)  
	{  
		 $message = $error->getMessage();  
	}  
	



?>

<!DOCTYPE html>  
 <html>  
      <head> 
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type="text/css" href="style.css">
    <link rel = "stylesheet" type="text/css" href="design.css">
         
      </head>  
      <body>  
           <br />  
             
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h1>Huddland Parliament</h1><br />  
				<div>
            		<img src="loginn.jpg" width="300" height="150" title="login" alt="login"  />
        		</div>
                <form action="index.php"  method="post">
					 <label>Please enter your details below :</label>  
					 <br/>
					 <br/>
                     <label>Email  :  </label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />  
                     <label>Password:</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
            
           <br />  
		   
      </body>  
 </html>  















