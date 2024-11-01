<h1>Register</h1>
<?php



echo form_open('main/create_user');
echo form_label('Username :', 'username');
echo form_input('username');
echo br();
echo form_label('Password :', 'password');
echo form_input('password');
echo br();
echo form_label('Email :', 'email');
echo form_input('email');
echo br();
echo form_label('Role_id :', 'role_id');
echo form_input('role_id');
echo br();
echo br();
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();