Viết một chương trình PHP để tìm chiều cao của ba tòa nhà trên cùng theo thứ tự giảm dần từ tám tòa nhà đã cho
<br>
<?php
  $heights = array();
  while($line = fgets(STDIN)) {
    rtrim($line);
    array_push($heights, (int)$line);
  }
  rsort($heights);
  print("Heights of the top three buildings:\n");
  echo $heights[0]."\n";
  echo $heights[1]."\n";
  echo $heights[2]."\n";
?>
