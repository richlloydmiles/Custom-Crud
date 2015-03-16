<h2>
	List of <?php echo $crud_plural; ?>
</h2>
<?php crud_form('[+]' , 'crud_create'); ?>

<table>
<tr>
	<td>
		ID
	</td>
	<td>
		Title
	</td>	
	<td>
		Description
	</td>	
</tr>
<?php foreach (get_options_array() as $key => $value): ?>
<tr>
	<td>
		<?php echo $key; ?>
	</td>
	<td>
		<?php echo $value['title']; ?>
	</td>	
	<td>
		<?php echo $value['description']; ?>
	</td>	
	<td>
	<?php $extra = '<input type="hidden" name="crud_id" value="'.$key.'">
	<input type="hidden" value="'.$value['title'].'"name="crud_name" >
	<input type="hidden" value="'.$value['description'].'"name="crud_desc" >
	'; ?>

	<?php crud_form('Edit' ,'crud_edit' , $extra); ?>
	</td>
</tr>
<?php endforeach; ?>
</table>