<?php
include '../../../includes/functions.php';
include '../../../includes/config.php';

$last_modified = timestamp(__FILE__);
$bootstrap = file_get_contents('bootstrap.min.css');

if ($color)
{
	#primary
	$bootstrap = str_replace('#007bff', hsla($color, 5.5, 5.5), $bootstrap);
	#secondary
	#$bootstrap = str_replace('#6c757d', hsla($color, -5, -10), $bootstrap);
	#light
	$bootstrap = str_replace('#f8f9fa', hsla($color, 5, 5, .05), $bootstrap);
	#dark
	$bootstrap = str_replace('#343a40', hsla($color, -20, -10), $bootstrap);
	#*-primary
	$bootstrap = str_replace('#b8daff', hsla($color, -10, 10, .8), $bootstrap);
	#breadcrumb, focus
	$bootstrap = str_replace(array('#e9ecef', 'rgba(0,123,255,.5)', 'rgba(0,123,255,.25)', 'rgba(128,189,255,.5)', 'rgba(38,143,255,.5)'), hsla($color, 0, 0, .05), $bootstrap);
	#hover
	$bootstrap = str_replace('#0056b3', hsla($color, 0, 0, .5), $bootstrap);
	#btnhover
	$bootstrap = str_replace(array('#0069d9', '#0062cc'), hsla($color, 0, -5), $bootstrap);
	#list link
	$bootstrap = str_replace(array('#495057', '#004085', '#002752'), hsla($color, -5, -5), $bootstrap);
	#alert
	$bootstrap = str_replace('#cce5ff', hsla($color, 0, 10, .8), $bootstrap);
	#border
	$bootstrap = str_replace(array('#7abaff', '#80bdff', '#005cbf'), hsla($color, 0, 20), $bootstrap);
}

header('Content-Type: text/css; charset='. $encoding);
header('Last-Modified: '. $last_modified);

if (filter_input(INPUT_SERVER, 'HTTP_IF_MODIFIED_SINCE') === $last_modified) header('HTTP/1.1 304 Not Modified');

echo $bootstrap, file_get_contents('magnific-popup.min.css'), file_get_contents('simple-sidebar.css'), '
#kinaga{width:2.1em;vertical-align:text-top}
#kinaga:hover{cursor:pointer;fill-opacity:.6}
#page-top{bottom:1em;position:fixed;right:2em;display:none;z-index:10}
#page-top svg{width:1em}
.article{font-size:large;line-height:1.8}
.badge-light{background-color:#f8f9fa}
.bg-danger.text-danger{background-color:#f2dede!important;color:#a94442!important}
.bg-info.text-info{background-color:#d9edf7!important;color:#31708f!important}
.bg-success.text-success{background-color:#dff0d8!important;color:#3c763d!important}
.bg-warning.text-warning{background-color:#fcf8e3!important;color:#8a6d3b!important}
.breadcrumb-item+.breadcrumb-item:before{content:">"}
.card-columns{column-count:2}
.col-lg-9{min-width:0}
.custom-file-label:after{content:"\0053c2\007167"}
.img-responsive{display:block;max-width:100%;height:auto}
.mfp-title{padding-bottom:3em}
.nowrap{white-space:normal}
.page-top:after{content:"'.$pagetop.'";position:absolute;opacity:0;right:-2em}
.page-top:hover:after{opacity:1;right:0;transition:.3s linear}
.page-top:not(:hover):after{opacity:0;transition:.3s}
.page-top{border-bottom:thin dotted;position:relative;margin:3em;text-decoration:none!important}
.popover{max-width:70%}
.similar-article{height:2rem}
.sticky-top{top:10px}
.text-light{color:'. ($color ? hsla($color, -5, +20, .9) : 'inherit'). ' !Important}
.wrap,.mfp-title,.popover-body{word-wrap:break-word;white-space:pre-wrap}
::-moz-selection,.highlight,.comment:target{background-color:#d9edf7;color:#31708f}
::selection,.highlight,.comment:target{background-color:#d9edf7;color:#31708f}
@media(max-width:991px){.card-columns{column-count:1}}
a:hover img,a:hover svg,.social:hover{opacity:0.8}
aside a{color:inherit}
aside div{border-top:1px solid rgba(0,0,0,.1);padding-top:2em}
body{color:#888}
div{min-width:0}
h1,h2,h3,h4,h5,h6{border-bottom:thin dotted;padding:.1em}
lastmod:before{color:lightskyblue;content:"\25F7\0020";font-size:large}
lastmod{display:table-cell;text-align:right;white-space:nowrap}
loc:before{color:skyblue;content:"\25BA\0020";font-size:large}
loc{display:table-cell}
time:before{content:"\25F7\0020";font-size:large;vertical-align:0}
url:hover{background-color:whitesmoke;color:darkgray}
urlset:before{border-bottom:thick solid dimgray;margin:1em;text-align:center;font-size:xx-large;display:block;content:"Sitemap of '. $server. '";padding-bottom:1em}
urlset{background-repeat: no-repeat; background:linear-gradient(to left,white,whitesmoke);color:dimgray}
url{margin:1em auto;width:95%;display:table;font-size:small;padding:1em}
';

if ($use_auto_wrap === true) echo '
.article,.card-text
{word-wrap:break-word;white-space:pre-wrap}
.article h1,.article h2,.article h3,.article h4,.article h5,.article h6{margin-bottom:0}
.article #accordion,
.article .accordion,
.article .btn-group,
.article .card,
.article .carousel,
.article .custom-control,
.article .custom-file,
.article .form-group,
.article .form-horizontal,
.article .input-group,
.article .list-group,
.article .media,
.article .modal,
.article .navbar,
.article .row,
.article .tab-content,
.article dl,
.article fieldset,
.article li,
.article ol,
.article table,
.article ul
{white-space:normal!important}
';

else echo '.page-top{padding-top:2rem!important;margin-bottom:2rem!important}';

if ($color) echo '
#category a:hover,#category a.active,aside a.bg-light{color:'. hsla($color, -5, -5). '}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{background-color:'. hsla($color, 0, 0, .05). '}
::selection, .highlight, .comment:target{background-color:'.hsla($color, 0, 0, .2).';color:'.hsla($color).'}
::-moz-selection, .highlight, .comment:target{background-color:'.hsla($color, 0, 0, .2).';color:'.hsla($color).'}
';

if (is_file($header_jpg = '../../../images/header.jpg')) echo'
body:before{
background-image:url('. $header_jpg. ');
background-repeat:no-repeat;
background-size:cover;
content:"";
display:block;
height:250px;
width:100%
}
body:after{
align-items:center;
color:'. ($color ? hsla($color, -15, -15) : 'inherit'). ';
display:flex;
font-size:large;
background-color:'. ($color ? hsla($color, 50, 50, .1) : 'rgba(0,0,0,.1)'). ';
content:"'. $meta_description. '";
justify-content:center;
text-shadow:0px 0px 5px white;
position:relative;
height:250px;
left:0;
position:absolute;
top:0;
width:100%;
}
';
