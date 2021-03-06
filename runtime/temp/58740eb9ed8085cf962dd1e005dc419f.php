<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/admin\view\config\index.html";i:1534387314;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>网站配置</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body style="padding:10px 10px;">
<div class="layui-container">
    <form class="layui-form" action="?" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">网站名称</label>
            <div class="layui-input-block">
                <input type="text" name="title" value="<?php echo !empty($config['title'])?$config['title']:''; ?>" required  lay-verify="required" placeholder="请输入网站名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">LOGO上传</label>
            <div class="layui-input-block">
                <input type="text" name="logo" value="<?php echo !empty($config['logo'])?$config['logo']:''; ?>" placeholder="Logo上传" autocomplete="off" class="layui-input">
                <input type="file" name="logoimg">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">关键字</label>
            <div class="layui-input-block">
                <input type="text" name="keyword" value="<?php echo !empty($config['keyword'])?$config['keyword']:''; ?>" required lay-verify="required" placeholder="请输入关键字" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">描述</label>
            <div class="layui-input-block">
                <input type="text" name="desc" value="<?php echo !empty($config['desc'])?$config['desc']:''; ?>" required lay-verify="required" placeholder="请输入描述" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">电话</label>
            <div class="layui-input-inline">
                <input type="text" name="phone" value="<?php echo !empty($config['phone'])?$config['phone']:''; ?>" required lay-verify="required" placeholder="请输入电话" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">在线客服</label>
            <div class="layui-input-inline">
                <input type="text" name="online" value="<?php echo !empty($config['online'])?$config['online']:''; ?>" required lay-verify="required" placeholder="请输入QQ号码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">公司地址</label>
            <div class="layui-input-block">
                <input type="text" name="address"  value="<?php echo !empty($config['address'])?$config['address']:''; ?>" required lay-verify="required" placeholder="请输入公司地址" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">内容发布者</label>
            <div class="layui-input-block">
                <input type="text" name="author"  value="<?php echo !empty($config['author'])?$config['author']:''; ?>" required lay-verify="required" placeholder="请输入作者" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网站状态</label>
            <div class="layui-input-inline">
                <input type="checkbox" name="state" value="1" lay-skin="switch" <?php echo !empty($config['state'])?"checked":""; ?> lay-text="开启|关闭">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">关站提示</label>
            <div class="layui-input-block">
                <input type="text" name="closeinfo"  value="<?php echo !empty($config['closeinfo'])?$config['closeinfo']:''; ?>" required lay-verify="required" placeholder="请输入关站提示" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">确定</button>

            </div>
        </div>
    </form>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;

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