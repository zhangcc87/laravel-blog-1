<?php

namespace App;

class HtmlHelper
{
    public static function m_active($route) 
    {
        return \Request::is('admin/'.$route) ? "active" : '';
    }

    public static function a_active($route)
    {
        return \Request::is('admin/articles/'.$route) ? "active" : '';
    }

    public static function classActive($category, $tags, $comment, $links)
    {
        return \Request::is('admin/'.$category)
            || \Request::is('admin/'.$tags)
            || \Request::is('admin/'.$comment)
            || \Request::is('admin/'.$links)? 'active opened expanded has-sub' : '';
    }

    public static function userActive($basic, $add, $edit)
    {
        return \Request::is('admin/options/'.$basic)
            || \Request::is('admin/user/'.$add)
            || \Request::is('admin/user/'.$edit) ? 'active opened expanded has-sub' : '';
    }

    public static function o_active($route)
    {
        return \Request::is('admin/options/'.$route) ? 'active' : '';
    }

    public static function u_active($route)
    {
        return \Request::is('admin/user/'.$route) ? 'active' : '';
    }

}