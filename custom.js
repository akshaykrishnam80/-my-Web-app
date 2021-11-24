function add_user() {
  var get_users = localStorage.getItem("users");

  var data = [];

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;


  var bucket = {
    email: email,
    password: password,
  };

  data.push(bucket);

  localStorage.setItem("users", JSON.stringify(data));

}

function login_user() {

  var data = [];

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

}