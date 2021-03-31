function validateContact() {
    fieldsValidated = false;
    fieldsValidated = 0;

    for (i = 0; i < document.forms["contactForm"].getElementsByTagName("input").length; i++) {
        if (document.forms["contactForm"][i].type === "text" || document.forms["contactForm"][i].type === "date") {
                if (document.forms["contactForm"][i].value === "") {
                        $('.alert').removeClass("d-none").addClass('show');
                        document.forms["contactForm"][i].classList.add("required-input");
                } else {
                        document.forms["contactForm"][i].classList.remove("required-input");
                        fieldsValidated += 1;
                }
          }
    }

    if (fieldsValidated === document.forms["contactForm"].getElementsByTagName("input").length){
            document.forms["contactForm"].submit();
    }
}

function closeAlert() {
    $('.alert').addClass('d-none').removeClass('show');

}

