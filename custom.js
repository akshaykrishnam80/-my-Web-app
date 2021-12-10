
const pathname = location.pathname;

var is_current = JSON.parse(localStorage.getItem("currentUser"));


function add_user() {
  var get_users = localStorage.getItem("users");
  var is_get_user = (get_users ? JSON.parse(get_users) : []);

  console.log(is_get_user)

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;


  /* letting user  */

  if (myInput.value.length >= 8 && myInput.value.length <= 12) {

    var bucket = {
      email: email,
      password: password,
    };


    var merge_data = [...is_get_user, bucket];



    localStorage.setItem("users", JSON.stringify(merge_data));

    document.getElementById("outcome").innerHTML = "<b>You have Registered Successfully</b>";
    //If user successfully registered than redirect to the login page
    setTimeout(function () { window.location.href = 'http://localhost/gameapp/login' }, 2000)
  }

}

if (pathname.includes("gameapp/login") || pathname.includes("gameapp/signup")) {

  var myInput = document.getElementById("password");

  var length = document.getElementById("length");

  // if the user click password it will show
  myInput.onfocus = function () {
    document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside from password box it will be close and hidden
  myInput.onblur = function () {
    document.getElementById("message").style.display = "none";
  }

  // if the user going to write inside the box these code will validate with inputs.
  myInput.onkeyup = function () {

    // Validate size of password
    if (myInput.value.length >= 8 && myInput.value.length <= 12) {
      length.classList.remove("wrong");
      length.classList.add("right");
      document.getElementById('signupBtn').disabled = false;

    }

    else {
      length.classList.remove("right");
      length.classList.add("wrong");
      document.getElementById('signupBtn').disabled = true;

    }
  }

}
 //This is a redirect functionality

if (is_current == null && pathname.includes("gameapp/home") ) {
  window.location.href = 'http://localhost/gameapp/signup';
}

//This is a login functionlity
function login_user() {

  var data = [];

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  var users_data = JSON.parse(localStorage.getItem('users'));
  var resp = users_data.find(params => params.email == email && params.password == password);


  if (email == resp.email && password == resp.password) {
    localStorage.setItem("currentUser", JSON.stringify(resp));


    setTimeout(function () { window.location.href = 'http://localhost/gameapp/home' }, 3000)



  }


}




if (is_current != null) {
  document.getElementById("logout-nav").classList.add('d-block');
  document.getElementById("login-nav").classList.add('d-none');

} else {
  document.getElementById("logout-nav").classList.add('d-none');
  document.getElementById("login-nav").classList.add('d-block');

}

//Logout Function
function logout() {
  var myItem = localStorage.getItem('users');
  localStorage.clear();
  localStorage.setItem('users', myItem);
  setTimeout(function () { window.location.href = 'http://localhost/gameapp/home' }, 3000)

}