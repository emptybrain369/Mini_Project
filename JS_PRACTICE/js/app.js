var count=0;
function IncreaseBtn(){
    count+=1;
    document.getElementById("countVal").innerHTML=count;
}
function ResetBtn(){
    count=0;
    document.getElementById("countVal").innerHTML=count;
}
document.getElementById("piw").onclick =function(){
    if(count>0){
        count-=1;
    }
    else{
        count=0; 
    }
    document.getElementById("countVal").innerHTML=count;
}
function range(){
    var range=document.getElementById("range").value;
    document.getElementById("countVal").innerHTML=range;
}