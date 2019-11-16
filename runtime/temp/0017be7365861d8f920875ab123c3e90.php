<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:32:"./themes/default/index/bang.html";i:1572916458;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>排行榜</title>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/ranking.css?v=1234">
</head>
<body>
<div class="container">
    <div class="rank_top">
        <p>累计发放奖励： ￥<?php echo $sum+235641; ?></p>
        <p>累计代理商：<?php echo $count; ?>人</p>
    </div>
    <div class="rank_box">
        <ul>
            <li>
                <p>排名</p>
                <p>用户</p>
                <p>金额</p>
            </li>
            <li>
                <p>
                    <span><img src="__PUBLIC__/img/rank_second.png" alt=""></span>张**
                </p>
                <p>尾号5475</p>
                <p class="rank_money">￥263187.15</p>
            </li>
            <li>
                <p>
                    <span><img src="__PUBLIC__/img/rank_third.png" alt=""></span>李**
                </p>
                <p>尾号4256</p>
                <p class="rank_money">￥227164.22</p>
            </li>
            <li>
                <p>
                    <span><img src="__PUBLIC__/img/rank_first.png" alt=""></span>刘**
                </p>
                <p>尾号1889</p>
                <p class="rank_money">￥202681.17</p>
            </li>
            <li>
                <p>
                    <span>4</span>杨**
                </p>
                <p>尾号4303</p>
                <p class="rank_money">￥140180.21</p>
            </li>
            <li>
                <p>
                    <span>5</span>赵**
                </p>
                <p>尾号2120</p>
                <p class="rank_money">￥162387.12</p>
            </li>
            <?php if(is_array($allAchieve) || $allAchieve instanceof \think\Collection || $allAchieve instanceof \think\Paginator): $k = 0; $__LIST__ = $allAchieve;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li>
                <p>
                    <span><?php echo $k+5; ?></span><?php echo $vo['names']; ?>
                </p>
                <p><?php echo $vo['mobile']; ?></p>
                <p class="rank_money">￥<?php echo $vo['total_achievement']; ?></p>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</div>
</body>
</html>