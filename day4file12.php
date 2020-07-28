              <?php
if(isset($_POST['name'])) {
  $name = $_POST['name'];
  if(!empty($name)) {
    $handle = fopen('naam.txt', 'a');
    fwrite($handle, $name. "\n");
    fclose($handle);

    echo 'Current names in file:';
     $count=1;
    $readin = file('naam.txt');
    $readin_count = count($readin);
    foreach($readin as $fname){

      echo trim($fname);
      if($count<=$readin_count){
        echo ', ';
    }
    $count++;
   }
  
  }else {
    echo 'Please type a name.' ;
  }
}

?>
<form action="day4file12.php" method="POST">
<input type="text" name="name"><br><br>
<input type="submit" value="Submit">
</form>