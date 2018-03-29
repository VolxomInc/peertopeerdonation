$(document).ready(function() {

     $('.times').each(function(index, el) {
          let $this = $(this);
          let $timer = $this.siblings('.timer');

          var time = $this.text();
                var interval = setInterval(function() {
                  var count = time.split(':');
                  var hour = count[0];
                  var min = count[1];
                  var sec = count[2];
                  var counter = $timer.find("span");
                  counter.eq(0).text(hour);
                  counter.eq(1).text(min);
                  counter.eq(2).text(sec);
                  if (hour == 0 && min == 0) {
                    $timer.css("color","red");
                  }
                  if (sec == 0) {
                    if (min != 0) {
                      counter.eq(1).text(min--);
                      sec = 59;
                    }
                    else if (min == 0 && hour != 0) {
                      counter.eq(0).text(hour--);
                      counter.eq(1).text(min = 59);
                      sec = 59;
                    }
                    else if (hour == 0 && min == 0 && sec == 0) {
                      counter.eq(2).text(0);
                    }
                    if (hour == 0 && min == 0) {
                      $timer.css("color","red");
                    }
                  }
                  counter.eq(0).text(hour);
                  counter.eq(1).text(min);
                  counter.eq(2).text(--sec);
                  time = counter.eq(0).text()+":"+counter.eq(1).text()+":"+counter.eq(2).text();
                  if (hour == 0 && min == 0 && sec == 0) {
                    clearInterval(interval);
                    alert("Time Up");
                  }
                },1000);


     });

});