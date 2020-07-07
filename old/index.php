<?php
include('header.php');
$ord = array('viljen','underlagt','tiden','er');
shuffle($ord);
echo $ord[0]," ",$ord[1]," ",$ord[2]," ",$ord[3];
?>

<!DOCTYPE html>
<html lang="nb">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=latin1" />
	<title>mariusei at matnat</title>
	<link rel="stylesheet" type="text/css" href=indrefilet.css" />
</head>
<style type="text/css">
	@import url("indrefilet.css");
</style>

<body>

<header><hgroup>
	<h1>kvadratrot</h1>
	<h2>[firkant, røtter]</h2>
</hgroup></header>
<article>
	<h1>wavelet</h1><time datetime="2011-05-08">April 2011</time>
	<p>For LaTex-koder: se <a href="latex.php">siden om LaTex, med bildekode, tekststiler, full-side-pakke, pakken <rm>norplain.sty</rm> til Bibtex, og mal for rapport</a>.</p>
</article>

<footer>
<p>kontaktinfo <a href="kontakt">her</a></p>
</footer>

</body>
</html>


<?php ?> 
