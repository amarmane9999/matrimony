arr=Array;
			valid=function()
			{
				var success=true;
				name=document.getElementById("uname").value;
				pass=document.getElementById("pass").value;
				if(name.length<=6 || name.length>15)
				{
					//alert("Name must be between 7 to 10 Chars");
					document.getElementById("s1").innerHTML="<font color='yellow'>Name must be between 7 to 10 Chars";
					document.getElementById("uname").focus();
					document.getElementById("uname").select();
					success=false;
				}
				/*else if (name)
				{
					arr=name.split("");
					for(i=0;i<arr.length;i++)
					{
						am=parseInt(arr[i]);
						if(isFinite(am))
						{
							//alert("Password Must Contain only Alphabets");
							document.getElementById("s1").innerHTML="<font color='yellow'>Password Must Contain only Alphabets";
							document.getElementById("uname").focus();
							document.getElementById("uname").select();
							success=false;
						}
					}
					
				}*/
				else success=false;
				num=0;
				hash=0;
				if(pass.length<=7)
				{
					alert("Password must be greater than 7");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
					success=false;
				}
				else if (pass)
				{
					arr=pass.split("");
					for(i=0;i<arr.length;i++)
					{
						am=parseInt(arr[i]);
						if(isFinite(am))
						{
							num++;
						}
						if(arr[i]=="@")
							hash++;
					}
					if(num==0){
						alert("Password Must contain atleast 1 Number");
						document.getElementById("pass").focus();
					document.getElementById("pass").select();
						success=false;}
						else success=true;
					if(hash==0 || hash>1){
						alert("Password Must contain Atleast and Atmost 1 @");
						document.getElementById("pass").focus();
					document.getElementById("pass").select();
						success=false;}
						else success=true;
				}
				return success;
			}
	var xhr;
	xhrhttpobj=function(){
		if (window.XMLHttpRequest)
			xhr = new XMLHttpRequest();
		else if (window.ActiveXObject)
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
	authuname=function()
	{
		uname=document.getElementById("uname").value;
		xhrhttpobj();
		strin=('metromony.php?uname='+uname);
		if(xhr)
		{
			xhr.open('GET',strin ,true);
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState=="4" && xhr.status=="200")
				{
					//console.log("Inside xhr");
				//	alert(xhr.responseText);
					boo1=xhr.responseText;
					if(boo1=="true"){
						document.getElementById("s1").innerHTML="<font color='yellow'>User Name Already Exist.";
						document.getElementById("uname").focus();
						document.getElementById("uname").select();
					}
					else
					{
						document.getElementById("s1").innerHTML="";
					}
				}
			}
		xhr.send();
		}
	}