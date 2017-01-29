<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
    <ul class="right hide-on-med-and-down">
          <li>Hello someName</li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">My Account<i class="material-icons right">arrow_drop_down</i></a></li>         
    </ul>



</nav>
  <div class="row" id="subnav">
    <div class="col m2">
      <h4 class="valign"> Budsdeal</h4>
    </div>
    <div class="col m2">
      <div class="input-field col s12">
        <select>
          <option value="" disabled selected>Search Region</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
      </div>
    </div>
    <div class="col m8">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </div>