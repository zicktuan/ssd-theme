        <?php 
            $advertisement1 = ot_get_option( 'mxd_advertisement1_address' );
            $advertisement2 = ot_get_option( 'mxd_advertisement2_address' );
        ?>
        <footer>
            <div id="footer-nav"></div>
            <br>
            <div style="text-align: center;">
                <?php $titleFooter   = ot_get_option( 'bas_title_header' ); ?>
                <?php $addressFooter = ot_get_option( 'mxd_footer_address' ); ?>
                <b><?php echo $titleFooter ?></b>
                <div class="mobile-hide">
                    <?php echo $addressFooter ?>
                </div>
            </div>
        </footer>
        <br>
        <br>
    </div>
    <?php wp_footer(); ?>
    
    <?php if (!empty($advertisement1)): ?>
        <a id="ads-left" style="position: fixed; top: 50px; left: 15px;" href="#" target="_blank" rel="nofollow">
            <img src="<?php echo $advertisement1 ?>" width="185" alt="sim thăng long">
        </a>
    <?php endif ?>
    
    <?php if (!empty($advertisement2)): ?>
        <a id="ads-right" style="position: fixed; top: 50px; right: 15px;" href="#" target="_blank" rel="nofollow">
        <img src="<?php echo $advertisement2 ?>" width="150" alt="sim thăng long">
    </a>
    <?php endif ?>
    
</body>
</html>
