<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Create User</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-white bg-White col-md-12">
        <a href="#" class="navbar-brand">Student Data</a>
</div>
<div class="navbar navbar-white bg-White col-md-12">
        <h3>Create Users</h3><hr>
</div>
<div class="container">
    
    <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
    <div clsass="row">
        
        <div class="col-md-5">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="" class="form-control">
                <?php echo form_error('name');?>
            </div>
            <div class="form-group">
                <label>User_Rollno</label>
                <input type="text" name="user_rollno" value="" class="form-control">
                <?php echo form_error('user_rollno');?>

            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" value="" class="form-control">
                <?php echo form_error('class');?>

            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
            </div>
        </div>
        
    </div>
    </form>
</div>
    
</body>
</html>