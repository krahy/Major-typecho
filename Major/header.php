<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="author" content="<?php Major::prints(Major::$screenName.','.Major::$mail); ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="content-language" content="zh-CN" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="icon" href="<?php $this->options->faviconUrl(); ?>">
    <link rel="dns-prefetch" href="//cdn.mathjax.org" />
    <link rel="dns-prefetch" href="<?php $this->options->siteUrl(); ?>" />
    <link rel="dns-prefetch" href="<?php echo Major::$api['kraitLibrary']; ?>" />
    <link rel="dns-prefetch" href="<?php $this->options->libCdnjs();?>" />
    <link rel="dns-prefetch" href="<?php $this->options->serverGravatar();?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s '),
            'search'    =>  _t('所属关键字 %s '),
            'tag'       =>  _t('所属标签 %s '),
            'author'    =>  _t('%s ')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header('generator=&commentReply='); ?>

    <link rel="stylesheet" type="text/css" href="<?php $this->options->libCdnjs();?>twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php $this->options->libCdnjs();?>jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php $this->options->libCdnjs();?>twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php $this->options->libCdnjs();?>mdui/0.4.2/css/mdui.min.css">
    <link href="<?php $this->options->themeUrl("style.css?v="); echo Major::$Major['version']; ?>" rel="stylesheet" />
    <link href="<?php $this->options->libCdnjs();?>simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link href="<?php $this->options->socialJsonUrl(); ?>" rel="stylesheet">
    <script src="<?php $this->options->libCdnjs();?>mdui/0.4.2/js/mdui.min.js"></script>
    <script src="<?php $this->options->themeUrl("js/rgbaster.min.js?v="); echo Major::$Major['version']; ?>"></script>
    <script src="<?php $this->options->libCdnjs();?>modernizr/2.8.3/modernizr.min.js"></script>
    <script src="<?php $this->options->themeUrl("js/toast.script.js"); ?>"></script>
    <script src="<?php $this->options->libCdnjs();?>venobox/1.8.3/venobox.min.js"></script>
    <script src="<?php $this->options->libCdnjs();?>blueimp-md5/2.10.0/js/md5.min.js"></script>
    <?php $this->options->headCode();?>

    <script type="text/javascript">
        //以调用全局方式
        function objectPersonal() {
            var personal = new Object;
            personal.name = "<?php echo Major::$screenName; ?>";
            personal.mail = "<?php echo Major::$mail; ?>";
            personal.themeUrl = "<?php $this->options->themeUrl();?>";
            personal.siteUrl = "<?php $this->options->siteUrl(); ?>";
            personal.AAble = eval('<?php echo json_encode($this->options->matAAble);?>');
            personal.socialJson = [<?php $this->options->socialJson(); ?>];
            personal.sumViews = "<?php majors_Plugin::sumViews(); ?>";
            personal.publishedPostsNum = "<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->publishedPostsNum() ?>";
            personal.publishedCommentsNum = "<?php $stat->publishedCommentsNum() ?>";
            personal.showName = function() {
                document.write(this.name);
            };
            return personal;
        }
        window.personal = objectPersonal();
        try {
            console.log(window.personal);
        } catch(err) {
            console.log("Execute new object error");
        }

    </script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">jQuery(document).ready(function($) {$(".scroll").click(function(event){event.preventDefault();$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);});});</script>
</head>
<body id="major-grid" class="mdui-loaded mdui-theme-primary-<?php $this->options->primaryColor();?> mdui-theme-accent-<?php $this->options->accentColor();?>">

<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="https://browsehappy.com">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
