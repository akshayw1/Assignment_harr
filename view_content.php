<?php


include("add_con.php");
$result = mysqli_query($cser, "SELECT * FROM contenttable ORDER BY title DESC"); // using mysqli_query instead
?>


<!DOCTYPE html>
<html>
<head>
<title>View Content</title>
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
		<h1>View Content</h1>
		<table>
			<tbody>
				<tr>
					<th>Title</th>
					<th>Content</th>
				</tr>
				<?php 
 
				while($res = mysqli_fetch_array($result)) {         
					echo "<tr>";
					echo "<td>".$res['title']."</td>";
					echo "<td>".$res['content']."</td>";
					
					 
							
				}
				?>
			
				
			</tbody>
		</table>
	</main>
         <footer>
	<p>&copy; Your Company Name, 2023</p>
	</footer>
</body>
</html>
