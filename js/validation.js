var numArr=[0,1,2,3,4,5,6,7,8,9];
function getElement(id){
	return document.getElementById(id);
}

function validate(){
	//refresh();
	var allSet=true;
	var name = getElement("name");
	var email = getElement("email");
	var userName = getElement("userName");
	var password = getElement("password");
	var phone = getElement("phone");
	var err_name = getElement("err_name");
	var err_email = getElement("err_email");
	var err_userName = getElement("err_userName");
	var err_password = getElement("err_password");
	var err_phone = getElement("err_phone");
	
	
	if(name.value == ""){
		allSet=false;
		err_name.innerHTML = "Username Required";
		//e_name.focus();
		//return !hasErr;
	}
	
	else if(1)
	{
		for(var i=0;i<name.value.length;i++)
		{
			var count=0;
			for(var j=0;j<numArr.length;j++)
			{
				if(name.value[i]==numArr[j])
				{
					count++;
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_name.innerHTML = "Numbers are not allowed";
		}
		else{err_name.innerHTML = "";}
	}
	
	
	if(email.value == ""){
		allSet=false;
		err_email.innerHTML = "Email Required";
		//e_email.focus();
		//return !hasErr;
	}
	else if(1)
	{
		/* var posAt = email.value.search("@");
		var check=false;
		
		if(posAt && posAt<email.value.length-1)
		{
			var posDot = email.value.indexOf(".",posAt+1);
			if(!posDot)
			{
				allSet=false;
				check=true;
				err_email.innerHTML = "Email formate not matched";
			}
				
		}
		else 
		{
			allSet=false;
			check=true;
			err_email.innerHTML = "Email formate not matched";
		}
		if(!check)
		{err_email.innerHTML = "";} */
	
		var posAt = -1;
		var posDot = -1;
		for(var i=0;i<email.value.length;i++)
		{
			if(email.value[i]=="@")
			{
				posAt = i;
			}
			if(email.value[i]==".")
			{
				posDot = i;
			}
		}
		if(posAt !=-1 && posDot>posAt)
		{
			err_email.innerHTML = "";
		}
		else
		{
			allSet=false;
			//check=true;
			err_email.innerHTML = "Email formate not matched";
		}
	}
	
	if(userName.value == ""){
		allSet=false;
		err_userName.innerHTML = "Username Required";
		//e_username.focus();
		//return !hasErr;
	}
	else if(1)
	{
		/* if(! userName.value.indexOf(" "))
		{
			if(userName.value.length <6)
			{
				allSet=false;
				err_userName.innerHTML = "length must be atleast 6";
			}
		}
		else
		{
			allSet=false;
			err_userName.innerHTML = "space are not allowed";
		} */
		
		var count=0;
		for(var i=0;i<userName.value.length;i++)
		{
			if(userName.value[i]==" ")
				count++;
		}
		if(userName.value.length >=6 && count ==0)
		{
			err_userName.innerHTML = "";
		}
		else
		{
			allSet=false;
			err_userName.innerHTML = "space are not allowed and length atleast 6";
		}
	}
	
	if(password.value == "")
	{
		allSet=false;
		err_password.innerHTML = "password required";
	}
	else if(password.value.length <8 )
	{
		allSet=false;
		err_password.innerHTML = "password required atleast 8 character";
	}
	else{err_password.innerHTML = "";}
	
	if(phone.value=="")
	{
		allSet=false;
		err_phone.innerHTML = "phone number required";
	}
	else if(1)
	{
		var num=0;
		for(var i=0;i<phone.value.length;i++)
		{
			for(var j=0;j<numArr.length;j++)
			{
				if(phone.value[i]==numArr[j])
				{
					num++;
				}
			}
		}
		if(num != phone.value.length)
		{
			//document.write(num);
			//document.write(phone.value.length);
			allSet=false;
			err_phone.innerHTML = "phone number required only numeric length atleast 11";
		}
		else if(phone.value.length<11)
		{
			allSet=false;
			err_phone.innerHTML = "phone number required only numeric length atleast 11";
		}
		else{err_phone.innerHTML = "";}
	}
	if(allSet)
	{
		return true;
	}
	else
	{
		return false;
	}

}