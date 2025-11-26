<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
			select p.Code, p.Name, l.Language
            from country as p, countryLanguage as l
            where l.CountryCode = p.Code and l.IsOfficial = 't';
		";

		return executaSelect($sql);
	}

	$total = 0;
?>

<h1>Dados dos Países</h1>

<script>
	document.getElementById('selecaoIdioma').addEventListener('change', function() {
		location.href="PaisesPorIdioma.php?Language="+this.value;
	});
</script>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Codigo</th>
            <th scope="col">Lingua</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Code']?></td>
                <td><?=$linha['Language']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
