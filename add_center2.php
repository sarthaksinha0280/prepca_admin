<?php      
    include("header.php");
    error_reporting(0); 
    include("prepcadb.php"); 
    if(isset($_POST['submit']))
    {
        extract($_POST);
       // var_dump($_POST);
       //////////////////////////////////////////////////////////////
        $query=mysqli_query($conn,"UPDATE cut_off SET W50s='$w50s',X30s='$x30I',X30e='$x30II',Y50s='$y50I',Y50e='$y50II',Z30s='$z30s' WHERE ID='11' ");
        ////////////////////////////////////////////////////////////
        $query=mysqli_query($conn,"UPDATE cut_off SET W100As='$w100AI',W100Ae='$w100AII',X70s='$x70I',X70e='$x70II',Y100As='$y100AI',Y100Ae='$y100AII',Z5070s='$z5070s' WHERE ID='12' ");
        //////////////////////////////////////////////////////////
        $query=mysqli_query($conn,"UPDATE cut_off SET W100Bs='$w100BI',W100Be='$w100BII',X100As='$x100AI',X100Ae='$x100AII',Y100Bs='$y100BI',Y100Be='$y100BII',Z100A='$z100A' WHERE ID='13' ");
        ///////////////////////////////////////////////////////////
        $query=mysqli_query($conn,"UPDATE cut_off SET X100Bs='$x100BI',X100Be='$x100BII',Z100B='$z100B' WHERE ID='14' ");
        ////////////////////////////////////////////////////////////
        if($query)
        {
            $msg="Update successfully";
        }
        else
        {
            $msg="Something went wrong.please Try again later";
        }
    }
?>

        <link href="css/datepicker/datetimepicker.css" rel="stylesheet"/>
        <style type="text/css">

 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding:2.5px;
}

td, th {
  border: 1.5px solid black;
  text-align: left;
  padding: 2%;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
footer
 {
  background-color: green;
  padding: 10px;
  text-align: center;
  color: white;
  border:2px solid black;
 }	</style>	 
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
                               <center> <h2 style="background-color:hsl(0, 0%, 94%)" >cut-off dates update</h2></center>
                               <h2 style="font-weight: bold;" ><?=$msg?> </h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table class="schedule-table1">
  <tr>
    <th>CA Foundation(W)</th>
    <th>IPCC/Intermediate(X)</th>
    <th>CA Final Old/New Course(Y)</th>
    <th>Rs. 99 1st/NEW User Test(Z)</th>
  </tr>
  <tr>
  <?php  
  $query=mysqli_query($conn,"SELECT * FROM cut_off WHERE ID=11");
  $n1=mysqli_fetch_assoc($query);
  ?>
    <td>50% syllabus test-<input type="text" name="w50s"value="<?php echo $n1['W50s']; ?>"></td>
    <td>
    30% syllabus test-
    Group 1-
    <input type="text" name="x30I" value="<?php echo $n1['X30s']; ?>">
    Group 2-
    <input type="text" name="x30II"value="<?php echo $n1['X30e']; ?>">
    </td>
    <td>
    50% syllabus test -
Group 1 - 
<input type="text" name="y50I" value="<?php echo $n1['Y50s']; ?>">
Group 2 -
 <input type="text" name=y50II value="<?php echo $n1['Y50e']; ?>">
    </td>
    <td>
    30% syllabus test -
    <input type="text" name="z30s" value="<?php echo $n1['Z30s']; ?>">
    </td>
  </tr>
  <tr>
    <td>
    100%A syllabus test -<?php
    $query=mysqli_query($conn,"SELECT * FROM cut_off WHERE ID=12");
  $n1=mysqli_fetch_assoc($query);
  ?>
Group 1 -
 <input type="text" name="w100AI" value="<?php echo $n1['W100As']; ?>">
Group 2 -
 <input type="text" name="w100AII" value="<?php echo $n1['W100Ae']; ?>">
    </td>
    <td>
    70% syllabus test -
Group 1 - 
<input type="text" name="x70I" value="<?php echo $n1['X70s']; ?>">
Group 2 - 
<input type="text" name="x70II" value="<?php echo $n1['X70e']; ?>">
    </td>
    <td>
    100% A syllabus test -
Group 1 -
 <input type="text" name="y100AI" value="<?php echo $n1['Y100As']; ?>">
Group 2 -
 <input type="text" name="y100AII" value="<?php echo $n1['Y100Ae']; ?>">
    </td>
    <td>
    50% / 70% syllabus test -<input type="text" name="z5070s" value="<?php echo $n1['Z5070s']; ?>">
    </td>
  </tr>
  <tr>
    <td>
    100%B syllabus test -<?php
    $query=mysqli_query($conn,"SELECT * FROM cut_off WHERE ID=13");
  $n1=mysqli_fetch_assoc($query);
  ?>
Group 1 -
 <input type="text" name="w100BI" value="<?php echo $n1['W100Bs']; ?>">
Group 2 -
 <input type="text" name="w100BII" value="<?php echo $n1['W100Be']; ?>">
    </td>
    <td>
    100% A syllabus test -
Group 1 -
 <input type="text" name="x100AI" value="<?php echo $n1['X100As']; ?>">
Group 2 -
 <input type="text" name="x100AII" value="<?php echo $n1['X100Ae']; ?>">
    </td>
    <td>
    100% B syllabus test -
Group 1 -
 <input type="text" name="y100BI" value="<?php echo $n1['Y100Bs']; ?>">
Group 2 -
 <input type="text" name="y100BII" value="<?php echo $n1['Y100Be']; ?>">
    </td>
    <td>
    100% A syllabus test - <input type="text" name="z100A" value="<?php echo $n1['Z100A']; ?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
    100% B syllabus test -<?php
    $query=mysqli_query($conn,"SELECT * FROM cut_off WHERE ID=14");
  $n1=mysqli_fetch_assoc($query);
  ?>
Group 1 - 
<input type="text" name="x100BI" value="<?php echo $n1['X100Bs']; ?>">
Group 2 -
 <input type="text" name="x100BII" value="<?php echo $n1['X100Be']; ?>">
    </td>
    <td></td>
    <td>
    100% B syllabus test -<input type="text" name="z100B" value="<?php echo $n1['Z100B']; ?>">
    </td>
  </tr>
  </table>
  <br>
  <br>
  <center> <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button><br></br></center>
</div>
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
		<script>
		  $("body").on("click", ".submit_btn", function(){

                 var blog_title        = $.trim($("#blog_title").val());
                 var blog_date 		   = $.trim($("#blog_date").val());
                

                /*if(blog_title == ''){
                    alert("Please enter Coupon Code.");
                    $("#blog_title").focus();
                    return false;
                }

                if(blog_date == ''){
                    alert("Please enter Coupon Discount.");
                    $("#blog_date").focus();
                    return false;
                }*/

                
             

                return true;
            });</script>
        <script type="text/javascript">
            $('.disabled_date').datetimepicker({
                format:'Y-m-d',
                minDate: 0,
                timepicker:false
            });

          
        </script>
		<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('article');
            });
        </script>
    </body>
</html>