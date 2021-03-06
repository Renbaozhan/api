<?php /* Smarty version Smarty-3.1.3, created on 2016-05-13 09:49:40
         compiled from "D:\github\json\bin\protected\views\json\api.html" */ ?>
<?php /*%%SmartyHeaderCode:194157358714f40b24-27392800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e92ba5f6dbefe6993051a529f7fa572cfa0ea6' => 
    array (
      0 => 'D:\\github\\json\\bin\\protected\\views\\json\\api.html',
      1 => 1463036400,
      2 => 'file',
    ),
    'cc5d024b7356e71f5f3782252b4e73e8d294e730' => 
    array (
      0 => 'D:\\github\\json\\bin\\protected\\views\\layout.html',
      1 => 1462335068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194157358714f40b24-27392800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_573587158b90b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573587158b90b')) {function content_573587158b90b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Json 格式API接口 - Json.cn</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/base.css" rel="stylesheet">
    <style></style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicons -->
</head>
<body style="over-flow:hidden;">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>
.item{
    cursor: pointer;
}
.item:hover{
    box-shadow: 0 0 1px #ddd;
}
.item-box li a{
    color:#555;
}
#item-title{
    color: #555;
    font-weight: bold;
    text-shadow: 0 0 1px #ccc;
}
#item-note{
    padding: 10px;line-height: 30px;
    font-size: 12px;
}
#item-url{
    color: #29abe2;
}
.modal-backdrop {
  background-color: #fff;
}
.modal-header{
    box-shadow: 0 0px 1px #eee;
}
.modal-content{
    border: solid 1px #ccc;
    border-radius: 2px;
    box-shadow: 0 0 1px #ccc;
}
.label-title{
    font-weight: bold;
}
.item-wiki{
    padding: 10px;
    line-height: 30px;
    margin-bottom: 10px;
}
.format-json{
    padding: 10px;
    max-height: 300px;
    overflow-y: scroll;
}


</style>
<main  style="padding:0px 40px;background-color:#f9f9f9;">
    <div style="background-color:#fff;padding:10px;border-left:solid 1px #ccc;border-right:solid 1px #ccc;
    box-shadow:0 0px 1px #ccc;min-height:550px;" class="row" id="data-container">
    </div>

</main>
<!-- Modal -->
<div class="modal fade item-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span>
                </button>
                <h5 class="modal-title" id="item-title">Modal title</h5>
            </div>
            <div class="modal-body">
                <div class="row item-wiki">

                    <div class="col-md-4">
                        <span class="label-title">请求方式: </span>
                        <span id="item-action"></span>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <span class="label-title">调用价格: </span>
                        <span id="item-price" class=" red"></span>
                    </div>
                    <div class="col-md-4">
                        <span class="label-title">试用API KEY: </span>
                        <code id="item-key">public</code>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <span class="label-title">试用KEY访问: </span>
                        <span id="item-free-call" class="red"></span>
                    </div>
                    <div class="col-md-4">
                        <span class="label-title">单IP访问限制: </span>
                        <span id="item-limit" class="red"></span>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <span class="label-title">开发者: </span>
                        <a id="item-developer" class="blue" target="_blank"></a>
                    </div>
                    <div class="col-md-12">
                        <span class="label-title">接口地址: </span>
                        <a id="item-url" class="blue" target="_blank"></a>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist" style="font-size:12px;">
                    <li role="presentation"  class="active">
                        <a href="#note" aria-controls="note" role="tab" data-toggle="tab">使用说明</a>
                    </li>
                    <li role="presentation">
                        <a href="#params" aria-controls="params" role="tab" data-toggle="tab">输入参数</a>
                    </li>
                    <li role="presentation" >
                        <a href="#returns" aria-controls="profile" role="tab" data-toggle="tab">返回结果</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  active" id="note">
                        <div id="item-note">

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="params">
                        <div id="item-params" class="format-json">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="returns">
                        <div id="item-returns" class="format-json">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.json.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jsonlint.js"></script>
<script type="text/javascript">
var items = [];
loadData();
function loadData(){
    $.get("/service/getdata?page_num=1&keyword=", function(response){
            try{
                items = JSON.parse(response).data;
                //sum_page = JSON.parse(result).sum_page;
                //$('#sum-page').html(sum_page);
                $('#data-container').html('');
                var inner_html= '';
                for (var i = 0; i < items.length; i++) {
                    inner_html += '<div class="col-md-3 item" data-toggle="modal" data-target=".item-box" onclick="loadItem('+i+')">';
                    inner_html += '<div class="row" style="padding:20px;">';
                    inner_html += '<div  class="col-md-4" style="line-height:30px;color:#888;text-align:center;">';
                    inner_html += '<div><img src="/image/' + items[i].logo +'" width="64px"></div></div>';
                    inner_html += '<div  class="col-md-7" style="line-height:25px;">';
                    inner_html += '<div class="content">';
                    inner_html += '<div>'+items[i].name+'</div>';
                    inner_html += '<div>价格：<span class="label label-success">免费</span></div>';
                    inner_html += '<div>开发者：'+items[i].developer+'</div>';
                    inner_html += '</div></div></div></div>';
                }
                $('#data-container').html(inner_html);
            }catch(e){
                ;
            }
        }
    );


}
function loadItem(index){
    var item = items[index];
    $("#item-developer").html(item.developer);
    $("#item-developer").attr("href",item.developer_url);
    $("#item-title").html(item.name);
    $("#item-note").html(item.note);
    $("#item-url").html(item.url);
    $("#item-url").attr("href",item.url);
    $("#item-action").html(item.action);
    if(item.price == 0){
        $("#item-price").html('<span class="label label-success">免费</span>');
    }else{
        $("#item-price").html(item.price+"￥/次");
    }
    $("#item-limit").html("<"+item.limit+"次/秒");
    $("#item-free-call").html(item.free_call+"次/天");
    $("#item-params").html(parseJson(item.params));
    $("#item-returns").html(parseJson(item.returns));
};
function parseJson(content){
    var result = "默认内容";
    try{
        current_json = jsonlint.parse(content);
        current_json_str = JSON.stringify(current_json);
        //current_json = JSON.parse(content);
        result = new JSONFormat(content,4).toString();
    }catch(e){
        result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
    }
    return result;
};

</script>

<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>