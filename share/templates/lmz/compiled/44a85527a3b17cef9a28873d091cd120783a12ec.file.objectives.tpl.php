<?php /* Smarty version Smarty-3.0.6, created on 2016-07-15 15:12:00
         compiled from "/var/www/curriculum/share/templates/lmz/objectives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17132295155788e120bfd607-41403280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a85527a3b17cef9a28873d091cd120783a12ec' => 
    array (
      0 => '/var/www/curriculum/share/templates/lmz/objectives.tpl',
      1 => 1467374233,
      2 => 'file',
    ),
    '4a22841134b78773709d89aadda612468175bbbb' => 
    array (
      0 => '/var/www/curriculum/share/templates/lmz/base.tpl',
      1 => 1467375321,
      2 => 'file',
    ),
    'bab0ee13e6c2628f989df2278fc2dd3d320f8516' => 
    array (
      0 => '/var/www/curriculum/share/templates/lmz/menu.tpl',
      1 => 1467374556,
      2 => 'file',
    ),
    'd009f9f141b785a98623d4933444b6654bfebb7e' => 
    array (
      0 => '/var/www/curriculum/share/templates/lmz/sidebar_right.tpl',
      1 => 1467374233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17132295155788e120bfd607-41403280',
  'function' => 
  array (
    'validate_msg' => 
    array (
      'parameter' => 
      array (
        'field' => '\'\'',
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_content_header')) include '/var/www/curriculum/share/libs/Smarty-3.0.6/libs/plugins/function.content_header.php';
if (!is_callable('smarty_function_html_paginator')) include '/var/www/curriculum/share/libs/Smarty-3.0.6/libs/plugins/function.html_paginator.php';
if (!is_callable('smarty_modifier_resolve_file_id')) include '/var/www/curriculum/share/libs/Smarty-3.0.6/libs/plugins/modifier.resolve_file_id.php';
?><!DOCTYPE html>  
<!--[if lt IE 7 ]> <html lang="de" class="no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="de" class="no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="de" class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="de" class="no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="de" class="no-js"> <!--<![endif]-->
<?php if (!function_exists('smarty_template_function_validate_msg')) {
    function smarty_template_function_validate_msg($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['validate_msg']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable(trim($value,'\''));};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (isset($_smarty_tpl->getVariable('v_error',null,true,false)->value[$_smarty_tpl->getVariable('field',null,true,false)->value])){?>
        <?php  $_smarty_tpl->tpl_vars['v_field'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('v_error')->value[$_smarty_tpl->getVariable('field')->value]['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v_field']->key => $_smarty_tpl->tpl_vars['v_field']->value){
 $_smarty_tpl->tpl_vars['err']->value = $_smarty_tpl->tpl_vars['v_field']->key;
?>
                <p><label></label><?php echo $_smarty_tpl->tpl_vars['v_field']->value;?>
</p>   
        <?php }} ?> 
    <?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

   
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 | <?php echo strip_tags($_smarty_tpl->getVariable('app_title')->value);?>
</title>
        <meta name="description" content="">
        <meta name="author" content="Joachim Dieterich (www.curriculumonline.de)">
        
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/favicon-16x16.png" sizes="16x16" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
images/favicon/mstile-144x144.png" />

        
        <!-- AdminLTE -->
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('lib_url')->value;?>
/font-awesome-4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
stylesheets/google-fonts.css" >
        <!-- Ionicons --><!-- not used yet -->
        <!--link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"-->
        <!-- jvectormap -->
        <!--link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css"-->
        <!-- fullCalendar 2.2.5 -> see calendar.tpl-->
        <!--link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/fullcalendar/fullcalendar.min.css"-->
        <!--link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/fullcalendar/fullcalendar.print.css" media="print"-->
        <!-- daterangepicker -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
        <!--link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/dist/css/skins/skin-blue-light.min.css"-->
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/colorpicker/bootstrap-colorpicker.min.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
stylesheets/all-bs.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
stylesheets/buttons.css" media="all">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
jquery.nyroModal/styles/nyroModal.css" media="all">
    </head>
    
    <?php if ($_smarty_tpl->getVariable('page_action')->value=='login'){?>
    <body class="hold-transition login-page" style="background-image: url('<?php echo $_smarty_tpl->getVariable('request_url')->value;?>
assets/images/backgrounds/CC-BY-SA-miniBLOCKHELDEN20131221_bouldern0004.jpg'); background-size: cover;" >
         
<!-- Content Header (Page header) -->
<?php echo smarty_function_content_header(array('p_title'=>$_smarty_tpl->getVariable('page_title')->value,'pages'=>$_smarty_tpl->getVariable('breadcrumb')->value,'help'=>'http://docs.joachimdieterich.de/index.php?title=Lernstand'),$_smarty_tpl);?>
   

<!-- Main content -->
<section class="content">
    <div class="row ">
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12" >
            <div class="box box-primary" id="row_objectives_userlist">
                <div class="box-header with-border">
                    <!--div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <!--button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button-->
                    <!--/div-->
                
                    <?php if (isset($_smarty_tpl->getVariable('courses',null,true,false)->value)){?>
                    <select  class='pull-left' id='course' name='course' onchange="window.location.assign('index.php?action=objectives&course='+this.value);"> 
                        <option value="-1" data-skip="1">Kurs / Klasse wählen...</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['res']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['name'] = 'res';
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('courses')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total']);
?>
                            <?php if ($_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->semester_id==$_smarty_tpl->getVariable('my_semester_id')->value){?>
                              <option value="<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id;?>
" 
                              <?php if ($_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id==$_smarty_tpl->getVariable('selected_curriculum')->value){?> selected <?php }?> 
                              data-icon="<?php echo $_smarty_tpl->getVariable('subjects_path')->value;?>
/<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->icon;?>
" data-html-text="<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->group;?>
 - <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->curriculum;?>
&lt;i&gt;
                              <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->description;?>
&lt;/i&gt;"><?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->group;?>
 - <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->curriculum;?>
</option>  
                            <?php }?>
                        <?php endfor; endif; ?> 
                    </select> 
                    <?php if ($_smarty_tpl->getVariable('show_course')->value!=''&&$_smarty_tpl->getVariable('terminalObjectives')->value!=false||!isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)){?>
                    <form method='post' action='index.php?action=objectives&course=<?php echo $_smarty_tpl->getVariable('selected_curriculum')->value;?>
&userID=<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
&next=<?php echo $_smarty_tpl->getVariable('currentUrlId')->value;?>
'>
                    <select class='pull-left' id='certificate_template' name='certificate_template' onchange=""> 
                        <option value="-1" data-skip="1">Zertifikatvorlage wählen...</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['res']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['name'] = 'res';
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('certificate_templates')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id;?>
" 
                                <?php if ($_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id==$_smarty_tpl->getVariable('selected_certificate_template')->value){?> selected <?php }?>>
                                <?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->certificate;?>
 - <?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->description;?>

                            </option>  
                        <?php endfor; endif; ?> 
                    </select>    
                        <input type='hidden' name='sel_curriculum' value='<?php echo $_smarty_tpl->getVariable('sel_curriculum')->value;?>
'/>
                        <input type='hidden' name='sel_user_id' value='<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
'/>
                        <input type='hidden' name='sel_group_id' value='<?php echo $_smarty_tpl->getVariable('sel_group_id')->value;?>
'/>
                        <input class='menusubmit space-left' type='submit' name="printCertificate" value=<?php if (count($_smarty_tpl->getVariable('selected_user_id')->value)>1){?>'Zertifikate erstellen'<?php }else{ ?> 'Zertifikat erstellen'<?php }?> /> 
                    </form>
                    <?php }else{ ?>
                        <select class='hidden pull-left space-left' id='certificate_template' name='certificate_template' onchange=""> 
                            <option value="-1" data-skip="1">Zertifikatvorlage wählen...</option>
                        </select>
                    <?php }?>
                <?php }else{ ?><strong>Sie haben noch keine Lehrpläne angelegt bzw. noch keine Klassen eingeschrieben.</strong>
                <?php }?>

                <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value->avatar)){?>
                                <!--img class="pull-right attachment-img" src="<?php echo $_smarty_tpl->getVariable('access_file')->value;?>
<?php echo $_smarty_tpl->getVariable('user')->value->avatar;?>
" alt="Profilfoto"-->
                            <?php }?>    
                </div>
                
                <div class="box-body">
                <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?>   
                            <?php echo smarty_function_html_paginator(array('id'=>'userPaginator'),$_smarty_tpl);?>
 
                <?php }elseif($_smarty_tpl->getVariable('showuser')->value==true){?>Keine eingeschriebenen Benutzer<?php }?>
                </div>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?> 
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
            <?php echo Render::courseBook($_smarty_tpl->getVariable('coursebook')->value);?>
    
        </div>
        <?php }?>
    </div>
    
    <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?> 
    <div class="row ">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
        
        <?php if ($_smarty_tpl->getVariable('show_course')->value!=''&&$_smarty_tpl->getVariable('terminalObjectives')->value!=false||!isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)){?> 
            <?php  $_smarty_tpl->tpl_vars['ter'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['terid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('terminalObjectives')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ter']->key => $_smarty_tpl->tpl_vars['ter']->value){
 $_smarty_tpl->tpl_vars['terid']->value = $_smarty_tpl->tpl_vars['ter']->key;
?>
                <div class="row" >
                    <div class="col-xs-12">
                        <div class="panel panel-default box-objective"> 
                            <div class="panel-heading boxheader" style="background: <?php echo $_smarty_tpl->getVariable('ter')->value->color;?>
"></div>
                            <div id="ter_<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
" class="panel-body bg-gray disabled color-palette boxwrap">
                                <div class="boxscroll">
                                    <div class="boxcontent">
                                        <?php echo $_smarty_tpl->getVariable('ter')->value->terminal_objective;?>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer boxfooter">
                                <a onclick="showDescription('<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
');"><span class="fa fa-info pull-right box-sm-icon"></span></a>
                            </div>
                        </div>
                        
                        <?php  $_smarty_tpl->tpl_vars['ena'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['enaid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('enabledObjectives')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ena']->key => $_smarty_tpl->tpl_vars['ena']->value){
 $_smarty_tpl->tpl_vars['enaid']->value = $_smarty_tpl->tpl_vars['ena']->key;
?>
                            <?php if ($_smarty_tpl->getVariable('ena')->value->terminal_objective_id==$_smarty_tpl->getVariable('ter')->value->id){?>
                                <div style="display:none" id="<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
_<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
"><?php echo 0+$_smarty_tpl->getVariable('ena')->value->accomplished_status_id;?>
</div><!--Container für Variable-->
                                <div id="<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
style<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
" class="panel panel-default box-objective <?php if ($_smarty_tpl->getVariable('ena')->value->accomplished_status_id==1){?> boxgreen <?php }elseif($_smarty_tpl->getVariable('ena')->value->accomplished_status_id==2){?> boxorange <?php }elseif($_smarty_tpl->getVariable('ena')->value->accomplished_status_id=='0'){?> boxred <?php }?>"> 
                                    <div class="panel-heading boxheader" style="background: <?php echo $_smarty_tpl->getVariable('ter')->value->color;?>
">
                                        <?php if (isset($_smarty_tpl->getVariable('ena',null,true,false)->value->accomplished_users)&&isset($_smarty_tpl->getVariable('ena',null,true,false)->value->enroled_users)&&isset($_smarty_tpl->getVariable('ena',null,true,false)->value->accomplished_percent)){?>
                                            <?php echo $_smarty_tpl->getVariable('ena')->value->accomplished_users;?>
 von <?php echo $_smarty_tpl->getVariable('ena')->value->enroled_users;?>
 (<?php echo $_smarty_tpl->getVariable('ena')->value->accomplished_percent;?>
%)<!--Ziel--> 
                                        <?php }?>
                                        <a onclick='formloader("compare","group", <?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
,<?php echo json_encode(array("group_id"=>$_smarty_tpl->getVariable('sel_group_id')->value));?>
);'><span class="fa  fa-bar-chart-o pull-right invert box-sm-icon"></span></a>
                                    </div>
                                    <div  class="panel-body boxwrap" onclick="setAccomplishedObjectives(<?php echo $_smarty_tpl->getVariable('my_id')->value;?>
, '<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
', <?php echo $_smarty_tpl->getVariable('userPaginator')->value['first'];?>
, <?php if (isset($_smarty_tpl->getVariable('paginatorLimit',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('paginatorLimit')->value;?>
<?php }else{ ?>10<?php }?>, <?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
, <?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
, <?php echo $_smarty_tpl->getVariable('sel_group_id')->value;?>
);">
                                        <div class="boxscroll">
                                                <div class="boxcontent">
                                                    <?php echo $_smarty_tpl->getVariable('ena')->value->enabling_objective;?>

                                                </div>
                                            </div>
                                    </div>
                                    <div class="panel-footer boxfooter">
                                        <?php if ($_smarty_tpl->getVariable('addedSolutions')->value!=false){?> 
                                            <?php $_smarty_tpl->tpl_vars["firstrun"] = new Smarty_variable("true", null, null);?> 
                                            <?php  $_smarty_tpl->tpl_vars['sol'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['solID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addedSolutions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sol']->key => $_smarty_tpl->tpl_vars['sol']->value){
 $_smarty_tpl->tpl_vars['solID']->value = $_smarty_tpl->tpl_vars['sol']->key;
?>
                                                <?php if ($_smarty_tpl->getVariable('sol')->value->enabling_objective_id==$_smarty_tpl->getVariable('ena')->value->id){?>
                                                    <?php if ($_smarty_tpl->getVariable('firstrun')->value=="true"){?>
                                                        <select class="col-xs-11" name="select_<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
" onclick="openLink(this.options[this.selectedIndex].value, '_blank');"> 
                                                        <option value="">Abgaben...</option>
                                                        <?php $_smarty_tpl->tpl_vars["firstrun"] = new Smarty_variable("false", null, null);?>
                                                    <?php }?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
public/<?php echo $_smarty_tpl->getVariable('solutions_path')->value;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->path;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->filename;?>
">(<?php echo $_smarty_tpl->getVariable('sol')->value->lastname;?>
, <?php echo $_smarty_tpl->getVariable('sol')->value->firstname;?>
) <?php echo $_smarty_tpl->getVariable('sol')->value->filename;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->type;?>
</a></option>
                                                <?php }?>
                                            <?php }} ?>
                                            </select>
                                        <?php }?>
                                        <a onclick="showDescription('<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
','<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
');"><span class="fa fa-info pull-right box-sm-icon"></span></a>
                                    </div>
                                </div> 
                    <?php }?>
                    <?php }} ?> 
               </tr>
            <?php }} ?>		
            </table>
            </div>   
        <?php }else{ ?>
            <?php if (isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)&&$_smarty_tpl->getVariable('show_course')->value!=''){?>
                <p>Es wurden noch keine Lernziele eingegeben.</p>
                <p>Dies können sie unter Lehrpläne --> Lernziele/Kompetenzen hinzufügen machen.</p>
            <?php }else{ ?> 
                <?php if (isset($_smarty_tpl->getVariable('curriculum_id',null,true,false)->value)){?><!--Wenn noch keine Lehrpläne angelegt wurden-->
                <p>Bitte wählen sie einen Benutzer aus.</p>
                <?php }?>            
            <?php }?>
        <?php }?> 
        
                </div>
            </div>
        </div>
    </div>
 </div>
        <?php }?>
</section>

    </body>
    <?php }else{ ?>
    
    <body class="hold-transition skin-blue sidebar-mini" data-spy="scroll" data-target=".modal-body"> 
        <div class="wrapper"> 
            <header class="main-header">
              <!-- Logo -->
              <a href="index.php?action=dashboard" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img class="pull-left" style="margin-top: 5px; margin-left: 2px;" src="<?php echo $_smarty_tpl->getVariable('request_url')->value;?>
assets/images/lmz_logo.png"/></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img class="pull-left" style="margin-top: 5px;" src="<?php echo $_smarty_tpl->getVariable('request_url')->value;?>
assets/images/lmz_logo.png"/><b><?php echo $_smarty_tpl->getVariable('app_title')->value;?>
</b></span>
              </a>
                
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <?php if (isset($_smarty_tpl->getVariable('my_id',null,true,false)->value)){?>
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                      <span class="sr-only">Navigation wechseln</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                         
                      <ul class="nav navbar-nav">
                         <li> 
                         <?php if (isset($_smarty_tpl->getVariable('mySemester',null,true,false)->value)&&count($_smarty_tpl->getVariable('mySemester')->value)>1){?>
                             <p><?php echo Form::input_select('semester_id','',$_smarty_tpl->getVariable('mySemester')->value,'semester, institution','id',$_smarty_tpl->getVariable('my_semester_id')->value,null,"setSemester(this.value);");?>
</p>
                         <?php }elseif(isset($_smarty_tpl->getVariable('my_institutions',null,true,false)->value)&&count($_smarty_tpl->getVariable('my_institutions')->value)>1){?>
                             <p><?php echo Form::input_select('institution_id','',$_smarty_tpl->getVariable('my_institutions')->value,'institution','institution_id',$_smarty_tpl->getVariable('my_institution_id')->value,null,"processor('config','institution_id', this.value);");?>
</p>
                         <?php }?> 
                         </li>
                        <li class="calendar-menu">   
                        <a href="index.php?action=calendar" >
                            <i class="fa fa-calendar"></i>
                          </a>
                        </li>  
                        <li class="timeline-menu">   
                        <a href="index.php?action=portfolio" >
                            <i class="fa fa-cubes"></i>
                          </a>
                        </li>  
                        <?php if (isset($_smarty_tpl->getVariable('mails',null,true,false)->value)){?>  
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><?php echo count($_smarty_tpl->getVariable('mails')->value);?>
</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">Sie haben <?php echo count($_smarty_tpl->getVariable('mails')->value);?>
 neue Nachrichten</li>
                            <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['name'] = 'mes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('mails')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total']);
?>
                                      <li><!-- start message -->
                                          <a href="index.php?action=messages&function=showInbox&id=<?php echo $_smarty_tpl->getVariable('mails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]->id;?>
">
                                            <div class="pull-left">
                                              <img src="<?php echo $_smarty_tpl->getVariable('access_file')->value;?>
<?php echo smarty_modifier_resolve_file_id($_smarty_tpl->getVariable('mails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]->sender_file_id,"xs");?>
" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                              <?php echo $_smarty_tpl->getVariable('mails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]->sender_username;?>

                                              <small><i class="fa fa-calendar-times-o"></i> <?php echo $_smarty_tpl->getVariable('mails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]->creation_time;?>
</small>
                                            </h4>
                                            <p><?php echo $_smarty_tpl->getVariable('mails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]->subject;?>
</p>
                                          </a>
                                      </li>
                                  <?php endfor; endif; ?>
                               
                                <!-- end message -->
                              </ul>
                            </li>
                            <li class="footer"><a href="index.php?action=messages&function=showInbox">Alle Nachrichten</a></li>
                          </ul>
                        </li>
                        <?php }else{ ?>
                        <li class=" messages-menu">   
                            <a href="index.php?action=messages&function=showInbox" ><i class="fa fa-envelope-o"></i></a>
                        </li>
                        <?php }?> 

                        <?php if (isset($_smarty_tpl->getVariable('page_message',null,true,false)->value)){?>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu open">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><?php echo count($_smarty_tpl->getVariable('page_message')->value);?>
</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">Sie haben <?php echo count($_smarty_tpl->getVariable('page_message')->value);?>
 Hinweise</li>
                            <li>
                              <ul class="menu"><!-- inner menu: contains the actual data -->
                                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['name'] = 'mes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('page_message')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mes']['total']);
?>
                                  <li>
                                      <a href="#">
                                        <?php if (is_array($_smarty_tpl->getVariable('page_message')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']])){?>
                                            <i class="fa <?php if (isset($_smarty_tpl->getVariable('page_message',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['mes']['index']]['icon'])){?><?php echo $_smarty_tpl->getVariable('page_message')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]['icon'];?>
<?php }else{ ?>fa-warning text-yellow<?php }?>"></i> <?php echo $_smarty_tpl->getVariable('page_message')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']]['message'];?>

                                        <?php }else{ ?>
                                            <i class="fa fa-warning text-yellow"></i> <?php echo $_smarty_tpl->getVariable('page_message')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mes']['index']];?>

                                        <?php }?>
                                      </a>
                                  </li>
                                  <?php endfor; endif; ?>
                              </ul>
                              <li class="footer"><a href="#"> <!--Alle zeigen--></a></li>
                          </ul>
                        </li>
                        <?php }?>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->getVariable('access_file')->value;?>
<?php echo $_smarty_tpl->getVariable('my_avatar')->value;?>
" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $_smarty_tpl->getVariable('my_firstname')->value;?>
 <?php echo $_smarty_tpl->getVariable('my_lastname')->value;?>
</span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                              <img src="<?php echo $_smarty_tpl->getVariable('access_file')->value;?>
<?php echo $_smarty_tpl->getVariable('my_avatar')->value;?>
" class="img-circle" alt="User Image">
                              <p>
                                <?php echo $_smarty_tpl->getVariable('my_firstname')->value;?>
 <?php echo $_smarty_tpl->getVariable('my_lastname')->value;?>
 - <?php echo $_smarty_tpl->getVariable('my_role_name')->value;?>

                                <small>Mitglied seit <?php echo $_smarty_tpl->getVariable('my_creation_time')->value;?>
</small>
                              </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                              <div class="col-xs-6 text-center">
                                  <?php if (checkCapabilities('user:resetPassword',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                                      <a href="#" onclick="formloader('password', 'edit');">Passwort ändern</a>
                                  <?php }?>
                              </div>
                              <div class="col-xs-6 text-center">
                                  <?php if (checkCapabilities('menu:readMessages',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                                      <a href="../share/request/uploadframe.php?context=userFiles&target=NULL<?php echo $_smarty_tpl->getVariable('tb_param')->value;?>
" class="nyroModal">
                                          Meine Dateien
                                      </a>
                                  <?php }?>
                              </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                              <div class="pull-left">
                                  <?php if (checkCapabilities('user:update',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                                      <a href="#" class="btn btn-default btn-flat" onclick="formloader('profile', 'edit');">Profil</a>
                                  <?php }?>
                              </div>
                              <div class="pull-right">
                                <a href="index.php?action=logout" class="btn btn-default btn-flat">Abmelden</a>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                      </ul>
                    </div>    
                    <?php }?>   
                </nav>         
            </header>        
                
            <!-- Sidebar left - Menu -->
            <?php if ($_smarty_tpl->getVariable('page_name')->value!='login'){?> <!--Kein Menu -->        
                <?php $_template = new Smarty_Internal_Template('menu.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '17132295155788e120bfd607-41403280';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.6, created on 2016-07-15 15:12:00
         compiled from "/var/www/curriculum/share/templates/lmz/menu.tpl" */ ?>
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Klassenstufen</li>
            <li class="treeview">
            <?php if ($_smarty_tpl->getVariable('my_enrolments')->value!=''){?>
                <?php  $_smarty_tpl->tpl_vars['cur_menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('my_enrolments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cur_menu']->key => $_smarty_tpl->tpl_vars['cur_menu']->value){
?>
                    <?php if ($_smarty_tpl->getVariable('cur_menu')->value->semester_id==$_smarty_tpl->getVariable('my_semester_id')->value){?>
                        <?php if ($_smarty_tpl->getVariable('cur_menu')->value->id==$_smarty_tpl->getVariable('cur_menu')->value->base_curriculum_id||$_smarty_tpl->getVariable('cur_menu')->value->base_curriculum_id==null){?>
                        <li <?php if (isset($_smarty_tpl->getVariable('page_curriculum',null,true,false)->value)){?><?php if (($_smarty_tpl->getVariable('page_curriculum')->value==$_smarty_tpl->getVariable('cur_menu')->value->id)&&($_smarty_tpl->getVariable('page_group')->value==$_smarty_tpl->getVariable('cur_menu')->value->group_id)){?> class="active"<?php }?><?php }?>>
                            <a href="index.php?action=view&curriculum_id=<?php echo $_smarty_tpl->getVariable('cur_menu')->value->id;?>
&group=<?php echo $_smarty_tpl->getVariable('cur_menu')->value->group_id;?>
">
                                <i class="fa fa-dashboard"></i><span><?php echo $_smarty_tpl->getVariable('cur_menu')->value->curriculum;?>
</span><small class="label pull-right bg-green"><?php echo $_smarty_tpl->getVariable('cur_menu')->value->groups;?>
</small>
                            </a>
                        </li>
                        <?php }?>
                    <?php }?>
                <?php }} ?>
            <?php }else{ ?><li><a href="">
                                <i class="fa fa-dashboard"></i><span>Sie sind in keinen Lehrplan <br>eingeschrieben</span>
                      </a></li>
            <?php }?>   
            
            <!-- Institution Menu -->
            <?php if (checkCapabilities('menu:readMyInstitution',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                <li class="header">MyPortfolio</li>
                <?php if (checkCapabilities('menu:readObjectives',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='objectives'){?>active<?php }?>">
                    <a href="index.php?action=objectives&reset=true">
                        <i class="fa fa-edit"></i> <span>Lernstand eingeben</span>
                    </a>
                </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readCourseBook',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='courseBook'){?>active<?php }?>">
                    <a href="index.php?action=coursebook&reset=true">
                        <i class="fa fa-book"></i> <span>Kursbuch</span>
                    </a>
                </li>
                <?php }?>

                <?php if (checkCapabilities('menu:readCurriculum',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='curriculum'){?>active<?php }?>">
                    <a href="index.php?action=curriculum&reset=true">
                        <i class="fa fa-th"></i> <span>Lehrpläne</span>
                    </a>
                </li>                  
                <?php }?>

                <?php if (checkCapabilities('menu:readGroup',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='group'){?>active<?php }?>">
                        <a href="index.php?action=group&reset=true">
                            <i class="fa fa-group"></i><span>Lerngruppen</span>
                        </a>
                    </li>
                <?php }?>

                <?php if (checkCapabilities('menu:readUser',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='user'){?>active<?php }?>">
                        <a href="index.php?action=user&reset=true">
                            <i class="fa fa-user"></i><span>Benutzer</span>
                        </a>
                    </li>
                <?php }?>

                <?php if (checkCapabilities('menu:readRole',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='role'){?>active<?php }?>">
                        <a href="index.php?action=role&reset=true">
                            <i class="fa fa-key"></i><span>Rollenverwaltung</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readGrade',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='grade'){?>active<?php }?>">
                        <a href="index.php?action=grade">
                            <i class="fa fa-signal"></i><span>Klassenstufen</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readSubject',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='subject'){?>active<?php }?>">
                        <a href="index.php?action=subject&reset=true">
                            <i class="fa fa-language"></i><span>Fächer</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readSemester',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='semester'){?>active<?php }?>">
                        <a href="index.php?action=semester&reset=true">
                            <i class="fa fa-calendar"></i><span>Lernzeiträume</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readBackup',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='backup'){?>active<?php }?>">
                        <a href="index.php?action=backup&reset=true">
                            <i class="fa fa-cloud-download"></i><span>Backup</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readCertificate',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>   
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='certificate'){?>active<?php }?>">
                        <a href="index.php?action=certificate&reset=true">
                            <i class="fa fa-files-o"></i><span>Zertifikate</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (checkCapabilities('menu:readInstitution',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>   
                    <li class="treeview <?php if ($_smarty_tpl->getVariable('page_action')->value=='institution'){?>active<?php }?>">
                        <a href="index.php?action=institution&reset=true">
                            <i class="fa fa-university"></i><span>Institutionen</span>
                        </a>
                    </li>
                <?php }?>
            <?php }?>
            
            <?php if (checkCapabilities('menu:readLog',$_smarty_tpl->getVariable('my_role_id')->value,false)){?>
            <li class="header">Administration</li>    
            
            <li <?php if ($_smarty_tpl->getVariable('page_action')->value=='log'){?>class="active"<?php }?>>
                <a href="index.php?action=log">
                    <i class="fa fa-list"></i><span>Berichte</span>
                </a>
            </li>
            <?php }?>
            
        </section>
        <!-- /.sidebar -->
      </aside>






<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/var/www/curriculum/share/templates/lmz/menu.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?> 
            <?php }?>
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div id="popup" class="modal" onload="popupFunction(this.id);"><div class="modal-dialog"><div class="box"><div class="box-header"><h3 class="box-title">Loading...</h3></div><div class="box-body"></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div></div></div> <!-- Popup -->    
                 
<!-- Content Header (Page header) -->
<?php echo smarty_function_content_header(array('p_title'=>$_smarty_tpl->getVariable('page_title')->value,'pages'=>$_smarty_tpl->getVariable('breadcrumb')->value,'help'=>'http://docs.joachimdieterich.de/index.php?title=Lernstand'),$_smarty_tpl);?>
   

<!-- Main content -->
<section class="content">
    <div class="row ">
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12" >
            <div class="box box-primary" id="row_objectives_userlist">
                <div class="box-header with-border">
                    <!--div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <!--button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button-->
                    <!--/div-->
                
                    <?php if (isset($_smarty_tpl->getVariable('courses',null,true,false)->value)){?>
                    <select  class='pull-left' id='course' name='course' onchange="window.location.assign('index.php?action=objectives&course='+this.value);"> 
                        <option value="-1" data-skip="1">Kurs / Klasse wählen...</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['res']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['name'] = 'res';
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('courses')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total']);
?>
                            <?php if ($_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->semester_id==$_smarty_tpl->getVariable('my_semester_id')->value){?>
                              <option value="<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id;?>
" 
                              <?php if ($_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id==$_smarty_tpl->getVariable('selected_curriculum')->value){?> selected <?php }?> 
                              data-icon="<?php echo $_smarty_tpl->getVariable('subjects_path')->value;?>
/<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->icon;?>
" data-html-text="<?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->group;?>
 - <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->curriculum;?>
&lt;i&gt;
                              <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->description;?>
&lt;/i&gt;"><?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->group;?>
 - <?php echo $_smarty_tpl->getVariable('courses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->curriculum;?>
</option>  
                            <?php }?>
                        <?php endfor; endif; ?> 
                    </select> 
                    <?php if ($_smarty_tpl->getVariable('show_course')->value!=''&&$_smarty_tpl->getVariable('terminalObjectives')->value!=false||!isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)){?>
                    <form method='post' action='index.php?action=objectives&course=<?php echo $_smarty_tpl->getVariable('selected_curriculum')->value;?>
&userID=<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
&next=<?php echo $_smarty_tpl->getVariable('currentUrlId')->value;?>
'>
                    <select class='pull-left' id='certificate_template' name='certificate_template' onchange=""> 
                        <option value="-1" data-skip="1">Zertifikatvorlage wählen...</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['res']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['name'] = 'res';
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('certificate_templates')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['res']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['res']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['res']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id;?>
" 
                                <?php if ($_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->id==$_smarty_tpl->getVariable('selected_certificate_template')->value){?> selected <?php }?>>
                                <?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->certificate;?>
 - <?php echo $_smarty_tpl->getVariable('certificate_templates')->value[$_smarty_tpl->getVariable('smarty')->value['section']['res']['index']]->description;?>

                            </option>  
                        <?php endfor; endif; ?> 
                    </select>    
                        <input type='hidden' name='sel_curriculum' value='<?php echo $_smarty_tpl->getVariable('sel_curriculum')->value;?>
'/>
                        <input type='hidden' name='sel_user_id' value='<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
'/>
                        <input type='hidden' name='sel_group_id' value='<?php echo $_smarty_tpl->getVariable('sel_group_id')->value;?>
'/>
                        <input class='menusubmit space-left' type='submit' name="printCertificate" value=<?php if (count($_smarty_tpl->getVariable('selected_user_id')->value)>1){?>'Zertifikate erstellen'<?php }else{ ?> 'Zertifikat erstellen'<?php }?> /> 
                    </form>
                    <?php }else{ ?>
                        <select class='hidden pull-left space-left' id='certificate_template' name='certificate_template' onchange=""> 
                            <option value="-1" data-skip="1">Zertifikatvorlage wählen...</option>
                        </select>
                    <?php }?>
                <?php }else{ ?><strong>Sie haben noch keine Lehrpläne angelegt bzw. noch keine Klassen eingeschrieben.</strong>
                <?php }?>

                <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value->avatar)){?>
                                <!--img class="pull-right attachment-img" src="<?php echo $_smarty_tpl->getVariable('access_file')->value;?>
<?php echo $_smarty_tpl->getVariable('user')->value->avatar;?>
" alt="Profilfoto"-->
                            <?php }?>    
                </div>
                
                <div class="box-body">
                <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?>   
                            <?php echo smarty_function_html_paginator(array('id'=>'userPaginator'),$_smarty_tpl);?>
 
                <?php }elseif($_smarty_tpl->getVariable('showuser')->value==true){?>Keine eingeschriebenen Benutzer<?php }?>
                </div>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?> 
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
            <?php echo Render::courseBook($_smarty_tpl->getVariable('coursebook')->value);?>
    
        </div>
        <?php }?>
    </div>
    
    <?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?> 
    <div class="row ">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
        
        <?php if ($_smarty_tpl->getVariable('show_course')->value!=''&&$_smarty_tpl->getVariable('terminalObjectives')->value!=false||!isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)){?> 
            <?php  $_smarty_tpl->tpl_vars['ter'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['terid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('terminalObjectives')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ter']->key => $_smarty_tpl->tpl_vars['ter']->value){
 $_smarty_tpl->tpl_vars['terid']->value = $_smarty_tpl->tpl_vars['ter']->key;
?>
                <div class="row" >
                    <div class="col-xs-12">
                        <div class="panel panel-default box-objective"> 
                            <div class="panel-heading boxheader" style="background: <?php echo $_smarty_tpl->getVariable('ter')->value->color;?>
"></div>
                            <div id="ter_<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
" class="panel-body bg-gray disabled color-palette boxwrap">
                                <div class="boxscroll">
                                    <div class="boxcontent">
                                        <?php echo $_smarty_tpl->getVariable('ter')->value->terminal_objective;?>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer boxfooter">
                                <a onclick="showDescription('<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
');"><span class="fa fa-info pull-right box-sm-icon"></span></a>
                            </div>
                        </div>
                        
                        <?php  $_smarty_tpl->tpl_vars['ena'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['enaid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('enabledObjectives')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ena']->key => $_smarty_tpl->tpl_vars['ena']->value){
 $_smarty_tpl->tpl_vars['enaid']->value = $_smarty_tpl->tpl_vars['ena']->key;
?>
                            <?php if ($_smarty_tpl->getVariable('ena')->value->terminal_objective_id==$_smarty_tpl->getVariable('ter')->value->id){?>
                                <div style="display:none" id="<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
_<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
"><?php echo 0+$_smarty_tpl->getVariable('ena')->value->accomplished_status_id;?>
</div><!--Container für Variable-->
                                <div id="<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
style<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
" class="panel panel-default box-objective <?php if ($_smarty_tpl->getVariable('ena')->value->accomplished_status_id==1){?> boxgreen <?php }elseif($_smarty_tpl->getVariable('ena')->value->accomplished_status_id==2){?> boxorange <?php }elseif($_smarty_tpl->getVariable('ena')->value->accomplished_status_id=='0'){?> boxred <?php }?>"> 
                                    <div class="panel-heading boxheader" style="background: <?php echo $_smarty_tpl->getVariable('ter')->value->color;?>
">
                                        <?php if (isset($_smarty_tpl->getVariable('ena',null,true,false)->value->accomplished_users)&&isset($_smarty_tpl->getVariable('ena',null,true,false)->value->enroled_users)&&isset($_smarty_tpl->getVariable('ena',null,true,false)->value->accomplished_percent)){?>
                                            <?php echo $_smarty_tpl->getVariable('ena')->value->accomplished_users;?>
 von <?php echo $_smarty_tpl->getVariable('ena')->value->enroled_users;?>
 (<?php echo $_smarty_tpl->getVariable('ena')->value->accomplished_percent;?>
%)<!--Ziel--> 
                                        <?php }?>
                                        <a onclick='formloader("compare","group", <?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
,<?php echo json_encode(array("group_id"=>$_smarty_tpl->getVariable('sel_group_id')->value));?>
);'><span class="fa  fa-bar-chart-o pull-right invert box-sm-icon"></span></a>
                                    </div>
                                    <div  class="panel-body boxwrap" onclick="setAccomplishedObjectives(<?php echo $_smarty_tpl->getVariable('my_id')->value;?>
, '<?php echo implode(',',$_smarty_tpl->getVariable('selected_user_id')->value);?>
', <?php echo $_smarty_tpl->getVariable('userPaginator')->value['first'];?>
, <?php if (isset($_smarty_tpl->getVariable('paginatorLimit',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('paginatorLimit')->value;?>
<?php }else{ ?>10<?php }?>, <?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
, <?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
, <?php echo $_smarty_tpl->getVariable('sel_group_id')->value;?>
);">
                                        <div class="boxscroll">
                                                <div class="boxcontent">
                                                    <?php echo $_smarty_tpl->getVariable('ena')->value->enabling_objective;?>

                                                </div>
                                            </div>
                                    </div>
                                    <div class="panel-footer boxfooter">
                                        <?php if ($_smarty_tpl->getVariable('addedSolutions')->value!=false){?> 
                                            <?php $_smarty_tpl->tpl_vars["firstrun"] = new Smarty_variable("true", null, null);?> 
                                            <?php  $_smarty_tpl->tpl_vars['sol'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['solID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addedSolutions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sol']->key => $_smarty_tpl->tpl_vars['sol']->value){
 $_smarty_tpl->tpl_vars['solID']->value = $_smarty_tpl->tpl_vars['sol']->key;
?>
                                                <?php if ($_smarty_tpl->getVariable('sol')->value->enabling_objective_id==$_smarty_tpl->getVariable('ena')->value->id){?>
                                                    <?php if ($_smarty_tpl->getVariable('firstrun')->value=="true"){?>
                                                        <select class="col-xs-11" name="select_<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
" onclick="openLink(this.options[this.selectedIndex].value, '_blank');"> 
                                                        <option value="">Abgaben...</option>
                                                        <?php $_smarty_tpl->tpl_vars["firstrun"] = new Smarty_variable("false", null, null);?>
                                                    <?php }?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
public/<?php echo $_smarty_tpl->getVariable('solutions_path')->value;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->path;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->filename;?>
">(<?php echo $_smarty_tpl->getVariable('sol')->value->lastname;?>
, <?php echo $_smarty_tpl->getVariable('sol')->value->firstname;?>
) <?php echo $_smarty_tpl->getVariable('sol')->value->filename;?>
<?php echo $_smarty_tpl->getVariable('sol')->value->type;?>
</a></option>
                                                <?php }?>
                                            <?php }} ?>
                                            </select>
                                        <?php }?>
                                        <a onclick="showDescription('<?php echo $_smarty_tpl->getVariable('ter')->value->id;?>
','<?php echo $_smarty_tpl->getVariable('ena')->value->id;?>
');"><span class="fa fa-info pull-right box-sm-icon"></span></a>
                                    </div>
                                </div> 
                    <?php }?>
                    <?php }} ?> 
               </tr>
            <?php }} ?>		
            </table>
            </div>   
        <?php }else{ ?>
            <?php if (isset($_smarty_tpl->getVariable('selected_user_id',null,true,false)->value)&&$_smarty_tpl->getVariable('show_course')->value!=''){?>
                <p>Es wurden noch keine Lernziele eingegeben.</p>
                <p>Dies können sie unter Lehrpläne --> Lernziele/Kompetenzen hinzufügen machen.</p>
            <?php }else{ ?> 
                <?php if (isset($_smarty_tpl->getVariable('curriculum_id',null,true,false)->value)){?><!--Wenn noch keine Lehrpläne angelegt wurden-->
                <p>Bitte wählen sie einen Benutzer aus.</p>
                <?php }?>            
            <?php }?>
        <?php }?> 
        
                </div>
            </div>
        </div>
    </div>
 </div>
        <?php }?>
</section>

            </div> 
            
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                  <b>Version</b> <?php echo $_smarty_tpl->getVariable('app_version')->value;?>

                </div>
                <?php echo $_smarty_tpl->getVariable('app_footer')->value;?>
  
            </footer>    
            
            <?php $_template = new Smarty_Internal_Template('sidebar_right.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '17132295155788e120bfd607-41403280';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.6, created on 2016-07-15 15:12:00
         compiled from "/var/www/curriculum/share/templates/lmz/sidebar_right.tpl" */ ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab" ><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Letzte Nachrichten</h3>
      <ul class="control-sidebar-menu">
        <?php if (isset($_smarty_tpl->getVariable('recent_mails',null,true,false)->value)){?>  
            <?php  $_smarty_tpl->tpl_vars['rm'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('recent_mails')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rm']->key => $_smarty_tpl->tpl_vars['rm']->value){
?>  
            <li>
              <a href="index.php?action=messages&function=showInbox&id=<?php echo $_smarty_tpl->getVariable('rm')->value->id;?>
">
                  <img src="<?php echo $_smarty_tpl->getVariable('access_file_id')->value;?>
<?php echo $_smarty_tpl->getVariable('rm')->value->sender_file_id;?>
" class="user-image menu-icon fa" alt="User Image"></img>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->getVariable('rm')->value->sender_firstname;?>
</h4>
                  <p><?php echo $_smarty_tpl->getVariable('rm')->value->subject;?>
</p>
                </div>
              </a>
            </li>
            <?php }} ?>
        <?php }else{ ?>
            <li><a href="#">Keine Nachrichten vorhanden</a></li>
        <?php }?>
      </ul><!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Anstehende Termine</h3>
      <ul class="control-sidebar-menu">
        <?php if (!empty($_smarty_tpl->getVariable('upcoming_events',null,true,false)->value)){?>  
            <?php  $_smarty_tpl->tpl_vars['ue'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('upcoming_events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ue']->key => $_smarty_tpl->tpl_vars['ue']->value){
?> 
            <li>
              <a href="#">
                <i class="menu-icon fa fa-calendar bg-blue"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->getVariable('ue')->value->event;?>
</h4>
                  <p><?php echo $_smarty_tpl->getVariable('ue')->value->timestart;?>
 - <?php echo $_smarty_tpl->getVariable('ue')->value->timeend;?>
</p>
                </div>
              </a>
            </li>
            <?php }} ?>
        <?php }else{ ?>
            <li><a href="#">Keine Termine vorhanden</a></li>
        <?php }?>
      </ul><!-- /.control-sidebar-menu -->
      
      <h3 class="control-sidebar-heading">Anstehende Aufgaben</h3>
      <ul class="control-sidebar-menu">
        <?php if (!empty($_smarty_tpl->getVariable('upcoming_tasks',null,true,false)->value)){?>
            <?php  $_smarty_tpl->tpl_vars['tsk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('upcoming_tasks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tsk']->key => $_smarty_tpl->tpl_vars['tsk']->value){
?> 
            <li>
              <a href="#">
                <i class="menu-icon fa fa-tasks bg-red"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->getVariable('tsk')->value->task;?>
</h4>
                  <p><?php echo $_smarty_tpl->getVariable('tsk')->value->timestart;?>
 - <?php echo $_smarty_tpl->getVariable('tsk')->value->timeend;?>
</p>
                </div>
              </a>
            </li>
            <?php }} ?>
        <?php }else{ ?>
            <li><a href="#">Keine Aufgaben</a></li>
        <?php }?>
        
      </ul><!-- /.control-sidebar-menu -->
    </div><!-- /.tab-pane -->

    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">Listen</h3>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Datensätze pro Seite
            <input type="number" class="pull-right color-palette bg-primary" min="5" max="100" value="<?php echo $_smarty_tpl->getVariable('my_paginator_limit')->value;?>
" onchange="processor('config','user_paginator', this.value);">
          </label>
          <p>Legt fest, wie viele Einträge pro Seite angezeigt werden.</p>
        </div><!-- /.form-group -->
      </form>
    </div><!-- /.tab-pane -->
  </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div><?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/var/www/curriculum/share/templates/lmz/sidebar_right.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
        </div><!-- ./wrapper -->
        
<!-- SCRIPTS-->  
    <!-- CK Editor -->
    <script src="<?php echo $_smarty_tpl->getVariable('lib_url')->value;?>
ckeditor/ckeditor.js"></script>
    <!-- moment -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/moment/moment.min.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <!--script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script-->
    <!--script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script-->
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <!--script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
templates/AdminLTE-2.3.0/plugins/chartjs/Chart.min.js"></script-->
    
    <!-- curriculum settings (sidebar) -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
scripts/curriculum.js"></script>
    
    <!-- jquery.nyroModal -->
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
jquery.nyroModal/js/jquery.nyroModal.custom.js"></script> 
    
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
scripts/script.js"></script> 
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
scripts/file.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('media_url')->value;?>
scripts/dragndrop.js"></script>     
    
     
    <!-- Logout - Timer  -->
    <?php if (isset($_smarty_tpl->getVariable('institution_timeout',null,true,false)->value)){?>
    <script type="text/javascript">
        idleMax = <?php echo $_smarty_tpl->getVariable('global_timeout')->value;?>
;        // Logout based on global timout value
        idleTime = 0;
        $(document).ready(function () {
            var idleInterval = setInterval("timerIncrement()", 60000); 
            $(document.getElementById('popup')).attr('class', 'modal');
        });
        function timerIncrement() {
            idleTime = idleTime + 1;
            if (idleTime === idleMax) { 
                window.location="index.php?action=logout&timout=true";
            }
        }
    </script>
    <?php }?>
    <!-- end Logout - Timer  -->

    <!-- Nyromodal  -->
    <script type="text/javascript">
    $(function() {
        $('.nyroModal').nyroModal();
        $('#popup_generate').nyroModal();
    });
    </script>
    <?php if (isset($_SESSION['FORM']->form)){?>
        <script type="text/javascript" > 
            <?php if (isset($_SESSION['FORM']->id)){?>
                <?php if ($_SESSION['FORM']->id!=''){?>
                    $(document).ready(formloader('<?php echo $_SESSION['FORM']->form;?>
', '<?php echo $_SESSION['FORM']->func;?>
', <?php echo $_SESSION['FORM']->id;?>
));
                <?php }?>
            <?php }else{ ?>
                $(document).ready(formloader('<?php echo $_SESSION['FORM']->form;?>
', '<?php echo $_SESSION['FORM']->func;?>
'));
            <?php }?>
        </script>
    <?php }?> 

    
<?php if (isset($_smarty_tpl->getVariable('userPaginator',null,true,false)->value)){?> 
            <script type="text/javascript" > 
                $(document).ready(
                        resizeBlocks('row_objectives_userlist', ['coursebook'])
                );
            </script>
        <?php }?> 
  
    </body>
    <?php }?>
</html>
