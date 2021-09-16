<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Produtos</h1>

	<table>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Preço</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($produtos as $p) {
					echo "<tr>" .
						"	<td>" . $p->codigo . "</td>" .
						"	<td>" . $p->nome . "</td>" .
						"	<td>" . $p->preco . "</td>" .
						"</tr>";
				}
			?>
		</tbody>
	</table>
</body>

</html>
