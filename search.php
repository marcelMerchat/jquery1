<?php
// 'search.php'
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
    var current_time = new Date();
    document.write('<h3>' + current_time.toDateString() + '</h3><br>');
}
function calculateTotal(quantity, price){
    var tax = 0.08;
    var total = quantity * price * (1 + tax);
    var formattedTotal = total.toFixed(2);
    return formattedTotal;
}
$(document).ready(function() {
        window.console && console.log('Document ready called');
        $(function() {
            $('body').hide().fadeIn(3000);
        });
        $('#jqfunc').click(function(event){
                  event.preventDefault();
                  window.console && console.log("Adding form material");
                  var source = $('#scriptid').html();
                  $('#divformid').append(source);
                  window.console && console.log("Appending form material");
        });
        $('#replace').click(function(event){
                  event.preventDefault();
                  var texttoreplace = $('#input3b').val();
                  var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
                  //var replacement = 'myreplacement';
                  window.console && console.log('Ready to replace text from PHP server program.');
                  var replacement = $('#replacement').val();
                  result = texttoreplace.replace(myRegEx, replacement);
                  //$('#input3b').val() = result;
                  $('#input3b').each(function() {
                      var text = $(this).text();
                      $(this).text(text.replace(myRegEx, replacement));
                  });
        });
});
</script>
</head>
<body>
<div id="one">
All you need in this life is ignorance and confidence,
and then success is sure. - Mark Twain
</div>

<div id="three">
Great minds discuss ideas; average minds discuss events;
small minds discuss people. - Eleanor Roosevelt
</div>
<div id="all">
  <h2>JavaScript Exercizes</h2>
  <h3>Parse Text</h3>

<script>
printToday();
var quote ='To be, or not to be.';
document.write('Consider the string "' + quote + '" ');
var result = quote.indexOf('be');
document.write('The letter combination "be" starts at position ' + result + ' : . . . [quote.indexOf("be")]<br><br>');

var firstposition = quote.indexOf('be');
var str1 = quote.slice(3);
var str2 = quote.slice(3,5);
document.write('A slice starting at position 3 is "' + str1 + '" : . . . [quote.slice(3)] <br><br>  \
       A slice for positions 3, 4 is \"' + str2 + '." . . . [quote.slice(3,5)] <br><br> ');
var quote2 ='http://www.sawmac.com';
var str3 = quote2.slice(7,10);
document.write('A slice of three letters of the email address "' + quote2 + '" starting at position 7 is "' + str3);
document.write('Perhaps, the final position is numbered one higher than you might expect: . . . [quote2.slice(7,10);] <br><br>');
</script>

<h2>Regular Expressions</h2>
<h3>Find Starting Position of match</h3>

<script>
  var myRegEx = /To be/;
  var foundPosition = quote.search(myRegEx);
  document.write('The starting position within the string "quote" using regular expression /To be/ \
    is found at position ' + foundPosition +' : . . . .[quote.search(myRegEx)] <br><br>');

    var myRegEx = /to be/i;
    var foundPosition = quote.search(myRegEx);
    document.write('The starting position for a case-insensitive \
                  search expression of ' + myRegEx + ' is at \
    position ' + foundPosition + '.<br><br>');
</script>
<h3>Extracting a Single Match</h3>
<script>
var string1 = "The text string is logo.gif";
var myRegEx = /\S*\.gif/i;
var result = string1.match(myRegEx);
//document.write(textstring + '<br><br>');
document.write('<input class="email-box" \
       type="text" name="headline" value="' + string1 + '" id="input1" />');
document.write('<input class="email-box" \
       type="text" name="headline" value=' + result + ' id="input2" />');
document.write('.<br><br>The regular expression for matching \
       is ' + myRegEx + '.<br><br>');

document.write('<h3>Extracting an Array of Matches</h3>');

var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
var myRegEx = /replace me/i;
var textstring = 'The text string is replace me and replace me.';
var result = textstring.match(myRegEx);

document.write('<textarea rows="3" value="" id="input3a">' + textstring +'</textarea><br><br>');
document.write('<input class="email-box" type="text" name="headline" value="' + result[0] + '" id="input4" />');
document.write('<input class="email-box" type="text" name="headline" value="' + result[1] + '" id="input5" />');
document.write('<br><br>The regular expression is ' + myRegEx + '.<br><br>');

document.write('<h3>Replacing a String</h3>');
var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
var textstring = 'The text string is http://www.mycompany.com and http://www.mygovernment.gov';
document.write('<textarea rows="3" id="input3b">' + textstring +'</textarea>');
</script>

<?php
if (isset($_POST['replacement']) && strlen($_POST['replacement']) > 0) {
    $replacement = $_POST['replacement'];
} else {
    $replacement = 'nonex';
}
?>

<form method="post">

      <p>Click here to enter change e-mail address: <button class="button" id="jqfunc" >Enter Address</button></p>
      <div id="divformid">

      </div>
      <script id="scriptid" type="text">
          <span><input class="email-box" type="text" name="replacement" value="new e-mail address" id="replacement" /></span>
      </script>
      <br>
      <input class="button" type="submit" value="Replace Text" id="replace"/>
</form>

<script>
//document.write('<input class="email-box" type="text" name="headline" value="new string" id="input6" />');
//var texttoreplace = $('#input3a').val();
//var replacement = 'myreplacement';
window.console && console.log('Ready to import replacement text from PHP server program.');
var replacement = "<?php echo $replacement ?>";
result = textstring.replace(myRegEx, replacement);
//var result = 'bla';
document.write('<input class="email-box" type="text" name="headline" value="' + result + '" id="input7" />');
document.write('<br><br>The regular expression is ' + myRegEx + '.<br><br>');

</script>
</div>
</body>
</html>
