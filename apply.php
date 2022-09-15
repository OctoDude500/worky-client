<?php include "inc/header.php"; ?>
<?php include "inc/validation.php"; ?>
<?php // var_dump($name, $email_one, $email_two, $phone, $language, $workplace, $attempts, $location);?>
<section class="section-background" id="hero">
        <div class="container hero-container">
            <div class="hero-title">
                <h1>
                    <span>Apply</span>
                    <?php //echo $nameErr ?>
                    <?php
                    if (!empty($errors)){
                        echo "<p>is  not empty</p>";
                    } ?>
                    <?php
                        if(!$is_success) {
                            echo "<?php <p>can´t post</p>";

                        }
                    ?>
                </h1>
            </div>
            <div class="hero-sub">
                <p>Let Us Refer You To The Best Call Center In The Country</p>
            </div>
        </div>
    </section>
    <section id="how-it-works">
        <div class="how-background-skewed"></div>
        <main >
            <div class="main-p">
                <h2>How Does It Work?</h2>
                <div class="inner-main-p">
                    <p>Whether you are looking for a change</p>
                    <p>Or want to start working speaking a new language</p>
                    <p>we help you get it</p>
                </div>
            </div>
            <div class="how-cards">
                <div class="card-container form-container">
                    <form class="application_container" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="application/x-www-form-urlencoded" novalidate>
                        <div class="form-div">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control">
                            <small ><?php echo $nameErr?></small>
                            <small ><?php //echo  $_SERVER["CONTENT_TYPE"];?></small>

                        </div>
                        <div class="form-div">
                            <label for="email_one">Email</label>
                            <span>(You'll get your exams here)</span>
                            <input type="email" name="email_one" id="email_one">
                            <small><?php echo $email_oneErr?></small>
                        </div>
                        <div class="form-div">
                            <label for="email_two">Confirm Email</label>
                            <input type="email" name="email_two" id="email_two">
                            <small><?php echo $email_twoErr?></small>
                        </div>
                        <div class="form-div">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone">
                            <small><?php echo $phoneErr?></small>
                        </div>
                        <div class="form-div">
                            <label for="language">Preferred Language</label>
                            <span>(At least 80% proficiency and 60% to apply to the academy)</span>
                            <select name="language" id="language">
                                <option selected disabled>Select your language</option>
                                <option value="EN">English</option>
                                <option value="DE">German</option>
                                <option value="FR">French</option>
                                <option value="IT">Italian</option>
                                <option value="PT">Portuguese</option>
                            </select>
                            <small><?php echo $languageErr?></small>
                         </div>
                         <div class="form-div">
                            <label for="workplace">Choose your workplace</label>
                            <span>(Depends on availability)</span>
                            <select name="workplace" id="workplace">
                                <option value="default" selected disabled>Select workplace</option>
                                <option value="home">From Home (WFH)</option>
                                <option value="on_site">On Site</option>
                            </select>
                            <small><?php echo $workplaceErr?></small>
                         </div>
                        <div class="form-div">
                            <label for="attempts">Have you been referred or applied before?</label>
                            <select name="attempts" id="attemps">
                                <option value="default" selected disabled>Select attempts history</option>
                                <option value="first_time">This is my first time applying!</option>
                                <option value="less_six">1 - 6 months ago (At least once)</option>
                                <option value="more_six">More than 6 months ago (At least once)</option>
                            </select>
                            <small><?php echo $attemptsErr?></small>
                        </div>
                        <div class="form-div">
                            <label for="location">Choose your preferred location</label>
                            <select name="location" id="location">
                                <option value="default" selected disabled>Select location</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="xela">Xela</option>
                            </select>
                            <small><?php echo $locationErr?></small>
                        </div>
                        <button type="submit" class="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="languages-footer"></div>
        </main>
    </section>
<?php  ?>
    <?php include "inc/footer.php"; ?>
