<!DOCTYPE html>
<html>
    <head>
        <title>
            Lab Task 5
        </title>
    </head>
    <body>
        <center>
            <h1 id="T">
                Light Mode
            </h1>
            <button id="B" onclick="toggle()" > Switch </button>
        </center>
        <script>
            function toggle() 
            {
                var body= document.body;
                var title=document.getElementById("T");
                var button= document.getElementById("B");

                if(body.style.backgroundColor==="black")
               {
                   body.style.backgroundColor = "white";
                   body.style.color="black";
                   title.innerHTML="Light Mode";
                   button.innerHTML="Switch to Dark Mode";
               }
                else
               {
                   body.style.backgroundColor = "black";
                   body.style.color="white";
                   title.innerHTML="Dark Mode";
                   button.innerHTML="Switch to Light Mode";
               }
            }
        </script>
    </body>
</html>