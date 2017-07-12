<div class="wrap">
  <h2>Easy Web Analytics Integration</h2>
  <form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>
    <?php settings_fields('googleanalyticsad'); ?>
    <input type="hidden" name="action" value="update" />
    <p>
            <b>Copy and paste Tracking Code into following area.</b>
            <textarea style="width:90%; height:200px; border-radius:5px;"  name="web_property_tc"><?php echo get_option('web_property_tc'); ?></textarea>
           </p>
    
    <p class="submit">
      <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
  </form>
  <p>
      <table class="form-table">
      <tr valign="top">
        <td><p>
            <b>Instructions</b> </p>
          <ol>
            <li data-md="83">
              <div>
                <div><strong>To set up the web tracking code:</strong></div>
                <div>
                  <ol>
                    <li>Find the tracking code snippet for your property.<br>
                      Sign in to <a href="https://www.google.com/analytics/web/#home/" target="_blank">your Google Analytics account</a>, and select the <a href="https://support.google.com/analytics/answer/6132368" data-answer="6132368" target="_blank">Admin</a> tab. From the ACCOUNT and PROPERTY columns, select the property you&rsquo;re working with. Click <strong>Tracking Info &gt; Tracking Code</strong>. </li>
                    <li>Enter on tracking code.</li>
                    <li>Copy the tracking code in textarea.</li>
                    <li>Paste it here </li>
                  </ol>
                </div>
              </div>
            </li>
          </ol>
          <b>Screen-shoot Help</b>
          <ol>
            <li>
              <div><?php echo '<img src="' . plugins_url( 'images/step-1.png', __FILE__ ) . '" width="95%"  > ';?></div>  </li>
              
                    <li><br>
              <div><?php echo '<img src="' . plugins_url( 'images/step-2.png', __FILE__ ) . '" width="95%" > ';?></div>
          </li>
          </ol></td>
      </tr>
      </tr>
      
    </table>

  
  </p>
</div>
