<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Coffe Shop</title>
</head>
<link rel="stylesheet" href="w3.css">

<body>
<div class="w3-container">
<div class="w3-bar w3-border w3-card-4 w3-padding-16">
  <a href="#" class="w3-bar-item w3-button"><img src="logo.png" class="w3-padding" height="60"></a>
	<a href="#" class="w3-bar-item w3-button"><h3 class="w3-text-pink">ARKDEMY</h3></a>
  <a href="#" class="w3-bar-item w3-button"><h3>COFFE SHOP</h3></a>
  <h3 class="w3-bar-item w3-right"><a href="#" onclick="document.getElementById('add').style.display='block'" class="w3-margin-right w3-pink w3-round-xlarge w3-block w3-button">ADD</a></h3>
</div>
<div class="w3-content w3-padding-32">
	<?php
	$koneksi = mysqli_connect("localhost","root","","coffeshop");

// Check connection
	if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

	?>
		  <table class="w3-table-all w3-border w3-small w3-hoverable w3-centered">
		<tr>
			<th>No</th>
			<th>Cashier</th>
			<th>Product</th>
			<th>Category</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		$data = mysqli_query($koneksi,"select cashier.name_cashier,product.name_product,category.name_category,product.price from cashier INNER JOIN product INNER JOIN category ON cashier.id_cashier = product.id_cashier AND category.id_category = product.id_category ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['name_cashier']; ?></td>
				<td><?php echo $d['name_product']; ?></td>
				<td><?php echo $d['name_category']; ?></td>
				<td><?php echo $d['price']?></td>
				<td><button onclick="document.getElementById('edit').style.display='block'" class="w3-button w3-text-green w3-margin">EDIT</button>
<button onclick="document.getElementById('delete').style.display='block'" class="w3-button w3-text-red w3-margin">HAPUS</button>
		<div id="delete" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4 w3-center" style="width: 30%;">
  <span onclick="document.getElementById('delete').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
		<p><h3>Apakah anda yakin ?</h3></p>
		<a href="delete.php?id=<?php echo $d['id']; ?>" class="w3-button w3-red w3-padding w3-margin-bottom">HAPUS</a>
			</div></div></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
	</div>
	<div id="add" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
		</div>
		<form action="input.php" method="post" class="w3-container">
		 <div class="w3-section">
			<label><b>Add</b></label>
			 <select class="w3-select w3-border w3-margin-bottom" name="cashier">
  <option value="Raisa Andriana" selected>Raisa Andriana</option>
  <option value="Pevita Pearche">Pevita Pearche</option>
  <option value="Refi Ahmad Fauzi">Refi Ahmad Fauzi</option>
</select> 
			 <br>
			 <select class="w3-select w3-border w3-margin-bottom" name="product">
  <option value="Ice Tea" selected>ice Tea</option>
  <option value="Fried Rice">Fried Rice</option>
  <option value="Latte">Latte</option>
  <option value="Cake">Cake</option>
  <option value="Gudeg">Gudeg</option>
</select> 
			 <input type="text" class="w3-input w3-border w3-margin-bottom" name="category" placeholder="Drink"><br>
			 <input type="text" class="w3-input w3-border w3-margin-bottom" name="price" placeholder="Rp.10000"><br>
			 <input type="submit" value="Add" class="w3-margin-right w3-pink w3-round-xlarge w3-block w3-button">
		</div>
		</form>
		</div>
	</div>
	
	
		<div id="edit" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('edit').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
		</div>
		<form action="" method="post" class="w3-container">
		 <div class="w3-section">
			<label><b>Edit</b></label>
			 <select class="w3-select w3-border w3-margin-bottom" name="cashier">
  <option value="Raisa Andriana" selected>Raisa Andriana</option>
  <option value="Pevita Pearche">Pevita Pearche</option>
  <option value="Refi Ahmad Fauzi">Refi Ahmad Fauzi</option>
</select> 
			 <br>
			 <select class="w3-select w3-border w3-margin-bottom" name="product">
  <option value="Ice Tea" selected>ice Tea</option>
  <option value="Fried Rice">Fried Rice</option>
  <option value="Latte">Latte</option>
  <option value="Cake">Cake</option>
  <option value="Gudeg">Gudeg</option>
</select> 
			 <input type="text" class="w3-input w3-border w3-margin-bottom" name="category" placeholder="Drink"><br>
			 <input type="text" class="w3-input w3-border w3-margin-bottom" name="price" placeholder="Rp.10000"><br>
			 <input type="submit" value="Edit" class="w3-margin-right w3-pink w3-round-xlarge w3-block w3-button">
		</div>
		</form>
		</div>
	</div>
</div>
</body>
</html>