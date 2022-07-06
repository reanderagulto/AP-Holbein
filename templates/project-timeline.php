<?php 
/**
 * Template Name: Project Tracker
 *
 */

 wp_enqueue_style('project-timeline-css', get_stylesheet_directory_uri() . '/templates/timeline.css');
 wp_enqueue_script( 'project-timeline-script', get_stylesheet_directory_uri() . '/templates/timeline.js', array('jquery'));

get_header(); ?>

<section class="timeline">
    <div class="timeline-header aos-init aos-animate" data-aos="fade-down">
        <h2>Progress Tracker</h2>
        <p class="subtitle">
            At Agent Image, we work with your marketing goals to help you achieve the best <br/>
            design for your real estate website. Your site is conceptualize by our <br />
            experienced designers and we work with you until you are satisfied with a design <br />
            that best represents you and your company. See below at how some of our <br/>
            designs are conceptualized, edited and finalized for launch. <br/>
        </p>
    </div>
    <div class="timeline-content">
        <ul class="main-progress">
            <li> <!-- Step 1: Design Phase -->
                <div class="progress-line"></div>
                <span class="progress-icon aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">01.</span>
                <div class="progress-content aos-init aos-animate" data-aos="fade-left">
                    <span class="progress-time">Est. Week 1-3</span>
                    <span class="progress-title">Design Phase</span>
                    <p class="aos-init aos-animate" data-aos="fade-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br/>
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>
                    <ul class="sub-progress">
                        <li>
                            <span class="progress-time">Est. Day 1</span>
                            <span class="progress-title">Initial Design Meeting</span>
                        </li>
                        <li>
                            <span class="progress-time">Est. Day 2-7</span>
                            <span class="progress-title">Design Production</span>
                        </li>
                        <li>
                            <span class="progress-time">Est. Day 8</span>
                            <span class="progress-title">Design Presentation</span>
                            <ul class="sub-progress">
                                <li>
                                    <span class="progress-time">Est. Day 9-12</span>
                                    <span class="progress-title">Design Revisions</span>
                                </li>
                                <li>
                                    <span class="progress-time">Est. Day</span>
                                    <span class="progress-title">Design Presentation</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="progress-time">Est. Day x-x</span>
                            <span class="progress-title">Design Approval + HTML Conversion</span>
                        </li>
                    </ul>
                </div>
            </li>
            <li> <!-- Step 2: Staging Site Presentation and Review -->
                <div class="progress-line"></div>
                <span class="progress-icon aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">02.</span>
                <div class="progress-content aos-init aos-animate" data-aos="fade-left">
                    <span class="progress-time">Est. Week 4</span>
                    <span class="progress-title">Staging site presentation and review</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br/>
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>
                </div>
            </li>
            <li> <!-- Step 3: Content Population and Integration -->
                <div class="progress-line"></div>
                <span class="progress-icon aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">03.</span>
                <div class="progress-content aos-init aos-animate" data-aos="fade-left">
                    <span class="progress-time">Est. Week 5-8</span>
                    <span class="progress-title">Content Population and Integration</span>
                    <p class="aos-init aos-animate" data-aos="fade-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br/>
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>
                    <ul class="sub-progress aos-init aos-animate" data-aos="fade-left">
                        <li>
                            <span class="progress-time">Est. 14 Days</span>
                            <span class="progress-title">Staging site iteration</span>
                        </li>
                        <li>
                            <span class="progress-time">Est. 7 Days</span>
                            <span class="progress-title">Pre-launch Review</span>
                        </li>
                    </ul>
                </div>
            </li>
            <li> <!-- Step 4: Site Launch -->
                <div class="progress-line"></div>
                <span class="progress-icon aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">04.</span>
                <div class="progress-content aos-init aos-animate" data-aos="fade-left">
                    <span class="progress-time">Est. Week 8</span>
                    <span class="progress-title">Site Launch</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br/>
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>
                </div>
            </li>
            <li> <!-- Step 5: Customer Aftercare -->
            <div class="progress-line"></div>
                <span class="progress-icon aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">05.</span>
                <div class="progress-content aos-init aos-animate" data-aos="fade-left">
                    <span class="progress-time">Est. Week 9</span>
                    <span class="progress-title">Customer Aftercare</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br/>
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<?php get_footer(); ?>