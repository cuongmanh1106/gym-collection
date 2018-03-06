$(".alert").delay(3000).slideUp();

function check_delete()
{
	if(confirm('data will be deleted, you can not backup again\nAre you sure?')) {
		return true;
	}
	return false;
}

function check_login() {
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var conf_password = document.getElementById('conf_password');

	if(password.value != conf_password.value) {
		alert('Wrong confirm password!! please check again');
		return false;
	}
	return true;

}

function search(value,show,route) {
	// alert(value);
	jQuery.ajax({
		type: "GET",
		url: route, //"/gym-collection/admin/auth/products/search",
		data: "value=" +value,
		success: function(data,status) {
			//alert(value);
			$('#'+show).html(data);
		}

	});
	
	//alert(value);
	// var xmlhttp;

	// //Khai bai va khoi tao doi tuong Ajax
	// if(window.XMLHttpRequest) {
	// 	xmlhttp = new XMLHttpRequest();
	// } else {
	// 	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	// }

	// //2 - Trả kết quả sau khi thi hành xong 
	// xmlhttp.onreadystatechange = function() {
	// 	if(xmlhttp.readyState == 4 &&  xmlhttp.status == 200) {//xử lý hoàn thành và tìm thấy trang  
	// 		document.getElementById('show').innerHTML = xmlhttp.responseText;
	// 	}

	// }
	// // 3 - Mở kết nối đền máy chủ
	// xmlhttp.open("GET","/gym-collection/admin/auth/products/search",true);

	// // var data =  new FormData();
	// // data.append("value",value);
	// //4 - Gửi thông tin
	// xmlhttp.send();
}