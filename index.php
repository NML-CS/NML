<!DOCTYPE html>
<html>
<body>
<?

require 'steamauth/steamauth.php';
require 'steanauth/userInfo.php';


if(isset(#_SESSION['steamid']))
{
	$id = $_SESSION['steamid'];
}
else
{
#not logged in
}


?>





<? if (isset($_SESSION['steamid'])) {?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-rounded" src"<?=$steamprofile['avater'];?>"> <b><?=$steamprofile['personaname'];?></b><b class="caret"></b></a>
<span class="dropdown-arrow"></spam>
<ul class ="dropdown-menu">
<li><a href="#">Option 1  </li>
<li><a href="#">Option 2  </li>
<li><a href="#">Option 1  </li>
<li><a href="#">Option 1  </li>
<li class="divider"></li>
<li><a href="steamauth/logout.php">Logout</a></li>
</ul>
</li>

<? } else {?>
<li><a href="#" data-toggle="modal" data-target="#loginmodal">Login</a></li>
<? } ?>


<? echo loginbutton(); ?>

</body>
</html>
