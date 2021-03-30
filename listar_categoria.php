<?php
try 
{
    include 'DAO/CategoriaDAO.php';

    $categoria_dao = new CategoriaDAO();

    $lista_categorias = $categoria_dao->getAllRows();

} catch (Exception $e) {
    echo $e->getMessage();
}

?>


<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>LISTAR CATEGORIA</title>
</head>

<body>
    <div id="global">
        <main>
            <h4>
                Lista de Categorias
            </h4>

            <table>
                <thead>
                    <tr>
                        <th scope="col">Ações</th>
                        <th scope="col">Id</th>
                        <th scope="col-lg-9">Descrição:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_categorias as $cat) : ?>
                        <tr>
                            <th scope="row">
                                <a href="cadastrar_categoria.php?id=<?= $cat->id ?>">
                                    Abrir
                                </a>
                            </th>
                            <td> <?= $cat->id ?> </td>
                            <td> <?= $cat->descricao  ?> </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>