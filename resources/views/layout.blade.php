<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="{{ asset('css/nullable.css')}}" rel="stylesheet">
	<link href="{{ asset('css/wrappers.css')}}" rel="stylesheet">
	<link href="{{ asset('css/items.css')}}" rel="stylesheet">
	<script src="{{ asset('js/viewScripts.js')}}"></script>
	<title>Store</title>
</head>
<body>
	<header class="header">
		<div class="header__wrapper">
			<div class="header-logo__wrapper">
				<a href="/" class="header-logo">
					<img src="{{ asset('icons/rubber-duck.png')}}" alt="Logo">
					<p>Магазин игрушек</p>
				</a>
			</div>
			<menu class="header-menu">
				<a href="" class="btn-header">Категории</a>
				@if(session()->has('qwick'))
				<a href="/Profile/Orders" class="btn-header">Заказы</a>
				<a href="" class="btn-header">Личный кабинет</a>
				@else
				<a href="/Profile/CreateAccount" class="btn-header">Регистрация</a>
				@endif
			</menu>
		</div>
	</header>
	<main class="main">
		@yield('content')
	</main>
	<footer class="footer">
		<div class="footer__wrapper">

		</div>
	</footer>
</body>
</html>
