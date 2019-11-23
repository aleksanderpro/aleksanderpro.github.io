<?php
if($_POST['site'] == 1)
{
include "ToJestIndex.html";
} else {
echo "1: nie";
echo "<br>";
}
?>
<?php
if($_POST['site'] == 2)
{
header('Location: adminlogin.html');
} else {
echo "2: nie";
echo "<br>";
}
?>

