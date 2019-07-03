<?php
/**
 * Created by JetBrains PhpStorm.
 * User: maconline
 * Date: 9/1/17
 * Time: 2:37 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Longtt\User;

class Menu{
    public static function menu(){
        return $menus=array(
            //array("id","name","url",,"route","type","parent_id","icon_code","group"),
            array("id"=>1,"name"=>__("configuration"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-minus","group"=>"config"),
            array("id"=>"","name"=>__("users"),"url"=>"","route"=>"config/user/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-minus","group"=>"config"),
            array("id"=>"","name"=>__("roles"),"url"=>"","route"=>"config/role/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-minus","group"=>"config"),
            array("id"=>"","name"=>__("permissions"),"url"=>"","route"=>"config/role/permission","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-minus","group"=>"config"),
            //array("id"=>"","name"=>"Ngành Hàng","url"=>"","route"=>"category/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),

            /*array("id"=>2,"name"=>"Cấu hình doanh nghiệp","url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Khu vực","url"=>"","route"=>"zone/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Nhà phân phối","url"=>"","route"=>"npp/index_npp","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Nhân viên giám sát","url"=>"","route"=>"user/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Nhân viên bán hàng","url"=>"","route"=>"user/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Danh sách sản phẩm","url"=>"","route"=>"sp/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),*/
            array("id"=>3,"name"=>"Quản lý giảng viên","url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Giảng viên","url"=>"","route"=>"user/index","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"user"),

            array("id"=>2,"name"=>"Quản lý phòng học","url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"config_dn"),
            array("id"=>"","name"=>"Đăt Phòng","url"=>"","route"=>"booking_calendar/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"booking_calendar"),



        );
    }
}
