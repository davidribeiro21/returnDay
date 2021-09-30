<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Teste</title>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-6">
                <div class="card teste">
                    <h6 class="card-header text-center font-weight-bold text-uppercase" style="color:white; background-color:#00a550">Insira uma data</h6>

                    <div class="d-flex justify-content-center form_container">

                        <form id="form">
                            <input type="date" class="form-control data" max="9999-12-31" required>

                        </form>
                        <button type="submit" class="btn btn-primary calc">Enviar</button>
                    </div>
                    <section class="msg" id="msg"></section>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #dcdcdc !important;
    }

    .form_container {
        margin-top: 20px;
        padding: 50px;
        align-self: center;
        justify-content: center;
    }


    /* Style buttons */
    .btn {
        background-color: #c0392b !important;
        margin-left: 20px;
        border: none !important;
        color: white !important;
        padding: 12px 20px;
        cursor: pointer;
        font-weight: bolder;
        font-size: 15px;
        transition-duration: 1.4s !important;
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: white !important;
        color: #c0392b !important;
        border-style: solid !important;
    }
</style>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<script>
    $('.calc').on('click', function(a) {
        a.preventDefault();
        var dia = $('.data').val();

        $.ajax({
            url: "calculo.php",
            method: 'get',
            data: 'dia=' + dia,
            success: function(calculo) {
                $('.msg').empty().html(calculo);
            }
        })
    });
</script>