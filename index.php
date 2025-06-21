<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE email = '$email' AND name = '$name' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Message already sent!';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'Message sent successfully!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Design</title>


    <!-- front awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
         <link rel="stylesheet" href="CSS/style.css">

<style>
.message{
    position: sticky;
    top: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    background-color: var(--cyan) !important;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem;
    font-size: 2rem;
}

.message i{
    cursor: pointer;
}
</style>
         
</head>
<body>

<?php 

if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove()"></i>
        </div>';
    }
}

?>



    

<!-- header section starts  -->

  <header class="header">

  <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#skills">skills</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
        </nav>

    <div class="follow">
        <a href="https://www.facebook.com/sayan.adhikary.94651/" class="fab fa-facebook-f" ></a>
        <a href="https://x.com/AdhikaryLeogod" class="fab fa-twitter" ></a>
        <a href="https://www.instagram.com/adhikaryleogod/" class="fab fa-instagram" ></a>
        <a href="https://www.linkedin.com/in/sayan-adhikary-088a34270/" class="fab fa-linkedin" ></a>
        <a href="https://github.com/Sayan-AdhikaryM10" class="fab fa-github" ></a>
    </div>
  </header>
 <!-- header section ends -->


 <!-- home section starts -->


 <section class="home" id="home">
    <div class="image">
        <img src="images/User-img.jpeg" alt="My Image">
    </div>


    <div class="content">
        <h3>hi, i am <br>Sayan Adhikary</h3>
        <span>Web designer & developer</span>
        <p>Welcome to my portfolio website! Here, you can explore my projects, skills, and experiences. I am passionate about creating beautiful and functional web applications. Let's connect and collaborate!</p>
        <a href="#about" class="btn">about me</a>
    </div>




 </section>


  <!-- home section ends -->



  <!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading"><span>Biography</span></h1>
    <div class="biography">
        <p>My name is Sayan Adhikary, and I am a passionate web designer and developer. I have a strong foundation in HTML, CSS, JavaScript, php, and MySql an I am always eager to learn new technologies. My goal is to create user-friendly and visually appealing websites that provide an excellent user experience.</p>
    

        <div class="bio">
            <h3> <span>name: </span> Sayan Adhikary</h3>
            <h3> <span>email: </span> sayanadhikary831@gmail.com </h3>
            <h3> <span>address : </span> P2 PB Road , P.C.Sen Colony, Kolkata West Bengal 700041</h3>
            <h3> <span>phone : </span> +91-9330842161 </h3>
            <h3> <span>age: </span> 25years</h3>
            <h3> <span>experience: </span> 1 years </h3>
        </div>

      <a href="CV/sayanCV.pdf" class="btn">download CV</a>

</div>

    <div class="skills" id="skills">
        <h1 class="heading"><span>Skills</span></h1>
        <div class="progress">
            <div class="bar"><h3><span>HTML</span> <span>80%</span></h3> </div>
            <div class="bar"><h3><span>CSS</span> <span>70%</span></h3></div>
            <div class="bar"><h3><span>JavaScript</span> <span>75%</span></h3> </div>
            <div class="bar"><h3><span>PHP</span> <span>85%</span></h3> </div>
            <div class="bar"><h3><span>MySql</span> <span>75%</span></h3> </div>
            <div class="bar"><h3><span>Bootstrap</span> <span>60%</span></h3> </div>
            <div class="bar"><h3><span>Responsive</span> <span>72%</span></h3> </div>
            <div class="bar"><h3><span>Java</span> <span>70%</span></h3> </div>
            <div class="bar"><h3><span>Python</span> <span>60%</span></h3> </div>
            <div class="bar"><h3><span>C</span> <span>95%</span></h3> </div>
            <div class="bar"><h3><span>Data Structure</span> <span>70%</span></h3> </div>
        </div>

    </div>

<div class="edu-exp">
     <h1 class="heading"> <span>Education & Experience</span> </h1>

    <div class="row">

      <div class="box-container">
            
           <h3 class="title">Education</h3>

            <div class="box">
               <span>(  2022 - 2025 )</span>
               <h3>BCA Bachelor of Computer Applications</h3>
                <p> I am currently pursuing a Bachelor of Computer Applications (BCA) degree at Maulana Abul Kalam Azad University of Technology, WB.</p>
            </div>
            
            <div class="box">
               <span>(  2021 - 2022 )</span>
               <h3>Class XII CBSE</h3>
                <p> I have completed my high school education from Central Model School, Barrackpore, West Bengal. </p>
            </div>
  

            <div class="box">
               <span>(  2019 - 2020 )</span>
               <h3>Class X CBSE</h3>
                <p> I have completed my high school education from Central Model School, Barrackpore, West Bengal. </p>
            </div>
        </div>


        <div class="box-container">
            
          <h3 class="title">Experience</h3>

            <div class="box">
               <span>(  2022 - 2023 )</span>
               <h3>front-end developer</h3>
                <p>I have worked as a front-end developer, where I focused on creating and user-friendly interfaces using HTML, CSS, and JS.</p>
                
            </div>
            
            <div class="box">
               <span>(  2023 - 2024 )</span>
               <h3>back-end developer</h3>
                <p>I have worked as a back-end developer, where I focused on server-side programming and database management.</p>
            </div>
  

            <div class="box">
               <span>(  2024 - 2025 )</span>
               <h3>Full Stack Developer</h3>
                <p> I am currently working as a Full Stack Developer, where I am responsible for both front-end and back-end development.</p>
            </div>
        </div>

    </div>

</div>

</section>
<!-- about section ends -->

<!-- services section starts  -->
<section class="services" id="services">
    <h1 class="heading"><span>Services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-laptop-code"></i>
            <h3>Web development</h3>
            <p>A web developer designs, builds, and maintains websites using coding languages like HTML, CSS, and Js.</p>
        </div>
        

        <div class="box">
            <i class="fa-brands fa-python"></i>
            <h3>Python programming</h3>
            <p>Python is a versatile, easy-to-learn language used for web development, data science, automation, and AI.</p>
        </div>

        <div class="box">
            <i class="fa-brands fa-java"></i>
            <h3>Java programming</h3>
            <p>Java is a versatile, object-oriented programming language widely used for web, desktop, and mobile app.</p>
        </div>
            

        <div class="box">
            <i class="fa-brands fa-php"></i>
            <h3>PHP programming</h3>
            <p>PHP is a server-side scripting language used to build dynamic websites, web applications, and backend systems.</p>
        </div>

       <div class="box">
            <i class="fa-solid fa-database"></i>
            <h3>Database Management</h3>
            <p>Database Management involves storing, organizing, retrieving, and securing data efficiently using software systems.</p>
        </div>

        <div class="box">
            <i class="fa-brands fa-bootstrap"></i>
            <h3>Bootstrap Framework</h3>
            <p>Bootstrap is a responsive front-end framework that simplifies web development.</p>
        </div>



    </div>


</section>
<!-- services section ends -->


<!-- portfolio section starts -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span>Portfolio</span> </h1>


    <div class="box-container">

    <div class="box">
      <img src="images/img-1.jpg" alt="Chat Application">
      <h3>Chat Application</h3>
      <span>( 2024-2025 )</span>
    </div>


    <div class="box">
            <img src="images/img-2.jpg" alt="Gym Web page">
            <h3>Gym Web page</h3>
            <span>( 2022-2023 )</span>
    </div>

    <div class="box">
            <img src="images/img-3.jpg" alt="Food delivery Application">
            <h3>Food delivery Application</h3>
            <span>( 2024-2025 )</span>
    </div>

    <div class="box">
            <img src="images/img-4.jpg" alt="Forum Web Application">
            <h3>Forum Web Application</h3>
            <span>( 2024-2025 )</span>
    </div>

    <div class="box">
            <img src="images/img-5.jpg" alt="Food delivery Web page">
            <h3>Food delivery Web page</h3>
            <span>( 2022-2023 )</span>
        </div>

    <div class="box">
            <img src="images/img-6.jpg" alt="Image gallery Web page">
            <h3>Image gallery Web page</h3>
            <span>( 2023-2024 )</span>
    </div>


    </div>

</section>


<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact Me</span> </h1>

    <form action="" method="post">
        <div class="flex">
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+91 9330842161</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>sayanadhikary831@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Kolkata, West Bengal, India, 700041</p>
        </div>


    </div>


</section>

 <!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr.Sayan Adhikary</span> </div>











<!-- custom js file link -->
 <script src="js/script.js"></script>

</body>
</html>