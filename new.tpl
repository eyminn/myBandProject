<div class="events">
	<div class="newwrapper">
		{foreach from=$resultevents item=oneEvents}
		<article>
			<img src="img/{$oneEvents.img}">
			<h2>{$oneEvents.title}</h2>
			<h3><em>{$oneEvents.datum|date_format:"%d %B, %Y"}</em></h3>
			<p>{$oneEvents.locatie}</p>
		</article>
		{/foreach}
	</div>
</div>