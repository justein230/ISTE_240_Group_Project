<?php
	
	$path = '../';
	$title = 'PALTS : About';
	$nav = 'aboutAndContact';
	require('../../../groupconn.php');

	if (!empty($_POST['name']) && !empty($_POST['comment'])) {
		$statement = $conn->prepare('INSERT INTO Comments (Name, Comment) VALUES (?, ?)');
		$statement->bind_param('ss', $_POST['name'], $_POST['comment']);
		$statement->execute();
	}

	require($path.'assets/inc/head.php');


?>

	<div class="commentsDiv">
		<form action="aboutAndContact.php" method="post">
			<input type="text" placeholder="Name" name="name"><br><br>
			<textarea name="comment" placeholder="comment" cols="30" rows="10"></textarea><br><br>
			<input type="submit">
		</form><br><br>

		<table>
			<tr>
				<th>Name</th>
				<th>Comment</th>
			</tr>
			<?php

				$result = $conn->query('SELECT * FROM Comments');
				while ($comment = $result->fetch_assoc()) {
					echo '<tr>';
					echo '<td>'.$comment['Name'].'</td><td>'.$comment['Comment'].'</td>';
					echo '</tr>';
				}

			?>
		</table>
	</div>


<?php

	require($path.'assets/inc/footer.php');

?>
