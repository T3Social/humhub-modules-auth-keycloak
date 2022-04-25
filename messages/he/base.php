<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => 'תצורת כניסה של <strong>Keycloak</strong>',
  'Advanced settings (optional)' => 'הגדרות מתקדמות (אופציונלי)',
  'Advanced settings requiring an admin user for the API (optional)' => 'הגדרות מתקדמות הדורשות משתמש אדמין עבור ה-API (אופציונלי)',
  'Automatic login' => 'כניסה אוטומטית',
  'Base URL' => 'כתובת האתר הבסיסית',
  'Button {AddBuiltin} and check theses attributes:' => 'כפתור {AddBuiltin} ובדוק את התכונות הללו:',
  'Client ID' => 'מזהה לקוח',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'סוד הלקוח נמצא בכרטיסייה "אישורים" (אם בהגדרות "סוג גישה" מוגדר ל"סודי")',
  'Client secret key' => 'מפתח סודי של הלקוח',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'ערוך {usernameAttribute} וב- {TokenClaimName} , החלף {preferredUsernameAttribute} ב- {idAttribute}',
  'Enable this auth client' => 'אפשר לקוח אישור זה',
  'Hide username field in registration form' => 'הסתר את שדה שם המשתמש בטופס הרישום',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'סנכרון Humhub ל-Keycloak נעשה בזמן אמת. סנכרון Keycloak ל- Humhub מתבצע פעם ביום. תת-קבוצות Keycloak אינן מסונכרנות.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'אם שם המשתמש שנשלח על ידי Keycloak הוא האימייל של המשתמש, הוא מוחלף על ידי שם משתמש שנוצר אוטומטית מהשם הפרטי והמשפחה (בפורמט CamelCase)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'אם תגדיר כותרת מותאמת אישית, היא לא תתורגם לשפת המשתמש אלא אם כן יש לך קובץ תרגום מותאם אישית בתיקייה מוגנת/קונפיגורציה. השאר ריק כדי להגדיר כותרת ברירת מחדל.',
  'Keycloak API admin password' => 'סיסמת אדמין של Keycloak API',
  'Keycloak API admin username' => 'שם משתמש של מנהל מערכת Keycloak API',
  'Keycloak attribute to use to get username on account creation: `preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => 'תכונת Keycloak לשימוש כדי לקבל שם משתמש ביצירת חשבון: `preferred_username` (כדי להשתמש בשם משתמש Keycloak), `sub` (כדי להשתמש במזהה Keycloak) או שם תביעת אסימון מותאם אישית אחר',
  'No sync' => 'אין סנכרון',
  'On Keycloak, create a client for Humhub and configure it:' => 'ב-Keycloak, צור לקוח עבור Humhub והגדר אותו:',
  'Possible only if anonymous registration is allowed in the admin users settings' => 'אפשרי רק אם הרשמה אנונימית מותרת בהגדרות משתמשי המנהל',
  'Realm name' => 'שם ממלכה',
  'Remove user\'s Keycloak sessions after logout' => 'הסר את הפעלות Keycloak של המשתמש לאחר יציאה',
  'Sync Humhub towards Keycloak' => 'סנכרן את Humhub לכיוון Keycloak',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'סנכרן את Humhub לכיוון Keycloak (אך ללא הסרה ב-Keycloak)',
  'Sync Keycloak towards Humhub' => 'סנכרן את Keycloak לכיוון Humhub',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'סנכרון Keycloak לכיוון Humhub (אך ללא הסרה ב- Humhub)',
  'Sync both ways' => 'סנכרן לשני הכיוונים',
  'Sync both ways (but no removal on Humhub)' => 'סנכרון לשני הכיוונים (אך ללא הסרה ב-Humhub)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'סנכרון לשני הכיוונים (אך ללא הסרה ב-Keycloak או Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'סנכרן לשני הכיוונים (אך ללא הסרה ב-Keycloak)',
  'Synchronize groups and their members' => 'סנכרון קבוצות וחבריהן',
  'The client id provided by Keycloak' => 'מזהה הלקוח שסופק על ידי Keycloak',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'משתמש אדמין זה חייב להיות בממלכת {master} ובעל הרשאה לנהל משתמשים של הממלכה השייכת ללקוח עבור Humhub זה',
  'Title of the button (if autoLogin is disabled)' => 'כותרת הכפתור (אם התחברות אוטומטית מושבתת)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'עדכן את האימייל של המשתמש ב-Humhub כאשר הוא שונה ב-Keycloak',
  'Update user\'s email on Keycloak when changed on Humhub' => 'עדכן את האימייל של המשתמש ב-Keycloak כאשר הוא שונה ב-Humhub',
  '{Credentials} tab: copy the secret key' => 'כרטיסיית {Credentials} : העתק את המפתח הסודי',
  '{Mappers} tab:' => 'כרטיסיית {Mappers} :',
  '{Settings} tab -> {AccessType}: choose {confidential}. Save settings.' => 'כרטיסיית {Settings} -> {AccessType} : בחר {confidential} . שמור הגדרות.',
);
