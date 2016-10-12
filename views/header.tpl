<header>	
	<div id="menu">
	{foreach from=$result3 item=oneMenu}
		<ul>
			<li><a href="?action=about">{$oneMenu.page2}</a></li>
			<li><a href="?action=home">{$oneMenu.page1}</a></li>
		</ul>
	{/foreach}
	</div>
</header>