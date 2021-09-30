<script>
    $(function() {
        $("#dialog").dialog();
    });
</script>

<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$dia = $_GET['dia'];
$dataexib = strftime('%A', strtotime($dia));

$dataexibicao = ucwords($dataexib); 

$diaMes = date('d-m', strtotime($dia));

$natal = date('d-m', strtotime('0000-12-25'));
$diaCriancas = date('d-m', strtotime('0000-10-12'));
$finados = date('d-m', strtotime('0000-11-02'));
$trabalho = date('d-m', strtotime('0000-05-01'));


if ($diaMes === $natal) { ?>
    <div id="dialog" title="Resultado" class="dialog">
        <p style="color: green;">O Natal caiu numa: <?= $dataexibicao ?>!</p>
    </div>
<?php
} elseif ($diaMes === $diaCriancas) { ?>
    <div id="dialog" title="Resultado" class="dialog">
        <p style="color: green;">O dia das crianças caiu numa: <?= $dataexibicao ?>!</p>
    </div>
<?php
}
elseif ($diaMes === $finados) { ?>
    <div id="dialog" title="Resultado" class="dialog">
        <p style="color: green;">O dia de Finados caiu numa: <?= $dataexibicao ?>!</p>
    </div>
<?php
}elseif ($diaMes === $trabalho) { ?>
    <div id="dialog" title="Resultado" class="dialog">
        <p style="color: green;">O dia do trabalhador caiu numa: <?= $dataexibicao ?>!</p>
    </div>
<?php
}else{ ?>
    <div id="dialog" title="Resultado" class="dialog">
        <p style="color: green;">O dia da semana é: <?= $dataexibicao ?>!</p>
    </div>
<?php
}
?>