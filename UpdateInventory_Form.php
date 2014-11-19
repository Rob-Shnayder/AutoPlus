<?php include 'head.html' ?>
<?php include 'nav.html' ?>

   

<?php
require_once 'UserManagement/sqlConfig.php';

$getVIN = $_GET['VIN'];
$Query1="SELECT * FROM Car WHERE VIN = '$getVIN'";

$Manufacture = "";
   $Model ="";
   $VIN = "";
   $Color = ""; 
   $Year = "";

$res = $con->query("$Query1");
while($row = mysqli_fetch_array($res))
{
   $Manufacture = $row['Make'];    
   $Model = $row['Model']; 
   $VIN = $row['VIN']; 
   $Color = $row['Color'];  
   $Year = $row['Year'];
}


echo "<div class=\"container\" style=\"margin-top:3%;\">\n"; 
echo " <div class=\"row clearfix\"> \n"; 
echo "  <div class=\"main\" style=\"height:50%;\">\n"; 
echo "    <h2>Update Inventory</h2>\n"; 
echo "  <form role=\"form\" class=\"form-horizontal\" method=\"post\" id=\"carForm\" action=\"UserManagement/BuyCar.php\" parsley-validate >\n"; 
echo "    <div class=\"col-md-6 column well\"  id=\"Form1\"  style=\"margin-left: 25%;\">    \n"; 
echo " \n"; 
echo "<div class=\"form-group\">\n"; 
echo "   <label for=\"vinNumber\" class=\"col-md-3 control-label\">               \n"; 
echo "    <div class=\"newgametext\">\n"; 
echo "      Manufacture\n"; 
echo "    </div>             \n"; 
echo "  </label>\n"; 
echo "  <div class=\"col-md-9\">\n"; 
echo "    <input type=\"text\" id=\"vin\" class=\"form-control\" value=$Manufacture name=\"vinNumber\" parsley-required=\"true\" />\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo " <div class=\"form-group\">\n"; 
echo "   <label for=\"vinNumber\" class=\"col-md-3 control-label\">               \n"; 
echo "    <div class=\"newgametext\">\n"; 
echo "      Model\n"; 
echo "    </div>             \n"; 
echo "  </label>\n"; 
echo "  <div class=\"col-md-9\">\n"; 
echo "    <input type=\"text\" id=\"vin\" class=\"form-control\" value=$Model name=\"vinNumber\" parsley-required=\"true\" />\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo " \n"; 
echo "  <div class=\"form-group\">\n"; 
echo "   <label for=\"vinNumber\" class=\"col-md-3 control-label\">               \n"; 
echo "    <div class=\"newgametext\">\n"; 
echo "      VIN Number\n"; 
echo "    </div>             \n"; 
echo "  </label>\n"; 
echo "  <div class=\"col-md-9\">\n"; 
echo "    <input type=\"text\" id=\"vin\" class=\"form-control\" value=$VIN name=\"vinNumber\" parsley-required=\"true\" />\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label for=\"year\" class=\"col-md-3 control-label\">               \n"; 
echo "    <div class=\"newgametext\">\n"; 
echo "      Year\n"; 
echo "    </div>              \n"; 
echo "  </label>  \n"; 
echo "  <div class=\"col-md-9\">\n"; 
echo "   <input type=\"digits\" id=\"year\" class=\"form-control\" value=$Year name=\"year\" parsley-required=\"true\" >\n"; 
echo " </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<div class=\"form-group\">\n"; 
echo " <label for=\"color\" class=\"col-md-3 control-label\">               \n"; 
echo "  <div class=\"newgametext\">\n"; 
echo "    Color\n"; 
echo "  </div>             \n"; 
echo "</label>\n"; 
echo "<div class=\"col-md-9\">\n"; 
echo "  <input type=\"text\" id=\"color\" class=\"form-control\" value=$Color name=\"color\" />\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "\n"; 
echo "<div class=\"form-group\">\n"; 
echo "<input class=\"color green styled-button-1\" type=\"submit\" value=\"Update Record\">\n";
echo "</div>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "\n"; 
echo "</form>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n";
?>