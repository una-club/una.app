<?php

return [

    // front
    // routes
    "login"        => [
        "index" => "espace-connexion",
        "login" => "espace-connexion/connexion",
    ],
    "account"      => [
        "create"     => "mon-compte/creation",
        "store"      => "mon-compte/enregistrement",
        "email"      => "mon-compte/email-activation",
        "activation" => "mon-compte/activation",
    ],
    "password"     => [
        "index"  => "mot-de-passe/oublie",
        "update" => "mot-de-passe/mise-a-jour",
        "email"  => "mot-de-passe/email-reinitialisation",
        "reset"  => "mot-de-passe/reinitialisation",
    ],
    "leading_team" => [
        "index" => "equipe-dirigeante",
    ],
    "palmares"     => [
        "index" => "palmares",
    ],
    "calendar"     => [
        "index" => "calendrier",
    ],
    "e-shop"       => [
        "index"       => "boutique-en-ligne",
        "add-to-cart" => "boutique-en-ligne/ajout-au-panier",
    ],
    "page"         => [
        "show" => 'page/{key}',
    ],
    "sitemap"      => [
        "index" => "sitemap.xml",
    ],
    "rss"          => [
        "index" => "rss",
    ],
    "proxy"        => [
        "qr" => "proxy/qr",
    ],

    // back
    // routes
    "dashboard"    => [
        "index" => "admin/tableau-de-bord",
    ],
    "settings"     => [
        "index"  => "admin/parametres",
        "update" => "admin/parametres/mise-a-jour",
    ],
    "permissions"  => [
        "index"   => "admin/permissions",
        "create"  => "admin/permissions/creation",
        "store"   => "admin/permissions/enregistrement",
        "edit"    => "admin/permissions/edition/{id}",
        "update"  => "admin/permissions/mise-a-jour/{id}",
        "destroy" => "admin/permissions/suppression/{id}",
    ],
    "users"        => [
        "index"    => "admin/utilisateurs",
        "create"   => "admin/utilisateurs/creation",
        "store"    => "admin/utilisateurs/enregistrement/{id}",
        "edit"     => "admin/utilisateurs/edition/{id}",
        "update"   => "admin/utilisateurs/mise-a-jour/{id}",
        "destroy"  => "admin/utilisateurs/suppression/{id}",
        "profile"  => "admin/mon-profil",
        "activate" => "admin/utilisateurs/activation/{id}",
    ],
    "home"         => [
        "page" => [
            "edit"   => "admin/contenus/accueil/page",
            "update" => "admin/contenus/accueil/page/mise-a-jour",
        ],
        "slides"       => [
            "create"   => "admin/contenus/accueil/diapo/creation",
            "store"    => "admin/contenus/accueil/diapo/enregistrement/{id}",
            "edit"     => "admin/contenus/accueil/diapo/edition/{id}",
            "update"   => "admin/contenus/accueil/diapo/mise-a-jour/{id}",
            "destroy"  => "admin/contenus/accueil/diapo/suppression/{id}",
            "activate" => "admin/contenus/accueil/diapo/activation/{id}",
        ],
    ],
    "news"         => [
        "index"    => "actualites",
        "show"     => "actualites/{id}/{key}",
        "page"     => [
            "edit"   => "admin/contenus/actualites/page",
            "update" => "admin/contenus/actualites/page/mise-a-jour",
        ],
        "create"   => "admin/contenus/actualites/creation",
        "store"    => "admin/contenus/actualites/enregistrement",
        "edit"     => "admin/contenus/actualites/edition/{id}",
        "update"   => "admin/contenus/actualites/mise-a-jour/{id}",
        "destroy"  => "admin/contenus/actualites/suppression/{id}",
        "activate" => "admin/contenus/actualites/activation/{id}",
    ],
    "schedules"    => [
        "index"    => "horaires",
        "page"     => [
            "edit"   => "admin/contenus/horaires/page",
            "update" => "admin/contenus/horaires/page/mise-a-jour",
        ],
        "create"   => "admin/contenus/horaires/creation",
        "store"    => "admin/contenus/horaires/enregistrement",
        "edit"     => "admin/contenus/horaires/edition/{id}",
        "update"   => "admin/contenus/horaires/mise-a-jour/{id}",
        "destroy"  => "admin/contenus/horaires/suppression/{id}",
        "activate" => "admin/contenus/horaires/activation/{id}",
    ],
    "registration" => [
        "index"  => "inscription",
        "page"   => [
            "edit"   => "admin/contenus/inscription/page",
            "update" => "admin/contenus/inscription/page/mise-a-jour",
        ],
        "prices" => [
            "create"   => "admin/contenus/inscription/tarifs/creation",
            "store"    => "admin/contenus/inscription/tarifs/enregistrement",
            "edit"     => "admin/contenus/inscription/tarifs/edition/{id}",
            "update"   => "admin/contenus/inscription/tarifs/mise-a-jour/{id}",
            "destroy"  => "admin/contenus/inscription/tarifs/suppression/{id}",
            "activate" => "admin/contenus/inscription/tarifs/activation/{id}",
        ],
    ],
    "partners"     => [
        "index"    => "admin/contenus/partenaires",
        "create"   => "admin/contenus/partenaires/creation",
        "store"    => "admin/contenus/partenaires/enregistrement",
        "edit"     => "admin/contenus/partenaires/edition/{id}",
        "update"   => "admin/contenus/partenaires/mise-a-jour/{id}",
        "destroy"  => "admin/contenus/partenaires/suppression/{id}",
        "activate" => "admin/contenus/partenaires/activation/{id}",
    ],
    "logout"       => "admin/deconnexion",
];