      $(document).ready(function() {
            var daysCount = document.querySelector('#days_count');
         var hoursCount = document.querySelector('#hours_count');
          var minsCount = document.querySelector('#minutes_count');
           var secsCount = document.querySelector('#seconds_count');

           var expiry = document.querySelector('#expiry_section');
           var timer = document.querySelector('#timer_section');
      
        //Set the date we're counting down to
        var countDownDate = new Date('2022/12/12 18:30:00').getTime();

        //Update the countDown every 1 sec

        var x = setInterval(function() {
            //Get today's date and time
            var now = new Date().getTime();

            //Find the distance between now and the count down date

            var distance = countDownDate - now;

            //Time calculations for days, hours, mins, and secs

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
             var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              //Display the result in the element
           daysCount.innerText = days;
           hoursCount.innerText = hours;
           minsCount.innerText = minutes;
           secsCount.innerText = seconds;

              //If countdown is finished, show some text

              if (distance < 0) {
                  clearInterval(x);
                  expiry.style.display = "block";     
                  timer.style.display = "none";        }
        },1000);
});