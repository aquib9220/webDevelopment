<?php
$state=$_GET['state'];
$c1=array("Mau","Lucknow","Ghaziabad");
$c2=array("Patna","Bhagalpur","Samastipur");
$c3=$arrayName = array("Mumbai","Puna","Nagpure" );

if($state=="Uttar Pradesh")
{
	foreach ($c1 as $c) 
	{
		echo "<option>$c</option>";
	}
}
else if ($state=="Bihar") 
{
	foreach ($c2 as $c) 
	{
		echo "<option>$c</option>";
	}
}
else if ($state=="Maharashtra") 
{
	foreach ($c3 as $c) 
	{
		echo "<option>$c</option>";
	}
}
else
echo "<option>First Slelect State</option>";