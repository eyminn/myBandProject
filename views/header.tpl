<header>
	{foreach from=$result3 item=oneMenu}
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="170" height="167">
			<h1>TIME PIECES</h1>
			<div class="line"></div>
		</div>
		<ul>
			<li><a href="?action=home">{$oneMenu.page1}</a></li>
			<li><a href="?action=about">{$oneMenu.page2}</a></li>
			<li><a href="#">NEW</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>

	</div>

	<div class="headerimg">

			<img src="img/headerimg.jpg" id="slide1">	
	</div>
	<input type="button" value="forward" id="forward" />
    <input type="button" value="back" id="backward" />

	{/foreach}
</header>

