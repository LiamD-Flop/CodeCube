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
        <li><a onclick="goTo('klanten')" class="nav-link">Klanten</a></li>
        <li><a onclick="goTo('contact')" class="nav-link">Contact</a></li>
      </ul>
    </nav>

    <section class="intro w-100" id="intro">
      <h1 class="text-primary">De oplossing naar uw probleem</h1>
      <h4 class="font-weight-normal">code op maat gemaakt</h4>
      <button class="btn btn-primary mt-4" onclick="goTo('klanten')">Met wie hebben we samengewerkt</button>
    </section>
    <section id="team" class="pt-5 w-100">
      <h2 class="font-weight-bold text-center">Ons Team</h2>
      <h5 class="text-center font-weight-normal mt-0 mb-5">Klein team, Veel talenten!</h5>
      <div class="d-flex w-100 team-cards">
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">John Doe</h4>
          <img src="/media/placeholder.jpg" class="w-75 my-5">
          <h3 class="text-center">Hoofd-Designer</h3>
        </div>
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">John Doe</h4>
          <img src="/media/placeholder.jpg" class="w-75 my-5">
          <h3 class="text-center">CEO</h3>
        </div>
        <div class="team-card col-lg-2 col-sm-4 shadow py-5">
          <h4 class="text-center text-primary">John Doe</h4>
          <img src="/media/placeholder.jpg" class="w-75 my-5">
          <h3 class="text-center">Hoofd-Programmeur</h3>
        </div>
      </div>
    </section>
    <section id="klanten" class="mt-5 pb-5 pt-3">
      <h2 class="font-weight-bold text-center">Onze Klanten</h2>
      <div class="shadow m-auto col-lg-6 col-sm-12 p-0 bg-white">
        <article class="row w-100 d-flex mx-0">
          <div class="w-50 d-flex justify-content-center align-items-center text-break p-2">
            <p><span class="text-primary font-weight-bold">Dulst</span> is een wijnhandel die gespecialiseerd is in import van vooral Frans, Italiaansse, Oostenrijkse en Spaanse wijnen en daardoor beschikt over zeer ruim gamma. Met een opslagruimte van meer dan 1500m2 ter beschikking in hun ondergrondse opslagruimten worden hun wijnen in ideale omstandigheden bewaard. Hun missie is het rechtstreeks importeren van wijnen met een uitzonderlijke prijs/kwaliteitsverhouding. De geselecteerde producten komen van wijnbouwers met een passie voor hun product en die bij voorkeur verbouwen met respect voor de natuur. Dit alles wordt aan onze klanten aangeboden door van klantvriendelijkheid en service een prioriteit te maken.</p>
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
            <p><span class="text-primary font-weight-bold">Microsoft Corporation</span> is een Amerikaans bedrijf uit Redmond in Washington. <span class="text-primary font-weight-bold">Microsoft</span> ontwikkelt, verspreidt, licentieert en ondersteunt een breed scala aan computergerelateerde producten. Het bedrijf werd opgericht door Bill Gates en Paul Allen op 4 april 1975. Microsoft is 's werelds grootste softwarebedrijf. <span class="text-primary font-weight-bold">Microsoft</span> staat ook op de lijst van bedrijven met de hoogste beurswaarde ter wereld. Wij werken mee aan een project dat Cloudclass noemt en gebruik maakt van <span class="text-primary font-weight-bold">Microsoft</span> Office 365.</p>
          </div>
        </article>
      </div>
    </section>
    <section id="contact" class="pt-2 pb-5 w-100">
      <h2 class="font-weight-bold text-center">Contacteer Ons</h2>
      <form action="mailto:contact@liamd.me" method="post" class="form-group col-lg-6 col-sm-10 m-auto text-center">
        <input type="text" name="name" placeholder="Naam" class="form-control my-3">
        <input type="email" name="email" placeholder="example@example.be" class="form-control my-3">
        <textarea name="comment" rows="8" cols="80" class="form-control my-3" placeholder="Commentaar"></textarea>
        <button type="submit" class="btn btn-primary w-100">Verstuur bericht</button>
      </form>
    </section>
    <footer class="m-0 p-2 d-flex justify-content-center align-items-center"><p>Copyright ©<?php echo date("Y");?> CodeCube. This is a schoolproject.</p></footer>
  </body>
</html>
