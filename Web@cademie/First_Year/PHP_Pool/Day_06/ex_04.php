<?php
function display_xml_nodes(string $xmlstr, string $node): bool
{
    try {
        $xml = new SimpleXMLElement($xmlstr);
        foreach ($xml->xpath("//$node") as $value) {
            echo $value . "\n";
        }
        return true;
    } catch (Exception $e) {
        return false;
    }
}
