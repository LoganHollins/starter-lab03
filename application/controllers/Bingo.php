<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $source = $this->quotes->get(5);
        //assigns all data to the data needed by the view
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];


        $this->render();
    }
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $source = $this->quotes->get(6);
        //assigns all data to the data needed by the view
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];


        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */