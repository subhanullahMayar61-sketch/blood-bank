let homeCardSection=document.querySelector(".home-page-cards");
let homeCard=[
    {
        icon:"fa-solid fa-droplet",
        amount:'۳۳۵۰',
        title:'دویني اندازه',
    },
       {
        icon:"fa-solid fa-users",
        amount:' ۴۵۰۰',
        title:' وینه ورکوونکي ',
    },
       {
          icon:"fa-solid fa-user",
        amount:'۲۴۰۰',
        title:' ناروغان',
    },
       {
           icon:"fa-solid fa-circle-user",
        amount:'۱۵۰۰',
        title:'وینه غوښتونکي',
    }
  
];
for (let Card of homeCard){
    
    let card=document.createElement("div");
    card.className="home-cards";

    let Amount=document.createElement("strong");
    Amount.textContent=Card.amount;
    
    let Title=document.createElement("p");
    Title.textContent=Card.title;

    let Icon=document.createElement("i");
    Icon.className=Card.icon;

    card.append(Icon,Amount,Title);
    homeCardSection.append(card);

}
 let card=document.createElement("div");
    card.className="home-cards";
    card.id="About-our-system";
    let Title=document.createElement("h3");
    Title.textContent="زموږ د سیسټم په اړه";
    let content=document.createElement("p");
    content.textContent="د ویني دمدیریت سیستم ددي لپاره جوړشوي ترڅو دوینه ورکوونکو     ناروغانو دویني ذخیره او غوښتني پروسه موثره کړي زموږ هدف دادي چي دویني ورکوونی پروسه په اسانه او چټک ډول ترسره شی اوهیوادوال وکولاي شي چي په اساني سره په بیړنيو حالتونو کي ورته لاس رسي ولری ";
    let SysBtn=document.createElement("div");
    SysBtn.id="system-btn";
    let AboutLink=document.createElement("a");
    AboutLink.innerText="نور...";
    AboutLink.href="About.html";

    card.append(Title,content,SysBtn);
    SysBtn.append(AboutLink);
   homeCardSection.append(card);

//    Testomanials
let Testomanials=document.querySelector(".testimonials");
let TestomanialsTitle=document.createElement("h2");

let comment=[
    {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },
      {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },  {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },  {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9734;&#9734;",
    },  {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },  {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },  {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9733;&#9734;",
    },
    {
        Testcontent:"  دغه سیستم ډير منظم او اسانه دی. دویني ثبت او موندل ډیر ژر کیږي   ",
        name:"محمد ویس (وینه ورکوونکي)",
        stars:"&#9733; &#9733;&#9733;&#9734;&#9734;",
    },


];
let comments=document.createElement("div");
comments.className="comments";

for(let user of comment){
  
    let Article=document.createElement("article");
    Article.className="comment";
    
    let testcontent=document.createElement("p");
     testcontent.textContent=user.Testcontent;
  
     let Name=document.createElement("h4");
     Name.textContent=user.name;

     let Star=document.createElement("span");
     Star.innerHTML=user.stars;

     Article.append(testcontent,Name,Star);
     comments.append(Article);
}
Testomanials.append(TestomanialsTitle,comments);

// async function showdaa() {
//     let respose=await fetch("data.json");
//     let data=await respose.json();
//     let container=document.querySelector(".API-section");
//     for(let user of data.results){
//         let card=document.createElement("div");
//         card.classList.add("card");

//         let image=document.createElement("img");
//          image.src=user.picture.large;

//          let gender=document.createElement("h4");
//          gender.textContent=user.gender;

//         let username=document.createElement("h2");
//          username.textContent=user.name.first+""+user.name.last;

//          let email=document.createElement("p");
//          email.textContent=user.email;

//          let phone=document.createElement("p");
//          phone.textContent=user.phone;

//          card.append(image,username,email,gender,phone);
//          container.append(card);

//     }
    
// }
// showdaa();

