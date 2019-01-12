$(document).ready(function() {
$("#register").click(function() {
var name = $("#username").val();
var email = $("#email").val();
var password = $("#password").val();
var state=$("#state").val();
var phone=$("#phone").val();
if (name == '' || email == '' || password == '' || state == '' || phone == '') {
alert("Please fill all fields...!!!!!!");
}else {
$.post("register.php", {
name1: name,
email1: email,
password1: password,
state1: state,
phone1: phone
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});