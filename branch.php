<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/connection.php');

$bank_name = mysqli_real_escape_string($conn, $_REQUEST['bank_name']);
$state_name = mysqli_real_escape_string($conn, $_REQUEST['state_name']);
$district_name = mysqli_real_escape_string($conn, $_REQUEST['district_name']);

$query = "SELECT * FROM data WHERE name='$bank_name' AND state='$state_name' AND district='$district_name' GROUP BY branch";

$result = mysqli_query($conn, $query);

$pagename = "branch";

include ("./header.php");
?>
<br />
<div class="container">
     <div class="table-responsive">
          <table id="branch_data" class="table table-striped table-bordered table-hover table-dark table-sm">
               <thead class="bold center">
                    <tr>
                         <td><h1 class="h1"><?php echo $bank_name; ?> - <?php echo $state_name; ?> - <?php echo $district_name; ?></h1></td>
                    </tr>
               </thead>
                    <?php
while ($row = mysqli_fetch_array($result))
{
?><tr>
                               <td><a href="<?php echo SITE_URL . "branch/" . md5($row['id']) ?>"><?php echo $row['branch']; ?></a></td>
                               </tr>
                               <?php
}
?>
          </table>
     </div>
</div>
<br>
<script>
$(document).ready(function() {
     $('#branch_data').DataTable({
          "language": {
               "search": "Search Branch:"
          }
     });
     if (IsMobile) {} else {
          $('.dataTables_filter input[type="search"]').css({
               'width': '340px',
               'display': 'inline-block'
          });
     }
});
</script>
<?php require_once (PROJECT_PATH . "footer.php"); ?>