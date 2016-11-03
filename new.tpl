<div class="events">
	<div class="eventsheader">
		<h1>EVENTS & SHOWS</h1>
	</div>
	<div class="blankspace">	
	</div>
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

	<div class="datatable">
		<table>
			<thead>
				<tr>
					<th class="tableheader">Date</th>
					<th class="tableheader">Event</th>
					<th class="location">Location</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$resultTableEvents item=oneTableEvents}
				<tr>
					<td><em>{$oneTableEvents.datum|date_format:"%b %d, %Y"}</em></td>
					<td>{$oneTableEvents.title}</td>
					<td class="tLocation">{$oneTableEvents.locatie}</td>
				</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>