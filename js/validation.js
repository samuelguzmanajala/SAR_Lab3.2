function validacion() {
    let userName = document.getElementById('userName').value;
    let email = document.getElementById('emailInput').value;
    let textArea = document.getElementById('comentarioInput').value;
    let public = document.getElementById('publicInput').value;
    let list = [
        userName, email, textArea, public
    ];


    const response = document.getElementById('response');
    if (validateEmail(email)) {
        if (userName.length == 0 || textArea.length == 0) {
            let HTML = '<p class="response__error">Falta algun campo por completar</p>';
            response.innerHTML = HTML;
        } else {

            var xhr = new XMLHttpRequest();
            xhr.open("POST", '../php/AddBook.php', true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () { // Call a function when the state changes.
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    // Request finished. Do processing here.
                }
            }
            xhr.send("userName=&id=world");
            /*
            let HTML = '<p class="response__correct" >Se envio correctamente</p>'
            response.innerHTML = HTML;
            let xhttp= new XMLHttpRequest();
            xhttp.open("POST","../php/AddBook.php",true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.onreadystatechange==function () {
              if(this.readyState==4 && this.status==200){
                  let response=this.responseText;
              }  
            };
            let data= { userName: userName,emailInput: email, comentarioInput: textArea, PublicInput: public };
            xhttp.send(JSON.stringify(data));*/
        }
    } else {
        let HTML = '<p class="response__error">Email incorrecto</p>';
        response.innerHTML = HTML;
    }

}

function validateEmail(email) {
    let regEmail = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;


    if (regEmail.test(email)) {
        return true;
    } else {
        let result = document.getElementById("textEmail");
        alert(`El correo ${email} no es valido, por favor introduce uno nuevo`);
        return false;
    }

}