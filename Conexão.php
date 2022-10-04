<?php
 $dbconn = pg_connect("dbname=da8kgo1e67o77e");
 //connect to a database named "mary"
 
 $dbconn2 = pg_connect("host=ec2-44-208-151-7.compute-1.amazonaws.com port=5432 dbname=da8kgo1e67o77e");
 // connect to a database named "mary" on "localhost" at port "5432"
 
 $dbconn3 = pg_connect("host=ec2-44-208-151-7.compute-1.amazonaws.com port=5432 dbname=da8kgo1e67o77e user=zjpvfyzaxnxancpassword=foo");
 //connect to a database named "mary" on the host "sheep" with a username and password
 
 $conn_string = "host=ec2-44-208-151-7.compute-1.amazonaws.com port=5432 dbname=da8kgo1e67o77e user=zjpvfyzaxnxanc password=ca06e6f1b3609cc4dd59103dbbe94534ec193f13e539e9ed268fd4ba0ddf9528";
 $con = pg_connect($conn_string);
 //connect to a database named "test" on the host "sheep" with a username and password
 
 $dbconn5 = pg_connect("host=ec2-44-208-151-7.compute-1.amazonaws.com options='--client_encoding=UTF8'");
 //connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
?>