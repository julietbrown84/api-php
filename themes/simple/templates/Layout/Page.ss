<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		

		<div class="content">
			<h2>$randomUser.name.title $randomUser.name.first $randomUser.name.last</h2>
			<h4>$randomUser.location.street $randomUser.location.city $randomUser.location.state</h4>
			<h3>$randomUser.gender</h3>
			<img src="$randomUser.picture.large">
			<img src="$randomUser.picture.medium">
			<img src="$randomUser.picture.thumbnail">
			<h4>$randomUser.phone </h4>
		</div>
	</article>
		$Form
		$CommentsForm
</div>