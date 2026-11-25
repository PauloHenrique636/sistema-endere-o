<?php 
include "acoes.php";

$enderecos = buscarTabela("endereços");
$VERIFICAR_LINHAS = $enderecos->num_rows > 0;
?>

<?php if($VERIFICAR_LINHAS): ?>
    <?php foreach($enderecos as $endereco): ?>
        <h2>DADOS</h2>
        <ul>
            <li>
                <?php echo $endereco['cep'] ?>
                <?php echo $endereco['logradouro'] ?>
                <?php echo $endereco['bairro'] ?>
                <?php echo $endereco['localidade'] ?>
                <?php echo $endereco['uf'] ?>
                <?php echo $endereco['estado'] ?>
                <?php echo $endereco['regiao'] ?>
                <?php echo $endereco['ddd'] ?>
            </li>
        </ul>
        <?php endforeach ?>
        <?php else: ?>
            <p>NENHUM <b>CEP</b> em nosso sistema!</p>
            <?php endif ?>