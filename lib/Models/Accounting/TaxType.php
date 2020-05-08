<?php
/**
 * TaxType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.1.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TaxType Class Doc Comment
 *
 * @category Class
 * @description See Tax Types – can only be used on update calls
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxType
{
    /**
     * Possible values of this enum
     */
    const OUTPUT = 'OUTPUT';
    const INPUT = 'INPUT';
    const CAPEXINPUT = 'CAPEXINPUT';
    const EXEMPTEXPORT = 'EXEMPTEXPORT';
    const EXEMPTEXPENSES = 'EXEMPTEXPENSES';
    const EXEMPTCAPITAL = 'EXEMPTCAPITAL';
    const EXEMPTOUTPUT = 'EXEMPTOUTPUT';
    const INPUTTAXED = 'INPUTTAXED';
    const BASEXCLUDED = 'BASEXCLUDED';
    const GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';
    const GSTONIMPORTS = 'GSTONIMPORTS';
    const NONE = 'NONE';
    const INPUT2 = 'INPUT2';
    const ZERORATED = 'ZERORATED';
    const OUTPUT2 = 'OUTPUT2';
    const CAPEXINPUT2 = 'CAPEXINPUT2';
    const CAPEXOUTPUT = 'CAPEXOUTPUT';
    const CAPEXOUTPUT2 = 'CAPEXOUTPUT2';
    const CAPEXSRINPUT = 'CAPEXSRINPUT';
    const CAPEXSROUTPUT = 'CAPEXSROUTPUT';
    const ECACQUISITIONS = 'ECACQUISITIONS';
    const ECZRINPUT = 'ECZRINPUT';
    const ECZROUTPUT = 'ECZROUTPUT';
    const ECZROUTPUTSERVICES = 'ECZROUTPUTSERVICES';
    const EXEMPTINPUT = 'EXEMPTINPUT';
    const REVERSECHARGES = 'REVERSECHARGES';
    const RRINPUT = 'RRINPUT';
    const RROUTPUT = 'RROUTPUT';
    const SRINPUT = 'SRINPUT';
    const SROUTPUT = 'SROUTPUT';
    const ZERORATEDINPUT = 'ZERORATEDINPUT';
    const ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';
    const BLINPUT = 'BLINPUT';
    const DSOUTPUT = 'DSOUTPUT';
    const EPINPUT = 'EPINPUT';
    const ES33_OUTPUT = 'ES33OUTPUT';
    const ESN33_OUTPUT = 'ESN33OUTPUT';
    const IGDSINPUT2 = 'IGDSINPUT2';
    const IMINPUT2 = 'IMINPUT2';
    const MEINPUT = 'MEINPUT';
    const NRINPUT = 'NRINPUT';
    const OPINPUT = 'OPINPUT';
    const OSOUTPUT = 'OSOUTPUT';
    const TXESSINPUT = 'TXESSINPUT';
    const TXN33_INPUT = 'TXN33INPUT';
    const TXPETINPUT = 'TXPETINPUT';
    const TXREINPUT = 'TXREINPUT';
    const INPUT3 = 'INPUT3';
    const INPUT4 = 'INPUT4';
    const OUTPUT3 = 'OUTPUT3';
    const OUTPUT4 = 'OUTPUT4';
    const SROUTPUT2 = 'SROUTPUT2';
    const TXCA = 'TXCA';
    const SRCAS = 'SRCAS';
    const BLINPUT2 = 'BLINPUT2';
    const DRCHARGESUPPLY20 = 'DRCHARGESUPPLY20';
    const DRCHARGE20 = 'DRCHARGE20';
    const DRCHARGESUPPLY5 = 'DRCHARGESUPPLY5';
    const DRCHARGE5 = 'DRCHARGE5';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTPUT,
            self::INPUT,
            self::CAPEXINPUT,
            self::EXEMPTEXPORT,
            self::EXEMPTEXPENSES,
            self::EXEMPTCAPITAL,
            self::EXEMPTOUTPUT,
            self::INPUTTAXED,
            self::BASEXCLUDED,
            self::GSTONCAPIMPORTS,
            self::GSTONIMPORTS,
            self::NONE,
            self::INPUT2,
            self::ZERORATED,
            self::OUTPUT2,
            self::CAPEXINPUT2,
            self::CAPEXOUTPUT,
            self::CAPEXOUTPUT2,
            self::CAPEXSRINPUT,
            self::CAPEXSROUTPUT,
            self::ECACQUISITIONS,
            self::ECZRINPUT,
            self::ECZROUTPUT,
            self::ECZROUTPUTSERVICES,
            self::EXEMPTINPUT,
            self::REVERSECHARGES,
            self::RRINPUT,
            self::RROUTPUT,
            self::SRINPUT,
            self::SROUTPUT,
            self::ZERORATEDINPUT,
            self::ZERORATEDOUTPUT,
            self::BLINPUT,
            self::DSOUTPUT,
            self::EPINPUT,
            self::ES33_OUTPUT,
            self::ESN33_OUTPUT,
            self::IGDSINPUT2,
            self::IMINPUT2,
            self::MEINPUT,
            self::NRINPUT,
            self::OPINPUT,
            self::OSOUTPUT,
            self::TXESSINPUT,
            self::TXN33_INPUT,
            self::TXPETINPUT,
            self::TXREINPUT,
            self::INPUT3,
            self::INPUT4,
            self::OUTPUT3,
            self::OUTPUT4,
            self::SROUTPUT2,
            self::TXCA,
            self::SRCAS,
            self::BLINPUT2,
            self::DRCHARGESUPPLY20,
            self::DRCHARGE20,
            self::DRCHARGESUPPLY5,
            self::DRCHARGE5,
        ];
    }
}


