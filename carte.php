
	<html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css\stylepag.css">
        </head>
        <body>
	        <div class="container">
                   
                    <div class="left">
						<a href="pag.php">
						<img src="logo.jpg" height="200" width="100%"></a>
						</div>
						<div class="right"><p><b><center><font size="50">Welcome to MyShop.com</font></center></b></p>
					</div>
			</div>
					
				<div class="nav">
					<ul>
						<li><a href="pag.php">Home</a></li>		
						<li><a href="aboutus.php">About</a></li>
						<li><a href="header.php">Buy</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#">News</a></li>
					</ul>
                </div>
				
				<div class="listaobiecte">
				<?php
				include 'includes\dbh.inc.php';
				$id = isset($_GET['id']) ? $_GET['id'] : 0;
				$sql = "SELECT * FROM books WHERE id=$id";
				$sql_comments = "SELECT * FROM comments";
				?>
				<style type="text/css">
					p {
						color: white;
					}
				</style>
				<?php if($result = mysqli_query($conn, $sql)): ?>
					<?php while($row = mysqli_fetch_array($result)): ?>
							<div class="poza">
								<img src="<?php echo $row['image']; ?>" style="width: 100%; height: auto;">
							</div>
							<div class="numecarte">
								<p><?php echo $row['name']; ?></p>
							</div>
							<div class="numeautor">
								<p><?php echo $row['author']; ?></p>
							</div>
							<div class="pret">
								<p><?php echo $row['price'] . ' lei'; ?></p>
							</div>						
					<?php endwhile; ?>
					
					<form action="add_comment.php" method="POST">
						<input type="hidden" name="book_id" value="<?php echo $id; ?>">
						<textarea name="comment"></textarea>
						<input type="submit">
					</form>
					
					<?php if($result_comments = mysqli_query($conn, $sql_comments)): ?>
						<?php while($row_comments = mysqli_fetch_array($result_comments)): ?>
							<p><?php echo $row_comments['name'] . ': ' . $row_comments['comment']; ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
					
				<?php else: ?>
				<p>Nu am gasit cartea</p>
				<?php endif; ?>
				
        </body>
    </html>
