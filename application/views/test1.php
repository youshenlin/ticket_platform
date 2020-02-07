<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
</head>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>css/test1.css" />
<p class = "test1">test1.</p>
<?php echo base_url();
echo "<br \>";
echo "<pre >";
var_dump($a);
?>
<form action="/ticket_platform/index/test2" method="POST" >
url:<input type='text' name ='url'  /><br />
system:<select name="system">
  <option value="kktix">kktix</option>
  <option value="ibon">Saab</option>
  <option value="toryun">拓元</option>
</select>
<br />
ticket_name:<input type='text' name ='ticket_name'  /><br />
ticket_date:<input type='text' name ='ticket_date'  /><br />
start_ts:<input type='datetime-local' name ='start_ts'  /><br />
end_ts:<input type='datetime-local' name ='end_ts'  /><br />
<input type='submit'>

</form>
</body>
</html>
