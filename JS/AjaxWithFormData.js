function snedAjaxRequest() {
    /** Method #1 **/
    // queryArray = {};
    // queryArray.posted_var_name = currentVarName;
    // queryArray.posted_form_data: $("#form-id").serialize(),
    // postQuery = buildVar(queryArray);
    /** END: Method #1 **/

    $.ajax({
        method: "POST",
        url: "membership/apply",

        // Method #1
        // data: postQuery,
        // END: Method #1

        // Method #2
        data: {
            posted_var_name: currentVarName,
            posted_form_data: $("#form-id").serialize(),
        },
        dataType: 'json',
        // END: Method #2

        beforeSend: function(){
            //
        },
        success: function (returnObj) {
            console.log(returnObj);
        },
        complete: function (){
            //
        },
        always: function () {
            //
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}