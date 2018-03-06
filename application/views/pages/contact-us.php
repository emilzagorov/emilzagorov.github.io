<div class="w-80 center">
<div class="row">
    <div class="col-12 col-md-6 mv3">
        <h2 class="f3 pb2">Нашият адрес:</h2>
        <p>
            София, ул. Алабала 14, 1234
        </p>
        <h2 class="f3">Карта:</h2>
        <img src="<?= site_url('assets/img/placeholder.png'); ?>" >
    </div>
    <div class="col-12 col-md-6 mv3">
        <h2 class="f3 pb2">Свържи се с нас:</h2>
            <div class="center states-opacity shadow mw6 pb2">
                <h2 class="f3 pl2 pv2">Изпрати запитване</h2>
                <form action="" role="form" method="post" autocomplete="off" data-parsley-validate="" data-parsley-errors-messages-disabled="">
                    <fieldset class="center pb2 ph2">
                        <input type="text" name="name" maxlength="50" id="name" class="input w-100" placeholder="Име" required>
                        <label>Име</label>
                    </fieldset>
                    <fieldset class="center mb2 pa2">
                        <input type="email" name="email" maxlength="50" id="email" class="input w-100" placeholder="И-мейл" required>
                        <label>И-мейл</label>
                    </fieldset>
                    <fieldset class="center ph2 pb2">
                        <textarea type="text" name="message" maxlength="100" id="message" class="input w-100 h4" placeholder="Съобщение" required></textarea>
                        <label>Съобщение</label>
                    </fieldset>
                    <input type="hidden">
                    <button type="submit" class="btn states-opacity db center bg-green">Изпрати</button>
                </form>
            </div>
        </div>
    </div>
</div>
