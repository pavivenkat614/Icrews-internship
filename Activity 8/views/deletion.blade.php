<?php
$conn = mysqli_connect('localhost','ragaranjini','phpmyadmin@raji13','test');
$error = array( 'invalid' => '' , 'deleted' => '');
if(isset($_POST['delete'])){
    if(empty($_POST['id'])){
        $error['invalid']='* kindly enter an ID to delete *';
    }else{
        $id = $_POST['id'];
        $query = "SELECT * FROM users WHERE id= '$id' " ;
        $res = mysqli_query($conn,$query);
        if($res){
            if(mysqli_num_rows($res)>0){
                DB::delete('DELETE FROM users WHERE id=?',[$id]);
                DB::delete('DELETE FROM assignments WHERE id=?',[$id]);
                DB::delete('DELETE FROM marks WHERE id=?',[$id]);
                $error['deleted']='* Deleted the User data *';
            }else{
                $error['invalid']='* ID does not exist *';
            }

        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete data</title>
        <link href="css/seedercss/index.css" rel="stylesheet" type="text/css" />
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form class=" card bg-white  rounded shadow-lg " action = "/delete-form" method = "POST">
            {{ method_field('get')}}
            <p class="heading">Data Deletion form<p>
            <p class="text">enter the ID to be deleted</p>
            <label>User ID</label>
            <input type="number" placeholder="user-id" name="id"></input>
            <div class="red-text" style="color: red"><?php echo $error['invalid']; ?></div>
            <input class="btn btn-primary" type="submit" name= "delete" style="margin-top : 40px ; padding : 10px ; width : 130px ; height : 40px"></button>
            <br>
            <div class="red-text" style="color: green"><?php echo $error['deleted']; ?></div>
        </form>
    </body>
</html>