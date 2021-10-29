function validateForm() {

    let isFormValid = true; // Init to success, coz we're optimistic like that.. ;)
    const form = document.querySelector('#form_id');
    const formElements = form.querySelectorAll("input, select, textarea, checkbox, radio");

    // form.reportValidity() // Checks the validity of the whole form. Tried it on Chrome 95.0.4638.54 -> it worked, but the error message wouldn;t show until i moved the mouse

    formElements.forEach(function (el) {

        // remove highlight from the element
        $(el).removeClass("uk-form-danger");
        // Is element valid
        if ($(el)[0].checkValidity()) {
            console.log("Valid: " + $(el).attr("name"));
        } else {
            // set form as invalid
            isFormValid = false
            // Highlight target element
            $(el).addClass("uk-form-danger");
            
            console.log("Invalid: " + $(el).attr("name"));
            
            // Add code to show custom error message
        }
    });
    return isFormValid;
}