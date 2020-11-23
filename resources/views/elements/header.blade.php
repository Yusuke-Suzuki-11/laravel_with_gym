<header class="header">
	<div class="header-top">

		<div class="header-logo">
			<img src="image/main_logo.png" alt="main_logo">
		</div>

		<div class="header-menue">
			@if( Auth::check() )
			<ul>
				<li>
					<a href="#">ログアウト</a>
				</li>
				<li>
					<a href="#">ログアウト</a>
				</li>
			</ul>
			@else
			<ul>
				<li>
					<a href="#">ホームへ</a>
				</li>
				<li>
					<a href="#">お知らせ</a>
				</li>
				<li>
					<a href="#">スケジュール</a>
				</li>
				<li>
					<a href="#">ログイン</a>
				</li>
			</ul>
			@endif
		</div>
	</div>
</header>