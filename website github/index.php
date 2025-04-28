<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio project</title>
    <link rel="stylesheet" href="./Style.css">
    <script src="https://kit.fontawesome.com/0936483b15.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav id="nav">
                <img src="./images/logo.jpg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">home</a></li>
                    <li><a href="#about">about me</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#portfolio">portfolio</a></li>
                    <li><a href="#contact">contact</a></li>
                    <i class="fa-solid fa-circle-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <h1>hi, i am <span>Aman </span><br/> Abdela from Ethiopia</h1>
                <p>fullstack developer</p>
                
            </div>
        </div>

    </div>
    <!--about-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="./images/user.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About me</h1>
                    <p> my name is Aman Abdela. a fullstack software developer at Adama sacience and technology university(ASTU)</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links " onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI?UX</span><br>designing web/App interface</li>
                            <li><span>web development</span><br>web App development</li>
                            <li><span>App development</span><br>building iOS/Android apps </li>
                        </ul>
                    </div>
                    <div class="tab-contents " id="experience">
                        <ul>
                            <li><span>2021-current</span><br>i have a Application developer certificate from Udemy  </li>
                            <li><span>2019-2021</span><br>I become UI?UX designer</li>
                            <li><span>2016-2017</span><br> I become a fullstack developer by learning at Udemy </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>UI?UX</span><br>designing web/App interface</li>
                            <li><span>web development</span><br>web App development</li>
                            <li><span>App development</span><br>building iOS/Android apps </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services-->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">my services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web designing</h2>
                    <p>Web design is the process of planning and creating the visual layout, structure, and user experience of websites. It combines elements like layout, colors, fonts, and interactive features to ensure a site is both visually appealing and easy to use across devices.</p>
                    <a href="#">learn more...</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop-simple"></i>
                    <h2>UI?UX designing</h2>
                    <p>Make the interface aesthetically pleasing and easy to user and also used to create a product that’s not just beautiful, but also easy and enjoyable to use.</p>
                    <a href="#">learn more...</a>
                </div>
                <div>
                    <i class="fa-brands fa-figma"></i>
                    <h2>App designing</h2>
                    <p>App design is the process of creating the visual style, user interface, and overall user experience of a mobile or desktop application. It focuses on intuitive navigation, functionality, and aesthetic appeal to enhance user interaction.</p>
                    <a href="#">learn more...</a>
                </div>

            </div>
        </div>
    </div>
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">my work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="./images/uiuix.png" alt="">
                    <div class="layer">
                        <h3>Make the interface aesthetically pleasing and easy to user</h3>
                        <p>used to create a product that’s not just beautiful, but also easy and enjoyable to use.</p>

                    </div>
                </div>
                <div class="work">
                    <img src="./images/app.webp" alt="">
                    <div class="layer">
                        <h3>Application development</h3>
                        <p>this is my first work that i have done so far</p>

                    </div>
                    
                </div>
                <div class="work">
                    <img src="./images/web.jpg" alt="">
                    <div class="layer">
                        <h3>website developing</h3>
                        <p>developing a website is an interesting work.</p>

                    </div>

                </div>
            </div>
            <a href="#" class="btn">see more...</a>
        </div>
    </div>
    <!--contact-->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">contact me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>amanabdela6288@gmail.com</p>
                    <p><i class="fa-solid fa-phone-volume"></i>+251935256288</p>
                    <div class="social-icons">
                        <a href="https://facebook.com/Aman Abdela"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/Aman Abdela"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="https://instagram.com/Aman Abdela"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/Aman Abdela"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="./images/Aman Abdela.pdf" download class="btn btn2">download file</a>
                </div>
                <div class="contact-right">
                    <form action="./includes/formhandler.php" method="post">
                        <input type="text" name="name" placeholder="your name" required>
                        <input type="email" name="email" placeholder="Enter email" required>
                        <textarea name="message" rows="8" placeholder="Write message"></textarea>
                        <button type="submit" class="btn btn2" 
                        onclick="
                        alert="your message is received.Thank you!"
                        ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>copyright Aman.made with <i class="fa-solid fa-heart"></i> by Aman Abdela</p>
        </div>
    </div>
    <script>
        var tablinks =document.getElementsByClassName("tab-links");
    var tabcontents =document.getElementsByClassName("tab-contents");
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");

    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab")
    }
       
    </script>
   <script>
     var sidemen = document.getElementById("sidemenu");
    function openmenu(){
        sidemen.style.right="0";
    }
    function closemenu(){
        sidemen.style.right="-200px";
    }

   </script>
</body>
</html>