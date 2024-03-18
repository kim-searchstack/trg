<?php
/**
 * Template Name: Contact Us Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<section class="page-banner contact_us">
    <div class="inner_page_banner">
     <div class="banner_left_page">
        <div class="left_babner_title animate-on-scroll" data-delay="1">
           Let’s talk
       </div>
       <div class="left_banner_desc animate-on-scroll" data-delay="2">
         Get in contact with our team
     </div>
 </div> 
 <div class="right_banner_row animate-on-scroll" data-delay="3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9930.721642307635!2d-0.140289!3d51.519079!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d5845c8f593%3A0x8f5f2d804250b1f0!2strg%20recruitment!5e0!3m2!1sen!2suk!4v1694096180304!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

<section id="mobile_swap" class="get_intouch" style="display: none;">
    <div class="inner_getintouch">
        <div class="contact_imfo col-md-6 animate-on-scroll" data-delay="3">
            <div class="contatc_tikle animate-on-scroll" data-delay="4">Contact</div>
            <div class="full_ms-row">
                <div class="col-md-6 bottom_contact_info">
                    <div class="inner_titles animate-on-scroll" data-delay="5">Email</div>
                    <div class="inner_info animate-on-scroll" data-delay="6">
                        <a href="mailto:enquiries@trg-uk.com">enquiries@trg-uk.com</a>
                        <div id="Social_media" class="inner_titles animate-on-scroll" data-delay="7">Social</div>
                        <div id="social_icons_link" class="inner_info animate-on-scroll" data-delay="8">
                           <a href="#"><img src="/wp-content/uploads/2023/09/Vector.svg"></a>
                           <a href="#"><img src="/wp-content/uploads/2023/09/Vector1.svg"></a>
                       </div>
                   </div>
               </div>
               <div class="col-md-6 right_conatct_us">
                <div class="inner_titles animate-on-scroll" data-delay="9">Address</div>
                <div class="inner_info animate-on-scroll" data-delay="10">
                    <a href="https://goo.gl/maps/x4nhzgg5PXCQFoVKA">Work.Life Fitzrovia,<br> 33 Foley St, London<br> W1W 7TL</a>
                </div>
                <div class="inner_titles phone_title animate-on-scroll" data-delay="11">Phone</div>
                <div class="inner_info animate-on-scroll" data-delay="12">
                    <a href="tel:+44 (0)20 7382 8100">+44 (0)20 7382 8100</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 contact_right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9930.721642307635!2d-0.140289!3d51.519079!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d5845c8f593%3A0x8f5f2d804250b1f0!2strg%20recruitment!5e0!3m2!1sen!2suk!4v1694096180304!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</section>

<section class="get_intouch">
    <div class="inner_getintouch">
        <div class="contact_imfo col-md-6 animate-on-scroll" data-delay="3">
            <div class="contatc_tikle animate-on-scroll" data-delay="4">Contact</div>
            <div class="full_ms-row">
                <div class="col-md-6 bottom_contact_info">
                    <div class="inner_titles animate-on-scroll" data-delay="5">Email</div>
                    <div class="inner_info animate-on-scroll" data-delay="6">
                        <a href="mailto:info@lstore.graphics">enquiries@trg-uk.com</a>
                        <div id="Social_media" class="inner_titles animate-on-scroll" data-delay="7">Social</div>
                        <div id="social_icons_link" class="inner_info animate-on-scroll" data-delay="8">
                           <a href="#"><img src="/wp-content/uploads/2023/09/Vector.svg"></a>
                           <a href="#"><img src="/wp-content/uploads/2023/09/Vector1.svg"></a>
                       </div>
                   </div>
               </div>
               <div class="col-md-6 right_conatct_us">
                <div class="inner_titles animate-on-scroll" data-delay="9">Address</div>
                <div class="inner_info animate-on-scroll" data-delay="10">
                    <a href="https://goo.gl/maps/x4nhzgg5PXCQFoVKA">Work.Life Fitzrovia,<br> 33 Foley St, London<br> W1W 7TL</a>
                </div>
                <div class="inner_titles phone_title animate-on-scroll" data-delay="11">Phone</div>
                <div class="inner_info animate-on-scroll" data-delay="12">
                    <a href="tel:+44 (0)20 7382 8100">+44 (0)20 7382 8100</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 contact_right">
        <div class="answer_ques animate-on-scroll" data-delay="13">
            Is the answer to your question missing? <br>Get in touch with us.
        </div>
        <div class="conatct_form animate-on-scroll" data-delay="14">
            <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>