<?php

namespace App\Controllers;

use App\Models\Journal;
use Symfony\Component\Routing\RouteCollection;

class JournalController
{
    public function showAction($id, RouteCollection $routes)
    {
        $journal = new \App\Models\Journal();
    	$journal->read($id);

    	require APP_ROOT . '/views/journal.php';
    }
}
