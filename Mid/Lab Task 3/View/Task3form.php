<!DOCTYPE html>
<html>
  <head>
    <title>Donar Information</title>
    <!--
    <style> 
    h1{
      font-family:"Times New Roman", Times, serif;
      font-size: 24px;
      color:red;
    }

     table {
    margin-left: 0px;
    border: 2px solid wheat;
    background-color: white;
    margin-top: 20px;

    padding: 20px;
    margin-left: auto;
    margin-right: auto;

}

input[type="text"] {
  width: 400px;
  height: 20px;
}




    </style>

-->

<link rel="stylesheet" href="../CSS/Task3Style.css">

<script src="../JS/Task3form.js" ></script>

 




  </head>

  <body>

  <form onsubmit="return validateForm(event)">

  
    
    <table align = "center">

      <tr>
    <td colspan="2">
      <h1 align="left">Donnar Information</h1>
    </td>
  </tr>
      <tr>
        <td> First Name:</td>
        <td><input type ="text" id="fname"></td>

      </tr>

      <tr>
        <td>
          Last Name:</td>
        <td><input type ="text" id="lname"></td>
        </td>
      </tr>

      <tr>
        <td>
          Address:</td>
        <td><input type ="text" id="address"></td>
        
      </tr>

      <tr>
        <td>
          City: </td>
        <td><input type ="text" id="city"></td>
        
      </tr>

      <tr>
      <td>
        State :</td>
        <td>
        <select> 
          <option Value =" " >Select State
          <option Value =" " >Dhaka
          <option Value =" " >Khulna 
          <option Value =" " >Jamaqlpur
          <option Value =" " >Rajshahi
          <option Value =" " >Other

        </select>
      </td>
      </td>
    </tr>

    <tr>
      <td>
        Phone: </td>
      <td><input type ="text" id="phone"></td>
      </td>
    </tr>

    <tr>
      <td>
        Email: </td>
      <td><input type ="text" id="email"></td>
      </td>
    </tr>

     <tr>
      <td>
        Create  Password (min 8 characterrs) :</td>
      <td>
        <input type="password" id = "pass"></td>

      </td>
    </tr> 
    <tr>

    <tr>
      <td>
        Confirm Password :</td>
      <td>
        <input type="password" id = "confirmpass"></td>

      </td>

    </tr>

     <tr>
      <td>
       Donation Amount :</td>
        <td>
        <input type = "radio" id = "Donation Amount" name="Donation Amount" >None
       <input type = "radio" id = "Donation Amount" name="Donation Amount" >500 BDT
       <input type = "radio" id = "Donation Amount" name="Donation Amount"> 1000 BDT
       <input type = "radio" id = "Donation Amount" name="Donation Amount"> 2000 BDT
        <input type = "radio" id = "Donation Amount" name="Donation Amount"> 3000 BDT
        <input type = "radio" id = "Donation Amount" name="Donation Amount"> other
      </td>
      </td>
    </tr>

    <tr>
      <td>
        Other Amount:</td>

      <td>
        <input type ="text" id="otheramount"></td>
      </td>
    </tr>


    <tr>
      <td>
        <input type="checkbox" id = "agree" name = "agree">
         I am interested to giving on a regular basis</td>
      
    </tr>


    <tr>
    <td colspan="2">
      <h1 align="left">Additional  Information</h1>
    </td>
  </tr>


  <tr>
      <td>
        <input type="checkbox" id = "agree" name = "agree">
        I would like my gift to remain anonymous</td>
      
    </tr>

    <tr>
      <td>
        <input type="checkbox" id = "agree" name = "agree">
       My Employer offers a matching gift program </td>
      
    </tr>

    <tr>
      <td>
        <input type="checkbox" id = "agree" name = "agree">
       Please Don't send a Thank You letter </td>
      
    </tr>

     <tr>
      <td>
        Comments :</td>
        <td>
        <textarea rows="3" cols="40"></textarea></td>
      </td>
    </tr>
    
    <tr >
    <td colspan="0" style="text-align: center;">

   <input type="submit" value="Reset" >
   <input type="submit" value="Submit" >
   
   
   </td>
  </tr>
    </table>
  </form>

  

<!--
  <script>

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


  </script>
-->
   


    

  </body>
</html>