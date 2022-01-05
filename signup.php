<?php
  require "header.php";
?>

  <main>
    <div>
      <section>
        <h1>Sign up!</h1>
        <form class="" action="signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Enter username...">
          <input type="text" name="email" placeholder="Enter email...">
          <input type="password" name="pwd" placeholder="Enter password...">
          <input type="password" name="pwd-repeat" placeholder="Enter password again...">
          <button type="submit" name="signup=submit">Sign up</button>
        </form>
      </section>
    </div>
  </main>

<?php
  require "footer.php";
?>
