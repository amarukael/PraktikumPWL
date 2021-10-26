<?php 
// var_dump($_POST);
session_start();
$message = '';
if (isset($_POST["login"])) {
  if (empty($_POST["user_email"]) || empty($_POST["user_pass"])) {
    echo $message = "<div class='alert alert-danger'>Mohon Diisi</div>";
  }else{
    $email = "aaa";
    $pass = "aaa";
    $type = "admin";

    if ($_POST["user_email"]==$email && $_POST["user_pass"] == $pass) {
      $_SESSION['username'] = $email ;
      header('location:index.php');
    }else{
      echo $message = "<div class='alert alert-danger'>Email atau Password Salah!</div>";
    }
  }
}
?>

<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div style="margin: 100px;">
      <form action="" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="user_email" type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="user_pass" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="login" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>