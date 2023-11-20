<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"],
        .form-group select,
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group select {
            width: 100%;
        }
        .form-group .radio-group {
            display: flex;
        }
        .form-group .radio-group label {
            margin-right: 10px;
        }
        .form-group .btn-submit {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cool Registration Form</h2>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="retype_password">Retype Password</label>
                <input type="password" id="retype_password" name="retype_password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-group">
                    <label for="male"><input type="radio" id="male" name="gender" value="Male"> Male</label>
                    <label for="female"><input type="radio" id="female" name="gender" value="Female"> Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div class="form-group">
                <label for="purpose">Purpose of Using</label>
                <select id="purpose" name="purpose">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="custom_purpose">Other Purpose</label>
                <input type="text" id="custom_purpose" name="custom_purpose">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="form-group">
                <input type="submit" class="btn-submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
