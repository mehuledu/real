<?php
class WebConfig
{
	//DEVLOPMENT CONFIGRATION
	static $BaseURL = "http://localhost/real";
	static $HeaderLogo = "/images/logo.png";
	static $APPLICATION_MAINTAINANCE_CODE = 0;
	static $APPLICATION_ENVIRONMENT = "DEV";
	static $APPLICATION_EMAIL_COMMUNICATION = "Y";
	static $APPLICATION_DEBUG = "Y";
	static $APPLICATION_URL = "http://localhost";
	static $DB_SERVER = "localhost";
	static $DB_USER = "root";
	static $DB_PASSWORD = "";
	static $DB_NAME	= "";
	static $USERS_AVATAR = "/UserCP/upload_pic/";
	
	static $MISSIONSTATEMENT = "Athia Culture Centre - <b>Together</b> We Create a Special World!";
	
	static function getHeaderLogo(){
		return self::$BaseURL. self::$HeaderLogo;
	}
	
	
	static function getDBServer()
	{
		return self::$DB_SERVER;
	}
	static function getDBUser()
	{
		return self::$DB_USER;
	}
	static function getDBPassword()
	{
		return self::$DB_PASSWORD;
	}
	static function getDBName()
	{
		return self::$DB_NAME;
	}
	static function getApplicationURL()
	{
		return self::$APPLICATION_URL;
	}
}
?>