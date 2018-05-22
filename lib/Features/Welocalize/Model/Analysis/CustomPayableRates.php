<?php
/**
 * Created by PhpStorm.
 * User: vincenzoruffa
 * Date: 21/05/2018
 * Time: 18:23
 */

namespace Features\Welocalize\Model\Analysis;


class CustomPayableRates extends \Analysis_PayableRates {

    public static $DEFAULT_PAYABLE_RATES = [
            'NO_MATCH'    => 100,
            '50%-74%'     => 100,
            '75%-84%'     => 60,
            '85%-94%'     => 60,
            '95%-99%'     => 60,
            '100%'        => 30,
            '100%_PUBLIC' => 30,
            'REPETITIONS' => 30,
            'INTERNAL'    => 60,
            'MT'          => 75
    ];

}

