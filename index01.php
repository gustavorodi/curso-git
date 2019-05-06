<!DOCTYPE html>
<html>
<head>
	<title>FINAL</title>
</head>
<body>
	<pre>
	<?php 

		require_once'Video.php';
		require_once'Gafanhoto.php';
		require_once'Visualizacao.php';

		$v[0] = new Video("NEYMAR Mito");
 		$v[1] = new Video("Futebol");
		$g[0] = new Gafanhoto("NEYMAR","26","M","junior");
		$g[1] = new Gafanhoto("Julia","14","F","juju");
		$vis[0] = new Visualizacao($g[0],$v[0]);
		$vis[1] = new Visualizacao($g[0],$v[1]);

		$vis[0]->avaliar();
		$vis[1]->avaliarPorc(75);

		print_r($vis);
		
	 ?>
	</pre>
</body>
</html>