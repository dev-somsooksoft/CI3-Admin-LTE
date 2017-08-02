<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class lib_template
{

    private static $CI;
    private static $defaultArrayPushPathFileCss = array();
    private static $defaultArrayPushPathFileJavascript = array();
    private static $defaultLayoutPathFile;
    private static $defaultTitle = "title layouts";
    private static $defaultPathFile;
    private static $defaultData;

    public function __construct()
    {
        self::$CI =& get_instance();
    }

    public static function setLayoutsTemplate($pathFileLayoutFile)
    {
        self::$defaultLayoutPathFile = $pathFileLayoutFile;
    }

    private static function getLayoutsTemplate()
    {
        return self::$defaultLayoutPathFile;
    }

    public static function setTitleLayout($nameTitle)
    {
        self::$defaultTitle = $nameTitle;
    }

    public static function getTitleLayout()
    {
        return self::$defaultTitle;
    }

    public static function setAddPathCss($pathFile = array())
    {
        self::$defaultArrayPushPathFileCss = $pathFile;
    }

    public static function pushUrlPathCss($pathFile = array())
    {
        if (count($pathFile) != 0) {
            foreach ($pathFile as $rowsFiles) {
                self::$defaultArrayPushPathFileCss[] = $rowsFiles;
            }
        }
    }

    public static function getAddPathCss()
    {
        return self::$defaultArrayPushPathFileCss;
    }

    public static function setAddPathJavascript($pathFile = array())
    {
        self::$defaultArrayPushPathFileJavascript = $pathFile;
    }

    public static function pushUrlPathJavascript($pathFile = array())
    {
        if (count($pathFile) != 0) {
            foreach ($pathFile as $rowsFiles) {
                self::$defaultArrayPushPathFileJavascript[] = $rowsFiles;
            }
        }
    }

    public static function getAddPathJavascript()
    {
        return self::$defaultArrayPushPathFileJavascript;
    }


    public static function setChildPathFiles($pathFile, $data)
    {
        self::$defaultPathFile = $pathFile;
        self::$defaultData = $data;
    }

    public static function getChildPathFiles()
    {
        return self::$defaultPathFile;
    }

    public static function getDataFiles()
    {
        return self::$defaultData;
    }

    public static function RenderNow()
    {
        self::$CI->load->view(self::getLayoutsTemplate());
    }


}