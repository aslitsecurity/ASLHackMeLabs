
    <?php
     
    $method = $_SERVER["REQUEST_METHOD"];
    $uri = $_SERVER['REQUEST_URI'];
    $query = $_SERVER["QUERY_STRING"];
    $post = file_get_contents("php://input");
    echo "Method: $method<br>URI: $uri<br>GET: $query<br>";
    $header = "";
    foreach (getallheaders() as $name => $value)
    {
        $header .= $name;
	$header .= ": ";
	$header .= $value;
	$header .= "\n";
	
    }
    
    echo "POST: $post<br>";
   
    $logFile = "log.txt";
    $log = "Method: $method" . "\n";
    $log .= "URI: $uri" . "\n";
    $log .= "GET: $query" . "\n";
    $log .= "$header" . "\n";
    $log .= "POST: $post" . "\n";
    file_put_contents($logFile, $log, FILE_APPEND);
    ?>Array
(
)
Array
(
)
Array
(
)
Array
(
    [918268@] => 
)
Array
(
)
Array
(
)
