<?php
include 'core.php';
include 'header.php';
include 'LOCALES."Polish/setup.php"';

function checkUserStatus($status)
{
	if ($status == "100")
	{
		showAdminView();
	}
	else
	{
		showUserView();
	}
}

function showUserView()
{
	
}

function showAdminView()
{
	
}
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