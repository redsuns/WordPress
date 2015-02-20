<style>
    .form-control-wrap{
        width: 100%;
    }
    .twenty_percent{
        width: 20%;
    }
</style>

<form action="" method="post">
    <input type="hidden" value="true" name="site_infos">
    
    <div class="wrap">
        <h2>Informações do Site</h2>
        <p>Gerencie aqui as informações básicas do site como disclaimers, telefones e emails para contato</p>

        <br />
        <table class="table table-striped table-hover widefat">
            <thead>
                <tr>
                    <th class="twenty_percent">Opção</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Disclaimer rodapé</td>
                    <td>
                        <input type="text" class="form-control form-control-wrap" name="footer_disclaimer" 
                               value="<?php echo get_option('footer_disclaimer'); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td>
                        <input type="text" class="form-control form-control-wrap" name="phone" 
                               value="<?php echo get_option('phone'); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" class="form-control form-control-wrap" name="email" 
                               value="<?php echo get_option('email'); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Endereço</td>
                    <td>
                        <input type="text" class="form-control form-control-wrap" name="address" 
                               value="<?php echo get_option('address'); ?>">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Gravar alterações" class="button button-primary">
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</form>
