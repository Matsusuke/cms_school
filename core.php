<?php
require_once 'database_basic_operations.php';
require_once 'basic_defines.php';

// Setting Errors Reporting Info
ERROR_REPORTING (E_ALL);

$config_info[] = new array();

function errorMessage ($errorType, $errorContent)
{
	
}

function get_locale_info()
{
	$sql = "SELECT language FROM config_info";
	if ($conn->query($sql) === TRUE) 
	{
		$result = $conn->query($sql);
		if ($result->num_rows == 1) 
		{
			if($row = $result->fetch_assoc()) 
			{

				$config_info['language'] = $row['language'];
				return $config_info['language'];
				
			}
		}
	}
}

function isDeveloped()
{
	$sql = "SELECT isDeveloped FROM config_info";
	if ($conn->query($sql) === TRUE) 
	{
		$result = $conn->query($sql);
		if ($result->num_rows == 1) 
		{
			if($row = $result->fetch_assoc()) 
			{
				if ($row['developState'] == 1)
				{
					header("location:".BASE."conservation.php");
				}
			}
			elseif ($row['developState'] == 0)
			{
				break;
			}
			else
			{
				errorMessage (1, "Niewlaściwa wartość trybu developera. Sprawdź zawartość bazy danych");
			}
		}
	}
}

function isInstalled()
{
	$sql = "SELECT isInstalled FROM config_info";
	if ($conn->query($sql) === TRUE) 
	{
		$result = $conn->query($sql);
		if ($result->num_rows == 1) 
		{
			if($row = $result->fetch_assoc()) 
			{
				if ($row['installState'] == 1)
				{
					isDeveloped();
				}
				else 
				{
					header("Location:setup.php");
				}
			}
		}
	} 
	else 
	{
		echo "Podczas laczenia do bazy danych wystaplil blad: " . $conn->error;
	}
}

get_locale_info();
?>