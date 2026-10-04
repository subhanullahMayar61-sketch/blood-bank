<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <meta name="description" content="دا دویني دمدیریت سیستم دی چي دوینه ورکوونکو او ناروغان ترمنځ اړیکه رامنځته کوي ">
    <meta name="author" content="Subhanullah Mayar">
    <meta name="keywords" content="وینه ورکوونکی، ناروغان، دوینه ذخیره، دوینی دمدیریت سیستم ،دویني بانک">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>About</title>
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
       <section class="Donor-hero-section">
        <div id="donor-section-content"> 
        <h1>وینه ورکوونکي</h1>
        <hr>
     <p>هغه کسانو کومو چي وینه یی ورکړي</p>
    </div>
    </section>
    <form action="" enctype="multipart/form-data" method="post" class="donor-search-form">
        <fieldset class="donor-field">
            <legend>دلته تاسو هغه اشخاص پیداکولي شی کومو چي وینه ورکړي ده  </legend>
           <label for="search">
              <input type="search" name="" id="search" placeholder="دلته سرچ کړي" >
                <i class="fa-solid fa-magnifying-glass" style="color: rgb(237, 24, 24);"></i>
        </label>
        </fieldset>
    </form>

       <section class="Donors-info">
        <div  class="donor-cards" id="donor-card1"> <img src="../Images/donor-card1-img.jpeg" alt=""><div class="donor-card-content" ><h3>محمد ولي</h3><p><strong>-AB</strong>کابل</p></div></div>
        <div  class="donor-cards" id="donor-card2"><img src="Images/donor-card2-img.jpeg" alt=""> <div class="donor-card-content"><h3>حمزه </h3><p><strong>+A</strong> کندهار</p></div> </div>
        <div  class="donor-cards" id="donor-card3"><img src="Images/donor-card3-img.jpeg" alt=""><div class="donor-card-content"> <h3>لیلا</h3><p><strong>+AB</strong>بلخ</p></div></div> 
        <div  class="donor-cards" id="donor-card4"><img src="Images/donor-card6-img.png" alt=""><div class="donor-card-content"><h3>محمود</h3> <p><strong>+AB</strong> خوست</p></div></div> 
        <div class="donor-cards" id="donor-card5"><img src="Images/donor-card5-img.jpeg" alt=""><div class="donor-card-content"><h3>فرهاد</h3><p><strong>-O</strong>وردګ</p></div></div> 
        <div  class="donor-cards" id="donor-card6"><img src="Images/donor-card4-img.jpeg" alt=""><div class="donor-card-content"><h3>زهرا</h3><p><strong>-B</strong>هیرات</p></div></div>
    </div>
    </section>
      
    <section class="donor-save-life">
      <div id="donor-save-life-content"><p>ستاسو وینه کولاي شی ژوند  وژغوري نو راشي او د همکاري مو دخپلو بیوزلو هیودوالو سره وکړي</p>
      <a href="signup.html">وینه ورکړي</a>
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
