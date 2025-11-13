<!DOCTYPE html>
<head>
    <title>
        LAB TASK 3
    </title>
</head>
<style>
    h3{
        color: red;
        font-size: 25px;
    }
</style>
<body>
    <center>
        <table>
           <h3> Student Registration Information </h3>
           <tr>
             <td>First name</td>
           </tr>
           <tr>
             <td><input type="text"></td>
            </tr>
           <tr>
             <td>Last Name</td>
           </tr>
          <tr>
             <td><input type="text"></td>
          </tr>
          <tr>
             <td>Last Name</td>
           </tr>
          <tr>
             <td><input type="text"></td>
          </tr>
          <tr>
             <td><label for="Program/Major">Program/Major <br></label></td>
          </tr>
          <tr> <td><select name="Program/Major" id="Program/Major">
         <option value="Bsc CSE">Bsc CSE</option>
         <option value="Bsc CoE">Bsc CoE</option>
         <option value="Bsc EEE">Bsc EEE</option>
         <option value="Bsc IPE">Bsc IPE</option>
         </select>
         </td>
         </tr>
         <tr>
             <td><label for="Department">Department <br></label></td>
          </tr>
          <tr> <td><select name="Department" id="Department">
                 <option value="Department of Data Science">Department of Data Science</option>
                 <option value="Department of Chemistry">Department of Chemistry</option>
                 <option value="Departments of Mathematics">Departments of Mathematics</option>
                 <option value="Department of Network Engineering">Department of Network Engineering</option>
                 <option value="Department of Physics">Department of Physics</option>
                 <option value="Department of Computer Science">Department of Computer Science</option>
                 </select>
               </td>
         </tr>
         <tr>
             <td>
                 Phone Number
             </td>
        </tr>
         <tr>
             <td>
                 <input type="text">
             </td>
          </tr>
         <tr>
             <td>
                 University Email
             </td>
        </tr>
         <tr>
             <td>
                 <input type="text">
             </td>
          </tr>
        <tr>
             <td>
                 Creat Password
             </td>
        </tr>
         <tr>
             <td>
                  <input type="text">
             </td>
          </tr>
        <tr>
             <td>
                 Conform Password
             </td>
        </tr>
         <tr>
             <td>
                 <input type="text">
             </td>
          </tr>
         <tr>
             <td>
                 Semister Selection
             </td>
        </tr>
        <tr>
             <td>
                 <input type="radio"> Summer 2024
                 <input type="radio"> Fall 2024
                 <input type="radio"> Spring 2025
                 <input type="radio"> Other/Special Term
             </td>
         </tr>
         <tr>
             <td>
                 Requested Credit Load (Max 15)
             </td>
         </tr>
         <tr>
             <td><input type="text"></td>
          </tr>
         <tr>
             <td><input type="checkbox"> I require academic advising before final redistration </td>
         </tr>

         <tr>
             <td><h2 style="color: red; font-size: 25px;">Course Selection</h2></td>
         </tr>
         <tr>
          <td>
              <input type="checkbox"> MATH 1201 (Calculus 1)
              <input type="checkbox"> CS 2105 (Calculus 1)
              <input type="checkbox"> ECON 1001 (Microeconomics)
         </td>
         </tr>
         <tr>
            <td>
                <input type="checkbox"> PHY 1102 (Physics Lab)
            </td>
         </tr>
         <tr>
            <td>
                <p style="font-size: 12px"> Comments/Special Request</p>
            </td>
         </tr>
         <tr>
             <td><input type="text"><br></td>
          </tr>
         <tr>
            <td>
                <input type="submit">
            </td>
         </tr>
         <tr>
            <td>
                <input type="reset">
            </td>
         </tr>
      </table>
    </center>
</body>