<!DOCTYPE html>

<head>
    <title>Hello World</title>
    <?php include 'head.php' ?>ss
</head>

<body>
<!--Nav Bar-->
<?php include 'nav.php' ?>

<!--Banner-->
<div id="particles-js" class="banner"></div>


<img id="bigLogo" src="imgs/Logo.svg">


<div class="content">

    <!--Photos-->
    <div class="section">
        <div class="home-photos">
            <img src="imgs/Row.jpg">
            <img src="imgs/bunnyEars.jpg">
        </div>
    </div>

    <!--Details-->
    <div class="section">
        <h2>// Details</h2>
        <div>
            <div id="warning"><strong>Subject to change as the Coronavirus situation evolves. We'll keep you
                    posted!</strong></div>
            <div class="details-container">
                <div class="details-item">
                    <div>
                        <p><strong>Who: </strong>Girls in grades 5-8 (rising 6-9). Coding experience not
                            necessary,
                            but always welcome. It is strongly recommended that younger girls, those who may
                            want to
                            take things more slowly, and those who are completely unfamiliar with technology
                            sign up
                            for the second session. Those who are older, crave a challenge, and are more
                            comfortable
                            with technology (though they may not necessarily have programming experience) are
                            encouraged to sign up for the first session.
                        </p>
                    </div>
                    <div>
                        <p><strong>Times: </strong><br>
                            Session 1 (HTML/CSS): August 3rd-7th, 2:00-5:00 pm<br>
                            Session 2 (JavaScript): August 10th-14th, 2:00-5:00 pm</p>
                    </div>
                    <div>
                        <p><strong>Cost: </strong><br>
                            Early bird (before June 1st): $35<br>
                            Regular: $50 (scholarships available)</p>
                    </div>
                </div>
                <div class="details-item">
                    <p><strong>Location: </strong> 4560 SW 110th Ave, Beaverton, OR, 97005</p>
                    <iframe id="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.143362310373!2d-122.79196428489877!3d45.48705773993969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950c1c96a8cec1%3A0x909836a2d8afa1b!2s4560%20SW%20110th%20Ave%2C%20Beaverton%2C%20OR%2097005!5e0!3m2!1sen!2sus!4v1588189531601!5m2!1sen!2sus"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Bios-->
    <!--<div class="section">
    <h2>//About the Instructors</h2>
    <div>
        <p><strong class="author">Sydney Von Arx</strong></p>
        <p>I am Sydney Von Arx, and I love to code! I’m a computer science major at Stanford. I have experience
            with eight programming languages. I have completed three computer science-related internships and
            built several programs and apps. My real specialty, though, is web development. One of the few
            things I love more than coding is teaching!</p>
    </div>
    <div>
        <p><strong class="author">Selena Zhang</strong></p>
        <p>I’m Selena Zhang, and coding is my passion! I plan to study computer science at MIT next year. I’ve
            studied quantum computing and robotics under Professor Perkowski at PSU, but I got my start with web
            development! I love teaching and learning from others, and I’ve devoted hundreds of hours to
            teaching after-school programs throughout high school.</p>
    </div>
</div>-->

    <!--Details-->

    <!--Bios-->
    <!--<div class="section">
    <h2>//About the Instructors</h2>
    <div>
        <p><strong class="author">Sydney Von Arx</strong></p>
        <p>I am Sydney Von Arx, and I love to code! I’m a computer science major at Stanford. I have experience
            with eight programming languages. I have completed three computer science-related internships and
            built several programs and apps. My real specialty, though, is web development. One of the few
            things I love more than coding is teaching!</p>
    </div>
    <div>
        <p><strong class="author">Selena Zhang</strong></p>
        <p>I’m Selena Zhang, and coding is my passion! I plan to study computer science at MIT next year. I’ve
            studied quantum computing and robotics under Professor Perkowski at PSU, but I got my start with web
            development! I love teaching and learning from others, and I’ve devoted hundreds of hours to
            teaching after-school programs throughout high school.</p>
    </div>
</div>-->

    <!--Testimonials-->
    <div class="section">
        <h2>// Testimonials</h2>
        <div class="testimonial-container">
                    <span class="testimonial-item" id="zadie"><em>"I really liked being here. The coding was a lot of
                            fun
                            and the
                            people were awesome!"</em>
                        <p><strong class="author">Zadie</strong></p>
                    </span>
            <span class="testimonial-item"><em>"I loved this camp. It was really fun. I would give it five
                            stars."</em>
                        <p><strong class="author">Yasaswini</strong></p>
                    </span>
            <span class="testimonial-item"><em>"This was the best coding camp I have ever done!"</em>
                        <p><strong class="author">Lauren</strong></p>
                    </span>
        </div>
    </div>
</div>


<!--Footer-->
<?php include 'footer.php' ?>


<script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="scripts/particles.js"></script>
<script src="scripts/app.js"></script>
<script src="scripts/script.js"></script>

</body>