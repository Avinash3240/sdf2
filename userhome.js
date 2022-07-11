
let popup = document.querySelector(".Mycart");

function myFunction() {

  popup.classList.add('active');

}

function myFunc(){

popup.classList.remove('active');

}

let popup2 = document.querySelector(".adcart");

function myFunction2(){

  popup2.classList.add('active');
  popup.classList.remove('active');
 
  let quantity = document.getElementById("quantvalue").value;
  let size;
  if(document.getElementById("small1").checked){
    console.log("small");
    document.querySelector(".mycart #s1").innerHTML = "Small";
  }
  else if(document.getElementById("large1").checked){
    console.log("Large");
    document.querySelector(".mycart #s1").innerHTML = "Large";
  }
  else if(document.getElementById("normal1").checked){
    console.log("Normal");
    document.querySelector(".mycart #s1").innerHTML = "Normal";
  }

  document.querySelector(".mycart #q1").innerHTML = quantity;
  
}

function myFunc2(){

popup2.classList.remove('active');

}

let popup3 = document.querySelector(".mycart");


function myFunction3(){
  popup3.classList.add('active');
  console.log("hello");
}

function myFunc3(){
  popup3.classList.remove('active');
}


document.querySelector(".form-label").onclick=function(){
    document.querySelector(".products").classList.add('active');
    document.querySelector(".leftarrow").classList.add('active');
    document.querySelector(".replacecard").classList.add('active');
    let search = document.querySelector(".form-control").value;
    let replace = document.querySelector(".replacecard");
    let res = search.toLowerCase();
    let string = "raymondexclusive";
    switch(res){
      case string:
        replace.innerHTML = `<div id="container"><div class="card">
    <div class="container-image shirt-1"></div>
    <h4>Raymond Exclusive</h4>
    <button id="buy" onclick="myFunction()">Buy</button><br>
    <button id="more" class="1">Details</button>
  </div></div>`;
        break; 
    } 

}

document.querySelector(".leftarrow").onclick=function(){
    document.querySelector(".products").classList.remove('active');
    document.querySelector(".leftarrow").classList.remove('active');
    document.querySelector(".replacecard").classList.remove('active');
    window.location.reload();
}

document.querySelector(".cart0").onclick = function(){
  document.querySelector("#class").classList.add('active');
}

document.getElementById("clspbtn").onclick = function(){
  document.querySelector("#class").classList.remove('active');
}

let y = 0;
let x = document.getElementById("head");

function myfoot(){
  y++;
  if(1){
    x.innerHTML += `
    <tr>
    <td id="n1">${proname.innerHTML}</td>
    <td id="q1">${document.getElementById("quantvalue").value}</td>
    <td id="p1">-</td>
    <td id="t1">-</td>
    <td id="s1">${document.querySelector(".mycart #s1").innerHTML}</td>
    </tr>
    `
  }
}





/*

  }






`<div class="card">
    <div class="container-image shirt-1"></div>
    <h4>Raymond Exclusive</h4>
    <button id="buy" onclick="myFunction()">Buy</button><br>
    <button id="more" class="1">Details</button>
  </div>`
*/

let proname= document.getElementById("n1");



function buy1(){
  proname.innerHTML = "Raymond Excusive";
}
function buy2(){
  proname.innerHTML = "Arrow Womens Shirt";
}
function buy3(){
  proname.innerHTML = "Premium Raymond";
}
function buy4(){
  proname.innerHTML = "Raymonds checked shirt";
}
function buy5(){
  proname.innerHTML = "Premium Blue Arrow";
}
function buy6(){
  proname.innerHTML = "Arrow's new Designer";
}
function buy7(){
  proname.innerHTML = "Levi's Classic Blue";
}
function buy8(){
  proname.innerHTML = "Wrangler Blue Denim wear";
}
function buy9(){
  proname.innerHTML = "Flying Machine Black";
}
function buy10(){
  proname.innerHTML = "Levi's Women Wea";
}
function buy11(){
  proname.innerHTML = "Flying Machine Exclusive";
}
function buy12(){
  proname.innerHTML = "Wrangler Evergreen";
}
function buy13(){
  proname.innerHTML = "Monte Carlo Plain";
}
function buy14(){
  proname.innerHTML = "Sports Wear";
}
function buy15(){
  proname.innerHTML = "Hilfiger lined";
}
function buy16(){
  proname.innerHTML = "Womens Casual Adidas";
}
function buy17(){
  proname.innerHTML = "Monte Carlo Pink";
}
function buy18(){
  proname.innerHTML = "Monte Carlo Kids";
}
function buy19(){
  proname.innerHTML = "Nike Sports shoes";
}
function buy20(){
  proname.innerHTML = "Sketcher Stylish Footwear";
}
function buy21(){
  proname.innerHTML = "Sketcher Black";
}
function buy22(){
  proname.innerHTML = "Nike Women";
}
function buy23(){
  proname.innerHTML = "Heelys Pink";
}
function buy24(){
  proname.innerHTML = "Nike Sky Blue";
}
function buy25(){
  proname.innerHTML = "Levi's Premium";
}
function buy26(){
  proname.innerHTML = "Smiths Brown";
}
function buy27(){
  proname.innerHTML = "Smiths Premium Watch";
}
function buy28(){
  proname.innerHTML = "Levi's Modern";
}
function buy29(){
  proname.innerHTML = "Calvin Klein Golden";
}
function buy30(){
  proname.innerHTML = "Ck Black dial";
}