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