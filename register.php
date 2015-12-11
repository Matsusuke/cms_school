<?php
include 'basic_functions.php';
include 'basic_defines.php';

function hashpass ($password)
{

	sha1($password);
	return $password;

}

// Back-end verification of form data
function verifyInfo ($data['username'], $data['password'], $_POST['email'])
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

function checkEmailRegExp ($_POST['email'])
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


function sendInfoToDB($data['username'], $data['password'], $data['email'])
{
	
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
include 'footer.php';
?>