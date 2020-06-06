<html>
<body>
	<?php include('jimjam.php') ?>
<H2> JimJam paragram </H2>
<form action="index.php" method="post">
starting number: <input type="text" name="startnumber"><br>
Ending number  : <input type="text" name="endnumber"><br>
<input type="submit" name="submit">
</form>
	<?Php if(isset($data)){
		$data2='';
		foreach($data as $value){
			//echo $value."<br>";
			$data2.=$value."\n";
		}
		?>
		<textarea  rows="10" cols="40"><?php echo($data2)  ?> </textarea>
	<?php }?>	
</body>
</html>