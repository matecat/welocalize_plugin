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
use BasicFeatureStruct;

class Welocalize extends BaseFeature {

    const FEATURE_CODE = "welocalize";

    public static function loadRoutes( Klein $klein ) {
    }

    public function filterPayableRates( $payableRates, $SourceLang, $TargetLang ){
        return CustomPayableRates::getPayableRates( $SourceLang, $TargetLang );
    }

    /**
     * As Autoload Plugin Welocalize set itself as project feature when an user is logged
     *
     * @param $projectFeatures
     * @param $__postInput
     * @param $userIsLogged
     *
     * @return array
     */
    public function filterCreateProjectFeatures( $projectFeatures, $__postInput, $userIsLogged ) {

        if( $userIsLogged ){
            $projectFeatures[ self::FEATURE_CODE ] = new BasicFeatureStruct( [ 'feature_code' => self::FEATURE_CODE ] );
        }

        return $projectFeatures;

    }

}