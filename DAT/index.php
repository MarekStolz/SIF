<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
		Jméno:<br>
		<input type="text" name="name">
		<br>
		Zbraň<br>
		<input type="text" name="weapon">
        <br>
		Studio<br>
        <select name="studio" id="studio">
            <option value="1">DC Comics</option>
            <option value="2">Marvel Studios</option>
            <option value="3">The Walt Disney Studios</option>
</select>
		<br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>