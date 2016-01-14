<?php
require_once 'core.php';
require_once 'header.php';

$_GET['step'] == 1;

$file = "database_basic_operations.php";
$adminhash = sha1("pass");

function writeInfoToFile ($file)
{
	$file_old_content = file_get_contents($file);
	str_replace("$db_adress = ''",$file_old_content, "$db_adress = '".$POST_['db_addr']."'");
	str_replace("$db_name = ''",$file_old_content, "$db_name = '".$POST_['db_name']."'");
	str_replace("$db_pass = ''",$file_old_content, "$db_pass = '".$POST_['db_pass']."'");
	str_replace("$db_user = ''",$file_old_content, "$db_user = '".$POST_['db_user']."'");
	file_put_contents($file,$file_old_content);
	
}

if ($_GET['step'] == 1)
{
	
}
elseif ($_GET['step'] == 2)
{
	
}
elseif ($_GET['step'] == 3)
{
	
}
elseif ($_GET['step'] == 4)
{
	
}
elseif ($_GET['step'] == 5)
{
	
}
else
{
	errorMessage(3, $locale['error_message_invalid_step']);
}


?>

			<div id='leftcol'>
				<div class='panel'>
					<div class='panel-title-bar'>
						<div class='panel-title'>
							left side
						</div>
					</div>
					<div class='panel-content'>
						left content
					</div>
				</div>
			</div>
			<div id='centercol'>
				<div id='centercol-panel'>
					<div id='centercol-panel-title-bar'>
						<div id='centercol-panel-title'>
						<?php $locale['setup_center_content']	?>
						</div>
					</div>
					<div id='centercol-panel-content'>
						<form id='setup-form' method='post' action='setup.php'>
							<fieldset>
								<label>Adres bazy danych:</label><input type='text' id='db_addr' maxlength ='64' name='db_addr' /><br />
								<label>Nazwa bazy danych:</label><input type='text' id='db_name' maxlength ='64' name='db_name' /><br />
								<label>Użytkownik bazy danych:</label><input type='text' id='db_user' maxlength ='64' name='db_user' /><br />
								<label>Hasło do bazy danych:</label><input type='text' id='db_pass' maxlength ='64' name='db_pass' /><br /><br /><br /><br />
							</fieldset>
							<fieldset>
								<input type='submit' id='submit' name='submit' value='Zainstaluj system'></input>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div id='rightcol'>
				<div class='panel'>
					<div class='panel-title-bar'>
						<div class='panel-title'>
						testowy prawy panel
						</div>
					</div>
					<div class='panel-content'>
					testowa prawa treść
					</div>
				</div>
			</div>
<?php
if (isset($_POST['submit']))
{
	if (!isset($_POST['db_addr']))
	{
		echo "<br /><br />";
		echo "<p class='message-box'>Podaj adres bazy.<br />";
	}
	elseif (!isset($_POST['db_name']))
	{
		echo "<br /><br />";
		echo "<p class='message-box'>Podaj nazwę bazy.<br />";
	}
	elseif (!isset($_POST['db_user']))
	{
		echo "<br /><br />";
		echo "<p class='message-box'>Podaj użytkownika bazy.<br />";
	}
	elseif (!isset($_POST['db_pass']))
	{
		echo "<br /><br />";
		echo "<p class='message-box'>Podaj hasło bazy.<br />";
	}
	else
	{

		writeInfoToFile($file);
		
		// createDataTables($adminhash);
		echo "<br /><br />";
		echo "<p class='message-box'>$locale['setup_eng_ending_info']<br />";
		echo "Pamiętaj o usunięciu pliku setup.php z serwera!</p>";
	}
}
include 'footer.php';
?>