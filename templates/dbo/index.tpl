<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Night" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="WODBO WARS A GUERRA JÀ COMEÇOU." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		<meta property="fb:admins" content="yan.santoslima.7"/>
		{$head}
		<title>.:: Wodbo Wars ::.</title>
		<link rel="stylesheet" type="text/css" href="{$path}/templates/dbo/main.css" />
		<link href="{$path}/templates/dbo/favicon.png" rel="shortcut icon" />
	</head>
	<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div id="vt_page">
			<div id="vt_header"></div>
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
						<div class="header"></div>
						
						
						<ul>
						

							
							
							
						</ul>
					</div>
					<div id="vt_account_menu">
						<div class="serv"></div>
						<ul>
							{if $logged == 1}
							<li><a href="{$path}/index.php/account/"><font color="black">Minha Conta</a></li>
					            <li><a href="{$path}/index.php//p/v/points"><font color="RED">POINTS DONATE</a></li>
								<li><a href="{$path}/index.php//p/v/donatei"><font color="green">COMO DONATAR</a></li>
								<li><a href="{$path}/index.php//p/v/regras"><font color="blue">Regras do jogo</a></li>
								<li><a href="{$path}/index.php/p/v/venda_de_chars">Venda De Chars</a></li>
							{else}
								<li><a href="{$path}/index.php/account/create"><font color="black">Criar Conta</a></li>
								<li><a href="{$path}/index.php/account/login"><font color="black">Login</a></li>
                                                                <li><a href="{$path}/index.php//p/v/points"><font color="RED">POINTS DONATE</a></li>
								<li><a href="{$path}/index.php//p/v/donatei"><font color="green">COMO DONATAR</a></li>
								<li><a href="{$path}/index.php//p/v/regras"><font color="blue">REGRAS DO SERVIDOR</a></li>
							{/if}
						</ul>
					</div>
					<div id="vt_game_menu">
						<div class="game"></div>
						<ul>
                                                   <li><a href="{$path}/index.php//p/v/combos"><font color="black">COMBOS PERSONAGENS</a></li>
                                                   <li><a href="{$path}/index.php//p/v/links"><font color="red">Links Download Client</a></li>
						    
						
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
							<a href=""><font color="white">Forum</a>	<br /><br />
							<li><a href="{$path}/index.php/character/online"><font color="black">Players Online</a></li>
							<li><a href="{$path}/index.php/character/view"><font color="black">Procurar Personagem</a></li>
							<li><a href="{$path}/index.php/p/v/deaths"><font color="black">Últimas Mortes</a></li>
							<li><a href="{$path}/index.php/highscores"><font color="black">Rank</a></li>
							<li><a href="{$path}/index.php/p/v/fragers"><font color="black">Top Frags</a></li>
							<li><a href="{$path}/index.php/guilds"><font color="black">Guilds</a></li>
							<li><a href="{$path}/index.php/houses/main"><font color="black">Casas</a></li>
							<li><a href="{$path}/index.php/p/v/gallery"><font color="black">Galeria</a></li>
							<li><a href="{$path}/index.php/video"><font color="black">Vídeos</a></li>

						</ul>
					</div>
				</div>
				
				<div id="vt_content">
					<!-- {$main} !-->
				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="http://www.mediafire.com/download/hx8ddlcs4440eex/Client+Wars+%5B5.6%5D.rar" class="button">
									
								</a>
								<a href="{$path}/index.php/p/v/gifts" class="button1">
									
									<span></span>
								</a>
								<a href="http://wodbowars.wix.com/dicasetutorias" class="button2">
									
								</a>
                                           <a href="{$path}/index.php/highscores" class="button3">
									
								</a>

							</div>
							<div class="vt_panel_module">
								<div class="header"></div>
								{foreach from=$worlds key=id item=world}
								<div>
									<b>World:</b> <span style="color: #5F021F;font-weight: bold;">{$world} </span><br />
									<b>Status:</b> 
									{if $serverOnline[$id]}
										<a href=""><img src="{$path}/templates/dbo/images/statuson.png" alt="Designed by Night" /></a><br />
										<b>Uptime:</b> <span style="color: #FF0000;font-weight: bold;">{$serverUptime[$id]}</span> <br />
										<b>Players:</b> <span style="color: #FF0000;font-weight: bold;">{$serverPlayers[$id]}/{$serverMax[$id]}</span><br />
										<a href="http://www.facebook.com/wodbolegends"><img src="{$path}/templates/dbo/images/facedbud.png" alt="Designed by Night" /></a><br /><br /><br />
									{else}
									<a href=""><img src="{$path}/templates/dbo/images/offline.png" alt="Designed by Night" /></a><br />
									<a href="http://www.facebook.com/wodbolegends"><img src="{$path}/templates/dbo/images/facedbud.png" alt="Designed by Night" /></a><br /><br />
										
									{/if}
								</div>
								{/foreach}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>