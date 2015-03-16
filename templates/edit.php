<h2>
	Edit <?php echo $_POST['crud_id']; ?>
</h2>

<form action="" method="POST">
<table class="form-table">
	<tr>
		<td>
			<label for="crud_edit_name">Name</label>
		</td>
		<td>
			<input type="text" placeholder="<?php echo $_POST['crud_name']; ?>" name="crud_edit_name">			
		</td>
	</tr>
		<tr>
		<td>
			<label for="crud_create_desc">Description</label>
		</td>
		<td>
			<input type="text" placeholder="<?php echo $_POST['crud_desc']; ?>" name="crud_edit_desc">			
		</td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="crud_page" value="crud_edit_model">
			<input type="submit">
		</td>
	</tr>
</table>
</form>

