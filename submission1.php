<?php
$name =$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!empty ($name) || !empty ($email) || !empty($password))
{

  $user = 'root';
  $pass ='';
  $db = 'register';

  $db = new mysqli('localhost',$user, $pass, $db);
   {
    $SELECT = "SELECT email from register Where email = ? Limit 1";
    $INSERT = "INSERT Into register(name, email, password) values(?, ?, ?)";
    //prepare statement
    $stmt = $db->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0){
      $stmt->close();
      $stmt=$db->prepare($INSERT);
      $stmt->bind_param("sss",$name, $email, $password);
      $stmt->execute();
      echo "New Record Inserted Successfully";
    }
    else{
      echo "Someone is already registerd through this Email";
    }
    $stmt->close();
    $db->close();

  }


}
else{
  echo "All field are required";
  die();

}



?>
