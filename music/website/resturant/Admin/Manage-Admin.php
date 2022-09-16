<?php  
   include('repeatable/menu.php');
?>
    <!--menu section ends-->

    <!--content section starts-->
    <div class = "content">
        <div class = "container">
        <h1>Manage Admin</h1>
        <br>

        <!--add Admin-->
        <a href="Add-Admin.php" class= "btn" >Add Admin</a>
</br><br></br>
         <table class="tbl">
             <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Username</th>
                 <th>Manage</th>
             </tr>

             <tr>
                 <td>1 </td>
                 <td>Thabang</td>
                 <td>Shongwe@gmail.com</td>
                 <td>
                 <a href="#" class= "btn2" >Update Admin</a>
                 /<a href="#" class= "btn2" >delete Admin</a>
                 </td>
             </tr>
             <tr>
                 <td>2 </td>
                 <td>Thabang</td>
                 <td>Shongwe@gmail.com</td>
                 <td>
                 <a href="#" class= "btn2" >Update Admin</a>
                 /<a href="#" class= "btn2" >delete Admin</a>
                 </td>
             </tr>
             <tr>
                 <td>3 </td>
                 <td>Thabang</td>
                 <td>Shongwe@gmail.com</td>
                 <td>
                 <a href="#" class= "btn2" >Update Admin</a> 
                / <a href="#" class= "btn2" >delete Admin</a>
                 </td>

             </tr>
         </table>
        </div>
    </div>
     <!--content section ends-->

     <?php  
   include('repeatable/footer.php');
?>
</body>
</html>