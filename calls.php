<?php

require('vendor/autoload.php');

$pdo = new PDO('pgsql:host=123.567.89.0;port=5480;dbname=database_single', 'phonesystem', 'Welcome12345!');

$query = $pdo->query("SELECT * FROM callcent_queuecalls ORDER BY idcallcent_queuecalls DESC LIMIT 50");

while ($row = $query->fetch()) {
  
  //Callinfo
  $from = $row['from_userpart'];
	$callid = $row['call_history_id'];
	
	//Queue 
	$queue = $row['q_num'];
	$agent = $row['to_dn'];
	
	//fails
	$reason_noanswer = $row['reason_noanswercode'];
	$reason_fail = $row['reason_failcode'];

  //Time
	$start = $row['time_start'];
	$stop = $row['time_end']; 

       echo $callid; 
  echo " - ";
       echo $from; 
  echo " - ";
       echo $queue; 
  echo " - ";
       echo $agent; 
  echo " - "; 
       echo $reason_noanswer; 
  echo " - "; 
       echo $reason_fail; 
  echo " - "; 
       echo $start; 
  echo " - "; 
       echo $stop; 
  echo "<br>"; 

	$query =  mysql_query("INSERT INTO database.table (call_id, caller, queue, agent, start, stop, fail, noanswer) VALUES ('$callid', $caller', $queue', $agent', $start', $stop', $fail',  $noanswer')");

}

