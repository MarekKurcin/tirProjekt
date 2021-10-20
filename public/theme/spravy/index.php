

<?php 
	include'../../assets/hlavicka.php';
	$clankySubory = glob('*.txt');
	$mesiace = array("január", "február", "marec", "apríl", "máj", "jún", "júl", "august", "september", "október", "november", "december");
 ?>

 <section class="container">
 	<?php 

 		foreach ($clankySubory as $subor) {
 			$clanok = file($subor,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 			$datum = strtotime(basename($subor,".txt"));
 			$datumTxt = date('j. ',$datum) .$mesiace[date('n',$datum) - 1]. date('Y H:m' , $datum);
 	 ?>
 	 <div>
 	 	<br><h5><?php echo $clanok[0] ?></h5>
 	 	<small>Publikované: <?php echo $datumTxt ?></small><br><br>
 	 	<img src="images/<?php echo $clanok[1] ?>" alt="" width="150"><br>

 	 	<br><p><?php echo $clanok[2] ?></p>
 	 	<hr>
 	 </div>


<?php 
	}

 ?>
 </section>


<?php 
	include '../../assets/peticka.php';
?>