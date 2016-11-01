<div class="contenttitle">
	<h1>RECENT POSTS</h1>
</div>
<section class="homepagecontent">
	<div class="articlemap">
	{foreach from=$result item=oneItem}
		
		<article>
			<h1>{$oneItem.title}</h1>
			<h3><em>Uploaded : {$oneItem.date_created|date_format:"%d %B, %Y"}</em></h3>
			<img src="img/{$oneItem.image}">
			<p>{$oneItem.content}</p>
		</article>

	{/foreach}
	<div class="pagination">
		<ul >
			<li><a href="?action=home&page_nr=1">1</a></li>
			<li><a href="?action=home&page_nr=2">2</a></li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>
	</div>
</section>
