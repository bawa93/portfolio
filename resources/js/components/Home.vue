<template>
    <div>

        <Header></Header>
        <div class="container">

            <div class="site-section about has-text-centered">
                <div class="site-section__title">- About Me -</div>
                <div class="about__info" style="
  margin-bottom: 25px;
">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur consectetur dicta distinctio dolore, minus neque officia optio, praesentium quas similique, ullam vero voluptates. Ad ex exercitationem perferendis qui voluptatem.
                </div>
                <div class="columns2">
                    <a href="#" class="button is-medium  is-light" >My Resume</a>
                    <a href="#" class="button is-medium  is-dark">Hire Me</a></div>
            </div>

            <div class="columns">
                <div class="column row-section">
                    <div class="row-section__title">Education & Jobs</div>
                    <div class="row-section__content">
                        <ul>
                            <li class="job">
                                <div class="job__date">
                                    March 2014 - April 2017
                                </div>
                                <div class="job__title"> Interactive Media Specialist
                                </div>
                                <div class="job__place">
                                    Fanshawe College, London
                                </div>
                            </li>

                            <li class="job">
                                <div class="job__date">
                                    March 2014 - April 2017
                                </div>
                                <div class="job__title"> Interactive Media Specialist
                                </div>
                                <div class="job__place">
                                    Fanshawe College, London
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column row-section">
                    <div class="row-section__title">What I am doing</div>
                    <div class="row-section__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium inventore magnam repellendus! Corporis cumque dolore nulla suscipit voluptate? Exercitationem illo nihil, numquam quae quo rerum ut velit? Modi, ut voluptas.
                    </div>
                </div>
                <div class="column row-section">
                    <div class="row-section__title">Skills & Abilities</div>
                    <div class="row-section__content">
                        <ul>
                            <li>
                                PHP / MYSQL<br>
                                <progress class="progress is-small is-primary" value="90" max="100">90%</progress>
                            </li>
                            <li>
                                Node / MongoDB<br>
                                <progress class="progress is-small is-link" value="70" max="100">70%</progress>
                            </li>
                            <li>
                                Javascript<br>
                                <progress class="progress is-small is-success" value="70" max="100">70%</progress>
                            </li>
                            <li>
                                HTML / CSS<br>
                                <progress class="progress is-small is-success" value="90" max="100">90%</progress>
                            </li>
                            <li>
                                Laravel<br>
                                <progress class="progress is-small is-primary" value="85" max="100">85%</progress>
                            </li>
                            <li>
                                Express<br>
                                <progress class="progress is-small is-primary" value="75" max="100">75%</progress>
                            </li>
                            <li>
                                Vue JS<br>
                                <progress class="progress is-small is-primary" value="80" max="100">80%</progress>
                            </li>
                            <li>
                                Wordpress<br>
                                <progress class="progress is-small is-primary" value="65" max="100">65%</progress>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="site-section has-text-centered">
                <div class="site-section__title">- My Projects -</div>
                    <Projects></Projects>
            </div>
        </div>
        <div class="container-fluid">

            <div class="site-section has-text-centered featured_tech">
                <!--<div class="site-section__title">- Featured Technogies -</div>-->
                <Featured_Technologies></Featured_Technologies>
            </div>
            <Footer></Footer>
        </div>

    </div>
</template>

<script>
import Header from './Header';
import Projects from './Projects';
import Featured_Technologies from './Featured_Technologies';
import Footer from './Footer';

export default {
components: { Header,Footer, Projects, Featured_Technologies}
}
</script>

<style>
    .container {
    }

    .site-section.about.has-text-centered {
    }

    .site-section__title {
    }

    .about__info {
        margin-bottom: 25px;
    }

    .columns2 {
        text-transform: uppercase;
        margin: 10px;
    }

    .button.is-medium.is-light {
        margin-right: 25px;
    }

    .button.is-medium.is-dark {
    }

    .columns {
    }

    .column.row-section {
    }

    .row-section__title {
    }

    .row-section__content {
    }

    .job {
    }

    .job__date {
        font-size: 13px;
        margin-bottom: 3px;
    }

    .job__title {
        color: rgb(50, 115, 220);
        /* text-transform: uppercase; */
        font-size: 15px;
    }

    .job__place {
        opacity: 0.7;
        font-size: 14px;
    }

    .progress.is-small.is-primary {
    }

    .progress.is-small.is-link {
    }

    .progress.is-small.is-success {
    }
    .featured_tech {
        background-color: #eee;
    }
</style>