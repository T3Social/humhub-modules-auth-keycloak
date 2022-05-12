<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => '<strong>Konfigurácia</strong> prihlasovania pomocou masky kľúča',
  'Add a page in account settings allowing users to change their Keycloak password' => 'Pridajte stránku do nastavení účtu, ktorá používateľom umožní zmeniť heslo Keycloak',
  'Advanced settings (optional)' => 'Rozšírené nastavenia (voliteľné)',
  'Advanced settings requiring an admin user for the API (optional)' => 'Rozšírené nastavenia vyžadujúce administrátora pre rozhranie API (voliteľné)',
  'Automatic login' => 'Automatické prihlásenie',
  'Base URL' => 'Základná adresa URL',
  'Button {AddBuiltin} and check theses attributes:' => 'Tlačidlo {AddBuiltin} a skontrolujte tieto atribúty:',
  'Change password on {keycloakRealmDisplayName}' => 'Zmeňte heslo na {keycloakRealmDisplayName}',
  'Client ID' => 'ID klienta',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'Tajomstvo klienta je na karte "Poverenia" (ak je v nastaveniach "Typ prístupu" nastavený na "dôverný")',
  'Client secret key' => 'Tajný kľúč klienta',
  'Confirm new password' => 'Potvrďte nové heslo',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'Upravte {usernameAttribute} a v {TokenClaimName} nahraďte {preferredUsernameAttribute} za {idAttribute}',
  'Enable this auth client' => 'Povoliť tohto overovacieho klienta',
  'Hide username field in registration form' => 'Skryť pole používateľského mena v registračnom formulári',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'Synchronizácia Humhub to Keycloak prebieha v reálnom čase. Synchronizácia Keycloak s Humhub sa vykonáva raz denne. Podskupiny Keycloak nie sú synchronizované.',
  'If enabled, you should also enable {removeKeycloakSessionsAfterLogoutAttrLabel}, otherwise users cannot logout.' => 'Ak je povolené, mali by ste tiež povoliť {removeKeycloakSessionsAfterLogoutAttrLabel} , inak sa používatelia nebudú môcť odhlásiť.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'Ak je používateľské meno odoslané službou Keycloak e-mailom používateľa, nahradí sa používateľským menom automaticky vygenerovaným z mena a priezviska (vo formáte CamelCase)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'Ak nastavíte vlastný názov, nebude preložený do jazyka používateľa, pokiaľ nemáte vlastný prekladový súbor v zložke protected/config. Ak chcete nastaviť predvolený názov, nechajte prázdne.',
  'Keycloak API admin password' => 'Heslo správcu rozhrania Keycloak API',
  'Keycloak API admin username' => 'Používateľské meno správcu rozhrania Keycloak API',
  'Keycloak attribute to use to get username on account creation: `preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => 'Atribút Keycloak, ktorý sa má použiť na získanie používateľského mena pri vytváraní účtu: `preferred_username` (ak chcete použiť meno používateľa Keycloak), `sub` (ak chcete použiť Keycloak ID) alebo iný vlastný názov nároku na token',
  'New password' => 'Nové heslo',
  'No sync' => 'Žiadna synchronizácia',
  'On Keycloak, create a client for Humhub and configure it:' => 'Na Keycloak vytvorte klienta pre Humhub a nakonfigurujte ho:',
  'Password confirmation does not match.' => 'Potvrdenie hesla sa nezhoduje.',
  'Possible only if anonymous registration is allowed in the admin users settings.' => 'Možné iba vtedy, ak je v používateľských nastaveniach správcu povolená anonymná registrácia.',
  'Realm name' => 'Názov ríše',
  'Remove user\'s Keycloak sessions after logout' => 'Po odhlásení odstráňte relácie Keycloak používateľa',
  'Sync Humhub towards Keycloak' => 'Synchronizujte Humhub s Keycloakom',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'Synchronizujte Humhub s Keycloak (ale bez odstránenia na Keycloak)',
  'Sync Keycloak towards Humhub' => 'Synchronizujte Keycloak smerom k Humhubu',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'Synchronizovať Keycloak smerom k Humhubu (ale bez odstránenia na Humhube)',
  'Sync both ways' => 'Synchronizujte oboma spôsobmi',
  'Sync both ways (but no removal on Humhub)' => 'Synchronizujte oboma spôsobmi (ale bez odstránenia na Humhube)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'Synchronizujte oboma spôsobmi (ale bez odstránenia na Keycloak alebo Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'Synchronizujte oboma spôsobmi (ale bez odstránenia na Keycloak)',
  'Synchronize groups and their members' => 'Synchronizujte skupiny a ich členov',
  'The client id provided by Keycloak' => 'ID klienta poskytnuté spoločnosťou Keycloak',
  'The new password could not be saved.' => 'Nové heslo sa nepodarilo uložiť.',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'Tento administrátor musí byť v {master} sfére a musí mať povolenie spravovať používateľov sféry patriacej klientovi pre tento Humhub',
  'Title of the button (if autoLogin is disabled)' => 'Názov tlačidla (ak je vypnuté automatické prihlásenie)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'Aktualizujte e-mail používateľa na Humhube pri zmene na Keycloak',
  'Update user\'s email on Keycloak when changed on Humhub' => 'Aktualizujte e-mail používateľa na Keycloak pri zmene na Humhub',
  'Your current password can be changed here.' => 'Vaše aktuálne heslo si môžete zmeniť tu.',
  '{Credentials} tab: copy the secret key' => 'Karta {Credentials} : skopírujte tajný kľúč',
  '{Mappers} tab:' => 'Karta {Mappers} :',
  '{Settings} tab -> {AccessType}: choose {confidential}. Save settings.' => 'Karta {Settings} -> {AccessType} : vyberte {confidential} . Uložiť nastavenia.',
);
