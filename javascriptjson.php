<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<script>


</script>
<?php
$file = fopen("data.csv","r");
while(!feof($file))
{
$var1=fgetcsv($file);
}

for ($i=1;$i<=100;$i++)
{
$var1=fgetcsv($file);
echo ($var1[$i]["chains"]);
}

fclose($file);
?>
</body>
</html>