<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Movies with Diverse Casting: Enter </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Suggest A Movie to Add to the List</h1>

<p class="lead"><a href="list_update.php">View full list</a></p>

<div id="movies">

<form id="movieform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->

<div class="form-group">
    <label for="title">Title </label>
	<input type="text" name="title" id="title" maxlength="100" required>
</div>

<div class="form-group">
  <label for="director">Director</label>
<input type="text" name="director" id="director" maxlength="100" required>
</div>

<div class="form-group">
  <label for="genre">Genre</label>
    <select class="form-control" name="genre" id ="genre" required>
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
        <option value="horror">Horror</option>
        <option value="documentary">Documentary</option>
        <option value="romance">Romance</option>
        <option value="animation">Animation</option>
        <option value="musical">Musical</option>
      </select>
</div>

<div class="form-group">
  <label for="tomatometer">Rotten Tomatoes Tomatometer Rating (out of 100) </label>
    <input type="number" name="tomatometer" id="tomatometer" max="100" required>
</div>


<input class="btn btn-primary
  btn-block" type="submit" value="Submit" id="button1"> <input class="btn btn-warning btn-block" type="reset" value="Reset" id="button2">

</form>

</div><!--close movieform div -->

<div id="response">
    <p class="lead">Thanks for submitting the form!</p>
</div>

</div> <!-- close container -->
</body>

</html>
