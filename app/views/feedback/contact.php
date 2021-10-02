<?php

use Core\Helper;

include_once INCLUDE_PATH . '/header.php' ?>

    <main class="container">
        <div class="back position-relative mr-b-3">
            <div class="back-image">
                <img src="<?= IMAGES_PATH ?>Newfolder/category.webp" alt="">
            </div>
            <h1>Contact</h1>
        </div>

        <div class="contact d-flex justify-content-between align-items-center">
            <form method="POST" class="form d-flex contact-form">
                <h1 class="mr-b-1">Get in Touch</h1>
                <textarea name="message" class="w-100 mr-b-1" id="" cols="30" rows="10" placeholder="Enter message"></textarea>
                <input type="text" name="name" placeholder="Enter your name" class="mr-b-1">
                <input type="text" name="email" placeholder="Enter your email Address" class="mr-b-1">
                <button class="btn bg--red border-r-1 pd-btn-2 mr-b-2">Send</button>
            </form>

            <div class="contact-info">
                <div class="d-flex align-items-center mr-b-2">
                    <h1><i class="fa fa-home"></i></h1>
                    <div>
                        <h3 class="mr-r-1">Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mr-b-2 ">
                    <h1><i class="	fa fa-mobile-phone"></i></h1>
                    <div>
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mr-b-2">
                    <h1><i class="	fa fa-comment"></i></h1>
                    <div>
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime</p>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($status)) {
            Helper::checkSendStatus($status);
        } ?>
    </main>


    
    <?php include_once INCLUDE_PATH . '/footer.php' ?>