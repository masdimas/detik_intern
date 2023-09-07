<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
      },
      navigation: false,
    });
  </script>

<script>
    var text_max_judul = 100;
    $('#count_message_judul').html('0 / ' + text_max_judul + ' Karakter ');

    $('#text_judul').keyup(function() {
        var text_length_judul = $('#text_judul').val().length;
        var text_remaining_judul = text_max_judul - text_length_judul;

        $('#count_message_judul').html(text_length_judul + ' / ' + text_max_judul + ' Karakter ');
    });
</script>

<script>
    var text_max_judul_poster = 100;
    $('#count_message_judul_poster').html('0 / ' + text_max_judul_poster + ' Karakter ');

    $('#text_judul_poster').keyup(function() {
        var text_length_judul_poster = $('#text_judul_poster').val().length;
        var text_remaining_judul_poster = text_max_judul_poster - text_length_judul_poster;

        $('#count_message_judul_poster').html(text_length_judul_poster + ' / ' + text_max_judul_poster + ' Karakter ');
    });
</script>

<script>
    var text_max = 1000;
    $('#count_message').html('0 / ' + text_max + ' Karakter ');

    $('#text').keyup(function() {
        var text_length = $('#text').val().length;
        var text_remaining = text_max - text_length;

        $('#count_message').html(text_length + ' / ' + text_max + ' Karakter ');
    });
</script>

<script>
    var text_max_poster = 1000;
    $('#count_message_poster').html('0 / ' + text_max_poster + ' Karakter ');

    $('#text_poster').keyup(function() {
        var text_length_poster = $('#text_poster').val().length;
        var text_remaining_poster = text_max_poster - text_length_poster;

        $('#count_message_poster').html(text_length_poster + ' / ' + text_max_poster + ' Karakter ');
    });
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script>
    function onlyNumberKey(evt) {

        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'click'
        })
    })
</script>

<script>
    $(function() {
        $(document).on('shown.bs.tooltip', function(e) {
            setTimeout(function() {
                $(e.target).tooltip('hide');
            }, 2500);
        });
    });
</script>
