<!DOCTYPE html>
<html>
<body>

<p>Click the button to create an IMG element.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  var x = document.createElement("IMG");
  x.setAttribute("src", "../images/img_pulpit.jpg");
  x.setAttribute("width", "304");
  x.setAttribute("height", "228");
  x.setAttribute("alt", "The Pulpit Rock");
  document.body.appendChild(x);
}
</script>

</body>
</html>
