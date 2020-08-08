	<nav>
		<span>{{auth()->check() ? auth()->user()->name :'-'}}</span> ||
		<a href="/guardians">Guardians</a> |
		<a href="/students">Students</a>

		<form method="POST" action="/logout">
			@csrf
			<button>Logout</button>
		</form>
	</nav>