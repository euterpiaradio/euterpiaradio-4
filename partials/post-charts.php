<?php
get_header();
?>
<section id="chart">
	<header>Le Top 25 Euterpia Radio</header>
	<article id="weekly-chart">
		<header><?php the_title(); ?></header>
		<div class="content"><?php the_content(); ?></div>
	</article>
	<article id="explications">
		<header>Comment sont calculés les scores ?</header>
		<p>Il faut différencier deux valeurs : le score brut, et le score effectif. Ces deux scores sont calculés toutes les semaines. C’est le score effectif qui est pris en compte pour établir le classement hebdomadaire.</p>
		<ul>
			<li>Le score brut est la somme du nombre de téléchargement multiplié par deux, du nombre d’écoutes, de mise en liste d’écoute, de mise en favoris, du nombre de "j’aime" multiplié par deux ; ce à quoi est soustrait le nombre de "je n’aime pas" multiplié par deux.</li>
			<li>Le score effectif est égal à quatre fois le score brut de la semaine en cours, trois fois le score brut de la semaine précédente, deux fois le score brut de deux semaines avant, et une fois le score brut trois semaines auparavant.</li>
		</ul>
		<p>Dans le calcul du score brut, le nombre de téléchargement, le nombre de "j’aime" et le nombre de "je n’aime pas" sont multipliés par deux car, à mon avis, ils représentent des actions fortes, ayant plus d’impact que les autres.</p>
		<p>Le calcul du score effectif permet de lisser les résultats, en faisant durer les effets sur quatre semaines, tout en donnant une forte priorité à la semaine en cours.</p>
		<p>Les titres présents dans le classement proviennent, pour l’heure, uniquement de Jamendo. Les données sont récupérées via des appels à l’API fournie par le site. Si dans l’avenir d’autres sites proposent une API permettant d’obtenir des informations similaires, leurs titres pourront être intégrés dans le classement.</p>
	</article>
	<article id="avertissement">
		<header>Avertissement</header>
		<p>Ce classement est établi par mes soins, et n’est que ma façon personnelle d’interpréter des données disponibles publiquement. Il ne s’agit en aucun cas d’un quelconque classement officiel, et ne représente pas un point de vue approuvé par les fournisseurs des services utilisés.</p>
	</article>
</section>
<?php
get_footer();
