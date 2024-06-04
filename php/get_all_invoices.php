<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$invoices = $mysendingbox->getAllInvoices(['limit' => 25, 'created_at' => '2024-03-01']);

print_r($invoices);

?>