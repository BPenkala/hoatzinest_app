<section>
    <div class="row">
        <div class="large-12 columns">
            <br/><br/>
            <h3>Open Projects - Join one!</h3>
            <br/><br/>
            
            <div class='row'>
                
            
            <?php
            foreach ($rows as $r){
                
                $id = $r->project_id;
            
                echo
                "
                    <div class='large-4 columns panel'>
                        <div class='row'>
                            <div class='large-12 columns large-centered panelGray'>
                                <a href='project/details/".$id."'><h6>$r->project_title</h6></a>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='large-12 columns large-centered panelWhite'>
                                <a href='project/details/".$id."'><img src='"; echo base_url(); echo "assets/uploads/".$id."_thumb.png' alt='project image'/></a>
                                <p>$r->project_what</p>
                            </div>
                        </div>
                    </div>
                ";
            }
            ?>
            </div>
             
        </div> <!-- End Projects -->
    </div>
</section>
