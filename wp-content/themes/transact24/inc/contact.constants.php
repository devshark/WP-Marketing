<?php
  define('GRACE_LAM', "grace.lam@transact24.com");
  define('PHILIP_MEYER', "philip.meyer@transact24.com");
  define('CHRISTOFF_FOURIE', "christoff.fourie@transact24.com");
  define('ERIK_HAKANS', "erik.hakans@transact24.com");
  define('FREDA_HO', "freda.ho@transact24.com");

  define('IS_TEST', true);//set false if live
  define('GOFFEE_KO', "goffee.ko@transact24.com");
  define('ANTHONY_LIM', "anthony.lim@transact24.com");
  define('BEN_CHAN', "ben.chan@transact24.com");
  define('PETER_CHAN', "peter.chen@transact24.com");
  define('CHRIST', "chris.telfer@transact24.com");

  function option_and_email_map(){
      $email_map_array = array(
          "ACH Processing" => array(CHRISTOFF_FOURIE, PHILIP_MEYER),
          "Alipay Solutions" => array(GRACE_LAM),
          "Card Processing" => array(GRACE_LAM, PHILIP_MEYER),
          "China UnionPay" => array(GRACE_LAM),
          "Prepaid Cards" => array(ERIK_HAKANS, PHILIP_MEYER),
          "Travel Insurance" => array(PHILIP_MEYER),
          "White Label Gateway" => array(GRACE_LAM, PHILIP_MEYER),
          "General Enquiries" => array(FREDA_HO)
        );
	  return $email_map_array;
  }

  function option_and_email_map_for_test(){
      $email_map_array = array(
          "ACH Processing" => array(CHRIST, BEN_CHAN, ANTHONY_LIM),
          "Alipay Solutions" => array(BEN_CHAN, CHRIST, ANTHONY_LIM),
          "Card Processing" => array(BEN_CHAN, GOFFEE_KO, CHRIST, ANTHONY_LIM),
          "China UnionPay" => array(BEN_CHAN, CHRIST, ANTHONY_LIM),
          "Prepaid Cards" => array(BEN_CHAN, PETER_CHAN, CHRIST, ANTHONY_LIM),
          "Travel Insurance" => array(BEN_CHAN, CHRIST, ANTHONY_LIM),
          "White Label Gateway" => array(BEN_CHAN, GOFFEE_KO, CHRIST, ANTHONY_LIM),
          "General Enquiries" => array(BEN_CHAN, CHRIST, ANTHONY_LIM)
        );
	  return $email_map_array;
  }

  $option_and_email_map = array();
  if(IS_TEST){
    $option_and_email_map = option_and_email_map_for_test();
  }else{
    $option_and_email_map = option_and_email_map();
  }
