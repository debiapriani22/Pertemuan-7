<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
?>

<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
	<form method="POST" action="" NAME="Input">
	Nama Anda : <input type="text" name="name">
	<span class="error">* <?php echo $nameErr; ?>
	</span>
<br><br>
	E-mail : <input type="text" name="email">
	<span class="error">* <?php echo $emailErr; ?>
	</span>
<br><br>
	Website  : <input type="text" name="website">
	</span>
<br><br>
	Comment	: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
	Gender :
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<span class="error">* <?php echo $genderErr; ?>
	</span>
<br><br>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>


<?php
if (isset($_POST['Input'])){
	if(empty($_POST["name"])){
	$nameErr = "Nama is required";
	} else {
	$name = ($_POST["name"]);
	}

	if (empty($_POST["email"])) {
    	$emailErr = "Email is required";
  	} else {
    	$email = ($_POST["email"]);
  	}

  	if (empty($_POST["website"])) {
    	$website = "";
	}

	if (empty($_POST["comment"])) {
    	$comment = "";
 	} else {
   	$comment = ($_POST["comment"]);
  	}

 	if (empty($_POST["gender"])) {
    	$genderErr = "Gender is required";
  	} else {
    	$gender = ($_POST["gender"]);
  	}
}
?>

<?php
if (isset($_POST['submit'])) {
echo "<h2>Your Input:</h2>";
echo "Nama Anda : ". $_POST['name']. "</br>";
echo "Email : ". $_POST['email']. "</br>";
echo "Website : ". $_POST['website']. "</br>";
echo "Comment : ". $_POST['comment']. "</br>";
echo "Gender : ". $_POST['gender']. "</br>";
}
?>
