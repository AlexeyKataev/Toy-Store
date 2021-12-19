@extends('layout')

@section('content')
<div class="main__wrapper">
	<div class="title-layout">
		<h1>Регистрация</h1>
	</div>	
	<div class="auth-form">
		<div class="reg-or-login">
			<button class="select-mode active" id="btn-activate-reg-form" onclick="toggleForm('reg')">Зарегистрироваться</button>
			<button class="select-mode" id="btn-activate-login-form" onclick="toggleForm('login')">Войти</button>
		</div>
		<form action="{{ route('profile/CreateAccount.register') }}" id="reg-form" class="reg-form enabled-form">
			<label>
				Ваше имя<input type="text" name="first-name" minlength="2" class="text-input" required>
			</label>
			<label>
				Ваша фамилия<input type="text" name="second-name" minlength="2" class="text-input" required>
			</label>
			<label>
				Email<input type="email" name="email" class="text-input" required>
			</label>
			<label>
				Номер мобильного<input type="tel" name="phone" class="text-input" required>
			</label>
			<label>
				Пароль<input type="password" name="password" class="text-input" required>
			</label>
			<label>
				Повтор пароля<input type="password" name="password-repeat" class="text-input" required>
			</label>
			<button type="submit">Зарегистрироваться</button>
		</form>
		<form action="" id="login-form" class="login-form">
			<label>
				Email или номер мобильного<input type="text" name="email-or-phone" class="text-input" required>
			</label>
			<label>
				Пароль<input type="password" name="password" class="text-input" required>
			</label>
			<button type="submit">Войти</button>
		</form>
	</div>
</div>
@endsection
