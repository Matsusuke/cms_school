<?php
require_once 'core.php';
require_once 'header.php';
include_once LOCALES."$config_info['language']/register.php";

function hashpass ($password)
{

	$hash = sha1($password);
	$password = $password.$hash;
	return $hash;

}

// Back-end verification of form data
function verifyInfo ($data)
{
	if(!isset($data['username']))
	{
		echo "<strong><p class='error-message'>Nazwa użytkownika jest pusta jest puste</p></strong>";
	}
	elseif(!isset($data['password']))
	{
		echo "<strong><p class='error-message'>Hasło jest puste</p></strong>";
	}
	elseif(!isset ($_POST['email']))
	{
			echo "<strong><p class='error-message'>Adres email jest pusty</p></strong>";
	}
	else
	{
		checkEmailRegExp($_POST['email']);
	}
}

function checkEmailRegExp ()
{
	if(preg_match('/^[a-zA-Z0-9\.\-_]+\@[a-zA-Z0-9\.\-_]+\.[a-z]{2,4}$/D', $_POST['email']))
	{
		$data['email'] = $_POST['email'];
	}
	else
	{
		echo "<strong><p class='error-message'>Adres email jest niepoprawny! Popraw go.</p></strong>";
	}
}


function sendInfoToDB($data)
{
	$register_query = mysql_query("INSERT INTO Users VALUES '','".$data['username']."','".$data['password']."','".$data['email']."','0','$hash','0'");
}
include 'header.php';
?>

			<div id='leftcol'>
				<div class='panel'>
					<div class='panel-title-bar'>
						<div class='panel-title'>
						</div>
					</div>
					<div class='panel-content'>
					</div>
				</div>
			</div>
			<div id='centercol'>
				<div id='centercol-panel'>
					<div id='centercol-panel-title-bar'>
						<div id='centercol-panel-title'>
						</div>
					</div>
					<div id='centercol-panel-content'>
						<form id='register-form' method='post' action='register.php'>
							<label>Nazwa użytkownika:</label><input type='text' id='username' maxlength ='64' name='username' /><br />
							<label>Hasło:</label><input type='text' id='password' maxlength ='64' name='password' /><br />
							<label>Powtórz hasło:</label><input type='text' id='pass-repeat' maxlength ='64' name='pass-repeat' /><br />
							<label>Adres email:</label><input type='text' id='email' maxlength ='64' name='email' /><br />
							<input type='reset' id='reset' name='reset' />
							<input type='submit' id='submit' name='submit' />
						</form>
					</div>
				</div>
			</div>
			<div id='rightcol'>
				<div class='panel'>
					<div class='panel-title-bar'>
						<div class='panel-title'>
						</div>
					</div>
					<div class='panel-content'>
					</div>
				</div>
			</div>
<?php
if (isset($POST['submit']))
{
	sendInfoToDB();
}
			
require_once 'footer.php';
?>