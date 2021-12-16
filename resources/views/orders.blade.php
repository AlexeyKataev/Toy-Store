@extends('layout')

@section('content')
<div class="main__wrapper">
	<div class="title-layout">
		<h1>Мои Заказы</h1>
	</div>	
	<div class="list-orders">
		<div class="list-orders__item">
			<div class="title">Заказ <span class="num-order">#0000-0000-0000-0000</span><span class="status-mark successful">✓</span></div>
			<p class="text">От 15 декабря 2021 г.</p>
			<table class="table">
				<tr>
					<td>#</td>
					<td>Товар</td>
					<td>Стоимость</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
			</table>
		</div>
		<div class="list-orders__item">
			<div class="title">Заказ <span class="num-order">#0000-0000-0000-0000</span><span class="status-mark cancel">✕</span></div>
			<p class="text">От 15 декабря 2021 г.</p>
			<table class="table">
				<tr>
					<td>#</td>
					<td>Товар</td>
					<td>Стоимость</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>1</p>
					</td>
					<td>
						<p>Товар 1</p>
					</td>
					<td>
						<p>5 x <span>1 500 ₽</span> = 7 500 ₽</p>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
@endsection