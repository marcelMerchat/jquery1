<?php
// 'view.php'
require_once "pdo.php";
require_once "util.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcel Merchat's Resume Registry</title>
    <?php
      require_once 'head3.php';
    ?>
<script>
/*
    Multi-line comment
    Purpose: Illustrate basic JavaScript commands
    Date: January 30, 2018
    Version 1.0.0
*/
function print(message){
    document.write('<p>' + message + '</p>');
}
function printToday(){
    var today = new Date();
    document.write('<h3>' + today.toDateString() + '</h3><br>');
}
function calculateTotal(quantity, price){
    var tax = 0.08;
    var total = quantity * price * (1 + tax);
    var formattedTotal = total.toFixed(2);
    return formattedTotal;
}

</script>
</head>
<body>
<div id="one">
All you need in this life is ignorance and confidence,
and then success is sure. - Mark Twain
</div>

<div id="four">
Great minds discuss ideas; average minds discuss events;
small minds discuss people. - Eleanor Roosevelt
</div>
<div id="two">
  <h2>JavaScript Exercizes</h2>
<script>
printToday();
document.write('<h2>Dates and Time</h2>');
var months = ['January','February','March','April','May','June',
              'July','August','September','October','November','December'];
var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                            'Saturday','Sunday'];
var dateobj = new Date();

document.write('<span class="h2 clock" id="time_span">');
document.write('</span>');
var el = document.getElementById('time_span');
setInterval(function(){
    var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                              'Saturday','Sunday'];
   var currentTime = new Date();
   var hours = currentTime.getHours();
   var minutes = currentTime.getMinutes();
   var seconds = currentTime.getSeconds();
   var ampm = hours > 11 ? 'PM' : 'AM';
   hours = hours > 12 ? hours - 12 : hours;
   hours = hours === 0 ? 12 : hours;
   hours = hours < 10 ? '0' + hours : hours;
   minutes = minutes < 10 ? '0' + minutes : minutes;
   seconds = seconds < 10 ? '0' + seconds : seconds;
    //el.innerHTML = days[currentTime.getDay()] + ' : ' + hours + ' \
      // : ' + minutes + ' : ' + ampm, 1000});
   el.innerHTML =  days[currentTime.getDay()] + ' : ' + hours + ' : ' + minutes + ' : ' + seconds + ' ' + ampm}, 1000);

var dateobj = new Date();

print('Generate time variable:  var = new Date();');

print('The time is ' + dateobj);

document.write('The year is ' + dateobj.getFullYear() + ': [dateobj.getFullYear()]<br><br>');
document.write('The month is ' + dateobj.getMonth() + ': [dateobj.getMonth()]<br><br>');
document.write('The day of the month is ' + dateobj.getDate() + ': [dateobj.getDate()]<br><br>');
document.write('The day of the week is ' + dateobj.getDay() + ': [dateobj.getDay()]<br><br>');
document.write('The hour of the day is ' + dateobj.getHours() + ': [dateobj.getHours()]<br><br>');
document.write('The minutes past the hour are ' + dateobj.getMinutes() + ': [dateobj.getMinutes()]<br><br>');
document.write('The seconds of the current minute are ' + dateobj.getSeconds() + ': [dateobj.getSeconds()]<br><br>');
document.write('The number of milliseconds since January 1, 1970 are ' + dateobj.getTime() + ': [dateobj.getTime()]<br><br>');

document.write('The current month is ' + months[dateobj.getMonth()] + '<br><br>');
document.write('The current day of the week is ' + days[dateobj.getDay()] + '<br><br>');

var str2 = '08 acres';
var result = parseInt(str2, 10);
document.write('A parsed base-10 integer is ' + result + ': [parseInt("08 acres", 10)]<br>');

document.write('<h3>Check for Numeric Type</h3>');
print("isNaN('abc'):");
var str3 = 'abc';
if(isNaN(str3)){
  document.write('The variable "' + str3 + '" is not a number: ' + isNaN(str3));
}

document.write('<h3>Rounding Numbers</h3>');
var pie = 3.14159;
document.write('<span class="fineprint">After rounding to four significant digits, ');
document.write(pie);
document.write(' becomes ' + pie.toPrecision(4) + '. [number.toPrecision(x)] </span>');
multiple = Math.pow(10,4);
piee = multiple * pie;
rounded = Math.round(piee) / multiple;
document.write('<span class="fineprint"> For a fixed number (4) of decimal places, ' + pie + ' becomes ' + rounded + '.</span><br><br>');

document.write('<span class="fineprint">After rounding up, ' + pie + ' becomes ' + Math.ceil(pie) + ' [Mat' + 'h.ceil(pie)]. </span>');
document.write('<span class="fineprint">After rounding down, ' + pie + ' becomes ' + Math.floor(pie) + ' [Mat' + 'h.floor(pie)]. </span><br><br>');
document.write('<span class="fineprint">Expressing as money, ' + pie + ' becomes $' + pie.toFixed(2) + ' [pie' + '.tofixed(2)]. </span><br><br>');

document.write('<h3>Random Numbers</h3>');
document.write('<span class="fineprint">[Mat' + 'h.random() generates a random \
            number between 0 and 1 such as ' + Math.random()  +'.</span>');

document.write('<span class="fineprint">[Generates a random number from 1 to six \
                for a die roll as ' + Math.ceil(6 * Math.random())  + ' [ \
                  Math.ceil(6 * Math.random())].</span>');







</script>
</div>
<input class="name-box-small" type="text" name="headline" value="" id="input1" />
<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');
      $(function() {
          $('body').hide().fadeIn(3000);
      });

});
</script>

</body>
</html>
