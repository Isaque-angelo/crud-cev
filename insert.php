<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-CEV</title>
</head>
<body>
    
    <td>Preencha os campos abaixo :</td>

    <form>
        method="POST" action="index.php?action=adicionar"
        <table>

            <tr><td> Nome:</td></tr>
            <td><input name= "clientname" maxlength="12"></td> 
            
            <tr><td> CPF:</td></tr>
            <td><input name="cpfnumber" maxlength="12"></td>

            <tr><td> Data de Nascimento:</td></tr>
            <td><input name="birthday" maxlength="10"></td>

            <tr><td> Email:</td></tr>
            <td><input name="clientemail" maxlength="25"></td>

            <tr><td> Telefone:</td></tr>
            <td><input name="phonenumber" maxlength="12"></td>

            <tr><td> Endereço:</td></tr>
            <td><input name="clientaddress" maxlength="40"></td>

            <tr><td> CEP:</td></tr>
            <td><input name="Cep" maxlength="9"></td>

            <tr><td> Bairro:</td></tr>
            <td><input name="streetname" maxlength="25"></td>

            <tr><td> Cidade :</td></tr>
            <td><input name="city" maxlength="30"></td>

            <tr><td> UF :</td></tr>
            <td><input name="clientuf" maxlength="2"></td>           
            
            <tr>
                <td> colspan=2 align=right
                    <input type="reset" value="Limpar">
                    <input type="submit" value="Cadastrar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

