<?php 
session_start();
include("includes/user.php");
$msg='';
 if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    if($user == $u_login && $pass == $u_pass){
        header('Location: drop.php');
        // header('Location: http://avp-communications.com/demo/villas66/drop.php');
        $_SESSION['bool'] = true;
        // $_SESSION['loggedUser'] = $user;
     exit();
        
    }else{
      $msg = "Wrong Login or Password!";
      $wrong = true;
    }
 }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villas66-Login Page</title>
    <link href="assets/css/log.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <div class="logo"></div>
        <form action="" method="post">
            <label>Username:
                <!-- <input type="text" name='username'  class="<?php if($a) { echo "correct"; } ?>" /> -->
                <input type="text" name='username'   />
            </label>
            <label>Password:
                <!-- <input type="password" name="password" class="<?php if($a) { echo "correct"; } ?>" /> -->
                <input type="password" name="password"  />
            </label>
            <input type="submit" name="submit" value='Submit'></<input>
        </form>
        <div class="<?php if($wrong) { echo "msg"; } ?>"><?php echo $msg; ?></div>
    </div>

</body>

</html>