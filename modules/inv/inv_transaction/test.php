<?php
include_once("../../../include/basics/header.inc");

$inv_transaction = new inv_transaction;
//
// $data = array(
//    array("firstname" => "Ma ry", "lastname" => "Joh & nson", "a!ge" => 25),
//    array("firstname" => "Amanda", "lastname" => "Miller", "a_ge" => 18),
//    array("firstname" => "James", "lastname" => "Brown", "age" => 31),
//    array("firstname" => "Patricia", "lastname" => "Williams", "age" => 7),
//    array("firstname" => "Michael", "lastname" => "Davis", "age" => 43),
//    array("firstname" => "Sarah", "lastname" => "Miller", "age" => 24),
//    array("firstname" => "Patrick", "lastname" => "Miller", "age" => 27)
//  );
//   
//      function cleanData(&$str)
//  {
//    if($str == 't') $str = 'TRUE';
//    if($str == 'f') $str = 'FALSE';
//    if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
//      $str = "'$str";
//    }
//    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
//    $str = mb_convert_encoding($str, 'UTF-16LE', 'UTF-8');
//  }
//  
// echo serialize($data);
//echo '<br/><br/><br/>';
// echo json_encode($data);
?>

<?php
global $db;
//$inv_transaction_types = inv_transaction::inv_transaction_types();
//  echo '<pre>';
//  print_r($inv_transaction_types);
//  echo '<pre>';
//$query = "SHOW COLUMNS FROM inv_transactions ";
////
////$query="Select * from information_schema.tables where table_name='inv_transaction'";
//
//$query="select *
//from information_schema.key_column_usage
//where constraint_schema = 'inoideas_erp'" ;
//
////"AND TABLE_NAME LIKE '%inv_transaction%'"
//
//$result = $db->query($query);
//while($rows = $db->fetch_array($result)){
////  echo '<pre>';
////  print_r($rows);
////  echo '<pre>';
//  echo '<br /> TABLE_NAME]  is : ' . $rows['TABLE_NAME'];
//}
$query1= "ALTER TABLE inv_transaction 
  ADD `wip_wo_bom_id` INT(12)  AFTER document_id";
//////
////$query1="ALTER TABLE inv_transaction ADD UNIQUE INDEX (inv_transaction_number, inventory_id)";
//// ADD `serial_generation` varchar(50) NOT NULL AFTER serial_uniqueness,
//// ADD `serial_prefix` varchar(50) NOT NULL AFTER serial_generation,
////// ADD `serial_starting_number` varchar(50) NOT NULL AFTER serial_prefix ";
//$query1= "ALTER TABLE inv_transaction 
// CHANGE `inv_transaction_id` inv_transaction_id int(12)";

// CHANGE `transfer_to_gl` transfer_to_gl_cb tinyint(1),
// CHANGE `transaction_rev_enabled` transaction_rev_enabled_cb tinyint(1)";

//$query1 = "alter table inv_transaction modify column inv_transaction_id int(12) auto_increment";
//////////
//$result1 = $db->query($query1);
//$query = "RENAME TABLE mtl_transactions TO inv_transaction ";
//$result = $db->query($query);
//$query = "SELECT * FROM inv_transaction ";

//$query = inv_transaction::find_by_id('55');
//$query = "SELECT * FROM inv_transaction ";
////////
//echo '<h2>New values </h2>' ;
////////$query="Select * from information_schema.tables where table_name='enterprise'";
//$result = $db->query($query);
//while($rows = $db->fetch_array($result)){
//  echo '<br /> field_name is '.$rows['Field'];
//}
//
echo '<h2>New values </h2>' ;

	 $query = "SHOW COLUMNS FROM inv_transaction ";
//$query = "Select *  FROM all_po_v ";
////
//echo '<h2>New values </h2>' ;
//
////echo "<pre>"; 
////print_r(po_header::find_all());
////$query="Select * from information_schema.tables where table_name='enterprise'";
$result = $db->query($query);
////
//echo "<pre>";
//print_r($result);
//echo "<pre>";
////
while ($rows = $db->fetch_array($result)) {
// echo '<br /> field_name is ' . $rows['Field'];
 echo "<pre>";
 print_r($rows);
}
//   
//   $result = $db->result_array_assoc($query);
//   print_r($all_columns);
////$query="Select * from information_schema.tables where table_name='enterprise'";

//while($rows = $db->fetch_array($result)){
//  echo '<pre>';
//  print_r($query);
//  echo '<pre>';
//}


?>
<!--  <select name="inventory_id" id="inventory_id" > 
   
<?php
//  $inv_transaction_masters= inventory_org::find_all_inv_transaction_master();
//  echo '<pre>';
//  print_r($inv_transaction_masters);
//  echo '<pre>';
//  foreach ($inv_transaction_masters as $key=>$value) {
//    echo '<option value="' . $value->inventory_id .'"';
////    echo $types[$i]->option_line_code == $org->type ? 'selected' : 'NONE';
//    echo '>' . $value->code . ' (inventory id '. $value->inventory_id .') </option>';
//  }
?> 
<option value="" ></option> 
  </select> -->
<!--   end of structure-->

<?php
execution_time();
include_template('footer.inc')
?>

