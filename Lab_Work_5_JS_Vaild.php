<!DOCTYPE html>
<html>
    <head>
        <title>
            Lan Work 5 JS Valid
        </title>
    </head>
    <body>
        <form onsubmit="return SubmitInfo()">
        Name:
        <input type="text" id="name">
        ID:
        <input type="text" id="id">
        Age:
        <input type="text" id="age">
        Department:
        <select id="dipa">
            <option value="">--Select--</option>
            <option value="">CSE</option>
            <option value="">EEE</option>
            <option value="">BBA</option>
        </select>

        <div id="error"></div>
        <div id="Info"></div>

        <button type="submit"></button>

        </form>

        <script>
            function SubmitInfo()
            {
                var name=document.getElementById("name").value.trim();
                var id=document.getElementById("id").value.trim();
                var age=document.getElementById("age").value.trim();
                var department=document.getElementById("dipa").value.trim();

                var error=document.getElementById("error");
                var submit=document.getElementById("error");

                if(name==="" || id === "" || age === "" || department === "")
                {
                    error.innerHTML="Please fill all box";
                }
                if(isNaN(id))
                {
                    error.innerHTML="ID must be number";
                }

                submit.innerHTML=`
                Name: ${name}<br>
                ID: ${id}<br>
                Age: ${age}
                `;
                return false;
            }
        </script>
    </body>
</html>