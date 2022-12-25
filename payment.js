// Payment System

window.onload = function(){
    var getRoom = localStorage.getItem("roomNum");
    var getRoomPrice = localStorage.getItem("priceRoom");
    var getAdult = localStorage.getItem("adultNum");
    var getChild = localStorage.getItem("childNum");
    var totalDay = localStorage.getItem("totalDay");
    var getTax = document.getElementsByClassName('taxCount')[0].innerHTML;

    var roundOff = Math.floor(totalDay)

    document.getElementsByClassName('romPrice')[0].innerHTML = "₹" + (getRoom*getRoomPrice*roundOff).toLocaleString();

    document.getElementsByClassName('adultPrice')[0].innerHTML = "₹" + (getAdult*1200).toLocaleString();

    document.getElementsByClassName('childPrice')[0].innerHTML = "₹ " + (getChild*800).toLocaleString();

    document.getElementsByClassName('currentRoomPrice')[0].innerHTML = "₹" + (getRoomPrice*1).toLocaleString();

    var total = getRoom*getRoomPrice*roundOff + getAdult*1200 + getChild*800 + 2300*roundOff;
    document.getElementsByClassName('total')[0].innerHTML = "₹" + (total).toLocaleString();
    document.getElementById("totalamount1").setAttribute('value', total);
    document.getElementById("totalamount2").setAttribute('value', total);
    document.getElementById("totalamount3").setAttribute('value', total);
    document.getElementById("totalamount4").setAttribute('value', total);
}

var bool = false;
var credit = document.querySelectorAll('.credit-display');
var payBtn= document.getElementsByClassName('pay-btn');
var cardBtn = document.querySelectorAll('.card-box')
let count = 0;

let activeBtn = "cdt"
showDiv(activeBtn);

cardBtn.forEach((btn) => {
    btn.addEventListener('click' , ()=>{
        resetDiv();
        showDiv(btn.id);
        btn.classList.add('active-btn');
    })
})

function resetDiv(){
    cardBtn.forEach((btn)=>{
        btn.classList.remove('active-btn');
    })
}

function showDiv(newBtn){
    activeBtn = newBtn;
    credit.forEach((item) => {
        if(item.classList.contains(activeBtn)){
            item.style.display = "flex";
        }
        else {
            item.style.display = "none";
        }
    })
}