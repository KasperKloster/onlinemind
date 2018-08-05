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


        //return $this->addDirective(Directive::STYLE, ['self', 'unsafe-inline']);
        // return $this
        //     ->addDirective(Directive::BASE, 'self');
            // ->addNonceForDirective(Directive::SCRIPT)
            // ->addDirective(Directive::SCRIPT, [
            //     '127.0.0.1',
            //     '127.0.0.1',
            // ])
            // ->addDirective(Directive::STYLE, [
            //     '127.0.0.1',
            //     '127.0.0.1',
            //     'unsafe-inline',
            // ])
            // ->addDirective(Directive::FORM_ACTION, [
            //     '127.0.0.1',
            //     '127.0.0.1',
            //     '127.0.0.1',
            // ])
            // ->addDirective(Directive::IMG, [
            //     '*',
            //     'unsafe-inline',
            //     'data:',
            // ])
            // ->addDirective(Directive::OBJECT, 'none');
        

		// Allow scripts from Bootstrap
        $this->addDirective(Directive::DEFAULT, 'https://maxcdn.bootstrapcdn.com');
        $this->addDirective(Directive::STYLE, 'https://maxcdn.bootstrapcdn.com');
        $this->addDirective(Directive::FONT, 'https://maxcdn.bootstrapcdn.com');

        // Allow scripts from Google.com // Fonts, Tag Manager, Analytics
        $this->addDirective(Directive::DEFAULT, 'https://fonts.gstatic.com');
        $this->addDirective(Directive::STYLE, 'https://fonts.googleapis.com/css');
        $this->addDirective(Directive::SCRIPT, 'https://fonts.googleapis.com/css');
        $this->addDirective(Directive::FONT, 'https://fonts.gstatic.com');
        
        $this->addDirective(Directive::SCRIPT, '*.googletagmanager.com');
        $this->addDirective(Directive::STYLE, '*.googletagmanager.com');
        $this->addDirective(Directive::IMG, '*.googletagmanager.com');

        $this->addDirective(Directive::DEFAULT, '*.google-analytics.com');
        $this->addDirective(Directive::SCRIPT, '*.google-analytics.com');
        $this->addDirective(Directive::STYLE, '*.google-analytics.com');
        $this->addDirective(Directive::IMG, '*.google-analytics.com');

        $this->addDirective(Directive::DEFAULT, '*.google-analytics.com/j/collect');
        $this->addDirective(Directive::SCRIPT, '*.google-analytics.com/j/collect');
        $this->addDirective(Directive::STYLE, '*.google-analytics.com/j/collect');
        
        // Allow JavaScript (jQuery and Bootstrap)
        $this->addDirective(Directive::SCRIPT, 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
        $this->addDirective(Directive::SCRIPT, 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
        $this->addDirective(Directive::SCRIPT, 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');

    }
}