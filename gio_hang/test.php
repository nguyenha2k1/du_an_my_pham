<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
 
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "gio_hang.php", true);
  xhttp.send();
}
</script>

</body>
</html>



tìm kiếm 
<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<h3>Start typing a name in the input field below:</h3>

<p>Suggestions: <span id="txtHint"></span></p> 

<p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>
<h1 id="span"></h1>
</body>
</html>

<script type="text/javascript">
	document.cookie = 'name=vuthanhtai; expires=Thu, 22 Dec 2022 19:55:20 UTC';
	document.cookie = 'name=vuthanhtai; expires=Thu, 22 Dec 1990 19:55:20 UTC';
	var data = document.cookie;
	document.getElementById("span").innerHTML = this.data;
</script>
<?php 
session_start();
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>