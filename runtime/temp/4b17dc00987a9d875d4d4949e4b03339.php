<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/admin\view\file\file_edit.html";i:1533884379;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件编辑</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/vendor/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/static/admin/vendor/codemirror/theme/eclipse.css">
    <script src="/static/admin/vendor/codemirror/lib/codemirror.js"></script>
    <style>
        form{
            margin: 10px 15px;
        }
        .CodeMirror{
            border: 1px solid #EEE;
            height: 500px;
            margin-top:10px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div><button class="layui-btn">保存</button>
        <a href="javascript:window.history.back();" class="layui-btn layui-btn-primary">返回</a><span class="layui-btn layui-btn-danger">当前编辑的文件：<?php echo $currfile; ?></span></div>
    <textarea name="code" id="code" placeholder="请输入内容" class="layui-textarea" style="height: 550px;"><?php echo $code; ?></textarea>
</form>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="/static/admin/vendor/codemirror/mode/css/css.js"></script>
<script src="/static/admin/vendor/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/admin/vendor/codemirror/mode/php/php.js"></script>
<script src="/static/admin/vendor/codemirror/mode/xml/xml.js"></script>
<script src="/static/admin/vendor/codemirror/mode/clike/clike.js"></script>
<script>
    var mycode = CodeMirror.fromTextArea(document.getElementById('code'),{
        lineNumbers: true,
        theme:"eclipse"
    });
    var mode="";
    switch ("<?php echo $ext; ?>"){
        case ".PHP":
            mode="php";
            break;
        case ".HTML":
            mode="htmlmixed";
            break;
        case ".CSS":
            mode="css";
            break;
        case ".JS":
            mode="javascript";
            break;
        case ".XML":
            mode="xml";
            break;
        default:
            mode="php";
            break;

    }
    mycode.setOption('mode',mode);
</script>
</body>
</html>