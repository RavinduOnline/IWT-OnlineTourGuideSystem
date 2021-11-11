var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.write(today);




function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Passwords are mismatching");
		return false;
	}
	else{
		alert("Passwords are matched");
		return true;
	}	
}

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btnl").disabled=false;
	}
	else{
		document.getElementById("btnl").disabled=true;
	}
}
