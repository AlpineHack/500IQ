<?php
session_start();
 if(isset($_POST["submit"])){
     $_SESSION["connected"] = 1;
     header("Location: ../");
 }
?>
<div class="cont">
    <div class="demo">
        <div class="login">
            <div class="login__check"></div>
            <form method="post">
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="email" name="email" class="login__input name" placeholder="E-mail address"/>
                    </div>
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" name="password" class="login__input pass" placeholder="Password"/>
                    </div>
                    <button type="submit" name="submit" value="1" class="login__submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="login.js"></script>
<link rel="stylesheet" href="styles.css">