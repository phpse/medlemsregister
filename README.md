# Medlemsregister
Medlemsregister för föreningen PHP Sverige

För att bli medlem, gör en PR till [members.json](/members.json) och lägg till dig själv med detta format:

    [
      ...,
      {
        "name": "Ditt namn",
        "github": "Ditt användarnamn på Github",
        "optionals": {
          "email": "foo@bar.com",
          "twitter": "foobar",
          "keybase": "foobar"
        }
      }
    ]

För att testa att [members.json](/members.json) validerar, kör `composer install && composer test`
Ingen output betyder att det är korrekt json.

Alla medlemmar visas upp på http://phpse.org.
