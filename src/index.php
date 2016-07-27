
<?php
   // connect to mongodb
   $m = new MongoClient("mongodb://localhost:27017");
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
?>