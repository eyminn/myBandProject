<div class="contenttitle">
	<h1>RECENT POSTS</h1>
</div>
<section class="homepagecontent">
	<div class="articlemap">
	{foreach from=$result item=oneItem}
		
		<article>
			<p>Uploaded : {$oneItem.date_created|date_format:"%d, %B, %Y"}</p>
			<h1>{$oneItem.title}</h1>
			<img src="img/{$oneItem.image}">
			<h1>{$oneItem.content|truncate:30}</h1>
		</article>

	{/foreach}
	<div class="pagination">
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>
	</div>
</section>
