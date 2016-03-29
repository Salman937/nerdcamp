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
   
<link rel="stylesheet" 
href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" 
href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.css">
    
     
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
            <a href=""><b>View Records</b> <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin: 30px">
  
   <!-- table strats -->
   
    <div class="table-responsive"></div>
      <table class="table table-striped" id="table_id">
          <thead>  <!--Table heading -->
            <tr>
              <th>
               Student Name
              </th>
              <th>
               Father's Name
              </th>
              <th>
               Course 
              </th>
              <th>
               Paid
              </th>
              <th>
               Student's Mobile
              </th>
              <th>
               Edit
              </th>
              <th>
               Delete
              </th>
            <th>
               View
              </th>
            </tr>
          </thead>

          <!-- Table body -->
          <tbody>
          <?php foreach ($userdata as $row ) 
          {
          ?>
            <tr>
              <td>
               <?php echo $row->std_name ?>
              </td>
              <td>
                <?php echo $row->fth_name ?>
              </td>
              <td>
                <?php echo $row->course ?>
              </td>
              <td>
                <?php echo $row->paid ?>
              </td>
              <td>
                <?php echo $row->std_mobile ?>
              </td>
              <td>
              <a href="<?php echo base_url(); ?>crud/edit/<?php echo $row->user_id; ?>">Edit</a>
              </td>
              <td>
              <a href="<?php echo base_url(); ?>crud/delete/<?php echo $row->user_id; ?>">Delete</a>
              </td>
               <td>
              <a href="<?php echo base_url(); ?>crud/delete/<?php echo $row->user_id; ?>">View</a>
              </td>
            </tr>  
           <?php } ?> 
          </tbody>

      </table>

   <!-- table Ends -->

  </div>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 

    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js"> </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
      $(document).ready( function () 
       {
         $('#table_id').dataTable(
          {
           "pagingType": "full_numbers",
           "scrollY"  : "400px"
          }
         );
       } 
     );
    </script> <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>