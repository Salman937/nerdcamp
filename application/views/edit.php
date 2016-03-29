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
  
  <div class="container" style="margin: 30px">
      <form  class="form-horizontal"  method="post" action="<?php echo base_url();?>crud/Update">
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" name="std_name" class="form-control" placeholder="Student Name" maxlength="15" value="<?php echo $Edit->std_name ?>">
          </div>
          <div class="col-sm-4">
            <input type="text"  name="fth_name" class="form-control" placeholder="Father Name " maxlength="15" value="<?php echo $Edit->fth_name ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
           <input type="text"  name="ntnlty" class="form-control" placeholder="Nationality" maxlength="26" value="<?php echo $Edit->nationality ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <select name="courses" class= "form-control" value="<?php echo $Edit->course ?>">
               <option value="null">Select Course</option>
               <option> GAME DEVELOPMENT</option>
               <option> WEB DEVELOPMENT</option>
               <option> .NET DEVELOPMENT</option>
               <option> WEB DESINGING</option>
               <option> GRAPHICS</option>
               <option> PYTHON</option>
               <option> ANDROID DEVELOPMENT</option>
               <option> IOS DEVELOPMENT</option>
               <option> 3D MODELLING</option>
               <option> ARDUINO</option>
               <option> RUBY ON RAILS</option>
               <option> JAVA</option>
            </select>
          </div>
          <div class="col-sm-4">
           <input type="text"  name="cnic" class="form-control" placeholder="CNIC" maxlength="26" value="<?php echo $Edit->cnic ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
           <textarea class="form-control" name="pre_adrs" rows="3" placeholder="Present Address"><?php echo $Edit->present_adrs ?></textarea>
          </div>
          <div class="col-sm-4">
           <textarea class="form-control" rows="3" name="per_adrs" placeholder="Permanent Address">
           <?php echo $Edit->permanent_adrs ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
           <input type="text"  name="std_mobile" class="form-control" placeholder="Student's Mobile" maxlength="26" value="<?php echo $Edit->std_mobile ?>">
          </div>
          <div class="col-sm-4">
           <input type="text"  name="fth_mobile" class="form-control" placeholder="Father's Mobile" maxlength="26" value="<?php echo $Edit->fth_mobile ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <hr>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8" style="text-align: center">
           <font size="3" ><b>FOR OFFICE USE ONLY</b></font>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text" name="admsn_no" class="form-control" placeholder="Admission No" maxlength="15" value="<?php echo $Edit->admsn_no?>">
          </div>
          <div class="col-sm-4">
            <input type="text"  name="tot_fee" class="form-control" placeholder="Total Fee " maxlength="15" value="<?php echo $Edit->total_fee ?>" >
          </div>
        </div>
         <div class="form-group">
          <div class="col-sm-4">
            <input type="text" name="cls" class="form-control" placeholder="Class" maxlength="15" value="<?php echo $Edit->class ?>" >
          </div>
          <div class="col-sm-4">
            <input type="text"  name="paid" class="form-control" placeholder="paid " maxlength="15" value="<?php echo $Edit->paid ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="text"  name="bal" class="form-control" placeholder="Balance" maxlength="15" value="<?php echo $Edit->balance ?>">
            <input type="hidden" name="ID" value="<?php echo $Edit->user_id ?>"> 
          </div>
        </div>
        <div class="form-group" >
          <div class="col-sm-8" style="padding-left: 340px">
           <input type="submit" name="submit" class="btn btn-info btn-lg" value="Update"> </div>
        </div>
    </form>
  </div>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>