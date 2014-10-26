<script language="javascript">
function showhide(id){
  if (document.getElementById) {
    var divid = document.getElementById(id);
    var divs = document.getElementsByClassName("contentso");
    for (var i=0;i<divs.length;i+=1){
      divs[i].style.display = 'none';
    }
    divid.style.display = "block";
  } 
  return false;
}
</script>


<?php include 'head.html' ?>


<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">

    </div>
    <ul>
      <li><a name="dashboard" onclick="showhide('dashboard')" href="#dashboard" id="targeted">dashboard</a></li>
      <li><a name="Inventory" onclick="showhide('Inventory')" href="#Inventory">Inventory</a></li>
      <li><a name="BuyCar" onclick="showhide('BuyCar')" href="#BuyCar">Buy Car</a></li>
      <li><a name="SellCar" onclick="showhide('SellCar')" href="#SellCar">Sell Car</a></li>
      <li><a name="Search" onclick="showhide('Search')" href="#Search">Search Inventory</a></li>      
      <li><a name="Settings" onclick="showhide('Settings')" href="#Settings">Settings</a></li>
    </ul> 
  </div>


  <div class="main">
    <div class="mainContent clearfix">

      <div id="dashboard" class="contentso" style="display:none;">
        <h1>Dashboard</h1>
      </div> 
      

      <div id="SellCar" class="contentso" style="display:none;">
            <?php include ('Forms/SellCar_Form.html'); ?> 
          </div> 

      <div id="Inventory" class="contentso" style="display:none;">     
        <h1>Inventory</h1>
      </div>

      <div id="Search" class="contentso" style="display:none;">
        <h1>Search</h1>
      </div>    
 

      <div id="Settings" class="contentso" style="display:none;">     
        <h1>Settings</h1>
      </div>

      <div id="BuyCar" class="contentos" style="display:none;"> 
        <?php include ('Forms/BuyCar_Form.html'); ?> 
      </div>

    



  


     






    </div>
  </div>
</div>
</div>
