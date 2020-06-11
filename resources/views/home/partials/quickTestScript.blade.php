<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
function addCode()
{
	var ltr=document.getElementById('letter').value;
    var num=document.getElementById('number').value;    
	var ansDiv = document.getElementById("text-answer"); 
	var textnode = document.createTextNode(ltr);
	if(num > 0){		
		document.getElementById("text-answer").innerHTML = "";
		for(var i=1; i<=num; i++){
			document.getElementById("text-answer").innerHTML += ltr.repeat(i)+"<br>"; 
		}			
	} else if(num < 0){
		num = Math.abs(num);
		document.getElementById("text-answer").innerHTML = "";		
		for(var i=num; i>=0; i--){
			document.getElementById("text-answer").innerHTML += ltr.repeat(i)+"<br>"; 
		}	
	}	                      
}
</script>