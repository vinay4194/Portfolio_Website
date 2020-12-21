<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinay Sangwan | Web Developer</title>
    <link rel="icon" href="images/v_logo.png" type="image/icon type">
    <link rel="stylesheet" href="mystyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                
                <li><a href="#services" class="menu-btn">Skills</a></li>
                <li><a href="#Mywork" class="menu-btn">My Work</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Vinay Sangwan</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#Mywork">My Work</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm <span class="color-txt">Vinay Sangwan</span></div>
                    <p>I am a Web Developer from <span class="color-text"> India.</span> Currently I'm pursuing a Masters degree in Computer Applications. I am someone who is passionate about learning web development technologies and creating beautiful web applications.  </p>
                    <p>I am a Minimalist who likes to keep things Simple and work towards a better user experience.</p>
                    <p>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-crop" style="font-size:50px"></i>
                        <div class="text">Responsive</div>
                        <p>My Layouts look and work great on any screen size.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-lightbulb" style="font-size:50px"></i>
                        <div class="text">Intuitive</div>
                        <p>Easy to understand and navigate user interface</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class='fas fa-bolt' style='font-size:50px'></i>
                        <div class="text">Fast</div>
                        <p>I aim for the shortest loading times for my projects.</p>
                    </div>
                </div>
               </div>
               
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <img src="images/html_logo.png" alt="html logo">
                <img src="images/css_logo.png" alt="css logo">
                <img src="images/bootstrap_logo.png" alt="bootstrap logo">
                <img src="images/js_logo.png" alt="javascript logo">
                <img src="images/jquery_logo.png" alt="jquery logo">
                <img src="images/phpsql_logo.png" alt="git logo">
                <img src="images/git_logo.png" alt="git logo">
            </div>
        </div>
    </section>

    <!-- My Work section start -->
    <section class="Mywork" id="Mywork">
        <div class="max-width">
            <h2 class="title">My Work</h2>
            <div class="my-work-container">
                <div class="my-work-card">
                    <div class="title-container"><h2>FlixHub </h2></div>
                    <img src="images/my_work_1.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS | PHP </span>
                        <p>This is a dynamic movie browsing website made from scratch. The movie data loads from the MySql database, A User can create his account and save his favourite movies.</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="https://github.com/vinay4194/FlixHub" target="_blank">Code</a>
                        <a href="http://flixhub.epizy.com/" target="_blank">Website</a>
                    </div>
                </div>
                <div class="my-work-card">

                    <div class="title-container"><h2>Employee Leave Management System </h2></div>
                    <img src="images/my_work_2.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS | JAVASCRIPT |PHP </span>
                        <p>Using this  an an employee an login and apply for leave. Admin can check for applied leaves and aprrove or reject them.</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="https://github.com/vinay4194/Employee_Leave_Management_System/tree/master" target="_blank">Code</a>
                        
                    </div>
                </div>
                <div class="my-work-card">
                    <div class="title-container"><h2>Simple Chatbot </h2></div>
                    <img src="images/my_work_3.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS | JAVASCRIPT | PHP</span>
                        <p>This is a very simply chatbot made using Jquery and Ajax.</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="https://github.com/vinay4194/chatbot" target="_blank">Code</a>
                        <a href="http://chatbot.42web.io/" target="_blank">Website</a>
                    </div>
                </div>
                <div class="my-work-card">
                    <div class="title-container"><h2>Static Website 1 </h2></div>
                    <img src="images/my_work_4.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS </span>
                        <p>Static Website with just the front-end</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="https://github.com/vinay4194/CreativeInc" target="_blank">Code</a>
                        <a href="https://vinay4194.github.io/CreativeInc/" target="_blank">Website</a>
                    </div>
                </div>
                <div class="my-work-card">
                    <div class="title-container"><h2>Static Website 2 </h2></div>
                    <img src="images/my_work_5.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS </span>
                        <p>Another Static Website with just the front-end</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="https://github.com/vinay4194/Xypo" target="_blank">Code</a>
                        <a href="https://vinay4194.github.io/Xypo/" target="_blank">Website</a>
                    </div>
                </div>
                <div class="my-work-card">
                    <div class="title-container"><h2>Portfolio Website </h2></div>
                    <img src="images/my_work_6.png" alt="">
                    <div class="desc">
                        <span class="txt-center">HTML | CSS | JAVASCRIPT | PHP</span>
                        <p>The site you are looking at is made with pure HTML CSS and Form submission using Jquery and Ajax.</p>
                    </div>
                    <div class="my-work-btns">
                        <a href="" target="_blank">Code</a>
                        
                    </div>
                </div>
            </div>
                
            
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    
                     
                    <a href="www.linkedin.com/in/vinay-sangwan-247420" class=><img  class="logos"src="images/linkdin.png"></a>
                    <a href="https://github.com/vinay4194" class=><img  class="logos"src="images/github.png"></a>
                    <div class="icons">
                        
                        
                        <div class="row">
                            <i class="fa fa-envelope" style="font-size:36px "></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">v.sangwan96@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form id="myform"action="get_data.php"method="post">
                        <div class="fields">
                            <div class="field name">
                                <input name="name"type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input name="email"type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input name="subject"type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="message"cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button name="send-msg"id="send-msg"type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
     
    </footer>
    <script type="text/javascript">
        $(document).ready(function(){
            var form=$('#myform');

            $('#send-msg').click(function(){

                $.ajax({
                    url:'get_data.php',
                    type:'post',
                    data:$("#myform input").serialize(),

                    
                });
            });

        });
    </script>
    <script src="script.js"></script>
</body>
</html>