# WBS Fussball Projekt FIAE 6.2

## URLS

- Liga:
  - alle Ligen http://server-wbsfiae.rhcloud.com/api/liga/xml oder http://server-wbsfiae.rhcloud.com/api/liga/json
  - eine Liga http://server-wbsfiae.rhcloud.com/api/liga/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/liga/json/{id}
  - Liga anlegen http://server-wbsfiae.rhclcoud.com/api/eintragen/liga Paramater: "ligaName=xxx&ligaLand=xxx"
    - ligaName sollte ein String sein
    - ligaLand sollte ein String sein

- LigaSaison:
  - alle Saisons http://server-wbsfiae.rhcloud.com/api/saison/xml oder http://server-wbsfiae.rhcloud.com/api/saison/json
  - eine Saison http://server-wbsfiae.rhcloud.com/api/saison/xml/{id} oder http://server-wbsfiae.rhcloud.com/api/saison/json/{id}
  - Saison anlegen http://server-wbsfiae.rhclcoud.com/api/eintragen/saison Paramater: "ligaId=xxx&saisonStart=xxx&saisonEnde=xxx"
    - ligaId sollte ein Integer sein
    - saisonStart sollte ein Datum oder Timestamp sein
    - saisonEnde sollte ein Datum oder Timestamp sein

