<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: login.php');
}
$user = new UserController();
if (!isset($_SESSION['data'])) {
    header('Location:signin.php');
    exit();
}
$user->upload($_SESSION['data']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script type="text/javascript" src="/mod/LKBNX/v2.23/demo/cn/cn.php"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SigninComp</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="style.js" defer></script>

</head>
<div id=header>
  <?php include("header.php") ?>
</div>

<body>
  <div class="signincomp">
    <h4>New registration is complete.</h4>
    <h4><a href="login.php">Go To Loginpage!!!!</a></h4>
  </div>
</body>
<?php include("footerlog.php") ?>
</html>