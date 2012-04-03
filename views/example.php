<?= form_open_multipart($this->uri->uri_string(), 'class="constrained ajax-form form"'); ?>
	    <div class="control-group <?php echo form_has_error('captcha_image') ? 'error' : ''; ?>">
                  <?php echo form_label('Captcha', 'captcha_image', 'class="control-label"'); ?>
                  <div class='controls'>
                        <img id="captcha_img" src="<?= $captcha_image; ?>" alt="CAPTCHA Image" /><br />
                        <input type="input" class="input-large" id="captcha" name="captcha_image" value="" />
                        <span class="help-inline"><?php echo form_error('captcha_image'); ?></span>
                  </div> <!-- controls -->
            </div> <!-- control-group -->
<?= form_close(); ?>