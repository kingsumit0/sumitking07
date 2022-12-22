<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
   $("#btn").on('click',function(){
     var fname=$("#fname").val();
	 var lname=$("#lname").val();
	 $.ajax({
	 type:"POST",
	 url:"demo.php",
	 data:"fname="+fname+'&lname='+lname,
	 success:function(data){
	 document.getElementById("res").innerHTML=data;
	 }
	 });
   });
  });
</script>
  </head>
  <body>
  <form method="POST">
  First Name<input type="text" name="fname" id="fname"><br>
  Last Name<input type="text" name="lname" id="lname"><br>
  <div id="res"></div>
  <input type="button" value="onload" id="btn" name="onload">
  </form>
  
  </body>
  </html>
  