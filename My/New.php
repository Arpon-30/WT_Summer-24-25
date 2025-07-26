<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>University Management System - Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>University Management System</h2>
    <form action="#" method="post">
      <label for="studentName">Student Name:</label>
      <input type="text" id="studentName" name="studentName" required>

      <label for="studentId">Student ID:</label>
      <input type="text" id="studentId" name="studentId" required>

      <label for="department">Department:</label>
      <select id="department" name="department" required>
        <option value="">--Select Department--</option>
        <option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="bba">BBA</option>
        <option value="eng">English</option>
      </select>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="course">Course:</label>
      <input type="text" id="course" name="course">

      <label for="role">Role:</label>
      <select id="role" name="role">
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
