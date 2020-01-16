function request_laundry(username,date){
	var req = document.getElementById('req').value;
	location.href = "../php/request_laundry.php?username="+username+"&date="+date+"&req="+req+"&submit=Submit";
}
