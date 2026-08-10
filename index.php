<?php
  include_once('elements/header.php');
?>
 <style>
    body {
        background: url("<?= asset('assets/images/work.jpeg') ?>") center center / cover no-repeat;
    }
</style>

<div class="overlay"></div>

<section class="coming-soon">
 
    
    <!-- Top Bar -->

    <div class="top-bar">

        <div class="left">

            <span>Ahmedabad, Gujarat</span>

            <span>+91 9876543210</span>

            <span><a href="mailto:workhomesafetysolution@gmail.com" style="text-decoration: none; color:#fff;">workhomesafetysolution@gmail.com</a></span>

        </div>

        <div class="right">

            <a href="javascript:void();"><i class="bi bi-instagram"></i></a>

            <a href="javascript:void();"><i class="bi bi-twitter"></i></a>

            <a href="javascript:void();"><i class="bi bi-facebook"></i></a>

        </div>

    </div>



    <div class="content">

        <h5>WE ARE COMING SOON</h5>

        <h1>
            Building Safer <br>
            Workplaces Together
        </h1>

        <p>
            Professional workplace safety solutions designed to protect your
            people, property, and operations. We deliver dependable, practical,
            and tailored safety solutions that help businesses operate with
            greater confidence.
        </p>


        <div id="countdown" class="countdown">

            <div class="box">
                <span id="days">00</span>
                <small>Days</small>
            </div>

            <div class="box">
                <span id="hours">00</span>
                <small>Hours</small>
            </div>

            <div class="box">
                <span id="minutes">00</span>
                <small>Minutes</small>
            </div>

            <div class="box">
                <span id="seconds">00</span>
                <small>Seconds</small>
            </div>

        </div>

        <!-- Subscribe Section -->
        <div class="subscribe-section"> 
            <form action="subscribe.php" method="POST" class="subscribe-form"> 

                <div class="email-wrapper">
                    <span class="email-icon">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input
                        type="email"
                        name="email"
                        class="subscribe-input"
                        placeholder="Enter your email address"
                        required
                    >

                    <button type="submit" class="subscribe-btn">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>

        <div class="btns"> 

            <a href="contact.php" class="btn-outline">
                Contact Us
            </a>

        </div>

    </div>

 

</section>

<script src="<?= asset('assets/js/countdown.js') ?>"></script>