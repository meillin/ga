

    <?php include 'pages/header.php';?>


      <section class="main-container text-center clearfix">

        <main>

          <div class="enter-text row">
            <div class="large-10 large-centered columns">
              <h1>Get in touch with us</h1>
              <p>
                We're always happy to hear about new and old business challenges. Feel free to drop us a line about your specific conundrum and we'll get back to you ASAP!
              </p>
            </div>
          </div>

          <form class="small-12 medium-8 columns medium-centered">

            <div class="row">
                <div class="small-1 columns">
                  <label for="name" class="label-icon"><img src="images/svg/user.svg" /></label>
                </div>
                <div class="small-10 columns">
                  <input type="text" id="right-label" placeholder="Your name" required>
                </div>
                <div class="small-1 columns"><label class="label-require">*</label></div>
            </div>

            <div class="row">
                <div class="small-1 columns">
                  <label for="email" class="label-icon"><img src="images/svg/mail.svg" /></label>
                </div>
                <div class="small-10 columns">
                  <input type="email" id="right-label" placeholder="Your email" required>
                </div>
                <div class="small-1 columns"><label class="label-require">*</label></div>
            </div>

            <div class="row">

                <div class="small-1 columns">
                  <label for="phone" class="label-icon"><img src="images/svg/telephone.svg" /></label>
                </div>
                <div class="small-10 columns">
                  <input type="number" id="right-label" placeholder="Only if you want us to give you a call">
                </div>
                <div class="small-1 columns"><label class="label-require"></label></div>

            </div>

            <div class="row">

                <div class="small-1 columns">
                  <label for="company" class="label-icon"><img src="images/svg/home.svg" /></label>
                </div>
                <div class="small-10 columns">
                  <input type="text" id="right-label" placeholder="Your company">
                </div>
                <div class="small-1 columns"><label class="label-require"></label></div>

            </div>

            <div class="row">

            <div class="small-12 columns">
              <fieldset>
                <legend>Your project (optional)</legend>

                  <div class="small-6 columns">
                    <label for="stage" class="label-icon left">Budget stage</label>
                    <select>
                      <option>Choose your budget stage</option>
                      <option value="approved">Approved</option>
                      <option value="planning">Planning</option>
                    </select>
                  </div>

                  <div class="small-6 columns">
                    <label for="stage" class="label-icon left">Expected start date</label>
                    <select>
                      <option>Choose expected start date</option>
                      <option value="1">Within 1 month</option>
                      <option value="2">1-2 months</option>
                      <option value="3">Over 2 months</option>
                    </select>
                  </div>

              </fieldset>
            </div>
            </div>

            <div class="row">

            <div class="small-1 columns">
              <label for="budget" class="label-icon"><img src="images/svg/pencil.svg" /></label>
            </div>

            <div class="small-10 columns">
              <textarea name="message" id="" cols="30" rows="6" placeholder="Leave your message here"></textarea>
            </div>
            <div class="small-1 columns"><label class="label-require"></label></div>

            </div>

            <div class="row">
              <div class="small-1 columns"><label><img src="" /></label></div>
              <div class="small-10 columns">
                <input type="submit" class="line-button right" value="SEND">
              </div>
              <div class="small-1 columns"><label class="label-require"></label></div>
            </div>

          </form>

        </main>
      </section>

      <?php include 'pages/footer.php';?>
  </body>
</html>
