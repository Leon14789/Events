<!-- Header -->
<header id="header">
	<div class="inner">

		<!-- Logo -->
		<h1><a href=" {{ route('Home') }} " class="link" id="logo">ETEC ELIAS MIGUEL JUNIOR</a></h1>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				@auth
				<li><a href="{{route('register')}}">
						<i class="fa fa-users" aria-hidden="true"></i>
						Cadastrar ADM
					</a>
				</li>
				<li><a href="{{ route('create-event') }}">
						<i class="fa fa-book" aria-hidden="true"></i>
						Criar Evento
					</a>
				</li>
				<li><a href="{{ route('profile.edit') }}">
						<i class="fa fa-user" aria-hidden="true"></i>
						Perfil
					</a>
				</li>
				<li><a href="{{route('dashboard')}}">
						<i class="fa fa-folder-open" aria-hidden="true"></i>
						Listar Eventos
					</a>
				</li>
				<li>
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<button class="btn btn-link text-white" style="text-decoration: none;">
							<i class="fa fa-share" aria-hidden="true"></i> Sair
						</button>
					</form>
				</li>
				@endauth
				@guest
				<li><a href="{{route('Home')}}">
						<i class="fa fa-folder" aria-hidden="true"></i>
						LISTAR EVENTOS
					</a>
				</li>
				@endguest
			</ul>
		</nav>
	</div>
</header>