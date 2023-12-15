<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>مركز طبي</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
   <meta name="viewport" content="width_device_width, initail-scale=1">
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
   <style>
      *,
      body,
      html,
      header {
         margin: 0;
         padding: 0;
         text-align: center;
         box-sizing: border-box;
         font: 1.03em "open sans"sans-serif;
      }

      li {
         list-style: none;
      }

      a {
         text-decoration: none;
         color: rgb(158, 146, 146);
      }

      a:hover {
         color: #000000;
      }

      /*Header**/

      header {
         width: 100%;
         height: 84px;
         font-size: 30px;
      }

      .icon_love {
         color: rgb(207, 30, 30);
      }

      nav {
         color: #000;
         width: 100%;
         height: 84px;
         display: flex;
         padding: 10px;
         padding-right: 5%;
         align-items: center;
         background-color: white;
         justify-content: space-between;
         border-top: solid 8px #38d39f;
         border-bottom: solid 5px #3f3c3c;
      }

      nav>ul>li {
         padding: 20px;

         display: inline-block;
      }

      /*content*/

      img {
         max-width: 100%;
         width: 100%;
         height: 100%;
      }

      .cycle-slideshow {
         width: 70%;
         max-width: 2500px;
         height: 500px;
         display: block;
         position: relative;
         margin: 2% auto;
         border-radius: 60px;
         overflow: hidden;
         box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.5);
      }

      .twoclinic {
         padding: 1%;
         display: flex;
         justify-content: center;
      }

      .clinic {
         padding: 1% 5%;
      }

      .image {
         width: 300px;
         height: 200px;
         cursor: pointer;
         position: relative;
         margin-bottom: 15px;
         background-size: cover;
         border: 2px solid #009789;
         border-radius: 15px 0px 15px;

      }

      .image1 {
         background-image: url("images/photo_2021-06-05_05-59-15.jpg");
      }

      .image2 {
         background-image: url("images/caroline-lm-QA9fRIi6sFw-unsplash.jpg");
      }

      .image3 {
         background-image: url("images/photo_2021-06-05_05-59-07.jpg");
      }

      .image4 {
         background-image: url("images/johny-georgiadis-3ewkNkfJj2k-unsplash.jpg");
      }

      .image5 {
         background-image: url("images/photo_2021-06-05_06-26-28.jpg");
      }

      .image6 {
         background-image: url("images/photo_2021-06-05_06-21-15.jpg");
         background-position:right;
      }
      .image7 {
         background-image: url("images/photo_2021-06-05_05-59-11.jpg");
      }

      .image8 {
         background-image: url("images/1576276011_258_46041_.jpg");
      }

      .image9 {
         background-image: url("images/photo_2021-06-05_05-57-32.jpg");
      }


      .image-overlay {
         opacity: 0;
         width: 100%;
         height: 100%;
         padding: 9px;
         position: absolute;
         background-color: rgba(0, 0, 0, 0.3);
         transition: all 0.4s ease-in-out;
         border-radius: 15px 0px 15px;

      }

      .image:hover .image-overlay {
         opacity: 1;
      }

      .title {
         color:#000;
         text-align: center;
         margin-top: 3%;
         font-weight: bold;
         font-size: 28px;

      }

      /*Footer*/
      footer {
         color: #fff;
         margin-top: 5%;
         font-size: 20px;
         text-align: center;
      }

      .information {
         width: 100%;
         background-color: #3f3c3c;
      }

      .information ul li {
         padding: 1%;
         text-align: right;
         display: inline-block;
      }

      .information ul li p {
         font-size: 16px;
      }

      .icon-footer {
         font-size: 30px;
         margin-right: 60px;
      }

      .end {
         width: 100%;
         padding: 0.5%;
         background-color: #38d39f;
      }
   </style>
</head>

<body class="antialiased">
   <header>
      <nav>
         <ul>
            @if (Route::has('login'))
            @auth
            @else
            <li><a href="{{ route('login') }}">دخول</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">تسجيل الدخول</a></li>
            @endif
            @endauth
            @endif
         </ul>
         <h1>مركز طبي&nbsp;<i class="fas fa-heartbeat icon_love"></i></h1>
      </nav>
   </header>
   <!---->

   <div id="slideshow">
      <p class="title" >أهلاً بكم في مركزنا الطبي</p>
      <!--start image slider-->
      <div class="cycle-slideshow">
         <img src="images/petr-magera-sKWfTQ8E_kU-unsplash.jpg">
         <img src="images/jc-gellidon-xX0NVbJy8a8-unsplash.jpg">
         <img src="images/atikah-akhtar-XJptUS8nbhs-unsplash.jpg">
         <img src="images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg">
         <img src="images/johny-georgiadis-9Wa1HgE1XlA-unsplash.jpg">
         <img src="images/ani-kolleshi-7jjnJ-QA9fY-unsplash.jpg">
         <img src="images/photo_2021-06-07_10-29-51.jpg">
      </div>
   </div>
   <section>
      <div>
         <p class="title">تعرّف إلى عيادات المركز الطبي</p>
      </div>
      <div class="twoclinic">
         <div class="clinic">
            <a href="/clinic_details/1">
               <div class="image image1">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة القلبية</h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/2">
               <div class="image image2">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة السنية</h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/3">
               <div class="image image3">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة العظمية</h2>
         </div>
      </div>

      <div class="twoclinic">
         <div class="clinic">
            <a href="/clinic_details/4">
               <div class="image image4">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2> العيادة الداخلية والهضمية</h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/5">
               <div class="image image5">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة العينية</h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/6">
               <div class="image image6">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة الجلدية</h2>
         </div>
      </div>

      <div class="twoclinic">
         <div class="clinic">
            <a href="/clinic_details/7">
               <div class="image image7">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>عيادة الأطفال </h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/8">
               <div class="image image8">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة الأذنية</h2>
         </div>
         <div class="clinic">
            <a href="/clinic_details/9">
               <div class="image image9">
                  <div class="image-overlay"></div>
               </div>
            </a>
            <h2>العيادة الصدرية</h2>
         </div>
      </div>

   </section>


   <footer>
      <div class="information">
         <ul>
            <li>العنوان<p>حلب الجديدة جانب مشفى الشهباء</p>
            </li>
            <li><i class="fas fa-map-marker-alt icon-f"></i></li>
            <li>رقم المركز<p>0999999999</p>
            </li>
            <li><i class="fas fa-phone icon-footer"></i></li>
         </ul>
      </div>
      <div class="end">
         <span>الحقوق محفوظة لعام 2021 ©</span>
      </div>
   </footer>

</body>

</html>
