<html> 
<head> 
  <title>GTU Grade Calculation</title> 
</head> 
<body> 
  <div class="grade-calculator"> 
    <h2>GTU Grade Calculator</h2> 
    <div class="form-group"> 
      <label for="subject1">Marks in Subject 1:</label> 
      <input type="number" id="subject1" placeholder="Enter marks (0-100)" required> 
    </div> 
    <div class="form-group"> 
      <label for="subject2">Marks in Subject 2:</label> 
      <input type="number" id="subject2" placeholder="Enter marks (0-100)" required> 
    </div> 
    <div class="form-group"> 
      <label for="subject3">Marks in Subject 3:</label> 
      <input type="number" id="subject3" placeholder="Enter marks (0-100)" required> 
    </div> 
    <div class="form-group"> 
      <label for="subject4">Marks in Subject 4:</label> 
      <input type="number" id="subject4" placeholder="Enter marks (0-100)" required> 
    </div> 
    <button onclick="calculateGrade()">Calculate Grade</button> 
 
    <div class="result" id="result"></div> 
  </div> 
 
  <script> 
    function calculateGrade() { 
       
      let marks1 = parseFloat(document.getElementById('subject1').value); 
      let marks2 = parseFloat(document.getElementById('subject2').value); 
      let marks3 = parseFloat(document.getElementById('subject3').value); 
      let marks4 = parseFloat(document.getElementById('subject4').value); 
      if (marks1 < 0 || marks1 > 100 || marks2 < 0 || marks2 > 100 || marks3 < 0 || marks3 > 
100 || marks4 < 0 || marks4 > 100) { 
        alert("Please enter valid marks between 0 and 100 for each subject."); 
        return; 
      } 
      function getGrade(marks) { 
        if (marks >= 85) { 
          return "AA"; 
        } else if (marks >= 75) { 
          return "AB"; 
        } else if (marks >= 65) { 
          return "BB"; 
        } else if (marks >= 55) { 
          return "BC"; 
        } else if (marks >= 45) { 
          return "CC"; 
        } else if (marks >= 40) { 
          return "CD"; 
        } else if (marks >= 35) { 
          return "DD"; 
        } else { 
          return "FF (FAIL)"; 
        } 
      } 
 
      
      let result1 = marks1 < 35 ? "FAIL" : "PASS"; 
      let result2 = marks2 < 35 ? "FAIL" : "PASS"; 
      let result3 = marks3 < 35 ? "FAIL" : "PASS"; 
      let result4 = marks4 < 35 ? "FAIL" : "PASS"; 
 
       
      let grade1 = getGrade(marks1); 
      let grade2 = getGrade(marks2); 
      let grade3 = getGrade(marks3); 
      let grade4 = getGrade(marks4); 
 
 
      let resultTable = ` 
        <table> 
          <thead> 
            <tr> 
              <th>Subject</th> 
              <th>Marks</th> 
              <th>Grade</th> 
              <th>Status</th> 
            </tr> 
          </thead> 
          <tbody> 
            <tr> 
              <td>Subject 1</td> 
              <td>${marks1}</td> 
              <td>${grade1}</td> 
              <td>${result1}</td> 
            </tr> 
            <tr> 
              <td>Subject 2</td> 
              <td>${marks2}</td> 
              <td>${grade2}</td> 
              <td>${result2}</td> 
            </tr> 
            <tr> 
              <td>Subject 3</td> 
              <td>${marks3}</td> 
              <td>${grade3}</td> 
              <td>${result3}</td> 
            </tr> 
            <tr> 
              <td>Subject 4</td> 
              <td>${marks4}</td> 
              <td>${grade4}</td> 
              <td>${result4}</td> 
            </tr> 
          </tbody> 
        </table> 
      `; 
document.getElementById('result').innerHTML = resultTable; 
} 
</script> 
</body> 
</html>
