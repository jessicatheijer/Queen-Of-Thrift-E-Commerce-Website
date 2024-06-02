<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo"><a href="{{ route('home') }}"><img class="img-fluid w-50" src="{{ asset('images/Untitled42_20240520114859.png') }}"></a></div>
        <div class="input_bt">
            <input type="text" id="feedbackInput" class="mail_bt" placeholder="Any feedbacks/problems?" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="#" id="sendButton">Send</a></span>
        </div>
        <div class="location_main">Help Line  Number : <a href="#">+62 822-8478-4602</a></div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">@ 2024 All Rights Reserved. Specially made for you! >3<</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/plugin.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(document).ready(function() {
        // Handle click event on send button
        $('#sendButton').click(function() {
            // Get the value from the input field
            var feedback = $('#feedbackInput').val();
            // Clear the input field
            $('#feedbackInput').val('');
            // Show notification
            alert("Thank you for your message! It will be sent directly to our QoT team.");
            // You can replace the alert with a more styled notification if desired
        });
    });
</script>
