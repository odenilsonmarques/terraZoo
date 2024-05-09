<div class="container py-5 mt-5">
    <div class="row justify-content-end align-items-start">
        <div class="col-lg-4 col-md-6">
            <p class="fw-bold">
                Quer <span class="text-partner">empreender</span> no segmento pet ao lado de uma das
                marcas mais respeitadas do <span class="text-partner"> Maranhão</span>?
            </p>
        </div>
        <div class="col-lg-4 col-md-12 form-zoo">
            <h3 class="mt-5">Seja nosso parceiro</h3>
            <?php
            // add shordtcodes to form
                $shortcode = '[tc_form recaptcha="true" name="Seja um parceiro Terra Zoo" ]';
                $shortcode.= '[tc_input_text name="Nome" placeholder="Digite seu nome" label="Nome Completo" required="required"]';
                $shortcode.= '[tc_input_email name="E-mail" placeholder="Digite seu e-mail" label="E-mail" required="required"]';
                $shortcode.= '[tc_input_text name="tc_cnpj" placeholder="" label="CNPJ" mask="cnpj" required="required"]';
                $shortcode.= '[tc_checkbox name="tc_checkbox" placeholder="" label="Aceite nosso Aviso de Privaciade e Termos de Uso para continuar" value="on" required="required" classes="form-check-label text-light"]';
                $shortcode.= '[tc_submit value="Enviar" classes="button-subscribe btn btn-primary"]';
                $shortcode.= '[/tc_form]';
                echo do_shortcode($shortcode);

            ?>
        </div>
    </div>
</div>