# WBS Fussball Projekt FIAE 6.2

## URLS

- Liga:
  - alle Ligen http://server-wbsfiae.rhcloud.com/api/liga/xml oder http://server-wbsfiae.rhcloud.com/api/liga/json
  - eine Liga http://server-wbsfiae.rhcloud.com/api/liga/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/liga/json/{id}
  - Liga anlegen http://server-wbsfiae.rhcloud.com/api/eintragen/liga/ Paramater: "ligaName=xxx&ligaLand=xxx"
    - ligaName sollte ein String sein
    - ligaLand sollte ein String sein

- LigaSaison:
  - alle Saisons http://server-wbsfiae.rhcloud.com/api/saison/xml oder http://server-wbsfiae.rhcloud.com/api/saison/json
  - eine Saison http://server-wbsfiae.rhcloud.com/api/saison/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/saison/json/{id}
  - Saison anlegen http://server-wbsfiae.rhcloud.com/api/eintragen/saison/ Paramater: "ligaId=xxx&saisonStart=xxx&saisonEnde=xxx"
    - ligaId sollte ein Integer sein
    - saisonStart sollte ein Datum oder Timestamp sein
    - saisonEnde sollte ein Datum oder Timestamp sein

- Verein:
  - alle Vereine http://server-wbsfiae.rhcloud.com/api/verein/xml oder http://server-wbsfiae.rhcloud.com/api/verein/json
  - ein Verein http://server-wbsfiae.rhcloud.com/api/verein/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/verein/json/{id}
  - Verein anlegen http://server-wbsfiae.rhcloud.com/api/eintragen/verein/ Paramater: "vereinsName=xxx"
    - vereinsName sollte ein String sein

- Spieler:
  - alle Spieler http://server-wbsfiae.rhcloud.com/api/spieler/xml oder http://server-wbsfiae.rhcloud.com/api/spieler/json
  - ein Spieler http://server-wbsfiae.rhcloud.com/api/spieler/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/spieler/json/{id}
  - Spieler anlegen http://server-wbsfiae.rhcloud.com/api/eintragen/spieler/ Paramater: "vereinsId=xxx&spielerName=xxx"
    - vereinsId sollte ein Integer sein
    - spielerName sollte ein String sein

- Spiel:
  - alle Spiele http://server-wbsfiae.rhcloud.com/api/spiele/xml oder http://server-wbsfiae.rhcloud.com/api/spiele/json
  - ein Spiel http://server-wbsfiae.rhcloud.com/api/spiele/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/spiele/json/{id}
  - Spiel anlegen http://server-wbsfiae.rhcloud.com/api/eintragen/spiele/ Parameter: "ligaSaisonId=xxx&heimVereinId=xxx&gastVereinId=xxx&heimTore=xxx&gastTore=xxx&spielTag=xxx"
    - ligaSaisonId sollte ein Integer sein
    - heimVereinId sollte ein Integer sein
    - gastVereinId sollte ein Integer sein
    - heimTore sollte ein Integer sein
    - gastTore sollte ein Integer sein
    - spielTag sollte ein Timestamp sein
