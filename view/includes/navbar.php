<?php 
  class links{
    public $home;
    public $main;
    public $sobre;

    public function exibirnav($novohome, $novomain, $novosobre){

      $this->home = $novohome;

      echo '<nav id="navbar">
      <input type="checkbox" id="nav-toggle">
        <div class="logo" href="#">Sistema <strong>Solar</strong></div>
        <ul class="links">
          <li><a href="' .  $novohome . '">Home</a></li>
          <li><a href="' . $novomain . '">Planetas</a></li>
          <li><a href="' . $novosobre .'">Sobre</a></li>
        </ul>
        <label for="nav-toggle" class="hamburguer">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
      </nav>';
  }
  }
