<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('assets/boostrap/css/boostrap.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/boostrap/css/boostrap.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/boostrap/css/boostrap.min.css') ?>">
    <script src="<?=base_url('assets/boostrap/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?=base_url('assets/boostrap/js/boostrap.min.js') ?>"></script>

    <style type="text/css">
        .kotak{
            margin-top: 150px;
        }
        .kotak .input-group{
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<div id="login_box">
    <div class="panel-body">
        <h1>Login</h1>

        <?=form_open('login', ['name' => 'login_form', 'id' => 'login_form']); ?>

        <?php if (!empty($this->session->flashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label='close'>&times</a>
            <strong>Perhatian!</strong><?= $this->session->flashdata('error')?>
        </div>

        <?php endif ?>

        <p>
            <?=form_label('Username', 'username') ?>
            <?=form_input('username', $input->username, ['class' =>'form_field']) ?>
        </p>

        <?=form_error('username', '<p class="field_error">' , '</p>'); ?>
        
        <p>
            <?=form_label('Password', 'password') ?>
            <?=form_password('password', $input->password, ['class' =>'form_field']) ?>
        </p>
        
        <?=form_error('password', '<p class="field_error">' , '</p>'); ?>
        <div class="center">
            <input type="submit" name="submit" id="submit" value="Login" />

        </div>
        <?=form_close() ?>
    </div>
</div>
</body>
</html>