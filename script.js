let starvalue = 0;
let disableBtn = document.getElementById("disableBtn");
disableBtn.disabled = true;

function addValueFunction( ValuePar ) {
document.getElementById("amount").value;

if(ValuePar.value == 'increase'){
    starvalue++;

}else{
    starvalue--;
}   
document.getElementById("amount").textContent= starvalue;

if(starvalue==0){
    disableBtn.disabled = true;   
}else{
    disableBtn.disabled = false; 
}

}