function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
  
    if (username.trim() === "") {
      alert("Please enter a username");
      return false;
    }
    if (email.trim() === "") {
      alert("Please enter an email");
      return false;
    }
    if (password.trim() === "") {
      alert("Please enter a password");
      return false;
    }
    return true;
  }
  