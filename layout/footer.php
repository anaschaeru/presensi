<footer class="fixed-bottom">
   <div class="container bg-info py-3">
      <div class="row">
         <div class="col text-center">
            <small>&copy; Copyright 2022, <a href="https://www.instagram.com/mudebiproduction" class="text-light" style="text-decoration: none;">Mudebi Production</a></small>
         </div>
      </div>
   </div>
</footer>

<!-- Lokasi -->
<script>
   var x = document.getElementById("demo");

   function getLocation() {
      if (navigator.geolocation) {
         navigator.geolocation.watchPosition(showPosition);
      } else {
         x.innerHTML = "Geolocation is not supported by this browser.";
      }
   }

   function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude +
         "<br>Longitude: " + position.coords.longitude;
   }
</script>

<script type="text/javascript">
   function showTime() {
      var a_p = "";
      var today = new Date();
      var curr_hour = today.getHours();
      var curr_minute = today.getMinutes();
      var curr_second = today.getSeconds();
      if (curr_hour < 24) {
         a_p = "AM";
      } else {
         a_p = "PM";
      }
      if (curr_hour == 0) {
         curr_hour = 24;
      }
      if (curr_hour > 24) {
         curr_hour = curr_hour - 24;
      }
      curr_hour = checkTime(curr_hour);
      curr_minute = checkTime(curr_minute);
      curr_second = checkTime(curr_second);
      document.getElementById('jam').innerHTML = curr_hour + " : " + curr_minute + " : " + curr_second + " " + a_p;
   }

   function checkTime(i) {
      if (i < 10) {
         i = "0" + i;
      }
      return i;
   }
   setInterval(showTime, 500);
</script>

<script type='text/javascript'>
   var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
   var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
   var date = new Date();
   var day = date.getDate();
   var month = date.getMonth();
   var thisDay = date.getDay(),
      thisDay = myDays[thisDay];
   var yy = date.getYear();
   var year = (yy < 1000) ? yy + 1900 : yy;
   document.getElementById('tanggal').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->

<script>
   const scriptURL = 'https://script.google.com/macros/s/AKfycbyl2nQvJz5G6xiQi9_AkNzNsECRKGTp7oC2Rn_NMJf6WfEsU1BlSmRC3bUfe9b9Dnlv/exec'
   const form = document.forms['form-upload-presensi'];

   const btnKirim = document.querySelector('.btn-kirim');
   const btnLoading = document.querySelector('.btn-loading');
   const myAlert = document.querySelector('.my-alert');



   form.addEventListener('submit', e => {
      e.preventDefault()

      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');

      fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
         })
         .then(response => {
            document.forms["form-upload-presensi"].submit();
            console.log('Success!', response)
            myAlert.classList.toggle('d-none');
         })
         .catch(error => console.error('Error!', error.message))
   })
</script>
</body>

</html>