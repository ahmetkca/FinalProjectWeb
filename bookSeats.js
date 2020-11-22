var popcorn=0;
var coke = 0;
var candy = 0;
var nachos = 0;

function checkSeatNum(event, s_id) {
    var selected_seat = document.getElementById(s_id);
    var adult = parseInt(document.getElementById("Adults").value);
    var senior = parseInt(document.getElementById("Seniors").value);
    var children = parseInt(document.getElementById("Children").value);

    if (adult == 0 && senior == 0 && children == 0) {
        alert("You must have at least Adult or Senior or Children 1 ticket.");
        //selected_seat.setAttribute("checked", "false");
        event.preventDefault();
        //return false;
    }

    var max_seat =adult + senior + children;
    console.log(max_seat);
    var num_selected_seats=0;
    for (var i = 1; i <= 5; i++) {
        for (var k = 1; k <= 9; k++ ) {
            var seat = document.getElementById("r"+i+"c"+k);
            if (seat.checked == true) {
                ++num_selected_seats;
            }
            
            if (num_selected_seats > max_seat) {
                //selected_seat.setAttribute("checked", "false");
                event.preventDefault();
                //return false;
            }
        }
    }
    //return true;
}

function addPopcorn() {

    if(popcorn>=0){
        popcorn++;
        document.getElementById("popcornOut").value = popcorn;        
    }
    
}

function minusPopcorn() {
    if(popcorn >=1 ){
        popcorn--;
        document.getElementById("popcornOut").value = popcorn;
    }
    
}

function addCoke() {

    if (coke >= 0 ) {
        coke++;
        document.getElementById("cokeOut").value = coke;
    }
    
}

function minusCoke() {
    if(coke >=1){
        coke--;
        document.getElementById("cokeOut").value = coke;
    }
}

function addCandy() {
    if (candy >= 0 ) {
        candy++;
        document.getElementById("candyOut").value = candy;
    }
}

function minusCandy() {
     if(candy >=1 ){
        candy--;
        document.getElementById("candyOut").value = candy;
    }
}

function addNachos() {
    if (nachos >= 0 ) {
        nachos++;
        document.getElementById("nachosOut").value = nachos;
    }
}

function minusNachos() {
     if(nachos >=1 ){
        nachos--;
        document.getElementById("nachosOut").value = nachos;
    }
}