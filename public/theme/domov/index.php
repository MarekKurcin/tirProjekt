<?php 
	include '../../assets/hlavicka.php';
	$clanky = file('clanky.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 ?>

 <section class="container">

 	<?php 
 		foreach ($clanky as $clanok) {
 			list($nadpis, $obrazok, $text) = explode('::', $clanok)	
 	 ?>
 	
 	 <div>
 	 	<h5><?php echo $nadpis ?></h5>
 	 	<img src="images/<?php echo $obrazok ?>" alt="">
 	 	<div><?php echo $text ?></div>
 	 </div><br>
<?php 
	} 
?>
 	</section>


