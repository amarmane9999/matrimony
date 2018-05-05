<html>
<head>
		<style src="search.css"></style>
	</head>
<? session_start();

?>

	<body>
		<form method="get" action="result.php">
		<table>
		<tr><th colspan=2>Search Page</td></tr>
		<tr><td>Gender :</td><td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female" required>Female</td></tr>
		<tr><td>Min. Age :</td><td align="center"><input type="number" name="min" id="min" min="18" max="60" required placeholder="18"></td></tr>
		<tr><td>Max. Age :</td><td align="center"><input type="number" name="max" id="max" min="18" max="60" required placeholder="18"></td></tr>
		<tr><td align="center"><input type="reset" class="btn" name="reset" id="reset" value="Clear"></td><td align="center"><input type="submit" class="btn" name="search" id="search" value="Search"></td></tr>
			</table>
		</form>
	</body>
</html>