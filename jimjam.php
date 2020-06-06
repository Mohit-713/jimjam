<?php
if(isset($_POST['submit']))
{
	$startnumber=$_POST['startnumber'];
	$endnumber=$_POST['endnumber'];
	$data=array();

	for($i=$startnumber;$i<=$endnumber;$i++)
	{
		if($i%3==0 && $i%5==0)
		{
			array_push($data, "JimJam");
			continue;
		}	
		else if($i%3==0)
		{
			array_push($data, "Jim");
		}
		else if($i%5==0)
		{
			array_push($data, "Jam");
		}
		else
		{
			array_push($data,$i);
		}
		echo "\n";
	}
}

?>
