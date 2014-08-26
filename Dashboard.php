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
        <div class="monitor">
          <h4>Right Now</h4>
          <div class="clearfix">
            <ul class="content">
              <li>content</li>
              <li class="post"><span class="count">179</span><a href="">posts</a></li>
              <li class="pages"><span class="count">13</span><a href="">pages</a></li>
              <li class="categories"><span class="count">21</span><a href="">categories</a></li>
              <li class="tags"><span class="count">305</span><a href="">tags</a></li>
            </ul>
            <ul class="discussions">
              <li>discussions</li>
              <li class="comments"><span class="count">353</span><a href="">comments</a></li>
              <li class="approved"><span class="count">319</span><a href="">approved</a></li>
              <li class="pending"><span class="count">0</span><a href="">pending</a></li>
              <li class="spam"><span class="count">34</span><a href="">spam</a></li>
            </ul> 
          </div>
        </div>
        <div class="quick-press">
          <h4>Quick Press</h4>
          <form action="" method="post">
            <input type="text" name="title" placeholder="Title"/>
            <input type="text" name="content" placeholder="Content"/>
            <input type="text" name="tags" placeholder="Tags"/>
            <button type="button" class="save">l</button>
            <button type="button" class="delete">m</button>
            <button type="button" class="submit" name="submit">Publish</button>
          </form>  
        </div>  
      </div> 
      <div id="posts">
        <h2 class="header">posts</h2>
      </div>
      

      <!-- BUY CAR CODE -->
      <div id="BuyCar">       
        <h1>Buy Car</h1>      
        <div class="container">
         <div class="row clearfix" > 



          <div class="col-md-6 column well" style="margin: 0% 3%"  >
            <form role="form" class="form-horizontal" method="post" action="matches/insert_newMatch.php" parsley-validate >
              <div class="form-group">
                <label for="makeInput" class="col-md-3 control-label">                 
                    <div class="newgameheight">
                      Manufacture
                    </div>                 
                </label>  
                <div class="col-md-9">
                 <input type="text" class="form-control" name="maxPlayers" autofocus parsley-required="true" parsley-minlength="1" parsley-maxlength="2" placeholder="Manufacture">
               </div>
             </div>

             <div class="form-group">
               <label for="locationInput" class="col-md-3 control-label">               
                  <div class="newgametext">
                    Model
                  </div>             
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="location" parsley-required="true" id="exampleInputPassword1" placeholder="Model" />
              </div>
            </div>

             <div class="form-group">
               <label for="locationInput" class="col-md-3 control-label">               
                  <div class="newgametext">
                    VIN Number
                  </div>             
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="location" parsley-required="true" id="exampleInputPassword1" placeholder="VIN Number" />
              </div>
            </div>

            <div class="form-group">
              <label for="zipInput" class="col-md-3 control-label">               
                  <div class="newgametext">
                    Year
                  </div>              
              </label>  
              <div class="col-md-9">
               <input type="digits" class="form-control" name="zip" parsley-required="true" parsley-minlength="5" parsley-maxlength="5" placeholder="Year">
             </div>
           </div>

             <div class="form-group">
               <label for="locationInput" class="col-md-3 control-label">               
                  <div class="newgametext">
                    Color
                  </div>             
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="Color" parsley-required="true" id="exampleInputPassword1" placeholder="Color" />
              </div>
            </div>

              <div class="form-group">
               <label for="locationInput" class="col-md-3 control-label">               
                  <div class="newgametext">
                   Price
                  </div>             
              </label>
              <div class="col-md-9">
                <input type="digits" class="form-control" name="Color" parsley-required="true" id="exampleInputPassword1" placeholder="Price" />
              </div>
            </div>


           <center>
            <div class="form-group">
              <div style="margin: 2% 0%" class="form-group">
                <div class="col-sm-12 controls">                                       
                 <input class="color green styled-button-1" type="submit" value="Continue"> 
               </div>
             </div>
           </div>           
         </center>

       </form>
     </div>

     <div class="col-md-6 column">
      <br><br>
    </center>
  </div>
 <!-- END BUY CAR CODE -->

</div>
</div>
</div>
</div>
</div>
</div>