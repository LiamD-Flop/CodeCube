<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/media/favicon.ico">
    <title>CodeCube</title>
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <script src="/js/main.js" charset="utf-8"></script>
    <script src="/js/bootstrap.bundle.min.js" charset="utf-8"></script>
  </head>
  <body>
    <nav class="d-flex w-100 mb-0">
      <ul class="col-4 d-flex flex-row align-items-center h-100">
        <li><a onclick="goTo('intro')" class="nav-link">Home</a></li>
      </ul>
      <ul class="col-4 d-flex flex-row justify-content-center">
        <li><a href="/nl"><img src="/media/Belgie.jpg" class="language"></a></li>
        <li class="logo"><img src="/media/CodeCube.jpg" class="w-100"></li>
        <li><a href="/en"><img src="/media/Engeland.jpg" class="language"></a></li>
      </ul>
      <ul class="col-4 d-flex flex-row justify-content-end align-items-center h-100">
        <li><a onclick="goTo('team')" class="nav-link">Team</a></li>
        <li><a onclick="goTo('klanten')" class="nav-link">Customers</a></li>
        <li><a onclick="goTo('contact')" class="nav-link">Contact</a></li>
      </ul>
    </nav>

    <section class="intro w-100" id="intro">
      <h1 class="text-primary">The solution for your problem</h1>
      <h4 class="font-weight-normal">fresh coding for your project</h4>
      <button class="btn btn-primary mt-4" onclick="goTo('klanten')">Who we worked with</button>
    </section>
    <section id="team" class="pt-5 w-100">
      <h2 class="font-weight-bold text-center">Our Team</h2>
      <h5 class="text-center font-weight-normal mt-0 mb-5">Small but talented!</h5>
      <div class="d-flex w-100 team-cards">
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">Jochem Crab</h4>
          <img src="/media/Jochem.jpg" class="w-75 my-5">
          <h3 class="text-center">Lead-Designer</h3>
        </div>
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">Yannick Van Campenhout</h4>
          <img src="/media/Yannick.jpg" class="w-75 my-5">
          <h3 class="text-center">CEO</h3>
        </div>
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">Jeremy Gobert</h4>
          <img src="/media/Jeremy.jpg" class="w-75 my-5">
          <h3 class="text-center">Lead-Programmer</h3>
        </div>
      </div>
    </section>
    <section id="klanten" class="mt-5 pb-5 pt-3">
      <h2 class="font-weight-bold text-center">Our Customers</h2>
      <div class="shadow m-auto col-lg-6 col-sm-12 p-0 bg-white">
        <article class="row w-100 d-flex mx-0">
          <div class="w-50 d-flex justify-content-center align-items-center text-break p-2">
            <p><span class="text-primary font-weight-bold">Dulst</span> is a wine merchant that is specialized in importing mostly French, Italian, Austrian and Spanish wines and therefore possesses a wide gamma. With an underground storage of more than 1500 square meters they are able to keep their wines in the perfect circumstances. Their mission is importing really good price/quality wine. The selected products come from wine farmers with a passion for their product and preferably wine farmers with respect for the nature. All of this is presented with customer-friendly service which is their priority.</p>
          </div>
          <div class="w-50">
            <img src="/media/Dulst.jpg" class="w-100 h-100">
          </div>
        </article>
        <article class="row w-100 d-flex mx-0">
          <div class="w-50">
            <img src="/media/Microsoft.jpg" class="w-100 h-100">
          </div>
          <div class="w-50 d-flex justify-content-center align-items-center text-break p-2">
            <p><span class="text-primary font-weight-bold">Microsoft</span> Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer electronics, personal computers, and related services. <span class="text-primary font-weight-bold">Microsoft</span> was founded by Bill Gates and Paul Allen on April 4, 1975. <span class="text-primary font-weight-bold">Microsoft</span> is the world’s biggest software company. <span class="text-primary font-weight-bold">Microsoft</span> is also on the list of companies with the highest trade value in the world. We work along on a project called CloudClass that uses <span class="text-primary font-weight-bold">Microsoft</span> Office 365.</p>
          </div>
        </article>
      </div>
    </section>
    <section id="contact" class="pt-2 pb-5 w-100">
      <h2 class="font-weight-bold text-center">Contact Us</h2>
      <form action="mailto:Yannick.vancampenhout@telenet.be" method="post" class="form-group col-lg-6 col-sm-10 m-auto text-center">
        <input type="text" name="name" placeholder="Name" class="form-control my-3">
        <input type="email" name="email" placeholder="example@example.co.uk" class="form-control my-3">
        <textarea name="comment" rows="8" cols="80" class="form-control my-3" placeholder="Comment"></textarea>
        <button type="submit" class="btn btn-primary w-100">Send message</button>
      </form>
    </section>
    <footer class="m-0 p-2 d-flex justify-content-center align-items-center"><p>Copyright ©<?php echo date("Y");?> CodeCube. This is a schoolproject.</p></footer>
  </body>
</html>
