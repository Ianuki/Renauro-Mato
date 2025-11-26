<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
            select p.Code, p.Name, p.SurfaceArea
            from country as p
            order by p.SurfaceArea desc;
		";

		return executaSelect($sql);
	}

	$total = 0;
?>

<h1>Area de Superfície</h1>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Código</th>
            <th scope="col">Área</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Code']?></td>
                <td><?=$linha['SurfaceArea']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
