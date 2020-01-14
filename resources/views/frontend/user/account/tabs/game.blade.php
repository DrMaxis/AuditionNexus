<div class="xyz">
    @if($logged_in_user->otp == 1 && $logged_in_user->otp_code != null)

    @if($logged_in_user->otp_expiration_date->isPast() )

    <div class="col-md-6">
        <p>
            Your OTP has expired and you will need to generate a new one.

        </p>
        <form name="rn">
            <input type="text" id="tb" name="tb" readonly />
            <input id="gen0" data-userID="{{$logged_in_user->id}}" type="button" value="Generate One time Password!" />
        </form>
    </div>
    @else
    <div class="col-md-6">
            <p id="otp_code"> Your currecnt OTP is:
            <span>
                <button type="button" id="otp_reveal_btn" class="btn btn-primary" data-clipboard-text="{{$logged_in_user->otp_code}}">Reveal & Copy</button>
            </span>
        </p>
        <input type="hidden" value="{{$logged_in_user->otp_code}}" id="otp_hidden">
        <p>
            Your OTP will expire at {{ timezone()->convertToLocal($logged_in_user->otp_expiration_date) }}
            ({{ $logged_in_user->otp_expiration_date->diffForHumans() }})

        </p>
    </div>
    @endif

    @else

    <form name="rn">
        <input type="text" id="tb" name="tb" readonly />
        <input id="gen0" data-userID="{{$logged_in_user->id}}" type="button" value="Generate One time Password!" />
    </form>
    @endif
</div>


@section('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
<script>

new ClipboardJS('#otp_reveal_btn');

</script>
<script>
    (function() {
    
    const submitButton = $("#gen0");
    
    /* submit form */
    
    submitButton.click(function(event) {
        event.preventDefault();
        var userID = $('#gen0').attr('data-userID');
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


<script>
    var otp = "{{$logged_in_user->otp_code}}";
$('#otp_reveal_btn').on('click', function() {
    
    if($('#otp_reveal_btn').text() != 'Reveal & Copy') {
        $('#otp_reveal_btn').text('Reveal & Copy');
    } else {
        $('#otp_reveal_btn').text(otp);        
    }
})


</script>
@endsection