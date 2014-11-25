<script language="javascript">
function showhide(id){
  if (document.getElementById) {
    var divid = document.getElementById(id);
    var checkDv = document.getElementsByClassName("contentso");
    for (var i=0;i<checkDv.length;i+=1){
      checkDv[i].style.display = 'none';
    }
    divid.style.display = "block";
  } 
  return false;
}
</script>


<?php include 'head.html' ?>
<?php include 'nav.html' ?>


<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      
    </div>
    <ul>
      <li><a name="dashboard" onclick="showhide('dashboard')" href="#dashboard">dashboard</a></li>
      <li><a name="BuyCar" onclick="showhide('BuyCar')" href="#BuyCar">Buy Car</a></li>
      <li><a name="SellCar" onclick="showhide('SellCar')" href="#SellCar">Sell Car</a></li>
      <li><a name="Search" onclick="showhide('Search')" href="#Search">Search Inventory</a></li>         
      <li><a name="Inventory" onclick="showhide('CarQuiz')" href="#CarQuiz">Car Quiz</a></li> 
      <li><a name="Settings" onclick="showhide('Settings')" href="#Settings">Account Management</a></li>
    </ul> 
  </div>


  <div class="main">
    <div class="mainContent clearfix">
      
      <?php 
       require_once 'UserManagement/sqlConfig.php';
       ?>
       <div id="fake" class="contentso" style="display:block;">       
      </div> 

      <div id="dashboard" class="contentso" style="display:block;">
        <?php include ('Forms/Test_Form.html'); ?> 
      </div> 
      
      <div id="BuyCar" class="contentos" style="display:none;"> 
        <?php include ('Forms/BuyCar_Form.html'); ?> 
      </div>

      <div id="SellCar" class="contentso" style="display:none;">
            <?php include ('Forms/SellCar_Form.html'); ?> 
          </div> 
      <div id="Search" class="contentso" style="display:none;">
        <?php include ('Forms/Search_Form.html'); ?>        
      </div>     


      <div id="CarQuiz" class="contentso" style="display:none;">   
        <?php include ('Forms/CarQuiz_Form.html'); ?>
      </div>

      <div id="Settings" class="contentso" style="display:none;">     
        <?php include ('Forms/ChangePassword.html'); ?>
      </div>

    </div>
  </div>
</div>
