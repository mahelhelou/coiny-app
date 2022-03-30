<?php
/**
 * The main template file
 *
 * @package Package Name
 */

get_header();
?>

<!-- Showcase -->
<section class="showcase">
  <div class="primary-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="mt-0 mt-md-5 pt-5">CoinY: Track Your Money!</h1>
          <p class="mt-3"><strong>CoinY</strong> is your assistant to track your expenses, income, balances, and
            financial goals all for free and in one place.
          </p>
          <button class="mt-4 btn btn-light btn-lg">Save Your Money Now</button>
        </div>
        <div class="col-md-4">
          <div class="showcase__image">
            <img src="<?php echo get_template_directory_uri() . '/app/images/hero.jpg'; ?>" alt="CoinY App">
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- showcase-end -->

<!-- Features -->
<section class="features py-5">
  <div class="container">
    <h2 class="section-title">Why CoinY is Your Best Finance Manager?</h2>
    <h3 class="section-subtitle section-subtitle--smaller mb-5">CoinY helps you</h3>
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid"
          src="<?php echo get_template_directory_uri() . '/app/images/automate-your-transactions.jpg'; ?>"
          alt="Automate Your Transactions">
      </div>
      <div class="col-md-6">
        <h3 class="section-subtitle">Automate Your Frequent Transaction</h3>
        <p>CoinY saves you the trouble of adding expenses manually every month. It records your repeated expenses for
          you automatically once you add the categories.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid"
          src="<?php echo get_template_directory_uri() . '/app/images/record-your-expenses.jpg'; ?>"
          alt="Record your expenses with any currency">
      </div>
      <div class="col-md-6">
        <h3 class="section-subtitle">Record Your Expenses and Revenues with any Currency</h3>
        <p>Have your financial reports ready. You add revenues and expenses, and CoinY gives your financial reports.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/app/images/set-spending-limits.jpg'; ?>"
          alt="Set your spending limits">
      </div>
      <div class="col-md-6">
        <h3 class="section-subtitle">Set Your Spending Limits</h3>
        <p>Cut or reduce unnecessary spendings. You’ll be offered to set your spending limit, and further reminded not
          to exceed it.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid"
          src="<?php echo get_template_directory_uri() . '/app/images/control-your-savings.jpg'; ?>"
          alt="Control your savings">
      </div>
      <div class="col-md-6">
        <h3 class="section-subtitle">Control Your Savings</h3>
        <p>See your savings grow. Seeing the growth of your savings keeps you enthusiastic and committed to your goal.
          CoinY shows you where your savings should be made and follow the savings.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/app/images/plan-for-assets.jpg'; ?>"
          alt="Plan for future assets">
      </div>
      <div class="col-md-6">
        <h3 class="section-subtitle">Plan for Future Assets</h3>
        <p>You can achieve your financial goals with Coiny. It assesses your progress with your savings in order to
          achieve your financial goals.</p>
      </div>
    </div>
  </div>
</section>
<!-- features-end -->

<!-- How it works -->
<section id="how-it-works" class="how-it-works py-5">
  <div class="container">
    <h2 class="section-title">Just Few Clicks Does the Trick</h2>
    <h3 class="section-subtitle section-subtitle--smaller mb-5">Simple Steps to Get Started With CoinY</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="text-center mb-4">
          <i class="fas fa-download fa-2x"></i>
        </div>
        <h4 class="text-center">Download the App</h4>
      </div>
      <div class="col-md-4">
        <div class="text-center mb-4">
          <i class="fas fa-user-alt fa-2x"></i>
        </div>
        <h4 class="text-center">Setup Your Profile</h4>
      </div>
      <div class="col-md-4">
        <div class="text-center mb-4">
          <i class="fas fa-smile-wink fa-2x"></i>
        </div>
        <h4 class="text-center">Enjoy it for FREE!</h4>
      </div>
    </div>
  </div>
</section>
<!-- how-it-works-end -->

<!-- Tips -->
<section id="reasons" class="reasons py-5 text-center">
  <div class="container">
    <h2 class="section-title">Get Inspired With Our Financial Tips</h2>
    <h3 class="section-subtitle section-subtitle--smaller mb-5">Read More Tips</h3>
    <div class="owl-carousel">
      <div class="testimonials__item px-3 py-5">
        <div class="testimonials__item-quote">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, tenetur laudantium, placeat cum
            sunt, eum a delectus dolor magni aperiam qui quod vel culpa amet.</p>
        </div>
        <div class="testimonials__item-name mt-4">
          <h5 class="text-green font-weight-bolder mb-1">Israa Mousa</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- tips-end-->

<!-- AUTHORS -->
<section id="team" class="authors py-5">
  <h2 class="section-title">Meet The Team</h2>
  <h3 class="section-subtitle section-subtitle--smaller mb-5">Joint Interdependence</h3>
  <div class="container">
    <div class="owl-carousel">
      <!-- Tariq -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/tariq.jpeg'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Tariq El Helou</h3>
          <h4 class="authors__role">Web Developer</h4>
          <p class="mb-3">Tariq has solid knowledge and skills in web development. He also has strong self study
            abilities and up-to-date skills according to technologies and problem-solving.</p>
        </div>
      </div>
      <!-- tariq-end -->
      <!-- Amna -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/amna.jpg'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Amna Shabana</h3>
          <h4 class="authors__role">Content Writer and Translator</h4>
          <p class="mb-3">Amna writes content for websites, including articles, blog posts, newsletters, success
            stories, and marketing content. She also translates Arabic and English texts of any genre.
          </p>
        </div>
      </div>
      <!-- amna-end -->
      <!-- Mahmoud -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/mahmoud.jfif'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Mahmoud El Helou</h3>
          <h4 class="authors__role">WordPress Developer</h4>
          <p class="mb-3">Mahmoud is an experienced web developer and designer. He converts clients’ ideas into a
            real-life business.
          </p>
        </div>
      </div>
      <!-- mahmoud-end -->
      <!-- Doaa -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/doaa.jfif'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Doa'a Eleiwa</h3>
          <h4 class="authors__role">Bookkeeper</h4>
          <p class="mb-3">Doaa runs the accounting and financial activities of organizations. She helps companies and
            business owners analyze economic stability and helps them in budgeting.
          </p>
        </div>
      </div>
      <!-- doaa-end -->
      <!-- Mohammed -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/mohammed.jfif'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Mohammed Azzam</h3>
          <h4 class="authors__role">UX/UI Designer</h4>
          <p class="mb-3">Mohammed creates user-centered designs by understanding users and business requirements.
          </p>
        </div>
      </div>
      <!-- mohammed-end -->
      <!-- Samah -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/samah.jfif'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Samah Elqrenawi</h3>
          <h4 class="authors__role">Mobile Designer</h4>
          <p class="mb-3">Samah develops Android applications using (Java, Kotlin) language, and flutter applications
            creatively based on UI/UX Figma requirements and modules.
          </p>
        </div>
      </div>
      <!-- samah-end -->
      <!-- Safaa -->
      <div class="card">
        <div class="card-body">
          <div class="authors__img mx-auto">
            <img src="<?php echo get_template_directory_uri() . '/app/images/team/safa.jfif'; ?>" class="img-fluid">
          </div>
          <h3 class="authors__name">Safa'a Alamassi</h3>
          <h4 class="authors__role">Mobile Designer</h4>
          <p class="mb-3">Samah develops Android applications using (Java, Kotlin) language, and flutter applications
            creatively based on UI/UX Figma requirements and modules.
          </p>
        </div>
      </div>
      <!-- samah-end -->
    </div>
  </div>
</section>

</body>

</html>

<?php get_footer(); ?>