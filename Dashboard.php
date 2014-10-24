<script language="javascript">
submitForms = function(){
  document.getElementById("carForm").submit();
  document.getElementById("customerForm").submit();
}
</script>


<?php include 'head.html' ?>
<?php include 'nav.html' ?>


<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">

    </div>
    <ul>
      <li><a href="#dashboard" id="targeted">dashboard</a></li>
      <li><a href="#Inventory">Inventory</a></li>
      <li><a href="#BuyCar">Buy Car</a></li>
      <li><a href="#SellCar">Sell Car</a></li>
      <li><a href="#Search">Search Inventory</a></li>
      <li><a href="#AccountManagement">Account Management</a></li>
      <li><a href="#Settings">settings</a></li>
    </ul> 
  </div>


  <div class="main">

    <div class="mainContent clearfix">
      
      <div id="dashboard">
        <h1>Dashboard</h1>
      </div> 


      <div id="BuyCar">     
        <?php include ('Forms/BuyCar_Form.html'); ?> 
      </div>



    </div>
  </div>
</div>
</div>
