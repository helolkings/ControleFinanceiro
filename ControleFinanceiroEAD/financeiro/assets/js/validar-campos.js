//Validação de Campos: Tela de Login:
function ValidarLogin(){
    if($("#email").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#email").focus();
        return false;
    }
    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }
    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("Digite uma senha entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

//Validação de Campos: Tela de Cadastro e Dados de Usuário:
function ValidarCadastrarGravarDados(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nome").focus();
        return false;
    }
    if($("#email").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#email").focus();
        return false;
    }
    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }
    if($("#repsenha").val().trim() == ''){
        alert("Preencha o campo obrigatório REPETIR SENHA!");
        $("#repsenha").focus();
        return false;
    }
    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("Digite uma senha entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
    if($("#senha").val().trim() !== $("#repsenha").val().trim()){
        alert("As SENHAS devem ser iguais!");
        $("#repsenha").focus();
        return false;
    }
}

//Validação de Campos: Tela de Alateração e Cadastro de Categoria:
function ValidarAlterarCadastrarCategoria(){
    if($("#nomectg").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nomectg").focus();
        return false;    
    }
}

//Validação de Campos: Tela de Alateração e Cadastro de Conta:
function ValidarAlterarCadastrarConta(){
    if($("#banco").val().trim() == ''){
        alert("Preencha o campo obrigatório BANCO!");
        $("#banco").focus();
        return false;
    }
    if($("#agencia").val().trim() == ''){
        alert("Preencha o campo obrigatório AGENCIA!");
        $("#agencia").focus();
        return false;
    }
    if($("#numero").val().trim() == ''){
        alert("Preencha o campo obrigatório NÚMERO!");
        $("#numero").focus();
        return false;
    }
    if($("#saldo").val().trim() == ''){
        alert("Preencha o campo obrigatório SALDO!");
        $("#saldo").focus();
        return false;
    }
}

//Validação de Campos: Tela de Alateração e Cadastro de Empresa:
function ValidarAlterarCadastrarEmpresa(){
    if($("#empresa").val().trim() == ''){
        alert("Preencha o campo obrigatório EMPRESA!");
        $("#empresa").focus();
        return false;
    }
    if($("#telefone").val().trim() == ''){
        alert("Preencha o campo obrigatório TELEFONE!");
        $("#telefone").focus();
        return false;
    }
    if($("#endereco").val().trim() == ''){
        alert("Preencha o campo obrigatório ENDEREÇO!");
        $("#endereco").focus();
        return false;
    }
}

//Validação de Campos: Tela de Realizar Movimento:
function ValidarRealizarMovimento(){
    if($("#tipo").val() == ''){
        alert("Selecione um TIPO DE MOVIMENTO FINANCEIRO!");
        $("#tipo").focus();
        return false;
    }
    if($("#data").val() == ''){
        alert("Selecione a DATA!");
        $("#data").focus();
        return false;
    }
    if($("#valor").val().trim() == ''){
        alert("Preencha o campo obrigatório VALOR (R$)!");
        $("#valor").focus();
        return false;
    }
    if($("#categoria").val() == ''){
        alert("Selecione a CATEGORIA FINANCEIRA!");
        $("#categoria").focus();
        return false;
    }
    if($("#empresa").val() == ''){
        alert("Selecione uma EMPRESA!");
        $("#empresa").focus();
        return false;
    }
    if($("#conta").val() == ''){
        alert("Selecione uma CONTA!");
        $("#conta").focus();
        return false;
    }
}

//Validação de Campos: Tela de Consultar Movimento:
function ValidarConsultarMovimento(){
    if($("#tipoMov").val() == ''){
        alert("Selecione um TIPO DE MOVIMENTO FINANCEIRO!");
        $("#tipoMov").focus();
        return false;
    }
    if($("#dtInicio").val() == ''){
        alert("Selecione uma DATA DE INÍCIO!");
        $("#dtInicio").focus();
        return false;
    }
    if($("#dtFinal").val() == ''){
        alert("Selecione uma DATA FINAL!");
        $("#dtFinal").focus();
        return false;
    }
}