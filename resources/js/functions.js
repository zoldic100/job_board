
function clearInput(id) {
    var inputElement = document.getElementById(id);
    if (inputElement) {
      inputElement.value = ' ';
    }
    var formElement = document.getElementById('formId');
    if (formElement) {
      formElement.submit();
    }
  }