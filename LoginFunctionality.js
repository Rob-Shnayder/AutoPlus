jQuery.noConflict();
jQuery(document).ready(function(){
  //  $("#add_err").css('display', 'none', 'important');
  
     $("#login").click(function(){  
          var username=$("#login-username").val();
          var password=$("#login-password").val();

             if(!username || !password)
             {
                document.getElementById('login-alert').style.display = 'none';
             }

          $.ajax({
           type: "POST",
           url: "UserManagement/Login.php",
           dataType: 'html',
           data: "name="+username+"&pwd="+password,
           success: function(html){    
            console.log(html) 

            if(html.trim()=='1')    
            {                                             
              window.location="dashboard.php";                    
            }    
            else   
            {
              if(!username || !password)
             {
                document.getElementById('login-alert').style.display = 'none';
             }       
             else
             {
                document.getElementById('login-alert').style.display = "block";
                document.getElementById('login-alert').innerHTML = "Invalid Username or Password";
             }
            }
           },
           beforeSend:function()
           {
            //$("#add_err").css('display', 'inline', 'important');
            //$("#add_err").html("Loading...")
           }
          });
        return false;
    });
});

function trim(str){
var str=str.replace(/^\s+|\s+$/,'');
return str;
}