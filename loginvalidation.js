function validateform()
{
    var x=document.getElementsByTagName("input");
    var validEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(x[0].value=="")
        {
            alert("Please fill user name.");
            return false;
        }
    else if(x[1].value=="")
        {
            alert("Please enter your email address.");
            return false;
        }
    else if(validEmail.test(x[1].value)==false)
        {
            alert("Please enter valid email address.");
            return false;
        }
    else if(x[2].value="" || x[2].value.length<6)
        {
            alert("Password must be atleast 6 characters long.")
            return false;
        }
    else 
        {
            return true;
        }
}