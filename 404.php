<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8" />
    <!--яндекс вебмастер-->
    <meta name="yandex-verification" content="1cebea76a99326ff" />
	<!--иконка для поисковика-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="description" content="Свежие новости КЛБ Свитанок, статьи о клубе, статистика, фото и видео, пробеги в РБ и зарубежом">
	<meta name="keywords" content="Свежие новости КЛБ Свитанок, статьи о клубе, статистика, фото и видео">
	<!--Сайт оптимизированный под моб устройства
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="style.css" />
	<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">-->
    <title>Клуб любителей бега - КЛБ &laquo;Свитанок&raquo;</title> 
	<script  src="js/jquery.js" defer> </script>
	<script  src="js/cycle.js" defer> </script>
	<script  src="js/slideshow.js" defer> </script>
   <!--подключение гугл аналитики для поисковой системы-->
     <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127779573-1"></script>
					<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
					  gtag('js', new Date());
					  gtag('config', 'UA-127779573-1');
					 </script> 
							  <!-- Global site tag (gtag.js) - Google Analytics -->
						<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127779573-2"></script>
								<script>
								  window.dataLayer = window.dataLayer || [];
								  function gtag(){dataLayer.push(arguments);}
								  gtag('js', new Date());
								  gtag('config', 'UA-127779573-2');
								</script>
  </head>
	<body>
	<!--счетчик маил     -->    
	 <!-- Rating@Mail.ru counter -->
           <script >
           var _tmr = window._tmr || (window._tmr = []);
            _tmr.push({id: "3062632", type: "pageView", start: (new Date()).getTime()});
            (function (d, w, id) {
            if (d.getElementById(id)) return;
            var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
            ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
            var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
            if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
            })(document, window, "topmailru-code");
            </script><noscript><div>
            <img src="//top-fwz1.mail.ru/counter?id=3062632;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
            </div></noscript>
            <!-- //Rating@Mail.ru counter -->
	<div id="wrapper"><!--начало wrapper-->
		<div id="header">
			<div id="line_1">
				<h1>Клуб любителей бега &laquo;Свитанок&raquo;</h1>
			</div>
			<div id="line_3">  
				<a class="photo" href="index.php"><img title="Если хочешь быть сильным — бегай, хочешь быть красивым — бегай, хочешь быть умным — бегай"  src="images/0981.png"  alt="КЛБ Свитанок" width="171" height="115"/> </a>
				<div id="email">
					<h3>E-mail:</h3>
					<p><a href="mailto:btr.otr@bmz.gomel.by">btr.otr@bmz.gomel.by</a></p>
					<p><a href="mailto:vask@bmz.gomel.by">vask@bmz.gomel.by</a></p>
				</div>
				<div id="pic">
					<img title="Пробег день металлурга Жлобин июль 2018" src="images/dm18.jpg"  width="520" height="195" alt= "КЛБ Свитанок Жлобин" />
				</div>
			</div>
			<div id="line_4"><h3>Наши партнеры:</h3>
			     <div id="slides">
				    <a style="margin:0px 40px;color: #A52A2A"><img title="Zhlobin trail team" src="images/ztt.jpg"  alt="Zhlobin trail team" width="130" height="90"/>Zhlobin trail team</a>
				    <a style="margin:0px 35px;color: #A52A2A" target="_blank" href="http://www.belsteel.com/"><img title="БМЗ" src="images/bmz1.jpg" alt="ОАО «БМЗ - управляющая компания холдинга «БМК»" width="145" height="50"/>ОАО «БМЗ - управляющая компания холдинга «БМК» ул. Промышленная 37, Жлобин 247210</a>
				    <a style="margin:0px 40px;color: #A52A2A" target="_blank" href="http://www.msocservis.by/"><img title="Металлургсоцсервис" src="images/mets.jpg" alt="Унитарное предприятие Металлургсоцсервис" width="90" height="90"/>Унитарное предприятие "Металлургсоцсервис"</a>
		         </div>
			</div>
		</div>
		<!--Конец шапки-->
		<!--бегущая строка-->
			<div id="line_5">
			    <div class="marquee"><span><em>
				<?php 
				    //$db = mysqli_connect("localhost", "opros", "", "opros")  OR DIE("Не могу создать соединение2 ");
					//$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение1 ");
					//	mysqli_set_charset($db, "utf8");
                    //    @mysqli_query ($db, 'set character_set_results = "utf8"');
                        include('configinc.php');
						$result=mysqli_query($db,'SELECT * FROM `begstr` '); // запрос на выборку
						while($row=mysqli_fetch_array($result)){
						$begstr=$row['begstr'];
						}
				        //$begstr='Проверка работы бегущей строки'; 
					echo ' КЛБ &laquo;Свитанок&raquo; '.$begstr;
					mysqli_free_result($result); 
					mysqli_close($db);
				?>
				</em></span>
				</div>
			</div>
			<div id="conteiner">
				<div id="line_6">
					<ul id="navbar">
						<li><a href="index.php">Главная</a></li>
						<li><a href="bprob.php">Положения</a></li>
						<li><a href="protn.php">Протоколы пробегов</a></li>
						<li><a href="foto.php">Фотогалерея</a></li>
                        <li><a href="video.php">Видео</a></li>
                        <li><a href="otchet.php">Отчёты о соревнованиях</a></li>
						<li><a href="pressa.php">Пресса о нас</a></li>
						<li><a href="farh20.php">Фото и видео архив</a></li>
						<li><a href="pst.php">Полезные статьи</a></li>
						<li><a href="nagr.php">Наши награды</a></li>
						<li><a href="onas.php">Контакты</a></li>
						<li><a href="otz.php">Отзывы и комментарии</a></li>
						<li><a href="opros.php">Опросы</a></li>
						<li><a href="klbm2019.php">КЛБ Матч СНГ 2019</a></li>
						<li><a href="ns.php">Новости спорта</a></li>
					</ul>
					   <div> 
					      <!--http://share.pluso.ru/-->
					      <script>(function() {
                          if (window.pluso)if (typeof window.pluso.start == "function") return;
                          if (window.ifpluso==undefined) { window.ifpluso = 1;
                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                            var h=d[g]('body')[0];
                            h.appendChild(s);
                          }})();</script>
                        <div class="pluso"  data-background="#ebebeb" data-options="small,square,multiline,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" data-url="http://svitanok.01sh.ru/" data-title="Сайт КЛБ Свитанок г.Жлобин"></div>
                </div>	
				</div>
		    <div  id="line_7"><br>
		            <img src="images/404.gif" alt="Ошибка 404">
						<p><b>К сожалению, запрашиваемая Вами страница не найдена...</p>
						<p>Почему?</p>
						<ol>
						<li>Ссылка, по которой Вы пришли, неверна.
						<li>Вы неправильно указали путь или название страницы.
						<li>Страница была удалёна со времени Вашего последнего посещения.
						</ol>
						<p>Для продолжения работы с сайтом Вы можете перейти на</b></p>
						<ul>
						<H2><a href="index.php">Главную страницу сайта.</H2>
						</ul>
		    </div>
        <div  id="line_8" >
          
          <h3>Найти на сайте: </h3>	    
          <div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'http://svitanok.01sh.ru/index.php','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Найти на сайте','suggest':true,'target':'_blank','tld':'ru','type':2,'usebigdictionary':true,'searchid':2334843,'input_fg':'#0066cc','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#ff8000'}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2334843"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value="utf-8"/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script>(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>  
          <div id="ya-site-results" onclick="return {'tld': 'ru','language': 'ru','encoding': 'utf-8','htmlcss': '1.x','updatehash': true}"></div><script>(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>
          <?php
                $ip = $_SERVER['REMOTE_ADDR']; 
                $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip.'?lang=ru'));
                if($query && $query['status'] == 'success') {
                //echo 'Привет, посетитель из <font color="DarkGreen" size="4">'.$query['country'].', '.$query['city'].'!</font>';
                echo 'Привет, посетитель из <h5 class="pos">'.$query['country'].', '.$query['city'].'!';
                } else {
                echo 'Не удалось определить локацию';
                }
          ?>
          <h3>Наши друзья и партнёры:</h3>		
          <div class="d-table">
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.klbamatar.by/"><img title="КЛБ Аматар" src="images/logo_amatar.png" alt="КЛБ Аматар"></a></div>
             <div class="d-td"><a target="_blank" href="http://www.klbviktoria.com/"><img title="Клуб бега Виктория" src="images/klbviktoria.png" alt="Клуб бега Виктория"></a></div>
             <div class="d-td"><a target="_blank" href="http://ocrbelarus.by"><img title="ОСО «БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ»" src="images/fpg.png" alt="БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.nogibogi.com"><img  title="Сайт Ноги-боги" src="images/nogib.png" alt=" Ноги-боги"></a></div>
             <div class="d-td"><a target="_blank" href="http://www.bfla.eu/"><img title="Белорусская федерация легкой атлетики" src="images/logo1_bfla.gif" alt="Белорусская федерация легкой атлетики"></a></div>
             <div class="d-td"><a target="_blank" href="http://www.42195.by"><img title="Сайт 42195" src="images/42195.png" alt="Сайт 42195"></a></div>
           </div>
          	<div class="d-tr">
             <div class="d-td"><a target="_blank" href="https://www.arf.by/"><img title="Федерация приключенческих гонок" src="images/arf-h120-int.png" alt="Федерация приключенческих гонок" width="50" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.tri.by"><img title="Белорусская федерация триатлона" src="images/tribylogo2.png" alt="Белорусская федерация триатлона" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.probeg.org/"><img title="ПроБЕГ в России и мире" src="images/5.gif" alt="ПроБЕГ в России и мире"></a></div>
            </div>
            <div class="d-tr">
             <div class="d-td"><img title="КЛБ Крыница Бобруйск" src="images/belshina.jpg" alt="КЛБ Крыница Бобруйск" width="50" height="45" ><a target="_blank" href=""></a></div>
             <div class="d-td"><a target="_blank" href="http://www.run4fun.by"><img title="Клуб Run4Fun Барановичи" src="images/R4F.jpg" alt="Клуб Run4Fun Барановичи" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="https://metallurg.zhlobin.by"><img title="ХК Металлург Жлобин" src="images/mz.png" alt="ХК Металлург Жлобин" width="45" height="45"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://bfnw.by"><img title="Федерация скандинавской ходьбы" src="images/sh.png" alt="Федерация скандинавской ходьбы" width="50" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://mmazhlobin.by/"><img title="MMA Жлобин | Клуб смешанных единоборств" src="images/mma.jpg" alt="MMA Жлобин | Клуб смешанных единоборств" width="45" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://vk.com/yogazhl"><img title="Йога студия город Жлобин в VK" src="images/yo.jpg" alt="YO! YOGA студия город Жлобин в VK" width="45" height="45"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.obelarus.net"><img title="Спортивное ориентирование в Беларуси" src="images/or.png" alt="Спортивное ориентирование в Беларуси" width="50" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://betta.by/"><img title="BETTA OCR RACE — это гонка с препятствиями" src="images/bet.png" alt="BETTA OCR RACE — это новая гонка с препятствиями" width="45" height="45"></a></div>
            </div>
        </div>
            <div><br><br>
			    <p><a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.by/pogoda/zhlobin" target="_blank"><img style="box-shadow: 0 0 5px 2px rgba(0,0,0,0.5);" src="https://info.weather.yandex.net/zhlobin/4_white.ru.png?domain=ua"  alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt=""/></a> </p></div>			
			</div>
		</div>
		  <div id="line_9" ><h4>© КЛБ &laquo;Свитанок&raquo; г.Жлобин, 2018-2019.</h4> 
		       <div id="sch1">  
			 	 <p><!--LiveInternet counter-->
						    <script>
						    document.write("<a href='//www.liveinternet.ru/click' "+
						    "target=_blank><img src='//counter.yadro.ru/hit?t11.6;r"+
						    escape(document.referrer)+((typeof(screen)=="undefined")?"":
						    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
						    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
						    ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
					    	"' alt='' title='LiveInternet: показано число просмотров за 24"+
					        " часа, посетителей за 24 часа и за сегодня' "+
						    "border='0' width='88' height='31'><\/a>")
						</script><!--/LiveInternet-->
				 </p>
			  </div>
              <div id="sch2">
                         <p>
                            <!-- Rating@Mail.ru logo -->
                            <a href="https://top.mail.ru/jump?from=3062632">
                            <img src="//top-fwz1.mail.ru/counter?id=3062632;t=479;l=1" 
                            style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
                            <!-- //Rating@Mail.ru logo -->
                         </p>
              </div>
              <div id="sch3">
                                                          <!-- Yandex.Metrika informer -->
                                <a href="https://metrika.yandex.ru/stat/?id=50681851&amp;from=informer"
                                target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50681851/3_1_FFA020FF_FF8000FF_0_pageviews"
                                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="50681851" data-lang="ru" /></a>
                                <!-- /Yandex.Metrika informer -->
                                <!-- Yandex.Metrika counter -->
                                <script > 
                                    (function (d, w, c) {
                                        (w[c] = w[c] || []).push(function() {
                                            try {
                                                w.yaCounter50681851 = new Ya.Metrika2({
                                                    id:50681851,
                                                    clickmap:true,
                                                    trackLinks:true,
                                                    accurateTrackBounce:true,
                                                    webvisor:true
                                                });
                                            } catch(e) { }
                                        });
                                        var n = d.getElementsByTagName("script")[0],
                                            s = d.createElement("script"),
                                            f = function () { n.parentNode.insertBefore(s, n); };
                                        s.type = "text/javascript";
                                        s.async = true;
                                        s.src = "https://mc.yandex.ru/metrika/tag.js";
                                        if (w.opera == "[object Opera]") {
                                            d.addEventListener("DOMContentLoaded", f, false);
                                        } else { f(); }
                                    })(document, window, "yandex_metrika_callbacks2");
                                </script>
                                <noscript><div><img src="https://mc.yandex.ru/watch/50681851" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                                <!-- /Yandex.Metrika counter -->
              </div>
               <div id="sch4">
                         <p>
                             <!-- HotLog -->
                                <span id="hotlog_counter"></span>
                                <span id="hotlog_dyn"></span>
                                <script > hot_s = document.createElement('script');
                                hot_s.type = 'text/javascript'; hot_s.async = true;
                                hot_s.src = 'http://js.hotlog.ru/dcounter/2573473.js';
                                hot_d = document.getElementById('hotlog_dyn');
                                hot_d.appendChild(hot_s);
                                </script>
                                <noscript>
                                <a href="http://click.hotlog.ru/?2573473" target="_blank">
                                <img src="http://hit20.hotlog.ru/cgi-bin/hotlog/count?s=2573473&im=313" 
                                title="HotLog" alt="HotLog"></a>
                                </noscript>
                                <!-- /HotLog -->
                         </p>
              </div>
              <div id="sch5">
                         <p>
                         </p>
              </div>
			</div>
		 <!-- </div> -->
</div><!--конец wrapper-->
</body>
</html>