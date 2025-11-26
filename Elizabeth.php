<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
			select Continent, Name, HeadOfState
			from country 
			where HeadOfState =  'Elisabeth II'
		";

		return executaSelect($sql);
	}

	if(array_key_exists("Language", $_GET))
	{
		$Language = $_GET["Language"];
	}
	else
	{
		$Language = "Portuguese";
	}

	$total = 0;
?>

<h1>Países que tem Elisabeth II como chefe de estado</h1>

<script>
	document.getElementById('selecaoIdioma').addEventListener('change', function() {
		location.href="PaisesPorIdioma.php?Language="+this.value;
	});
</script>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Continente</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Continent']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
