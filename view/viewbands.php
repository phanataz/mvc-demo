<html>
<head></head>

<body>

<?php 

	echo 'Band: ' . $band->title . '<br/><br/>';
	echo 'Band Members: ' . $band->band_members . '<br/><br/>';
	echo 'Genre: ' . $band->genre . '<br/><br/>';
    echo '<a href = "index.php">Return to List</a>';
?>
<h3>The purpose of this demonstration is to show how MVC design works in PHP.</h3>
<ul>
<li><strong>Controller:</strong> index.php uses controller.php to manipulate data. It will retrieve a listing of all
bands or detailed info about one specific band.
<br/>
<br/>
<li><strong>Model:</strong>Model.php contains the actual data and functions required for Controller to work.
<br/>
<br/>
<li><strong>Model:</strong> model\bands.php contains the code for the class "band". The properties are title,
band members, and genre
<br/>
<br/>
<li><strong>View:</strong>view\bands.php contains the html to view all bands and it is loaded by controller.php by the
"invoke" function. It uses the class "band".
<br/>
<br/>
<li><strong>View:</strong>view\viewbands.php contains the html to view detailed information about a band and it is
loaded by controller.php by the "invoke" function.  It uses the class "band".
<br/>
<br/>
</ul>
</body>
</html>