<?php
include "includes/core.php";

// Found in functions.php
// Doesn't work on localhost
//make_page_ssl();

if(isset($_POST) and !empty($_POST)) {
	$account = new Account();
	$username = $_POST["username"];
	if($account->authenticate($username,$_POST["password"])) {
		redirect("account.php");
	} else {
		print "<div class='error'>Could not authenticate your account</div>";
	}
}

include "includes/header.php";

?>

<form method="post">
	<div class="header">
		Account Login
	</div>
	<div class="container">
		<table>
			<tr>
				<td class="label">Username: </td>
				<td class="charval">
					<input type="text" name="username" id="username" value="<?php echo @$_POST["username"]; ?>" autocomplete="off" />
				</td>
				<td>
					<span class="hint"></span>
				</td>
			</tr>
			<tr>
				<td class="label">Password: </td>
				<td class="charval">
					<input type="password" name="password" id="password" />
				</td>
				<td>
					<span class="hint"></span>
				</td>
			</tr>
		</table>
	</div>
	<br/>
	<input type="submit" value="Login" />
</form>