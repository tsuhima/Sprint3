<?php
$noLogin = 1;
include("init.php");

include("api.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Personal News Articles</title>
<?php include("head.php");?>
</head>
<body>
	<div class="body_wrapper">
		<div class="center">
			<?php include("menu.php"); ?>
		
			<div class="content_area">
				<div class="main_content" style="width:100% !important">   
					
					<?php
					foreach($newsData->articles as $news)
					{
						$s = $news->publishedAt;
						$date = strtotime($s);
						
					?>
						<div style="background:#fbfbfb;margin-bottom:10px;padding:0 0px 0 10px;border:#eee solid 1px">
							<h3><?php echo $news->title ?></h3>
							<p class="readmore"><?php echo date('M d, Y', $date); ?></p>
							<p><?php echo $news->description ?></p>
							
						</div>
						
					<?php
					}
					?>
				</div>	
				
				.pagination {
  display: inline-block;
}

.pagination a {
  color: red;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: black;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
				</div>					
			</div>
		</div>
	</div>	

<div>
<style>

.main_content h3
{
	font-size:16px;
	margin-bottom:10px;
}
.main_content p
{
	line-height:30px;
	font-size:14px;
	padding-left:20px;
}
.main_content .readmore
{
	text-decoration:none !important;	
}
</style>
			</div>
		</div>
	</div>	
</body>
</html>

<style>

.main_content h3
{
	font-size:16px;
	margin-bottom:10px;
}
.main_content p
{
	line-height:30px;
	font-size:14px;
	padding-left:20px;
}
.main_content .readmore
{
	text-decoration:none !important;	
}
</style>
</div>
