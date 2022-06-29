<?php
namespace App\Security;

use App\Entity\Utilisateur as AppUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        return;
        if (!$user instanceof AppUser) {
            return;
        }

        if (! $user->isVerified()) {
            // the message passed to this exception is meant to be displayed to the user
            throw new CustomUserMessageAccountStatusException('Le processus de validation de votre compte n\'a pas encore été finalisé. Vous devez confirmer votre email pour poursuivre. ');
        }
        if (! $user->isActif()) {
            // the message passed to this exception is meant to be displayed to the user
            throw new CustomUserMessageAccountStatusException('Le compte est inactif. ');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        return;
        if (!$user instanceof AppUser) {
            return;
        }

        // user account is expired, the user may be notified
        if (! $user->isVerified()) {
           throw new AccountExpiredException('...');
        }
    }
}