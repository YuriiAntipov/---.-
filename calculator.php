	<?php include_once("header.php");?>
    <!-- Start: Calculator -->
    <section>
        <!-- Start: calculator_head -->
        <section class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <h1 class="text-center">Калькулятор стоимости банкротства для граждан<br></h1>
                        <h1 class="text-center" style="font-size: 20px;margin-bottom: 20px;margin-top: 0px;">Расходы на банкротство могут составлять от 100 тыс. до 250 тыс. руб.<br>Узнай свою стоимость<br><br></h1>
                        <h1 class="text-center" style="font-size: 20px;margin-bottom: 20px;margin-top: 0px;"><strong>Списать долги легче, чем Вы думаете!</strong><br><br>Мы рассчитаем стоимость Вашего банкротства, подготовим договори уже с завтрашнего дня начнем готовить документы на списание Ваших долгов.<br></h1>
                    </div>
                </div>
            </div>
        </section><!-- End: calculator_head -->
        <!-- Start: calculator_body -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Укажите общую сумму долгов, в рублях</label><input class="form-range" type="range" oninput="$('#summ_dolga_text').html($(this).val())" value="100000" min="100000" max="100000000" name="summ_dolga" step="100000"><span id="summ_dolga_text">100000</span></fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Какое количество недвижимого имущества имеется у Вас в собственности?</label><input class="form-range" type="range" oninput="$('#kol_imushestva_text').html($(this).val())" value="1" min="1" max="10" name="kol-vo_imushestva" step="1"><span id="kol_imushestva_text">1</span></fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Укажите количество Ваших кредиторов<br></label><input class="form-range" type="range" oninput="$('#kol_kreditor_text').html($(this).val())" value="1" min="1" max="5" name="kol-vo_kreditor" step="1"><span id="kol_kreditor_text">1</span></fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Укажите количество дней просрочки исполнения обязательства</label><input class="form-range" type="range" oninput="$('#kol_dney_text').html($(this).val())" value="100" min="100" max="1000" name="kol-vo_dney" step="10"><span id="kol_dney_text">100</span></fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Укажите размер своего официального дохода, в рублях</label><input class="form-range" type="range" oninput="$('#summa_dohoda_text').html($(this).val())" value="10000" min="10000" max="1000000" name="summa_dohoda" step="10000"><span id="summa_dohoda_text">10000</span></fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset><label class="form-label">Сколько у Вас несовершеннолетних детей?</label><input class="form-range" type="range" oninput="$('#kol_detey_text').html($(this).val())" value="1" min="1" max="10" name="kol-vo_detey" step="1"><span id="kol_detey_text">1</span></fieldset>
                    </div>
                </div>
            </div>
        </section><!-- End: calculator_body -->
        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="col-md-12 text-center">
                <h5 style="font-style: italic;">Начните списание долгов сегодня,<br>чтобы почувствовать свободу от обязательств завтра!</h5><button class="btn btn-secondary btn-lg text-center" onclick="return Calculate();" type="button">Рассчитать</button>
            </div>
        </div><!-- Start: calculator_result -->
        <section class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5><strong>Стоимость списания долгов составляет:</strong></h5>
                        <p>итоговая сумма (руб.):&nbsp;&nbsp;<span id="summa_spisaniya" style="font-weight: bold;color: var(--bs-red);"></span></p>
                    </div>
                    <div class="col-md-6">
                        <h5><strong>Обязательные расходы в деле о банкротстве составляют:</strong></h5>
                        <p>Депозит арбитражного суда (руб.):&nbsp;<span id="deposit" style="font-weight: bold;color: var(--bs-indigo);"></span></p>
                        <p>Расходы на публикации о банкротстве (руб.):&nbsp;<span id="rashodi" style="font-weight: bold;color: var(--bs-indigo);"></span></p>
                    </div>
                </div>
            </div>
        </section><!-- End: calculator_result -->
    </section><!-- End: Calculator -->
    
    	<?php include_once("footer.php");?>