<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
            select p.Code, p.Name, c.Name as Capital
            from country as p, city as c
            where p.Capital = c.ID;
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

<h1>Capitais</h1>

<script>
	document.getElementById('selecaoIdioma').addEventListener('change', function() {
		location.href="PaisesPorIdioma.php?Language="+this.value;
	});
</script>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Capital</th>
			<th scope="col">País</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Capital']?></td>
				<td><?=$linha['Name']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
