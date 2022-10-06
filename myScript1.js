let a = document.getElementById("img1");
let c = document.getElementById("img2");
let b = ["English","Arabic","Svenska"];
let f = ["Guest.php","Guest(AR).php","Guest(SV).php"];
let e = document.getElementById("Home");
let z = "";
function Languages(x){
    if(x == 1){
        for(i = 0;i < b.length ; i++ ){
            z += "<li class='spec'><a href='"+f[i]+" '>"+b[i]+"</a></li>" + "<br>";
             c.innerHTML = "<li><a id='img2'><img src='Earth-Stickers-white-6083-removebg-preview.png' height='30px' width='30px' onclick='Languages(0)'></a></li>";
                }
        }else{
          z = "";
          c.innerHTML = "<a id='img2'><img src='Earth-Stickers-white-6083-removebg-preview.png' height='30px' width='30px' onclick='Languages(1)'></a>";
            }
        a.innerHTML = z;

            }

let a4 = document.getElementById("img1");
let c4 = document.getElementById("img2");
let b4 = ["English","Arabic","Svenska"];
let f4 = ["Admin.php","Admin(AR).php","Admin(SV).php"];
let e4 = document.getElementById("Home");
let z4 = "";
function Languagess(x){
    if(x == 1){
        for(i = 0;i < b4.length ; i++ ){
            z += "<li class='spec'><a href='"+f4[i]+" '>"+b4[i]+"</a></li>" + "<br>";
             c.innerHTML = "<li><a id='img2'><img src='Earth-Stickers-white-6083-removebg-preview.png' height='30px' width='30px' onclick='Languagess(0)'></a></li>";
                }
        }else{
          z = "";
          c.innerHTML = "<a id='img2'><img src='Earth-Stickers-white-6083-removebg-preview.png' height='30px' width='30px' onclick='Languagess(1)'></a>";
            }
        a.innerHTML = z;

            }


             
let a2 = document.getElementById("Gallery");
let b2 = ["d53bcb96-8285-4b02-93e0-92463226d3be.jpg","7613be26-0bb0-441f-9975-aa7b5f3ded4e.jpg","d7920e73-14b1-4d87-80c3-ac22cc9a3204.jpg"];
let i2 = 0;
let interval = setInterval(Gallery,1000);
function Gallery(){
    if( i2 > 2){
        i2 = 0;
    }else{
         a2.innerHTML = " <img src='"+b2[i2]+"' height='500px' width='400px'>";
    }
    i2 = (i2+1)%3;
}



let x = document.getElementById("text1");
let a9 = setInterval(myFunction,1000);
let i3 = 0;
let word;
x.style.fontSize = "40px";
x.style.color = "black";
x.style.textAlign = "Center";
function myFunction(){
     if(i3 == 0){
       word = "CLOTHES";
     }else if(i3 == 1){
       word = "FOOD";
     }else if(i3 == 2){
       word = "FURNITURE";
     }else{
       i3 = 0;
     }
     x.innerHTML = word;
     i3 = (i3 + 1)%3;
    }

let a10 = document.getElementById("pass1");
let a11 = document.getElementById("pass2");
let a12 = document.getElementById("show");
let a13 = setInterval(compare,500);
function compare(){
    if(a10.textContent.toString == a11.textContent.toString){
      a12.innerHTML = "";
    }else{
      a12.innerHTML = "Password don't match";
    }
}


let m1 = document.getElementById("JHL");
let m2 = " <li id='JHL'><a href='#'>User</a></li>";
function Loged(x){
  if(x == 1){
  m1.innerHTML= m2;
}else{
  m1.innerHTML= "LOGIN";
}
}

