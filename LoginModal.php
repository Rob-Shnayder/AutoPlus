<?php include 'head.html' ?>
<script src="LoginFunctionality.js"></script>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">       
    <div class="modal-body center" style="margin-left: 18%; width: 70%; position: relative; top:5%">                
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

                <div class="panel" >
                    <div class="panel-heading">
                        <h3>Login</h3>                        
                    </div>     

                    <div class="panel-body" >
                      <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                      <form id="loginform" class="form-horizontal" role="form" method="post" action="./" parsley-validate>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username ">                                        
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                              </label>
                          </div>
                      </div>


                      <div style="margin-top:10px" class="form-group">
                         <div class="col-md-offset-3 col-md-9">
                          <input class="color green styled-button-1" type="submit" value="Login" id="login"> 
                          <div class="divider"></div>
                          <button type="button" class="nav styled-button-1" data-dismiss="modal">Cancel</button>                          
                         </div>
                     </div>


                  <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Don't have an account! 
                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>    

        </div>      
    </form>                  
    </div>  
</div>


<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel">

        <div class="panel-heading">
            <h3 >Sign Up</h3>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
        </div> 

        <div class="panel-body" >
            <form accept-charset="UTF-8" id="signupform" class="form-horizontal" role="form" method="post" action="UserManagement/register.php" >

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>



                <div class="form-group">
                    <label for="username" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                         <div id="error">
                                </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div> 

                <div class="form-group">                                                                        
                    <div class="col-md-offset-4 col-md-9">
                        <button id="btn-signup" type="submit" class="color green styled-button-1"><i class="icon-hand-right"></i> &nbsp Sign Up</button>                                      
                    </div>
                </div>

                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group"></div>
            </form>
        </div>
    </div>
</div> 



</div>
</div>
</div>
