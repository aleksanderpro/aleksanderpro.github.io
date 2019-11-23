<?php
if($_GET['site'] == 1)
{
include "ToJestIndex.html";
} else {
echo "1: nie";
echo "<br>";
}
?>
<?php
if($_GET['site'] == 2)
{
header('Location: adminlogin.html');
} else {
echo "2: nie";
echo "<br>";
}
?>
<?php
echo "Powered by Latający Ryś";
?>
