<!DOCTYPE html>
<html lang="en">


<head>
<?php include 'head.html' ?>
<?php include 'nav.html' ?>
</head>

<body>
    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Auto+</h1>
                        <h4>Innovative Automotive Management.</h4>
                        <hr class="intro-divider">
                        <?php 

                        echo "<ul class\"list-inline intro-social-buttons\" style=\"margin-right: 3%;\">";
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                        {                            
                            echo "<a href=\"dashboard.php#dashboard\" class=\"btn btn-default btn-lg\"><span class=\"network-name\">Dashboard</span></a>";   
                        } 
                        else 
                        {
                            echo "<a href=\"#loginModal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg\"><span class=\"network-name\">Login </span></a>";
                        }
                        echo "</ul>";
                        ?>                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2  class="section-heading">Automotive Inventory made easy.</h2>   
                    <h4  class="section-heading">- One Step Setup</h4>   
                    <h4  class="section-heading">- Inventory Management</h4>    
                    <h4  class="section-heading">- Client Management</h4>                 
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>
        </div>
    </div>


 
   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Robert Shnayder. Taylor Brockhoeft.</p>
                </div>
            </div>
        </div>
    </footer>


</body>

<?php include 'loginModal.php' ?>



</html>
