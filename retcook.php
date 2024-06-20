<?php
if(isset($_COOKIE["branch"]) && isset($_COOKIE["code"]))
{
	echo "The branch name=" .$_COOKIE["branch"]."</br>";
	echo "The branch code=" .$_COOKIE["code"];
}
else
{
	echo "sorry !! cookies is not set.";
}
?>