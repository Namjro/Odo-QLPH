<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 4/11/17
 * Time: 5:17 PM
 */


/*function postMeFeedFacebook($linkData,$token){
    $action="/me/feed";
    return postFacebook($action,$linkData,$token);
}*/

///{user-id}/feed, /{page-id}/feed, /{event-id}/feed, or /{group-id}/feed
/*function postFacebook($action,$linkData,$token){

    $fb=configFacebook();
    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->post($action, $linkData, $token);
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    return $response;
}*/

/*function configFacebook(){
    set_time_limit(0);
    if (!session_id()) {
        session_start();
    }
    $fb = new \Facebook\Facebook([
        'app_id' => config('services.facebook.client_id'), // Replace {app-id} with your app id
        'app_secret' => config('services.facebook.client_secret'),
        'default_graph_version' => 'v2.2',
    ]);
    return $fb;
}*/

function getUrl($route){

    if(isset($_SERVER["HTTP_X_FORWARDED_PROTO"])){
        return ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="https") ? secure_url($route) :url($route);

    }else{
        return url($route);
    }
}

function getThemeUrl(){

    if(isset($_SERVER["HTTP_X_FORWARDED_PROTO"])){
        return ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="https") ? secure_url('/')."/BucketAdmin/html/" :url('/')."/BucketAdmin/html/";

    }else{
        return url('/')."/BucketAdmin/html/";
    }
}
function getProtocol(){
    if(isset($_SERVER["HTTP_X_FORWARDED_PROTO"])){
        return ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="https") ? "https" :'http';

    }else{
        return "http";
    }

}

function set_active($path, $active = 'active') {

    // \Illuminate\Support\Facades\Request;
    return call_user_func_array('Request::is', (array)$path) ? $active : '';

}

function getTreeMenu($collection,$parent_id){
    foreach($collection as $item){
        if($item->parent_id==$parent_id){
            if($parent_id==0){ ?>
                <li class="sub-menu">
                <a href="javascript:;" class="{{set_active([$item->group.'/*'])}}">
                    <i class="fa fa-tasks"></i>
                    <span>{{$item->name}}</span>
                </a>
            <?php }else{ ?>
                <ul class="sub">
                    <li class="{{set_active([$item->route]) }}"><a href="{{url($item->route)}}">{{$item->name}}</a></li>
                </ul>
            <?php    }
            getTreeMenu($collection,$item->id);
            if($parent_id==0){ ?>
                </li>
            <?php   }
        }
    }

}

function getTreeMenu2($array,$parent_id){
    foreach($array as $item){
        if($item['parent_id']===$parent_id){
            if($parent_id===0){ ?>
                <li class="sub-menu">
                <a href="javascript:;" class="<?php echo set_active([$item['group'].'/*']) ?>">
                    <i class="fa <?php echo $item['icon_code'] ?>"></i>
                    <span><?php echo $item['name'] ?></span>
                </a>
            <?php }else{

                if(checkPermission($item['route'])){ ?>
                    <ul class="sub">
                        <li class="<?php echo set_active([$item['route']]) ?>"><a href="<?php echo url($item['route']) ?>"><?php echo $item['name']?></a></li>
                    </ul>
                <?php }
                ?>

            <?php    }
            getTreeMenu2($array,$item['id']);
            if($parent_id===0){ ?>
                </li>
            <?php   }
        }
    }

}
function checkPermission($path){


    if (!\Illuminate\Support\Facades\Auth::check()) {
        echo "bạn không có quyền vào trang này";exit ;
        // abort(403, 'Unauthorized action.');
    }else{
        if(\Illuminate\Support\Facades\Auth::user()->role_id==='1'){
            return true;
        }
        $permissions=array();
        foreach(\Longtt\User\Model\Permission::all() as $key=>$permission){
            $permissions[]=$permission->permission;
        }


        if(in_array(\Illuminate\Support\Facades\Auth::user()->role_id."|GET|".$path,$permissions)){
            return true;
        }else{
            return false;
        }
    }
}
//function getThemeUrl(){
//
//    if(isset($_SERVER["HTTP_X_FORWARDED_PROTO"])){
//        return ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="https") ? secure_url('/')."/BucketAdmin/html/" :url('/')."/BucketAdmin/html/";
//
//    }else{
//        return url('/')."/BucketAdmin/html/";
//    }
//}
//function getProtocol(){
//    if(isset($_SERVER["HTTP_X_FORWARDED_PROTO"])){
//        return ($_SERVER["HTTP_X_FORWARDED_PROTO"]=="https") ? "https" :'http';
//
//    }else{
//        return "http";
//    }
//
//}
//
//function set_active($path, $active = 'active') {
//
//   // \Illuminate\Support\Facades\Request;
//    return call_user_func_array('Request::is', (array)$path) ? $active : '';
//
//}