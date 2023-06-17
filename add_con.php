<?php
//including the database connection file
include("config.php");
if(isset($_POST['Submit'])) {    
$title = $_POST['title'];
$content = $_POST['content'];


$result = mysqli_query($cser, "INSERT INTO contenttable (title,content) VALUES('$title','$content')");

header("location:view_content.php");


}
?>