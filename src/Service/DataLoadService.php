<?php


namespace App\Service;


use App\Exception\CompetitionException;

class DataLoadService
{
    /**
     * @param string $url
     *
     * @return string
     * @throws CompetitionException
     */
    public function loadFromURL(?string $url) : string
    {
        $result = false;

        if ($url !== null) {
            $optionsArray = [
                CURLOPT_AUTOREFERER    => true,
                CURLOPT_COOKIESESSION  => false,
                CURLOPT_HTTPGET        => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_BINARYTRANSFER => true,
            ];

            $ch = curl_init($url);
            curl_setopt_array($ch, $optionsArray);

            $result = curl_exec($ch);
            curl_close($ch);
        }

        if ($result === false) {
            throw new CompetitionException('', 110);
        } else {
            return $result;
        }
    }

    public function getHTML() {
        return <<<'HTML'
<!DOCTYPE html><html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251" /><meta name="google-site-verification" content="MJ-mTKAbAdNS5bDQ81p_3SOTu_Pdgu3ZnsWfAnNkyzA" /><title>Региональный конкурс на лучшие проекты фундаментальных научных исследований, проводимый совместно РФФИ и Правительством Иркутской области - Конкурсы и программы РФФИ - Конкурсы - Портал РФФИ</title><link rel="shortcut icon" href="/rffi/pf10_portal/images/favicon.ico"/><link rel="stylesheet" type="text/css" href="/rffi/pf10_portal/css/style.css" charset="utf-8"/><!--[if lte IE 8]> 
			<script> 
				document.createElement("article"); 
				document.createElement("footer"); 
				document.createElement("header"); 
				document.createElement("hgroup"); 
				document.createElement("section"); 
				document.createElement("aside"); 
				document.createElement("main"); 
				document.createElement("nav"); 
			</script><![endif]-->        <script type="text/javascript" src="//vk.com/js/api/openapi.js?124"></script>        <script type="text/javascript">          VK.init({apiId: 3121914, onlyWidgets: true});
        </script>        
        <script src="https://apis.google.com/js/platform.js" async defer>          {lang: 'ru'}
        </script></head><body>        <div id="fb-root"></div><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>        <div class="template">            <div class="template__inner">                                    
                








<script type="text/javascript">var url = '/rffi/social';</script><header class="header">    <div class="layout layout_style_main layout_paddings_sides18">        <a class='header__logo' href="/rffi/ru" alt="Российский фонд фундаментальных исследований"></a>        <div class="header__topLine">            <div class="bCols">                <div class="bCols__item w-70">                    <a class="link link_invert mr-35px" href="/rffi/ru/pages/sitemap">Карта сайта</a>                    <div class="language">                        <select class="js-language w-100">                            <option id="rus" data-href="/rffi/ru" value="rus" selected="selected">                                Рус
                            </option>                            <option id="eng" data-href="/rffi/eng" value="eng">                                En
                            </option>                        </select>                    </div>                    <span class="icon icon_size_15 icon_location"></span>                    <a class="link link_invert" href="/rffi/ru/contacts">Контакты</a>                    
                    &nbsp;&nbsp;&nbsp;
                    <a class="link link_invert" href="/rffi/ru/public_feedback_form">Обращения граждан</a>                    &nbsp;&nbsp;&nbsp;
                    <a class="link link_invert" href="/rffi/ru/anti_corruption">Противодействие коррупции</a>                    
                    <!--span class="header__social">                        <a class="icon icon_size_30 icon_vk" href="https://vk.com/rffiru"></a>                        <a class="icon icon_size_30 icon_fb" href="https://www.facebook.com/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9-%D1%84%D0%BE%D0%BD%D0%B4-%D1%84%D1%83%D0%BD%D0%B4%D0%B0%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B8%D1%81%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B9-671437166339697/?ref=br_rs"></a>                        <a class="icon icon_size_30 icon_tw" href="#"></a>                    </span-->                </div><!--
             --><div class="bCols__item w-30 ta-r">                    
                                		
 	
<!--/freemarker?template=templates/default/auth/header-informer-block.ftl begin--><!--/freemarker?template=templates/default/auth/header-informer-block.ftl end--><ul class="userbox--list"><li class="userbox--item m-userbox--item__show m-no-sep "><a href="#" class="userbox--link">Войти</a></li><li class="userbox--item m-no-sep"><a id="login_link" href="#loginpopup" class="userbox--link">Вход</a></li><li class="userbox--item"><a href="/rffi/ru/pages/register" class="userbox--link">Регистрация</a></li><li class="userbox--item"><a href="/rffi/ru/pages/restorepass" class="userbox--link">Забыли пароль?</a></li></ul><!-- форма входа - не сверстана !--><div class="login popup-social none" id="loginModal">            
            <form action="/rffi/ru/sso_login?return_url=http%3A%2F%2Fwww.rfbr.ru%2Frffi%2Fru%2Fcontest%2Fn_812%2Fo_2098475&error_url=%2Frffi%2Fru%2F%2Fpages%2Frestorepass%3Fmode%3Dauth">                
                <label for="login">                    <p class="mb-5px">Имя пользователя:</p>                    <input id="login" class="input-text w-100 mb-5px" type="text" name="login" value="" />                </label>                
                <label for="password">                    <p class="mb-5px">Пароль:</p>                    <input id="password"  class="input-text w-100 mb-15px" type="password" name="password" value=""/>                </label>                
                <button class="btn btn-primary small mt-15" type="submit">Войти</button>                <!--span class="pointer fl-r sfc l-4 txt-decor js-close-ps">Закрыть (esc)</span-->                
            </form>            
		</div>      
                </div> 
            </div>    
                    
                    
                    
                    
        </div>    </div>    <!--a href="/rffi/ru/mobile" class="header-list--link mob">Мобильная версия</a--><!-- Yandex.Metrika counter --><script type="text/javascript">    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter15823132 = new Ya.Metrika({
                    id:15823132,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:false,
                    ut:"noindex"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script><noscript><div><img src="https://mc.yandex.ru/watch/15823132?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter --><!-- Molnet counter --><script type="text/javascript">var MOLNETSessionIdKey="MOLNETSTATSESSID";var MOLNETStatistAgent = "counter.molnet.ru/ct/count";
function MOLNETcheckJavaSupport () { var result = {javaEnabled: false,version: '' };
if (typeof navigator != 'undefined' && typeof navigator.javaEnabled != 'undefined') result.javaEnabled = navigator.javaEnabled();
else result.javaEnabled = 'unknown';
if (navigator.javaEnabled() && typeof java != 'undefined') result.version = java.lang.System.getProperty("java.version");
return result; }
function MOLNETGetCookie(sName) { if (!document.cookie) return null;var aCookie = document.cookie.split("; ");
for (var i=0; i < aCookie.length; i++) { var aCrumb = aCookie[i].split("=");if (sName == aCrumb[0]) return unescape(aCrumb[1]); }
return null; }
MOLNETSessId = MOLNETGetCookie(MOLNETSessionIdKey);
if (MOLNETSessId==null) { var vId = Math.random().toString().split(".");
MOLNETSessId = (new Date()).getTime().toString() + vId[1];document.cookie=MOLNETSessionIdKey + "=" + MOLNETSessId +"; path=/"; }
x=screen.width;y= screen.height;cD=screen.colorDepth;var javaCheck = MOLNETcheckJavaSupport();
if (javaCheck.javaEnabled) {j="1";jv=javaCheck.version;} else {j="0";jv=""; }  
z="sessid="+ MOLNETSessId +"&amp;x="+x+"&amp;y="+y+"&amp;cd="+cD+"&amp;j="+j+"&amp;jv="+jv;y="";
y+="<img src='https://"+ MOLNETStatistAgent+ "/hit?"+z+"&amp;r="+escape(document.referrer)+ "' border='0'  width='1' height='1' alt='Counter'/>";
document.write(y);</script><noscript><p><img src="https://counter.molnet.ru/ct/count/hit" width="1" height="1" alt="Counter"/></p></noscript><!-- // Molnet counter --></header>                











<div class="layout layout_style_main">    <nav class="nav">        <ul class='nav--list'>    
                <li class='nav--item m-nav--item__1 nav--item__child' >                    <a class=" nav--link" href="/rffi/ru/about">О фонде</a>                            

                                <ul class="nav--sub">                                
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/objectives">Общие сведения</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/documents">Документы</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/structure_rffi">Структура РФФИ</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/best_projects">Результаты проектов</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/contacts">Контактная информация</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/anti_corruption">Противодействие коррупции</a>                                </li>                                    
                                </ul><!-- end nav--sub !-->                                
                </li> <!-- end nav--item !-->      
                <li class='nav--item m-nav--item__2 nav--item__child' >                    <a class=" nav--link" href="/rffi/ru/press_center">Пресс-центр</a>                            

                                <ul class="nav--sub">                                
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/news_events">События и новости </a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/classifieds">Объявления</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/press_about">Пресса об РФФИ</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/rssnews">Новости партнеров</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/science_news">Новости науки</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/press_center/n_786">Видео</a>                                </li>                                    
                                </ul><!-- end nav--sub !-->                                
                </li> <!-- end nav--item !-->      
                <li class='nav--item m-nav--item__3 nav--item__child' >                    <a class="current nav--link" href="/rffi/ru/contest">Конкурсы</a>                            

                                <ul class="nav--sub">                                
                                <li class="nav--sub__item m-nav--sub__item__active">                                        <a class="nav--sub__link" href="/rffi/ru/contest/n_812">Конкурсы и программы РФФИ</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/project_search">Поиск по проектам и заявкам</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/contest_documents">Конкурсная документация</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/expert_projects">Экспертные процедуры</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/financial_support">Финансирование проектов</a>                                </li>                                    
                                </ul><!-- end nav--sub !-->                                
                </li> <!-- end nav--item !-->      
                <li class='nav--item m-nav--item__4 nav--item__child' >                    <a class=" nav--link" href="/rffi/ru/library">Библиотека</a>                            

                                <ul class="nav--sub">                                
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/books">Книги, изданные при поддержке РФФИ</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/bulletin">Вестник РФФИ, издание на русском языке</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/bulletin_eng">Вестник РФФИ, издание на английском языке</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/bulletin_humanities_social">Вестник РФФИ. Гуманитарные и общественные науки</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/popular_science_articles">Научно-популярные статьи и фотоматериалы</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/annotated_project_reports">Аннотированные отчеты по проектам РФФИ</a>                                </li>                                    
                                </ul><!-- end nav--sub !-->                                
                </li> <!-- end nav--item !-->      
                <li class='nav--item m-nav--item__5 nav--item__child' >                    <a class=" nav--link" href="/rffi/ru/apply_now">Подача заявок и сервисы</a>                            

                                <ul class="nav--sub">                                
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="http://kias.rfbr.ru">КИАС РФФИ</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/qa">Задать вопрос</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/faq">Часто задаваемые вопросы</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/register">Регистрация на портале</a>                                </li>                                    
                                <li class="nav--sub__item ">                                        <a class="nav--sub__link" href="/rffi/ru/national_subscribe">Национальная подписка на полнотекстовые ресурсы SpringerNature и Elsevier</a>                                </li>                                    
                                </ul><!-- end nav--sub !-->                                
                </li> <!-- end nav--item !-->      
        </ul> <!-- end nav--list !-->        <!-- search -->        <form action="/rffi/ru/search/" id="searchbox" class="form-search">            <!--span class="search-button--pseydo js-search-button"></span>            <input placeholder="Поиск" type="search" class="search-input" name="query"  value="" /-->            <input type="submit" value="" class="search-button" />        </form>    </nav></div>                                     
                <div class="layout layout_style_main layout_paddings_tmplt">                    
                    <main class="template__main">                        








<ul class="breadcrumbs">  <li class="breadcrumbs--list home"><a class="breadcrumbs--link home" href="/rffi/ru/"></a></li><li class="breadcrumbs--list" ><a class="breadcrumbs--link" href="/rffi/ru/contest" >Конкурсы</a></li><li class="breadcrumbs--list" ><a class="breadcrumbs--link" href="/rffi/ru/contest/n_812" >Конкурсы и программы РФФИ</a></li></ul><h1 class="title js-print-title title">Региональный конкурс на лучшие проекты фундаментальных научных исследований, проводимый совместно РФФИ и Правительством Иркутской области</h1><div class="sfc l-3 mt-5 mb-10 lh-xl"><!-- p>Дата публикации: 11.02.2020</p --><p class="sfc">Заявки принимаются до: 20.11.2019 23:59</p><p class="sfc">Код конкурса:  р_а</p></div><div id="selectable-content" class="article"><p><a href="https://www.rfbr.ru/rffi/ru/classifieds/o_2098490"><strong>Объявление конкурса</strong></a></p><p><strong>Условия конкурса&nbsp;</strong>(утверждены решением бюро совета РФФИ, протокол № 11 (223) от 31 октября 2019 года)</p><p><strong>1. Общая информация</strong><strong></strong></p><p><strong>Задача конкурса</strong> &ndash; поддержка фундаментальных научных исследований, развитие научного сотрудничества, поддержка научных коллективов и отдельных ученых, которые проводят фундаментальные научные исследования на территории Иркутской области.</p><p><strong>Конкурсная комиссия</strong>: бюро совета РФФИ.</p><p><strong>Форма проведения конкурса:</strong> путем подачи заявок в электронном виде в КИАС РФФИ.</p><p><em>По вопросам, связанным с подачей заявок в РФФИ, можно обращаться в&nbsp;<strong><a href="https://support.rfbr.ru/">Службу поддержки пользователей КИАС</a></strong></em></p><p><strong>Грантополучатель</strong>: коллектив физических лиц.</p><p><strong>Максимальный объем финансирования проекта</strong>: 1 200&nbsp;000 рублей в год.</p><p><strong><span></span><span></span>Минимальный объем финансирования проекта:</strong>&nbsp;600 000 рублей в год.</p><p><strong>Организация, предоставляющая условия для реализации проекта (Организация)</strong> &ndash; указанное участником конкурса в заявке российское юридическое лицо, осуществляющее научную и (или) научно-техническую деятельность на территории Иркутской области, являющееся бюджетной организацией или организацией иной формы собственности с государственным участием, которое предоставит коллективу условия для реализации проекта в случае предоставления гранта. Согласие Организации предоставлять условия для реализации проекта необходимо получить до подачи заявки для участия в конкурсе. Добавление в заявку данных об Организации означает, что руководитель коллектива получил от организации согласие предоставлять условия для реализации проекта.</p><p><strong>2. Требования к участникам конкурса</strong></p><p>2.1. В конкурсах могут участвовать коллективы численностью не менее 2 человек и не более 10 человек, состоящие из граждан Российской Федерации, а также иностранных граждан и лиц без гражданства, имеющих статус налогового резидента Российской Федерации, прошедших идентификацию (оформивших Согласие на признание электронных документов, подписанных в КИАС РФФИ простой электронной подписью, равнозначными документам, составленным на бумажных носителях) по правилам РФФИ.</p><p>2.2. Физические лица, указанные в пункте 2.1., могут входить в состав только одного коллектива для участия в конкурсе<strong>.</strong></p><p>2.3. Коллектив формируется его руководителем путем направления физическим лицам предложения войти в состав коллектива через КИАС РФФИ. Руководитель коллектива должен соответствовать требованиям, установленным в разделе 3 Условий конкурса.</p><p>2.4. Физическое лицо, подтверждая в КИАС РФФИ свое согласие войти в состав коллектива, уполномочивает руководителя коллектива представлять его интересы как члена коллектива и выступать от его имени в отношениях с РФФИ и иными юридическими и физическими лицами по всем вопросам, связанным с участием в конкурсах и реализацией проекта, в том числе: заключать Договор о предоставлении гранта победителю конкурса и реализации научного проекта (далее &ndash; Договор), предоставлять отчеты по проекту, распоряжаться грантом в соответствии с условиями Договора, в том числе определять размер части гранта, расходуемой на личное потребление членов коллектива.</p><p>2.5. Принимая в КИАС РФФИ предложение войти в состав коллектива (подавая заявку на конкурс), член коллектива подтверждает, что:</p><p>2.5.1. ознакомлен и принимает Условия конкурсов, в том числе условия Договора;</p><p>2.5.2. содержание проекта не совпадает с содержанием других его работ и проектов, не содержит сведений, составляющих государственную или коммерческую тайну;</p><p>2.5.3. ознакомлен с составом будущего коллектива;</p><p>2.5.4. согласен с выбором Организации, предоставляющей условия для реализации проекта;</p><p>2.5.5. согласен на хранение и обработку его персональных данных РФФИ, их использование для целей проведения экспертизы, информационного и финансового сопровождения проекта;</p><p>2.5.6. согласен на использование Правительством Иркутской области и региональным экспертным советом Иркутской области сведений, содержащихся в заявках и отчетах о реализации проектов, для целей проведения экспертизы, информационного и финансового сопровождения проекта;</p><p>2.5.7. в случае предоставления гранта согласен на опубликование РФФИ аннотаций проекта и отчета о реализации проекта, включая сведения о результатах интеллектуальной деятельности, перечня и аннотаций публикаций, приведенных в представленном в РФФИ отчете;</p><p>2.5.8. согласен на осуществление в отношении него проверки РФФИ и уполномоченными органами государственного финансового контроля соблюдения целей, условий и порядка предоставления финансовой поддержки в форме гранта.</p><p><strong>3. Требования к руководителю коллектива</strong></p><p>3.1. Физическое лицо может являться руководителем только одного коллектива, участвующего в конкурсах.</p><p>3.2. Руководителем коллектива не может быть физическое лицо, являющееся руководителем проекта, поддержанного ранее по итогам региональных конкурсов проектов фундаментальных научных исследований, проводимых РФФИ совместно с Правительством Иркутской области, и не завершающегося в 2019 году.</p><p>3.3. Руководитель коллектива не должен находиться в административной подчиненности у членов коллектива.</p><p>3.4. Руководителем коллектива не может быть лицо, являющееся руководителем Организации.</p><p><strong>4. Требования к проекту</strong></p><p>4.1. На конкурсный отбор могут быть представлены проекты фундаментальных научных исследований по тематическим направлениям:</p><ul><li>&nbsp;математическое и информационное моделирование систем и фундаментальных процессов;</li><li>&nbsp;новые материалы, нефтегазохимические и фармацевтические технологии для экономического развития Иркутской области;</li><li>&nbsp;фундаментальные исследования в области экологически чистого энерго- и топливоснабжения потребителей Иркутской области;</li><li>&nbsp;геномные и постгеномные исследования и технологии в персонифицированной медицине;</li><li>&nbsp;агро- и биотехнологии, новые технологии переработки сельскохозяйственного сырья;</li><li>&nbsp;фундаментальные исследования в области разведки, добычи, процессов переработки полезных ископаемых Иркутской области;</li><li>&nbsp;прогнозирование, оценка и разработка стратегических сценариев комплексного развития, исследование потенциальных точек роста территории Иркутской области в рамках концепции &laquo;зеленой экономики&raquo;;</li><li>&nbsp;фундаментальные проблемы рационального, ресурсосберегающего и экологически чистого природопользования в прибрежной зоне оз. Байкал;</li><li>&nbsp;научные исследования, направленные на изучение, сохранение уникальной экосистемы оз. Байкал;</li><li>&nbsp;технологии мониторинга, оценки и прогнозирования состояния и динамики лесных ресурсов Иркутской области;</li><li>&nbsp;изучение динамики и эволюция ландшафтов и ландшафтообразующих процессов; опасных процессов природно-техногенных геосистем Прибайкалья;</li><li>&nbsp;трансграничные миграции в социально-экономическом и этнополитическом развитии Иркутской области;</li><li>&nbsp;Байкальская Сибирь в исторической ретроспективе: люди, процессы, институты;</li><li>&nbsp;динамика социальных процессов и структур в Иркутской области: риски и возможности;</li><li>&nbsp;социально-экономическое и инновационное развитие Иркутской области;</li></ul><p>&uuml;&nbsp; политические институты и общественные отношения в Иркутской области</p><p>4.2. Срок реализации проекта &ndash; 2 или 3 года.</p><p>4.3. Заявленное в проекте исследование должно быть фундаментальным.</p><p>4.4. Заявленное в проекте исследование должно соответствовать тематическому направлению конкурса.</p><p>4.5. До подведения итогов конкурсов проект не должен быть подан на другие конкурсы РФФИ.</p><p>4.6. Проект не должен быть представлен на конкурс, если по своему содержанию он аналогичен проектам, ранее получившим финансовую поддержку, независимо от ее источника.</p><p><strong>5. Порядок подачи заявки для участия в конкурсе</strong></p><p>5.1. Заявка для участия в конкурсе подается руководителем коллектива путем заполнения электронных форм в <strong><a href="http://kias.rfbr.ru">КИАС РФФИ</a></strong> в соответствии с <strong><a href="https://www.rfbr.ru/rffi/getimage/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%BE%D1%84%D0%BE%D1%80%D0%BC%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E_%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D0%B8_%D0%B2_%D0%9A%D0%98%D0%90%D0%A1_%D0%A0%D0%A4%D0%A4%D0%98.pdf?objectId=2087375">Инструкцией по оформлению заявки в КИАС РФФИ</a></strong>. Инструкция по оформлению заявки в КИАС РФФИ является неотъемлемой частью Условий конкурсов.</p><p><strong>Дата и время начала подачи заявок:</strong> 06.11.2019 15:00 (МСК)</p><p><strong>Дата и время окончания подачи заявок:</strong> 20.11.2019 23:59 (МСК)</p><p>5.2. В КИАС РФФИ вносятся все сведения, которые необходимы для заполнения форм заявки.</p><p>5.3. В случае несоответствия заявленного в проекте исследования основному коду классификатора, указанному при подаче заявки, проект может быть не поддержан.</p><p><strong>6. Правила предоставления гранта</strong></p><p>6.1. Конкурсный отбор осуществляется на основании экспертизы проектов, проводимой РФФИ и региональным экспертным советом Иркутской области, с учетом следующих критериев:</p><p>6.1.1. актуальность исследования;</p><p>6.1.2. новизна ожидаемых результатов исследования;</p><p>6.1.3. соответствие ожидаемых результатов мировому уровню;</p><p>6.1.4. реализуемость проекта;</p><p>6.1.5. квалификация членов коллектива;</p><p>6.1.6. научный задел и представление современного состояния проблемы;</p><p>6.1.7. актуальность исследования для Иркутской области;</p><p>6.1.8. значимость проекта для социально-экономического развития Иркутской области.</p><p>6.2. Данные о содержании проектов и о результатах экспертизы являются конфиденциальными и не подлежат разглашению организаторами конкурсов участникам конкурса и третьим лицам. Доступ к заключительной части экспертного заключения (рецензии) после подведения итогов конкурсов предоставляется руководителю коллектива по запросу в Службу поддержки КИАС РФФИ.</p><p>6.3. РФФИ, Правительство Иркутской области и региональный экспертный совет Иркутской области не вступают в обсуждение результатов экспертизы с участниками конкурсов и третьими лицами.</p><p>6.4. По итогам конкурсов конкурсная комиссия определяет победителей и устанавливает объем финансирования каждого проекта.</p><p>РФФИ предоставляет на реализацию проекта, получившего поддержку по результатам конкурса, грант в размере 50 процентов от общей суммы денежных средств, выделенных на реализацию проекта.</p><p>Правительство Иркутской области предоставляет на реализацию проекта, получившего поддержку по результатам конкурса, денежные средства в размере 50 процентов от общей суммы денежных средств, выделенных на реализацию проекта.</p><p>6.5. РФФИ уведомляет участников конкурсов о решении конкурсной комиссии в электронном виде в КИАС РФФИ и публикует список победителей конкурсов на официальном сайте РФФИ не позднее 13 декабря 2019 года.</p><p>6.6. Победителям конкурсов предоставляется право заключить <strong><a href="https://www.rfbr.ru/rffi/getimage/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80_%D0%BE_%D0%BF%D1%80%D0%B5%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B8_%D0%B3%D1%80%D0%B0%D0%BD%D1%82%D0%B0_%D0%BF%D0%BE%D0%B1%D0%B5%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8E_%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B0_%D0%B8_%D1%80%D0%B5%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8_%D0%BD%D0%B0%D1%83%D1%87%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0.pdf?objectId=2089052">Договор</a></strong> с РФФИ и Соглашение с министерством экономического развития Иркутской области (далее &ndash; Соглашение).</p><p>6.7. Оформление Договора осуществляется в КИАС<strong> </strong>РФФИ в соответствии с <strong><a href="https://www.rfbr.ru/rffi/getimage/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%BE%D1%84%D0%BE%D1%80%D0%BC%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E_%D0%B4%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%D0%B0_%D0%BE_%D0%BF%D1%80%D0%B5%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B8_%D0%B3%D1%80%D0%B0%D0%BD%D1%82%D0%B0_%D0%BF%D0%BE%D0%B1%D0%B5%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8E_%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B0_%D0%B8_%D1%80%D0%B5%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8_%D0%BD%D0%B0%D1%83%D1%87%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0.pdf?objectId=2082193">Инструкцией по оформлению Договора о предоставлении гранта победителю конкурса и реализации научного проекта</a></strong> (далее &ndash; Инструкция), являющейся неотъемлемой частью Условий конкурсов.</p><p>6.8. Оформленный и подписанный в соответствии с Инструкцией Договор должен быть предоставлен в распечатанном виде в РФФИ (получен РФФИ) до 17-00 (МСК) 15 января 2020 г.</p><p>При непредставлении в РФФИ надлежащим образом оформленного Договора до 17-00 (МСК) 15 января 2020 г. года победители конкурсов будут лишены права заключения Договора.</p><p>Риск неполучения РФФИ Договора до 17-00 (МСК) 15 января 2020 г. года несет победитель конкурса.</p><p>6.9. РФФИ предоставляет грант только после заключения Договора.</p><p>6.10. Договор заключается на первый этап реализации проекта.</p><p>6.11. По результатам экспертизы промежуточного отчета, проводимой РФФИ и региональным экспертным советом Иркутской области, конкурсная комиссия принимает решение о целесообразности продолжения финансирования проекта и утверждает размер финансирования по каждому проекту на следующий этап реализации проекта. Условиями предоставления денежных средств на следующий этап реализации проекта являются:</p><p>- представление промежуточного отчета в соответствии с требованиями раздела 8 Условий конкурсов;</p><p>- решение конкурсной комиссии о целесообразности продолжения финансирования проекта;</p><p>- выполнение условий Договора и Соглашения при реализации проекта за отчетный период;</p><p>- предоставление надлежащим образом оформленного Договора в течение 30 календарных дней с даты опубликования решения конкурсной комиссии о целесообразности продолжения финансирования проекта;</p><p>- предоставление надлежащим образом оформленного Соглашения в срок, указанный в пункте 6.12.</p><p>6.12. Правила использования денежных средств, предоставленных Правительством Иркутской области, определяются нормативными актами Иркутской области и Соглашением.</p><p>Соглашения должны быть предоставлены в министерство экономического развития Иркутской области (далее &ndash; Министерство) в течение 20 рабочих дней с даты издания правового акта Правительства Иркутской области об утверждении Перечня проектов и размера предоставляемых грантов.</p><p>Соглашения направляются в Министерство по адресу: ул. Горького, д. 31, г. Иркутск, Иркутская обл., 664011.</p><p><strong>7. Правила реализации проекта и использования гранта</strong></p><p>7.1. Руководитель коллектива вправе произвести изменения в составе коллектива, реализующего проект, о чем он обязан указать в представляемом отчете о реализации проекта за истекший отчетный период.</p><p>Решение руководителя коллектива об изменении состава коллектива вступает в силу после утверждения отчета конкурсной комиссией.</p><p>7.2. Победитель конкурса обязан:</p><p>7.2.1. до подачи промежуточного отчета о реализации проекта за первый отчетный период получить регистрационный номер темы проекта в ЕГИСУ НИОКТР (ФГАНУ ЦИТиС) и внести его в КИАС РФФИ;</p><p>7.2.2. обеспечить государственный учет результатов работы по проекту в ЕГИСУ НИОКТР (ФГАНУ ЦИТиС);</p><p>7.2.3. до подачи итогового отчета опубликовать результаты реализации проекта в изданиях, включенных в одну из библиографических баз данных (Web of Science, Scopus, РИНЦ), или в монографии;</p><p>7.2.4. при публикации результатов реализации проекта ссылаться на поддержку РФФИ и Правительства Иркутской области с указанием номера проекта. Образец: &laquo;Исследование выполнено при финансовой поддержке РФФИ и Правительства Иркутской области в рамках научного проекта № 19-42-383001&raquo; или &laquo;The reported study was funded by RFBR and the Government of the Irkutsk Region, project number 19-42-383001&raquo;.</p><p>В российских изданиях, индексируемых международными базами данных и индексами научного цитирования, ссылка на поддержку РФФИ и Правительства Иркутской области должна быть приведена на русском и английском языках, при этом:</p><p>- образец ссылки на поддержку РФФИ и Правительства Иркутской области на русском языке: &laquo;Исследование выполнено при финансовой поддержке РФФИ и Правительства Иркутской области в рамках научного проекта № 19-42-383001&raquo;;</p><p>- если издание имеет англоязычные разделы &laquo;Acknowledgments&raquo; или &laquo;Funding&raquo;, ссылка на поддержку РФФИ и Правительства Иркутской области на английском языке должна быть приведена в этих разделах. Образец: &laquo; The reported study was funded by RFBR and the Government of the Irkutsk Region, project number 19-42-383001&raquo;;</p><p>- если издание не имеет англоязычных разделов &laquo;Acknowledgments&raquo; или &laquo;Funding&raquo;, ссылка на поддержку РФФИ и Правительства Иркутской области должна предваряться этими словами. Образец: &laquo;Acknowledgments: The reported study was funded by RFBR and the Government of the Irkutsk Region, project number 19-42-383001&raquo; или &laquo;Funding: The reported study was funded by RFBR and the Government of the Irkutsk Region, project number 19-42-383001&raquo;.</p><p><strong>7.3. За счет средств гранта, предоставляемого РФФИ, допускается осуществление следующих расходов:</strong></p><p>7.3.1. на компенсацию расходов Организации на предоставление условий для реализации проекта (не более 20 %).</p><p>Размер части гранта, которая может быть направлена для компенсации расходов Организации по предоставлению условий для реализации проекта, определяется по соглашению между коллективом и Организацией;</p><p>7.3.2. на поездки, связанные с реализацией проекта, за пределы населенного пункта, в котором проживает член коллектива;</p><p>7.3.3. на организационные и регистрационные взносы за участие в мероприятиях с целью представления результатов реализации проекта;</p><p>7.3.4. на оплату договоров аренды помещений и другого имущества;</p><p>7.3.5. по договорам на предоставление редакционно-издательских услуг;</p><p>7.3.6. по договорам на предоставление транспортных услуг;</p><p>7.3.7. по договорам на оказание услуг по организации питания животных и на ветеринарное обслуживание животных;</p><p>7.3.8. по договорам на изготовление экспериментального оборудования, карт, схем, диаграмм, эскизов, макетов и др. предметов;</p><p>7.3.9. по договорам на выполнение научно-исследовательских работ (не более 20 %);</p><p>7.3.10. по договорам на выполнение опытно-технологических, геолого-разведочных, пуско-наладочных работ, технического обслуживания и текущего ремонта научного оборудования, приборов, вычислительной техники;</p><p>7.3.11. на приобретение научных приборов, оборудования, в т.ч. флеш-карт (компьютеры, ноутбуки, планшеты, электронные книги и т.п. относятся к оборудованию), запасных частей, комплектующих к научному оборудованию, приборам, вычислительной и оргтехнике, расходных материалов, в том числе химических реактивов;</p><p>7.3.12. на приобретение медикаментов, перевязочных средств и прочих лечебных препаратов, мягкого инвентаря и обмундирования, спальных мешков, специальной одежды и специальной обуви, средств космической связи, горюче-смазочных материалов и т.д.;</p><p>7.3.13. на приобретение подопытных животных и продуктов питания для этих животных, биологических объектов для экспериментов и т.д.;</p><p>7.3.14. на приобретение средств, обеспечивающих безопасность при реализации проекта;</p><p>7.3.15. на приобретение научной и научно-технической литературы по проблематике проекта (кроме библиотечных фондов);</p><p>7.3.16. на подписку научной и научно-технической литературы по тематике проекта, получение доступа к электронным научным информационным ресурсам;</p><p>7.3.17. на приобретение неисключительных (пользовательских), лицензионных прав на программное обеспечение, приобретение и обновление справочно-информационных баз данных;</p><p>7.3.18. на опубликование результатов реализации проектов, оформление прав на результаты интеллектуальной деятельности;</p><p>7.3.19. на использование ресурсов центров коллективного пользования (ЦКП) при реализации проекта;</p><p>7.3.20. на оцифровку и ксерокопирование архивных материалов;</p><p>7.3.21.<strong> </strong>на оплату пользования телефонной, космической и факсимильной связью и услугами интернет - провайдеров, включая плату за предоставление доступа и использование линий связи, передачу данных по каналам связи, информационной сетью &laquo;Интернет&raquo;;</p><p>7.3.22. на личное потребление Грантополучателя.</p><p>7.4. Расходование гранта РФФИ по направлениям 7.3.2-7.3.21 допускается только на цели, связанные с реализацией проекта.</p><p>7.5. Правила использования денежных средств, предоставленных Правительством Иркутской области, определяются нормативными актами Правительства Иркутской области и Соглашением.</p><p><strong>8. Правила предоставления отчетности</strong></p><p>8.1. <strong>Отчет подается за каждый этап реализации проекта.</strong><strong></strong></p><p><strong>Отчет за первый этап</strong> реализации проекта (<strong>промежуточный</strong>) должен быть сформирован и подписан в КИАС РФФИ в срок с 01 сентября 2020 года до 23 часов 59 минут (МСК) 22 сентября 2020 года.</p><p><strong>Отчет за второй этап</strong> реализации проекта (<strong>промежуточный отчет или итоговый</strong>, если срок реализации проекта два года) должен быть сформирован и подписан в КИАС РФФИ в срок с 31 августа 2021 года до 23 часов 59 минут (МСК) 21 сентября 2021 года.</p><p><strong>Отчет за третий этап</strong> реализации проекта (<strong>итоговый отчет</strong>, если срок реализации проекта три года) должен быть сформирован и подписан в КИАС РФФИ в срок с 30 августа 2022 года до 23 часов 59 минут (МСК) 27 сентября 2022 года.</p><p>8.2. Отчет подается руководителем коллектива путем заполнения электронных форм в КИАС РФФИ, в срок, указанный в п.8.1.</p><p>8.3. В случае изменения состава коллектива руководитель коллектива должен предложить зарегистрироваться в качестве пользователей в КИАС РФФИ всем будущим членам его коллектива (если они не были зарегистрированы ранее) и принять условия использования электронной подписи.</p><p>8.4. Для подачи отчета руководитель коллектива обязан:</p><p>8.4.1. заполнить в КИАС РФФИ все имеющиеся поля в формах отчетов;</p><p>8.4.2. подписать в КИАС РФФИ отчет и отправить его.</p><p>8.5. После отправки отчета в КИАС РФФИ внесение в него изменений, отзыв и удаление из КИАС РФФИ не допускается.</p><p>8.6. В промежуточном отчете должны быть представлены результаты за соответствующий отчетный период.</p><p>В итоговом отчете должны быть представлены полученные результаты за весь период реализации проекта.</p><p>8.7. Сроки предоставления отчетов о реализации проекта в Министерство определяются Соглашением, но не могут быть позднее 01 апреля года, следующего за годом предоставления гранта.</p><p>Отчеты о реализации проектов направляются в Министерство по адресу: ул. Горького, д. 31, г. Иркутск, Иркутская обл., 664011.</p><p><strong>9. Установление результата предоставления гранта</strong></p><p>9.1. Установление результата предоставления гранта осуществляется на основании экспертизы отчета.</p><p>9.2.<strong> </strong>При экспертизе итогового отчета будут учитываться только публикации, подготовленные по результатам реализации проекта, содержащие ссылку на финансовую поддержку РФФИ и Правительство Иркутской области и поступившие в редакцию не ранее 13 декабря 2019 года.</p><p>9.3. Конкурсная комиссия принимает решение об утверждении отчета на основании экспертизы.</p><p>9.4. Обязательства победителя конкурса по реализации проекта и использованию гранта считаются исполненными после утверждения конкурсной комиссией итогового отчета о реализации проекта.</p><p>9.5. За нарушение целей, условий и порядка предоставления гранта победитель конкурса несет ответственность, предусмотренную Договором, Соглашением и законодательством Российской Федерации.</p></div><div class="list-in article">    
	<h2 class="mb-10">Формы заявок</h2><ol><li><a href="/rffi/getimage/Форма_6_р._Предварительный_бюджет_проекта.pdf?objectId=2098854">Форма 6_р. Предварительный бюджет проекта</a></li><li><a href="/rffi/getimage/Форма_2._Данные_о_физическом_лице.pdf?objectId=2061651">Форма 2. Данные о физическом лице</a></li><li><a href="/rffi/getimage/Форма_3._Сведения_об_организации.pdf?objectId=2061657">Форма 3. Сведения об организации</a></li><li><a href="/rffi/getimage/Форма_1en._Данные_о_проекте_на_английском_языке.pdf?objectId=2086983">Форма 1en. Данные о проекте на английском языке</a></li><li><a href="/rffi/getimage/Форма_4_р._Содержание_проекта.pdf?objectId=2089060">Форма 4_р. Содержание проекта</a></li><li><a href="/rffi/getimage/Форма_1_р._Данные_о_проекте.pdf?objectId=2098456">Форма 1_р. Данные о проекте</a></li></ol></div><div class="list-in article">    
	<h2 class="mb-10">Договор и инструкции</h2><ol><li><a href="/rffi/getimage/Инструкция_по_оформлению_договора_о_предоставлении_гранта_победителю_конкурса_и_реализации_научного_проекта.pdf?objectId=2082193">Инструкция по оформлению договора о предоставлении гранта победителю конкурса и реализации научного проекта</a></li><li><a href="/rffi/getimage/Инструкция_по_оформлению_заявки_в_КИАС_РФФИ.pdf?objectId=2087375">Инструкция по оформлению заявки в КИАС РФФИ</a></li><li><a href="/rffi/getimage/Договор_о_предоставлении_гранта_победителю_конкурса_и_реализации_научного_проекта.pdf?objectId=2089052">Договор о предоставлении гранта победителю конкурса и реализации научного проекта</a></li></ol></div><div class="list-in article">    
	<h2 class="mb-10">Формы отчетов</h2><ol><li><a href="/rffi/getimage/Форма_501._Краткий_научный_отчет.pdf?objectId=2089072">Форма 501. Краткий научный отчет</a></li><li><a href="/rffi/getimage/Форма_501(итог)._Краткий_научный_отчет.pdf?objectId=2089075">Форма 501(итог). Краткий научный отчет</a></li><li><a href="/rffi/getimage/Форма_502._Краткий_научный_отчет_на_английском_языке.pdf?objectId=2089077">Форма 502. Краткий научный отчет на английском языке</a></li><li><a href="/rffi/getimage/Форма_502(итог)._Краткий_научный_отчет_на_английском_языке.pdf?objectId=2089079">Форма 502(итог). Краткий научный отчет на английском языке</a></li><li><a href="/rffi/getimage/Форма_503._Развернутый_научный_отчет.pdf?objectId=2089082">Форма 503. Развернутый научный отчет</a></li><li><a href="/rffi/getimage/Форма_503(итог)._Развернутый_научный_отчет.pdf?objectId=2089084">Форма 503(итог). Развернутый научный отчет</a></li><li><a href="/rffi/getimage/Форма_509._Публикация_по_результатам_проекта.pdf?objectId=2089087">Форма 509. Публикация по результатам проекта</a></li><li><a href="/rffi/getimage/Форма_511._Возможности_практического_использования_результатов_проекта_РФФИ.pdf?objectId=2089089">Форма 511. Возможности практического использования результатов проекта РФФИ</a></li><li><a href="/rffi/getimage/Форма_512._Данные_о_физическом_лице.pdf?objectId=2089091">Форма 512. Данные о физическом лице</a></li><li><a href="/rffi/getimage/Форма_520._Возможности_практического_использования_результатов_проекта_РФФИ_для_региона.pdf?objectId=2089093">Форма 520. Возможности практического использования результатов проекта РФФИ для региона</a></li></ol></div><div id="upmsg-selectable">    <div class="upmsg-selectable-inner">        <img src="/rffi/page-proofs/images/textselect/upmsg_arrow.png" alt="">        <p>Вы можете отметить интересные вам фрагменты текста, которые будут доступны по уникальной ссылке в адресной строке браузера.</p>        <a href="#" class="upmsg_closebtn"></a>    </div></div><div class="ratingBlock">    
    Помог ли вам материал?
    <form method="post" class="vote ml-5px" data-vote="true">        <input name ="dovote" type = "hidden" value='-1'/>        <input name ="mark" type = "hidden" value='' id = "mark"/>        <span class="vote__yes">0</span>        <span class="vote__btn vote__btn_yes js-vote" title="Да" data-value="1">&nbsp;</span><span class="vote__btn vote__btn_no js-vote" title="Нет" data-value="0">&nbsp;</span>        <span class="vote__no">0</span>        <span class="vote__msg"></span>    </form>    
    
    <div class="fl-r ml-10px">        <div class="g-plusone" data-size="medium"></div>    </div>    
    
    <div class="fl-r ml-10px">        <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>    </div>    <div class="fb-like fl-r" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>    <div class="fl-r">        <script type="text/javascript">          VK.init({apiId: 3121914, onlyWidgets: true});
        </script>        <div id="vk_like" class="fl-r ml-10px"></div>        <script type="text/javascript">            VK.Widgets.Like("vk_like", {type: "button", height: 20});
        </script>    </div>    
</div> 
                    </main><!--						
                    --><aside class="template__aside template__aside_right">                        








<ul class="sidebar--list m-sidebar--list__light">    
    <li class="sidebar--item">        <a class="sidebar--link m-sidebar--link__current" href="/rffi/ru/contest/n_812">            Конкурсы и программы РФФИ
        </a>        
        <ul class="pl-20px">            
            <li class="sidebar--item">                <a class="sidebar--link" href="/rffi/ru/rffi_contest_announces">                    Объявления о конкурсах
                </a>            </li>            
            <li class="sidebar--item">                <a class="sidebar--link" href="/rffi/ru/rffi_contest_requests">                    Заявки
                </a>            </li>            
            <li class="sidebar--item">                <a class="sidebar--link" href="/rffi/ru/rffi_contest_reports">                    Отчеты
                </a>            </li>            
            <li class="sidebar--item">                <a class="sidebar--link" href="/rffi/ru/rffi_contest_results">                    Итоги конкурсов
                </a>            </li>            
        </ul>        
    </li>    
    <li class="sidebar--item">       <a class="sidebar--link  " href="/rffi/ru/project_search">            Поиск по проектам и заявкам
        </a>        
    </li>    
    <li class="sidebar--item">       <a class="sidebar--link  " href="/rffi/ru/contest_documents">            Конкурсная документация
        </a>        
    </li>    
    <li class="sidebar--item">       <a class="sidebar--link  " href="/rffi/ru/expert_projects">            Экспертные процедуры
        </a>        
    </li>    
    <li class="sidebar--item">       <a class="sidebar--link m-sidebar--link__last " href="/rffi/ru/financial_support">            Финансирование проектов
        </a>        
    </li>    
</ul><a href="/rffi/ru/best_projects" class="result"><img src="/rffi/page-proofs/images/20let_izbr.jpg" alt="" /></a> 
                    </aside>                    
                </div>                
            </div>            






<!-- block.footer --><footer class="footer">    
    <div class="layout layout_style_main layout_paddings_sides18 bCols">        
        <div class="bCols__item w-40 lh-140">            <p class="l-3 bold mt-5px">&copy; 1992–2020, Российский фонд фундаментальных исследований</p>            <a class="link link_invert link_color_white l-4" href="/rffi/ru/apply_now#feedback_form">Пожелания и отзывы по работе сайта</a>        </div><!--
        --><div class="bCols__item w-20 ta-c">            <a href="https://kias.rfbr.ru/politics.php" target="_blank" style="text-decoration:none;color:#fff;">                Политика конфиденциальности РФФИ
            </a>            <!--div class="inline-b l-1 lh-100">                <a class="icon icon_size_30 icon_vk" href="https://vk.com/rffiru"></a>                <a class="icon icon_size_30 icon_fb" href="https://www.facebook.com/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9-%D1%84%D0%BE%D0%BD%D0%B4-%D1%84%D1%83%D0%BD%D0%B4%D0%B0%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B8%D1%81%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B9-671437166339697/?ref=br_rs"></a>                <a class="icon icon_size_30 icon_tw" href="#"></a>            </div-->        </div><!--
        --><div class="bCols__item w-40">            
            <p class="l-3s ta-r mt-5px lh-160">                
                Россия, 119334, Москва, Ленинский проспект, 32а, 20-21 этаж<br>                
                Телефон для справок: +7 (499) 941-01-15
            </p>        
        </div>    
    </div></footer>        </div>        				
		<script type="text/javascript" src="/rffi/pf10_portal/js/ckeditor/ckeditor.js"></script><script type="text/javascript" src="/rffi/pf10_portal/js/min/x.min.js"></script></body></html>
HTML;

    }
}