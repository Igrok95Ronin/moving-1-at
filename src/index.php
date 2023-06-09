<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Umzugsfirma in'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <h1 class="header__title"><?= $text ?> <?= $city == '' ? 'der Nähe' : $city ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <!-- Раздел страницы-->
         <section class="moving">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="moving__box">
                            <div class="moving__left">
                                <div class="moving__imgWrap">
                                    <img class="moving__img" src="./assets/img/um1.jpeg" alt="moving__img">
                                </div>
                                <div class="moving__leftBottom">
                                    <p class="moving__dscr">✓ Kostenlose Besichtigung</p>
                                    <a class="moving__btn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                                </div>
                            </div>

                            <div class="moving__right">
                                <h2 class="moving__title">Umzugsfirma in <?= $city == '' ? 'der Nähe' : $city ?> gesucht? Wir sind hier, um Ihnen zu helfen!</h2>
                                <p class="moving__txt">Planen Sie einen <b>Umzug in <?= $city == '' ? 'der Nähe' : $city ?></b> und suchen nach einer zuverlässigen <b>Umzugsfirma</b>? Wir sind für Sie da! Unser erfahrenes Team bietet eine breite Palette von Dienstleistungen, darunter <b>Planung, Verpackung, Transport</b> und Entladung. Kontaktieren Sie uns für ein Angebot und erleben Sie einen stressfreien Umzug!</p>
                                <div class="moving__commit">
                                    <div class="moving__commitT">
                                        <img class="moving__imgCommit" src="./assets/img/bad6.jpg" alt="">
                                        <div class="moving__nameW">
                                            <p class="moving__name">Frau Pichler</p>
                                            <p class="moving__star">⭐️⭐️⭐️⭐️⭐️</p>
                                        </div>
                                    </div>
                                    <p class="moving__message">"Der Umzugsservice war ausgezeichnet! Das Team war sehr professionell und sorgte für einen reibungslosen Umzug. Sie waren pünktlich, freundlich und haben alles sorgfältig verpackt und transportiert. Ich bin sehr zufrieden mit ihrem Service und würde sie jedem empfehlen, der einen Umzug plant."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='assembly'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='assembly__box'>
                            <div class="assembly__left">
                                <section class='forms'>
                                   <div class='forms__wrapper'>
                                      <div class='container-fluid'>
                                         <div class='row'>
                                            <div class='col-12 container'>
                                               <div class='forms__box'>
                                                  <h2 class='forms__title'>Schnellangebot einholen</h2>
                                                  <form id='jq_form' class='mb-0 mt-3'>
                                                     <div class='my-0'>
                                                        <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                                        <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div class='my-4'>
                                                        <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                                        <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div class='my-4'>
                                                        <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                                        <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div class='my-4'>
                                                        <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                                        <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div class='my-4'>
                                                        <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                                        <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div class='my-4'>
                                                        <textarea rows='3' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                                        <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                                     </div>
                                                     <div>
                                                        <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                                                     </div>
                                                     <div id='jq_success' style='display:none'>Danke für deine Nachricht. Sie hat Gesendet.</div>
                                                  </form>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </section>
                            </div>

                            <div class="assembly__right">
                                <div class="wrapperList">
                                    <p class="assembly__list">✓ Kostenloses Angebot</p>
                                    <p class="assembly__list">✓ Kurzfristige Termine</p>
                                    <p class="assembly__list">✓ Montage / Demontage</p>
                                    <p class="assembly__list">✓ Professionelle Verpackung</p>
                                </div>
                                <div class="assembly__imgWrap">
                                    <img class="assembly__img" src="./assets/img/um3.jpg" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='assistant'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='assistant__box'>
                            <h2 class="assistant__title">Sorgenfreier Umzug mit unseren Profis <?= $city ?></h2>
                            <p class="assistant__txt">Planen Sie einen <b>Umzug in <?= $city == '' ? 'Ihrer Nähe' : $city ?> </b> und suchen nach einer professionellen <b>Umzugsfirma</b>, die Ihnen dabei helfen kann? Wir sind hier, um Ihnen den Stress und die Belastung eines Umzugs abzunehmen. Unser erfahrenes Team kümmert sich um alle Aspekte Ihres Umzugs, von der Planung und Organisation bis hin zum Transport Ihrer Möbel und Gegenstände. Wir sind stolz darauf, pünktliche, sichere und effiziente Umzüge zu bieten, und wir arbeiten hart daran, sicherzustellen, dass jeder Umzug so reibungslos wie möglich verläuft. Mit unseren Profis an Ihrer Seite können Sie sich zurücklehnen und entspannen, während wir alles für Sie erledigen. Kontaktieren Sie uns noch heute, um ein Angebot zu erhalten und einen sorgenfreien Umzug mit unseren <b>Profis in <?= $city == '' ? 'Ihrer Nähe' : $city ?></b> zu planen!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='assistant'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='assistant__box'>
                            <h2 class="assistant__title">Preiswerte Umzüge - Qualität ist unser Versprechen</h2>
                            <p class="assistant__txt">Wenn Sie einen preiswerten <b>Umzug</b> mit hoher <b>Qualität</b> suchen, sind wir die richtige Wahl für Sie! Unsere <b>Umzugsfirma <?= $city ?></b> bietet erschwingliche Umzugsdienstleistungen, ohne Kompromisse bei der Qualität einzugehen. Wir arbeiten hart daran, sicherzustellen, dass jeder Umzug so reibungslos und stressfrei wie möglich verläuft und dass unsere Kunden mit unserem Service zufrieden sind. Kontaktieren Sie uns noch heute, um ein Angebot zu erhalten und einen <b>preiswerten</b>, qualitativ hochwertigen <b>Umzug</b> mit uns zu planen!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='assistant'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='assistant__box'>
                            <h2 class="assistant__title">Wir bringen Sie in Ihr neues Zuhause</h2>
                            <p class="assistant__txt">Als <b>Umzugsfirma <?= $city ?></b> sind wir darauf spezialisiert, Ihre Habseligkeiten sicher und effizient in Ihr neues Zuhause zu bringen. Wir verstehen, dass ein <b>Umzug</b> eine stressige Erfahrung sein kann und unser Ziel ist es, Ihnen den Prozess so angenehm wie möglich zu gestalten. Unsere erfahrenen Mitarbeiter werden sorgfältig mit Ihrem Eigentum umgehen und es sicher an den Zielort transportieren. Wir kümmern uns um alle Aspekte des Umzugs, einschließlich <b>Verpackung, Transport</b> und Entladung. Mit unserem engagierten Team können Sie sicher sein, dass Sie in kürzester Zeit in Ihrem neuen Zuhause angekommen sind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='assistant'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='assistant__box'>
                            <h2 class="assistant__title">Wir packen an - Ihr zuverlässiger Umzugshelfer <?= $city ?></h2>
                            <p class="assistant__txt">Als <b>zuverlässiger Umzugshelfer <?= $city ?></b> packen wir gerne mit an, um Ihnen den Umzug so stressfrei wie möglich zu gestalten. Unsere erfahrenen Mitarbeiter sind darauf spezialisiert, Ihre Habseligkeiten sicher und effizient zu verpacken und zu transportieren. Wir kümmern uns um alle Aspekte des Umzugs, einschließlich Verpackung, Demontage und Montage von Möbeln sowie Transport und Entladung. Mit unserem engagierten Team können Sie sicher sein, dass Ihr Umzug reibungslos abläuft und Ihre Sachen sicher und unbeschädigt an den Zielort kommen. Wir sind stolz darauf, Ihnen als vertrauenswürdiger Umzugshelfer zur Seite zu stehen und Ihnen dabei zu helfen, in Ihrem neuen Zuhause anzukommen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='btnFixedWrapper'>
            <a class="btnFixed" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>