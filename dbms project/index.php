<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Portal</title>
  <style>
    /* ---- Reset ---- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    /* ---- Background ---- */
    body {
      height: 100vh;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    /* ---- Container ---- */
    .container {
      text-align: center;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 50px 60px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1.2s ease;
    }

    /* ---- Heading ---- */
    h1 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    /* ---- Buttons ---- */
    .btn {
      display: inline-block;
      margin: 15px;
      padding: 15px 40px;
      border: none;
      border-radius: 50px;
      background: #fff;
      color: #2575fc;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
      box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    }

    .btn:hover {
      background: #2575fc;
      color: #fff;
      transform: scale(1.08);
      box-shadow: 0 6px 20px rgba(37, 117, 252, 0.4);
    }

    /* ---- Animation ---- */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ---- Footer ---- */
    .footer {
      margin-top: 30px;
      font-size: 0.9rem;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to the Company Portal</h1>
    <a href="employee_form.php" class="btn">Employee </a>
    <a href="manager_form.php" class="btn">Manager </a>
    <div class="footer">© 2025 Company Inc. | Secure Access Portal</div>
  </div>
</body>
</html>
