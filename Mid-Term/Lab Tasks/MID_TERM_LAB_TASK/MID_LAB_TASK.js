function Reg(){
    let FullName=document.getElementById("I1").value;
    let Email=document.getElementById("I2").value.trim();
    let PhoneNumber=document.getElementById("I3").value.trim();
    let Password=document.getElementById("I4").value.trim();
    let ConfirmPassword=document.getElementById("I5").value.trim();
    let DIV1=document.getElementById("D1");
    let DIV2=document.getElementById("D2");

    if(FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword === ""){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Everything must not be empty";
        return false;
    }
    
    let ValidEmail = Email.includes("@");

    if(ValidEmail === false){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Invalide Email! Must containt '@'";
        return false;
    }

    if(isNaN(PhoneNumber)){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Phone Number Must be Numbers";
        return false;
    }

    if(Password != ConfirmPassword){
        DIV1.innerHTML = "Password and Confirm Password must match";
        return false;
    }

    DIV2.innerHTML=`
    Registration Successful <br>
    Name: ${FullName} <br>
    Email: ${Email} <br>
    Phone Number: ${PhoneNumber}
    `;

    return false;
}

function AddActivity(){
    let Acti=document.getElementById("I6").value;
    let DIV3=document.getElementById("D3");

    DIV3.append(Acti);
    return false;
}

function RemoveActivity(){
    let DIV4=document.getElementById("D3");

    DIV4.remove();
    return false;
}