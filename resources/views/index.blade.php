<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1000">
    <meta name="description" content="دا دویني دمدیریت سیستم دی چي دوینه ورکوونکو او ناروغان ترمنځ اړیکه رامنځته کوي ">
    <meta name="author" content="Subhanullah Mayar">
    <meta name="keywords" content="وینه ورکوونکی، ناروغان، دوینه ذخیره، دوینی دمدیریت سیستم ،دویني بانک">


<script defer src="{{asset('js/index.js')}}"></script>;

<title>د ویني دمدیریت سیستم</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
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

            <li id="home"><a href="index.html"> <i class="fa-regular fa-house" ></i>کور</a></li>

            <li><a href="About.html"> <i class="fa-solid fa-info" ></i>زموږ په اړه</a></li>

            <li class="dropdown">
                <a href="#" ><span style="color:white;">⬇</span>  مدیریت</a>
                <ul class="dropdown-menu">
                    <li><a href="donor.html"><i class="fa-solid fa-circle-user"></i> وینه ورکوونکي</a> </li>
                    <li><a href="patient.html"><i class="fa-solid fa-user"></i>  ناروغان</a> </li>
                    <li><a href="Blood-stock.html"> <i class="fa-solid fa-droplet" ></i>ذخیره</a> </li>
                </ul>      
            </li>

            <li><a href="login.html"> <i class="fa-solid fa-building-circle-arrow-right"></i>  ننوتل</a></li>
            <li><a href="contactUs.html"><i class="fa-solid fa-phone" ></i> اړیکي</a></li>
            <li id="registration"><a href="signup.html" ><i class="fa-solid fa-user-plus" ></i>  ریجستریشن</a></li>

        </ul>
    </nav>
    </div>
    <div>
      <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>

    </div>
</header>

    <section class="hero-section">
       <div class="hero-section-content">
              
        <h1 id="hero-heading" > وینه ورکړي ، </h1>
       
        <h1 >او ژوند وژغوري</h1>

        <p>زموږ هدف دادي چي وینه ورکوونکي او دناروغانو ترمنځ اړیکه رامنځته کړو ترڅو وینه په صحیح ډول انتقال شي</p>
   
          <div class="hero-section-link-btns">
            <a href="donor.html" id="donor-veiw-btn">View Donors</a>
           <a href="patient.html" id="Patient-view-btn">View Patient</a>
        </div>

       </div>
       <!-- <img src="/asset/Images/file_0000000003b872438fbdef03cc48e4b5.png" alt="" id="illustration_image"> -->
        <!-- <img src="/asset/Images/illu.png" alt="" id="illustration_image"> -->
   
      </section>

    <section class="home-page-cards">
      <!-- <div class="home-cards" id="blood-unit-card"><i class="fa-solid fa-droplet" ></i> <div id="blood-unit-content"><strong> ۳۳۵۰</strong><p> دویني اندازه</p>  </div></div>
      <div class="home-cards" id="donor-card"><i class="fa-solid fa-users"></i> <div id="donor-content"><strong> ۴۵۰۰</strong><p> وینه ورکوونکي</p>  </div></div>
      <div class="home-cards" id="patient-card">  <i class="fa-solid fa-user"></i> <div id="patient-content"><strong>۲۴۰۰</strong><p> ناروغان</p>  </div></div>
      <div class="home-cards" id="request-card"> <div id="request-content"><strong> ۱۵۰۰</strong><p> غوښتونکي</p>  </div></div>
       -->
      <!-- <div class="home-cards" id="About-our-system"><h3>زموږ د سیستم په اړه</h3><p>د ویني دمدیریت سیستم ددي لپاره جوړشوي ترڅو دوینه ورکوونکو     ناروغانو دویني ذخیره او غوښتني پروسه موثره کړي زموږ هدف دادي چي دویني ورکوونی پروسه په اسانه او چټک ډول ترسره شی اوهیوادوال وکولاي شي چي په اساني سره په بیړنيو حالتونو کي ورته لاس رسي ولری </p>
      
        <div id="system-btn"><a href="About.html"> نور ...</a></div>
      </div> -->
    </section>

      <section class="FKQ">

        <div class="fkq-content">

          <h2>هغه پوښتني چي بار بار شوي</h2>
          
          <details>
            <summary>     
                           <h4>ایا دا سیستم وړیا دي؟</h4>

            </summary>
                 <p>هو داسیسټم تاسوته وړیا خدمات وړاندي کوي تاسو کولاي شی چي ددي سیستم له هغه خدمات چي موږ یی وړاندي کوو ګټه ترینه واخلي  هیله ده چي ستاسو هر ضرورت ته جواب وواي</p>

          </details>
          <details>
                    <summary>     
                           <h4>ایا زموږ معلومات خوندي دي؟</h4>

            </summary>
                 <p>هو ستاسو معلومات په بشبړ ډول خوندي اوهیڅ کوم بهرتي عامل به ستاسو د معلومات د پټ پاته کیدو باعث ونه کرځي موږد ځانګړو امنیتي تدابیرو په کارولو سره ستاسو معلومات خوندي ساتو</p>

          </details>
             
          </details>
          <details>
            <summary>
                           <h4>د وینی د مدیریت سیستم څه شی دي؟</h4>

             </summary>
              <p>دا یو ډیجیټل سیستم دي چي دویني بانک ټول فعالیتونه لکه د ویني راټولول ذخیره کول او ویشل په منظم ډول اداره کوي </p>
          </details>
          <details>
            <summary>
                           <h4>څنګه ځانونه ریجستر کړم </h4>

             </summary>
                          <p>تاسو کولاي شی چي ځانونه د ریجستریشن د صفحي له لاري ریجستر کړي هلته به تاسو خپل معلومات داخل کړي او ځانونه په اسانه ډول ریجستر کړي</p>

          </details>
          <details>
      
            <summary>   
                  <h4>آیا وینه ورکونه خوندي ده ؟</h4>
            </summary>
            <p>هو وینه ورکونه په بشبړ ډول خوندي ده او د مرسته کوونکو د ساتني لپاره د روغتیا او خونديتوب سخت معیارونه تعقیبوي</p>
          </details>

          <details>
            <summary>     
                           <h4>څنګه موږ دویني غوښتنه کولای شو؟</h4>

            </summary>
                 <p>تاسو کولاي شی چي دویني دغوښتني لپاره هسپتالونو ته مراجعه وکړي  او د هغه ځایه د وینه غوښتنه وکړي</p>

          </details>
          <details>
            <summary>
              <h4>څوک کولاي شی وینه ورکړي؟</h4>
            </summary>
            <p>هر صحتمند انسان</p>
            <ul>
              <li>عمر یی ۱۸ او ۶۰ کاله وي</li>
               <li> وزن یی مناسب وی</li>
              <li>کومه جدي ناروغی ونه لري</li>

            </ul>
          </details>
        </div>
   
       
      </section>

      <section class="testimonials">
       
        <!-- <h2>د خلکو نظرونه زموږ په اړه</h2> 
       <div class="comments">  
      
        

        <article class="comment">
       
          <p>دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي </p>
          <h4>محمد ویس (وینه ورکوونکي)</h4>
           <span>&#9733; &#9733;&#9733;&#9733;&#9734;</span>
        </article>

        <article class="comment">
          <p>ما ددي ویب سایټ له لاري په کم وخت کي وینه پیداکړه  ډیر ښه خدمت دي مننه   </p>
          <h4>وحیدالله افغان (ناروغ)</h4>
           <span >&#9733; &#9733;&#9733;&#9733;&#9734;</span>
        </article>
        <article class="comment">
          <p> دویني ذخیره او مدیریت پروسه یی ډیره موثره او منظمه ده</p>
          <h4>اکرام الله مایار (وینه ورکوونکي)</h4>
           <span>&#9733; &#9733;&#9733;&#9734;&#9734;</span>
        </article>
        <article class="comment">
          <p> دا سیستم د بیړني حالت لپاره ډیر کټور دي وخت راسره سپموي</p>
          <h4>محمد ویس ( ناروغ)</h4>
           <span>&#9733; &#9733;&#9733;&#9734;&#9734;</span>
        </article>
        <article class="comment">
          <p>ساده انترفیس لري چي د هر چا دپوهاوي وړ دي حتی دغیر مسلکي خلکو</p>
          <h4>وفا میاخیل(کاروونکي)</h4>
           <span>&#9733; &#9733;&#9733;&#9734;&#9734;</span>
        </article>
        <article class="comment">
          <p>د ریجستریشن او داخلیدو پروسه یی ډیره اسانه ده هیڅ مشکل پکي نه وی</p>
          <h4>(دلابراتوار کارکوونکي) هارون خان</h4>
           <span>&#9733; &#9733;&#9733;&#9733;&#9734;</span>
        </article>
         </div> -->
      </section>
   

   
    <footer >

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
<!--   
       <div class="term-and-policy">
      <a href="term-of-services.html"> Term of Services</a>|
    <a href="privacy.html">privacy policy</a>
  </div>   -->
  </footer>
</main>
    
</body>
</html>