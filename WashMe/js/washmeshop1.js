function buatajax(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}
	if(window.ActiveXObject){
		return new ActiveXObject('Microsoft.XMLHttp');
	}
	return null;
}
function tampil_hasilsearch(){
	if(ajaxku.readyState == 4){
		data = ajaxku.responseText;
		document.getElementById('cari').innerHTML = data;
	}
}
function search_barang(cari){
	url = "search.php?search="+cari;
	url = url+"&sid="+Math.random();
	ajaxku = buatajax();
	ajaxku.onreadystatechange = tampil_hasilsearch;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}