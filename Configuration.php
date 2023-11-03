<?php
class Configuration extends ConfigurationBase {
    //public $Encoding = "utf-8";
    //public $SecretKey = '~a!s@e#q$b%a^s&e*';
    //public $DisplayError = 1;
    //public $DisplayStartupError = 1;
    //public $ReportError = E_ALL;
    //public $DataBaseError = 1;

    //public $AllowCache = false;
    //public $AllowReduceSize = true;
    //public $AllowEncryptNames = true;

    /**
     * An array of all patterns=>handler view names to handle the virtual pathes
     * Empty array causing to pass all patterns to the ViewName or DefaultViewName or "main" view
     * @var array<string,string>
     * @category General
     */
	public $Handlers = [];

    ///**
    // * The status of all server response: 400, 404, 500, etc.
    // * @var mixed
    // */
    //public $StatusMode = null;
    ///**
    // * The accessibility mode: 1 for whitelisted IPs, -1 for blacklisted IPs
    // * @var mixed
    // */
    //public $AccessMode = 0;
    //public $AccessPatterns = array();
    //public $RestrictionContent = "Unfortunately you have no access to the site now!<br>Please try a few minute later...";


    //public $DataBaseEncoding = "utf8";
    //public $DataBaseType = 'mysql';
    //public $DataBaseHost = 'localhost';
    //public $DataBaseUser = null;
    //public $DataBasePassword = null;
    //public $DataBaseName = 'localhost';
    //public $DataBasePrefix = 'aseq_';
}
?>