<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array ( 
      array("01","Crystal Water","7 Baht","img/001.jpg"),
      array("02","น้ำทิพย์","10 Baht","img/002.jpg"),
      array("03","น้ำดื่มสิงห์","7 Baht","img/003.jpg"),
      array("04","น้ำดื่มเพียวเร่","7 Baht","img/004.jpg"),
      array("05","น้ำดื่ม sprinkle","7 Baht","img/005.jpg"),
      array("06","น้ำแร่ evian","15 Baht","img/006.jpg"),
      array("07","น้ำแร่ Mount Fleur","15 Baht","img/007.jpg"),
      array("08","น้ำแร่ ICELANDIC","15 Baht","img/008.jpg"),
      array("09","น้ำดื่ม ช้าง","15 Baht","img/009.jpg"),
      array("10","น้ำแร่ Purrar","15 Baht","img/010.jpg"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
      $r = rand(0,256);
      $g = rand(0,256);
      $b = rand(0,256);

      echo"<td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
      <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
      <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
      <td ><img src=".$products[$i][3]." width='230' height='230' /></td>
      </tr>";  
    }

    echo '</table>';
?>

</body>
</html>