
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css" ?>">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="#"  method="GET" >
      <input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">

        <div class="txt_field">
          <input type="text" name="login">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" id="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
