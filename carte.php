
	<html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css\carte.css">
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
							<div class="poza" >
								<img src="<?php echo $row['image']; ?>" width="100%" height="100%">
							</div>
							<div class="pdreapta">
							<div class="numecarte">
								<p><?php echo $row['name']; ?></p>
							</div>
							<div class="numeautor">
								<p><?php echo $row['author']; ?></p>
							</div>
							<div class="pret">
								<p><?php echo $row['price'] . ' lei'; ?></p>
							</div>				
							<div class="descriere">
								<p><?php echo $row['description']; ?></p>
							</div>				
							
							</div>		
					<?php endwhile; ?>
					<form action="add_comment.php" method="POST">
						<input type="hidden" name="book_id" value="<?php echo $id; ?>">
						<textarea class="comment" name="comment"></textarea>
						<input class="buton" type="submit">
					</form>
					<div class="ptcomm">
					<?php if($result_comments = mysqli_query($conn, $sql_comments)): ?>
						<?php while($row_comments = mysqli_fetch_array($result_comments)): ?>
							<div class="doneit"><?php echo $row_comments['name'] . ': ' . $row_comments['comment']; ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				<?php else: ?>
				<p>Nu am gasit cartea</p>
				<?php endif; ?>
				
        </body>
    </html>
