<?php
  require_once("PdoUtil.php")
?>
<html>
  <body>
    <?php
      $pdo = PdoUtil::getInstance();
      $stmt = $pdo->prepare("select count(1) from city");
      $stmt->execute();
      $row = $stmt->fetch();
      echo "Total: " . $row[0];
    ?>
  </body>
</html>
