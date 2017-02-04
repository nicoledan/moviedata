<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM movies ORDER BY title";
	$movies = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Movies with Diverse Casting </title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div id="container">

<h1>List of Movies with Diverse Casting</h1>

<p class="middle"><a href="enter_new_record.php">Add a movie to the list.</a></p>

<table class="table">
    <tr>
        <th>Title</th>
        <th>Director</th>
        <th>Genre</th>
        <th>Tomatometer</th>
    </tr>

<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while( $row = mysqli_fetch_assoc($movies) ) :  ?>

<tr>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
    <td><?php echo stripslashes($row['title']); ?></td>
    <td><?php echo $row['director']; ?></td>
    <td><?php echo $row['genre']; ?></td>
    <td><?php echo $row['tomatometer']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>


<p class="middle"><a href="enter_new_record.php">Add a move to the list.</a></p>

</div> <!-- close container -->
</body>
</html>
