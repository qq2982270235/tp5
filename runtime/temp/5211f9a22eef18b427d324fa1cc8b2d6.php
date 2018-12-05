<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/www/wwwroot/test/public/../application/admin/view/banner/banner_add.html";i:1534831484;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加轮播图</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body style="padding:10px 10px;">
<div class="layui-container">
    <form class="layui-form" action="?" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图片</label>
            <div class="layui-input-block">
                <button type="button" class="layui-btn" id="uploadimg">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                </button>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网址</label>
            <div class="layui-input-block">
                <input type="text" name="url" placeholder="请输入网址" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否显示</label>
            <div class="layui-input-inline">
                <input type="checkbox" name="isshow" lay-skin="switch" lay-text="显示|隐藏" value="1" checked>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-inline">
                <input type="text" name="sort" value="100" required  lay-verify="required" placeholder="请输入网址" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">介绍</label>
            <div class="layui-input-block">
                <textarea name="remark"  placeholder="请输入图片介绍" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">添加</button>

            </div>
        </div>
    </form>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    //Demo
    layui.use(['form','upload'], function(){
        var form = layui.form;
        var upload = layui.upload;
        //上出啊按钮
        var uploadInst = upload.render({
            elem: '#uploadimg' //绑定元素
            ,auto:false
            ,field:'upimg'
            ,exts:"jpg|png|jpeg"
            ,done: function(res){
                //上传完毕回调
            }
            ,error: function(){
                //请求异常回调
            }
        });

        //监听提交
        form.on('submit(formDemo)', function(data){

        });
    });
    $(function(){
       $(window.parent.document).find('#righttitle').text($('title').text());
    });
</script>
</body>
</html>