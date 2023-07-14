<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
?>
<section class="container-fluid">
        <h1 class="ch1">CONTACT US</h1> 
        <div class="heading container">
            <h2 class="ch2">CREATE A CONNECTION WITH US</h2>
            <div class="contact-box">
                <div class="contact-left">
                    <form action="">
                        <div class="input-row">
                            <div class="input-group">
                                <label>NAME :</label>
                                <input type="text" placeholder="YOUR NAME"  required autocomplete="off">    
                            </div>
                            <div class="input-group">
                                <label>LAST NAME :</label>
                                <input type="text" placeholder="LAST NAME"  required autocomplete="off">    
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <label>EMAIL :</label>
                                <input type="email" placeholder="YOUR EMAIL"  required autocomplete="off">    
                            </div>
                            <div class="input-group">
                                <label>PHONE NUMBER :</label>
                                <input type="tel" placeholder="YOUR NUMBER" pattern="[0-9]{10}" required autocomplete="off">    
                            </div>
                        </div>
                        <label>MESSAGE :</label>
                        <textarea rows="5" placeholder=" YOUR MESSAGE"></textarea>

                        <button type="submit" class="contactbtn">SUBMIT</button>
                    </form>
                </div>
                <div class="contact-right">
                       <span>HOW TO REACH US</span>
                       <div>
                            <img src="images/c1.png" alt="img1">
                       </div>
                       <ul type="none">
                        <li>EMAIL :- jonhjaffer@technolog.in</li>
                        <li>PHONE :- +91-9743755521</li>
                        <li>ADDRESS :- Down Town Area Stree-No.45 Plot-No.155/300</li>
                       </ul>
                </div>
            </div>
        </div>            
    </section>

<?php
include 'include/footer.php';
include 'include/script.php';
?>