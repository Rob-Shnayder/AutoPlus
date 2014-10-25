$(document).ready(function(){
            $("#manufacture").keyup(function(e){
                 $("#error").html(""); 
            var manufacture=$("#manufacture").val();
 
              $.ajax({
                    type:"post",
                    url:"UserManagement/DynamicDropDown.php",
                    data:"make="+manufacture,
                    dataType: 'html',
                        success:function(html){
                        alert(output);
                    }
                 });
            });
 
         });