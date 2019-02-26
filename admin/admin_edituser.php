<?php
require_once('scripts/config.php');
confirm_logged_in();
$id = $_SESSION['user_id']; //we put data into the session in the login.php file

$tbl = 'tbl_user';
$col = 'user_id';
//TODO: Pull all user columns from tbl_user where user_id = $id
$edit_user_query = 'SELECT * FROM tbl_user WHERE user_id = '.$id; 

if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    //Validation
    if(empty($username) || empty($password) || empty($email)) {
        //ensure consistency between admin_createuser.php and admin_edituser.php
        $message = 'Please fill the required fields';
    }else{
        //Do the edit
        //how do we know the user's information? SESSION
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>

    <h2>Edit User</h2>

    <form method="POST" action="admin_edituser.php">
    <label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="fname" value=""><br><br>

		<label for="username">User Name:</label>
		<input type="text" id="username" name="username" value=""><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value=""><br><br>

		<label for="password">Password:</label>
		<input type="text" id="password" name="password" value=""><br><br>

		<button type="submit" name="submit">Create User</button>
    </form>
</body>
</html>