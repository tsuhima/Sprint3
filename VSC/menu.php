<?php

if($loggedUser != null)
{
	$userCategorys = $userCategoryController->getByUserId($loggedUser->getId());

?>
    <div class="header_area" style="padding:0 !important">    
		<h3 style="float:left;font-size:20px"> <a href="index.php"> My App </a></h3>	
      <div class="top_menu floatright" style="margin-bottom:20px;margin-top:0 !important;">
        <ul>
          <li><a href="" onClick="refreshPage()">Refresh</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="logout.php">Sign out</a></li>
        </ul>
		<br>
		<br>
		<h3 class="top_menu floatright" style="margin-top:0 !important;font-size:18px;"> <?php echo " Hello " . ucfirst($loggedUser->getName()) ."!"; ?> </h3>
      </div>
      
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="index.php">Home</a></li>
		<?php
		foreach($userCategorys as $userCategory)
		{
			$catergorys = $categoryController->getAll(1);
			foreach($catergorys as $category)
			{
				if($category->getId() == $userCategory->getCategoryId())
				{				
		
					$catergoryUrl = "category.php?id=".$category->getId();
				}
			}
		?>
			<li><a href="<?php echo $catergoryUrl; ?>"><?php echo $userCategory->getCategory()->getName(); ?></a>	</li> 
		<?php
		}
		?>
        
      </ul>
    </div>
<?php
}
else	
{
	?>
	<div class="header_area" style="padding:0 !important">    
		<h3 style="float:left;font-size:20px"> <a href="index.php"> My App </a></h3>	
      <div class="top_menu floatright" style="margin-bottom:20px;margin-top:0 !important;">
        <ul>
          <li><a href="" onClick="refreshPage()">Refresh</a></li>
          <li><a href="login.php">Sign in</a></li>
        </ul>
		<br><br>
      </div>
    </div>
	<hr>
	<?php
}		
?>
	
<script>
function refreshPage(){
    window.location.reload();
} 
</script>