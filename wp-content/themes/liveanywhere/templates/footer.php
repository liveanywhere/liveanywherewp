
  <footer class="footer pt-5">
      <div class="container">
         <div class="row">


            <div class="col mb-3">
               <h3>Contact Us</h3>
               <p class="footer-contact">
                  <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@live-anywhere.co">info@live-anywhere.co</a></p>
               <p class="footer-contact">   <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:5732569991">573-256-9991</a>
               </p>
               <ul class="list-unstyled list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/liveanywhere.co/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/live_anywhere17" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/liveanywhere.co/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <div class="col mb-3">
               <h3>
                  Company Bio
               </h3>
               <p>We are a random group of strangers brought together through Columbia Start Up Weekend with one goal in mind: solve a current problem. If you're interested in this idea or would like to get more involved, feel free to reach out to us!</p>
               <p>Read our <a href="http://blog.live-anywhere.co" target="_blank">blog <i class="fa fa-rss" aria-hidden="true"></i></a></p>
            </div>

         </div>

      </div>
   <div class="footer-bottom">
      <div class="container text-center pt-2 pb-2">
         <small>&copy; <?php echo date("Y"); ?> Live Anywhere</small>
      </div>

   </div>
   </footer>

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content shadow border-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Notified</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p>Enter your email address below to get regular updates on Live Anywhere and to find out when we officially launch.</p>
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
      </div>
    </div>
  </div>
</div>