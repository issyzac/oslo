<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/14/15
 * Time: 12:36 AM
 */ ?>
<div class="black-header">
    <div class="scratch-user-menu">
        <?php if ($logged_in): ?>
            <?php print render($page['user_menu']); ?>
        <?php else: ?>
            <ul>
                <li class="menu"><a href="<?php base_path(); ?>user/login">Log In</a></li>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="scratch-header clearfix" style="margin-bottom: 15px">
    <div class="logo-div">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
    </div>
    <div class="scratch-main-menu">
        <?php print render($page['main_menu']); ?>
    </div>
</div>

<div class="scratch-content-container-div clearfix">
    <?php if ($messages): ?>
        <div id="messages">
            <div class="section clearfix">
                <?php print $messages; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="up_comming col-lg-2 pull-left" style="height: 600px; background-color: white">
        <?php print render($page['up_coming']) ?>
    </div>

    <div class="col-lg-5 learn" style="height: 300px; background-color: #f5f5f5">
        <?php  print render($page['learn']); ?>
    </div>

    <div class="col-lg-5 mix" style="height: 300px; background-color: darkgray; padding-left: -20px">
        <?php print render($page['mix']) ?>
    </div>

    <div class="col-lg-5 share_image" style="height: 300px; background-color: orangered">
        <?php print render($page['share_image']) ?>
    </div>

    <div class="col-lg-5 share_link" style="height: 300px; background-color: #000000">
        <?php print render($page['share_link']) ?>
    </div>

    <div class="col-lg-7 join_image" style="height: 300px; background-color: rosybrown;">
        <?php print render($page['join_image']) ?>
    </div>

    <div class="col-lg-5 join_link" style="background-color: #f5f5f5; height: 300px">
        <?php print render($page['join_link']) ?>
    </div>

    <div class="" style="margin-top: 20px !important;">
        <p style="font-size: 36px; margin-left: 30px; margin-bottom: 10px"><b> Kommende eventer </b></p>
    </div>

    <!-- ######################### LARGE EVENTS ##################################-->

    <!-- Recent Large First Event -->
    <div class="col-lg-12 recent-events">
        <!--  The First Recent Event Image  -->
        <div class="col-lg-12 join_image" style=" background-color: #d3d3d3;">
            <?php print render($page['recent_events_large']) ?>
        </div>

    </div>
    <!-- ######################### SMALL EVENTS ##################################-->

    <!-- Small Events First -->
    <div class="col-lg-12" style="padding: 0px">
        <!--  The First Small Recent Event Image  -->
        <div class="col-lg-2 join_image" style="height: 200px; background-color: rosybrown;">
            <?php print render($page['recent_one_image']) ?>
        </div>

        <!--  The First Small Recent Event Text  -->
        <div class="col-lg-10 join_link" style="background-color: #f5f5f5; height: 200px">
            <?php print render($page['recent_one_text']) ?>
        </div>
    </div>

    <!--  Small Events Second  -->
    <div class="col-lg-12" style="padding: 0px">
        <!--  The Second Small Recent Event Image  -->
        <div class="col-lg-2 join_image" style="height: 200px; background-color: #0d3349;">
            <?php print render($page['recent_two_image']) ?>
        </div>

        <!--  The Second Small Recent Event Text  -->
        <div class="col-lg-10 join_link" style="background-color: #FFFFFF; height: 200px">
            <?php print render($page['recent_two_text']) ?>
        </div>
    </div>

    <!--  Small Events Third  -->
    <div class="col-lg-12" style="padding: 0px">

        <!--  The Third Small Recent Event Image  -->
        <div id="small_last_image" class="col-lg-2 join_image" style="height: 200px; background-color: rosybrown;">
            <?php print render($page['recent_two_image']) ?>
        </div>

        <!--  The Third Small Recent Event Text  -->
        <div class="col-lg-10 join_link" style="background-color: #f5f5f5; height: 200px">
            <?php print render($page['recent_two_text']) ?>
        </div>

    </div>

    <div class="panel-footer" style="background-color: #000000">

        <div class="row">

            <div class="col-md-4" style="color: white; background-color: #000000; position: relative;  top: 50%; transform: translateY(50%);  height: 150px">
                <p style="color: #d3d3d3">Sign Up for news letter or email </p>
                <?php print render($page['footer_firstcolumn']) ?>
            </div>

            <div class="col-lg-2" style="color: white;  background-color: #000000; position: relative;  top: 50%; transform: translateY(50%);  height: 150px">
                <p style="font-size: 20px"><strong>657OSLO</strong></p>
                <p style="color: #d3d3d3"><small>info@657.no</small></p>
                <p style="color: #d3d3d3"><small>+ 47 123 45 678</small></p>
                <?php print render($page['footer_ssecondcolumn']) ?>
            </div>

            <div class="col-lg-2" style="color: white; background-color: #000000; position: relative;  top: 50%; transform: translateY(50%);  height: 150px">
                <p style="color: #d3d3d3">Fredensborgvn. 24 D</p>
                <p style="color: #d3d3d3color: #d3d3d3">0177 Oslo, Norway</p>
                <p style="color: #d3d3d3"> – – – – – – – – – – – – – – – </p>
                <?php print render($page['footer_thirdcolumn']) ?>
            </div>

            <div class="col-lg-2" style="color: white; background-color: #000000; position: relative;  top: 50%; transform: translateY(50%);  height: 150px">
                <p style="color: #d3d3d3">Coworking,</p>
                <p style="color: #d3d3d3">Communication,</p>
                <p style="color: #d3d3d3">& innovation</p>
                <?php print render($page['footer_fourthcolumn']) ?>
            </div>

            <div class="col-lg-2" style="color: white; background-color: #000000; position: relative;  top: 50%; transform: translateY(50%); height: 150px">
                <i class="fa fa-twitter-square fa-th-large" style="font-size: 50px"></i> <i class="fa fa-facebook-square" style="font-size: 50px"></i> <i class="fa fa-instagram" style="font-size: 50px"></i>
                <?php print render($page['footer_fifthcolumn']) ?>
            </div>

        </div>

    </div>

</div>