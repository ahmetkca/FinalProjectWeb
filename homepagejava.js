var slidecount = 0;
var slidearray = [0,1,2,3,4];
var max = slidearray.length - 1;

function nextslide(){

    slidecount++;

    if(slidecount > max){
        slidecount = 0;
    }

    slide();

}

function prevslide(){

    slidecount--;

    if(slidecount < 0){
        slidecount = max;
    }

    slide();

}

function slide(){
    for(var i = 0; i < slidearray.length; i++){
        if( i == slidecount){
            document.getElementById(slidecount.toString()).style.display = 'block';
        }
        else{
            document.getElementById(i.toString()).style.display = 'none';
        }
        document.getElementById("slidenum").innerHTML = (slidecount+1) + "/" + (max+1);
    }
}