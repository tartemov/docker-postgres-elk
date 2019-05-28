<?php
// Connect to a database named "benchmark"
$dbconn = pg_connect("host=localhost port=5432 dbname=benchmark password=postgres user=postgres");

// Run some queries
for ($i = 0; $i < 10; $i++) {
  pg_query_params($dbconn, 'SELECT * FROM pg_sleep($1)', array(rand(0,2)));
  pg_query_params($dbconn, 'SELECT * FROM pgbench_accounts WHERE aid = $1', array(rand(0,15000000)));
}
?>
