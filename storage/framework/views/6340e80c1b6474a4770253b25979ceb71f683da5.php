<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <?php
//                $menus=array(
//                    //array("id","name","url",,"route","type","parent_id","icon_code","group"),
//                    array("id"=>1,"name"=>__("configuration"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("users"),"url"=>"","route"=>"config/user/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("roles"),"url"=>"","route"=>"config/role/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("permissions"),"url"=>"","route"=>"config/role/permission","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("document type"),"url"=>"","route"=>"document_type/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("product"),"url"=>"","route"=>"product/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("payment methods"),"url"=>"","route"=>"payment_method/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>__("document entity attribute"),"url"=>"","route"=>"document_entity_attribute/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//                    array("id"=>"","name"=>"images","url"=>"","route"=>"image/index","type"=>"dynamic_url","parent_id"=>1,"icon_code"=>"fa fa-tasks","group"=>"config"),
//
//                    array("id"=>2,"name"=>__("loaner"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"loaner"),
//                    array("id"=>"","name"=>__("loaners"),"url"=>"","route"=>"loaner/index","type"=>"dynamic_url","parent_id"=>2,"icon_code"=>"fa fa-tasks","group"=>"loaner"),
//
//                    array("id"=>3,"name"=>__("loan"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("loans"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("new loans"),"url"=>"","route"=>"loan/new","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("loans updating"),"url"=>"","route"=>"loan/processing","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("loans awaiting for approval level 1"),"url"=>"","route"=>"loan/waiting1","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("loans awaiting for approval level 2"),"url"=>"","route"=>"loan/waiting2","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//                    array("id"=>"","name"=>__("loans awaitting for contract"),"url"=>"","route"=>"loan/waiting3","type"=>"dynamic_url","parent_id"=>3,"icon_code"=>"fa fa-tasks","group"=>"loan"),
//
//                    array("id"=>4,"name"=>__("loans contract"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"contract"),
//                    array("id"=>"","name"=>__("all"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>4,"icon_code"=>"fa fa-tasks","group"=>"contract"),
//                    array("id"=>"","name"=>__("awaiting for disbursement"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>4,"icon_code"=>"fa fa-tasks","group"=>"contract"),
//                    array("id"=>"","name"=>__("paid"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>4,"icon_code"=>"fa fa-tasks","group"=>"contract"),
//                    array("id"=>"","name"=>__("complete"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>4,"icon_code"=>"fa fa-tasks","group"=>"contract"),
//
//                    array("id"=>5,"name"=>__("repayment schedule"),"url"=>"","route"=>"","type"=>"fix_url","parent_id"=>0,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//                    array("id"=>"","name"=>__("period"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>5,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//                    array("id"=>"","name"=>__("before 1 day"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>5,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//                    array("id"=>"","name"=>__("bedore 3 day"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>5,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//                    array("id"=>"","name"=>__("grace date"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>5,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//                    array("id"=>"","name"=>__("out of date"),"url"=>"","route"=>"loan/index","type"=>"dynamic_url","parent_id"=>5,"icon_code"=>"fa fa-tasks","group"=>"repayment"),
//
//                );
                getTreeMenu2(\Longtt\User\Menu::menu(),0);

                ?>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>