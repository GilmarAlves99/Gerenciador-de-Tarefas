<html>
    <head>
        <meta charset="utf-8" /><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Imbue:wght@100&display=swap" rel="stylesheet">
        <title>Gerenciador de Tarefas</title>
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>
        <form action="tarefas.php">
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                    <br />
                    <br />
                </label>
                <label>
                    Descrição (Opcional):
                    <textarea name="descricao"></textarea>
                    <br />
                    <br />
                </label>
                <label>
                    Prazo (Opcional):
                    <input type="text" name="prazo" />
                    <br />
                    <br />
                </label>
            </fieldset>
                <fieldset>
                    <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name="prioridade" value="baixa" checked />
                        Baixa
                        <input type="radio" name="prioridade" value="media" />
                        Média
                        <input type="radio" name="prioridade" value="alta" />
                        Alta
                    </label>
                    <br />
                    <br />
                </fieldset>
                <fieldset>
                <label>
                    Tarefa concluída:
                    <input type="checkbox" name="concluida" value="sim" />
                    <br />
                    <br />
                </label>
                <input type="submit" value="Cadastrar" />
            </fieldset>
        </form>
        <table class="tabela">
            <tr>
                <th>Tarefa</th>
                <th>Descricao</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td><?php echo $tarefa['nome']; ?> </td>
                    <td><?php echo $tarefa['descricao']; ?> </td>
                    <td><?php echo $tarefa['prazo']; ?> </td>
                    <td><?php echo $tarefa['prioridade']; ?> </td>
                    <td><?php echo $tarefa['concluida']; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>