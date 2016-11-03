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
			<input type="text" name="Search" placeholder="Search Articles">
			<img src="img/searchicon.png" width="30" height="30">

		</div>
		

	</div>

	<div class="buttons">
	<img src="img/back.png" width="30" height="56" id="backward" />
	<img src="img/next.png" width="30" height="56" id="forward" />
    </div>

	<div class="headerimg">

			<img src="img/headerimg.jpg" id="slide1">	
	</div>
	

</header>

