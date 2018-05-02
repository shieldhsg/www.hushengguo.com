<?php
namespace app\helpers;

class TMSHelper
{

    /**
     * 数据库常量
     */
    const INDEX = 1;
    const MORNING_NEWS = 2;
    const TONGQU = 3;
    const ABOUT = 4;
    const BANNER = 5;
    const WXIMAGE = 6;
    const TOP = 7;
    const CONTACT = 8;
    const ICP = 9;
    const ACTIVITY = 10;
    const JOIN = 11;

    /**
     * 获取文章列表
     */
    public static function getArticleList($module_id=0)
    {
        $url = \Yii::$app->params['api'];
        if(empty($module_id)){
            $url = $url.'/article';
        }else{
            $url = $url.'/article?module_id='.$module_id;
        }
        $data = CurlHelper::get($url);
        $data = json_decode($data)->data;
        $count = 0;
        foreach ($data as $k=>$v){
            $res [$count]['id'] = $v->id;
            $res [$count]['title'] = $v->name;
            $res [$count]['summary'] = $v->abstract;
            $res [$count]['pub_time'] = date('m月d日',strtotime($v->create_time));
            $count++;
        }
        return $res;
    }


    /**
     * 获取某一篇具体文章的内容
     */
    public static function getArticleDetail($id)
    {
        $url = \Yii::$app->params['api'];
        $url = $url.'/article/get-detail?article_id='.$id;
        $data = CurlHelper::get($url);
        $data = json_decode($data)->data;
        return $data;
    }

    /**
     * 获取联系人信息
     */
    public static function getContactInfo()
    {
        $moduleId = self::CONTACT;
        $url = \Yii::$app->params['api'];
        if(empty($moduleId)){
            $url = $url.'/fragment';
        }else{
            $url = $url.'/fragment?module_id='.$moduleId;
        }
        $data = CurlHelper::get($url);
        $data = json_decode($data)->data;
        $count = 0;
        foreach ($data as $k=>$v){
            $res [$count]['id'] = $v->id;
            $res [$count]['name'] = $v->name;
            $res [$count]['content'] = $v->content;
            $count++;
        }
        return $res;
    }

    /**
     * 获取微信公众号图标
     */
    public static function getWXImage()
    {
        $moduleId = self::WXIMAGE;
        $url = \Yii::$app->params['api'];
        $data = CurlHelper::get($url.'/image?module_id='.$moduleId);
        $data = json_decode($data)->data;
        $res = [];
        foreach ($data as $k=>$v){
            $res['id'] = $v->id;
            $res['name'] = $v->name;
            $res['path'] = $v->path;
            $res['url'] = $v->url;
            $res['create_time'] = $v->create_time;
        }
        return $res;
    }

    /**
     * 获取首页轮播图文章列表
     */
    public static function getBanners()
    {
        $moduleId = self::BANNER;
        $url = \Yii::$app->params['api'];
        $data = CurlHelper::get($url.'/image?module_id='.$moduleId);
        $data = json_decode($data)->data;
        $res = [];
        foreach ($data as $k=>$v){
            $res[$k]['id'] = $v->id;
            $res[$k]['name'] = $v->name;
            $res[$k]['path'] = $v->path;
            $res[$k]['url'] = $v->url;
            $res[$k]['create_time'] = $v->create_time;
        }
        return $res;
    }

    /**
     * 下载文件
     */
    public static function download($fileId)
    {
        $url = \Yii::$app->params['api'];
        $data = CurlHelper::get($url.'/download?file_id='.$fileId);
        header('Content-type: application/octet-stream; charset=utf8');
        Header("Accept-Ranges: bytes");
        header('Content-Disposition: attachment; ');
        echo $data;
        exit();
    }


}