<?php 
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);

 ?>



<nav class="navbar navbar-default nav-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">MY SHOP</a>
			<ul class="nav navbar-nav pull-right">
				<?php while($parent = mysqli_fetch_assoc($pquery)) :?>
					<?php $parent_id = $parent['id']; ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle = "dropdown"><?=$parent['category'];?><span class="caret"></span></a>
					<?php $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
						$cquery = $db->query($sql2);
						?>
						
					<ul class ="dropdown-menu" role ="menu">
					<?php while($child = mysqli_fetch_assoc($cquery)) :
					?>
					<li><a href = "#"><?=$child['category'] ?></a></li>
					<?php endwhile; ?>
					</ul>
				
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
	</nav>