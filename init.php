Its just a demo for Muhammad Ibrahim to make more flexible options in forms.


// store all options to serialize the string
$form_data = serialize( $_POST['options'] );


// get the serialize the data form
$array_options = unserialize(  $form_data  );


// html form to add data
<input type="text" name="options[name1]" value="<?php echo $array_options['name1']; ?>" />
<input type="text" name="options[name2]" value="<?php echo $array_options['name2']; ?>" />
<input type="text" name="options[name3]" value="<?php echo $array_options['name3']; ?>" />
