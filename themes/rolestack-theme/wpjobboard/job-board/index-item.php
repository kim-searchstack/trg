<?php 

/**
 * Job list item
 * 
 * This template is responsible for displaying job list item on job list page
 * (template index.php) it is alos used in live search
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 */

 /* @var $job Wpjb_Model_Job */

?>

    <div class="wpjb-grid-row wpjb-click-area <?php wpjb_job_features($job); ?>">
    
        <div class="wpjb-grid-col wpjb-col-main wpjb-col-title">
            
            <div class="wpjb-line-major">
                <?php if($job->doScheme("job_title")): else: ?>
                <a href="<?php echo wpjb_link_to("job", $job) ?>" class="wpjb-job_title wpjb-title"><?php echo esc_html($job->job_title) ?></a>
                <?php endif; ?>
                
                <?php if($job->isNew()): ?>
                <span class="wpjb-bulb"><?php _e("new", "wpjobboard") ?></span>
                <?php endif; ?>
                

                <?php if(isset($job->getTag()->type[0])): ?>
                <span class="wpjb-job_type wpjb-sub-title" style="color:#<?php echo $job->getTag()->type[0]->meta->color ?>">
                    <?php echo esc_html($job->getTag()->type[0]->title) ?>
                </span>
                <?php endif; ?>
                
                
            </div>
            
            <div class="wpjb-line-minor">
                <?php if($job->doScheme("company_name")): else: ?>
                <span class="wpjb-sub wpjb-company_name"><?php echo esc_html($job->company_name) ?></span>
                <?php endif; ?>

                <span class="wpjb-sub wpjb-sub-opaque wpjb-job_location">
                    <span class="wpjb-glyphs wpjb-icon-location"><?php echo esc_html($job->locationToString()) ?></span>
                </span>

                <span class="wpjb-sub wpjb-sub-opaque wpjb-sub-right wpjb-job_created_at">
                    <?php echo wpjb_date_display("M, d", $job->job_created_at, false); ?>
                </span>

                <div class="recent-salary-container"><?php esc_html_e($job->meta->salary->value()) ?></div>


                <?php do_action( "wpjb_tpl_index_item", $job->id ) ?>
            </div>
        </div>
        

    </div>