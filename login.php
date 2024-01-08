<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form id="loginForm">
	<h1><center>Hotel Richwin Admin Panel</center></h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="button" onclick="validateLogin()">Login</button>
    </form>

    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Simple validation
            if (username === 'Admin' && password === '12345') {
                window.location.href="http://localhost/Richwin_dashboard/dashboard.php";
            } else {
                // You can perform further validation or send the data to the server here
                alert('Login fail!!!'); // For demonstration purposes
            }
        }
    </script>

</body>
</html>