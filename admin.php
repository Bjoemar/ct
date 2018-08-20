<?php session_start(); ?>

<?php require_once "templates.php" ?>

<?php function getTitle() {
	echo "Administrator";
} ?>



<?php function getContent() {?>

<div class="nav_invi_content"></div>


<h1>Upload Product</h1>

<form action="controllers/authenticate_endpoint.php" method="POST" enctype="multipart/form-data">

	
<?php if (isset($_SESSION['exist_img'])) { ?>

	<p class="admin_error">* <?php echo $_SESSION['exist_img'] ?></p>

<?php } else { ?>

	<p></p>

<?php } ?>
	
  <input type="file" name="product_pic" accept="image/*" id="file_view">


  <div class="form-group">
	  <label for="username">Product Name: </label>
	  <input id="p_name" type="text" class="form-control" name="product_name">
	</div>

	 <div class="form-group">
	  <label for="username">Product Price: </label>
	  <input id="p_price" type="number" class="form-control" name="product_price">
	</div>


	<div class="form-group">
	  <label for="username">Description:</label>
	  <input id="p_desc" type="text" class="form-control" name="product_desc">
	</div>

	<select name="type">
		<option value="tshirt">Tshirt</option>
		<option value="cap">Cap</option>
	
	</select> <br>

	  <button id="admin_add" class="btn btn-info mt-3">Upload</button>



</form>





<script type="text/javascript" src="assets/js/script.js"></script>
<?php } ?>