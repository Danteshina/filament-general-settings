<?php

namespace Danteshina\FilamentGeneralSettings\Enums;

use Danteshina\FilamentGeneralSettings\Traits\WithOptions;

enum EmailProviderEnum: string
{
    use WithOptions;

    case SMTP = 'SMTP';
    case MAILGUN = 'Mailgun';
    case SES = 'Amazon SES';
    case POSTMARK = 'Postmark';
}
