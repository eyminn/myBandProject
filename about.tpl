<section>
		<div class="aboutheader">
			<h1> - ABOUT THE BLOG - </h1>
		</div>
	{foreach from=$result2 item=oneItem2}
		<div id="aboutcontent">
			<div>
			<p>{$oneItem2.content}</p>
			</div>
		</div>
	{/foreach}
</section>