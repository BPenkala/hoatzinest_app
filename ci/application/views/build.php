<section>
    <div class="row">
        <div class="large-12 columns">
            <h2>Create a Project</h2>
            <p>* Denotes Required Field</p>
        </div>
    </div>

    <!-- SECTION 1 - TITLE -->
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('build/create');?>
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">1</span>
            <h3>Project Title *</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <input type="text" name="project_title" id="project_title" placeholder="HoatziNest - Ideas and Team building platform for web..."/>
                </div>
                <div class="large-4 columns">
                    <p>Example: Real-time Code Editor</p>
                    <p>Example: Mobile App Development</p>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 2 - DETAILS-->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">2</span>
            <h3>Project Details</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns textbox">
            <div class="row">
                <div class="large-8 columns left">
                    <span>This project team will need members with expertise in the following areas:</span>
                    <p>Choose one or more</p>
                </div>

            </div>

            <div class="row">
                <div class="large-8 columns">
                    <div class="row checkboxes">
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="developers" name="developers" type="checkbox"/><label for="developers">Developers</label></li>
                                <li><input id="engineers" name="engineers"  type="checkbox"/><label for="engineers">Engineers</label></li>
                                <li><input id="managers" name="managers"  type="checkbox"/><label for="managers">Project Managers</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="designers" name="designers"  type="checkbox"/><label for="Designers">Designers</label></li>
                                <li><input id="Directors" name="directors"  type="checkbox"/><label for="Directors">Art Directors</label></li>
                                <li><input id="Artists" name="artists" type="checkbox"/><label for="Artists">Artists</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns">
                            <ul>
                                <li><input id="Marketers" name="marketers" type="checkbox"/><label for="Marketers">Marketers</label></li>
                                <li><input id="Animators" name="animators" type="checkbox"/><label for="Animators">Video/Animators</label></li>
                                <li><input id="Writers" name="writers" type="checkbox"/><label for="Writers">Writers</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_what">What are you creating?</label>
                    <input type="text" id="project_what" class="large-input" name="project_what" size="9999"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_why">Why are you creating this?</label>
                    <input type="text" id="project_why" class="large-input" name="project_why"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_how">How can others help you?</label>
                    <input type="text" id="project_how" class="large-input" name="project_how"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_goals">What are the main goals you wish to accomplish with this project?</label>
                    <input type="text" id="project_goals" class="large-input" name="project_goals"></input>
                </div>
                <div class="large-4 columns">
                    <p>Example: Build an open source community</p>
                    <p>Example: Launch web and mobile app together</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_repo">GitHub Repository (optional)</label>
                    <input id="project_repo" name="project_repo" type="text" placeholder="Project github url"/>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
          <!-- SECTION 3 - IMAGES -->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">3</span>
            <h3>Project Image</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    
                    <label for="file">Add Images...</label>
                    <br/><label for="file">JPEG, PNG, GIF or BMP formats only.</label>
                    <input id="file" type="file" name="userfile" size="20" />                       
                    <input class="button secondary radius wide right" type="submit" name="submit" value="Submit">
                    <br/>

                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
    <?php echo form_close(); ?>
 
    <br/><br/>

</section>

    
