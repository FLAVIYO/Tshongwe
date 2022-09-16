
<?php  
   include('repeatable/menu.php');

    //add data to database
    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $Username = $_POST['username'];
        $password =md5($_POST['password']);


         
       $sql = "INSERT INTO Admin set
          full_name = '$full_name',
          username = '$Username',
          password = '$password' 
        ";

        //execute query
        $res = mysqgli_query($conn ,$sql) or die(mysqli_error());

        if($res==TRUE)
        {
            
            //start session
            $_SESSION['add'] = "admin added successfull"
            //redirect page
            header("location:".SETURL.'Admin/Manage-Admin.php');
        }
        else
        {
        
            //start session
            $_SESSION['add'] = "fail to add admin"
            //redirect page
            header("location:".SETURL.'Admin/Add-Admin.php');
        }
   
    
?>
    <!--menu section ends-->

    <div class = "content">
        <div class = "container">
        <h1>Add Admin</h1>
        <br>

        <form action="" methord="post">

          <table class = "tbl_form">
              <tr></br>
                  <td>full Name: </td>
                  <td>
                      <input type="text" name="full_name" placeholder = "enter name">
                   </td>

              </tr>

              <tr>
                  <td>Username: </td>
                  <td>
                      <input type="text" name="username" placeholder = "enter username">
                  </td>
              </tr>

              <tr>
                  <td>password: </td>
                  <td>
                      <input type="password" name="password" placeholder = "enter password">
                  </td>
              </tr>

              <tr>
                  <td colspan = "2">
                      <input type="submit" name="submit" value= "Add Admin" class = "btn">
                  </td>
              </tr>

          </table>

        </form>
        </div>
    </div>

<?php
   include('repeatable/footer.php');
 
 echo $sql;
 ?>