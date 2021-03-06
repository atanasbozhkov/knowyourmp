<?php
/* @var $this GameController */
?>

<div class="jumbotron">
	<h1>Познавате ли депутатите?</h1>
	<p>Познайте от коя партия е депутатът на снимката</p>
	<?php if ($gamesess): ?>
		<p><a class="btn btn-lg btn-success" href="/game/start?gameid=1">Започнете нова игра</a></p>
		<p>или</p>
		<p><a class="btn btn-lg btn-primary" href="/game/play">Продължете играта</a></p>
	<?php else: ?>
		<p><a class="btn btn-lg btn-success" href="/game/start?gameid=1">Нова игра</a></p>
	<?php endif; ?>

</div>

<div class="row">
	<div class="col-md-4">
		<h2>За играта</h2>
		<p>Познавате ли хората, които ви управляват? Рядко виждаме лицата на повечето от тях извън предизборните кампании. А е добре да ги познаваме. Най-малкото за да можем да отидем при тях докато вечерят спокойно и да им поискаме обяснение. Или да им стиснем ръката. Което от двете са си заслужили.</p>
	</div>

	<div class="col-md-4">
		<h2>Как да играя</h2>

		<p>Тази игра ви показва лицата и имената на депутатите и условието й е просто: да познаете от коя партия е всеки народен представител. Минете през всички 240 депутати или докъдето ви стигнат силите. След това се запишете в класацията или се върнете да си доиграете.</p>
	</div>

	<div class="col-md-4">
		<h2>Автори и съдържание</h2>

		<p>Тази игра е разработена от <a href="https://github.com/hambai">Камен</a> в свободното му време и всеки е добре дошъл да се включи в доработката й. Кодът е отворен и <a href="https://github.com/obshtestvo/knowyourmp">достъпен в Джитхюб</a>. Източник на снимките и информацията за депутатите е <a href="http://www.parliament.bg/">parliament.bg</a>.</p>
	</div>
</div>
