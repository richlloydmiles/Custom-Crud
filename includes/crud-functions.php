<?php 

function get_options_array() {
    $new_array = array();
    $array = get_option( 'wobble_crud' );
    if (!$array) {
     	return false;
     } 
    foreach($array as $key => $value)
     $new_array[$key] = $value;
    return $new_array;
}

function add_option_array($add) {
$array = get_options_array()?:array();
array_push($array, $add);
update_option( 'wobble_crud', $array , '', 'yes' );
}

function remove_option_array($id){
$array = get_options_array()?:array();
unset($array[$id]);
update_option( 'wobble_crud', $array , '', 'yes' );
}

function replace_option_array($id , $replace_with){
$array = get_options_array()?:array();
$array[$id] =  $replace_with;
update_option( 'wobble_crud', $array , '', 'yes' );
}

function crud_form($btn_label , $key , $extra_params = "") {
    ?>
<form action="" method="POST">
    <input type="hidden" value="<?php echo $key; ?>" name="crud_page">
    <?php echo $extra_params; ?>
    <input type="submit" value="<?php echo $btn_label; ?>">
</form>
    <?php
}