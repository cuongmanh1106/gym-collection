function delete_cart(id,route) {
	$.ajax({
		url:route,
		type:'GET',
		cache:false,
		data:{"id":id},
		success:function(data,status) {
			window.localtion = "{{ route('cart.checkout') }}";
		}
	});
}