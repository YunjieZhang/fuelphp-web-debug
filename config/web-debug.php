<?php
return array(
    /*
     * Environment to output the ConsoleLog
     */
    'environment' => array(
        Fuel::DEVELOPMENT,
        //Fuel::TEST,
        //Fuel::STAGE,
        //Fuel::PRODUCTION,
    ),
    /* 
     * debug_backtrace() nest level
     * If you wrap your ConsoleLog class, to increase the number of nested.
     */
    'backtrace' => 0,
);
