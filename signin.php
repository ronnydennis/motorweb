
<?php



if(isset($_POST['create-acct'])){

     require_once 'db_connect.php';
     try {
     $dsn = 'mysql:host ='.$server.';username='.$username;
     $pdo = new PDO($dsn,$database,$dbpassword);

     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {
          echo'Connection failed'.$e->getMessage();
          exit();
       }

     $fname    =  $_POST['username'];

     $sname    =  $_POST['surname'];

     $email    =  $_POST['email'];

     $password =  $_POST['password'];
     $hashed_pass = password_hash($password,PASSWORD_DEFAULT);

       echo $fname.""."".$hashed_pass;//troubleshooting

     if(empty( $fname) || empty( $sname) || empty( $email) || empty( $password)){
     header("Location:login.php?error=emptyfields& firstname=".$firstname."& email=".$email);
      exit();
     }
     else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
     header("Location:login.php?error=invalidemail& username=".$username);
      exit();
    }else{
    $stmt = $pdo->prepare('INSERT INTO `users`(firstname,surname,email,$hashed_pass)
     VALUES($fname,$sname,$email,$password)');
     $stmt->execute(
       [
       ':firstname'=>$fname,
        ':surname'=>$sname,
        ':email'=>$email,
      ':password'=>$hashed_pass,
   ]
   );
//      //header("Location:../Ronny projects/index.php");


      }
}

?>
