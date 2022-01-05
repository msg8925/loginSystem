<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>

    <header>
      <nav>
        <a href="#">
          <img src="img/logo.png" alt="logo">
        </a>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>
        <div>
          <form class="" action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
        </div>
        <a href="signup.php">Sign up</a>
        <form class="" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>

      </nav>
    </header>
