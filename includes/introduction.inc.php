<?php
//require 'js/introduction.js';
?>

<section class="introduction">
    <div class="introduction__wrapper">
        <div class="introduction__head">
            <h1>Introduction page</h1>

            <p>This page serves as an introduction to who I am, what I do and finally why I do the things I do. </p>

            <h3>Table of content</h3>
            <ul>
                <li class="introduction-trigger">About me</li>
                <li class="introduction-trigger">Skills</li>
                <li class="introduction-trigger">Hobbies</li>
                <li class="introduction-trigger">interests</li>
            </ul>
        </div>
        <div class="introduction__content">
            <div class="introduction__section about-me">
                <h3>
                    About me
                </h3>
                <p>
                    This is the part where I get you up to speed to who I am.
                    Thats a simple question. I am maoro salva flores. I am 17 years old.
                </p>
                <p>
                    A few quality's of mine would be: Social, communicative, Enthusiastic, Independent and or team
                    worker
                    flexible, creative.
                </p>
                <p>
                    And finally why do I do the things I do? For the most part it is to hone my skills and knowledge
                    so I
                    can
                    do more in the future. What I love the most is the opportunity to be able to choose. So I work
                    hard so
                    that
                    I can always have the option to do what I want.
                </p>
            </div>

            <div class="introduction__section">
                <h3>
                    Skills
                </h3>

                <p>
                    The skills I have acquired so far, range far and wide since I keep myself busy with a variety of
                    things.
                    So to summarize my skills a bit easier il list them under categories. Which are listed below.
                </p>
                <ul>
                    <li>Coding</li>
                    <li>Managing</li>
                    <li>Hardware and Sound</li>
                    <li>Producing</li>
                    <li>?</li>
                </ul>
                <div class="introduction-item">
                    <h2>Coding</h2>
                    <p>
                        Since there is more then one aspect when it comes to coding. I have decided to group everything
                        under
                        sub-category's. Each sub-category then goes into detail about the languages or frameworks
                        mentioned
                        and my experience with them.
                    </p>

                    <p>List of languages</p>
                    <p><i>Ranging from most competent with to least</i></p><br>
                    <p>
                        With languages I mean purely the programming language itself. Not some framework or something
                        different from writing the code in a pure way.
                    </p>
                    <ul>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>C#</li>
                    </ul>

                    <p>Non language</p>
                    <p>
                        Coding languages that don't really count as a language but are still area's where knowledge
                        and or experience matter.
                    </p>
                    <ul>
                        <li>Javascript</li>
                        <li>Scss</li>
                        <li>?</li>
                    </ul>

                    <p>Frameworks</p>
                    <p>
                        Coding frameworks which I have previously worked with and so have experience working with.
                    </p>
                    <ul>
                        <li>Laravel (php)</li>
                        <li>Django (python)</li>
                    </ul>
                </div>
                <div class="introduction-item">
                    <h3>Managing</h3>
                    <p>
                        For now there isn't really allot to say about my management skills since there is no real
                        public display for them. Although I love to host events and or manage small projects. These
                        displays of management have all been within private spaces with no direct link or reference to
                        them.

                    </p>
                    <h4>What now?</h4>
                    <p>
                        As for my current situation. I am currently managing my own project group called
                        <strong><a href="projectdg.nl">project dg</a></strong>. Within this group there are a couple of
                        projects running. These projects will be available to the public and are probably displayed all
                        across this website right now.
                    </p>
                </div>
                <div class="introduction-item">
                    <h3>hardware & Sound</h3>
                    <p>
                        For this skill related tab il go into detail about my experience with hardware and sound related
                        skills such as: repairment of hardware, music production, fabrication of hardware (in
                        combination
                        with self-made software), computer construction and video and sound editing.
                    </p>

                    <h4>Hardware</h4>
                    <p>
                        I have interacted and tried to manipulate hardware my entire life. I started to craft self-made
                        machines in earlier parts of my life. But as I started to do this less as became more entranced
                        with
                        software and creating software. Although I did stop manipulation and tangeling with hardware for
                        a
                        while. I am not trying to get back into it by doing a couple of projects under my collective
                        <a href="projectdg.nl">project dg</a>. Here I have a couple of repositories setup with projects
                        linked to them where I try to make something from nothing.
                    </p>

                    <p>
                        As for other hardware related things. All I really have to show for it is an old school projects
                        where I read the temperature with the help of a thermostate that was linked to a arduino. This
                        temperature
                        was then taken from the arduino bord and displayed in a graph. For the things displayed in the
                        graph
                        are listed in ....
                    </p>


                    <h4>Sound</h4>
                    <p>
                        Here I will list all my experiences and skills related to sound, sound manipulation, creation
                        and
                        distortion.
                    </p>

                    <h5>Music</h5>
                    <p>
                        For music, il keep it rather short since this topic will reaccure in the hobby's section.
                        I can play 2 instruments: Piano and guitar. I can make music on programs like FL studio and
                        Garage band. And i can -....?
                    </p>
                </div>
            </div>


            <div class="introduction__error">
                <div class="introduction-error">
                    <h1>Error</h1>
                    <p>You clicked on something outside the scope of the index array.</p>
                    <p>Please click on something within the table of content.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function codeAddress() {
        const contentTriggers = document.querySelectorAll('.introduction-trigger');  //pakt alle items met class
        const contentBlocks = document.querySelectorAll('.introduction__section');
        const error = document.querySelector('.introduction__error');


        // console.log(contentBlocks[1]);

        for (let i = 0; i < contentTriggers.length; i++) {
            var anchor = contentTriggers[i];

            console.log(anchor);


            //if contentTriggers outside of scope of contentBlocks
            //then display error box

            anchor.onclick = function () {
                for (let x = 0; x < contentBlocks.length; x++) {
                    contentBlocks[x].classList.remove('active')
                }
                if (contentBlocks[i] === undefined) {
                    error.classList.add('active')
                } else {
                    error.classList.remove('active')
                    contentBlocks[i].classList.add('active')
                }
            }
        }
    }

    window.onload = codeAddress;
</script>

<!--<div class="introduction__section">-->
<!--    <div class="introduction-skills">-->
<!--        <h3 id="introduction-skills">-->
<!--            Skills-->
<!--        </h3>-->
<!---->
<!--        <p>The skills I have acquired so far, range far and wide since I keep myself busy with a variety of things.-->
<!--            So to summarize my skills a bit easier il list them under categories. Which are listed below.-->
<!--        </p>-->
<!--        <ul>-->
<!--            <li>Coding</li>-->
<!--            <li>Managing</li>-->
<!--            <li>Hardware and Sound</li>-->
<!--            <li>Producing</li>-->
<!--            <li>?</li>-->
<!--        </ul>-->
<!---->
<!--        <div class="introduction-skills-coding">-->
<!--            <h2>Coding</h2>-->
<!--            <p>-->
<!--                Since there is more then one aspect when it comes to coding. I have decided to group everything-->
<!--                under-->
<!--                sub-category's. Each sub-category then goes into detail about the languages or frameworks mentioned-->
<!--                and my experience with them.-->
<!--            </p>-->
<!---->
<!--            <p>List of languages</p>-->
<!--            <p><i>Ranging from most competent with to least</i></p><br>-->
<!--            <p>-->
<!--                With languages I mean purely the programming language itself. Not some framework or something-->
<!--                different from writing the code in a pure way.-->
<!--            </p>-->
<!--            <ul>-->
<!--                <li>PHP</li>-->
<!--                <li>Python</li>-->
<!--                <li>C#</li>-->
<!--            </ul>-->
<!---->
<!--            <p>Non language</p>-->
<!--            <p>-->
<!--                Coding languages that don't really count as a language but are still area's where knowledge-->
<!--                and or experience matter.-->
<!--            </p>-->
<!--            <ul>-->
<!--                <li>Javascript</li>-->
<!--                <li>Scss</li>-->
<!--                <li>?</li>-->
<!--            </ul>-->
<!---->
<!--            <p>Frameworks</p>-->
<!--            <p>-->
<!--                Coding frameworks which I have previously worked with and so have experience working with.-->
<!--            </p>-->
<!--            <ul>-->
<!--                <li>Laravel (php)</li>-->
<!--                <li>Django (python)</li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!--        <div class="introduction-skills-managing">-->
<!--            <h3>Managing</h3>-->
<!--            <p>-->
<!--                For now there isn't really allot to say about my management skills since there is no real-->
<!--                public display for them. Although I love to host events and or manage small projects. These-->
<!--                displays of management have all been within private spaces with no direct link or reference to them.-->
<!---->
<!--            </p>-->
<!--            <h4>What now?</h4>-->
<!--            <p>-->
<!--                As for my current situation. I am currently managing my own project group called-->
<!--                <strong><a href="projectdg.nl">project dg</a></strong>. Within this group there are a couple of-->
<!--                projects running. These projects will be available to the public and are probably displayed all-->
<!--                across this website right now.-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="introduction-skills-hardware-sound">-->
<!--            <h3>hardware & Sound</h3>-->
<!--            <p>-->
<!--                For this skill related tab il go into detail about my experience with hardware and sound related-->
<!--                skills such as: repairment of hardware, music production, fabrication of hardware (in combination-->
<!--                with self-made software), computer construction and video and sound editing.-->
<!--            </p>-->
<!---->
<!--            <h4>Hardware</h4>-->
<!--            <p>-->
<!--                I have interacted and tried to manipulate hardware my entire life. I started to craft self-made-->
<!--                machines in earlier parts of my life. But as I started to do this less as became more entranced with-->
<!--                software and creating software. Although I did stop manipulation and tangeling with hardware for a-->
<!--                while. I am not trying to get back into it by doing a couple of projects under my collective-->
<!--                <a href="projectdg.nl">project dg</a>. Here I have a couple of repositories setup with projects-->
<!--                linked to them where I try to make something from nothing.-->
<!--            </p>-->
<!---->
<!--            <p>-->
<!--                As for other hardware related things. All I really have to show for it is an old school projects-->
<!--                where I read the temperature with the help of a thermostate that was linked to a arduino. This-->
<!--                temperature-->
<!--                was then taken from the arduino bord and displayed in a graph. For the things displayed in the graph-->
<!--                are listed in ....-->
<!--            </p>-->
<!---->
<!---->
<!--            <h4>Sound</h4>-->
<!--            <p>-->
<!--                Here I will list all my experiences and skills related to sound, sound manipulation, creation and-->
<!--                distortion.-->
<!--            </p>-->
<!---->
<!--            <h5>Music</h5>-->
<!--            <p>-->
<!--                For music, il keep it rather short since this topic will reaccure in the hobby's section.-->
<!--                I can play 2 instruments: Piano and guitar. I can make music on programs like FL studio and-->
<!--                Garage band. And i can -....?-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->


<!--            <div class="introduction__section">-->
<!---->
<!--            </div>-->
<!--            <div class="introduction__section">-->
<!---->
<!--            </div>-->
<!--            <div class="introduction__section">-->
<!---->
<!--            </div>-->


<!--        <div class="introduction-hobbies">-->
<!--            <h3 id="introduction-hobbies">Hobbies</h3>-->
<!--            <p>Een display van al mijn hobbies</p>-->
<!--            <p></p>-->
<!--        </div>-->
<!---->
<!--        <div class="introduction-interest">-->
<!--            <h3 id="introduction-interests">Interests</h3>-->
<!--            <p>Verdieping in 4-5 interesses</p>-->
<!--        </div>-->
