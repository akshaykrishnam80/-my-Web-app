<?php 
require_once ('footer.php');

 $path = str_ireplace('/','',str_ireplace('gameapp/','',$_SERVER['REQUEST_URI']));

//Header
require_once ('header.php');

if($path=="about"){

    require_once ('about.php');

}else if($path=="help"){
    require_once ('help.php');

}else if($path=="account"){
    require_once ('account.php');

}else if($path=="login"){
    require_once ('login.php');

}else if($path=="signup"){
    require_once ('signup.php');

}else if($path=="leaderboards"){
    require_once ('leaderboards.php');
}else if($path=="Logout"){
    require_once ('signup.php');
}else{
    require_once ('home.php');

}

//Footer
get_footer(($path !="login" && $path !="signup"  && $path !="signup"));


?>


