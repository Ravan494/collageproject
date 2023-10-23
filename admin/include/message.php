<?php
if(isset($_SESSION['message']))
{
    
    echo '<div class="login-alert" id="login-alert">
    <div class="alert-body">
    <button id="login-close">&times;</button>	
    <span><h3>'.$_SESSION['message'].'</h3></span>
    </div>
    
    </div>
    <script>const loginalert = document.getElementById("login-alert");
    const alertclose = document.getElementById("login-close");
    alertclose.addEventListener("click", () => {
        loginalert.style.display = "none";
    });
    setTimeout(function() {
        loginalert.style.display = "none";
    }, 3000);
    </script>';
    unset($_SESSION['message']);
}
?>