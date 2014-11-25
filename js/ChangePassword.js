function checkCurrentPassword()
{
	var current=$("#oldPass").val();	

	if(!current)
	{
		document.getElementById('login-alert').style.display = 'block';
		document.getElementById('login-alert').innerHTML = "Please enter a current password.";
		document.getElementById("submitButton").disabled = true; 
	}

	$.ajax({
		type: "POST",
		url: "UserManagement/checkCurrentPassword.php",
		dataType: 'html',
		data: "pass="+current,
		success: function(html){    
			//console.log(html) 

			if(html.trim()=='1')    
			{                                             
				document.getElementById('login-alert').style.display = 'none'; 
				document.getElementById("submitButton").disabled = false; 
			}  
			else {

				document.getElementById('login-alert').style.display = 'block';
				document.getElementById('login-alert').innerHTML = "Invalid current password.";
				document.getElementById("submitButton").disabled = true; 
			}
		}
	});

}






