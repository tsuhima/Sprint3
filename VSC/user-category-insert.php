<?php
include("init.php");
$userId = $loggedUser->getId();


//check for product extra
$query = "";
$userCategoryController->deleteByUserId($userId);

if( $userId > 0 )
{
	if( isset($_POST['category']) )
	{
		
		foreach ($_POST['category'] as $extraMultipleId)
		{
			if(is_numeric($extraMultipleId))
			{
				$query = $query . "INSERT INTO `user_category`(`userId`, `categoryId`) VALUES ('$userId','".$extraMultipleId."'); ";
				
			}
		}
	}
	$userCategoryController->addBulk($query);
}
header("location:settings.php");
//echo 1;
//echo  $userCategoryId;
exit();

?>