<!DOCTYPE html>
<html>
<head>
  <style>
    .message {
      display: none;
      padding: 10px;
      margin-top: 10px;
      background: lightblue;
    }
  </style>
</head>

<body>

    <form>
  <label>
    <input type="radio" id="check1" name="choice">
    ღია კითხვები
  </label>

  <label>
    <input type="radio" id="check2" name="choice">
    დახურული კითხვები
  </label>
</form>
  <div id="message1" class="message">
    შეიყვანეთ ღია კითხვები : 
    <br> <br>
    <form>
    <input type="text" name="kitxva1" ?kitxva1> 
        <br> <br>
         <input type="text" name="kitxva2" ?kitxva2>
         <br> <br>
         <button type="submit">გაგზავნა</button>
    </form>
  </div>

  <div id="message2" class="message">
     შეიყვანეთ დახურული კითხვა : 
<br> <br>
    <form>
        
    <input type="text" name="kitxva2"> 
        <br> <br>
         შეიყვანეთ სავარაუდო პასუხები : 
         <br> <br>
       <input type="text" placeholder="A"> 
        <br> <br>
       <input type="text" placeholder="B"> 
        <br> <br>
       <input type="text" placeholder="C"> 
        <br> <br>
       <input type="text" placeholder="D"> 
        <br> <br>
    
    <button type="submit">გაგზავნა</button>
  </div>

  <script>
    const check1 = document.getElementById("check1");
    const check2 = document.getElementById("check2");

    const message1 = document.getElementById("message1");
    const message2 = document.getElementById("message2");

    check1.addEventListener("change", function () {
      if (check1.checked) {
        message1.style.display = "block";
         message2.style.display = "none";
      } else {
        message1.style.display = "none";
      }
    });

    check2.addEventListener("change", function () {
      if (check2.checked) {
        message2.style.display = "block";
         message1.style.display = "none";
        
      } else {
        message2.style.display = "none";
      }
    });
  </script>
</body>
</html>
