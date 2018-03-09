function delete_cart(id,route) {
	// alert(id);
	$.ajax({
		url:route,
		type:"GET",
		cache:false,
		data:"id=" +id,
		success:function(data,status) {
			// alert(status);
			$('#newupdate').html(data);
		}
	});
}