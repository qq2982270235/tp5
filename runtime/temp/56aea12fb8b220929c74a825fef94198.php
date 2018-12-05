<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/test/public/../application/admin/view/category/add.html";i:1533895442;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加栏目</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
    <!--<script src="../../../../public/static/admin/vendor/neditor/neditor.config.js"></script>-->
    <style>
        .layui-form-select dl{z-index:2;}
        #thumb_list{padding-top: 8px;}
        #thumb_list img{border: 1px solid #DDD;padding: 3px; border-radius: 5px;}
        #thumb_list span{position: relative; display: inline-block; inline-block;margin-right: 5px;}
        #thumb_list span .delimg{position: absolute;right:3px;top:3px;}
    </style>
</head>
<body style="padding:0 10px; padding-bottom: 45px;">
<div class="">
    <form class="layui-form" action="?" method="post">
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">基本设置</li>
                <li>扩展设置</li>
                <li>内容设置</li>
            </ul>
            <div class="layui-tab-content">
                <!--基本设置-->
                <div class="layui-tab-item layui-show layui-anim layui-anim-upbit">
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目</label>
                        <div class="layui-input-inline">
                            <select name="pid" lay-verify="required">
                                <option value="0">顶级栏目</option>
                                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目名称</label>
                        <div class="layui-input-inline">
                            <input type="text" name="name" required lay-verify="required" placeholder="请输入栏目名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">类型</label>
                        <div class="layui-input-block">
                            <input type="radio" name="type" value="1" title="列表" checked>
                            <input type="radio" name="type" value="2" title="图片">
                            <input type="radio" name="type" value="3" title="单页">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">排序</label>
                        <div class="layui-input-inline">
                            <input type="text" name="sort" value="100" required lay-verify="required" placeholder="请输入排序" autocomplete="off" class="layui-input" style="width:80px;">
                        </div>
                    </div>
                </div>
                <!--扩展设置-->
                <div class="layui-tab-item layui-anim layui-anim-upbit">
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目图片</label>
                        <div class="layui-input-block" >
                            <input type="hidden" name="pic"  placeholder="请输入栏目图片" autocomplete="off" class="layui-input">
                            <button type="button" class="layui-btn" id="uploadimg">
                                <i class="layui-icon" >&#xe67c;</i>上传栏目图片</button>
                            <div id="thumb_list">

                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-block">
                            <input type="text" name="keyword"  placeholder="请输入关键字" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-block">
                            <textarea name="desc" placeholder="请输入描述" class="layui-textarea"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">摘要</label>
                        <div class="layui-input-block">
                            <textarea name="remark" placeholder="请输入摘要" class="layui-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <!--内容设置-->
                <div class="layui-tab-item layui-anim layui-anim-upbit">
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <script id="content" name="content" type="text/plain" style="height:300px;"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="layui-form-item">
                            <label class="layui-form-label"></label>
            <div class="">
                <button class="layui-btn layui-btn-danger layui-btn-big" lay-submit lay-filter="formDemo" style="margin-left:8px;">添加</button>

            </div>
        </div>
    </form>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/admin/vendor/neditor/neditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/admin/vendor/neditor/editor_api.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    var ue = UE.getEditor('content');
    //Demo
    layui.use(['form','element','upload'], function(){
        var form = layui.form;
        var element = layui.element;
        var upload = layui.upload;
        //监听提交
        form.on('submit(formDemo)', function(data){

        });
        //创建一个上传组件
        upload.render({
            elem: '#uploadimg'
            ,url: '<?php echo url("common/uploadimg"); ?>'
            ,accept: 'images' //允许上传的文件类型
            ,field: "imgfile"
            ,size: 2048 //最大允许上传的文件大小
            ,done: function(res, index, upload){ //上传后的回调
                layer.close(layer.index,{isOutAnim :true});
                 setTimeout(function () {
                     layer.msg(res.msg);
                     if(res.code==1){
                         var pic=$('input[name=pic]').val();
                         if(pic==""){
                             $('input[name=pic]').val(res.img);
                         }else{
                             $('input[name=pic]').val(pic+","+res.img);
                         }

                     var str;
                         str="<span>";
                         str=str+'<img src="/'+res.img+'" alt="" height="80">';
                         str=str+'<button type="button" class="layui-btn layui-btn-danger layui-btn-mini delimg" onclick="delimg(this);" data="'+res.img+'">';
                         str=str+'<i class="layui-icon">&#xe640;</i>';
                         str=str+'</button>';
                         str=str+'</span>';
                         $('#thumb_list').append(str);
                     }else{

                     }

                 },500);

            }
            ,before:function () {
                var index = layer.load(0);
            }
            //,……
        })
    });
    $(function(){
        $(window.parent.document).find('#righttitle').text($('title').text());
    });
    //删除栏目图片
    function delimg(obj) {
        var picurl=$(obj).attr('data');
        $.ajax({
            type:"post",
            url:"<?php echo url('common/delimg'); ?>",
            data:{'url':picurl},
            success:function (res){
                var picvalue=$('input[name=pic]').val();
                var str="";
                if(res.code==1 || res.code==2){
                    //栏目图文本框中图片地址处理
                    if(picvalue==picurl){
                        $('input[name=pic]').val('');
                    }else{
                        str=picvalue.replace(picurl+",","");
                        str=str.replace(","+picurl,"");
                        $('input[name=pic]').val(str);
                    }
                    //删除/移除缩略图
                    $(obj).parent().remove();
                    layer.msg(res.msg);
                }
                if(res.code==0){
                    layer.msg(res.msg);
                }
            }
        });
    }
</script>
</body>
</html>