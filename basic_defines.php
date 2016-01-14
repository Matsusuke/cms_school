<?php
// Set-up directories addresses.
DEFINE ("BASE", "".$_SERVER['SERVER_ADDR']."/cms/");
DEFINE ("ADMIN", BASE."administration_area/");
DEFINE ("INCLUDES", BASE."includes/");
DEFINE ("CONFIG", INCLUDES."config/");
DEFINE ("IMAGES", BASE."images/");
DEFINE ("LIBRARIES", INCLUDES."libraries/");
DEFINE ("LOCALES", BASE."locales/");
DEFINE ("THEMES", BASE."themes/");
DEFINE ("UPLOADS", BASE."uploads/");




// Set-up user-directories adresses.
DEFINE ("USER", BASE."user/");
DEFINE ("AVATARS", USER."avatars/");
DEFINE ("GALLERY", USER."galleries/");

?>