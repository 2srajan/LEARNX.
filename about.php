<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Choose us for expert-led courses, comprehensive and up-to-date content, hands-on projects, and a supportive learning community. Boost your skills and career with our flexible, engaging, and affordable e-learning platform designed for success. Join us today!</p>

            <a href="courses.html" class="inline-btn" lin>our courses</a>
         </div>

      </div>

      <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+1k</h3>
               <span>online courses</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+25k</h3>
               <span>brilliants students</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
               <h3>+5k</h3>
               <span>expert teachers</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <span>job placement</span>
            </div>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading">student's reviews</h1>

      <div class="box-container">

         <div class="box">
            <p>The courses are expertly designed, providing clear explanations and practical examples. The hands-on projects truly solidify the learning experience. Highly recommend this platform!</p>
            <div class="user">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>Deepshikha Tripathi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Amazing content! The interactive exercises and community support make learning enjoyable and effective. Perfect for anyone looking to enhance their skills.</p>
            <div class="user">
               <img src="images/pic-3.jpg" alt="">
               <div>
                  <h3>Satyam kumar</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"Engaging and well-structured courses with supportive community features. The projects help apply what you’ve learned in real scenarios. Excellent for career growth."</p>
            <div class="user">
               <img src="images/pic-4.jpg" alt="">
               <div>
                  <h3>Sumit Kushwaha</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Exceptional e-learning site! The instructors are knowledgeable, and the course material is always up-to-date. A great resource for continuous learning.</p>
            <div class="user">
               <img src="images/pic-5.jpg" alt="">
               <div>
                  <h3>Shubhi shukla</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>User-friendly interface and comprehensive courses. The practical approach to teaching complex topics is outstanding. Ideal for both beginners and advanced learners</p>
            <div class="user">
               <img src="images/pic-6.jpg" alt="">
               <div>
                  <h3>Sumit panday</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p> I appreciate the detailed explanations and real-world applications. The site offers a fantastic balance of theory and practice. Highly effective learning environment.</p>
            <div class="user">
               <img src="images/pic-7.jpg" alt="">
               <div>
                  <h3>Tripti mishra</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->










   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
