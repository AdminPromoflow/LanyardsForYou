
<style>

/* Footer */
.footer {
  font-size: 0.9em;
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  background: rgb(63,152,237);
  background: linear-gradient(90deg,  rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%);
/**  background: rgb(63,152,237);
  background: linear-gradient(270deg, rgba(69,79,177,1) 0%, rgba(69,79,177,1) 33%, rgba(69,79,177,1) 73%, rgba(69,79,177,1) 95%);*/
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}
  .footer__logo img {
    width: 200px;
  }

.footer__addr h2 {
  margin-top: 1.3em;
  font-weight: 400;
  font-size: 1.4em;
}

.nav__title {
  color: white;
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: white;
  margin-left: 3.1em;
  font-size: 1.4em;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: #E8E8E8;
  border-radius: 100px;
  color: white;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
  font-size: 1.2em;
  font-weight: 300;

}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: white;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: white;
  border-top: 1px solid #383838;
  padding-top: 15px;
  font-size: 0.75em;
}
.legal p {
  color: lightgrey;
  font-size: 1.4em;
  font-weight: 300;
}
.legal__links {
  display: flex;
  align-items: center;
}
.legal__links a {
  text-decoration: none;
  color: white;
  margin-left: 5px;
}

.heart {
  color: white;
}
.left-Padding{
  margin-left: 3.1em;

}
.logoFooter{
  filter: drop-shadow(1px 1px 0px black);
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }

  .nav__item--extra {
    flex-grow: 2;
  }

  .footer__addr {
    flex: 1 0px;
  }

  .footer__nav {
    flex: 2 0px;
  }
}

</style>


<!-- Footer -->
<Footer class="footer">

  <div class="footer__addr">
    <h1 class="footer__logo"> <a href="index.php"><img  class="logoFooter" src="../../Pages/General/Footer/Logo.png"></a> </h1>
    <h2 class="nav__title left-Padding"> Contact </h2><br>
    <address>
      England, Hamble <br><br>
      Phone 02380 457711 <br>  <br>
      Address 15 Compass Point, Ensign Way, Hamble, Southampton SO31 4RA UK <br>  <br>
      Office
      </address>
  </div>

  <ul class="footer__nav">
    <li class="nav__item nav__item--extra">
      <ul class="nav__ul nav__ul--extra">
        <li> <a href="#"> Lanyard </a> </li>
        <li> <a href="#">About us</a> </li>
        <li> <a href="#">Contact us</a> </li>
        <li> <a href="#">My lanyards</a> </li>
      </ul>
    </li>
  </ul>

  <div class="legal">
    <p>&copy; 2022 Lanyards for you. </p>
  </div>
</Footer>
<!-- End Footer -->
