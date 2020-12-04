var popcorn=0;
var coke = 0;
var candy = 0;
var nachos = 0;

// ensures after user change their ticket selection
// make all checkbox unchecked so user can select seat(s) over again.
function changeSeats() {
    for (var i = 1; i <= 5; i++) {
        for (var k = 1; k <= 9; k++ ) {
            var seat = document.getElementById("r"+i+"c"+k);
            
            if (!seat.disabled && seat.className == "free-seat") {
                seat.checked = false;
            }
            //console.log(seat.disabled);
        }
    }
}

// check how many tickets user have selected
// ensures user can't select more than how many ticket they selected
// if they try to select more than that cancel the action.
function checkSeatNum(event, s_id) {
    var selected_seat = document.getElementById(s_id);
    var adult = parseInt(document.getElementById("Adults").value);
    var senior = parseInt(document.getElementById("Seniors").value);
    var children = parseInt(document.getElementById("Children").value);
    if (adult == 0 && senior == 0 && children == 0) {
        alert("You must have at least Adult or Senior or Children 1 ticket.");
        
        event.preventDefault();
        
    }
    var max_seat =adult + senior + children;
    console.log(max_seat);
    var num_selected_seats=0;
    for (var i = 1; i <= 5; i++) {
        for (var k = 1; k <= 9; k++ ) {
            var seat = document.getElementById("r"+i+"c"+k);
            if (seat.checked == true && seat.className == "free-seat") {
                ++num_selected_seats;
            }
            if (num_selected_seats > max_seat) {   
                event.preventDefault();
            }
        }
    }
}

//Handling button to add popcorn to cart
function addPopcorn() {

    if(popcorn>=0){
        popcorn++;
        document.getElementById("popcornOut").value = popcorn;        
    }
    
}
//Handling button to remove popcorn from cart
function minusPopcorn() {
    if(popcorn >=1 ){
        popcorn--;
        document.getElementById("popcornOut").value = popcorn;
    }
    
}
//Handling button to add coke to cart
function addCoke() {

    if (coke >= 0 ) {
        coke++;
        document.getElementById("cokeOut").value = coke;
    }
    
}
//Handling button to remove coke from cart
function minusCoke() {
    if(coke >=1){
        coke--;
        document.getElementById("cokeOut").value = coke;
    }
}
//Handling button to add candy to cart
function addCandy() {
    if (candy >= 0 ) {
        candy++;
        document.getElementById("candyOut").value = candy;
    }
}
//Handling button to remove candy from cart
function minusCandy() {
     if(candy >=1 ){
        candy--;
        document.getElementById("candyOut").value = candy;
    }
}
//Handling button to add nachos to cart
function addNachos() {
    if (nachos >= 0 ) {
        nachos++;
        document.getElementById("nachosOut").value = nachos;
    }
}
//Handling button to remove nachos from cart
function minusNachos() {
     if(nachos >=1 ){
        nachos--;
        document.getElementById("nachosOut").value = nachos;
    }
}

//Gets Cost for various seat types
function getSeatCost(){

    var adult = parseInt(Adults.value);
    adult *= 12.99;

    var senior = parseInt(Seniors.value);
    senior *= 8.99;

    var child = parseInt(Children.value);
    child *= 0.99;

    return (adult+senior+child);
}

//Gets cost for food items
function getFoodCost(){

    var popcorn = parseInt(popcornOut.value);
    popcorn *= 5.00;

    var coke = parseInt(cokeOut.value);

    var candy = parseInt(candyOut.value);
    candy *= 5.00;

    var nachos = parseInt(nachosOut.value);
    nachos*= 8.00;

    return (popcorn+coke+candy+nachos);
}

//Calculates subtotals and totals, then sends values of each input to hidden inputs used for
//submission processing
function calcTotal(){

    //Used for submission processing
    getAdults();
    getSeniors();
    getChildren();

    getPopcorn();
    getCoke();
    getCandy();
    getNachos();

    //Used to get cost
    var sub = getSeatCost() + getFoodCost();
    var tax = sub*0.13;
    var total = sub + tax;

    document.getElementById("subtotal").innerHTML = sub.toFixed(2);
    document.getElementById("tax").innerHTML = tax.toFixed(2);
    document.getElementById("total").innerHTML = total.toFixed(2);

    getTotal();
}

//Below is all for submission processing
function getTotal(){
    document.getElementById("totalSubmission").value = document.getElementById("total").innerHTML;
}

function getAdults(){
    document.getElementById("adultSubmission").value = (Adults.value).toString();
}

function getSeniors(){
    document.getElementById("seniorSubmission").value = (Seniors.value).toString();
}

function getChildren(){
    document.getElementById("childrenSubmission").value = (Children.value).toString();
}

function getPopcorn(){
    document.getElementById("popcornSubmission").value = (popcornOut.value).toString();
}

function getCoke(){
    document.getElementById("cokeSubmission").value = (cokeOut.value).toString();
}

function getCandy(){
    document.getElementById("candySubmission").value = (candyOut.value).toString();
}

function getNachos(){
    document.getElementById("nachoSubmission").value = (nachosOut.value).toString();
}