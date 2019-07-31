<?php include "templates/header.php"; ?>

<form method="post" action="signin_fn.php">
	<div class="container">
		<h1>Login</h1>
		<hr>
		<label for="email"><b>Email</b></label>
		<input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email" name="email" id="email" required>
    <button type="submit" class="registerbtn" name="submit" value="submit">Login</button>
  </div>
	<div class="container signin">
		<p> Not Registered yet?  <a href="index.php">Sign up</a>.</p>
	</div>
</form>

<?php include "templates/footer.php"; ?>