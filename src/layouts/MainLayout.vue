 <template>
   <div>
 <input type="checkbox" id=checkbox-menu>
  <label for="checkbox-menu">
    <ul class="menu touch">
      <li><a class="logo" href="#">EVENT MBA</a></li>
      <li><a><router-link to="/">Home</router-link></a></li>
      <li><a><router-link to="/News">News</router-link></a></li>
      <li><a><router-link to="">Marker</router-link></a></li>
      <li><a><router-link to="/Register">Personal Area</router-link></a></li>
      <li><a><router-link to="">About us</router-link></a></li>
    </ul>
    <span class="toggle">☰</span>
  </label>
     <router-view />
  <div class="intro-basement">
    <div class="container tagline">
      <div>
      <p style="text-align: center"><i class="firstTagline"></i>EVENT MBA — минималистичное СМИ.</p>
      <p style="text-align: center"><i class="firstTagline"></i>Ничего лишнего, визуальные концепции в мире EVENT.</p>
      </div>
      <div class="intro-contacts" style="align-items: center">
      <div class="container row-contacts">
        <p><i class="fas fa-phone-alt"></i>(999)123-456-789</p>
        <p><i class="fas fa-map-marker-alt"></i>Belgorod, Russia</p>
      </div>
    </div>
    </div>
  </div>
   </div>
 </template>
