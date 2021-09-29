<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">
                                Ação executada com sucesso!
                            </div>';
            case 'error':
                $mensagem = '<div class="alert alert-danfger">
                                Ação não executada!
                              </div>';
        }
    }

    $resultados = '';

    foreach($contatos as $cont){
        $resultados.= '<tr>
                            <td>'.$cont->id.'</td>
                            <td>'.$cont->Nome.'</td>
                            <td>'.$cont->DDD.'</td>
                            <td>'.$cont->Numero.'</td>
                            <td>'.$cont->Tipo.'</td>
                            <td>
                                <a href ="editar.php?id='.$cont->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href ="Excluir.php?id='.$cont->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
                        
    }

    $resultados = strlen($resultados) ? $resultados :  '<tr>
                                                            <td colspan="5" class="text-center">
                                                                Nenhum contato encontrado
                                                            </td>
                                                        </tr>';
?>


<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Contato</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>DDD</th>
                    <th>Numero</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </section>
</main>