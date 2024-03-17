<?php

$xml = new DOMDocument;
$xml->load('data.xml');

if($xml->validate())
{
    echo "Valid Data";
}
else
{
    echo "Not Valid Data";
}

?>