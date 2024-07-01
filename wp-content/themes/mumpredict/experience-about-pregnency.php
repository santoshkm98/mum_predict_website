<?php /* Template Name:Experience page */ ?>

<?php get_header(); ?>

<section id="experience-interviews">
    <div class="fixed-columns">
        <div class="center-div">
            <h1>Who Can take Part</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="col-cards">
                    <img src="<?php bloginfo('template_directory') ?>/images/pregnant-women.png" class="mumpredict-icon"/>
                    <h3>Pregnant or recently had a baby</h3>
                    <p>Are you at least 28 weeks pregnant and/or had a baby in the last 2 years </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="col-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/care-taker.png" class="mumpredict-icon"/>
                    <h3>Partner/Dad/Carer</h3>
                    <p>Are you someone who have seen or taken care of a pregnant lady in the recent past</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="col-cards">
                <img src="<?php bloginfo('template_directory') ?>/images/healthcare-professional.png" class="mumpredict-icon"/>
                    <h3>Health care professional</h3>
                    <p>Are you an NHS employee involved in the care of pregnant women with multimorbidity, and their babies? </p>
                </div>
            </div>
        </div>
     </div>
     <div class="experience-cta">
        <div class="fixed-columns">
        <h4>Would you like to take part in a short interview to share your experiences of pregnancy care?</h4>
        <a href="mailto:mumpredict@contacts.bham.ac.uk">Email us</a>
        </div>
        </div>
        <div class="experience-instructors">
<div class="fixed-columns">
            <h3>Who will Talk to you</h3>
            <div class="row" id="experts-row">
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
              <div class="experience-team-card">
              <img src="<?php bloginfo('template_directory') ?>/images/sharon.png" />
                    <h4>Dr. Sharon McCann</h4>
                    <p>I'm Dr Sharon McCann, a Health Services Researcher at the University of Aberdeen. If you take
                        part in the study, I’ll be one of the researchers interviewing you, to hear about your
                        experiences, and how you think care could be improved.</p>
              </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
              <div class="experience-team-card">
              <img src="<?php bloginfo('template_directory') ?>/images/stephanie.png" />
                    <h4>Dr. Stephanie Hanley</h4>
                    <p>I'm Dr Stephanie Hanley, a researcher in the Institute of Applied Health Research at the
                        University of Birmingham. If you decide to take part, I'll be one of the interviewers who may
                        speak with you to understand your experiences of receiving or providing care.</p>
              </div>
             </div>
            </div>
         </div>
        </div>
    </div>
    
</section>

<?php get_footer(); ?>