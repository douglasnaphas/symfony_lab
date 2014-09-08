<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

$mysqli = new mysqli( 'localhost', 'symf', 'symfony_pw', 'blog_db' );
$result = $mysqli->query( "SELECT id, title FROM post" );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>List of Posts</title>
	</head>
	<body>
		<h1>List of Posts</h1>
		<ul>
			<?php while ( $row = $result->fetch_assoc() ): ?>
			<li>
				<a href = "/show.php?id=<?php echo $row['id'] ?>">
					<?php echo $row['title'] ?>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</body>
</html>

<?php
$mysqli->close();
?>
