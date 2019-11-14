<div class="xyz">
    <form name="rn">
        <input type="text" id="tb" name="tb" readonly />
        <input id="gen0" type="button" value="Generate One time Password!" />
    </form>
</div>


@section('page-scripts')
    
<script>

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
                    $('#tb').val(e);
                }
            })
      
    });
    })();
    
    </script>
@endsection
