<table border="1">
  <?php
  for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';
    for ($e = 1; $e <= 9; $e++) {
      echo '<td>' . $i * $e . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>