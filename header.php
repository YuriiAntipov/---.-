<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
    <title>ЦАУ «Прайм Сервис»</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
function Calculate() {

var summ_dolga = document.getElementById('summ_dolga_text').innerText;
var kol_imushestva = document.getElementById('kol_imushestva_text').innerText;
var kol_kreditor = document.getElementById('kol_kreditor_text').innerText;
var kol_dney = document.getElementById('kol_dney_text').innerText;
var summa_dohoda = document.getElementById('summa_dohoda_text').innerText;
var kol_detey = document.getElementById('kol_detey_text').innerText;

//var var_summa = document.getElementById("test");
//var var_summa = div.getElementsByTagName("span");

var summa =((summ_dolga*kol_kreditor*kol_dney*kol_imushestva)/(summa_dohoda*kol_detey))*2;


document.getElementById('summa_spisaniya').innerHTML = Math.round(summa);	

document.getElementById('deposit').innerHTML = '25000';
document.getElementById('rashodi').innerHTML = '25000';

return false;
}
</script>
</head>

<body>
    <!-- Start: Header Dark -->
    <header class="header-dark" style="background: url(&quot;assets/img/fon.jpg&quot;);background-size: cover;">
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
            <div class="container"><a href="http://xn----7sbhlqcvvjfje.xn--p1ai/" class="navbar-brand">ЦАУ «Прайм Сервис»<br></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="about.php">О компании</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Услуги</a></li>
                        <li class="nav-item"><a class="nav-link" href="calculator.php">Калькулятор</a></li>
                        <li class="nav-item"><a class="nav-link" href="questions.php">Вопросы</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center" style="font-size: 20px;margin-bottom: 0px;">Центр Антикризисного Управления<br></h1>
                    <h1 class="text-center" style="font-size: 40px;">« Прайм Сервис»<br></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="text-center" style="font-size: 20px;margin-bottom: 0px;">Профессионально. Качественно. Надежно.<br></h1><a class="btn btn-light action-button" role="button" href="feedback.php" style="margin-right: 10px;">Записаться на консультацию</a><a class="btn btn-light action-button" role="button" href="about.php" style="margin-left: 10px;">Узнать больше</a>
                </div>
            </div>
        </div>
    </header><!-- End: Header Dark -->