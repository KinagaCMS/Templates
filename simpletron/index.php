<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, ($get_categ ? '?categ='.$get_categ : '')?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP>
<nav class="justify-content-center navbar navbar-expand-lg navbar-dark bg-primary rounded-0">
<button class=navbar-toggler data-toggle=collapse data-target="#nav" aria-controls=nav aria-expanded=false accesskey=n tabindex=100><span class=navbar-toggler-icon></span></button>
<ul class="justify-content-center navbar-nav collapse navbar-collapse" id=nav><?=$nav?></ul>
</nav>
<header class="jumbotron mh-100 text-center rounded-0 mb-0">
<h1 class="display-4 mb-4"><a href="<?=$url?>"><?=get_logo()?></a></h1>
<?php if ($meta_description): ?><p class=mb-4><?=$meta_description?></p><?php endif?>
<?php if ($search): ?><div class=mx-auto><?=$search?></div><?php endif?>
</header>
<main id=main class="container my-5"><?=$article?></main>
<ol class="breadcrumb mb-0 rounded-0 bg-light justify-content-center">
<?=$breadcrumb?>
</ol>
<aside class="container-fluid d-flex flex-wrap flex-column flex-md-row align-items-start justify-content-between bg-primary text-white p-5"><?=$aside?></aside>
<a href="#TOP" id=page-top class="btn btn-outline-primary bg-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m8 3-7 9h5l2-3 2 3h5l-7-9z" fill="currentColor"/></svg></a>
<script src="<?=$js?>"></script>
<footer class=py-5><?=$footer?></footer>
</body>
</html>
