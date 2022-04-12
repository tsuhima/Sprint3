
<?php
$url = "https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=7cccdad1e5184db5add52500a1ff17a4";
$response = file_get_contents($url);
$newsData = json_decode($response);

?>