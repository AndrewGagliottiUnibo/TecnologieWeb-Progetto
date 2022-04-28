<!-- <?php 
include_once ROOT_PATH . "/sito/script/purchase.js";
?> -->

<section class="payment">
    <div class="payment-logo">
        <p>p</p>
    </div>

<h2>Sezione di pagamento</h2>
    <div class="form">
        <div class="space icon-relative">
            <label class="label">Proprietario:</label>
            <input type="text" class="input" placeholder="Nome Cognome">
            <i class="fas fa-user"></i>
        </div>
        <div class="space icon-relative">
            <label class="label">Numero carta:</label>
            <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Numero carta">
            <i class="far fa-credit-card"></i>
        </div>
        <div class="input-grp space">
            <div class="input-item icon-relative">
                <label class="label">Scadenza:</label>
                <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
                <i class="far fa-calendar-alt"></i>
            </div>
            <div class="input-item icon-relative">
                <label class="label">CVC:</label>
                <input type="text" class="input" data-mask="000" placeholder="000">
                <i class="fas fa-lock"></i>
            </div>
        </div>
        
        <div class="btn">
        Pay
        </div> 
        
    </div>
</section>
<aside>
    <h2>Informazioni sulla consegna</h2>
        <div class=advise>
            <p>La consegna avverrà al <span>Primo Piano</span> del complesso universitario in <span>Via dell'Università 50</span> di <span>Cesena</span>. Al momento della consegna siete pregati di fornire il vostro <span>Nome</span> e <span>Cognome</span> al corriere.</p>
        </div>
</aside>

