<?php get_header(); ?>

         <!-- <nav class="nav ">
            <a class="nav-link" href="./index.html">Logo</a>
            <a class="nav-link active" href="./index.html">Home</a>
            <a class="nav-link" href="./history.html">History</a>
            <a class="nav-link" href="./recipes.html">Recipes</a>
         </nav> -->
         <div id="mobile-nav-wrap">
            <div class="nav-hamburger">&times;</div>
            <nav class="nav-mobile">
                <ul>
                    <li><a class="nav-link" href="./index.html">Logo</a></li>
                    <li><a class="nav-link active" href="./index.html">Home</a></li>
                    <li><a class="nav-link" href="./history.html">History</a></li>
                    <li><a class="nav-link" href="./recipes.html">Recipes</a></li>
                </ul>              
             </nav>
         </div>

         <div class="wrapper-body">
             <div id="menu-toggle"><a id="show-menu">Menu</a></div>

            
            
            
            <article class="row">
               <div class="twelve columns" style="background: #c3c3c3; height: 600px;">
                <div>Gallery thing</div>
                </div>

            </article>
         
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


         <footer class="row">
             <div class="eight columns" style="border:1px solid white;height:100%;"> 
                 map
             </div>

             <div class="four columns">
                <div class="row social-wrap" style="border-bottom: 1px solid white;">
                    <div class="social-icons" id="facebook-icon"></div>
                    <div class="social-icons" id="pinterest-icon"></div>
                    <div class="social-icons" id="instagram-icon"></div>
                </div>
                 <div class="row" style="border-bottom: 1px solid white;">
                     <h4>Hours</h4>
                     <ul>
                        <li>Sunday - Thursday: 7:00am - 6:00pm</li>
                        <li>Friday - Saturday: 7:00am - 8:00pm</li>
                     </ul>

                 </div>

                <form class="email-signup">
                    <div class="row">
                      <div class="twelve columns">
                          <p>Wanna stay in touch? Sign up for our emails</p>
                          <form action="" method="post">
                            <section>
                              <label for="exampleEmailInput">First Name</label>
                              <input class="u-full-width" name="email-name" type="text" placeholder="" id="email-name" required>
                            </section>
                            <section>
                              <label for="exampleMessage">Email</label>
                              <input class="u-full-width" name="email-address" type="text" placeholder="test@mailbox.com" id="email-address" required>
                            </section>
                            <input class="button-primary" name="email-submit"  type="submit" value="Submit">
                          </form>
                        

                      </div>
                    </div>
                    
                  </form>


             </div>

            </footer>

           <?php get_footer(); ?>
