<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <style>
        table{
            margin: 0 auto;
            padding: 15px;
        }
    </style>

</head>
<body>
    <h1 class="text-center" style="background-color: #292929; color: #fff; padding: 15px;">
        Hangar da Aliança Rebelde
    </h1>

    <div class="container w-100">
        <div class="row">
            <div class="col-3">
                <h2>Piloto</h2>
                <?php
                echo form_open("usuarios/novo");
                
                    echo form_label("Nome", "nome");    
                    echo form_input(array(
                    "name" => "nome",
                        "id" => "nome",
                        "class" => "form-control",
                        "maxlength" => "255"
                    ));
                    
                    echo form_label("Email", "email");
                    echo form_input(array(
                        "name" => "email",
                        "id" => "email",
                        "class" => "form-control",
                        "maxlength" => "255"
                    ));
                    
                    echo form_label("Senha", "senha");
                    echo form_password(array(
                        "name" => "senha",
                        "id" => "senha",
                        "class" => "form-control",
                        "maxlength" => "255"
                    ));
                    
                    echo form_button(array(
                        "class" => "btn btn-primary",
                        "content" => "Cadastrar",
                        "type" => "submit"
                    ));
                    
                echo form_close();
                ?>        
            </div>
            <div class="col-9">
                <h2>Naves</h2>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Descrição</td>
                            <td>Preço</td>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        <?php foreach($hangar as $nave) : ?>
                        <tr>
                            <td><?= $nave["nome"] ?></td>
                            <td><?=$nave["descricao"] ?></td>
                            <td><?= numeroEmReais($nave["preco"]) ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</body> 
</html>