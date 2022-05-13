	<?php include_once("header.php");?>

    <!-- Start: Feedback -->
    <section>
        <!-- Start: Contact Form Clean -->
        <section class="contact-clean">
            <form id="form" method="post">
                <h2 class="text-center">Оставьте заявку</h2><!-- Start: Success Example -->
                <div class="mb-3"><input id="form_name" class="form-control" type="text" name="form_name" placeholder="Ваше имя"></div><!-- End: Success Example -->
                <!-- Start: Error Example -->
                <div class="mb-3"><input id="form_email"class="form-control is-invalid" type="email" name="form_email" placeholder="Ваш Email"><!-- Start: The Error Message --><small class="form-text text-danger">Пожалуйста, вводите корректный адрес email.</small><!-- End: The Error Message -->
                </div><!-- End: Error Example -->
                <div class="mb-3"><textarea id="form_message" class="form-control" name="form_message" placeholder="Ваше сообщение" rows="14"></textarea></div><!-- Start: Error Example -->
                <div class="mb-3">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" checked=""><label class="form-check-label" for="formCheck-1">я согласен с тем, что моя информация не устанавливает договорных отношений</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2" checked=""><label class="form-check-label" for="formCheck-1">я согласен с обработкой конфиденциальных данных</label></div>
                </div><!-- End: Error Example -->
                <div class="mb-3">
                    <button id="button_contacts" class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Отправить</button>
                    </div>
            </form>
        </section><!-- End: Contact Form Clean -->
    </section><!-- End: Feedback -->

<script type="text/javascript">
$("#form").submit(function () {
    var form_data = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "send.php",
        data: form_data,
        success: function () {
          //alert("Ваше сообщение отправлено!");
      }
    });
    return false;
});  
</script>

<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Запустите модальное окно
</button>-->

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Отправка сообщения</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">Ваше сообщение отправлено!</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Сохранить изменения</button>-->
      </div>
    </div>
  </div>
</div>

<?php include_once("footer.php");?>