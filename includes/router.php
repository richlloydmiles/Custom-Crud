<?php
	switch ($_POST['crud_page']) {
		case 'crud_create':
		require $crud_dir . 'templates/create.php';
			break;
		case 'Back':
		require $crud_dir . 'templates/list.php';
			break;
		case 'crud_edit':
		require $crud_dir . 'templates/edit.php';
			break;
		case 'crud_create_model':

		$add = array(
			'title'=>$_POST['crud_create_name'], 
			'description'=>$desc = $_POST['crud_create_desc']
		);
		add_option_array($add);
			require $crud_dir . 'templates/list.php';
			break;		
		
		default:
			require $crud_dir . 'templates/list.php';
			break;
	}
