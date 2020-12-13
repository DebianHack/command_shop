<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      		<div class="modal-body">
		        <form method="POST">

				  <div class="form-group">
				    <label for="exampleInputEmail1">Введите свой email. Не пытайся нас обмануть)</label>
				    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				    <small id="emailHelp" class="form-text text-muted">Твоя почта в надежных руках</small>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Какой логин, скажи нам)</label>
				    <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Придумай и веди пароль</label>
				    <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Подтверди пароль</label>
				    <input type="password" name="repassword" required class="form-control" id="exampleInputPassword1">
				  </div>
				  <small id="emailHelp" class="form-text text-muted">Мы заботимся о твоей безопасности</small>

				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
				  </div>

				  <button type="submit" name="register_inp" class="btn button_reg">Подтвердить</button>
				</form>
      		</div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <!-- <button type="button" class="btn button_reg">Регистрация</button> -->
      </div>

    </div>
  </div>
</div>