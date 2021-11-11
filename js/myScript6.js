var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.write(today);

var counter =1;
setInterval(function(){
	document.getElementById('radio' + counter).checked = true;
	counter++;
	if(counter >4){
		counter = 1;
	}
},5000 );

