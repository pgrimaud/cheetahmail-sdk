<?php
namespace Cheetahmail\Campaigns\Campaigns;

class STATUS
{
    const __default = 'INCONNU';
    const INCONNU = 'INCONNU';
    const EN_PREPARATION = 'EN_PREPARATION';
    const ENVOI_EN_COURS = 'ENVOI_EN_COURS';
    const SUSPENDU = 'SUSPENDU';
    const EN_ATTENTE_DE_REDEMARRAGE = 'EN_ATTENTE_DE_REDEMARRAGE';
    const ANNULATION_DEMANDEE = 'ANNULATION_DEMANDEE';
    const TERMINE = 'TERMINE';
    const ERREUR = 'ERREUR';
    const CYCLIQUE = 'CYCLIQUE';
    const DEPROGRAMME = 'DEPROGRAMME';
    const CHRONOCONTACT = 'CHRONOCONTACT';
}
