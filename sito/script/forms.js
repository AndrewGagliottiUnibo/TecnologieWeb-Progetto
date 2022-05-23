function formhash(form, password) {
  // Crea un elemento di input che verrà usato come campo di output per la password criptata.
  var p = document.createElement("input");
  // Aggiungi un nuovo elemento al tuo form.
  form.appendChild(p);
  p.name = "p";
  p.type = "hidden"
  p.value = hex_sha512(password.value);
  // Assicurati che la password non venga inviata in chiaro.
  if (password.value != "") {
    password.value = " ";
  } else {
    password.value = "";
  }

  // Come ultimo passaggio, esegui il 'submit' del form.
  form.submit();
}

function formModifyHash(form, old_Password, new_Password, confirm_Password) {
  // Crea un elemento di input che verrà usato come campo di output per la password criptata.
  if (new_Password.value !== confirm_Password.value) {
    return;
  }
  var oldPassword = document.createElement("input");
  var newPassword = document.createElement("input");
  // Aggiungi un nuovo elemento al tuo form.
  form.appendChild(oldPassword);
  form.appendChild(newPassword);
  oldPassword.name = "oldPassword";
  oldPassword.type = "hidden"
  oldPassword.value = hex_sha512(old_Password.value);
  newPassword.name = "newPassword";
  newPassword.type = "hidden"
  newPassword.value = hex_sha512(new_Password.value);
  // Assicurati che la password non venga inviata in chiaro.
  if (old_Password.value != "" || new_Password.value != "") {
    old_Password.value = " ";
    new_Password.value = " ";
  } else {
    old_Password.value = "";
    new_Password.value = "";
  }
  // Come ultimo passaggio, esegui il 'submit' del form.

  form.submit();
}

var check = function () {
  if (document.getElementById('password_new').value ==
    document.getElementById('password_confirmation').value) {
    document.getElementById('message').innerHTML = 'Le password combaciano';
  } else {
    document.getElementById('message').innerHTML = 'Le password non combaciano';
  }
}