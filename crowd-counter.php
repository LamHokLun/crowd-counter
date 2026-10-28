<!DOCTYPE html>
<html>
<body>
<h1>Crowd Counter</h1>
<hr>
<form action="data.php" method="post">
  <label for="session">Session: </label>
    <select id="slct" name="session">
    	<option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
    </select>
    <br>
    <br>
    <label for="time">Time: </label>
	<input id="time" name="time" type="text" value="09:15-09:45">
    <br>
    <br>
    <label for="visitor">Visitor: </label>
	<input id="visitor" name="visitor" type="text" value=0>
	<br>
	<br>
	<button type="button" id="btnPlus">Click Me +</button>
	<button type="button" id="btnMinus">Click Me -</button>
	<br>
	<br>
	<input type="submit" id="submit" value="Submit">
</form>
<br>
<hr>
	
<script>
var n = 1;
var option = document.getElementsByTagName("option");
var time = document.getElementById("time");
var visitor = document.getElementById("visitor");
var btnPlus = document.getElementById("btnPlus");
var btnMinus = document.getElementById("btnMinus");
var slct = document.getElementById("slct");
var select = document.getElementsByTagName("select");

/*-----------------------------------------------*/
function myPlus(){
visitor.value = n++;
}

function myMinus(){
if (visitor.value == 0) {n=1;}
else {visitor.value = n-- -2};
}
function mySelect(){
if (select[0].value == 1){time.value = "09:15-09:45";}
else if (select[0].value == 2){time.value = "10:00-10:30";}
else if (select[0].value == 3){time.value = "10:45-11:15";}
else if (select[0].value == 4){time.value = "11:30-12:00";}
else if (select[0].value == 5){time.value = "12:15-12:45";}
else if (select[0].value == 6){time.value = "13:00-13:30";}
else if (select[0].value == 7){time.value = "13:45-14:15";}
else if (select[0].value == 8){time.value = "14:30-15:00";}
else if (select[0].value == 9){time.value = "15:15-15:45";}
else if (select[0].value == 10){time.value = "16:00-16:30";}
else if (select[0].value == 11){time.value = "16:45-17:15";}
else if (select[0].value == 12){time.value = "17:15-18:00";}
}
/*-----------------------------------------------*/
btnPlus.addEventListener("click", myPlus);
btnMinus.addEventListener("click", myMinus);
slct.addEventListener("change", mySelect);
/*document.write(select[0].value);*/
</script>
</body>
</html> 