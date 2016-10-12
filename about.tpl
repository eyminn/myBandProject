<section>
		<div id="head">
		<h1>About</h1>
			<img src="img/heade.jpg" alt="image">
		</div>
	{foreach from=$result2 item=oneItem2}
		<div id="aboutcontent">
			<p>{$oneItem2.content}</p>
		</div>
	{/foreach}
</section>