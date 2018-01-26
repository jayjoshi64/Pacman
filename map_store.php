<?php
$data = $_POST['data']; 
$width = $_POST['width'];
$height= $_POST['height'];
//$data = json_decode($data, true);
$sucess=true;
$txt="";
for($i=0;$i<$height;$i++)
{
	for($j=0;$j<$width;$j++)
	{	
		if($data[$i][$j]=='true')
		{
			$txt.='1';
		}
		else if($data[$i][$j]=='false')
		{
			$txt.='0';
		}
		else
		{
			$sucess=false;
			echo " error: expected true/false  found :".$data[$i][$j];
			exit();
		}
		
		if($j<$width-1)
		{
			$txt.=',';
		}
	}
	
	$txt.="\n";
	
}


if($sucess == true)
{
	echo " done ";
}


$myfile = fopen("data.txt", "w");
fwrite($myfile, $txt);
fclose($myfile);
?>