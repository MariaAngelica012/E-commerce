<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    

    <div class="container" id="signIn">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="fName" name="fName" placeholder="First Name" required>
                    <label for="fName">First Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="lName" name="lName" placeholder="First Name" required>
                    <label for="lName">Last Name</label>
                </div>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <label for="emailLogin">Email address</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="pWord" placeholder="password" required>
                <label for="pWord">Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" id="pNumber" name="pNumber" placeholder="Phone" required>
                <label for="pNumber">Contact Number</label>
            </div>
            <input type="submit" class="btn" value="Sign up" name="signUp">
           
           </form>
           <p class="toSignUp">
            Dont have an account yet? <button class="SignupBtn" href="signup.php" name="signUp">Sign Up!</button>
           </p>

    </div>  
    
</body>
</html>