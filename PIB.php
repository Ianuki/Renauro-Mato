<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
            select c.Code, c.Name, c.GNP
            from country as c
            order by c.GNP desc;
		";

		return executaSelect($sql);
	}

	$total = 0;
?>

<h1>PIB</h1>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Codigo</th>
            <th scope="col">PIP</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Code']?></td>
                <td><?=$linha['GNP']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
