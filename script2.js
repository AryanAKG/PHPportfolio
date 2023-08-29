// Contact form

const form = document.getElementById('form');
const nameee = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
form.addEventListener('submit',(event)=>{
    event.preventDefault();
    validate();
})
const sendData=(sRate,count)=>{
    if(sRate===count){
        alert("Submitted Successfully");
    }
}
const successMsg=()=>{
     

   let formCon= document.getElementsByClassName('formControl');
   var count = formCon.length-1;
   for(var i=0;i<formCon.length;i++){
    if(formCon[i].className==="formControl success"){
        var sRate = 0 + i;
        console.log(sRate);
        sendData(sRate,count);
    }
    else{
        return false;
    }
   }
}

const isEmail=(emailVal)=>{
    var atSymbol = emailVal.indexOf("@");
    if(atSymbol<1) return false;
    var dot= emailVal.lastIndexOf(".");
    if(dot<=atSymbol+2) return false;
    if(dot===emailVal.length-1) return false;
    return true;
}
const validate=()=>{
    const nameVal = nameee.value.trim();
    const emailVal = email.value.trim();
    const phoneVal = phone.value.trim();
    
    if(phoneVal==""){
        setErrormsg(phone, 'phone cannot be null');
    }
    else if(phoneVal.length!=10){
        setErrormsg(phone, 'not a valid phone');
    }
    else{
        setSuccessmsg(phone);
    }

    if(emailVal===""){
        setErrormsg(email, 'email cannot be null');
    }
    else if(!isEmail(emailVal)){
        setErrormsg(email, 'not a valid email');
    }
    else{
        setSuccessmsg(email);
    }

    if(nameVal===""){
        setErrormsg(nameee, 'name cannot be null');
    }
    else if(nameVal.length<=2){
        setErrormsg(nameee, 'minimum 3 characters');
    }
    else{
        setSuccessmsg(nameee);
    }
    
    successMsg();
    
    
}
function setErrormsg(input,errormsgs){
    
    const small = input.parentElement.querySelector('small');
    input.parentElement.className = "formControl error";
    small.innerHTML = errormsgs;
}
function setSuccessmsg(input){
    const small = input.parentElement.querySelector('small'); 
    input.parentElement.className="formControl success";
    small.innerHTML = "success";
}
