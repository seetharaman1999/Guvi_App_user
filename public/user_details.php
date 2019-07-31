<!-- HTML Form -->
<?php include "templates/header.php"; ?>

<form action="user_details_fn.php" method="post" name="user_details" id="user_form" autocomplete="off">
  <div class="container">
    <h2>Add User details</h2>
    <hr>
    <input type="hidden" name="login_id" required value='<?php echo $_GET["login_id"];?>'/>
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>
    <label for="mobilenumber"><b>Mobile Number</b></label>
    <input type="text" pattern="[6-9]{1}[0-9]{9}" placeholder="Enter Mobile Number" name="mobilenumber" required>
    <label for="degree"><b>Degree</b></label>
    <input type="text" placeholder="Enter Degree" name="degree" required>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" required>
    <label for="collegename"><b>College Name</b></label>
    <input type="text" placeholder="Enter College Name" name="collegename" required>
    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" required>
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>

<?php include "templates/footer.php"; ?>
