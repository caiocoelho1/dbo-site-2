<?php 
require("config.php");
$ide = new IDE;
try { $ide->loadInjections("home"); }catch(Exception $e) { error($e->getMessage());}
foreach($news['news'] as $value) {
	echo "<div class='news'>";
	echo "<div class='newsTitle'>".$value['title']."</div>";
	echo "<div class='newsBody'>".$value['body']."</div>";	
	echo "<div class='newsFooter'>";	
	if($config['facebook']) {
		echo "<iframe src='http://www.facebook.com/widgets/like.php?href=".WEBSITE."/index.php/home/view/".$value['id']."' scrolling='no' frameborder='0'style='border: none; width: 400px; height: 24px;'></iframe><br/>";
	}
	echo "Postado em: ".date('d/m/Y á\s H:i', $value['time'])." </div>";
	echo "<div class='viewComments'><a href='".WEBSITE."/index.php/home/view/".$value['id']."'>Ver comentários</a></div>";
	echo "</div>";
}
echo "<div class='readArchive'><a href='".WEBSITE."/index.php/home/archive'>Ir para notícias antigas</a></div>";
?>