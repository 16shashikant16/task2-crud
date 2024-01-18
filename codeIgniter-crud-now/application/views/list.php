<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - View Users</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-white bg-White col-md-12">
        <a href="#" class="navbar-brand">List of Student Data</a>
</div>

</div>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $success=$this->session->userdata('success');
            if($success!=""){
            ?>
            <div class="alert alert-success"><?php echo $success;?></div>
            <?php
            }
            ?>

            <?php
            $failure=$this->session->userdata('failure');
            if($failure!=""){
            ?>
            <div class="alert alert-success"><?php echo $failure;?></div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-5"><h3>View Users</h3></div>
    <div class="col-5">
        <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
    </div>
</div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>User_Rollno</th>
                        <th>Class</th>
                        <th width="90">Edit</th>
                        <th width="100">Delete</th>
                    </tr>
                    <?php if(!empty($users)){ foreach($users as $user) {?>
                    <tr>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['user_rollno']?></td>
                        <td><?php echo $user['class']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['name']?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_rollno']?>" class="btn btn-danger">Delete</a>
                        </td>
                        
                        

                    </tr>
                    <?php } } else{ ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>  
                    <?php } ?>
                </table>
            </div>
    </div>
</div>
    
</body>
</html>