function validaTudo2(){

var nome = document.getElementById("nome");
	if(nome.value == ""){
		alert("Preencha o campo NOME");
		nome.focus();
		return false;
	}
var cpf = document.getElementById("cpf");
	if(cpf.value==""){
		alert("Preencha o campo CPF");
		cpf.focus();
		return false;
	}
var email = document.getElementById("email");
	if(email.value==""){
		alert("Preencha o campo EMAIL");
		email.focus();
		return false;
}
var telefone = document.getElementById("telefone");
		if(telefone.value==""){
			alert("TELEFONE obrigatório");
			telefone.focus();
			return false;
}
var sexo = document.getElementsByName("sexo");
	if(sexo[0].checked==false && sexo[1].checked==false){
		alert("Escolha ao menos um sexo");
		sexo[0].focus();
		return false;
}
var senha = document.getElementById("senha");
		if(senha.value==""){
			alert("É necessário uma senha");
			senha.focus();
			return false;
}
var rep_senha = document.getElementById("rep_senha");
var senha = document.getElementById("senha");
	if(senha.value != rep_senha.value){
		alert("As senhas não conferem!!!");
		senha.focus();
		return false;
}
return true;
}