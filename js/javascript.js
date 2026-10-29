
var n = 1;
var option = document.getElementsByTagName("option");
var time = document.getElementById("time");
var visitor = document.getElementById("visitor");
var btnPlus = document.getElementById("btnPlus");
var btnMinus = document.getElementById("btnMinus");
var slct = document.getElementById("slct");
var select = document.getElementsByTagName("select");
var data = [];
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

function myConfirm(){
data = [["Session", "Time", "Visitor"],
	[select[0].value,time.value,visitor.value]];
// Set Item
localStorage.setItem("Session", select[0].value);
localStorage.setItem("Time", time.value);
localStorage.setItem("Visitor", visitor.value);
// Retrieve
	
document.write("<h3>The information are successfully submitted</h3><br>The data that you have filled are as follows: <br>");
document.write("Session: " + localStorage.getItem("Session") + "<br>");
document.write("Time: " + localStorage.getItem("Time") + "<br>");
document.write("Visitor: " + localStorage.getItem("Visitor") + "<br>");

/*document.write(data[2]);*/
var csv = CSV.serialize(data),
blob = new Blob([csv], {type: "text/csv"}),
url = window.URL.createObjectURL(blob);

var a = document.createElement("a");
a.href = url;
/*a.target = "_blank";
n = 2;
*/
var fileName=time.value;
a.download = "data"+fileName+".csv";
a.click();
}


/*-----------------------------------------------*/
btnPlus.addEventListener("click", myPlus);
btnMinus.addEventListener("click", myMinus);
slct.addEventListener("change", mySelect);
/*document.write(select[0].value);*/
