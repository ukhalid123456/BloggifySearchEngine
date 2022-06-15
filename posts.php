<?php
require("connectdb.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport" content=
	"width=device-width, initial-scale=1">
<title>Posts</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	crossorigin="anonymous">

<!--Font Awesome-->
<link rel="stylesheet" href=
"path/to/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href=
"https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body>
<!-- Blog Latest -->

<div class="blog-latest">
	<div class="container">
	<h1 class="blog-secondary-heading text-dark">
		Latest Blogs</h1>

	<div class="main-carousel p-2 "
		id="latestCarousel">
		<div class="row">
		<?php 
		try {

$query = "SELECT * FROM blogs";
$result = $db->query($query);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <?php
 $sn=1;
 
 while($data = $result->fetch(PDO::FETCH_ASSOC)) {
   
   ?>
	
    <tr>
	<td><a href="displaycv.php?id=<?php echo $data['id']?>"><?php echo $data['title']; ?></a> </td>
   <td class='image'><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['thumbnail'] ). '"/>'; ?> </td>
   <td><?php echo $data['information']; ?> </td>
    </tr>
    <?php
  }
  ?>
</table>
  <?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
		</div>
	</div>
	</div>
</div>

<!-- Bootstrap -->
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>

<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
	crossorigin="anonymous">
</script>
	
<script src=
"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
</script>
</body>

</html>
