<?php  
 $connect = mysqli_connect("localhost", "root", "", "tbl_employee");  

 $result = mysqli_query($connect, "select * from tbl_employee ORDER BY id desc");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP AJAX Jquery - Load Dynamic Content in Bootstrap Popover</title>  
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:800px;">  
                <h2 align="center">PHP AJAX Jquery - Load Dynamic Content in Bootstrap Popover</h2>  
                <h3 align="center">Employee Data</h3>                 
                <br /><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">ID</th>  
                               <th width="80%">Name</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result)) :?> 
                          {  
                          
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><a href="#" class="hover" id="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></td>  
                          </tr>  
                           
                          }  
                        <?php endwhile; ?>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $('.hover').popover({  
                title:fetchData,  
                html:true,  
                placement:'right'  
           });  
           function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"fetch.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
      });  
 </script>  