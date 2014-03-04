<?php
// Copyright 2011 Toby Zerner, Simon Zerner, Олег ally Попов
// This file is part of esoTalk. Please see the included license file for usage information.

/* Set locale to Russian */
// setlocale(LC_ALL, 'ru_RU');

ET::$languageInfo["Russian"] = array(
	"locale" => "ru-RU",
	"name" => "Русский",
	"description" => "Русский язык для форума",
	"version" => ESOTALK_VERSION,
	"author" => "Олег ally Попов",
	"authorEmail" => "oleg.ally.popov@gmail.ru",
	"authorURL" => "http://kido.com.ru",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";
$definitions["date.full"] = "d.m.Y H:i:s"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "вчера";
$definitions["%d days ago"] = "%d дн. назад";
$definitions["%d hour ago"] = "час назад";
$definitions["%d hours ago"] = "%d ч. назад";
$definitions["%d minute ago"] = "минуту назад";
$definitions["%d minutes ago"] = "%d мин. назад";
$definitions["%d month ago"] = "месяц назад";
$definitions["%d months ago"] = "%d мес. назад";
$definitions["%d second ago"] = "секунду назад";
$definitions["%d seconds ago"] = "%d сек. назад";
$definitions["%d week ago"] = "на прошлой неделе";
$definitions["%d weeks ago"] = "%d недели назад";
$definitions["%d year ago"] = "в прошлом году";
$definitions["%d years ago"] = "%d г. назад";

$definitions["January"] = "Январь";
$definitions["February"] = "Февраль";
$definitions["March"] = "Март";
$definitions["April"] = "Апрель";
$definitions["May"] = "Май";
$definitions["June"] = "Июнь";
$definitions["July"] = "Июль";
$definitions["August"] = "Август";
$definitions["September"] = "Сентябрь";
$definitions["October"] = "Октябрь";
$definitions["November"] = "Ноябрь";
$definitions["December"] = "Декабрь";

$definitions["%s and %s"] = "%s и %s";
$definitions["%s can view this conversation."] = "Могут видеть это обсуждение: %s.";
$definitions["%s changed %s's group to %s."] = "<b>%s</b> изменил группу %s'а на %s.";
$definitions["%s changed your group to %s."] = "<b>%s</b> изменил вашу группу на %s.";
$definitions["%s conversation"] = "Одно обсуждение";
$definitions["%s conversations"] = "%s обсуждений";
$definitions["%s invited you to %s."] = "<b>%s</b> пригласил вас в %s.";
$definitions["%s joined the forum."] = "<b>%s</b> присоединился к форуму.";
$definitions["%s post"] = "Комментарий: %s";
$definitions["%s posted %s"] = "%s, %s";
$definitions["%s posted in %s."] = "<b>%s</b> прокомментировал %s.";
$definitions["%s posts"] = "Комментариев: %s";
$definitions["%s reply"] = "%s";
$definitions["%s replies"] = "%s";
$definitions["%s Settings"] = "%s Настройки";
$definitions["%s started the conversation %s."] = "<b>%s</b> начал обсуждение %s.";
$definitions["%s tagged you in a post."] = "<b>%s</b> упомянул вас в сообщении.";
$definitions["%s will be able to view this conversation."] = "%s сможет просматривать это обсуждение.";
$definitions["%s will be able to:"] = "%s сможет:";

$definitions["Success!"] = "Успешно!";
$definitions["A new version of esoTalk (%s) is available."] = "Доступна новая версия esoTalk (%s).";
$definitions["a private conversation"] = "частное обсуждение";
$definitions["Access the administrator control panel."] = "Доступ к административной панели управления.";
$definitions["Account type"] = "Тип аккаунта";
$definitions["Activate"] = "Активировать";
$definitions["Activity"] = "Действия";
$definitions["Add"] = "Добавить";
$definitions["Administration"] = "Администратор";
$definitions["Administrator email"] = "Email Администратора";
$definitions["Administrator password"] = "Пароль Администратора";
$definitions["Administrator username"] = "Имя Администратора";
$definitions["Advanced options"] = "Расширенные настройки";
$definitions["All Channels"] = "Все каналы";
$definitions["Allow members to edit their own posts:"] = "Разрешить изменение своих сообщений:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "У вас есть аккаунт? <a href='%s' class='link-login'>Войдите!</a>";
$definitions["Appearance"] = "Оформление";
$definitions["Automatically star conversations that I reply to"] = "Автоматически добавлять в избранное обсуждения в которых я отвечаю";
$definitions["Avatar"] = "Аватар";

$definitions["Back to channels"] = "Вернуться к списку каналов";
$definitions["Back to conversation"] = "Вернуться к обсуждению";
$definitions["Back to member"] = "Вернуться к участнику";
$definitions["Back to members"] = "Вернуться к участникам";
$definitions["Back to search"] = "Вернуться";
$definitions["Background color"] = "Цвет фона";
$definitions["Background image"] = "Картинка фона";
$definitions["Base URL"] = "Базовый URL форума";
$definitions["Bold"] = "Жирный";
$definitions["By %s"] = "Автор %s";

$definitions["Can suspend/unsuspend members"] = "Может блокировать/разблокировать участников";
$definitions["Cancel"] = "Отменить";
$definitions["Change %s's Permissions"] = "Изменить права %s'а";
$definitions["Change avatar"] = "Изменить аватар";
$definitions["Change Channel"] = "Изменить канал";
$definitions["Change channel"] = "Изменить канал";
$definitions["Change username"] = "Изменить имя";
$definitions["Change Password or Email"] = "Изменить пароль или email";
$definitions["Change Password"] = "Изменить пароль";
$definitions["Change password"] = "Изменить пароль";
$definitions["Change permissions"] = "Изменить права";
$definitions["Change"] = "Изменить";
$definitions["Channel description"] = "Описание канала";
$definitions["Channel List"] = "Список каналов";
$definitions["Channel title"] = "Название канала";
$definitions["Channel slug"] = "Адрес канала";
$definitions["Channels"] = "Каналы";
$definitions["Choose a secure password of at least %s characters"] = "Выберите безопасный пароль из минимум %s символов";
$definitions["Choose what people will see when they first visit your forum."] = "При первом посещении форума люди будут видеть:";
$definitions["Click on a member's name to remove them."] = "Для удаления кликните на именах участников.";
$definitions["Close registration"] = "Закрыть регистрацию";
$definitions["Confirm password"] = "Подтвердите пароль";
$definitions["Context"] = "Контекст";
$definitions["Controls"] = "Действия";
$definitions["Conversation"] = "Обсуждение";
$definitions["Conversations participated in"] = "Участие в обсуждениях";
$definitions["Conversations started"] = "Обсуждений начато";
$definitions["Conversations"] = "Обсуждения";
$definitions["Copy permissions from"] = "Скопировать права из";
$definitions["Create Channel"] = "Создать канал";
$definitions["Create Group"] = "Создать группу";
$definitions["Create Member"] = "Создать участника";
$definitions["Customize how users can become members of your forum."] = "Настройте, как людям стать участниками вашего форума.";
$definitions["Customize your forum's appearance"] = "Настройте оформление вашего форума";

$definitions["Dashboard"] = "Сведения";
$definitions["Default forum language"] = "Язык форума";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Удалить</strong> все обсуждения навсегда.";
$definitions["Delete Channel"] = "Удалить канал";
$definitions["Delete conversation"] = "Удалить обсуждение";
$definitions["Delete member"] = "Удалить участника";
$definitions["Delete Member"] = "Удалить участника";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Удалить все сообщения данного участника.</strong> Все сообщения участника будут помечены удаленными, но их будет можно восстановить вручную.";
$definitions["Delete"] = "Удалить";
$definitions["Deleted %s by %s"] = "%s удалено %s";
$definitions["Disable"] = "Отключить";
$definitions["Discard"] = "Удалить";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "У вас нет аккаунта? <a href='%s' class='link-join'>Зарегистрируйтесь!</a>";
$definitions["Don't repeat"] = "Не повторять";

$definitions["Edit Channel"] = "Редактировать канал";
$definitions["Edit Group"] = "Редактировать группу";
$definitions["Edit member groups"] = "Редактировать группы пользователей";
$definitions["Edit your profile"] = "Изменить";
$definitions["Edit"] = "Редактировать";
$definitions["Edited %s by %s"] = "%s исправил %s";
$definitions["Editing permissions"] = "Изменение прав";
$definitions["Email me when I'm added to a private conversation"] = "Сообщить письмом, если меня добавили в частное обсуждение";
$definitions["Email me when someone posts in a conversation I have starred"] = "Сообщить письмом, если кто-то написал в обсуждении из моего избранного";
$definitions["Email"] = "Email";
$definitions["Enable"] = "OFF";
$definitions["Enabled"] = "ON";
$definitions["Enter a conversation title"] = "Введите заголовок";
$definitions["Error"] = "Ошибка";
$definitions["esoTalk version"] = "Версия esoTalk";
$definitions["Everyone"] = "Кто угодно";

$definitions["Fatal Error"] = "Хм. Ошибка форума... Попробуйте обновить страницу, может помочь";
$definitions["Feed"] = "Лента";
$definitions["Filter by name or group..."] = "Отобрать по имени или группе...";
$definitions["Filter conversations..."] = "Показать обсуждения...";
$definitions["Find this post"] = "Найти этот комментарий";
$definitions["First posted"] = "Первый комментарий";
$definitions["Follow to receive notifications"] = "Получать уведомления";
$definitions["For %s seconds"] = "В течение %s секунд";
$definitions["Forever"] = "Всегда";
$definitions["Forgot?"] = "Забыли?";
$definitions["Forgot Password"] = "Восстановить пароль";
$definitions["Forum header"] = "Заголовок форума";
$definitions["Forum language"] = "Язык форума";
$definitions["Forum Settings"] = "Настройки";
$definitions["Forum Statistics"] = "Статистика";
$definitions["Forum title"] = "Название форума";
$definitions["forumDescription"] = "%s это форум, обсуждающий %s и %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Предоставить этой группе модераторские права во всех существующих каналах";
$definitions["Global permissions"] = "Общие права";
$definitions["Go to top"] = "▲";
$definitions["Group name"] = "Имя группы";
$definitions["group.administrator"] = "Администратор";
$definitions["group.administrator.plural"] = "Администраторы";
$definitions["group.guest"] = "Гость";
$definitions["group.guest.plural"] = "Гости";
$definitions["group.member"] = "Участник";
$definitions["group.member.plural"] = "Участники";
$definitions["group.Moderator"] = "Модератор";
$definitions["group.Moderator.plural"] = "Модераторы";
$definitions["group.suspended"] = "Заблокирован";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Группы используются для разделения участников и предоставления им определенных полномочий.";
$definitions["Groups"] = "Группы";

$definitions["Header"] = "Заголовок";
$definitions["Header color"] = "Цвет шапки";
$definitions["Hide"] = "Скрыть";
$definitions["Home page"] = "Главная страница";
$definitions["HTML is allowed."] = "HTML разрешён.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Если у вас возникнут проблемы с установкой или работой форума, обращайтесь за помощью на <a href='%s'>форум поддержки esoTalk</a>.";
$definitions["Install esoTalk"] = "Установить esoTalk";
$definitions["Install My Forum"] = "Установить мой форум";
$definitions["Installed Languages"] = "Установленные языки";
$definitions["Installed Plugins"] = "Установленные плагины";
$definitions["Installed plugins"] = "Установленные плагины";
$definitions["Installed Skins"] = "Установленные темы";
$definitions["Installed skins"] = "Установленные темы";
$definitions["is %s"] = "сейчас %s";

$definitions["Joined"] = "Присоединился";
$definitions["Jump to last"] = "К последнему";
$definitions["Jump to unread"] = "К непрочитанному";
$definitions["just now"] = "только что";

$definitions["Keep me logged in"] = "Оставаться на форуме";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Сохранить сообщения этого участника.</strong> Все сообщения участника сохраняются, но будут отображаться как [удаленные] вместе с участником.";

$definitions["label.draft"] = "Черновик";
$definitions["label.locked"] = "Заблокировано";
$definitions["label.muted"] = "Скрыто";
$definitions["label.private"] = "Частное";
$definitions["label.sticky"] = "Выделено";
$definitions["Labels"] = "Метки";
$definitions["Last active"] = "Активность";
$definitions["Last active %s"] = "Активность: %s";
$definitions["Latest News"] = "Новости";
$definitions["Loading..."] = "Загрузка...";
$definitions["Lock"] = "Заблокировать";
$definitions["Log In"] = "Вход";
$definitions["Log Out"] = "Выход";

$definitions["Make member and online list visible to:"] = "Сделать участников и список кто онлайн видимыми для:";
$definitions["Manage Groups"] = "Управление группами";
$definitions["Manage Languages"] = "Управление языками";
$definitions["Manage your forum's channels (categories)"] = "Управление каналами вашего форума";
$definitions["Mark as read"] = "Пометить прочитанным";
$definitions["Mark all as read"] = "Прочитано всё";
$definitions["Mark listed as read"] = "Прочитано всё на этой странице";
$definitions["Maximum size of %s. %s."] = "Максимальный размер %s. Формат: %s.";
$definitions["Member groups"] = "Группы участников";
$definitions["Member list"] = "Список участников";
$definitions["Member List"] = "Список участников";
$definitions["Member privacy"] = "Приватность";
$definitions["Members Allowed to View this Conversation"] = "Это обсуждение могут просматривать";
$definitions["Members Online"] = "Участники онлайн";
$definitions["Members"] = "Участники";
$definitions["Mobile skin"] = "Мобильная тема";
$definitions["Moderate"] = "Модерация";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Переместить</strong> обсуждения в этот канал:";
$definitions["Mute conversation"] = "Скрыть";
$definitions["MySQL database"] = "База данных MySQL";
$definitions["MySQL host address"] = "Адрес хоста MySQL";
$definitions["MySQL password"] = "Пароль MySQL";
$definitions["MySQL queries"] = "Запросы MySQL";
$definitions["MySQL table prefix"] = "Префикс таблиц MySQL";
$definitions["MySQL username"] = "Имя пользователя MySQL";
$definitions["MySQL version"] = "Версия MySQL";

$definitions["Name"] = "Имя";
$definitions["never"] = "никогда";
$definitions["%s new"] = "%s новых";
$definitions["New conversation"] = "Новое обсуждение";
$definitions["New Conversation"] = "Новое обсуждение";
$definitions["New conversations in the past week"] = "Новые обсуждения за неделю";
$definitions["New email"] = "Новый email";
$definitions["New members in the past week"] = "Новые участники за неделю";
$definitions["New password"] = "Новый пароль";
$definitions["New posts in the past week"] = "Новые комментарии за неделю";
$definitions["New username"] = "Новое имя участника";
$definitions["Next Step"] = "Дальше";
$definitions["Next"] = "Дальше";
$definitions["No preview"] = "Нет предварительного просмотра";
$definitions["No"] = "Нет";
$definitions["Notifications"] = "Уведомления";
$definitions["Now"] = "Сейчас";

$definitions["OK"] = "OK";
$definitions["Online"] = "Онлайн";
$definitions["online"] = "онлайн";
$definitions["Open registration"] = "Открыть регистрацию";
$definitions["optional"] = "доп.";
$definitions["Order By:"] = "Упорядочить по:";
$definitions["Original Post"] = "Начало";

$definitions["Page Not Found"] = "Страница не найдена";
$definitions["Password"] = "Пароль";
$definitions["PHP version"] = "Версия PHP";
$definitions["Plugins"] = "Плагины";
$definitions["Post a Reply"] = "Отправить";
$definitions["Post count"] = "Счётчик комментариев";
$definitions["Posts"] = "Комментарии";
$definitions["Preview"] = "Предварительный просмотр";
$definitions["Previous"] = "Предыдущий";

$definitions["Quote"] = "Цитировать";
$definitions["quote"] = "цитата";

$definitions["Read more"] = "Читать далее";
$definitions["Recent posts"] = "Новые сообщения";
$definitions["Recover Password"] = "Восстановить пароль";
$definitions["Registered members"] = "Участники";
$definitions["Registration"] = "Регистрация";
$definitions["Remove avatar"] = "Удалить аватар";
$definitions["Rename Member"] = "Переименовать участника";
$definitions["Reply"] = "Комментарий";
$definitions["Report a bug"] = "Сообщить об ошибке";
$definitions["Require users to confirm their email address"] = "Участники должны потвердить email";
$definitions["Restore"] = "Восстановить";
$definitions["restore"] = "восстановить";
$definitions["Reset"] = "Сброс";

$definitions["Save Changes"] = "Сохранить изменения";
$definitions["Save Draft"] = "Сохранить черновик";
$definitions["Search conversations..."] = "Искать обсуждения...";
$definitions["Search within this conversation..."] = "Искать в этом обсуждении...";
$definitions["Search"] = "Искать";
$definitions["See the private conversations I've had with %s"] = "Просмотреть мои частные обсуждения с %s";
$definitions["Set a New Password"] = "Установка нового пароля";
$definitions["Settings"] = "Настройки";
$definitions["Show an image in the header"] = "Показывать логотип в заголовке";
$definitions["Show matching posts"] = "Показать найденное в сообщениях";
$definitions["Show the channel list by default"] = "Показывать список каналов";
$definitions["Show the conversation list by default"] = "Показывать обсуждения";
$definitions["Show the forum title in the header"] = "Показывать название форума в заголовке";
$definitions["Sign Up"] = "Регистрация";
$definitions["Skins"] = "Темы оформления";
$definitions["Specify Setup Information"] = "Введите информацию для установки";
$definitions["Star to receive notifications"] = "Подписаться на получение уведомлений";
$definitions["Starred"] = "Избранное";
$definitions["Start"] = "Обсуждение";
$definitions["Start a conversation"] = "Начать обсуждение";
$definitions["Start a new conversation"] = "Начать новое обсуждение";
$definitions["Start a private conversation with %s"] = "Начать частное обсуждение с %s";
$definitions["Start Conversation"] = "Начать обсуждение";
$definitions["Starting a conversation"] = "<b>начинает обсуждение</b>";
$definitions["Statistics"] = "Статистика";
$definitions["statistic.conversation.plural"] = "Обсуждений: %s";
$definitions["statistic.conversation"] = "Обсуждение: %s";
$definitions["statistic.member.plural"] = "Участников: %s";
$definitions["statistic.member"] = "Участник: %s";
$definitions["statistic.online.plural"] = "Онлайн: %s";
$definitions["statistic.online"] = "Онлайн один участник";
$definitions["statistic.post.plural"] = "Комментариев: %s";
$definitions["statistic.post"] = "Один комментарий";
$definitions["Sticky"] = "Выделить";
$definitions["Subscribe"] = "Подписаться";
$definitions["Subscribed"] = "Подписано";
$definitions["Subscription"] = "Подписка";
$definitions["Suspend member"] = "Заблокировать участника";
$definitions["Suspend members."] = "Заблокировать участников.";
$definitions["Suspend"] = "Заблокировать";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unhide"] = "Сделать видимым";
$definitions["Uninstall"] = "Удалить";
$definitions["Unlock"] = "Разблокировать";
$definitions["Unmute conversation"] = "Показать";
$definitions["Unstarred"] = "Не в избранном";
$definitions["Unsticky"] = "Снять выделение";
$definitions["Unsubscribe new users by default"] = "Не подписывать новых участников";
$definitions["Unsubscribe"] = "Отписаться";
$definitions["Unsubscribed"] = "Не подписано";
$definitions["Unsuspend member"] = "Разблокировать участника";
$definitions["Unsuspend"] = "Разблокировать";
$definitions["Until someone replies"] = "Пока не прокомментируют";
$definitions["Untitled conversation"] = "Обсуждение без названия";
$definitions["Upgrade esoTalk"] = "Обновить esoTalk";
$definitions["Use a background image"] = "Использовать фоновое изображение";
$definitions["Use for mobile"] = "Использовать для мобильных устройств";
$definitions["Use friendly URLs"] = "Использовать дружественные URL (ЧПУ)";
$definitions["Used to verify your account and subscribe to conversations"] = "Используется для проверки и активации вашего аккаунта";
$definitions["Username"] = "Имя";
$definitions["Username or Email"] = "Имя или еmail";

$definitions["View %s's profile"] = "Просмотреть профиль %s";
$definitions["View all notifications"] = "Просмотреть все уведомления";
$definitions["View more"] = "Ещё...";
$definitions["View your profile"] = "Просмотреть профиль";
$definitions["View"] = "Просмотр";
$definitions["Viewing: %s"] = "просматривает: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> сообщения %s";

$definitions["Warning"] = "Ой, что-то не так...";
$definitions["Welcome to esoTalk!"] = "Добро пожаловать на форум INSTEAD!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Добро пожаловать. Вы вошли на форум и направлены на его административную панель";
$definitions["Write a reply..."] = "Напишите комментарий...";

$definitions["Yes"] = "Да";
$definitions["You can manage channel-specific permissions on the channels page."] = "Вы можете менять настройки прав каналов на странице каналов.";
$definitions["Your current password"] = "Текущий пароль";


// Messages.
$definitions["message.404"] = "На форуме такой страницы нет. Проверьте ваш запрос или перейдите по другой ссылке.";
$definitions["message.ajaxDisconnected"] = "Невозможно связаться с сервером. Подождите немного и <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>попробуйте снова</a>, или <a href='' onclick='window.location.reload();return false'>обновите страницу</a>.";
$definitions["message.ajaxRequestPending"] = "Подождите, ваш запрос обрабатывается. Если вы уйдете с этой страницы, то все сделанные вами изменения будут утеряны.";
$definitions["message.avatarError"] = "Не удалось загрузить ваш аватар. Проверьте тип изображения (.jpg, .png, .gif) и его размер.";
$definitions["message.cannotDeleteLastChannel"] = "Подождите, вы не можете удалить последний канал! Где вы будете вести обсуждения?";
$definitions["message.changesSaved"] = "Ваши изменения сохранены.";
$definitions["message.channelsHelp"] = "Каналы используются для разделения обсуждений по тематикам. Вы можете создать необходимое вам количество каналов и упорядочить/сортировать их, перетаскивая вверх/вниз.";
$definitions["message.channelSlugTaken"] = "Эта метка уже используется другой темой.";
$definitions["message.confirmDelete"] = "Вы уверены, что хотите удалить это? Восстановить не сможем!";
$definitions["message.confirmDiscardReply"] = "Вы не сохранили черновик вашего комментария. Хотите удалить его навсегда?";
$definitions["message.confirmEmail"] = "Прежде чем вы сможете использовать аккаунт, необходимо подтвердить ваш email. В ближайшее время (пару минут) вы получите письмо, содержащий инструкции по активации аккаунта.";
$definitions["message.confirmLeave"] = "Подождите, вы не сохранили то, что редактируете! Если вы уйдете с этой страницы, то потеряете все изменения. Вы уверены?";
$definitions["message.connectionError"] = "Форум не может соединиться с MySQL сервером. Возвращенная ошибка:<br/>%s";
$definitions["message.conversationDeleted"] = "Обсуждение было удалено.";
$definitions["message.conversationNotFound"] = "Это обсуждение не может быть просмотрено. Уж не удалено ли оно? А может это частное обсуждение, а вы не вошли на форум или не имеете права его просмотра.";
$definitions["message.cookieAuthenticationTheft"] = "Из соображений безопасности вы не можете войти с вашим cookie автоматически. Пожалуйста, войдите в ручном режиме!";
$definitions["message.deleteChannelHelp"] = "Не торопитесь! Если вы удалите этот канал, то не сможете его восстановить. Все ваши обсуждения могут быть перемещены в другой канал на ваш выбор.";
$definitions["message.emailConfirmed"] = "Отлично! Ваш аккаунт подтвержден и активирован, и вы можете начинать обсуждения с другими участниками. Почему бы не <a href='".URL("conversation/start")."'>начать</a> прямо сейчас?";
$definitions["message.emailDoesntExist"] = "Этот e-mail адрес не совпадает ни с одним из адресов участников форума. Может вы ошиблись?";
$definitions["message.emailNotYetConfirmed"] = "Вы должны подтвердить ваш email перед тем, как сможете войти.<br>Если вы не получили письмо с подтверждением регистрации, то <a href='%s'>нажмите тут</a> для его повторной отправки.";
$definitions["message.emailTaken"] = "Участник форума с таким адресом email уже зарегистрирован.";
$definitions["message.empty"] = "Это поле нужно заполнить";
$definitions["message.emptyPost"] = "Хмм... в вашем комментарии вы должны написать хоть что-нибудь";
$definitions["message.emptyTitle"] = "Заголовок обсуждения не может быть пустым.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>Форум esoTalk уже установлен.</strong><br/><small>Для переустановки esoTalk, вы должны удалить файл <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "Доступна новая версия esoTalk, %s.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "Настоятельно рекомендуем поддерживать esoTalk всегда в обновленном состоянии. Это снижает риск взлома, исправляет ошибки и добавляет новые функции!";
$definitions["message.esoTalkUpToDate"] = "Ваша версия esoTalk самая последняя.";
$definitions["message.esoTalkUpToDateHelp"] = "Если вам нравится форум esoTalk, окажите материальную поддержку его <a href='%s' target='_blank'>автору</a>.";
$definitions["message.fatalError"] = "<p>Форум esoTalk обнаружил критическую ошибку!\n<li>Если вы администратор форума, попробуйте поискать помощь на <strong><a href='%2\$s'>форуме поддержки esoTalk</a></strong>.</li>\n<li>Если вы участник форума, то обязательно сообщите об этой ошибке Администратору.</li>\n<li>Или попробуйте стукнуть компьютер - это иногда помогает ;)</li>\n";
$definitions["message.fatalErrorInstaller"] = "<p>Форум esoTalk обнаружил критическую ошибку, не позволяющую произвести установку.\n<li><p><strong>Проверьте ваши настройки.</strong> Также рекомендуем проверить базу данных форума.</p></li>";
$definitions["message.fatalErrorUpgrader"] = "<p>Форум esoTalk обнаружил критическую ошибку, не позволяющую произвести обновление.\n<li><p><strong>Проверьте ваши настройки.</strong> Также рекомендуем проверить базу данных форума.</p></li>";
$definitions["message.fileUploadFailed"] = "Выбранный вами файл не может быть загружен. Он или слишком велик или имеет неправильный формат.";
$definitions["message.fileUploadFailedMove"] = "Загружаемый вами файл не может быть скопирован в папку назначения. Пожалуйста, свяжитесь с Администратором.";
$definitions["message.fileUploadNotImage"] = "Загружаемый вами файл не является изображением допустимого формата!";
$definitions["message.fileUploadTooBig"] = "Выбранный файл не может быть загружен, он слишком большой.";
$definitions["message.forgotPasswordHelp"] = "Так, вы забыли пароль! Не волнуйтесь, это случается часто и со всеми. Просто введите адрес email вашего аккаунта и мы вышлем вам инструкции по восстановлению пароля.";
$definitions["message.fulltextKeywordWarning"] = "Обратите внимание, что фразы короче 4 символов, а также английские слова 'the' и 'for', не включаются в параметры поиска.";
$definitions["message.gambitsHelp"] = "Теги — это фразы, описывающие то, что вы хотите найти. Щелкните на теге, чтобы вставить его в поисковое поле. Дважды щелкните на теге для моментального поиска по нему.<br> Обычный поиск тоже работает!";
$definitions["message.gdNotEnabledWarning"] = "Внимание, <strong>GD расширение PHP</strong> не активировано.<br/><small>. Установите или активируйте его.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "На вашем сервере должен быть установлен <strong>MySQL 4 или выше</strong> и <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL-расширение должно быть включено в настройках PHP</a>.<br/>";
$definitions["message.greaterPHPVersionRequired"] = "На вашем сервере должен быть установлен <strong>PHP 5.0.0 или выше</strong> для запуска esoTalk.<br/><small>Обновите PHP.</small>";
$definitions["message.incorrectLogin"] = "Неправильный логин.";
$definitions["message.incorrectPassword"] = "Неправильный пароль.";
$definitions["message.installerAdminHelp"] = "Форум esoTalk будет использовать эту информацию для настройки аккаунта Администратора.";
$definitions["message.installerFilesNotWritable"] = "Форум esoTalk не имеет прав записи в эти файлы/папки: <strong>%s</strong>.<br/><small>Чтобы исправить это, вам нужно перейти к этим файлам/папкам в FTP клиенте и выполнить на них команду <strong>chmod</strong> изменив права доступа на <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "Форуму esoTalk необходим доступ к базе MySQL для хранения сообщений и других данных форума. Если вы не уверены в параметрах доступа, то проконсультируйтесь с вашим администратором или хостинг-провайдером.";
$definitions["message.installerWelcome"] = "<p>Добро пожаловать в установщик форума esoTalk!  Для установки форума необходимо уточнить у вас некоторые параметры.</p>\n<p>Если у вас возникнут трудности в установке, обращайтесь за помощью на <a href='%s'>форум поддержки esoTalk</a>.</p>";
$definitions["message.invalidChannel"] = "Вы выбрали неправильный канал!";
$definitions["message.invalidEmail"] = "Этот адрес email неправильный.";
$definitions["message.invalidUsername"] = "Имя пользователя должно содержать от 3 до 20 символов.";
$definitions["message.javascriptRequired"] = "Эта страница для корректной работы требует включенного JavaScript!";
$definitions["message.languageUninstalled"] = "Язык был удален.";
$definitions["message.locked"] = "Похоже, что обсуждение <strong>заблокировано</strong>, поэтому вы не можете в нем участвовать.";
$definitions["message.loginToParticipate"] = "Для участия в обсуждениях и размещения комментариев, пожалуйста, <a href='%1\$s' class='link-login'>войдите на форум</a>.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Войдите</a> или <a href='%2\$s' class='link-join'>зарегистрируйтесь</a> чтобы комментировать!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Войдите</a> для просмотра обсуждений скрытых от гостей.";
$definitions["message.memberNotFound"] = "Участника с таким именем на форуме нет";
$definitions["message.memberNoPermissionView"] = "Этот участник не может быть добавлен, у него нет разрешения на просмотр темы, к которой принадлежит это обсуждение.";
$definitions["message.nameTaken"] = "Введенное вами имя занято или зарезервировано. Попробуйте другое.";
$definitions["message.newSearchResults"] = "Появились новые обсуждения/комментарии, влияющие на результаты вашего поиска. <a href='%s'>Обновить</a>";
$definitions["message.noActivity"] = "%s еще ничего не сделал на форуме.";
$definitions["message.noMembersOnline"] = "Нет участников онлайн.";
$definitions["message.noNotifications"] = "Уведомлений нет";
$definitions["message.noPermission"] = "вы не можете этого сделать. Не хватает прав.";
$definitions["message.noPermissionToReplyInChannel"] = "Вы не можете участвовать в обсуждениях этого канала.";
$definitions["message.noPluginsInstalled"] = "Нет установленных плагинов.";
$definitions["message.noSearchResults"] = "По вашему запросу ничего не найдено";
$definitions["message.noSearchResultsMembers"] = "Пользователей по вашему запросу не найдено.";
$definitions["message.noSearchResultsPosts"] = "Сообщений по вашему запросу не найдено.";
$definitions["message.noSkinsInstalled"] = "Нет установленных тем.";
$definitions["message.notWritable"] = "Папки <code>%s</code> недоступны для записи. Попробуйте выполнить команду <code>chmod</code> и сменить права доступа к ним на <code>777</code>, или измените аналогично права доступа к содержащей их вышестоящей папке.";
$definitions["message.pageNotFound"] = "Запрошенная вами страница не найдена.";
$definitions["message.passwordChanged"] = "Ваш пароль был изменен. Теперь вы можете войти.";
$definitions["message.passwordEmailSent"] = "Ок, мы отправили вам письмо, содержащее ссылку на сброс пароля. Проверьте вашу папку со спамом, если сообщение не придет в течении нескольких минут.";
$definitions["message.passwordsDontMatch"] = "Пароли не совпадают.";
$definitions["message.passwordTooShort"] = "Пароль слишком короткий.";
$definitions["message.pluginCannotBeEnabled"] = "Плагин <em>%s</em> не может быть установлен: %s";
$definitions["message.pluginDependencyNotMet"] = "Для активации этого плагина вы должны иметь установленную и активированную %s версии %s.";
$definitions["message.pluginUninstalled"] = "Плагин удален.";
$definitions["message.postNotFound"] = "Запрошенное вами сообщение не найдено.";
$definitions["message.postTooLong"] = "Ваше сообщение слишком длинное! Максимальная разрешенная длина сообщения %s символов.";
$definitions["message.preInstallErrors"] = "Во время установки esoTalk произошли критические ошибки. Они должны быть устранены до того, как вы сможете продолжить установку.";
$definitions["message.preInstallWarnings"] = "Во время установки esoTalk произошли ошибки. Вы можете продолжить установку esoTalk без их устранения, но некоторые функции esoTalk будут ограничены или отключены.";
$definitions["message.reduceNumberOfGambits"] = "Уменьшите количество используемых поисковых фраз, чтобы найти больше.";
$definitions["message.registerGlobalsWarning"] = "Параметр <strong>register_globals</strong> включен в настройках PHP!<br/><small>Несмотря на то, что esoTalk может работать с этой настройкой, настоятельно рекомендуется отключить ее в целях безопасности.</small>";
$definitions["message.registrationClosed"] = "Свободная регистрация на форуме закрыта. Обратитесь к Администратору.";
$definitions["message.removeDirectoryWarning"] = "Кажется вы не удалили папки <code>%s</code>! Вам необходимо  сделать это, чтобы обезопасить себя от взлома!";
$definitions["message.safeModeWarning"] = "<strong>Безопасный режим</strong> включен.<br/><small>Это может привести к возникновению проблем с esoTalk, но вы можете продолжить, если не имеете возможности его отключить.</small>";
$definitions["message.searchAllConversations"] = "Попробуйте поискать это слово по всем обсуждениям.";
$definitions["message.setNewPassword"] = "Какой вы хотите установить новый пароль?";
$definitions["message.skinUninstalled"] = "Тема оформления была удалена.";
$definitions["message.suspended"] = "Оппа! Администрация форума <strong>заблокировала</strong> ваш аккаунт.";
$definitions["message.suspendMemberHelp"] = "Блокировка аккаунта %s запретит ему участвовать в обсуждениях на форуме. После этого аккаунт будет иметь права Гостя.";
$definitions["message.tablePrefixConflict"] = "Установщик определил, что другая инсталяция esoTalk использует ту же MySQL базу с аналогичными таблицами.<br/>Чтобы перезаписать (удалить) этот экземпляр esoTalk, нажмите 'Установить форум' снова. <strong>Все данные будут утеряны!</strong><br/>Если вы хотите создать другую инсталяцию esoTalk вместе с существующей, <strong>измените префикс таблиц</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Разблокировка аккаунта %s позволит ему снова участвовать в обсуждениях на форуме.";
$definitions["message.upgradeSuccessful"] = "Форум успешно обновлен!";
$definitions["message.waitToReply"] = "Вы должны подождать минимум %s секунд, прежде чем начать новое обсуждение или отвечать. Глубоко вдохните и попробуйте еще раз...";
$definitions["message.waitToSearch"] = "Помедленнее, мы тут не успеваем! Вы пытаетесь выполнить одновременно слишком много поисковых запросов. Подождите %s секунд и попробуйте снова.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Кто-то (надеемся это вы) хочет зарегистрироваться на нашем форуме '%1\$s' с этим адресом email.</p><p>Если это были вы, то просто перейдите по ссылке и ваш аккаунт будет активирован:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "Форум INSTEAD. Подтверждение регистрации %1\$s";
$definitions["email.footer"] = "<p>(Если вы не хотите получать никаких уведомлений, то <a href='%s'>измените настройки приватности на форуме</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Кто-то (надеемся это вы) разместил запрос на восстановление пароля к вашему аккаунту на форуме '%1\$s'. Если это были не вы или у вас нет желания менять пароль, то просто проигнорируйте это сообщение.</p><p>Если же вы действительно забыли пароль и хотите его поменять, то перейдите по этой ссылке:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Форум INSTEAD. Вы забыли ваш пароль, %1\$s?";
$definitions["email.header"] = "<p>Приветствуем, %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> упомянул вас в сообщении в обсуждении <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>Для просмотра этого сообщения перейдите по этой ссылке:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "Форум INSTEAD. %1\$s упомянул вас в сообщении";
$definitions["email.privateAdd.body"] = "<p>Вас добавили к частному обсуждению, озаглавленному <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>Для просмотра этого обсуждения перейдите по этой ссылке:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "Форум INSTEAD. Вас добавили к частному обсуждению";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> прокомментировал сообщение из вашего избранного: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Для просмотра этого сообщения перейдите по этой ссылке:<br>%4\$s</p>";
$definitions["email.post.subject"] = "Есть новый комментарий на '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "автор: ";
$definitions["gambit.contributor:"] = "участник: ";
$definitions["gambit.member"] = "имя";
$definitions["gambit.myself"] = "я";
$definitions["gambit.draft"] = "черновики";
$definitions["gambit.locked"] = "заблокированные";
$definitions["gambit.order by newest"] = "по новизне";
$definitions["gambit.order by replies"] = "по комментариям";
$definitions["gambit.private"] = "частные";
$definitions["gambit.random"] = "случайно";
$definitions["gambit.reverse"] = "в обратном порядке";
$definitions["gambit.starred"] = "избранные";
$definitions["gambit.muted"] = "скрытые";
$definitions["gambit.sticky"] = "выделенные";
$definitions["gambit.unread"] = "непрочитанные";
$definitions["gambit.limit:"] = "ограничиться: ";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "активные сегодня"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "активные 1 день"; // what it actually evaluates to

$definitions["gambit.has replies"] = "с комментариями";
$definitions["gambit.has >0 replies"] = "содержит ›0 комментариев";
$definitions["gambit.has >10 replies"] = "содержит ›10 комментариев";

$definitions["gambit.has no replies"] = "без комментариев";
$definitions["gambit.has 0 replies"] = "содержит 0 комментариев";

$definitions["gambit.dead"] = "мёртвые";
$definitions["gambit.active >30 day"] = "активные ›30 дней";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "секунд";
$definitions["gambit.minute"] = "минут";
$definitions["gambit.hour"] = "часов";
$definitions["gambit.day"] = "дней";
$definitions["gambit.week"] = "недель";
$definitions["gambit.month"] = "месяцев";
$definitions["gambit.year"] = "год";
$definitions["gambit.last"] = "за"; // as in "active last 180 days"
$definitions["gambit.active"] = "активные"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^имеет *(?<a>>|<|>=|<=)? *(?<b>\d+) *сообщ/";

$definitions["Old Forum"] = "Старый Форум";
$definitions["Spoiler"] = "Спойлер";
