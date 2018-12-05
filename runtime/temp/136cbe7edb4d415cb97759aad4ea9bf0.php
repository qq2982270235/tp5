<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/www/wwwroot/test/public/../application/admin/view/index/index.html";i:1534840008;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>双语企业网站后台</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo"><span class="layui-hide-xs">信通太合</span>网站后台系统</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item layui-hide-xs">
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 1.2rem;">&#xe612;</i>
                <?php echo $admin; ?>
                </a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 1.2rem;">&#xe620;</i>
                    设置
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">系统设置</a></dd>
                    <dd><a href="<?php echo url('manager/setpass'); ?>" target="_content">密码修改</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?php echo url('login/logout'); ?>">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('article/index'); ?>" target="_content">内容列表</a></dd>
                        <dd><a href="<?php echo url('article/add'); ?>" target="_content">添加内容</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">栏目管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('category/index'); ?>" target="_content">栏目列表</a></dd>
                        <dd><a href="<?php echo url('category/add'); ?>" target="_content">添加栏目</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">二级栏目管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('erji/index'); ?>" target="_content">栏目列表</a></dd>
                        <dd><a href="<?php echo url('erji/add'); ?>" target="_content">添加栏目</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">二级内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('erjineirong/index'); ?>" target="_content">内容列表</a></dd>
                        <dd><a href="<?php echo url('erjineirong/add'); ?>" target="_content">添加内容</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">轮播图管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('banner/index'); ?>" target="_content">轮播图列表</a></dd>
                        <dd><a href="<?php echo url('banner/add'); ?>" target="_content">添加轮播图</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="<?php echo url('file/index'); ?>" target="_content">文件管理</a></li>
                <li class="layui-nav-item"><a href="<?php echo url('config/index'); ?>" target="_content">网站配置</a></li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">管理员</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('manager/add'); ?>" target="_content">添加管理员</a></dd>
                        <dd><a href="<?php echo url('manager/index'); ?>" target="_content">管理员列表</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body" id="layui-body" style="overflow: hidden;">
        <!-- 内容主体区域 -->
        <div class="title ly-right-title"><span class="actived"><i class="layui-icon">&#xe68e;</i> <span id="righttitle">基本信息</span></span></div>
        <iframe id="_content" name="_content" src="<?php echo url('index/system'); ?>" scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © 信通太合　后台管理平台
    </div>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>