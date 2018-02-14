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
http://localhost/js/jsprac/viewjquery.php
</div>
<div id="two">
  <h2>Java Script Exercizes</h2>
<script>
printToday();
var quote ="To be, or not to be.";
var firstposition = quote.indexOf('be');
var str1 = quote.slice(3);
var str2 = quote.slice(3,5);
document.write('Consider the string \"' + quote + '\" \
      A slice starting at position 3 is \"' + str1 + '\" \
      A slice for positions 3, 4 [quote.slice(3,5)] is \"' + str2 + '.\" ');
document.write('<h2>Mathematics</h2>');
print('Convert string with Number()');
var num1 = 5;
var str1 = '5';
var result = num1 + Number(str1);
print("5 + Number('5') = " + result);

document.write('<h3>Parse Numbers</h3>');
var str2 = '4.5 acres';
var result = parseFloat(str2);
document.write('The parsed floating point number is: ' + result + ': [parseFloat("4.5 acres")]<br>');

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
document.write('<span class="fineprint"> For a fixed number (4) of decimal places, ' + pie + ' becomes ' + rounded + '.</span>');






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
