<script type="text/javascript">
	function getAction(form_id) {
		document.getElementById(form_id).submit();
	}
</script>
	
<header>
	<a href = "http://the-tale.org?referral=56706"><img src = "../../img/logo.png"></a>
	<div class="bar">
		<nav id="desktop">
			<ul>
				<li onclick="getAction('main_form')"><a href="#">Главная</a></li>
				<li onclick="getAction('places_form')"><a href="#">Города</a></li>
				<li onclick="getAction('masters_form')"><a href="#">Мастера</a></li>
				<li onclick="getAction('heroes_form')"><a href="#">Герои</a></li>
				<li onclick="getAction('jobs_form')"><a href="#">Проекты</a></li>
				<form id = "main_form" action="MainController.php" method="POST"></form>
				<form id = "places_form" action="PlacesController.php" method="POST"></form>
				<form id = "masters_form" action="MastersController.php" method="POST"></form>
				<form id = "heroes_form" action="HeroesController.php" method="POST"></form>
				<form id = "jobs_form" action="JobsController.php" method="POST"></form>
			</ul>
		</nav>
	</div>
</header>