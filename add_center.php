<?php
include("header.php"); 
error_reporting(0);
include("prepcadb.php");
if(isset($_POST['submit1']))
{
    extract($_POST);
    //var_dump($_POST);
    //echo $s50;
    $query=mysqli_query($conn,"UPDATE toh SET 50s='$s50I',50e='$e50I',100As='$s100AI',100Ae='$e100AI',100Bs='$s100BI',100Be='$e100BI' WHERE ID='13' ");
    $query=mysqli_query($conn,"UPDATE toh SET 50s='$s50II',50e='$e50II',100As='$s100AII',100Ae='$e100AII',100Bs='$s100BII',100Be='$e100BII' WHERE ID='14' ");
    if($query)
    {
        $msg="Update successfully";
    }
    else
    {
        $msg="Something went wrong.Please Try again later";
        //echo mysqli_error($conn);
    }
}
else if(isset($_POST['submit2']))
    {

        extract($_POST);
        //var_dump($c50);
        
        for($i=8;$i<=15;$i++)
        {
            //echo $c50[$i];            
            $query=mysqli_query($conn , "UPDATE toc SET s50='$c50[$i]' , s100A='$c100A[$i]' , s100B='$c100B[$i]' WHERE ID= $i");
        }
      if($query)
      {
          $msg="Update successfully";
      }
      else
      {
        echo mysqli_error($conn);
      }
    }
?>
        <link href="css/datepicker/datetimepicker.css" rel="stylesheet"/>
        <style type="text/css">
         table 
{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 3px solid #dddddd;
  text-align: left;
  padding: 6px;
}
input
{
    width:50%;
}
#e
{
    background-color:#dddddd;
}
#s
{
    text-align: left;
}
footer
 {
  background-color: green;
  padding: 10px;
  text-align: center;
  color: white;
  border:2px solid black;
}
#q
{
 background-color:#dddddd;
}

     </style>	
    </head>
    <body class="skin-blue">
    	<?php include("top_bar.php"); ?>

    	<div class="wrapper row-offcanvas row-offcanvas-left">
    		<?php include("leftnav.php"); ?>

    		<aside class="right-side">
               <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                   <!-- <h3 class="box-title">Add Center</h3>-->
                                </div>
                                <center><h1 style="color:mediumseagreen">SCHEDULE FOR CA FINAL(OLD SYLLABUS)</h1>
                             
                             <h2 style="font-weight: bold;" style="color:red" > <?=$msg?> </h2>
                                </center> 

                           <center>
                         <h2 style="background-color:#dddddd" style="margin-bottom:0">Test from Home</h2>

                         <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                       
                         <table class="schedule-table1">

                        <thead>
                        <tr>
                            <th>CA Final Old Course - Question Papers available date</th>
                            <th>50%<br>(100 Marks)</span></th>
                            <th>100% A <br>(100 Marks)</span></th>
                            <th>100% B <br>(100 Marks)</span></th>
                         </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Group -1</br><br>
                                    Financial Reporting<br/><br/>
                                    Strategic Financial Management<br/><br/>
                                    Advanced Auditing and Professional Ethics<br/><br/>
                                    Corporate and Allied Laws<br/><br/>
                                
                                </td>
                                <?php
                                    $query=mysqli_query($conn,"SELECT * FROM toh where ID=13");
                                    $n1=mysqli_fetch_assoc($query);
                                  ?>
                                <td>
                                    <center><input type="text" name="s50I" value="<?php echo $n1['50s'] ; ?>"> <br/>to<br/><input type="text" name="e50I" value="<?php echo $n1['50e'] ; ?>"></center>
                                </td>
                                <td>
                                    <center><input type="text" name="s100AI" value="<?php echo $n1['100As'] ; ?>"><br/>to <br/><input type="text" name="e100AI" value="<?php echo $n1['100Ae'] ; ?>"></center>
                                </td>
                                <td>
                                    <center><input type="text" name="s100BI" value="<?php echo $n1['100Bs'] ; ?>"> <br/>to <br/><input type="text" name="e100BI" value="<?php echo $n1['100Be'] ; ?>" ></center>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    Group - 2<br/><br/>
                                    Advanced Management Accounting<br/><br/>
                                    Information Systems Control and Audit<br/><br/>
                                    Direct Tax Laws<br/><br/>
                                    Indirect Tax Laws<br/><br/>
                                </td>
                                <?php
                                    $query=mysqli_query($conn,"SELECT * FROM toh where ID=14");
                                    $n2=mysqli_fetch_assoc($query);
                                  ?>
                                <td>
                                    <center><input type="text" name="s50II" value="<?php echo $n2['50s'] ; ?>"><br/>to<br/><input type="text" name="e50II" value="<?php echo $n2['50e'] ; ?>"></center>
                                </td>
                                <td>
                                    <center><input type="text" name="s100AII" value="<?php echo $n2['100As'] ; ?>"> <br/>to <br/><input type="text" name="e100AII" value="<?php echo $n2['100Ae'] ; ?>"></center>
                                </td>
                                <td>
                                    <center><input type="text" name="s100BII" value="<?php echo $n2['100Bs'] ; ?>"> <br/>to <br/><input type="text" name="e100BII" value="<?php echo $n2['100Be'] ; ?>"></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <center> <button name="submit1" type="submit" value="#" class="btn btn-primary">Submit</button><br></br></center>
                </form>
 
                <center><h2 style="background-color:#dddddd">Update date for Test center </h2></center>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    <table>

                        <tr>
                             
                            <th>CA Final OLd Syllabus</th>
                            <th>50%<br>(100 Marks)</span></th>
                            <th>100% A <br>(100 Marks)</span></th>
                            <th>100% B <br>(100 Marks)</span></th>

                        </tr>
        <?php

        $selet_subject=mysqli_query($conn,"SELECT s.SubjectName,toc.* FROM subjects s JOIN toc on s.ID=toc.ID where s.ExamType=2"); //line1
        while($n1=mysqli_fetch_assoc($selet_subject))  //line 2
        {
            //echo $subject_data;
            //var_dump($subject_data); 
           // $i=($subject_data['ID']+3);
            //echo ($i);
        ?>
                    
                        <tr>
                       <?php 
                                   $i=$n1['ID'];
                                   //echo ($i);
                       //$query=mysqli_query($conn,"SELECT * FROM toc where ID='$i' ");  //line 3 
                                    //$n1=mysqli_fetch_assoc($query); //line 4
                                    //echo "deefwqQWDa";
                                    //var_dump($n1);
                            ?>
                           
                            <td><?=$n1['SubjectName']?></td>
                            <td><input type="text" name="<?php echo "c50[$i]" ?>" value="<?php  echo $n1['s50']; ?>"></td>
                           <?php //echo("c50[$i]");?>
                            <td><input type="text" name="<?php echo "c100A[$i]" ?>" value="<?php  echo $n1['s100A']; ?>"></td>
                            <?php //echo("c100A[$i]");?>
                        <td><input type="text" name="<?php echo "c100B[$i]" ?>" value="<?php  echo $n1['s100B']; ?>"></td>
                        <?php //echo("c100B[$i]");?>
                        <?php //\echo"<br>"; ?>
                        
                        </tr>      
                        
        <?php
        }
        ?>
                </table>
<br>
<center> <button type="submit" name="submit2" value="#" class="btn btn-primary">Submit</button></center>
</form>
<br>
<footer>
    <div>
         <h4>Copyright</h4><h4>&copy</h4><h4>PREPCA 2016</h4>
    </div>
</footer>  
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/plugins/datepicker/datetimepicker.js" type="text/javascript"></script>
        <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    </body>
</html>