<?php

	include 'lib/app.php';

	function elizabeth() {
		$sql = "
            select c.Code, c.Name, c.LifeExpectancy
            from country as c
            where c.LifeExpectancy is not null
            order by c.LifeExpectancy;
		";

		return executaSelect($sql);
	}

	$total = 0;
?>

<h1>Expectativa de Vida</h1>

<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Codigo</th>
            <th scope="col">Expectativa de Vida</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(elizabeth() as $linha) { $total++; ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Code']?></td>
                <td><?=$linha['LifeExpectancy']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

<p>Total de Países: <?=$total?></p>
