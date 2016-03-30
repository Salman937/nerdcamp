<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">The Nerd Camp</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo base_url();?>crud/view_record"><b>View Records</b> <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin: 30px">
   <div class="row">
      <div class="col-sm-2">
        Student Name:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->std_name ; ?></u>
      </div>
   </div> 
   <br>
   <div class="row">
       <div class="col-sm-2">
        Father's Name:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->fth_name ?></u>
      </div>
    </div>
     <br>
   <div class="row">
       <div class="col-sm-2">
        Course:
      </div>
      <div class="col-sm-4">
        <u><?php echo $Show->course ?></u>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-2">
        Nationality:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->nationality ?></u>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-2">
        Present Address:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->present_adrs ?></u>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-2">
        Permanent Address:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->permanent_adrs ?></u>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-1">
        CNIC:
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->cnic ?></u>
      </div>
      <div class="col-sm-2">
         Student's Mobile
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->std_mobile ?></u>
      </div>
      <div class="col-sm-2">
        Father's Mobile
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->fth_mobile ?></u>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-10">
        <b>Declaration</b>:<br>
       <pre>
       I <b><?php echo $Show->std_name ; ?></b> hereby solemnly declare that the particulars given above are correct and it shall be<br>       reponsibility to abide the decision of the mangement and follow all academy rules and the procedures.
       
       </pre>
      </div>
    </div>
    <br>
    <div class="row">
       <div class="col-sm-2">
        Student signature<br><br>
        ----------------------
      </div>
    </div>
     <table class="table">
       <tr>
        <td style="padding-left: 350PX">
           FOR OFFICE USE ONLY
         </td>
       </tr>
     </table>
     <br>
    <div class="row">
       <div class="col-sm-1">
        Addmission No:
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->admsn_no ?></u>
      </div>
      <div class="col-sm-2">
         Total Fee:
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->total_fee ?></u>
      </div>
    </div>
     <br>
    <div class="row">
       <div class="col-sm-1">
        Class:
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->class ?></u>
      </div>
      <div class="col-sm-2">
         Paid:
      </div>
      <div class="col-sm-1">
        <u><?php echo $Show->paid ?></u>
      </div>
    </div>
       <br>
    <div class="row">
       <div class="col-sm-1">
        Date:
      </div>
      <div class="col-sm-3">
        <u><?php echo $Show->date ?></u>
      </div>
      <div class="col-sm-1">
         Balnace:
      </div>
      <div class="col-sm-2">
        <u><?php echo $Show->balance ?></u>
      </div>
    </div>  
     <button class="btn btn-info" onclick="myFunction()">Print</button>
    </div>
  </div>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      function myFunction()
       {
         window.print();
       }
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>