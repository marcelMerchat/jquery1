<?php
// 'regex.php'
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
//window.onload = function() {
  // document.getElementById("ThisWillBeNull").innerHTML = "Why is this null?";
//}
$(document).ready(function() {
        window.console && console.log('Document ready called');
        $(function() {
            $('body').hide().fadeIn(3000);
        });
        $('#replacebutton').hide();
        $('#replacementfield').hide();

        //$('#filler').toggle();
        $('#filler').show();
        $('#jqfunc').click(function(event){
                  event.preventDefault();
                  window.console && console.log("removing form 1");
                  $('#divform1').remove();
                  //var id1 = document.getElementById('#replacement1');
                  //window.console && console.log("form id retrieved is" + id1);
                  //var idisnull = (id1 == null);
                  //window.console && console.log("form id retrieved is" + idisnull);
                  //var idnotnull = (id1 === !null);
                //window.console && console.log("form id retrieved is" + idnotnull);

                  var source = $('#scripttemplate').html();
                  countEdu = 1;
                  $('#replacementfield').append(source.replace(/@COUNT@/g, countEdu));
                  $('#replacebutton').show();
                  $('#replacementfield').show();
                  $('.afterinsert').css({'margin-top' : '120px'});
                  window.console && console.log("Appending form material");
      });
        $('#replace').click(function(event){
                  event.preventDefault();
                  var texttoreplace = $('#input3b').val();
                  //var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
                  var myRegEx = /(http)?s?(:\/\/)?www\.\S{1,25}/g;
                  window.console && console.log('Ready to replace text from PHP server program.');
                  var replacement = $('#replacement1').val();
                  //result = texttoreplace.replace(myRegEx, replacement);

                  $('#input3b').each(function() {
                      var text = $(this).text();
                      $(this).text(text.replace(myRegEx, replacement));
                  });
                  $('#replacebutton').hide();
                  $('#replacementfield').hide();
                  $('.afterinsert').css({'margin-top' : '30px'});
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
  <h3>Regular Expressions</h3>

<h3>Extracting a Single Match</h3>
<script>
var string1 = "The text string is logo.gif";
var myRegEx = /\S*\.gif/i;
var result = string1.match(myRegEx);

document.write('<input class="email-box" \
       type="text" name="headline" value="' + string1 + '" id="input1" />');
document.write('<input class="email-box" \
       type="text" name="headline" value=' + result + ' id="input2" />');
document.write('.<br><br>The regular expression for matching \
       is ' + myRegEx + '.<br><br>');

document.write('<h3>Replacing a String</h3>');
var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
var textstring = 'The text string is http://www.mycompany.com and http://www.mygovernment.gov';
document.write('<textarea class="setin-small" rows="3" id="input3b">' + textstring +'</textarea>');
</script>

<?php
if (isset($_POST['replacement1']) && strlen($_POST['replacement1']) > 0) {
    $replacement = $_POST['replacement1'];
} else {
    $replacement = 'nonex';
}
?>

<form method="post">
      <p>Click here to enter change the web addresses: <button class="button" id="jqfunc" >Enter Address</button></p>
      <div id="replacementfield">
      </div>
      <script id="scripttemplate" type="text">
      <div id="divform@COUNT@">
          <span><input class="email-box" type="text" name="" value="new address" id="replacement@COUNT@" /></span>
      </div>
      </script>
      <div id="replacebutton">
      <button class="button-long" id="replace">Replace Addresses</button>
      <!--<input class="button" type="submit" value="Replace Text" id="replace"/>-->
      </div>
</form>

<div id="filler">
</div>

<script>

document.write('<h3 class="afterinsert">Extracting an Array of Matches</h3>');

var myRegEx = /(https?:\/\/)?www\.\S{1,30}/g;
var myRegEx = /find\s\w{3}/g;
var textstring = 'The text string is find her and find him for me.';
var result = textstring.match(myRegEx);

document.write('<textarea class="setin-small" rows="3" value="" id="input3a">' + textstring +'</textarea><br><br>');
document.write('<input class="email-box" type="text" name="headline" value="' + result[0] + '" id="input4" />');
document.write('<input class="email-box" type="text" name="headline" value="' + result[1] + '" id="input5" />');
document.write('<br><br>The regular expression is ' + myRegEx + '.<br><br>');


</script>
</div>
</body>
</html>
