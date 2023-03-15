<!--//Consultas//-->
<!-- jquery pop-up como a caixa com temporizador -->
<style type='text/css'>
@charset "utf-8";
#popup{
position: fixed;
top:100px;
z-index:9999;
display:none;
padding:0px;
right:600px;
border:10px solid rgba(82, 82, 82, 0.7);
-webkit-background-clip: padding-box; /* for Safari */
background-clip: padding-box; /* for IE9+, Firefox 4+, Opera, Chrome */
-webkit-border-radius:8px 8px 8px 8px;
-moz-border-radius:8px 8px 8px 8px;
border-radius:8px 8px 8px 8px;
width:400px;
height:360px;
overflow:hidden;
}
#popup span{
font-size:20px !important;
font-weight:bold !important;
}
#popup h1{
background:#6d84b4 url(http://4.bp.blogspot...ot.com%5Dh1.png) 98% no-repeat;
border:1px solid #3b5998 !important;
color:#FFFFFF !important;
font-size:20px !important;
font-weight:700 !important;
padding:5px !important;
margin:0 !important;
font-family:'"lucida grande",tahoma,verdana,arial,sans-serif !important;
overflow:hidden !important;
}
.htmlarea{
font-size:12px !important;
font-weight:normal !important;
height:265px !important;
padding:1px !important;
background:#fff !important;
border-bottom:2px solid #ddd;
overflow:hidden !important;
}
#mdfooter{
text-align:left;
background:#F2F2F2 !important;
height:56px !important;
padding:10px 10px 10px 10px !important;
overflow:hidden !important;
}
#mdclose{
float:right;
background-color:#eee !important;
border:1px solid #ccc !important;
color:#111 !important;
font-weight:bold !important;
padding:5px 8px 5px 8px !important;
text-decoration:none !important;
display:inline-block !important;
font-family:'"lucida grande",tahoma,verdana,arial,sans-serif !important;
outline:none !important;
position:relative !important;
font-size:18px !important;
margin:1px !important;
}
#mdclose:active{
top:1px;
left:1px;
}
</style>
<script type='text/javascript'>
jQuery(document).ready(function() {
function _ppopup()  {
var sec = 10
var timer = setInterval(function() {
   $("#mdfooter span").text(sec--);
   if (sec == 0) {
      $("#popup").fadeOut("slow");
      clearInterval(timer);
   }
},1000);
	var mdwh = jQuery(window).height();
	var mdpph = jQuery("#popup").height();
	var mdfromTop = jQuery(window).scrollTop()+190;
	jQuery("#popup").css({"top":mdfromTop});}
	jQuery(window).fadeIn(_ppopup).resize(_ppopup)
	var mdleftm = 440;
	jQuery("#popup").animate({opacity: "1", left: "0" , left:  mdleftm}, 0).show();
	jQuery("#mdclose").click(function() {
	jQuery("#popup").animate({opacity: "0", left: "-5000000"}, 1000).show();});});
	function abrirPopup(url,w,h) {
		var newW = w + 100;
		var newH = h + 100;
		var left = (screen.width-newW)/2;
		var top = (screen.height-newH)/2;
		var newwindow = window.open(url, 'name', 'width='+newW+',height='+newH+',left='+left+',top='+top);
		newwindow.resizeTo(newW, newH);
		 
		//posiciona o popup no centro da tela
		newwindow.moveTo(left, top);
		newwindow.focus();
		return false;
	}
</script>
<div id="popup">
<h1>Curta Dbo Universe No Facebook!</h1>
<div class="htmlarea">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdbuoriginal&amp;width=400&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23fff&amp;stream=false&amp;header=false&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:250px;" allowtransparency="true"></iframe>
</div>
<div id="mdfooter">
Por favor, aguarde..<span>10</span> Segundos
<a href="#" id="mdclose" onclick="return false;"><font color="red" size="3">Fechar</font></a>
</div>
</div>
<!-- Fim pop-up -->