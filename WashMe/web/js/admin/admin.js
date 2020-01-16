function del_data(id){
	location.href = "../../php/admin/admin_user_php.php?submit=Delete&id="+id;
}

function del_req(id){
	location.href = "../../php/admin/admin_request.php?id="+id+"&submit=Reject";
}

function del_req1(id){
	location.href = "../../php/admin/admin_request_make_laundry.php?id="+id+"&submit=Send";
}
