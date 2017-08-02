<?php
require_once('../mysql_connect.php');



?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>University Data</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">google.load("jquery", "1.3.2");</script>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-black.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body>
<!-- /.box-header -->
                    <div class="box-body">
                      <table id="customers" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Birthday</th>
						  <th>University</th>
                          <th>Age</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                                require_once('../mysql_connect.php');
                                $start = $_POST['start'];
                                $end = $_POST['end'];
                                $school = $_POST['school'];

                                $query = "SELECT *, TIMESTAMPDIFF(YEAR, (STR_TO_DATE(birthday, '%m/%d/%Y')), CURDATE()) AS age FROM univData
                                where university = '{$school}'
                                having age >= '{start}' and age <= '{$end}';";
                                $result = mysqli_query($dbc,$query);
                                if($result){
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        echo '<tr>';
                                        echo "<td>{$row['surname']}</td>";
                                        echo "<td>{$row['name']}</td>";
                                        echo "<td>{$row['birthday']}</td>";
										echo "<td>{$row['university']}</td>";
                                        echo "<td>{$row['age']}</td>";
                                        /*echo "<td>
                                        <form action=\"selectTransaction.php\" method=\"post\">
                                        <input type='hidden' name='customerID' value='{$row['customerNumber']}' />
                                        <input type='hidden' name='firstName' value='{$row['firstName']}' />
                                        <button class=\"btn btn-block btn-primary\">Select</button></form></td>";*/
                                        echo'</tr>';                                
                                    }
                                }
                        ?>
                        </tbody>
                      </table>
                    </div>
					    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function ()) {
        //Add text editor
        $("#compose-textarea").wysihtml5();
        });
    </script>
    <script>
  $(function () {
    $('#customers').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>