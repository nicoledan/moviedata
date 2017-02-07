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

  <div class="row">
    <h1 class="col-md-8">Suggest A Movie to Add to the List</h1>

    <p class="lead col-sm-8"><a href="list_update.php">View full list</a></p>
  </div><!---close row -->

<div id="movies">

<form id="movieform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->

<div class = "row">
<div class="form-group">
    <label for="title" class="col-sm-6">Title </label>
	<input type="text" class="form-control" rows="6" name="title" id="title" maxlength="100" required>
</div>
</div>

<div class="row">
<div class="form-group">
  <label for="director" class="col-sm-6">Director</label>
<input type="text" class="form-control" rows= "6" name="director" id="director" maxlength="100" required>
</div>
</div>

<div class="row">
<div class="form-group">
  <label for="genre" class="col-sm-2">Genre</label>
    <select class="form-control" rows="6" name="genre" id ="genre" required>
       <div class="col-sm-10">
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
        <option value="horror">Horror</option>
        <option value="documentary">Documentary</option>
        <option value="romance">Romance</option>
        <option value="animation">Animation</option>
        <option value="musical">Musical</option>
      </select>
    </div>
</div>
</div>


<div class="form-group">
  <label for="tomatometer" >Rotten Tomatoes Tomatometer Rating (out of 100) </label>
    <input type="number" class="form-control col-sm-2 col-med-6" rows="6" name="tomatometer" id="tomatometer" maxlength="100" required>
</div>

<div id="buttons">
<div id="button1" class="col-sm-12 col-md-4 col-md-offset-2">
<input class="btn btn-primary btn-block" type="submit" value="Submit">
</div>

<div id="button2" class="col-sm-12 col-md-4">
<input class="btn btn-warning btn-block col-xs-6 col-md-4" type="reset" value="Reset">
</div>
</div> <!--- close button div --->

</form>

</div> <!--- close movieform div --->

<div id="response">
    <p class="lead">Thanks for submitting the form!</p>
</div>

</div> <!-- close container -->
</body>

</html>
