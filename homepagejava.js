//intitalize variables (only thing required to change for slideshow length is size of array)
var slidecount = 0;
var slidearray = [0,1,2,3,4];
var max = slidearray.length - 1;

//Moves to next slide
function nextslide(){

    slidecount++;

    if(slidecount > max){
        slidecount = 0;
    }

    slide();

}

//Moves to previous slide
function prevslide(){

    slidecount--;

    if(slidecount < 0){
        slidecount = max;
    }

    slide();

}

//checks elements in the array (ie, checks each images id), if images id does not match the current slidecount
//(dictated by the next and previous buttons), it will set the image to be hidden. If there is a match, it
//will show. Also displays index of current image out of total
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