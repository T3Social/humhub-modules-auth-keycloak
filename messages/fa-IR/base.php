<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => 'پیکربندی ورود به سیستم <strong>Keycloak</strong>',
  'Add a page in account settings allowing users to change their Keycloak password' => 'صفحه ای را در تنظیمات حساب اضافه کنید که به کاربران امکان می دهد رمز عبور Keycloak خود را تغییر دهند',
  'Advanced settings (optional)' => 'تنظیمات پیشرفته (اختیاری)',
  'Advanced settings requiring an admin user for the API (optional)' => 'تنظیمات پیشرفته که نیاز به کاربر مدیر برای API دارند (اختیاری)',
  'Automatic login' => 'ورود خودکار',
  'Base URL' => 'URL پایه',
  'Button {AddBuiltin} and check theses attributes:' => '{AddBuiltin} فشار دهید و این ویژگی ها را بررسی کنید:',
  'Change password on {keycloakRealmDisplayName}' => 'رمز عبور را در {keycloakRealmDisplayName} تغییر دهید',
  'Client ID' => 'شناسه مشتری',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'راز مشتری در تب "Credentials" است (اگر در تنظیمات "نوع دسترسی" روی "محرمانه" تنظیم شده باشد)',
  'Client secret key' => 'کلید مخفی مشتری',
  'Confirm new password' => 'رمز عبور جدید را تایید کنید',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => '{usernameAttribute} را ویرایش کنید و در {TokenClaimName} ، {preferredUsernameAttribute} با {idAttribute} جایگزین کنید',
  'Enable this auth client' => 'این کلاینت تأیید اعتبار را فعال کنید',
  'Hide username field in registration form' => 'فیلد نام کاربری را در فرم ثبت نام مخفی کنید',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'همگام سازی Humhub به Keycloak در زمان واقعی انجام می شود. همگام سازی Keycloak به Humhub یک بار در روز انجام می شود. زیر گروه های Keycloak همگام سازی نمی شوند.',
  'If enabled, you should also enable {removeKeycloakSessionsAfterLogoutAttrLabel}, otherwise users cannot logout.' => 'در صورت فعال بودن، باید {removeKeycloakSessionsAfterLogoutAttrLabel} را نیز فعال کنید، در غیر این صورت کاربران نمی توانند از سیستم خارج شوند.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'اگر نام کاربری ارسال شده توسط Keycloak ایمیل کاربر باشد، با نام کاربری که به طور خودکار از نام و نام خانوادگی ایجاد می شود (با فرمت CamelCase) جایگزین می شود.',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'اگر یک عنوان سفارشی تنظیم کنید، به زبان کاربر ترجمه نمی شود مگر اینکه یک فایل ترجمه سفارشی در پوشه محافظت شده/پیکربندی داشته باشید. برای تنظیم عنوان پیش فرض، آن را خالی بگذارید.',
  'Keycloak API admin password' => 'رمز عبور مدیریت Keycloak API',
  'Keycloak API admin username' => 'نام کاربری مدیر Keycloak API',
  'Keycloak attribute to use to get username on account creation: `preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => 'ویژگی Keycloak برای استفاده برای دریافت نام کاربری در ایجاد حساب: «نام کاربری_ترجیح» (برای استفاده از نام کاربری Keycloak)، «sub» (برای استفاده از شناسه Keycloak) یا دیگر نام ادعای توکن سفارشی',
  'New password' => 'رمز عبور جدید',
  'No sync' => 'بدون همگام سازی',
  'On Keycloak, create a client for Humhub and configure it:' => 'در Keycloak، یک کلاینت برای Humhub ایجاد کنید و آن را پیکربندی کنید:',
  'Password confirmation does not match.' => 'تایید رمز عبور مطابقت ندارد.',
  'Possible only if anonymous registration is allowed in the admin users settings.' => 'تنها در صورتی امکان پذیر است که ثبت نام ناشناس در تنظیمات کاربران مدیر مجاز باشد.',
  'Realm name' => 'نام قلمرو',
  'Remove user\'s Keycloak sessions after logout' => 'پس از خروج از سیستم، جلسات Keycloak کاربر را حذف کنید',
  'Sync Humhub towards Keycloak' => 'Humhub را با Keycloak همگام کنید',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'Humhub را با Keycloak همگام کنید (اما در Keycloak حذف نمی شود)',
  'Sync Keycloak towards Humhub' => 'همگام سازی Keycloak با Humhub',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'همگام سازی Keycloak با Humhub (اما بدون حذف در Humhub)',
  'Sync both ways' => 'هر دو راه را همگام سازی کنید',
  'Sync both ways (but no removal on Humhub)' => 'همگام سازی هر دو راه (اما حذف در Humhub وجود ندارد)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'همگام سازی به هر دو صورت (اما بدون حذف در Keycloak یا Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'همگام سازی به هر دو صورت (اما بدون حذف در Keycloak)',
  'Synchronize groups and their members' => 'گروه ها و اعضای آنها را همگام سازی کنید',
  'The client id provided by Keycloak' => 'شناسه مشتری ارائه شده توسط Keycloak',
  'The new password could not be saved.' => 'رمز عبور جدید ذخیره نشد.',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'این کاربر سرپرست باید در حوزه {master} باشد و اجازه مدیریت کاربران قلمرو متعلق به مشتری برای این Humhub را داشته باشد.',
  'Title of the button (if autoLogin is disabled)' => 'عنوان دکمه (اگر ورود خودکار غیرفعال باشد)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'در صورت تغییر در Keycloak، ایمیل کاربر را در Humhub به روز کنید',
  'Update user\'s email on Keycloak when changed on Humhub' => 'وقتی در Humhub تغییر کرد ایمیل کاربر را در Keycloak به روز کنید',
  'Your current password can be changed here.' => 'رمز عبور فعلی شما در اینجا قابل تغییر است.',
  '{Credentials} tab: copy the secret key' => 'برگه {Credentials} : کلید مخفی را کپی کنید',
  '{Mappers} tab:' => 'برگه {Mappers} :',
  '{Settings} tab -> {AccessType}: choose {confidential}. Save settings.' => 'برگه {Settings} -> {AccessType} : {confidential} را انتخاب کنید. تنظیمات را ذخیره کن.',
);
