 function validacion() {
    let userName=document.getElementById('userName').value;
    let email=document.getElementById('emailInput').value;
    let textArea=document.getElementById('comentarioInput').value;
    let public=document.getElementById('publicInput').value;
    let list=[
        userName,email,textArea,public
    ];
    const response=document.getElementById('response');
    if(userName.length==0 || textArea.length==0 ){
        let HTML='<p class="response__error">Falta algun campo por completar</p>';
        response.innerHTML=HTML;
    }else{
        let HTML='<p class="response__correct" >Se envio correctamente</p>'
        response.innerHTML=HTML;
    }
}