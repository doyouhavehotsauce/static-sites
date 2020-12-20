<?php get_header(); ?>

<h1>I'm the Front page</h1>

<article class="">
               <div class="" style="background: #c3c3c3; height: 600px;">
                <div>Gallery thing</div>
                </div>

            </article>
         <div class="wrapper-body container">

            
            
            
    
         
            <article class="row">
             <div class="twelve columns m-100"> 
                <h3>Here's a little story all about how</h3>
                <p>My life got fingerstache dreamcatcher pug vaporware meditation readymade cardigan kitsch YOLO freegan 
                    taiyaki mumblecore tbh waistcoat narwhal. Marfa enamel pin ramps, vinyl forage YOLO everyday carry 
                    lyft next level keffiyeh typewriter. Chia enamel pin leggings, tattooed street art art party irony 
                    seitan fixie. Cloud bread kitsch pinterest post-ironic, skateboard tilde af butcher scenester viral 
                    hoodie franzen hexagon. DIY coloring book fashion axe post-ironic vinyl trust fund PBR&B. Raclette 
                    tbh cornhole, food truck brooklyn sartorial helvetica vegan shoreditch neutra keffiyeh mixtape 8-bit.
                    <br><br>
                    Listicle drinking vinegar tilde asymmetrical, hell of mustache bushwick lo-fi +1 adaptogen narwhal 
                    freegan kogi direct trade. Chillwave kale chips shabby chic, ethical farm-to-table kogi sartorial 
                    mumblecore. Af iPhone artisan raw denim meditation williamsburg. Shabby chic jianbing health goth, 
                    humblebrag biodiesel vape retro etsy austin beard cronut irony franzen flexitarian scenester. 
                    Occupy snackwave you probably haven't heard of them jean shorts.
                    <br><br>
                    Forage messenger bag 90's hexagon, normcore bespoke humblebrag pour-over brooklyn microdosing. 
                    Hella 8-bit plaid selfies. Four dollar toast letterpress scenester bitters raclette mlkshk narwhal 
                    craft beer squid hammock neutra. 3 wolf moon vape plaid meh tilde flexitarian.
                    
                </p>
             </div>
         </article>
            
         
         
         <article class="row">
                <div class="four columns recipe-card">              
                    <div class="recipes">
                        <h3>Recipes</h3>
                    </div>
                </div>
                <div class="four columns recipe-card">
                    <div class="special">
                        <h3>Special Order</h3>
                    </div>  
                </div>
                <div class="four columns recipe-card">                 
                    <div class=" menu">
                        <h3>Menu</h3>
                    </div>
                </div>

            </article>

        </div>


         <footer class="">
             <div class="eight columns"> 
                 <div id="map"></div>
             </div>

             <div class="four columns">
                <div class="row social-wrap" style="border-bottom: 1px solid white;">
                    <div class="social-icons" id="facebook-icon"></div>
                    <div class="social-icons" id="pinterest-icon"></div>
                    <div class="social-icons" id="instagram-icon"></div>
                </div>
                 <div class="row" style="border-bottom: 1px solid white;flex-direction:column;">
                     <h4>Hours</h4><br>
                     <ul>
                        <li>Sunday - Thursday: 7:00am - 6:00pm</li>
                        <li>Friday - Saturday: 7:00am - 8:00pm</li>
                     </ul>

                 </div>

                <form class="email-signup">
                    <div class="row">
                      <div class="twelve columns">
                          <p>Wanna stay in touch? Sign up for our emails</p>
                          <form action="email-signup.php" method="post">
                            <section>
                              <label for="exampleEmailInput">First Name</label>
                              <input class="u-full-width" name="email-name" type="text" placeholder="" id="email-name" >
                            </section>
                            <section>
                              <label for="exampleMessage">Email</label>
                              <input class="u-full-width" name="email-address" type="text" placeholder="test@mailbox.com" id="email-address" >
                            </section>
                            <input class="button-primary" id="emailSignup" name="emailSubmit"  type="submit" value="Submit" action="" method="post">

                          </form>
                      </div>
                    </div>
                    
                  </form>


             </div>

            </footer>

<?php get_footer(); ?>
