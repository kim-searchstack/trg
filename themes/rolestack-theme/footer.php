<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rolestack-theme
 */

?>
<!-- Request Call Back Section -->

<footer id="colophon" class="site-footer">
    <div class="col-md-4">
        <div class="footer_logo animate-on-scroll" data-delay="1">
            <a href="<?php echo home_url(); ?>"><img src="/wp-content/uploads/2023/05/Group.svg"></a>
        </div>
        <div class="desc-footer animate-on-scroll" data-delay="2">
            The <span style="color: #6453D6;"> Community Driven</span><br> Recruitment Agency.
        </div>
        <div class="mail_footer animate-on-scroll" data-delay="3"><a href="tel:+44 (0)20 7382 8100">+44 (0)20 7382 8100</a></div>
        <div class="mail_footer animate-on-scroll" data-delay="4"> Fax. +44 (0)20 7382 8101</div>
        <div class="mail_footer animate-on-scroll" data-delay="5"><a href="mailto:enquiries@trg-uk.com">enquiries@trg-uk.com</a></div>
        <div class="address_footer animate-on-scroll" data-delay="6">Work.Life Fitzrovia<br>
        33 Foley St, London W1W 7TL</div>
        <div id="social_icons_link" class="inner_info animate-on-scroll" data-delay="6">
            <a href="https://www.linkedin.com/company/trg-recruitment/" target="_blank"><img src="/wp-content/uploads/2023/09/Vector.svg"></a>
            <a href="https://www.youtube.com/@TheRoundabouts" target="_blank"><img src="/wp-content/uploads/2023/09/Vector1.svg"></a>
        </div>
        <div class="glass_door animate-on-scroll" data-delay="7">
            <a target="https://www.youtube.com/@TheRoundabouts"  target="_blank" href="https://www.glassdoor.co.uk/Overview/Working-at-TRG-Recruitment-EI_IE1924982.11,26.htm">
                <img src="/wp-content/uploads/2023/09/verticalStarRating.png"></a>
            </div>
        </div>  
        <div class="col-md-4 sector-link-col">
            <div class="heading_footer animate-on-scroll" data-delay="5">Pages</div>
            <div class="footer_navigation">
                <div class="col-md-6 animate-on-scroll" data-delay="6">
                    <a href="/about/">About</a>
                    <a href="/tech-recruitment/">Tech Recruitment Solutions</a>
                </div>
                <div class="col-md-6 animate-on-scroll" data-delay="7">
                   <a href="/roundabouts/">Roundabouts</a>
                   <a href="/jobs/">Jobs</a>
               </div>
               <div class="col-md-6 animate-on-scroll" data-delay="8">
                   <a href="/insight-hub/">Insights</a>
                   <a href="/contact/">Contact</a>
               </div>
           </div>

           <div class="heading_footer animate-on-scroll" data-delay="9" style="padding-top: 2rem;">Sectors</div>
           <div class="footer_navigation">
            <div class="col-md-6 animate-on-scroll" data-delay="9">
               <a href="/tech-recruitment/agile/">Agile</a>
               <a href="/tech-recruitment/data/">Data</a>
           </div>
           <div class="col-md-6 animate-on-scroll" data-delay="10">
               <a href="/tech-recruitment/design-ux/">Design & UX</a>
               <a href="/tech-recruitment/engineering/">Engineering</a>
           </div>
           <div class="col-md-6 animate-on-scroll" data-delay="11">
               <a href="/tech-recruitment/devops/">DevOps</a>
               <a href="/tech-recruitment/product/">Product</a>
           </div>
       </div>
   </div>
   <div id="headCV" style="background:#fff" class="lity-hide">
    <div class="pop-form-inline">
        <?php //echo do_shortcode('[gravityform id="1" title="true" ajax="true"]'); ?>
    </div>
</div>

</footer>
<div class="copyright_text animate-on-scroll" data-delay="12">
    © Copyright 2024 trg. All rights reserved. <a href="/privacy-policy/" class="privacy_policy animate-on-scroll" data-delay="13">Privacy Policy</a>
</div>
<script type="text/javascript" src="/wp-content/themes/rolestack-theme/js/slick-1.8.1/slick/slick.min.js"></script>

<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Attach event listener to the open button
        var openButton = document.querySelector('.hamburger');
        if (openButton) {
            openButton.addEventListener('click', function() {
                document.getElementById("myNav").style.display = 'block';
            });
        }

        var closeButton = document.querySelector('.closebtnmenu');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                document.getElementById("myNav").style.display = 'none';
            });
        }

    });
</script>


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("masthead").style.backgroundColor = "#1A1A1A";
        } else {
            document.getElementById("masthead").style.backgroundColor = "#1A1A1A";
        }
    }
    $(function() {
  $('.mejs-overlay-loading').closest('.mejs-overlay').addClass('load'); //just a helper class

  var $video = $('div.video video');
  var vidWidth = $video.attr('width');
  var vidHeight = $video.attr('height');

  $(window).resize(function() {
    var targetWidth = $(this).width(); //using window width here will proportion the video to be full screen; adjust as needed
    $('div.video, div.video .mejs-container').css('height', Math.ceil(vidHeight * (targetWidth / vidWidth)));
}).resize();
});
</script>
<script type="text/javascript">
    function genericSocialShare(url){
        window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
        return true;
    }
</script>
<script type="text/javascript">
    jQuery('.trusted_biggest_companies').slick({
        slidesToShow: 4,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        pauseOnHover: false,
        cssEase: 'linear',
        responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }
        ]
    });
</script>
<script type="text/javascript">
    jQuery('.inner_casetestomonials').slick({
        slidesToShow: 1,
        arrows: true,
        dots: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
    });
</script>
<script type="text/javascript">
    jQuery('.round_testimonial').slick({
        slidesToShow: 3,
        arrows: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
        responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });
</script>
<script>
    function openTab(evt, tabName, boxName) {    
        var i, tabcontent, tablinks;
        var box = document.getElementById(boxName);
        tabcontent = box.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = box.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen1").click();
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.impact_number').each(function () {
            jQuery(this).prop('Counter',0).animate({
                Counter: jQuery(this).text()
            }, {
                duration: 15000,
                easing: 'swing',
                step: function (now) {
                    jQuery(this).text(Math.ceil(now));
                }
            });
        });
        jQuery(".apply_job_sidebar").click(function(){
            jQuery(".job_application .application_button").click();
        });
    });
</script>   

<script>
    let elements = document.querySelectorAll('.animate-on-scroll');

    const animateOnScroll = () => {
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                element.classList.add('in-view');
            }
        });
    };

// Call the function initially
    animateOnScroll();

// Also call the function when scrolling
    window.addEventListener('scroll', animateOnScroll);
</script>

<script>
// Get all words
    let words = document.querySelectorAll('.word');

// Loop through each word and animate
    words.forEach((word, i) => {
        word.animate([
        // keyframes
        { opacity: '0', transform: 'translateY(100px)' }, /* Matched the displacement here */
            { opacity: '1', transform: 'translateY(0)' }
            ], {
        // timing options
            duration: 1000,
        delay: i * 200, // creating a stagger effect
        easing: 'ease-out',
        fill: 'forwards' // ensure the animation's end state persists
    });
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let fadeInElements = document.querySelectorAll('.fade-in');

        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                let element = entry.target;
                let delay = element.getAttribute('data-delay');
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        element.classList.remove('fade-in');
                        element.classList.add('visible');
        }, delay * 1000); // delay is in seconds
                    observer.unobserve(element);
                }
            });
        });

        fadeInElements.forEach(element => {
            observer.observe(element);
// Trigger the check immediately for elements already in view
            if (element.getBoundingClientRect().top < window.innerHeight) {
                observer.unobserve(element);
                let delay = element.getAttribute('data-delay');
                setTimeout(() => {
                    element.classList.remove('fade-in');
                    element.classList.add('visible');
    }, delay * 1000); // delay is in seconds
            }
        });
    });

// Base level fade-in
    document.querySelectorAll('.base-level-fade').forEach((element, index) => {
        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let delay = element.getAttribute('data-delay') || 0;
                    setTimeout(() => {
                        element.classList.remove('base-level-fade');
                        element.classList.add('base-level-visible');
        }, delay * 1000); // delay is in seconds
                    observer.unobserve(element);
                }
            });
        });

        observer.observe(element);

// This will trigger the animation if the element is visible on page load
        if (element.getBoundingClientRect().top < window.innerHeight) {
            let delay = element.getAttribute('data-delay') || 0;
            setTimeout(() => {
                element.classList.remove('base-level-fade');
                element.classList.add('base-level-visible');
}, delay * 1000); // delay is in seconds
        }
    });

</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php wp_footer(); ?>

</body>
</html>