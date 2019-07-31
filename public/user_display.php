<?php include "templates/header.php"; ?>

<div class="container">
	<h2> Display User details for User: <?php session_start(); echo $_SESSION["login_val"] ?> </h2>
	<hr>
	<table class="table table-bordered">
		<thead>
	    <tr>
	      <th scope="col">First Name</th>
	      <th scope="col">Last Name</th>
	      <th scope="col">Mobile Number</th>
	      <th scope="col">Degree</th>
	      <th scope="col">Age</th>
	      <th scope="col">College Name</th>
	      <th scope="col">Location</th>
	    </tr>
  	</thead>
	  <tbody>
	    <tr>
	      <td id="fname"></td>
	      <td id="lname"></td>
	      <td id="mnum"></td>
	      <td id="degree"></td>
	      <td id="age"></td>
	      <td id="cname"></td>
	      <td id="location"></td>
	    </tr>
	  </tbody>
	</table>
</div>

<?php include "templates/footer.php"; ?>
<?php include "user_display.js"; ?>