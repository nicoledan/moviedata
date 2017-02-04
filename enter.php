<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file

if (isset($_POST['title']) && isset($_POST['genre'])) {

    // sanitizeMySQL() is a custom function, written below
    $title = sanitizeMySQL($conn, $_POST['title']);
    $director = sanitizeMySQL($conn, $_POST['director']);
    $genre = sanitizeMySQL($conn, $_POST['genre']);
    $tomatometer = sanitizeMySQL($conn, $_POST['tomatometer']);

    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO movies (title, director, genre, tomatometer)
    VALUES (?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // Type specification chars for 4 characters
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssi',
        $title,
        $director,
        $genre,
        $tomatometer
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end if prepare
} else {
    echo "Failed to enter!";
} // end if isset

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
