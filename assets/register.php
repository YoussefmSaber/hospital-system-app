<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="icon" href="images/icon.png">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="images/Queue.gif" alt="">
        </div>

        <div class="right-side">
            <div class="title">Registration</div>
            <form method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" required>
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
    </div>
</body>
</html>