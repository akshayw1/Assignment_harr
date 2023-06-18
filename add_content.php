<!DOCTYPE html>
<html>
<head>
	<title>Add Content</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">Your Company Name</div>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h1>Add Content</h1>
		<form method="post" action="add_con.php">
			<label for="title">Title:</label>
			<input type="text" id="title" name="title" required>

			<label for="content">Content:</label>
			<textarea id="content" name="content" required></textarea>

        <input type="submit" name="Submit" value="Submit Marks" class="button">
		</form>
	</main>

	<footer>
		<p>&copy; Your Company Name, 2023</p>
	</footer>
</body>
</html>