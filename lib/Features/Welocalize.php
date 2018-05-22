<?php
/**
 * Created by PhpStorm.
 * User: vincenzoruffa
 * Date: 21/05/2018
 * Time: 18:13
 */


namespace Features;

use Features\Welocalize\Model\Analysis\CustomPayableRates;
use Klein\Klein;

class Welocalize extends BaseFeature {

    const FEATURE_CODE = "welocalize";

    public static function loadRoutes( Klein $klein ) {
    }

    public function filterPayableRates( $payableRates, $SourceLang, $TargetLang ){
        return CustomPayableRates::getPayableRates( $SourceLang, $TargetLang );
    }

}