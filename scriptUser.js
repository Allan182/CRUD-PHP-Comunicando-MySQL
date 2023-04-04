function cadastrar() {
    document.getElementById("form").action = "../Classes/Usuario/UsuarioCriar.php";
}

function logar() {
    document.getElementById("form").action = "../Classes/Usuario/conferirLogin.php";
}

function listar() {
    document.getElementById("form").action = "../Classes/Usuario/UsuarioLer.php";
}


function editar() {
    document.getElementById("form").action = "editar.php";
}

function excluir() {
    document.getElementById("form").action = "excluir.php";
}

function editado() {
    document.getElementById("form").action = "editado.php";
}

function excluido() {
    document.getElementById("form").action = "excluido.php";
}

function cadastrarUsuario() {
    document.getElementById("form").action = "cadastrarUsuario.php";
}

function listarPeloID() {
    document.getElementById("form").action = "../Classes/Usuario/UsuarioLer.php";
}
