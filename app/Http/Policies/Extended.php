<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

// Use Spatie Spatie\Csp\Policies::Basic;
class Extended extends Basic
{
    public function configure()
    {
        parent::configure();
        
		// Allow scripts from Bootstrap
        $this->addDirective(Directive::STYLE, 'maxcdn.bootstrapcdn.com');

        // Allow scripts from Google.com // Fonts
        $this->addDirective(Directive::STYLE, 'fonts.googleapis.com');
        $this->addDirective(Directive::DEFAULT, 'fonts.gstatic.com');
        $this->addDirective(Directive::SCRIPT, 'https://www.googletagmanager.com/gtag/js');
        $this->addDirective(Directive::IMG, 'https://www.googletagmanager.com/');
        $this->addDirective(Directive::IMG, 'https://www.google-analytics.com/collect');
        $this->addDirective(Directive::SCRIPT, 'https://www.google-analytics.com/j/collect');

        // Allow Javascripts (jQuery and Bootstrap)
        $this->addDirective(Directive::SCRIPT, 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
        $this->addDirective(Directive::SCRIPT, 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
        $this->addDirective(Directive::SCRIPT, 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');

        // fontawesome
        $this->addDirective(Directive::SCRIPT, 'https://use.fontawesome.com');
        $this->addDirective(Directive::IMG, 'https://use.fontawesome.com');
        $this->addDirective(Directive::SCRIPT, 'https://use.fontawesome.com/releases/v5.0.8/js/all.js');
        $this->addDirective(Directive::STYLE, 'https://use.fontawesome.com/releases/v5.0.8/css/all.css');
        // $this->addDirective(Directive::IMG, 'http://www.w3.org/2000/svg');

        //
        $this->addDirective(Directive::SCRIPT, 'self');
        $this->addDirective(Directive::STYLE, 'self');
        $this->addNonceForDirective(Directive::SCRIPT);
        $this->addNonceForDirective(Directive::STYLE);
    }
}