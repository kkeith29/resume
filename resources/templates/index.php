<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kyle Keith - Resume</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="p-resume">
    <div class="e-personal-info">
        <h1 class="e-pi-name">Kyle <span class="e-pin-last-name">Keith</span></h1>
        <div class="e-pi-contact-info"><?=getenv('RESUME_LOCATION')?>&nbsp;&nbsp;|&nbsp;&nbsp;<?=getenv('RESUME_EMAIL')?>&nbsp;&nbsp;|&nbsp;&nbsp;<?=getenv('RESUME_PHONE')?></div>
    </div>
    <div class="e-description">
        <h3>Senior Web Developer</h3>
        <p>Seasoned web developer with 9 years of experience in creating complex web based applications that utilize the
            latest technologies and industry standards.</p>
        <h4>Goals</h4>
        <ul>
            <li>To find a rewarding position creating innovative, user oriented software, which challenges my expertise
                and allows me to expand my knowledge
            </li>
            <li>To find a work environment in which creativity and problem solving have a strong influence in everyday
                activities
            </li>
        </ul>
    </div>
    <div class="e-experience">
        <h2>Experience</h2>
        <div class="e-e-company t-first">
            <div class="e-ec-column t-left">
                <h3 class="e-ecc-company-name">URL Digital Media</h3>
                <ul class="e-ecc-company-info">
                    <li class="e-eccci-item">Overland Park, KS</li>
                    <li class="e-eccci-item">Feb 2016 - Dec 2016</li>
                </ul>
            </div>
            <div class="e-ec-column t-right">
                <h3 class="e-ecc-position-title t-with-dates">Senior Web Engineer/Release Manager</h3>
                <h5 class="e-ecc-position-dates">Aug 2016 - Dec 2016</h5>
                <ul>
                    <li>Helped design and implement better AWS server infrastructure</li>
                    <li>Maintained existing server infrastructure</li>
                    <li>Implemented and enforced both coding and version control system (Git) standards</li>
                    <li>Ensured all code has been thoroughly reviewed and features met Business requirements</li>
                    <li>Scheduled, coordinated and managed releases for all projects</li>
                    <li>Designed and implemented release strategy for all code across each environment</li>
                    <li>Communicated release details and schedules to the Business as required</li>
                    <li>Wrote scripts to help automate deployment processes</li>
                    <li>Designed and developed local environment</li>
                    <li>Setup Gollum wiki to document all standards, workflows, and procedures</li>
                    <li>Mentored less experienced developers on better code design and security</li>
                </ul>
                <h3 class="e-ecc-position-title t-with-dates">Web Developer</h3>
                <h4 class="e-ecc-position-dates">Feb 2016 - Aug 2016</h4>
                <ul>
                    <li>Responsible for the development and implementation of new web features</li>
                    <li>Estimated required time for updates or feature development and implementation</li>
                </ul>
                <h4>Notable Work:</h4>
                <p><em><u>Local Development CLI Tool</u></em> - Built a PHP archive which could be installed on
                    each individual developers local environment to help with repetitive tasks and solve some
                    consistency issues.</p>
                <h5>Features</h5>
                <ul>
                    <li>Ability to check a remote manifest and update itself if new version is found</li>
                    <li>Create Git feature/hotfix branches according to company VCS standards</li>
                    <li>Ability to setup projects (git repo, env variables, and database) in local environment based on
                        shared JSON configuration
                    </li>
                </ul>
                <p><em><u>Local Development Environment</u></em> - Created a local development system tailored for
                    simplicity of use due to the variety of skill levels on the team. It utilized Packer, VirtualBox,
                    Vagrant, and basic shell scripts (with a plan to use Puppet for provisioning) to generate an
                    environment suitable for all 7+ interdependent company projects. An overhaul of the
                    configuration layer for each project was necessary to properly load sensitive/environment specific
                    info from the environment.</p>
                <h5>Features</h5>
                <ul>
                    <li>Easy to build and maintain</li>
                    <li>Utilizes Vagrant's built-in update system to handle new versions published to an S3 bucket</li>
                    <li>Built-in email catching with web interface for viewing captured mail</li>
                    <li>Project log dump program with ability to view errors via a web interface</li>
                    <li>External site access provided by xip.io service</li>
                </ul>
                <p><em><u>Lead Acquisition Sites</u></em> - Overhauled company lead acquisition sites to provide better
                    user experience and increase site performance. This required migrating old Drupal 7 sites to
                    Laravel 5.2 to provide more flexibility in design without sacrificing quality and performance. I
                    worked closely with frontend developers to build a robust backend system which simplified the
                    development process.</p>
                <h5>Features</h5>
                <ul>
                    <li>Custom Redis page caching middleware with console command to clear cache during scripted
                        deployments
                    </li>
                    <li>Custom Gulp task setup which handles SASS compilation, CSS autoprefixing, CSS minification,
                        sprite generation, image minification, JS file concatenation, JS minification, and asset
                        revisioning
                    </li>
                    <li>Dynamic routing setup and view structure for marketing landing pages designed to cleanly
                        organize various traffic sources and have simple AB testing integration
                    </li>
                    <li>Custom visitor tracking middleware which feeds request info to centralized company API</li>
                </ul>
            </div>
        </div>
        <div class="e-e-company">
            <div class="e-ec-column t-left">
                <h3 class="e-ecc-company-name">Ebeacon</h3>
                <ul class="e-ecc-company-info">
                    <li class="e-eccci-item">Overland Park, KS</li>
                    <li class="e-eccci-item">Aug 2015 - Nov 2015</li>
                </ul>
            </div>
            <div class="e-ec-column t-right">
                <h3 class="e-ecc-position-title">Web Developer</h3>
                <ul>
                    <li>Maintained and enhanced proprietary software platform 'CMC3'</li>
                    <li>Helped build quality, responsive websites by working with frontend developers and admin staff
                    </li>
                    <li>Created multi-environment development setup which utilizes Vagrant, Jenkins, and Phing</li>
                    <li>Implemented front-end development standards</li>
                </ul>
                <h4>Notable Work:</h4>
                <p><em><u>RideKC.org</u></em> - Developed entire site from provided PSD to launch. Utilized a modular
                    CSS standard I created to make development faster and future updates easier. It was built fully
                    responsive and HD display ready using Foundation and Compass. CMS was purposely setup to ensure
                    client couldn't degrade quality over time by providing better content structure and minimizing
                    free-form input.</p>
            </div>
        </div>
        <div class="e-e-company">
            <div class="e-ec-column t-left">
                <h3 class="e-ecc-company-name">High Touch Technologies</h3>
                <ul class="e-ecc-company-info">
                    <li class="e-eccci-item">Wichita, KS</li>
                    <li class="e-eccci-item">Sep 2014 - Aug 2015</li>
                </ul>
            </div>
            <div class="e-ec-column t-right">
                <h3 class="e-ecc-position-title">Web Developer</h3>
                <ul>
                    <li>Built websites using premium themes for the WordPress platform</li>
                    <li>Created custom WordPress plugins to meet client needs</li>
                    <li>Provided technical support (email, hosting, etc.) and CMS training for various clientele</li>
                    <li>Reorganized and maintained numerous linux and windows servers</li>
                </ul>
            </div>
        </div>
        <div class="e-e-company">
            <div class="e-ec-column t-left">
                <h3 class="e-ecc-company-name">Lifeboat Creative</h3>
                <ul class="e-ecc-company-info">
                    <li class="e-eccci-item">Wichita, KS</li>
                    <li class="e-eccci-item">Oct 2010 - Aug 2014</li>
                </ul>
            </div>
            <div class="e-ec-column t-right">
                <h3 class="e-ecc-position-title">Web Developer</h3>
                <ul>
                    <li>Built high quality websites from the ground up using layouts provided by graphic designers</li>
                    <li>Assessed projects upon assignment to find the most efficient path to completion making sure not
                        to sacrifice security, usability, or maintainability
                    </li>
                    <li>Took advantage of a collaborative environment, which helps to find the best solutions to
                        problems that arise during development
                    </li>
                    <li>Implemented development standards, version control system (GIT), and multi-environment
                        development setup utilizing local, staging, and production environments
                    </li>
                    <li>Provided technical support (email, hosting, etc.) and CMS training</li>
                </ul>
                <h4>Notable work:</h4>
                <p><em><u>MyKTag.com</u></em> - Built Phase 1 of this site from provided PSD to launch utilizing my PHP
                    framework IonMVC and modular CSS standards. Worked closely with client to build a nice UI for the
                    K-Tag request form which was the backbone of the initial phase. Wrote an API for taking in user
                    input and submitting it to backend processes to be securely stored in existing databases.</p>
            </div>
        </div>
        <div class="e-e-company">
            <div class="e-ec-column t-left">
                <h3 class="e-ecc-company-name">HIT Web Solutions</h3>
                <ul class="e-ecc-company-info">
                    <li class="e-eccci-item">Nov 2007 - Dec 2010</li>
                </ul>
            </div>
            <div class="e-ec-column t-right">
                <h3 class="e-ecc-position-title">Remote Web Developer</h3>
                <ul>
                    <li>Interpreted write-up describing site functionality and prepared a plan to proceed</li>
                    <li>Facilitated client contact
                        <ul>
                            <li>Asked questions to better ascertain what they were trying to accomplish with their
                                website
                            </li>
                            <li>Gave periodic reports as to what had been completed and what was currently being worked
                                on
                            </li>
                        </ul>
                    </li>
                    <li>Programmed websites that met or exceeded client expectations
                        <ul>
                            <li>Ensured all code meets strict security standards set by security officer</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="e-skills">
        <h2>Skills</h2>
        <p>Producing clean, consistent, human readable code that validates under the strictest of standards and is
            tailored for peak performance.</p>
        <p>Crafting hand coded, HTML 5, CSS 3, responsive websites that are W3C compliant and work consistently between
            all major browsers.</p>
        <h3>Backend</h3>
        <p>PHP 5+ (both procedural and object oriented), MySQL/MariaDB, Relational database design, Redis, Memcached,
            Project architecture, RESTful API design</p>
        <h4>Frameworks</h4>
        <p>CodeIgniter 2, Laravel 5</p>
        <h4>Task Runners</h4>
        <p>Gulp, Phing</p>
        <h4>Behavior-Driven Development Tools</h4>
        <p>Behat, Mink, Codeception, Selenium, Browserstack</p>
        <h3>Frontend</h3>
        <p>HTML5 (including canvas, video, audio, and websockets), CSS3, SASS, Compass, Responsive Design,
            JS (ES5 with some ES6 knowledge), jQuery, jQuery Plugin Development, jQueryUI, AJAX, Bower, WebRTC</p>
        <h4>Frameworks</h4>
        <p>Foundation 5-6, Bootstrap 3</p>
        <h3>Content Management, Blogging, and E-commerce Systems</h3>
        <p>ExpressionEngine 2 (including addon development), CartThrob,
            WordPress (including plugin and theme development), WooCommerce, Drupal 6-7 (very basic knowledge),
            OpenCart, Magento (install and configuration only)</p>
        <h3>Version Control Systems</h3>
        <p>Git (Self-hosted, Github, Gitlab, and Bitbucket)</p>
        <h3>Development Methodologies</h3>
        <p>Agile, Scrum, Waterfall</p>
        <h3>Project Management/Time Tracking Tools</h3>
        <p>Jira, Trello, VersionOne, BaseCamp, Podio, Harvest</p>
        <h3>Linux Administration and DevOps</h3>
        <p>Centos 6-7, Ubuntu 14.04, Nginx, Apache, Jenkins, Puppet, Vagrant, Varnish</p>
        <h4>Amazon Web Services</h4>
        <p>Route 53, VPC, EC2, EBS, ELB, EIP, S3, CloudFront, CloudWatch, RDS, ElastiCache</p>
    </div>
    <div class="e-projects">
        <h2>Projects</h2>
        <h3>IonMVC</h3>
        <p>Home grown PHP 5.4+ MVC framework built over the last 7 years. It is currently being overhauled to utilize
            PHP 7 features and conform to some PSR standards.</p>
        <p>See http://github.com/kkeith29 for more.</p>
    </div>
</div>
</body>
</html>