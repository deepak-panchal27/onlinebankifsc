<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');

$bank_name = str_replace('-', ' ', mysqli_real_escape_string($conn, $_REQUEST['bank_name']));

$query = "SELECT * FROM data WHERE name='$bank_name' GROUP BY state";

$result = mysqli_query($conn, $query);

$pagename = "state";

require_once ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
     <br />
     <div class="container">
          <div class="table-responsive">
               <table id="bank_data" class="table table-striped table-bordered table-hover table-dark table-sm">
                    <thead class="bold center">
                         <tr>
                              <td><h1 class="h1"><?php echo $bank_name; ?></h1></td>
                         </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                         ?><tr>
                               <td><a href="<?php echo SITE_URL."bank/".str_replace(' ', '-', $row['name']) . "/" . str_replace(' ', '-', $row['state']) ?>"><?php echo $row['state'];?></a></td>
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
                    "search": "Search State:"
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
<?php require_once (PROJECT_PATH."footer.php"); ?>