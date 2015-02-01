<?php
namespace Controller;

use Veto\HTTP\Response;
use Veto\MVC\AbstractController;

class Backend extends AbstractController
{
    public function getData()
    {
        // Read the TSV
        $handle = fopen('../data/data.tsv', 'r');
        $data = array();

        // Read each row
        while ($row = fgetcsv($handle, null, "\t")) {
            $data[] = $row;
        }

        $data = array_slice($data, 0, count($data) - 20);

        // Encode & return
        return new Response(json_encode($data));
    }
}
