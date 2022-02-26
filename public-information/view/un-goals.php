<!DOCTYPE html>
<!--
    Page that discusses the UN Sustainability Goal we are targeting
-->
<html lang="en">
    <head>
        <?php include("helper/head.php");
        session_start(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
        <title>UN Sustainability Goals</title>

    </head>
    <body>
        <?php include("helper/navbar.php") ?>
        <div class="flex-wrapper">
            <div class="container">
                <h1 class="big-header">UN Goals</h1>
                <p style="font-size: 18px;">Our team created this website in accordance to UN Sustainability
                    Goal #5: Achieve Gender Equality and Empower all Women and Girls.
                    Search through the tabs below to get more information on this goal.<p>         
                <!-- Pills to allow section for general info on UN Sustainability Goals, and one for specific info on Goal 5: Gender Equality -->
                <div class="tab-content card mb-5" id="pills-tab-content">
            
                    <ul class="nav nav-pills mb-5" id="tabbycat" role="tablist">
	                    <li class="nav-item" role="presentation">
		                    <a class="nav-link active" id="pills-ungoals-tab" href="#ungoals" role="tab" data-toggle="pill">UN Goals</a>
	                    </li>
	                    <li class="nav-item" role="presentation">
		                    <a class="nav-link" id="pills-goal5-tab" href="#goal5" role="tab" data-toggle="pill">Goal 5: Gender Equality</a>
	                    </li>
	                </ul>

                    <!-- tab for a general description of the UN Sustainability Goals -->
	                <div class="tab-pane card-body active" role="tabpanel" id="ungoals">
		                <h2>Sustainable Development Goals: Take Action!</h2>
		                <p>The Sustainable Development Goals are a set of 17 Goals to help improve the quality of lives around the world. A few of said qualities are to end poverty, 
                            end world hunger, and to get safe drinking water for all. These 17 Goals were put into action in 2015 as a part of the UN's 2030 Agenda for Sustainable 
                            Development, which is a 15 years plan to achieve each of the 17 Goals.
                        </p>
                        <br>    <!-- newline tag -->
                        <p>Click the highlighted text to learn more about the <a href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/" target="_blank">UN Sustainability Goals</a>.</p>
                    </div>
	
                    <!-- tab for Goal 5 -->
		            <div class="tab-pane card-body fade" role="tabpanel" id="goal5">
		                <h2>Goal 5: Gender Equality</h2>
		                <p>As stated above, our team has placed emphasis on Goal 5: Gender Equality. The 5th Sustainability Goal tackles topics such as violence against women, child brides, 
                            and the equal participation of women in governmental and managerial positions. There has been progress made towards this goal in the past few decades, but we are 
                            still facing many challenges in regards to gender equality.
                        </p>
                        <br>
                        <p>Click the highlighted text to learn more about <a href="https://www.un.org/sustainabledevelopment/gender-equality/" target="_blank">Goal 5</a>.</p>
                    </div>
	
                </div>

            </div>
         
            <?php include("helper/footer.php") ?>
        
        </div>
    </body>
</html>