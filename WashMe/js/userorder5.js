function saveUser(id,name){
	location.href = "../php/userorder.php?id="+id+"&name="+name;
}
function save_User(id,name,nama,alamat){
	location.href = "../php/userorder1.php?id="+id+"&name="+name+"&nama="+nama+"&alamat="+alamat;
}
function save_Order(id){
	location.href = "../php/showorder.php?id="+id;
}
function totalOrder(){
	var harga = document.getElementById('harga').value;
	var jlh = document.getElementById('jlh_kg').value;
	var total = harga * jlh;

	document.getElementById('total').value = total;
}