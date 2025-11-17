function Reg(){
    let FullName=document.getElementById("I1").value;
    let Email=document.getElementById("I2").value.trim();
    let PhoneNumber=document.getElementById("I3").value.trim();
    let Password=document.getElementById("I4").value.trim();
    let ConfirmPassword=document.getElementById("I5").value.trim();
    let DIV=document.getElementById("D1");

    if(FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword === ""){
        DIV.style.backgroundColor = "indianred";
        DIV.style.color = "white";
        DIV.innerHTML = "Everything must not be empty";
    }
    
    let ValidEmail = Email.includes("@");

    if(ValidEmail === false){
        DIV.style.backgroundColor = "indianred";
        DIV.style.color = "white";
        DIV.innerHTML = "Invalide Email! Must containt '@'";
    }

    if(isNaN(PhoneNumber)){
        DIV.style.backgroundColor = "indianred";
        DIV.style.color = "white";
        DIV.innerHTML = "Phone Number Must be Numbers";
        return false;
    }

    if(Password != ConfirmPassword){
        DIV.style.backgroundColor = "indianred";
        DIV.style.color = "white";
        DIV.innerHTML = "Password and Confirm Password must match";
    }

    DIV.innerHTML=`
    Registration Successful <br>
    Name: ${FullName} <br>
    Email: ${Email} <br>
    Phone Number: ${PhoneNumber}
    `;
}