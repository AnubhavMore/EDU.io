<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>EDU.io</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container-top">
        <!-- NAVBAR -->
        <div class="items navbar">
            <a href=""><p>edu<span style="color: #474747;">.io</span></p></a>
            <button id="toggle-button"><img src="./images/menu-dots-square-svgrepo-com.svg" id="toggle-button" alt=""></button> 
            
            <div class="right-nav">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">COURSES</a></li>
                    <li><a href="">CART</a></li>
                    <li><a href="/localhost/loginsystem/login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
        <div id="toggle-navbar">
                <div class="phone-nav hidden slide-in" id="toggle-content">
                    
                        <a href="">HOME</a>
                        <a href="">ABOUT</a>
                        <a href="">COURSES</a>
                        <a href="">CART</a>
                        <a href="">LOGIN</a>
                    
                </div>
        </div>  
        <!-- NAVBAR -->
        <!-- HERO SECTION -->
        <div class="items hero-section" id="hero-section">
            <div class="content">
                <p>
                    "Welcome to edu.io, your gateway to excellence in education! Explore our diverse range of courses covering JEE, NEET, coding, development, and more.Join us on your journey to academic and professional success today!"
                </p>
                <button href="#cards">COURSES</button>
            </div>
            <img src="./images/single-boy-indian-college-student-11562878687xcelv0smw6-removebg-preview.png" alt="">
        </div>
    </div>
    <!-- HERO SECTION -->

    <!-- CARDS -->
    <div class="cards" id="cards">
        <div class="card">
            <h1>IIT JEE</h1>
                <div class="card-content">
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Calculus</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Calculus" >Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Organic</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Organic">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Mechanics</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Mechanics">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Conic</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Conic">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Thermo</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Thermo">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Waves</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Waves">Add to Cart</button>
                        </section>
                    </div>
                </div>
                
        </div>
        <div class="card">
            <h1>NEET</h1>
                <div class="card-content">
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Anatomy</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Anatomy">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Botany</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Botany">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Physical Chem</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Physical Chem">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Waves</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Waves">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Genetics</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Genetics">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Inorganic</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Inorganic">Add to Cart</button>
                        </section>
                    </div>
                </div>
                
        </div>
        <div class="card">
            <h1>Competitive Programming</h1>
                <div class="card-content">
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On JAVA</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On JAVA">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On C&C++</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On C&C++">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Rust</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Rust">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Python</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Python">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On JavaScript</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Javascript">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On DSA</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On DSA">Add to Cart</button>
                        </section>
                    </div>
                </div>
                
        </div>
        <div class="card">
            <h1>Development</h1>
                <div class="card-content">
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Html</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Html">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Web Dev</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Web Dev">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On FrontEnd</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On FrontEnd">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On BackEnd</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On BackEnd">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Figma</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Figma">Add to Cart</button>
                        </section>
                    </div>
                    <div>
                        <img src="./images/e-learning-svgrepo-com.svg" alt="" class="card-img">
                        <section>
                            <p><span style="font-weight: 900;">Course On Css</span><br>
                            By Anubhav More</p>
                            <button class="add-to-cart-button"  data-course="Course On Css">Add to Cart</button>
                        </section>
                    </div>
                </div>
                
        </div>
        
    </div>
    <!-- CARDS -->

    <!-- Cart -->
    <div class="cart-section">
      <h2>Your Cart</h2>
      <ul id="cart-items"></ul>
    </div>
    <!-- Cart -->




    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('toggle-button');
        const content = document.getElementById('toggle-content');
      
        button.addEventListener('click', function() {
          content.classList.toggle('hidden');
        });
      });

      </script>
      <script src="script.js"></script>
</body>
</html>