<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content=""IF=edge>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Origin</th>
	</tr>
</table>


<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
$.ajax({
url:'act.php',
type:'GET',
success:function(response){
	var data = JSON.parse(response);
	for(i in data){
	$("table").append("<tr><td>"+data[i].id+"</td>"+"<td>"+data[i].name+"</td>"+"<td>"+data[i].email+"</td>"+"<td>"+data[i].origin+"</td>");
}}
});
	});
</script>

</body>
</html>