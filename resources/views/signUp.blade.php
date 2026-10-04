<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1000">
    <meta name="description" content="دا دویني دمدیریت سیستم دی چي دوینه ورکوونکو او ناروغان ترمنځ اړیکه رامنځته کوي ">
    <meta name="author" content="Subhanullah Mayar">
    <meta name="keywords" content="وینه ورکوونکی، ناروغان، دوینه ذخیره، دوینی دمدیریت سیستم ،دویني بانک">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   <title>د ویني دمدیریت سیستم</title>
<script defer src="signup.js"></script>
</head>
<body>
    <main>
        <header class="home-header">

    <div class="logo-name">
        <img src="{{ asset('images/logos.jpeg')}}" id="logo">
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
    
     <section class="signup-hero-section">
   
        <form action="" method="post" enctype="multipart/form-data" id="signup-form">
            <header class="signup-form-header">
                <h2 >اکانټ جوړ کړی</h2>
            <p>دویني بانک  سره یو ځاي شی</p></header>
            <label for="full-name">نوم</label><br>
            <input type="text" name="" id="full-name" placeholder="خپل نوم داخل کړي" class="name"><br>
            <p id="namepara"></p>
            <br>
            <label for="email">ایمیل</label><br>
            <input type="email" name="" id="email" placeholder="ایمیل مو داخل کړي" class="EMAIL"><br>
            <p id="Email-msg"></p>
            <br>
            <label for="blood-group">دویني ګروف</label><br>
            <input type="text" name="" id="blood-group" placeholder="د ویني ډول مو داخل کړي" class="group"><br>
            <p id="blood-msg"></p>
            <br>
            <label for="">د زیږیدو نیټه</label><br>

            <input type="date" name="" id="Birth-date" class="DOB"><br>
            <p id="result"></p><br>
            
            <input type="password" name="Pass" id="Pass" placeholder="پاسورد" class="PAw"><br><br>
            
            <button type="submit" id="signup-form-btn" onclick="Storedata()" style="cursor: pointer;">اکانټ جوړکړي</button><br><hr><br>
              <p id="signup-Para"></p>
         
              <div><a href="login.html">داخل شی</a> ایا تاسو له   اکانټ لری؟</div> 
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