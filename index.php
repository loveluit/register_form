<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>registerform</h2>

  <form method="post" action="/register.php">

  <!--Possword -->
  <div class="form-group">
    <?php if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }else{

        $name = '';
    }?>
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      <?php if(isset($_SESSION['name_err'])){?>
        
        <strong class="text-danger">  <?=$_SESSION['name_err']?> </strong>
        <?php }unset($_SESSION['name_err'])?>
    </div>

    <!--Possword -->
    <div class="form-group">
    <?php if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }else{

        $email = '';
    }?>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <?php if(isset($_SESSION['email_err'])){?>
        
        <strong class="text-danger">  <?=$_SESSION['email_err']?> </strong>
        <?php }unset($_SESSION['email_err'])?>
    </div>

      <!--Possword -->

    <div class="form-group">
    <?php if(isset($_SESSION['password'])){
        $password = $_SESSION['password'];
    }else{

        $password = '';
    }?>
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      <?php if(isset($_SESSION['password_err'])){?>
        
        <strong class="text-danger">  <?=$_SESSION['password_err']?> </strong>
        <?php }unset($_SESSION['password_err'])?>
    </div>

    <!--Country-->
    <div class="form-group">
    <?php if(isset($_SESSION['country'])){
        $country = $_SESSION['country'];
    }else{

        $country = '';
    }?>
    <select class="form-select" name="country">
      <option value=""> Select Your Country</option>
      <option value="BNG" <?=($country=="BNG"?'selected':'')?> >BNG</option>
      <option value="UK" <?=($country=="UK"?'selected':'')?> >UK</option>
      <option value="USA" <?=($country=="USA"?'selected':'')?> >USA</option>
     
    </select>
    <br>
    <?php if(isset($_SESSION['country_err'])){?>
        
        <strong class="text-danger">  <?=$_SESSION['country_err']?> </strong>
        <?php }unset($_SESSION['country_err'])?>

    </div>

        <!--Gender-->
    <div class="custom-control custom-radio">

    <?php if(isset($_SESSION['gender'])){
        $gender = $_SESSION['gender'];
    }else{

        $gender = '';
    }?>

      <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="male"<?=($gender=="male"?'checked':'')?> >
      <label class="custom-control-label" for="customRadio">Male</label>
    </div>

    <input type="radio" id="defaultRadio" name="gender" value="female" <?=($gender=="female"?'checked':'')?> >
    <label for="defaultRadio">Female</label>
    <br>

    <?php if(isset($_SESSION['gender_err'])){?>
        
        <strong class="text-danger">  <?=$_SESSION['gender_err']?> </strong>
        <?php }unset($_SESSION['gender_err'])?>

        <br>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


<?php 

unset($_SESSION['country']);
unset($_SESSION['gender']);

?>