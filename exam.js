function examvalid()
{
	var x=document.getElementsByTagName("Input");
	if(x[0].value=="")
	{
		alert ("fill up name");
		return false;
	}
	else
	{
		return true;
	}
}