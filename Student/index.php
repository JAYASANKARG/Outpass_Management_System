<?php
  session_start();
  require('../database/database.php');
  $user=$_SESSION['student'];
	if(!isset($_SESSION['student']))
	{
		header('Location: ..');
  }
  
  $query = $db->prepare('SELECT * FROM outpass where register_number=? order by created_at');
  $query->execute([$user]);
  $apply=$query->rowcount();

  $query1=$db->prepare('SELECT status FROM outpass where register_number=? and  status!="reject" and status!="closed"');
  $query1->execute([$user]);
  $pending=$query1->rowcount();

  $query2=$db->prepare('SELECT * FROM outpass where register_number=? and status="closed"');
  $query2->execute([$user]);
  $approval=$query2->rowcount();

  $query3=$db->prepare('SELECT * FROM outpass where register_number=? and  status="reject"');
  $query3->execute([$user]);
  $reject=$query3->rowcount();

  foreach ($query1 as $one) :
    $status=$one["status"];
  endforeach;



?>
<html>
<header>
<link rel="stylesheet" type="text/css" href="../css/dash.css">
<script src="../js/dash.js"></script>
<link rel="stylesheet" href="../css/track.css">
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</header>

<body>
  <div class="">
    <header class="navbar-fixed-top">
      <div class="row">
        <div class="container-fluid">
          <div class="pull-left">
            <div class="pull-left logo text-center">
            <span><?php ;
            echo $user ?><span>
            </div>
          </div>
          <div class="pull-right">
            <div class="marr20">
              <ul class="nav navbar-top-links navbar-right">
                <li  class="dropdown user"><a href="apply_new_outpass.php">Apply Outpass</a></li>
               
                <li class="dropdown user">
                  <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class=
                  "fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu dropdown-user">
                    <li>
                      <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    
                    <li>
                      <a href="../database/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                  </ul><!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <br>
    <!-- Main Content -->
      <div class="container-fluid">
        
          <div class="page-title-box">
            <h3 class="page-title pull-left">Dashboard</h3>
            
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                  
                  <i class="fa fa-bar-chart-o" ></i> Outpass Deatils
                </div>
                <br>
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-9">
                          <div class="huge">
                            <?php echo $apply?>
                          </div>
                          <div>
                            Applied
                          </div>
                        </div>
                        <div class="col-xs-3 text-right">
                          <i class="fa fa-cogs fa-5x"></i>
                        </div>
                      </div>
                    </div><a href="#apply">
                    <div class="panel-footer" onclick="myFunction()">
                      <span class="pull-left " >View Details</span> <span class="pull-right"><i class=
                      "fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="panel panel-yellow">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-9">
                          <div class="huge">
                            <?php echo $pending;?>
                          </div>
                          <div>
                            Pending
                          </div>
                        </div>
                        <div class="col-xs-3 text-right">
                          <i class="fa fa-laptop fa-5x"></i>
                        </div>
                      </div>
                    </div><a href="#pending">
                    <div class="panel-footer" onclick="pending()">
                      <span class="pull-left">View Details</span> <span class="pull-right"><i class=
                      "fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                    </div></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="panel panel-green">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-9">
                          <div class="huge">
                          <?php echo $approval;?>
                          </div>
                          <div>
                            Approval
                          </div>
                        </div>
                        <div class="col-xs-3 text-right">
                          <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                      </div>
                    </div><a href="#approval">
                    <div class="panel-footer"  onclick="approval()">
                      <span class="pull-left">View Details</span> <span class="pull-right"><i class=
                      "fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                    </div></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="panel panel-red">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-9">
                          <div class="huge">
                          <?php echo $reject;?>
                          </div>
                          <div>
                            Rejected
                          </div>
                        </div>
                        <div class="col-xs-3 text-right">
                          <i class="fa fa-dollar fa-5x"></i>
                        </div>
                      </div>
                    </div><a href="#reject">
                    <div class="panel-footer" onclick="reject()">
                      <span class="pull-left">View Details</span> <span class="pull-right"><i class=
                      "fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            </div>

            

        <div id="apply" style="display:none;">
            <div class="col-sm-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <i class="fa fa-table fa-fw"></i> Apply Table Details
                </div>
                <div class="table-responsive">
                  <table class="table table-striped" id="example">
                    <tr>
                    <th></th>
                    <th>Outpass Number</th>
                    
                   
                    <th>Place of visit</th>
                    <th>Outpass type</th>
                    <th>Out Time</th>
                    <th>Out Date</th>
                    <th>In Time</th>
                    <th>In Date</th>
                    <th>Reason</th>
                    </tr>
                    <?php foreach ($query as $one) : ?>
                    <tr>
                    <td>
				  <form action="outpass_details.php" method="POST" target="_blank">
					<input type="hidden" value="<?php echo $one["outpass_number"] ?>" name="number" >

					<button type="submit" class="btn btn-primary" name="view">View</button>
					</form>
					</td>
                      <td><?php echo $one["outpass_number"]?></td>
                      
                      
                      <td><?php echo $one["place"]?></td>
                      <td><?php echo $one["outpass_type"]?></td>
                      <td><?php echo $one["out_time"]?></td>
                      <td><?php echo $one["out_date"]?></td>
                      <td><?php echo $one["in_time"]?></td>
                      <td><?php echo $one["in_date"]?></td>
                      <td><?php echo $one["reason"]?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                  
                </div>
                
              </div>
              
            </div>
        </div>
        
        <!--pending table-->
        
        <div id="pending" style="display:none;">
            <div class="col-sm-12">
            <div class="checkout-wrap">
  <ul class="checkout-bar">

    <li class="" id="create" >
      Created
    </li>
    
    <li class="" id="warden">Warden Approval</li>
    
    <li class="" id="watch">Watchman Approval</li>
    
    <li class="" id="out">Ready to Out</li>
    
    <li class="">Return to College</li>
       
  </ul>
</div>
            </div>
        </div>

        <!--approval-->

        <div id="approval" style="display:none;">
            <div class="col-sm-12">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <i class="fa fa-table fa-fw"></i> Approval Table Details
                </div>
                <div class="table-responsive">
                  <table class="table table-striped" id="example">
                    <tr>
                    <th></th>
                    <th>Outpass Number</th>
                    
                    <th>Place of visit</th>
                    <th>Outpass type</th>
                    <th>Out Time</th>
                    <th>Out Date</th>
                    <th>In Time</th>
                    <th>In Date</th>
                    <th>Reason</th>
                    </tr>
                    <?php foreach ($query2 as $one) : ?>
                    <tr>
                    <td>
				            <form action="outpass_details.php" method="POST" target="_blank">
					          <input type="hidden" value="<?php echo $one["outpass_number"] ?>" name="number" >

					          <button type="submit" class="btn btn-primary" name="view">View</button>
					          </form>
					          </td>
                      <td><?php echo $one["outpass_number"]?></td>
                    
                      <td><?php echo $one["place"]?></td>
                      <td><?php echo $one["outpass_type"]?></td>
                      <td><?php echo $one["out_time"]?></td>
                      <td><?php echo $one["out_date"]?></td>
                      <td><?php echo $one["in_time"]?></td>
                      <td><?php echo $one["in_date"]?></td>
                      <td><?php echo $one["reason"]?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                  
                </div>
                
              </div>
              
            </div>
        </div>

        <!--Rejected-->

        <div id="reject" style="display:none;">
            <div class="col-sm-12">
              <div class="panel panel-red">
                <div class="panel-heading">
                  <i class="fa fa-table fa-fw"></i> Reject Table Details
                </div>
                <div class="table-responsive">
                  <table class="table table-striped" id="example">
                    <tr>
                    <th></th>
                    <th>Outpass Number</th>
                    
                    <th>Place of visit</th>
                    <th>Outpass type</th>
                    <th>Out Time</th>
                    <th>Out Date</th>
                    <th>In Time</th>
                    <th>In Date</th>
                    <th>Reason</th>
                    </tr>
                    <?php foreach ($query3 as $one) : ?>
                    <tr>
                    <td>
				            <form action="outpass_details.php" method="POST" target="_blank">
					          <input type="hidden" value="<?php echo $one["outpass_number"] ?>" name="number" >

					          <button type="submit" class="btn btn-primary" name="view">View</button>
					          </form>
					          </td>
                      <td><?php echo $one["outpass_number"]?></td>
                      
                      <td><?php echo $one["place"]?></td>
                      <td><?php echo $one["outpass_type"]?></td>
                      <td><?php echo $one["out_time"]?></td>
                      <td><?php echo $one["out_date"]?></td>
                      <td><?php echo $one["in_time"]?></td>
                      <td><?php echo $one["in_date"]?></td>
                      <td><?php echo $one["reason"]?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                  
                </div>
                
              </div>
              
            </div>
        </div>

        
  </div>
  </div>
  
  <script>
   var a = document.getElementById("apply");
  var b = document.getElementById("pending");
  var c=document.getElementById("approval");
  var d=document.getElementById("reject");
  var w=document.getElementById("create");
 var x=document.getElementById("warden");
 var y=document.getElementById("watch");
 var z=document.getElementById("out");
  function myFunction() {
 
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
  } else {
    a.style.display = "none";
  }
}

function pending() {


 if (b.style.display === "none") {
   b.style.display = "block";
   a.style.display = "none";
   c.style.display = "none";
   d.style.display = "none";
   if("<?php if(isset($status)) echo $status?>"=="watchman-ok"){
   w.className="active";
   x.className="active";
   y.className="active";
   z.className="active";
 }
 else if("<?php if(isset($status)) echo $status?>"=="warden-ok"){
  w.className="active";
   x.className="active";
   y.className="";
   z.className="";
 }
 else if("<?php if(isset($status)) echo $status?>"=="created"){
  w.className="active";
   x.className="";
   y.className="";
   z.className="";
 }
 else{
  w.className="";
   x.className="";
   y.className="";
   z.className="";
 }
   
 } else {
   b.style.display = "none";
 }
 
}

function approval() {
 
 if (c.style.display === "none") {
   c.style.display = "block";
   b.style.display = "none";
   a.style.display = "none";
   d.style.display = "none";
 } else {
   c.style.display = "none";
 }
}

function reject() {
 
 if (d.style.display === "none") {
   d.style.display = "block";
   b.style.display = "none";
   c.style.display = "none";
   a.style.display = "none";

   
 } else {
   d.style.display = "none";
 }
}



 





</script>
</body>

</html>