<?
$name = htmlspecialchars($_POST['name']);
$mess = htmlspecialchars($_POST['mess']);
$time = date('Y/m/d - h-i');
$data = '<div class=main><div class=name>'.$name.'   <div class=time>'.$time.'</div></div><div class=mess>'.$mess."</div></div>\n";
$delit = explode(' ', $name);

if ($delit[2]) 
{
	echo '<b class=red>Имя  не больше 2 слов!';
}
else
{
	if ($name[40])
	{
		echo '<b class=red>The name is not more than 20 characters!';
	}
	else
	{
		if ($mess[300])
		{
			echo '<b class=red>No more than 200 characters at a time!';
		}
		else
		{
			if ($name and $mess)
			{
			$data = $data.(@file_get_contents('filename.html'));	
			$write = @file_put_contents('filename.html', $data ,  LOCK_EX);
			if($write){ echo '<b class=time>Record'; } else{ echo 'No data recorded'; }
			}
			else
			{
				echo '<b class=red>Some of the fields are empty!';
			}		
		}		
	}		
}
?>