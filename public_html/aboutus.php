<!DOCTYPE html>

<head>
    <title>About Us: Hello World</title>

    <?php include 'head.php' ?>

    <link rel="stylesheet" href="styles/about.css">

</head>

<body>
<?php include 'nav.php' ?>


<div class="content">
    <!--Banner-->
    <div id="particles-js"></div>

    <!--Meet the Instructors-->
    <div class="section">
        <h2>// Meet the Instructors</h2><br>
        <div class="instructors-container">
                <span class="instructors-item">
                    <img src="imgs/SydneySquare.jpg"><br>
                    <strong>Sydney Von Arx</strong>
                    <div>
                        <p>I am Sydney Von Arx, and I love to code! I’m a computer science major at Stanford. I have
                            experience with eight programming languages. I have completed three computer science-related
                            internships and built several programs and apps. My real specialty, though, is web
                            development.
                            One of the few things I love more than coding is teaching!
                        </p>
                    </div>
                </span>
            <span class="instructors-item">
                    <img src="imgs/SelenaSquare.jpg"><br>
                    <strong>Selena Zhang</strong>
                    <div>
                        <p>I’m Selena Zhang, and coding is my passion! Next year, I plan to study computer science at
                            MIT.
                            I’ve studied quantum computing and robotics under Prof. Perkowski at PSU, but I got my start
                            with web development! I love teaching and learning from others, and I’ve devoted hundreds of
                            hours to teaching after-school programs throughout high school.
                        </p>
                    </div>
                </span>
        </div>
    </div>
</div>
<!--Footer-->
<?php include 'footer.php' ?>
</body>