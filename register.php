<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Phone number</span>
                    <input type="text" placeholder="Enter your number" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter you password" required>
                </div>

                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm you password" required>
                </div>
            </div>

            <div class="gender-details">
                <span class="gender-title">Gender</span>
                <div class="category">

                    <label for="">
                        <span class="dot one">
                            <input type="radio" id="male" name="gender">
                            <span class="gender">Male</span>
                        </span>
                    </label>

                    <label for="">
                        <span class="dot one">
                            <input type="radio" id="female" name="gender">
                            <span class="gender">Female</span>
                        </span>
                    </label>
                </div>
            </div>

            <div class="faculty-details">
                <span class="faculty-title">Faculty</span>
                <select name="faculty" required>
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="computerScience">Faculty of Computer and Informatics</option>
                    <option value="Engineering">Faculty of Engineering</option>
                    <option value="Commerce">Faculty of Commerce</option>
                </select>
            </div>

            <div class="btn">
                <input type="submit" value="Register">
            </div>
        </form>

        <div class="foot">
            <span class="txt">Already have an account?</span>
            <span class="login"><a href="login.php">Login</a></span>
        </div>
    </div>
</body>
</html>