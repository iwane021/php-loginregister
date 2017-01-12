<?php
// php script
include("functions/controller_register.php");

// html
include("views/header.php");
?>
    <div class="row">
        <div data-alert class="alert-box" style="display:none;">
        Ini standard error
        <a href="#" class="close">&times;</a>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="register.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Register</h4>
                        <label>Username
                        <input type="text" name="username" placeholder="Username">
                        </label>
                        <label>Password
                        <input type="password" name="password" placeholder="Password">
                        </label>
                        <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
                        <p><input type="submit" name="submit" class="button expanded" value="DAFTAR"/></p>  
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("views/footer.php");
?>