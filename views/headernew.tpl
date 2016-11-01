<header>
	{foreach from=$result3 item=oneMenu}
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="250" height="187">
		</div>
		<div class="socailicons">
				<img src="img/fb.png" width="50" height="50">
				<img src="img/twit.png" width="50" height="50">
				<img src="img/insta.png" width="50" height="50">
		</div>
		<ul>
			<li><a href="?action=home">{$oneMenu.page1}</a></li>
			<li><a href="?action=about">{$oneMenu.page2}</a></li>
			<li><a href="?action=new">NEW</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>

	</div>

	{/foreach}
</header>

