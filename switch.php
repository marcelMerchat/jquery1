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
  <input class="name-box-small" type="text" name="headline" value="" id="input1" />
  <p>Click in the box to test the color.</p>
</div>
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
   el.innerHTML =  days[currentTime.getDay()] + ' : ' + hours + ' : ' + minutes + ' : ' + seconds + ' ' + ampm}, 1000);
</script>
</div>

<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');
      $('body').append('<div id="position2"></div>');
      $(function() {
          $('body').hide().fadeIn(3000);
      });
      $(document).on('click', '.name-box-small', 'input[type="text"]', function(){
            $('#position2').remove();
            $('body').append('<div id="position2"></div>');
        //eyedee = $(this).attr("id");
        //textentry = "r"; //document.getElementById(id="input1").value;
            var term = $('#input1').val();
            var favoriteColor = $('#input1').val();
        //$('#input2').val(favoriteColor);
            $('#position2').append(favoriteColor + '<br><br>');

        //if statement:
            if(favoriteColor == 'blue'){
                message = 'Blue is a cool color.'
            } else if (favoriteColor == 'red'){
                message = 'Red is a warm color.'
            } else if (favoriteColor == 'green'){
                message = 'Green is the color of the leaves.'
            } else {
                message = 'What kind of favorite color is that?';
            }
        $('#position2').append('If statement result: ' + message +  '<br><br>');
            //switch statement:
            switch (favoriteColor) {
                case 'blue':
                    message = 'Blue is a cool color.';
                    break;
                case 'red':
                    message = message = 'Red is a warm color.';
                    break;
                case 'green':
                    message = 'Green is the color of the leaves.';
                    break;
                case 'default':
                    message = 'What kind of favorite color is that?';
              }
        $('#position2').append('Switch statement result: ' + message +  '<br><br>');
        $('#position2').append('<p>The text entered so far is ' + term  + '<br><br>');  // term.toUpperCase()
        $('#two').css("border-color" , favoriteColor);
        $('#two').css("borderWidth" , "20px");
        $('#position2').css("border-color" , favoriteColor);
        //document.getElementById('#position1').style.borderColor = favoriteColor;
});
});
</script>
</body>
</html>
