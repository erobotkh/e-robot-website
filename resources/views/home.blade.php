
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ URL:: asset('css/homePage.css')}}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet"></head>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="home_wrapper">
        <header class="header">
            <div class="header__logo">
                <a href="./homePage.html">
                    <!-- <link rel="stylesheet" href="{{ URL:: asset('css/homePage.css')}}"> -->

                    <img src="images/logo_erobot-removebg.png" alt="E-Robot Logo">
                </a>
            </div>
            <div class="header__menu">
                <ul>
                    <li class="active"><a href="./homePage.html">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Donate</a></li>
                    <li class="about"><a href="#">About</a></li>
                </ul>
            </div>
            <div class="header__manageAccount">
                <ul>
                    <li> <a href="#"><i class='bx bx-phone' style="font-size:20px;font-weight: 700;"></i></a></li>
                    <li class="headerNotification"><i class='bx bx-bell' id="bx-bell" style="font-size:20px;font-weight: 700;"></i>
                        <div class="headerNotificationContainer" id="IdheaderNotificationContainer" >
                            <ul>
                                <li class="notificationContent">
                                    <a href="#">
                                        <div class="notificationTitle"><p>Technology Lorem ipsum dolor sit amet.</p></div>
                                        <div class="notificationDate">July 16 2023</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="profileSection"><img id="profile" src="https://d34u8crftukxnk.cloudfront.net/slackpress/prod/sites/6/E12KS1G65-W0168RE00G7-133faf432639-512.jpeg" alt="User Profile">
                        <div class="profileContainer" id="profileContainer">
                            <div class="personalInfo">
                                <a href="#">
                                    <div class="profileImage"><img src="https://d34u8crftukxnk.cloudfront.net/slackpress/prod/sites/6/E12KS1G65-W0168RE00G7-133faf432639-512.jpeg" alt=""></div>
                                    <div class="subtitle">
                                        <h2>Personal</h2>
                                    </div>
                                </a>
                                

                            </div>
                            <div class="loginOrlogout">Log Out <i class='bx bx-log-in'></i></div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        <main class="mainContainer">
            <div class="slideShow" id="slideShow">
                <img class="slide" id="slide" src="images/slide21.jpg" alt="">
                <img style="display: none;" class="slide"  id="slide" src="images/slide11.jpg "alt="">
            </div>


            <div class="programSection">
                <div class="programTitle"><h1>Our Programs</h1></div>
                <div class="programContainer">
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>


                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>
                    <div class="programCard">
                        <a href="#">
                            <div class="programObject"><img src="images/roboticObject.svg" alt=""></div>
                            <div class="programSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutProgram">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                        
                    </div>

                    
                </div>
            </div>

            
<!-- video section -->
            <div class="videoSection">
                
                <div class="videoContainer">
                    <div class="video">
                        <iframe  src="https://www.youtube.com/embed/iz6Ke1YNcV0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="articleContianer">
                        <div class="videoSubtitle"><h2>Education Program </h2></div>
                        <div class="videoDate">
                            <i class='bx bx-time-five'></i>
                            <span>1/June/2023</span>
                        </div>
                        <article class="videoDetail">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorum dolorem et voluptatum mollitia aperiam obcaecati commodi a nisi iure quis maiores reiciendis repellendus culpa laudantium velit, adipisci praesentium harum tenetur dignissimos neque ea! Ipsa praesentium amet cumque adipisci, consectetur laudantium officia dolorem temporibus vitae sapiente nesciunt.
                        </article>
                        <div class="seeMorevideo">
                            <button><a href="#">More about video</a> </button>
                        </div>
                    </div>
                    
                </div>
            </div>
<!-- team -->
            <div class="teamsSection">
                <div class="teamsTitle">
                    <h1>E-Robot Teams</h1>
                </div>
                <div class="teamContainer">
                    <div class="teamCard">
                        <a href="#">
                            <div class="teamImage">
                                
                                <img src="images/events1.jpg" alt="">
                                <div class="grayScreen"></div>
                            </div>
                            
                            <div class="teamLeader">
                                <div class="leader">
                                    <img src="images/blogPost.jpg" alt="">
                                </div>
                                <div class="teamPosition">
                                    Leader name 
                                </div>
                            </div>
                            <div class="teamSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutteam">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                    </div>

                    <div class="teamCard">
                        <a href="#">
                            <div class="teamImage">
                                
                                <img src="images/events1.jpg" alt="">
                                <div class="grayScreen"></div>
                            </div>
                            
                            <div class="teamLeader">
                                <div class="leader">
                                    <img src="images/blogPost.jpg" alt="">
                                </div>
                                <div class="teamPosition">
                                    Leader name 
                                </div>
                            </div>
                            <div class="teamSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutteam">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                    </div>
                    
                    <div class="teamCard">
                        <a href="#">
                            <div class="teamImage">
                                
                                <img src="images/events1.jpg" alt="">
                                <div class="grayScreen"></div>
                            </div>
                            
                            <div class="teamLeader">
                                <div class="leader">
                                    <img src="images/blogPost.jpg" alt="">
                                </div>
                                <div class="teamPosition">
                                    Leader name 
                                </div>
                            </div>
                            <div class="teamSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutteam">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                    </div>
                    
                    <div class="teamCard">
                        <a href="#">
                            <div class="teamImage">
                                
                                <img src="images/events1.jpg" alt="">
                                <div class="grayScreen"></div>
                            </div>
                            
                            <div class="teamLeader">
                                <div class="leader">
                                    <img src="images/blogPost.jpg" alt="">
                                </div>
                                <div class="teamPosition">
                                    Leader name 
                                </div>
                            </div>
                            <div class="teamSubtitle"><h2>Robotic</h2></div>
                            <article class="aboutteam">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reiciendis quas et asperiores quasi odio ut autem eos hic impedit.</article>
                        </a>
                    </div>
                    

                    
                        
                    
                    
                </div>
            </div>


        </main>

        <!-- to top button -->
        <a href="#" class="to_top">
            <i class='bx bx-chevrons-up'></i>
        </a>

        <footer class="footer">
            <div class="footerContainer">
                <div class="footerLogo">
                    <div class="logo">
                        <a href="./homePage.html">
                            <img src="images/logo_erobot.png" alt="">

                        </a>
                        
                    </div>
                    <div class="quote"><p>The universe of us is loving and curiosity.</p></div>
                    <div class="media">
                        <a class="facebookMedia" href=" https://www.facebook.com/ERobotKH?mibextid=LQQJ4d" >
                            <img src="images/FacebookLogo.png" alt="">
                        </a>
                        <a class="youtubeMedia" href="https://www.youtube.com/@erobotkh ">
                            <img src="images/youtube_logo.png" alt="">
                        </a>
                        <a class="telegramMedia" href=" https://t.me/erobot_generalknowledge">
                            <img src="images/Telegram_logo.webp" alt="">
                        </a>
                        <a class="linkInMedia" href="https://www.linkedin.com/company/erobotkh">
                            <img src="images/linkedin.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="footerContent">
                    <div class="contentContainer">
                        <div class="contentEssentail">
                            <h3>Essentail</h3>
                        </div>
                        <ul class="contentLink">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="contentContainer">
                        <div class="contentContact">
                            <h3>Contact Us</h3>
                        </div>
                        <ul class="contentLink">
                            <li><i class='bx bx-location-plus' ></i>Phnom Phenh, Cambodia</li>
                            <li><i class='bx bx-phone'></i>+855 10567014</li>
                            <li><i class='bx bx-envelope'></i>ERobotTeam@gmail.com</li>
                            <li><i class='bx bxl-telegram' ></i>010567014</li>
                        </ul>
                    </div>
                </div>
                <div class="footerMoblieApp">
                    <div class="contentApp">
                        <h3>Application</h3>
                    </div>
                    <div class="playStore">
                        <a href="#">
                            <div class="playStoreImage">
                                <img src="images/playStore.png" alt="">
    
                            </div>
                            <div class="subtitle">Play Store</div>
                        </a>
                    </div>
                </div>
            </div>
            <hr style="width: 90%; margin: 20px auto; background-color: rgba(128, 128, 128, 0.224); border-color: rgba(128, 128, 128, 0.228);">
            <div class="copyRightTermPrivacy">
                <span>Copyright&copy; 202x E-Robot, All rights reversed.</span>
                <a href="#">Term & Privacy</a>
            </div>
                

        </footer>
    </div>

    <script>

        // slide show
        let slide = document.getElementsByClassName("slide");
        console.log(slide.length)
        let i=0;
        function hide_slide(id){
            id.style.display = "none";
        }
        function show_slide(id){
            id.style.display= "block";
        }
        const slideNext = ()=>{
            hide_slide(slide[i]);
            i++;
            if(i===slide.length){
                i = 0 ;
            }
            show_slide(slide[i]);
        }
        setInterval(function(){ slideNext()},5000);
        
        // to top scroll
        const toTop = document.querySelector('.to_top');
        window.addEventListener("scroll",()=>{
            if(window.pageYOffset >100){
                toTop.classList.add("active");
            }else{
                toTop.classList.remove("active");
            }
        })

        
        const showNotification = ()=>{

            const notificat = document.getElementById("IdheaderNotificationContainer");
            notificat.classList.toggle("showNoti");
            
        }
        const notificationBtn = document.getElementById("bx-bell");
        notificationBtn.addEventListener("click",showNotification);

        const showPro = ()=>{

            const notificat = document.getElementById("profileContainer");
            notificat.classList.toggle("showProfile");
            
        }
        const profileBtn = document.getElementById("profile");
        profileBtn.addEventListener("click",showPro);


        
    </script>
</body>
</html>