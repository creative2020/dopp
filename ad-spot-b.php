<div class="row">
            <div id="ad-b" class="col-sm-12">
                <div class="ad-leaderboard-b">
                    
                    
    <?php 
        $post_id = '4043'; //2917 is DEV, 4043 is live
        $featured_img = get_post_thumbnail_id( $post_id );
        $ad_2_img = wp_get_attachment_url( $featured_img );
        $ad_2_link = get_post_meta( $post_id, 'ad_spot_2_link', true ); 
        echo '<a href="'.$ad_2_link.'"><img src="'.$ad_2_img.'" width="100%"></a>'; 
    ?>
                    
                </div>
            </div>
        </div>