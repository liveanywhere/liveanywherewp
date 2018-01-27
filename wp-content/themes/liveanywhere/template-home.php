<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

    <section class="page-header row" style="background: url(<?php the_post_thumbnail_url(); ?>) center / cover no-repeat;">
         <div class="starter-template container">
            <h1><?php the_title();?></h1>
            <p class="lead">
               Let the world become your home<br>
               <button type="button" onClick="ga('send', 'event', 'Button', 'Click', 'newsletter modal');" class="btn btn-outline-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                 Live Anywhere
               </button>
            </p>
         </div>


<div class='icon-scroll'><div/>


      </section>
      <section class="card-features ">
         <h2 class="text-center mb-3">Your Digital Nomad Concierge</h2>
         <div class="row justify-content-md-center">
             <div class="col-md-auto main-body-text">
               <p class="text-center mb-5">Moving logistics? Co-working space? Reliable wifi? We have you covered. Exchange your monthly lease, mortgage, airbnb budget for a monthly living subscription that has your back.</p>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row mb-4 card-deck">

               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/house-four.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">High Speed Internet</h4>
                     <p class="card-text">Whether you're a world traveler or entreprenuer reliable internet is no longer an issue.</p>
                  </div>
               </div>


               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/house-two.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">Community</h4>
                     <p class="card-text">Coliving and coworking is our mantra. Build lasting friendships within our housing network.</p>
                  </div>
               </div>

               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/house-five.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">Furnished Housing</h4>
                     <p class="card-text">Stop worrying about moving furniture and large items place to place. Live out of your backpack.</p>
                  </div>
               </div>

            </div>
            <div class="row card-deck">

               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/house-three.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">Subscription Based</h4>
                     <p class="card-text">We keep it simple. We charge the same rate across the board so you can set it once and forget it.</p>
                  </div>
               </div>


               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/workspace-one.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">Co-work friendly</h4>
                     <p class="card-text">We provide shared spaces in each location to help engage with others from around the globe.</p>
                  </div>
               </div>

               <div class="card shadow border-light">
                  <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/cowork-two.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h4 class="card-title">Consistent Experience</h4>
                     <p class="card-text">Through our partnerships we are able to provide a pleasent experience no matter which location you are at.</p>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <section class=" mb-5">
         <div class="container">
            <div class="row">
               <div class="col-sm-5  offset-sm-1">
                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/cowork-one.jpg" alt="our credo" class="img-fluid rounded border-light">
               </div>
               <div class="col-sm-5">

                  <h3 class="mb-4">Our Credo</h3>
                  <p>Here at Live Anywhere we pride ourselves on freedom. The freedom to choose where you want to live, and how long you want to live there. Never worry about a lease contract full of legal jargon again.</p>
                  <p>Follow our blog.</p>
                  <a href="http://blog.live-anywhere.co" class="btn btn-outline-primary" target="_blank">Read <i class="fa fa-rss" aria-hidden="true"></i></a>

               </div>
            </div>
         </div>
      </section>
            <section class="cta-bottom row" style="background: url(<?php echo get_site_url(); ?>/wp-content/uploads/2018/01/workspace-two.jpg) center / cover no-repeat;">
         <div class="container newsletter-box shadow border-light text-center">
            <h2 class="mb-3">Sign up to get updates.</h2>
            <p class="mb-3">We're a startup and we're building this for the remote working community.  Folow us on our journey and get notified when we launch.</p>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
         </div>

      </section>

<?php endwhile; ?>
