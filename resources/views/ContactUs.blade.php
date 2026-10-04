<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10000">
    <meta name="description" content="دا دویني دمدیریت سیستم دی چي دوینه ورکوونکو او ناروغان ترمنځ اړیکه رامنځته کوي ">
    <meta name="author" content="Subhanullah Mayar">
    <meta name="keywords" content="وینه ورکوونکی، ناروغان، دوینه ذخیره، دوینی دمدیریت سیستم ،دویني بانک">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

 <title>د ویني دمدیریت سیستم</title>  
  </head>
<body>
    <main>
   <header class="home-header">

    <div class="logo-name">
 <img src="{{'images/logos.jpeg'}}" alt="" id="logo">
         <h4>دویني دمدیریت سیستم </h4>
    </div>
    
    <input type="checkbox" id="menu-btn">

    <label for="menu-btn" class="menu-icon">☰</label>

    <nav>
        <ul class="navilnks">

            <li><a href="index.html"> <i class="fa-regular fa-house"></i>کور</a></li>

            <li><a href="About.html"> <i class="fa-solid fa-info" ></i>زموږ په اړه</a></li>

            <li class="dropdown">
                <a href="#" ><span style="color: red;">⬇</span>  مدیریت</a>
                <ul class="dropdown-menu">
                    <li><a href="donor.html"><i class="fa-solid fa-users"></i> وینه ورکوونکي</a></li>
                    <li><a href="patient.html"><i class="fa-solid fa-user"></i>  ناروغان</a></li>
                    <li><a href="Blood-stock.html"> <i class="fa-solid fa-droplet" ></i>ذخیره</a></li>
                </ul>      
            </li>

            <li><a href="login.html"> <i class="fa-solid fa-building-circle-arrow-right"></i>  ننوتل</a></li>
            <li><a href="contactUs.html"><i class="fa-solid fa-phone" ></i> اړیکي</a></li>
            <li id="registration"><a href="signup.html"><i class="fa-solid fa-user-plus" ></i>  ریجستریشن</a></li>

        </ul>
    </nav>
    <div>
      <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>

    </div>
</header>
    <section class="contact-hero-section">
        <Div class="contactus">
         <h1>زموږ سره اړیکه ونیسي</h1>
        <div class="contact-tools" ><i class="fa-solid fa-phone" style="color: green;"></i><div><h5>شماره</h5><p> ۹۳۷۸۶۳۸۶۱۴۰ +</p></div></div>
  <hr>
        <div class="contact-tools" id="contact-tools-email"><i class="fa-regular fa-envelope" ></i><div><h5>ایمیل</h5>  <p>  SubhanullahMayar@gmial.com</p></div></div>
  <hr>
          <div class="contact-tools"> <i class="fa-solid fa-location-dot" style="color: red;"></i> <div><h5>موقعت </h5 ><p>kandahar Afghanistan</p> </div>  </div>
        <div class="contact-us-footer">
           <a href="http://www.twitter.com"><i class="fa-brands fa-twitter" style="color: rgb(95, 95, 245);""></i> </a>
          <a href="http://www.google.com"><i class="fa-brands fa-google" style="color:tomato"></i></a>
          <a href="http://www.facebook.com"><i class="fa-brands fa-facebook" style="color: darkblue"></i></a> 
        </div>
        </Div>


        <div class="get-in-touch">
          <h1>زموږ سره اړیکه ونیسي</h1>
          <form action="" method="post" enctype="multipart/form-data" id="sendData" >
            <label for="username">ستاستو نوم:</label><br>
            <input type="text" name="yourname" id="username" placeholder="ستاستو نوم"><br>
            <p id="usernameMsg"></p>
            <br>
            
            <label for="contactEmail">ستاستو ایمیل:</label><br>
            <input type="email" name="youremail" id="contactEmail" placeholder="ستاستو ایمیل"><br>
            <p id="CEmailMsg"></p>
            <br>
            
            <label for="subject">موضوع :</label><br>
            <input type="text" name="subject" id="subject" placeholder="موضوع"><br>
            <p id="subjectMsg"></p>
            <br>
            
            <label for="message">پیغام</label><br>
            <textarea name="message" id="message" rows="10" cols="100" style="resize: none;">
           
            </textarea>
           <br><br>
           <button type="submit" style="cursor:pointer ;">پیغام ولیږي</button>
           <br>
            <p id="contactmsg"></p>
          </form>
        </div>
    </section>
        <footer>

     <div class="contact us">
         <h1>اړیکه</h1>
         <p>تاسو کولاي شی زموږ سره دلاندی لارو اړیکي ونیسي</p>
         <div><i class="fa-regular fa-envelope" style="color: #1E88E5;" ></i> <strong> ایمیل :</strong> SubhanullahMayar@gmial.com</div>
          <div><i class="fa-solid fa-phone" style=" color: green;"></i> <strong> تلیفون نمبر:</strong> +۹۳۷۸۶۳۸۶۱۴۰</div>
         <div><i class="fa-solid fa-location-dot" style="color: red;"></i> <strong> ادرس :</strong> کندهار/ افغانستان </div>
          <div><i class="fa-brands fa-facebook" style="color: darkblue;"></i>  <strong> فیسبوک صفحه:</strong>دویني بانک </div>

      </div>
     

   
    <p> &copy;د ویني بانک دمدیریت  سیستم د سبحان الله لخوا جوړشوي | ټول حقوق خوندي دي . </p>
 <div class="term-and-privacy">
      <a href="term-of-services.html">Term of Services</a>|
      <a href="privacy.html">Privacy policy</a>
    </div>
    </footer>
    </main>
</body>
</html>
<script   src="contactUs.js"></script>