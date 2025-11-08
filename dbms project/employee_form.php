<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Record Form</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
    }

    label {
      font-weight: 600;
      color: #333;
      display: block;
      margin-bottom: 5px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: 0.3s;
    }

    input:focus, select:focus {
      border-color: #6a11cb;
      outline: none;
      box-shadow: 0 0 5px rgba(106, 17, 203, 0.3);
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #6a11cb;
      border: none;
      border-radius: 6px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #2575fc;
    }

    .note {
      text-align: center;
      margin-top: 10px;
      color: #555;
      font-size: 13px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Employee RECORD FORM</h2>
    <form method="POST" action="employee_record.php">
      <div class="form-group">
        <label for="empid">Employee ID</label>
        <input type="text" id="empid" name="empid" required>
      </div>

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="dept">Department</label>
        <select id="dept" name="dept" required>
          <option value="">-- Select Department --</option>
          <option value="HR">HR</option>
          <option value="Finance">Finance</option>
          <option value="IT">IT</option>
          <option value="Marketing">Marketing</option>
          <option value="Sales">Sales</option>
        </select>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="18" max="65" required>
      </div>

      <button type="submit" name="submit">Submit</button>
    </form>
    <p class="note">All fields are mandatory</p>
  </div>
</body>
</html>
