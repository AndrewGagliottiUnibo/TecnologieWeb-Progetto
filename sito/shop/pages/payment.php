<!-- <?php
        include_once ROOT_PATH . "/sito/script/purchase.js";
        ?> -->

<section class="payment">
    <div class="payment-logo">
        <p>p</p>
    </div>

    <form id="payment_form" action="?page=commit_order" method="post" class="payment_form">
        <label for="proprietario" class="label_data">Proprietario:</label>
        <input id="proprietario" type="text" class="input_data" placeholder="Nome Cognome" required>
        
        <label for="carta" class="label_data">Numero carta:</label>
        <input id="carta" type="text" class="input_data" data-mask="0000 0000 0000 0000" placeholder="Numero carta" required>

        <label for="scadenza" class="label_data">Scadenza:</label>
        <input id="scadenza" type="text" name="expiry-data" class="input_data" data-mask="00 / 00" placeholder="00 / 00" required>

        <label for="cvc" class="label_data">CVC:</label>
        <input id="cvc" type="text" class="input_data" data-mask="000" placeholder="000" required>
     
        <input id="payment" class="pay" type="submit" value="Paga">
    </form>
</section>
<aside>
    <h2>Informazioni sulla consegna</h2>
    <div class=advise>
        <p>La consegna avverrà al <span>Primo Piano</span> del complesso universitario in <span>Via dell'Università 50</span> di <span>Cesena</span>. Al momento della consegna siete pregati di fornire il vostro <span>Nome utente</span> e <span>E-mail</span> al corriere.</p>
    </div>
</aside>