<?php
getTree($menus,0,"|--");
function getTree($collection,$parent_id,$dash){
    foreach($collection as $item){
        if($item->parent_id==$parent_id){
            echo "<option value='".$item->id."'>".$dash.$item->name."</option>";
            getTree($collection,$item->id,$dash."|--");
        }
    }

}
?>
