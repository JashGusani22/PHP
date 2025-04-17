<html> 
<head> 
  
  <title>Employee Salary Calculation</title> 
</head> 
<body> 
 
  <div class="salary-calculator"> 
    <h2>Salary Calculator</h2> 
    <div class="form-group"> 
      <label for="basicSalary">Enter Basic Salary:</label> 
      <input type="number" id="basicSalary" placeholder="Enter basic salary" required> 
    </div> 
    <button onclick="calculateSalary()">Calculate Net Salary</button> 
 
    <div class="result" id="result"></div> 
  </div> 
 
  <script> 
    function calculateSalary() { 
       
      let basicSalary = parseFloat(document.getElementById('basicSalary').value); 
       
      if (isNaN(basicSalary) || basicSalary <= 0) { 
        alert("Please enter a valid positive basic salary."); 
        return; 
      } 
       
      let DA = 0.50 * basicSalary;  
      let HRA = 0.10 * basicSalary;  
      let Medical = 0.04 * basicSalary;  
 
      let grossSalary = basicSalary + DA + HRA + Medical; 
  
      let Insurance = 0.07 * grossSalary; 
 
      let PF = 0.05 * grossSalary; 
     
      let deduction = Insurance + PF; 
    
      let netSalary = grossSalary - deduction; 
 
      document.getElementById('result').innerHTML = ` 
        <p><strong>Basic Salary:</strong> ₹${basicSalary.toFixed(2)}</p> 
        <p><strong>Gross Salary:</strong> ₹${grossSalary.toFixed(2)}</p> 
        <p><strong>Deduction (Insurance + PF):</strong> ₹${deduction.toFixed(2)}</p> 
        <p><strong>Net Salary:</strong> ₹${netSalary.toFixed(2)}</p> 
      `; 
    } 
  </script> 
 
</body> 
</html> 
 
