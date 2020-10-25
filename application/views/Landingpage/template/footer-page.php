 <!-- Footer -->
 <footer class="page-footer font-small stylish-color-dark pt-4">
     <!-- Footer Links -->
     <div class="col-md-12 text-center">
         <h3 id="find-us">Find Us!</h3>
     </div>
     <div id="map">
     </div>
     <div class="container text-center text-md-left">
         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-4 mx-auto">
                 <!-- Content -->
                 <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Website</h5>
                 <p>Website ini dikelola oleh Biro Kantor Media Informasi BEM UNDIP 2020</p>
                 <p>Contact Person BEM Undip 2020 : <br><b> 0896 69475094 (Afif)</b></p>
             </div>
             <!-- Grid column -->
             <hr class="clearfix w-100 d-md-none">
             <!-- Grid column -->
             <div class="col-md-2 mx-auto">
                 <!-- Links
                 <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                 <ul class="list-unstyled">
                     <li>
                         <a href="#!">Link 1</a>
                     </li>
                     <li>
                         <a href="#!">Link 2</a>
                     </li>
                     <li>
                         <a href="#!">Link 3</a>
                     </li>
                     <li>
                         <a href="#!">Link 4</a>
                     </li>
                 </ul> -->
             </div>
             <!-- Grid column -->
             <hr class="clearfix w-100 d-md-none">
             <!-- Grid column -->
             <div class="col-md-2 mx-auto">
                 <!-- Links
                 <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                 <ul class="list-unstyled">
                     <li>
                         <a href="#!">Link 1</a>
                     </li>
                     <li>
                         <a href="#!">Link 2</a>
                     </li>
                     <li>
                         <a href="#!">Link 3</a>
                     </li>
                     <li>
                         <a href="#!">Link 4</a>
                     </li>
                 </ul> -->
             </div>
             <!-- Grid column -->
             <hr class="clearfix w-100 d-md-none">
             <!-- Grid column -->
             <div class="col-md-2 mx-auto">
                 <!-- Links
                 <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                 <ul class="list-unstyled">
                     <li>
                         <a href="#!">Link 1</a>
                     </li>
                     <li>
                         <a href="#!">Link 2</a>
                     </li>
                     <li>
                         <a href="#!">Link 3</a>
                     </li>
                     <li>
                         <a href="#!">Link 4</a>
                     </li>
                 </ul> -->
             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->
     </div>
     <!-- Footer Links -->


     <hr>

     <!-- Social buttons -->
     <div class="container ">
         <div class="row justify-content-center">
             <a target="_blank" href="">
                 <span class="fa-stack fa-2x">
                     <i class="fas fa-circle fa-stack-2x text-primary"></i>
                     <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                 </span>
             </a>
             <a target="_blank" href="https://twitter.com/BEMUndip_">
                 <span class="fa-stack fa-2x">
                     <i class="fas fa-circle fa-stack-2x text-primary"></i>
                     <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                 </span>
             </a>
             <a target="_blank" href="https://www.instagram.com/bemundip/">
                 <span class="fa-stack fa-2x">
                     <i class="fas fa-circle fa-stack-2x text-primary"></i>
                     <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                 </span>
             </a>
             <a target="_blank" href="https://www.youtube.com/user/BEMKMUNDIP">
                 <span class="fa-stack fa-2x">
                     <i class="fas fa-circle fa-stack-2x text-primary"></i>
                     <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                 </span>
             </a>
             <a target="_blank" href="https://timeline.line.me/user/_dYVyZVTIGq9mhKvJ7qPd1nWaMktTG-oKHs7Xxwc?utm_medium=windows&utm_source=desktop&utm_campaign=OA_Profile">
                 <span class="fa-stack fa-2x">
                     <i class="fas fa-circle fa-stack-2x text-primary"></i>
                     <i class="fab fa-line fa-stack-1x fa-inverse"></i>
                 </span>
             </a>
         </div>
     </div>

     <!-- Social buttons -->

     <!-- Copyright -->
     <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a style="text-decoration: none;" href="<?php echo base_url() ?>"> bemundip.com</a> Make With Love From <a style="text-decoration: none;" href="https://www.instagram.com/sarafdesign.id/"> Saraf Design</a>
     </div>
     <!-- Copyright -->

 </footer>
 <!-- Footer -->
 <!-- <style>
     #map {
         width: 100%;
         height: 500px;
         background-color: grey;
         margin-top: 50px;
     }

     #find-us {
         margin-top: 20px;
     }
 </style> -->
 
 <script src="<?php echo base_url() . '../bemundip/assets/modules/aos/aos.js' ?>"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 <script>
     var overlay = document.getElementById("overlay");

     window.addEventListener('load', () => {
         overlay.classList.add('overlay-finish');
     })

   
 </script>
 <!-- data aos -->
 <script>
     AOS.init({
         once: 'true',
         offset: 300,
         duration: 1000,
     });
 </script>

 


 <script>
     $(document).ready(function() {
         $('#tombol-submit').on('click', (e) => {
             e.preventDefault();
             var base_url = 'http://localhost/bemundip/';
             var url = 'Page/aspirasi';

             var name = $('#name').val();
             var aspirasi = $('#aspirasi').val();

             if (aspirasi.length == 0) {
                 Swal.fire({
                     icon: 'error',
                     title: 'Aspirasi gagal ditambahkan',
                     text: 'Diisi dulu mas/mba aspirasinya'
                 })
             } else {
                 $.ajax({
                     url: base_url + url,
                     type: 'POST',
                     dataType: "JSON",
                     data: {
                         name: name,
                         aspirasi: aspirasi
                     },
                     error: function() {
                         Swal.fire({
                             icon: 'error',
                             title: 'Aspirasi gagal ditambahkan',
                             text: 'Diisi dulu mas/mba aspirasinya',
                             button: true
                         }).then(function() {
                             console.log('sth');
                             location.reload();
                         })
                     },
                     success: function(data) {
                         Swal.fire({
                             icon: 'success',
                             title: 'Aspirasi Berhasil ditambahkan',
                             text: 'Makasih aspirasinya:)',
                             button: true
                         }).then(function() {
                             console.log('sth');
                             location.reload();
                         })
                     }
                 });
             }

         });
     });
 </script>