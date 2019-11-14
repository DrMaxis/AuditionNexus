(function() {

    const submitButton = $("#gen0");

    /* submit form */

    submitButton.click(function(event) {
        event.preventDefault();
            $.ajax({
                method: "GET",
                url: submitUrl,
               

                success: function(e) {
                    console.log(e);
                }
            })
      
    });
})();







