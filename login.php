<?php
include 'includes/header.php'
?>

<div class="login-container">
    <div class="login-box">
      <h1>Login</h1>
      <form action="database/auth.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="uname" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="psw" required>

        <button type="submit">Login</button>
      </form>
    </div>
  </div>
<?php
include 'includes/footer.php';
?>