	<html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css\header.css">
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
					<form class="search" action="search.php" method="post">
					<input class="search-text" type="text" name="search" placeholder="Search for books">
					<input class="search-submit" type="submit" value=">>">
				</form>
				</div>
                <div class="listaobiecte">
					<?php
					$page = (isset($_REQUEST['page']) ? $_REQUEST['page'] : 1);

					include 'includes\dbh.inc.php';
					$pagesize = 18;
					$pageoffset = ($page - 1) * $pagesize;

					$sql = sprintf("SELECT * FROM books LIMIT %s OFFSET %s", $pagesize, $pageoffset);
					?>
					<style type="text/css">
						.obiect p {
							color: white;
						}
					</style>
					<?php if($result = mysqli_query($conn, $sql)): ?>
						<?php while($row = mysqli_fetch_array($result)): ?>

							<a href="carte.php?id=<?php echo $row['id']; ?>" class="obiect">
								<div class="poza">
									<img src="<?php echo $row['image']; ?>" style="width: 160px; height: 180px;">
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
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="pagina">
					<?php
					include 'pagination.php'; ?>
					<a href="header.php?pag=<?php echo ceil($row['id']/18)?>">
				</div>

        </body>
    </html>
