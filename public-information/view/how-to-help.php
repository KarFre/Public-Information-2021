<!DOCTYPE html>
<!--
    Page for teaching people about inequality, then giving ways to help
-->
<html lang="en">
    <head>
        <?php include("helper/head.php");
        session_start(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
        <script type="text/javascript" src="js/carousel.js"></script>
    </head>
    <body>
        <?php include("helper/navbar.php") ?>
        <h1 class="big-header card">How to Help</h1><br>
    <div class="container custom-font-size">
        

        <p>If you want to help combat inequality on a local and global scale, you
            need to have enough information to fight back. While gender inequality is
            a vast subject that will take more than a pamphlet to understand, there is some information 
            provided below.</p>

        <!--Information carousel-->
        <div class="centering info-style">   
            <div class="info-wheel info-card col-xs-12 col-md-10" style="padding: 10px;">
                <div class="info-card">
                    <img class="responsive" src="img/books.jpg" width="100%" height="300"
                     alt="Image of a large library."/>
                     Photo by <a href="https://unsplash.com/@willvanw?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Will van Wingerden</a> on <a href="https://unsplash.com/s/photos/library?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                    <h3>Knowledge is Power</h3>
                    <p>When you commit to a cause, you should learn as much about it as you can. There are
                       multiple resources on gender inequality in various countries; the UN Sustainability Goal's page
                       is a good starting point. Here is the link to that page, plus a few more resources to get started:
                    </p>
                    <ul class="help-list">
                        <li><a href="https://www.unwomen.org/en/news/in-focus/women-and-the-sdgs/sdg-5-gender-equality" target="_blank">UN Sustainability Goal #5</a></li>
                        <li><a href="https://borgenproject.org/gender-wage-gap-in-brazil/" target="_blank">Gender Wage Gap in Brazil</a></li>
                        <li><a href="https://www.unwomen.org/en/news/in-focus/commission-on-the-status-of-women-2012/facts-and-figures" target="_blank">Facts and Figures: UN Women</a></li>
                    </ul>
                </div>
                
                <div class="info-card">
                <img class="responsive" src="img/community.jpg" width="100%" height="300"
                     alt="Image of many people's hands together, painted in red paint to form a heart."/>
                     <caption class="info-caption">Photo by <a href="https://unsplash.com/@timmarshall?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Tim Marshall</a> on <a href="https://unsplash.com/collections/1344507/placeholder-images?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></caption>
                        <h3>Help Your Community</h3>
                        <p>If fighting for equality on a global scale seems intimidating, participating in
                           local efforts is a great start. Volunteering, attending community events, and participating
                           in public forums are a few of many ways to get involved. 

                        </p>
                        <ul class="help-list">
                            <li><a href="https://www.volunteermatch.org/" target="_blank">Find Volunteer Work in your Area</a></li>
                            <li><a href="https://www.eventbrite.com/" target="_blank">Charity Events by Region</a></li>
                        </ul>
                </div>
                <div class="info-card">
                    <img class="responsive" src="img/computer-search.jpg" width="100%" height="300"
                        alt="Image of a person typing on a laptop."/>
                        Photo by <a href="https://unsplash.com/@webmarbles?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Simon Hattinga Verschure</a> on <a href="https://unsplash.com/s/photos/searching-a-computer?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                        <h3>Stay Informed</h3>
                        <p>
                            Being a part of a cause is an ongoing commitment. Once you have learned
                            much about the history of gender inequality, it's important to keep up with current
                            events. Pay attention to reliable news sources to learn about what's happening in the
                            fight for equality, and track laws that are in development that will aid in this cause.
                        </p>
                </div>
                <div class="info-card">
                    <img class="responsive" src="img/donation.jpg" width="100%" height="400"
                        alt="Image of a person's hands holding some United States coins and a paper that says 'Make a Change'."/>
                        Photo by <a href="https://unsplash.com/@kattyukawa?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Katt Yukawa</a> on <a href="https://unsplash.com/s/photos/make-a-change?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                          <h3>Donate</h3>
                        <p>Donating to organizations that work towards equality is a wonderful option
                            if you are unable to join in on the work yourself. There are countless
                            organizations dedicated to gender equality that accept donations. This 
                            website contains a few of these groups, but there are many more out there.
                        </p>
                        <ul class="help-list">
                            <li><a href="donate.php" target="_blank">Our Donations Page</a></li>
                            <li><a href="https://www.charitynavigator.org/index.cfm?bay=content.view&cpid=2133&c_src=E200305AXXXXXX0&" target="_blank">Other Places to Donate</a></li>
                        </ul>
                </div>
                <div class="info-card">
                    <img class="responsive" src="img/globalorg.jpg" width="100%" height="350"
                        alt="Image of 9 people wearing blue shirts in a field with their backs turned, holding onto each other's
                             shoulders side-by-side. The two people in the middle are children."/>
                        Photo by <a href="https://www.shutterstock.com/g/Rawpixel">Rawpixel</a> on <a href="https://www.shutterstock.com/image-photo/group-diversity-people-volunteer-arm-around-605300333">Shutterstock</a>                        <h3>Join a Global Organization</h3>
                        <p>
                            Gender inequality is a global issue. One of the best ways to help in this worldwide
                            effort to reduce inequalities is to join an international organization. Check for local
                            chapters of these organizations to get started. 
                        </p>
                        <ul class="help-list">
                            <li><a href="https://www.humanrightscareers.com/magazine/organizations-gender-equality/" target="_blank">Organizations Fighting for Gender Equality</a></li>
                            <li><a href="https://www.unwomen.org/en/get-involved" target="_blank">Get Involved: UN Women</a></li>
                        </ul>
                </div>
            </div>
        </div><!--End of information carousel-->
    </div><!--End of page body-->
     
        <?php include("helper/footer.php") ?>
    </body>
</html>