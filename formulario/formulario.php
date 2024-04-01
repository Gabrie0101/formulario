<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário </title>
</head>
<body>

    <form action="processar_formulario.php" method="post">
        <!-- Ação e método do formulário -->
        <!-- O atributo 'action' especifica para onde os dados serão enviados -->
        <!-- O atributo 'method' define o método HTTP usado para enviar os dados -->

        <!-- Campo de texto para nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <!-- Campo de texto para e-mail -->
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <!-- Campo de senha -->
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

        <!-- Campo numérico para idade -->
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Digite sua idade" required>

        <!-- Caixa de seleção para sexo -->
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>

        <!-- Caixa de texto para mensagem -->
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>

        <!-- Botão de envio -->
        <button type="submit">Enviar</button>
        <!-- 'type="submit"' faz com que o botão envie o formulário -->

    </form>

</body>
</html>
