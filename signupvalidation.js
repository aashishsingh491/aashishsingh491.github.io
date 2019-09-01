function validateform() {
    var x = document.getElementsByTagName("input");
    var email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var pass = /^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[\W]).*$/

    if (x[0].value==null || x[0].value=="") 
    {
        alert("Please fill first name!");
        return false;
    } 
    else if(!isNaN(x[0].value))
        {
            alert("First name cannot be numeric!")
            return false;
        }
    if (x[1].value==null || x[1].value=="") 
    {
        alert("Please fill last name!");
        return false;
    } 
    else if(!isNaN(x[1].value))
        {
            alert("Last name cannot be numeric!")
            return false;
        }
    else if((x[2].checked==false) && (x[3].checked==false) && (x[4].checked==false))
        {
            alert("Please choose your gender!");
            return false;
        }
    else if(x[5].value==null || x[5].value=="")
        {
            alert("Please enter your email address!");
            return false;
        }
    else if(email.test(x[5].value)==false)
        {
            alert("Please fill valid email!");
            return false;
        }
    else if(x[6].value==null || x[6].value=="")
        {
            alert("Please fill the password!");
            return false;
        }
    else if(pass.test(x[6].value)==false)
        {
            alert("Please fill valid password of atleast 8 characters long!");
            return false;
        }
    else if(x[7].value==null || x[7].value=="")
        {
            alert("please fill the confirm password!");
            return false;
        }
    else if(pass.test(x[7].value)==false)
        {
            alert("Please fill valid confirm password of atleast 8 characters long!");
            return false;
        }
    else if(x[7].value!=x[6].value)
        {
            alert("Confirm password not matching!");
            return false;
        }
    else if(x[8].value==null || x[8].value=="")
        {
            alert("Please fill date-of-birth!");
            return false;
        }
    else if(x[9].value==null || x[9].value=="")
        {
            alert("Please fill contact number!");
            return false;
        }
    else if(x[9].value.length!=10)
        {
            alert("Contact number must be of 10 digits!");
            return false;
        }
    else if(x[10].value==null || x[10].value=="")
        {
            alert("Please  fill the address!");
            return false;
        }
    else
        {
            alert("Data submitted successfully,now you can explore your Destinations!!")
        return true;
        }
}


