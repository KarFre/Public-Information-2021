<!DOCTYPE html>
<!--Donate page
    A page to put organizations to donate to on.
-->
<html lang="en">
    <head>
        <?php include("helper/head.php");
        session_start(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Rakkas&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/page-styles.css">
    </head>
    <body>
        <?php include("helper/navbar.php") ?>

        <h1 class="big-header card">Donate</h1>
        <div class="container">
            <br>

            <!--Start of Organization List-->
            <div class="panel-group">
                <div class="row panel panel-default" style="font-family: Fondamento, cursive, sans-serif;">
                    <h3>You cannot donate to us directly, but we have resources to organizations you may donate to that align with our goals!</h3>
                </div>
                <div class="row panel panel-default">
                    <div class="col-sm-12 col-md-4">
                        <a href="https://actionaid.org.uk/" target="_blank">
                        <img class="responsive" src="img/ActionAidBrazil.jpg" height="350" width="100%"/>
                        </a>
                        <caption>Photo by <a href="https://www.panos.co.uk/portfolio/lianne-milton/">Lianne Milton</a> on <a href="https://www.actionaid.org.uk/about-us/where-we-work/brazil">ActionAid</a></caption>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <h1>Action Aid</h1>
                        <p>ActionAid supports community projects to keep children off the streets and out of drug gangs. 
                         Thousands of children and their families attend our classes, enjoy cookery, music and sport, 
                         and receive extra tuition to ensure they can finish their education. Through a mixture of therapy and education, 
                         ActionAid is helping girls to learn their rights and discover the self-confidence to say no to sexual exploitation. 
                         Empowered, these girls are going on to raise awareness and galvanise their communities to find other ways to make money. 
                        <p>
                        <a href="https://www.actionaid.org.uk/donate" target="_blank" role="button" class="btn btn-lg btn-warning">Donate to Action Aid</a>
                    </div>
                </div>

                <div class="row panel panel-default">
                <div class="col-sm-12 col-md-4">
                    <a href="https://www.unwomen.org/" target="_blank">
                    <img class="responsive" src="img/un-women.jpg" height="350" width="100%"/>
                    </a>
                    <caption>Photo by <a href="https://www.shutterstock.com/g/akatz">a katz</a> on <a href="https://www.shutterstock.com/image-photo/new-york-city-march-8-2015-259168730">Shutterstock</a></caption>
                </div>
                <div class="col-sm-12 col-md-8">
                    <h1>UN Women</h1>
                    <p>UN Women is an international organization that fights for gender equality in acordance to UN Sustainability Goal #5.
                        This United Nations entity works toward this goal by setting global standards for gender equality
                        and focusing on women's participation in the global sphere.<p>
                    <p>The UN Trust Fund allows this organization to follow through with their goals, helping women around the
                        world. Just one donation can assist refugees, the impoverished, and those seeking an education.
                    </p>
                    <a href="https://untfevaw.rallyup.com/supportuntf" target="_blank" role="button" class="btn btn-lg btn-warning">Donate to UN Women</a>
                </div>
                
                </div>

                <div class="row panel panel-default">
                <div class="col-sm-12 col-md-4">
                    <a href="https://www.equalitynow.org/" target="_blank">
                    <img class="responsive" src="img/equality-now.jpg" height="350" width="100%"/>
                    </a>
                    <caption>Photo by <a href="https://www.shutterstock.com/g/Bahauaddinbek">Bahau</a> on <a href="https://www.shutterstock.com/image-vector/young-woman-shouts-through-megaphones-supporting-1902819394">Shutterstock</a></caption>
                </div>
                <div class="col-sm-12 col-md-8">
                    <h1>Equality Now</h1>
                    <p>Equality Now is an international organization dedicated to forming a just world for women and girls.
                        They aim to eradicate sexist laws, end sexual violence, and end normalized gender-based
                        violence such as child marriage. Equality Now supports women and girls primarily through legislative
                        change and partners with multiple other organizations to aid their cause.<p>
                    <a href="https://www.equalitynow.org/donate/" target="_blank" role="button" class="btn btn-lg btn-warning">Donate to Equality Now</a>
                </div>
                </div>

                <div class="row panel panel-default">
                <div class="col-sm-12 col-md-4">
                    <a href="https://igarape.org.br" target="_blank">
                    <img class="responsive" src="img/igarape.jpg" height="350" width="100%"/>
                    </a>
                    <caption>Photo by <a href="https://www.shutterstock.com/g/Katty2016">Katty2016</a> on <a href="https://www.shutterstock.com/image-vector/people-map-country-brazil-vector-511405732">Shutterstock</a></caption>

                </div>
                <div class="col-sm-12 col-md-8">
                    <h1>Igarapé Institute</h1>
                    <p>The Igarapé Institute is a non-governmental organization (NGO) based in Brazil that works to reduce
                        inequalities. This organization's main goal is to increase citizen safety. Ways they aim to achieve
                        this goal is through increasing cybersecurity, regulating weapons, and helping citizens keep an
                        open civic space to improve the community.<p>
                    <a href="https://doacoes.igarape.org.br/en/" target="_blank" role="button" class="btn btn-lg btn-warning">Donate to the Igarapé Institute</a>
                </div>
                </div>

                <div class="row panel panel-default">
                    <div class="col-sm-12 col-md-4">
                        <a href="https://www.amnesty.org" target="_blank">
                            <img class="responsive" src="img/amnesty.jpg" height="350" width="100%"/>
                        </a>
                        <caption>Photo by <a href="https://www.shutterstock.com/g/andesign101">AN Design</a> on <a href="https://www.shutterstock.com/image-photo/brisbane-australia-june-20-amnesty-international-289351172">Shutterstock</a></caption>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <h1>Amnesty International</h1>
                        <p>Amnesty International is an organization that fights to eliminate violence against women and advocates
                            for global human rights. They work toward these goals by ensuring the public recieves factual information
                            on relevant current events, lobbying to hold governments accountable, and encouraging education among the public.<p>
                        <a href="https://www.amnesty.org/en/donate/" target="_blank" role="button" class="btn btn-lg btn-warning">Donate to Amnesty International</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include("helper/footer.php") ?>
    </body>
</html>