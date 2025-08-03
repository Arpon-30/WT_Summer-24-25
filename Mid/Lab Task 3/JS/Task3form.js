  

    function validateForm(event){
     
       
      

        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var address = document.getElementById("address").value;
        var city = document.getElementById("city").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value; 
        var pass = document.getElementById("pass").value;
        var confirmpass = document.getElementById("confirmpass").value;
        var otheramount = document.getElementById("otheramount").value;

         if (fname === "") {
        alert("Please enter your first name.");
        return false;
      }

      if (lname === "") {
        alert("Please enter your last name.");
        return false;
      }
      if (address === "") {
        alert("Please enter your address.");
        return false;
      }
      if (city === "") {
        alert("Please enter your city.");
        return false;
      }
      if (phone === "") {
        alert("Please enter your phone number.");
        return false;
      }
      if (email === "") {
        alert("Please enter your email.");
        return false;
      }
      if (pass === "") {
        alert("Please create a password.");
        return false;
      }
      if (confirmpass === "") {
        alert("Please confirm your password.");
        return false;
      }
      if (pass !== confirmpass) {
        alert("Passwords do not match.");
        return false;
      }
      if (otheramount === "") {
        alert("Please enter the other amount.");
        return false;
      }

       if (!agree) {
        alert("You must agree to the terms and conditions.");
        return false;
      }

      alert("Your info is successfully submitted!");
      return true;




    }


