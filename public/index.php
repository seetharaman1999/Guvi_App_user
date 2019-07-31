<?php include "templates/header.php"; ?>

<form method="post" action="index_fn.php">
	<div class="container">
		<h1>Register</h1>
		<hr>
		<label for="email"><b>Email</b></label>
		<input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email" name="email" id="email" required>
    <button type="submit" class="registerbtn" name="submit" value="submit">Register</button>
  </div>
	<div class="container signin">
		<p> Already have an email id registered? <a href="signin.php">Sign in</a>.</p>
	</div>
</form>

<?php include "templates/footer.php"; ?>