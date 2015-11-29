<?php
include 'database_basic_operations.php';
include 'header.php';

// Setting Errors Reporting Info
ERROR_REPORTING (E_ALL);
function errorMessage ($errorType, $errorContent)
{
	
}

function isDeveloped()
{
	if ($develop == 1)
	{
		header("location:".BASE"conservation.php");
	}
	elseif ($develop == 0)
	{
		break;
	}
	else
	{
		errorMessage (1, "Niewlaściwa wartość trybu developera. Sprawdź zawartość bazy danych")
	}
}

?>