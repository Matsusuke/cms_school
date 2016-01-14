<?php

// Setting Database Variables
$db_adress = 'localhost';
$db_name = 'cms';
$db_pass = 'haslotymczasowe';
$db_user = 'root';

// Connection to database

function connectToDatabase($db_adress, $db_name, $db_user, $db_pass)
{
	$link = mysqli_connect($db_adress, $db_user, $db_pass, $db_name);
	
	if (!$link)
	{
		echo "Error: Polaczenie z MySQL niemozliwe./ Error: Unable to connect to database" . PHP_EOL;
		echo "Numer bledu debuggowania:/Number of the debugging code: " . mysqli_connect_errno() . PHP_EOL;
		echo "Blad debuggowania:/Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	echo "Polaczono z baza danych/Connected to database/Connected to database" . PHP_EOL;
}

function createDataTables()
{
	

	// Tworzenie bazy danych
	$sql = "CREATE TABLE Articles (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	article_cat_id 
	article_title VARCHAR(30) NOT NULL,
	article_content VARCHAR(1200) NOT NULL,
	article_author INT(6),
	article_views INT(6),
	article_date TEXT(11)
	)

	CREATE TABLE Articles_cats (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	article_cat_name VARCHAR(30) NOT NULL,
	article_cat_prior INT(3) NOT NULL,
	)


	CREATE TABLE News (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	news_title VARCHAR(30) NOT NULL,
	news_content VARCHAR(30) NOT NULL,
	news_author INT(6),
	news_views INT (6),
	news_date TEXT(11)
	)

	CREATE TABLE News_cats (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	news_cat_name VARCHAR(30) NOT NULL,
	news_cat_prior INT(3) NOT NULL,
	)


	CREATE TABLE Uploads (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	upload_name VARCHAR(30) NOT NULL,
	upload_adress VARCHAR(120) NOT NULL,
	upload_author_id VARCHAR(6),
	upload_date TEXT(11)
	)


	CREATE TABLE Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	user_username VARCHAR(64) NOT NULL,
	user_password VARCHAR(64) NOT NULL,
	user_email VARCHAR(64),
	user_is_active INT(1) UNSIGNED,NOT NULL,
	user_passhash VARCHAR(64),
	user_priviliges VARCHAR(1) NOT NULL
	)";

	if ($conn->query($sql) === TRUE) {
		echo "Baza danych zostala utworzona";
	} else {
		echo "Podczas tworzenia bazy wystapil blad: " . $conn->error;
	}
}

function export_database ($name, $directory, $progress, $isExported)
{
	//Tu będzie eksport bazy danych
}
include 'footer.php';
?>