<?php
  if (issset($_GET['hub_mode']) && issset($_GET['hub_challenge']) issset($_GET['hub_verify_token'])){
    if($_GET['hub_verify_token'] == 'my_verify_token' ){
      echo $_GET['hub_challenge'];
    }
   }
   http_response_code(200);
?>
