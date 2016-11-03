<header>
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="200" height="150">
		</div>
		<div class="socailicons">
				<img src="img/fb.png" width="35" height="35">
				<img src="img/twit.png" width="35" height="35">
				<img src="img/insta.png" width="35" height="35">
		</div>
		<ul>
			{foreach from=$result3 item=oneMenu}
			<li><a href="?action={$oneMenu.page}">{$oneMenu.page}</a></li>
			{/foreach}
		</ul>
		<div class="search">
			<img src="img/searchicon.png" width="30" height="30">
			<input type="text" name="Search" placeholder="Search Articles">
		</div>
		

	</div>
	

</header>

