<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

use Spatie\Csp\Value;

// Use Spatie Spatie\Csp\Policies::Basic;
class Extended extends Basic
{
    public function configure()
    {
      parent::configure();

		  // Allow scripts from Bootstrap
      $this->addDirective(Directive::DEFAULT, 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/');
      $this->addDirective(Directive::SCRIPT, 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js');
      $this->addDirective(Directive::STYLE, 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css');
      $this->addDirective(Directive::FONT, 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/');
        

      // Allow scripts from Google.com // Fonts, Tag Manager, Analytics
      $this->addDirective(Directive::DEFAULT, 'https://fonts.gstatic.com');
      $this->addDirective(Directive::STYLE, 'https://fonts.googleapis.com');
      $this->addDirective(Directive::SCRIPT, 'https://fonts.googleapis.com');
      $this->addDirective(Directive::FONT, 'https://fonts.gstatic.com');
      
      $this->addDirective(Directive::SCRIPT, '*.googletagmanager.com');
      $this->addDirective(Directive::STYLE, '*.googletagmanager.com');
      $this->addDirective(Directive::IMG, '*.googletagmanager.com');

      $this->addDirective(Directive::DEFAULT, '*.google-analytics.com');
      $this->addDirective(Directive::SCRIPT, '*.google-analytics.com');
      $this->addDirective(Directive::STYLE, '*.google-analytics.com');
      $this->addDirective(Directive::IMG, '*.google-analytics.com');
      $this->addDirective(Directive::CONNECT, '*.google-analytics.com');

      $this->addDirective(Directive::DEFAULT, '*.google-analytics.com/j/collect');
      $this->addDirective(Directive::SCRIPT, '*.google-analytics.com/j/collect');
      $this->addDirective(Directive::STYLE, '*.google-analytics.com/j/collect');
        
      // Allow JavaScript (jQuery and Bootstrap)
      $this->addDirective(Directive::SCRIPT, 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
      $this->addDirective(Directive::SCRIPT, 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
      // $this->addDirective(Directive::SCRIPT, 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');

      // fontawesome
      $this->addDirective(Directive::DEFAULT, 'https://use.fontawesome.com/');
      $this->addDirective(Directive::SCRIPT, 'https://use.fontawesome.com/');
      $this->addDirective(Directive::STYLE, 'https://use.fontawesome.com/');
      $this->addDirective(Directive::FONT, 'https://use.fontawesome.com/');
      $this->addDirective(Directive::IMG, 'https://use.fontawesome.com/');

    }
}