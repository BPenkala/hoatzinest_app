        <!-- New Members panel-->
        <div class="large-4 columns widget">
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelGray widget-head">
                    <h6>New members looking to team up</h6>
                </div>
                <div class="large-2 columns"></div>
            </div>
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelWhite">

                    <!-- Team Member #1 -->
                    <?php
                    foreach ($rows as $r){
                     $id = $r->id; echo"
                    <div class='row'>
                        <div class='large-3 column'>
                            <img class='left' src='assets/img/user.png' alt='user img'>
                        </div>

                        <div class='large-9 columns'>

                            <p><strong>$r->first_name"; echo" "; echo"$r->last_name</strong></p>
                            <p><span>$r->location</span></p>

                        </div>
                    </div>
                    ";}
                    ?>
                
                </div>
                <div class="large-2 columns"></div>
            </div>

        </div>

        <br/>

        <!-- Featured article panel-->
        <div class="large-4 columns right">
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 column large-centered panelGray">
                    <h6>Featured Article</h6>
                </div>
                <div class="large-2 columns"></div>
            </div>
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelWhite">

                    <p class="text-center">
                        <img src="assets/img/foundation5.jpg" alt="article image"/>
                    </p>
                    <h6>Foundation 5 Released!</h6>
                    <time>21 November 2013</time>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deleniti dicta distinctio dolor minus perspiciatis.</p>

                    <a href="#"><p class="text-right">12 comments</p></a>
                    <br/>

                </div>
                <div class="large-2 columns"></div>
            </div>
        </div>
        <br/><br/>

    </div>
</section>