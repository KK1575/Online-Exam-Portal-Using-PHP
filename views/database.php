<?php
    $dbHost="localhost";  
    $dbName="user";  
    $dbUser="postgres";      //by default root is user name.  
    $dbPassword="KK1575";     //password is blank by default 
    $port="5432";

    try{  
        $db= new PDO("pgsql:host=$dbHost;port=$port;dbname=$dbName",$dbUser,$dbPassword);  
      //   Echo "Successfully connected with myDB database"; 
    } catch(Exception $e){  
    Echo "Connection failed" . $e->getMessage();  
    }  
   ?>
