<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?= MOD?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/signStyle.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/Font-Awesome/css/font-awesome.min.css"/>
    <script src="<?= BASE_URL ?>/public/bootstrap/dist/js/jQuery.js"></script>
    <script src="<?= BASE_URL ?>/public/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>/public/js/signHead.js"></script>
</head>
<body>
<!--    <embed src='../common/bg_music/haranoyori.mp3' loop="1"  autostart="1">-->
<!-- <audio src="<?= BASE_URL ?>/public/bg_music/秦殇.mp3" loop="1" autoplay="1"></audio> -->
<div class="sign_head_nav">
    <url class="sign_head_url">
        <li mark="true"><a href="<?= BASE_URL ?>"><img alt="Brand" src="<?= BASE_URL ?>/public/image/mon.gif"></a></li>
        <li><a href="<?= BASE_URI?>">Index</a></li>
        <li><a href="<?= BASE_URI?>/Message/">Message</a></li>
        <li><a href="<?= BASE_URI?>/PrivateZone/">Privatezone</a></li>
        <li><a href="<?= BASE_URI?>/Discuss/">Discuss</a></li>
        <li id="sign_login_li">
            <a href="javascript:void(0)"><?= isset($_SESSION['username']) ? $_SESSION['username'] : '户部' ?></a>

            <div id="sign_mark_div">
                <?php if (isset($_SESSION['username'])) { ?>
                    <div><a href="<?= BASE_URI ?>/PrivateZone/index/<?= $_SESSION['username'] ?>"><span
                                class="glyphicon glyphicon glyphicon-user"></span></a></div>
                <?php } else { ?>
                    <div><span class="icon-signin" data-target="#sign_login_form" data-toggle="modal"></span></div>
                <?php } ?>
                <div><span class="icon-cogs"></span></div>
                <?php if (isset($_SESSION['username'])) { ?>
                    <div class="sign_logout"><span class="icon-signout"></span></div>
                <?php } else { ?>
                    <div data-toggle="modal" data-target="#sign_regist_form"><span
                            class="sign_regist_span icon-laptop"></span></div>
                <?php } ?>
                <div><span class="icon-envelope"></span></div>
                <div><span>通过QQ登录</span></div>
            </div>
        </li>
    </url>
</div>
<div class="welcome" style='background:url("<?= BASE_URL ?>/public/image/succ_bg.jpg")'>
    <div>聖旨</div>
    <div class="wel_body">
        奉天承运，皇帝诏曰，准，<span id="succ_address">xxxx</span>庶人<span id="succ_name">李二</span>为本国公民，尽享帝国庇护，即日起可前往户部登录，钦此！
    </div>
    <div>
        <?= date('Y/m/d') ?>/帝国户部
    </div>
</div>
<!--    表格附件1-->
<div class="modal fade" id="sign_regist_form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <center>
            <div class="modal-content">
                <div class="modal-header">
                    <h4>xxx注册</h4>
                </div>
                <div class="sign_in_form">
                    <div class="input-group">
                        <span class="input-group-addon">昵称</span>
                        <input type="text" class="form-control" placeholder="2-6个汉字、数字或字母">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">密码</span>
                        <input type="password" class="form-control" placeholder="6-8位字母或数字">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">性别</span>
                        <span class="span_sex span_sex1"><img src="<?= BASE_URL ?>/public/image/male.gif"><i
                                class="icon-github-alt"></i></span>
                        <span class="span_sex span_sex2"><img src="<?= BASE_URL ?>/public/image/female.gif"><i
                                class="icon-github-alt"></i></span>
                        <input type="hidden" id="sexIput" value=2>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">生日</span>
                        <input type="date" class="form-control" value="">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">电话</span>
                        <input type="text" class="form-control" placeholder="11位手机号">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">地址</span>
                        <input type="text" class="form-control" placeholder="次元/年代/地址">
                    </div>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-default" data-dismiss="modal" disabled>确认注册</button>
                    </center>
                </div>
            </div>
        </center>
    </div>
</div>
<!--    表格附件2-->
<div class="modal fade" id="sign_login_form" tabindex="-1" role="dialog">
    <form action="<?= BASE_URI ?>/User/login" method="post">
        <div class="modal-dialog" role="document">
            <center>
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>登录</h3>
                    </div>
                    <div class="login_div">
                        <div class="input-group">
                            <span class="input-group-addon">昵称</span>
                            <input type="text" class="form-control" name="username" placeholder="请输入昵称">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">密码</span>
                            <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                        <div class="input-group sign_login_info">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="sign_login_btn btn btn-default" data-dismiss="modal2">登录
                            </button>
                        </center>
                    </div>
            </center>
        </div>
</div>
</form>
</div>
<!-- ----------------------head结束--------------------------------------------- -->