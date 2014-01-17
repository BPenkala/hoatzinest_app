
<?php
    foreach ($rows as $r){
    echo"
<section>
    <div class='row collapse'>
        <div class='large-8 columns'>
            <br/><br/>
            <h3>";echo $r['project_title']; echo"</h3>
            <br/><br/>

            <!-- Project Images -->
            <div class='row collapse'>
                <div class='large-4 column'>
                    <h5>Project Image</h5>
                    <a href='"; echo base_url(); echo"assets/uploads/"; echo $r['project_id']; echo".png"; echo"'><img class='left panel nb panelWhite' src='"; echo base_url(); echo "assets/uploads/"; echo $r['project_id']; echo"_thumb.png' alt='project image'/></a>
                </div>
            </div>

            <!-- About Project -->
            <div class='row collapse'>
                <div class='large-12 column'>
                    <h5>About this project</h5>
                    <p>"; echo $r['project_what']; echo"</p>
                    <p>"; echo $r['project_why']; echo"</p>
                </div>
            </div>
            <br/>
            
            
            <!-- Why? -->
            <div class='row collapse'>
                <div class='large-12 column'>
                    <h5>Why build?</h5>
                    <p>"; echo $r['project_why']; echo"</p>
                </div>
            </div>
            <br/>
            
            <!-- How can others help? -->
            <div class='row collapse'>
                <div class='large-12 column'>
                    <h5>How can others help?</h5>
                    <p>"; echo $r['project_how']; echo"</p>
                </div>
            </div>
            <br/>

            <!-- Project Goals -->
            <div class'row collapse'>
                <div class='large-12 column'>
                    <h6>Project Goals</h6>
                    <p>"; echo $r['project_goals']; echo"</p>
                </div>
            </div>
            <br/>
            
            <!-- Project Repo-->
            <div class='row collapse'>
                <div class='large-12 column'>
                    <h6>Repository</h6>
                    <p>"; echo $r['project_repo']; echo"</p>
                </div>
            </div>
            <br/>
        </div> <!-- End Projects -->
        
        
        
            ";}
?>

        <!-- Team Members panel-->
        <div class="large-4 columns">
            <div class="row">
                <br/><br/><br/><br/><br/><br/>
                <div class="large-8 column large-centered">
                    <a href="#" class="button primary radius extrawide "><h5>Join this Team</h5></a>
                </div>
                <br/>
                <div class="large-8 column large-centered">
                    <a href="#comments" class="button secondary radius extrawide "><h5>Discuss Project</h5></a>
                </div>
            </div>


            <br/><br/>
            <div class="row">

                <div class="large-8 columns large-centered panelGray">
                    <h6>Team Members</h6>
                </div>

            </div>
            <div class="row">

                <div class="large-8 columns large-centered panelWhite">

                    <!-- Team Member #1 -->
                    <div class="row ">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Bryan Penkala</strong></p>
                            <p><span>Orlando, FL</span></p>

                        </div>
                    </div>

                    <!-- Team Member #2 -->
                    <div class="row ">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Enok Madrid</strong></p>
                            <p><span>Las Vegas, NV</span></p>

                        </div>
                    </div>

                    <!-- Team Member #3 -->
                    <div class="row collapse">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>John Neilsen</strong></p>
                            <p><span>Los Angeles, CA</span></p>

                        </div>
                    </div>

                    <!-- Team Member #4 -->
                    <div class="row collapse">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Chris Potts</strong></p>
                            <p><span>Chicago, IL</span></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- === End Mid Content === -->

<!-- ======= COMMENTS ======= -->
<section id="comments" class="whiteBg">
    <div class="row collapse">
        <div class="large-8 columns">
            <br/><br/>
            <p><strong>Project Discussion</strong></p>
            <br/><br/>
            <div class="panel">
                <h3>Comment system goes here</h3>
            </div>

        </div>
    </div>
</section>