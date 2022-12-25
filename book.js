// Toggling Search Button
var bool = false;
var btn = document.getElementsByClassName('search-btn');
var disp = document.getElementsByClassName('display-change');
var searchSpan = document.getElementsByClassName('search-span')[0];
var error = document.getElementsByClassName('error')[0];
let count = 0;

var chek =  document.getElementById("in");

chek.value = formatDate();

function twoDigits(num) {
    return num.toString().padStart(2, '0');
}

function formatDate(){
    var currDate = new Date();
    return  [
        currDate.getFullYear(), twoDigits(currDate.getMonth() + 1), twoDigits(currDate.getDate()),
    ].join('-');
}

var taxAmount = document.getElementsByClassName('tax-amount')[0];

function checkBooking(clicked){
    var priceRoom = document.getElementsByClassName('room-price')[clicked].innerHTML;
    localStorage.setItem("priceRoom", priceRoom);
}

function showResults(){  
    var checkIn = document.forms.myForm.in.value;
    var checkOut = document.forms.myForm.out.value;
    var room = document.forms.myForm.room.value;
    var adult = document.forms.myForm.adult.value;
    var child = document.forms.myForm.child.value; 
    
    function TDate() {
        var futureDate = document.getElementById("out").value;
        var currDate = new Date();
    
        if (new Date(futureDate).getTime() <= currDate.getTime()) {            
              return false;
         }
        var totalDays = (new Date(futureDate).getTime() - currDate.getTime()) / (1000*60*60*24);
        localStorage.setItem("totalDay",totalDays);
        return true;        
    }

    localStorage.setItem("roomNum" , room);
    localStorage.setItem("adultNum" , adult);
    localStorage.setItem("childNum" , child);

    // Search Validations    

    if(TDate() === true) {
        if(checkOut !== "" && checkIn !== "" && room !== "" && adult !== "" &&  child !== "" && room > 0 && adult > 0 && child >= 0) {
            count = count + 1;
            if(count == 1){
            searchSpan.style.display = "inline";
            error.style.display = "none";
            setInterval(() => {           
                bool = true;
                if(bool == true) {
                    searchSpan.style.display = "none";
                    for (let index = 0; index < disp.length; index++) {
                        disp[index].style.display = "block";                      
                    }                    
                }
            }, 3000); 
        }
        }
    
        else {
            alert("Please fill all fields correctly");
        }
    }

    else {
        alert("The Date must be Bigger or Equal to today date");
    }
    }            