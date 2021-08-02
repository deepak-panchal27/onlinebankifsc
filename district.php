<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/connection.php');

$bank_name = mysqli_real_escape_string($conn, $_REQUEST['bank_name']);
$state_name = mysqli_real_escape_string($conn, $_REQUEST['state_name']);

$query = "SELECT * FROM data WHERE name='$bank_name' AND state='$state_name' GROUP BY district";

$result = mysqli_query($conn, $query);

$pagename = "district";

require_once ($_SERVER['DOCUMENT_ROOT'] . '/header.php');
?>
<br />
<div class="container">
     <div class="table-responsive">
          <table id="bank_data" class="table table-striped table-bordered table-hover table-dark table-sm">
               <thead class="bold center">
                    <tr>
                         <td><h1 class="h1"><?php echo $bank_name; ?> - <?php echo $state_name; ?></h1></td>
                    </tr>
               </thead>
               <?php
while ($row = mysqli_fetch_array($result))
{
?><tr>
                              <td><a href="<?php echo SITE_URL . "bank/" . urlencode($row['name']) . "/" . urlencode($row['state']) . "/" . urlencode($row['district']) ?>"><?php echo $row['district']; ?></a></td>
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
     $('#bank_data').DataTable({
          "language": {
               "search": "Search District:"
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