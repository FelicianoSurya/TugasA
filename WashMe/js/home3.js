function requestLaundry(username,date){
	var req = document.getElementById('req').value;
	var owner = document.getElementById('owner').value;
	var laundryname = document.getElementById('laundryname').value;
	var alamat = document.getElementById('alamat').value;
	var kota = document.getElementById('kota').value;
	var nohp = document.getElementById('nohp').value;
	location.href = "../php/requestLaundry.php?username="+username+"&date="+date+"&req="+req+"&owner="+owner+"&laundryname="+laundryname+"&alamat="+alamat+"&kota="+kota+"&nohp="+nohp+"&submit=Submit";
}
function requestDriver(username,date){
	var req1 = document.getElementById('req1').value;
	var nama = document.getElementById('nama').value;
	var alamat1 = document.getElementById('alamat1').value;
	var nohp1 = document.getElementById('nohp1').value;
	location.href = "../php/requestDriver.php?username="+username+"&date="+date+"&req1="+req1+"&nama="+nama+"&alamat1="+alamat1+"&nohp1="+nohp1+"&submit=Submit";
}
function del_req(username){
	location.href = "../../php/deleteReq.php?username="+username+"&submit=Delete";
}
function del_req1(username){
	location.href = "../../php/deleteReq1.php?username="+username+"&submit=Delete";
}