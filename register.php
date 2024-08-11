<?php 
session_start();

$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$comfim_password =$_POST['comfim_password'];
$country =$_POST['country'];
$gender =$_POST['gender'];

//password Condition
$upper = preg_match('@[A-Z]@',$password);
//$number = preg_match('@[0-9]@',$password);
//$spsl = preg_match('@[@,$.%]@',$password);


$flag= false;

if(empty($name)){

    $flag = true;

   $_SESSION['name_err']='Please Enter Your Name';

}else{

    $_SESSION['name']=$name;
}

// Email

if(empty($email)){

    $flag = true;

   $_SESSION['email_err']='Please Enter Your Email';

}else{

    $_SESSION['email']=$email;
}

// password

if(empty($password)){

    $flag = true;

   $_SESSION['password_err']='Please Enter Your Password';

}

   
  else{


    if(!$upper){

       $flag = true;
    
        $_SESSION['password_err']='Please Enter Upper Number Spsc 8 Djit';
    
    }
 }


// Comfim_password



if(empty($comfim_password)){

    $flag = true;

   $_SESSION['comfim_password_err']='Please Enter Your Password';

}


if($password !=$comfim_password){

    $flag = true;

    $_SESSION['comfim_password_err']='Password DoNot macht';

}
    
 // Country

 if(empty($country)){

    $flag = true;

   $_SESSION['country_err']='Please Enter Select Your Country';

}else{

    $_SESSION['country']=$country;
}

 // Gender

 if(empty($gender)){

    $flag = true;

   $_SESSION['gender_err']='Please Enter Select Your Gender';

}else{

    $_SESSION['gender']=$gender;
}



 // Location
if($flag==true){

    header('Location:index.php');

}



?>