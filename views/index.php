<h1 class="text-center">PHP Test Application</h1>
<script>
	let users = [
	<?php
		// this is messy. better would be to create a separate endpoint to serve filters
		// or even better - to use a framework like React that would nicely handle this

		foreach($users as $user) {
			$resolvedUser = array(
				"name" => $user->getName(),
				"email" => $user->getEmail(),
				"city" => $user->getCity(),
				"phoneNumber" => $user->getPhoneNumber()
			);
			echo json_encode($resolvedUser);
			echo ",";
		}
	?>
	]


	function createUser(name, email, city, phoneNumber) {
		return {name, email, city, phoneNumber}
	}

	// in the ideal world, this would only be in usersList.php
	function renderRow(user) {
		return `<tr>
		<td>${user.name}</td>
		<td>${user.email}</td>
		<td>${user.city}</td>
		<td>${user.phoneNumber || ''}</td>
		</tr>`
	}

	function renderUserList(usersToRender) {
		$("#tableList").html(usersToRender.map(renderRow).join());
	}

</script>
<div class="container-fluid">
<?php
  include './views/form.php'
?>

<?php
  include './views/usersList.php'
?>

</div>