<?php include_once "b.php" ?>
<html>
<head>
<title>Email Verification</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bgrn">
<center><h1 id="titleml">Email Verification Online</h1></center>

</div>

<div class="cntr">
<form method="get">

<input type="email" id="textboxeml" name="naam" required="required" placeholder="Email id">
<input type="submit" id="su" name="su" return="false" value="Validate">


</form>
</div>
<div class="disoutput">
<?php
if (isset($_GET['su'])){

$naam = $_GET['naam'];

$g = new GetData;
$g->dat($naam); 
}
?>

</div>

</body>
</html>
