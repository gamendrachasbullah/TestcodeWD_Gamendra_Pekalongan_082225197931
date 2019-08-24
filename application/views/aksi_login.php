<?php
    $input;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Kasir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="assets/css/boostrap.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/boostrap.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div id="panel panel-default">
            <div class="col-md-4 col-md-offset-4 kotak">
                <h3>Silahkan Login</h3>
            
            <?= form_open('login', ['name' => 'login_form', 'id' => 'login_form']); ?>
            <?php if(!empty($this->session->flashdata('error'))): ?>
            <p id="message">
            <?= $this->session->flashdata('error') ?>
            </p>

            <?php endif ?>

            <!-- From Username -->
            <p>
                <span class="input-group-addon"><span class="glyphicon glypphicon-user"></span></span>
                <?= form_label('Username', 'username') ?>
                <?= form_input('username', $input->username, ['class' => 'form_field']) ?>
            </p>

            <?= form_error('username', '<p class="field_error">', '</p>'); ?>

            <!-- Form Password -->
            <p>
                <?= form_label('Password', 'password') ?>
                <?= form_input('password', $input->password, ['class' => 'form_field']) ?>
            </p>

            <p>
                <input type="submit" name="submit" id="submit" value="Login" />
            </p>

            <?= form_close() ?>
            </div>
        </div>
    </div>
    
</body>
</html>