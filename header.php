<!DOCTYPE html>
<html lang="ru">
<head>

  <title><?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Новый сайт"> 
  
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <?php wp_head();?>   

</head>

<!-- Rating Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3253608", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3253608;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating Mail.ru counter -->

<body>
  <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(85975848, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/85975848" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->

  <div class="wrapper">  
    <!-- Подключение  модальных окон-->
    <? include "modal-win.php";?>