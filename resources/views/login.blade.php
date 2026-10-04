<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="25">
    <meta name="description" content="دا دویني دمدیریت سیستم دی چي دوینه ورکوونکو او ناروغان ترمنځ اړیکه رامنځته کوي ">
    <meta name="author" content="Subhanullah Mayar">
    <meta name="keywords" content="وینه ورکوونکی، ناروغان، دوینه ذخیره، دوینی دمدیریت سیستم ،دویني بانک">
    <meta http-equiv="refresh" content="10000">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>د ویني دمدیریت سیستم</title>

</head>
<body>
  <script defer src="login.js"></script>
    <main>

        <header class="home-header">

    <div class="logo-name">
        <img src="/asset/Images/logos.jpeg" alt="" id="logo">
        <h4>دویني دمدیریت سیستم </h4>
    </div>
    
    <input type="checkbox" id="menu-btn">

    <label for="menu-btn" class="menu-icon">☰</label>

    <nav>
        <ul class="navilnks">

            <li><a href="index.html"> <i class="fa-regular fa-house"></i>کور</a></li>

            <li><a href="About.html"> <i class="fa-solid fa-info" ></i>زموږ په اړه</a></li>

            <li class="dropdown">
                <a href="#" ><span style="color: white;">⬇</span>  مدیریت</a>
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

    <section class="login-hero-section">

     <form action="" enctype="multipart/form-data" method="post" class="login-form">

      <header><h1> سیستم ته داخل شی </h1> <p>خپل اکانټ ته لاس رسي وکړۍ</p></header>
     <br>
      
     <div class="login-input-feilds">  
         <label for="UserEmail">ایمیل:   </label>
      <input type="email" name="" id="UserEmail" placeholder="خپل ایمیل مو داخل کړي" class="EE"><br>
   
      <p id="para1"></p>
      <br>
      <label for="password">پاسورد:   </label>
        <input type="password" name="" id="userpassword" placeholder="خپل پاسورد مو داخل کړی" class="pp">
   
      <p id="para2"></p>
    </div>
   
      <br>
      <div id="rem-forget">
       <div><input type="checkbox" name="" id="">ما په یاد ولری</div>
        <label for="">ما هیر کړي؟</label>
      </div>
    <br>
    
    <button type="submit" id="login-btn" onclick="saveData()" style="cursor: pointer;">داخل شي</button>

    <br><br>
    <p id="from-msg"></p>
        <fieldset>
          <legend>یا د دغه سره داخل شي</legend> 
          <div>
            
          <a href="/auth/twitter"><i class="fa-brands fa-twitter" style="color: rgb(95, 95, 245);""></i> </a>
          <a href="/auth/google"><i class="fa-brands fa-google" style="color:tomato"></i></a>
          <a href="/auth"><i class="fa-brands fa-facebook" style="color: darkblue"></i></a> 
          </div>
       
        
        </fieldset>
           <div class="registeration-and-account">  <p>نه یی ریجستر؟</p>
          <a href="signup.html"> نوی اکانټ جوړ کړي؟</a></div>    
     </form>
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