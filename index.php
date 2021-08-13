<!DOCTYPE html>

<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <img src="bgrneo.png">
</head>

<body>

    <div class="container">
        <div class="card">

            <div class="inner-box" id="card">
                <div class="cardfront">

                    <h2>Login</h2>
                    <form>
                        <input type="email" class="input-box" placeholder="Enter your Email ID" required> 
                        <input type="password" class="input-box" placeholder="password" required> 
                        <button type="submit"  class "submit-btn">Submit   <span>&#10002;</span></button>
                        
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                   <button type="button" class="btn" onclick="openregister()">Sign Up</button>
                   <a href="">Forgot Password</a>
            </div>
        <div class="cardback">

            <h2>Register</h2>
            <form action="registration.php" method='post'>
                <input type="text" class="input-box" name='user' placeholder="User Name" required> 
                <input type="email" class="input-box" name='email' placeholder="Enter your Email ID" required> 
                <input type="password" class="input-box" name='password' placeholder="password" required> 
                <button type="submit"  class "submit-btn">Submit<span>&#10002;</span></button>
                
                <input type="checkbox"><span>Remember Me</span>
            </form>
           <button type="button" class="btn" onclick="opensignin()">Sign In</button>
           <a href="">Forgot Password</a>

        </div>
        </div>
        </div>
        
    </div>

<script>

var card= document.getElementById("card");

function openregister(){

    card.style.transform="rotateY(-180deg)";
}

function opensignin(){

card.style.transform="rotateY(0deg)";
}

function openpage(){

window.open('WEBPAGE 2.html');
}

</script>

</body>

</html>