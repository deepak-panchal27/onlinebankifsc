<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/connection.php');

$query = "SELECT * FROM bank_names ORDER BY name ASC";
$result = mysqli_query($conn, $query);

$pagename = "bank-list";

require_once ($_SERVER['DOCUMENT_ROOT'] . '/header.php');
?>
<br />
<div class="container">
     <div class="table-responsive">
          <table id="bank_names" class="table table-striped table-bordered table-hover table-dark table-sm">
               <thead class="center bold">
                    <tr>
                         <td><h1 class="h1">BANK NAMES</h1></td>
                    </tr>
               </thead>
               <?php
while ($row = mysqli_fetch_array($result))
{
?><tr>
                              <td><a href="<?php echo SITE_URL . "bank/" . str_replace(' ', '-', $row['name']) ?>"><?php echo $row['name']; ?></a></td>
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
          $('#bank_names').DataTable({
               "language": {
                    "search": "Search Bank:"
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