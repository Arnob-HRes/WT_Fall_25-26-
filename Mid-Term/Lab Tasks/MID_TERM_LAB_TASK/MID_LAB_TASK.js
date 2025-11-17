function Reg(){
    let FullName=document.getElementById("I1").value;
    let Email=document.getElementById("I2").value.trim();
    let PhoneNumber=document.getElementById("I3").value.trim();
    let Password=document.getElementById("I4").value.trim();
    let ConfirmPassword=document.getElementById("I5").value.trim();
    let DIV1=document.getElementById("D1");
    let DIV2=document.getElementById("D1");

    if(FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword === ""){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Everything must not be empty";
    }
    
    let ValidEmail = Email.includes("@");

    if(ValidEmail === false){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Invalide Email! Must containt '@'";
    }

    if(isNaN(PhoneNumber)){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Phone Number Must be Numbers";
    }

    if(Password != ConfirmPassword){
        DIV1.style.backgroundColor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Password and Confirm Password must match";
    }

    DIV2.innerHTML=`
    Registration Successful <br>
    Name: ${FullName} <br>
    Email: ${Email} <br>
    Phone Number: ${PhoneNumber}
    `;
}