let counter=2;
function isInteger(num){
	return(num^0)===num;
}

function hide1(el)
{
	if (!el.hasAttribute('displayOld'))
	{
		el.setAttribute("displayOld", el.style.display)
	}
	el.style.display="none"
}
function show1(el){
	var old=el.getAttribute("displayOld");
	el.style.display=old||"";
}
hide1(qaw);
document.getElementById("sed").addEventListener("click", function()
	{
		let res=counter/2;
		if(isInteger(res))
		{
			show1(qaw);
			hide1(uas);
	}
else{
hide1(qaw);
	show1(uas);}
	counter++;
});
