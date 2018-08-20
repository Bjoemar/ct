<?php 
session_start();

if(isset($_POST['username'])) {

	$username = $_POST['username'];
	$password = sha1($_POST['password']);


	require "../connection.php";

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0 ) {
		$_SESSION_['log_in_user'] = $username;
		header('location: ../index.php');
	} else  {
		$_SESSION['error_message'] = 'Username or Password is wrong';
		header('location: ../re_sign_in.php');
	}

	mysqli_close();

}


if(isset($_POST['reg_username'])) {

	require "../connection.php";

	$username = $_POST['reg_username'];



	$sql = "SELECT * FROM users WHERE username = '$username'";

	$result = mysqli_query($conn,$sql);


	if(mysqli_num_rows($result) > 0) {
		echo "match";
	} else {
		echo "no_match";
	}

	mysqli_close();
}




if(isset($_POST['reg_user_name'])) {


	require "../connection.php";

	$username = $_POST['reg_user_name'];
	$password = sha1($_POST['reg_password']);
	$email= $_POST['reg_email_add'];
	$firstname = $_POST['reg_first_name'];
	$middlename = $_POST['reg_middle_name'];
	$lastname = $_POST['reg_last_name'];
	$address = $_POST['reg_address'];
	$number = $_POST['reg_num'];

	
	$sql_user = "INSERT INTO users(username,password) VALUES ('$username' , '$password')";

	$result = mysqli_query($conn , $sql_user);


	$sql_users_info = "SELECT * FROM users WHERE username = '$username'";

	$result = mysqli_query($conn , $sql_users_info);
	$get_id = mysqli_fetch_assoc($result);

	if ($result) {
		$users_id = $get_id['id'];


	$sql_user_info = "INSERT INTO users_info(firstname , middlename , lastname , address , number ,email,user_id) VALUES('$firstname','$middlename','$lastname','$address','$number' , '$email','$users_id')";

		$result = mysqli_query($conn , $sql_user_info);

	}
	mysqli_close();


}


if(isset($_POST['type'])) {

	require "../connection.php";


	if(file_exists('../assets/images/img_database'.$_FILES['product_pic']['name'])) {
		$_SESSION['exist_img'] = 'The image is already in the database please rename the image name';
		header('location: ../admin.php');

	
	} else {
		move_uploaded_file($_FILES['product_pic']['tmp_name'],'../assets/images/img_database/'
		.$_FILES['product_pic']['name']);
		$type = $_POST['type'];
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$img_add = "assets/images/img_database/".$_FILES['product_pic']['name'];

	$sql = "INSERT INTO $type(product_name,product_price,product_desc,img_add) VALUES ('$product_name' , '$product_price' , '$product_desc' , '$img_add')";


	mysqli_query($conn ,$sql);
		unset($_SESSION['exist_img']);
		header('location: ../admin.php');
	}
	
	
	// echo "SUCCESS!!";


}


 ?>