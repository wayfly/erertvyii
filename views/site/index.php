<?php

/* @var $this yii\web\View */

$this->title = '二二视频';
//$this->imageurl = Yii::$app->request->baseUrl;
?>
<!--div class="site-index"-->
    <!--div class="jumbotron"-->
        <div class="main_banner">
            <div class="main_banner_wrap">
                <canvas id="myCanvas" width="150" height="150"></canvas>
                <div class="main_banner_box" id="m_box">
                    <a href="javascript:void(0)" class="banner_btn js_pre">
                        <span class="banner_btn_arrow"><i></i></span>
                    </a>
                    <a href="javascript:void(0)" class="banner_btn btn_next js_next">
                        <span class="banner_btn_arrow"><i></i></span>
                    </a>
                    <ul>
                        <li id="imgCard0">
                            <a href=""><span style="opacity:0;"></span></a>      
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/1.jpg" alt="">
                            <p style="bottom:0">周杰伦粉丝版MV</p>
                        </li> 
                        <li id="imgCard1">
                            <a href=""><span style="opacity:0.4;"></span></a>      
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/2.jpg" alt="">
                            <p>乐侃有声节目第二期</p>
                        </li> 
                        <li id="imgCard2">
                            <a href=""><span style="opacity:0.4;" ></span></a>        
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/3.jpg" alt="">
                            <p>乐见大牌：”荣“耀之声，”维“我独尊</p>
                        </li> 
                        <li id="imgCard3">
                            <a href=""><span style="opacity:0.4;"></span></a>      
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/4.jpg" alt="">
                            <p>王力宏四年心血结晶</p>
                        </li> 
                        <li id="imgCard4">
                            <a href=""><span style="opacity:0.4;"></span></a>      
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/5.jpg" alt="">
                            <p>MV精选：《武媚》女神团美艳大比拼</p>
                        </li> 
                    </ul>
                    <!--火狐倒影图层-->
                    <p id="rflt"></p>
                    <!--火狐倒影图层-->
                </div>
                <!--序列号按钮-->
                <div class="btn_list">
                    <span class="curr"></span><span></span><span></span><span></span><span></span>        
                </div>
            </div>
        </div>
    <!--/div-->

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
    </div>
<!--/div-->
