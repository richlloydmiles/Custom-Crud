<h2>
	Create New <?php echo $crud_single; ?>
</h2>

<form action="" method="POST">
<table class="form-table">
	<tr>
		<td>
			<label for="crud_create_name">Name</label>
		</td>
		<td>
			<input type="text" name="crud_create_name">			
		</td>
	</tr>
		<tr>
		<td>
			<label for="crud_create_desc">Description</label>
		</td>
		<td>
			<input type="text" name="crud_create_desc">			
		</td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="crud_page" value="crud_create_model">
			<input type="submit">
		</td>
	</tr>
</table>
</form>

