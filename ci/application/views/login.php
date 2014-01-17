
<!-- === Sign In === -->


<section class="form">
    <div class="row">
        <div class="large-6 large-centered columns formpadding">
            <h4 class="form-title greyDark">Sign In</h4>
            <br/>
            <style> .errors {color: red;}</style>
            <?php echo validation_errors();?>
            <?php echo form_open('login/validate_credentials');?>
            <br/>
            <div>
                <?php echo form_input('email', set_value('email', 'Email Address'));?>
            </div>
            <div>
                <?php echo form_password('password', '', 'placeholder="Password"');?>
            </div>

            <div class="row">
                <div class="large-12  columns">
                    <div>
                        <button a class="button secondary radius wide" type=submit>Sign In</button>
                    </div>
            </div>
        <?php echo form_close();?>
        </div>
    </div>
</section>

<!-- === End Sign In === -->
