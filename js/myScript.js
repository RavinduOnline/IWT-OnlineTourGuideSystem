/*var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.write(today); */

/*button enable*/
function enableButton(){
	if(document.getElementById("box").checked){
		document.getElementById("btn2").disabled=false
	}
	else{
		document.getElementById("btn2").disabled=true;
	}
}

/*Email check */
function myFunction() {
  var x = document.getElementById("myEmail").pattern;
  document.getElementById("demo").innerHTML = x;
}

function testCreditCard() {
  myCardNo = document.getElementById("CardNumber").value;
  if (checkCreditCard(myCardNo, myCardType)) {
    alert("Credit card has a valid format")
  } else {
    alert(ccErrors[ccErrorNo])
  };
}	

function myFunction() {
  var txt;
  if (confirm("All Input details submitted")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}	

