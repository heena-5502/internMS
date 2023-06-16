<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Searching</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
      
</head>
<body>

                <div class="content">
                    <div class="container-fluid">


                            <div class="row">
                                    <div class="col-lg-12">
        
                                            <h4 class="m-t-0 header-title">Viewing Records</h4>
        
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th style="width:4%">User ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Degree</th>
                                                    <th>College</th>
                                                    <th>Duration</th>
                                                    <th>Tech</th>
                                                    <th>Company</th>
                                                    <th>Join Date</th>
                                                    
                                                </tr>

                                                </thead>



                                                <tbody>
                                                <tr>

                                                        <?php
                                                         $con=mysqli_connect('localhost','root','','student');

                                                        
                                                         $sn=$_POST['sname'];
                                                         $sid=$_POST['sidno'];
                                                         $degree=$_POST['degree'];
                                                         $duration=$_POST['duration'];
                                                         $technology=$_POST['technology'];
                                                         $guide=$_POST['guide'];
                                                     
                                                         if($_POST['sname']==''and $_POST['sidno']=='' and $_POST['degree']=='' and $_POST['duration']=='' and $_POST['technology']=='' and $_POST['guide']=='')
                                                         {
                                                           echo "<script>window.alert('.....ENTER ANY FIELD......')</script>";
                                                     
                                                         }
                                                         
                                                         
                                                         else
                                                         {
                                                     
                                                         if($_POST['sname'] and $_POST['degree'] and $_POST['duration'] and $_POST['technology'] and $_POST['guide']){
                                                           $query= "SELECT * FROM u_reg WHERE u_college LIKE '%$sn%' and u_degree LIKE '$degree' and u_tech LIKE '$technology' and u_com LIKE '%$guide%' and u_dur LIKE '$duration'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                     
                                                     
                                                         elseif($_POST['sname']=='' and $_POST['degree'] and $_POST['duration'] and $_POST['technology'] and $_POST['guide'])
                                                         {
                                                             $query="SELECT * FROM u_reg WHERE u_degree LIKE '$degree' and u_dur LIKE '$duration' and u_tech LIKE '$technology' and u_com LIKE '%$guide%' ";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree']=='' and $_POST['sname'] and $_POST['duration'] and $_POST['technology'] and $_POST['guide']){
                                                             $query="SELECT * FROM u_reg where u_college like '%$sn%' and u_dur LIKE '$duration' and u_tech LIKE '$technology' and u_com LIKE '%$guide%' ";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['duration']=='' and $_POST['sname'] and $_POST['degree'] and $_POST['technology'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_college like '%$sn%' and u_degree like '$degree' and u_tech LIKE '$technology' and u_com LIKE '%$guide%' ";
                                                           $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['technology']=='' and $_POST['sname'] and $_POST['degree'] and $_POST['duration'] and $_POST['guide']){
                                                             $query="SELECT * from u_reg where u_college like '%$sn%' and u_degree LIKE '$degree' and u_dur like '$duration' and u_com like '%$guide%'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['guide']=='' and $_POST['sname'] and $_POST['degree'] and $_POST['duration'] and $_POST['technology']){
                                                             $query="SELECT * FROM u_reg WHERE u_college LIKE '$sn' and u_degree like '$degree' and u_dur like '$duration' and u_tech like '$technology'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                     
                                                         elseif($_POST['sname'] and $_POST['degree'] and $_POST['duration']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_degree like '$degree' and u_dur like '$duration'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['degree'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_degree like '$degree' and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['degree'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_degree like '$degree' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['duration'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_dur like '$duration' and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['duration'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_dur like '$duration' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['technology'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_tech like '$technology' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['duration'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_dur like '$duration' and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['duration'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_dur like '$duration' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['technology'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_tech like '$technology' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['duration'] and $_POST['technology'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_dur like '$duration'and u_tech like '$technology' and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         
                                                     
                                                     
                                                     
                                                         elseif($_POST['sname'] and $_POST['degree']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_degree like '$degree'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['duration']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_dur like '$duration'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg WHERE u_college like '%$sn%' and u_com like '$guide'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['duration']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_dur like '$duration'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_degree like '$degree'and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['duration'] and $_POST['technology']){
                                                           $query="SELECT * FROM u_reg where u_dur like '$duration'and u_tech like '$technology'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['duration'] and $_POST['guide']){
                                                           $query="SELECT * FROM u_reg where u_dur like '$duration'and u_com like '%$guide%'";
                                                           $run = mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['sname'])
                                                         {
                                                             $query="SELECT * FROM u_reg WHERE u_college LIKE '%$sn%'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                        
                                                     
                                                         elseif($_POST['sidno'])
                                                         {
                                                           $query="SELECT * FROM u_reg WHERE u_id LIKE '$sid'";
                                                           $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['degree']){
                                                             $query="SELECT * FROM u_reg where u_degree like '$degree'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['duration']){
                                                           $query="SELECT * FROM u_reg where u_dur like '$duration'";
                                                           $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['technology']){
                                                             $query="SELECT * from u_reg where u_tech like '$technology'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                     
                                                         elseif($_POST['guide'])
                                                         {
                                                             $query="SELECT * FROM u_reg WHERE u_com LIKE '%$guide%'";
                                                             $run=mysqli_query($con,$query);
                                                         }
                                                        
                                                     
                                                      while ($row=mysqli_fetch_array($run))
                                                      {
                                                             $u_id=$row['u_id'];
                                                             $u_name=$row[0];
                                                             $u_email=$row[1];
                                                             $u_contact=$row[2];
                                                             $u_degree=$row[3];
                                                             $u_college=$row[4];
                                                             $u_dur=$row[5];
                                                             $u_tech=$row[6];
                                                             $u_com=$row[7];
                                                             $u_jdate=$row[8];

                                                    ?>

                                                    <td><?php echo $u_id; ?></td>
                                                    <td><?php echo $u_name ;?></td>
                                                    <td><?php echo $u_email; ?></td>
                                                    <td><?php echo $u_contact; ?></td>
                                                    <td><?php echo $u_degree; ?></td>
                                                    <td><?php echo $u_college; ?></td>
                                                    <td><?php echo $u_dur; ?></td>
                                                    <td><?php echo $u_tech; ?></td>
                                                    <td><?php echo $u_com; ?></td>
                                                    <td><?php echo $u_jdate; ?></td>   
                                                </tr>
                                              <?php } ?>
                                              <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                          </div>

</body>
</html>