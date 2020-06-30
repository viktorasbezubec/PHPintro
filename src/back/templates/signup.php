<?php
require 'header.php'
?>

<div class="hero">
    <div class="whitebox">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="push-btn">Register</button>
            <button type="button" class="push-btn">Log In</button>

        </div>
        <form id="login" class="input-group" action="../includes/signup1.php">
            <input type="text" class="input-field" placeholder="Enter Username">
            <input type="text" class="input-field" placeholder="Enter Password">
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log in</button>
        </form>
        <form id="register" class="input-group" action="../includes/signup1.php" method="post">
            <input type="text" class="input-field" name="uid" placeholder="Enter Username">
            <input type="email" class="input-field" name="mail" placeholder="Enter Email">
            <input type="text" class="input-field" name="pwd" placeholder="Enter Password">
            <input type="text" class="input-field" name="pwd-repeat" placeholder="Repeat Password">
            <input type="checkbox" class="check-box"><span>I agree to the terms</span>
            <button type="submit" class="submit-btn" name="signup-submit">Register</button>
        </form>
    </div>
</div>
<?php
require 'footer.php'
?>
