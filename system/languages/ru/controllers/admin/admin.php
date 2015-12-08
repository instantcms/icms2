<?php

    define('LANG_ADMIN_CONTROLLER',     'Панель управления');

    define('LANG_CP_SECTION_INDEX',             'Главная');
    define('LANG_CP_SECTION_CTYPES',            'Типы контента');
    define('LANG_CP_SECTION_CONTENT',           'Контент');
    define('LANG_CP_SECTION_USERS',             'Пользователи');
    define('LANG_CP_SECTION_GROUPS',            'Группы');
    define('LANG_CP_SECTION_MENU',              'Меню');
    define('LANG_CP_SECTION_WIDGETS',           'Виджеты');
    define('LANG_CP_SECTION_CONTROLLERS',       'Компоненты');
    define('LANG_CP_SECTION_SETTINGS',          'Настройки');
    define('LANG_CP_SECTION_UPDATE',            'Обновления');

    define('LANG_CP_ACTIONS',                   'Действия');
    define('LANG_CP_SELECTED_EDIT',             'Редактировать');
    define('LANG_CP_SELECTED_DELETE',           'Удалить');

    define('LANG_CP_CTYPES_ADD',                'Создать тип контента');
    define('LANG_CP_CTYPES_EDIT',               'Изменить тип контента');
    define('LANG_CP_CTYPE_CREATED',             'Тип контента &laquo;%s&raquo; создан');
    define('LANG_CP_CTYPE_DELETE_CONFIRM',      'Удалить тип контента "{title}"?');

    define('LANG_CP_CTYPE_SETTINGS',            'Настройки');
    define('LANG_CP_CTYPE_LABELS',              'Заголовки');
    define('LANG_CP_CTYPE_FIELDS',              'Поля');
    define('LANG_CP_CTYPE_PROPS',               'Свойства');
    define('LANG_CP_CTYPE_PERMISSIONS',         'Доступ');
    define('LANG_CP_CTYPE_DATASETS',            'Наборы');
    define('LANG_CP_CTYPE_DATASET',             'Набор');

    define('LANG_CP_SYSTEM_NAME_HINT',          'Используется в URL и при создании таблиц в базе данных<br>После создания не изменяется!');

    define('LANG_CP_CONTENT_ITEM_ADD',          'Создать запись');
    define('LANG_CP_CONTENT_CATS_ADD',          'Создать категории');
    define('LANG_CP_CONTENT_CATS_EDIT',         'Редактировать категорию');
    define('LANG_CP_CONTENT_CATS_ORDER',        'Порядок');
    define('LANG_CP_CONTENT_CATS_ORDER_DRAG',   'Перетаскивайте категории');
    define('LANG_CP_CONTENT_CATS_NONE',         'Данный контент не имеет категорий');
    define('LANG_CP_CONTENT_ITEM_DELETE_CONFIRM',  'Удалить страницу "{title}"?');
    define('LANG_CP_CONTENT_CATS_TITLES',       'Название категории или дерево категорий');
    define('LANG_CP_CONTENT_CATS_TITLES_HINT',  'Для создания сразу нескольких категорий каждая из них должна быть на новой строке.<br>Дополнительная вложенность задается знаком дефис перед названием категории<br><a href="http://docs.instantcms.ru/manual/content/cats" target="_blank">Подробная инструкция</a>');
    define('LANG_CP_CONTENT_CATS_BIND',         'Привязать все свойства родительской категории');

    define('LANG_CP_BASIC',                     'Общие настройки');
    define('LANG_CP_PUBLICATION',               'Публикация');
    define('LANG_CP_PREMOD_ADD',                'Модерация при создании');
    define('LANG_CP_PREMOD_EDIT',               'Модерация при редактировании');
    define('LANG_CP_IS_PUB_CONTROL',            'Управление сроком публикации');
    define('LANG_CP_IS_PUB_CONTROL_HINT',		'Позволяет выбирать дату и срок публикации для каждой записи тем пользователям, которым это разрешено в разделе "Доступ"');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS',    'Что делать после окончания срока публикации');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS_HIDE','Скрыть');
    define('LANG_CP_IS_PUB_CONTROL_PROCESS_DEL','Удалить');
    define('LANG_CP_CATEGORIES',                'Категории');
    define('LANG_CP_CATEGORIES_ON',             'Включить категории');
    define('LANG_CP_CATEGORIES_RECURSIVE',      'Показывать записи из подкатегорий внутри родительской категории');
	define('LANG_CP_CATEGORIES_EMPTY_ROOT',		'Не показывать записи в корневой категории');
    define('LANG_CP_CATEGORIES_MULTI',			'Разрешить несколько категорий для одной записи');
    define('LANG_CP_CATEGORIES_CHANGE',         'Разрешить изменение категории после создания записи');
    define('LANG_CP_CATEGORIES_OPEN_ROOT',      'Разрешить добавлять записи в корневую категорию');
    define('LANG_CP_CATEGORIES_ONLY_LAST',      'Разрешить добавлять записи только в категории последнего уровня вложенности');
    define('LANG_CP_CATEGORIES_SHOW',           'Показывать список категорий над списком записей');
    define('LANG_CP_CTYPE_CATEGORIES_OFF',      'Для данного типа контента показ категорий отключен в <a href="%s">настройках</a>. Они не будут отображаться на сайте');
    define('LANG_CP_FOLDERS',                   'Личные папки');
    define('LANG_CP_FOLDERS_ON',                'Включить личные папки');
    define('LANG_CP_FOLDERS_HINT',              'Каждый пользователь сможет разделять контент по личным папкам, отображаемым при просмотре контента в профиле');
    define('LANG_CP_CT_GROUPS',                 'Связь с группами');
    define('LANG_CP_CT_GROUPS_ALLOW',           'Создание в группах');
    define('LANG_CP_CT_GROUPS_ALLOW_ONLY',      'Создание только в группах');
    define('LANG_CP_COMMENTS',                  'Комментарии');
    define('LANG_CP_COMMENTS_ON',               'Включить комментарии');
    define('LANG_CP_RATING',                    'Рейтинг');
    define('LANG_CP_RATING_ON',                 'Включить рейтинг');
    define('LANG_CP_TAGS_ON',                   'Включить теги');
    define('LANG_CP_TAGS_IN_LIST',              'Выводить теги при просмотре списка');
    define('LANG_CP_TAGS_IN_ITEM',              'Выводить теги при просмотре записи');
    define('LANG_CP_PHOTOS',                    'Изображения');
    define('LANG_CP_PHOTOS_ON',                 'Основное изображение');
    define('LANG_CP_PHOTOS_MULTI',              'Дополнительные изображения');
    define('LANG_CP_SEOMETA_DEFAULT',           'SEO по-умолчанию');
    define('LANG_CP_SEOMETA',                   'SEO для записей');
    define('LANG_CP_SEOMETA_MANUAL_TITLE',      'Вручную указывать тайтл для записей');
    define('LANG_CP_SEOMETA_AUTO_KEYS',         'Автоматическая генерация ключевых слов');
    define('LANG_CP_SEOMETA_AUTO_DESC',         'Автоматическая генерация META-описаний');
    define('LANG_CP_AUTO_URL',                  'Генерировать URL автоматически');
    define('LANG_CP_FIXED_URL',                 'Не изменять URL при редактировании записи');
    define('LANG_CP_URL_PATTERN',               'Шаблон генерации URL');
    define('LANG_CP_SEOMETA_CATS',              'SEO для категорий');
    define('LANG_CP_SEOMETA_CATS_TITLE',        'Разрешить ввод тайтлов для страниц категорий');
    define('LANG_CP_SEOMETA_CATS_KEYS',         'Разрешить ввод ключевых слов для категорий');
    define('LANG_CP_SEOMETA_CATS_DESC',         'Разрешить ввод META-описаний для категорий');
    define('LANG_CP_CATS_AUTO_URL',             'Генерировать URL из названия категории');
    define('LANG_CP_LISTVIEW_OPTIONS',          'Просмотр списка');
    define('LANG_CP_PROFILELIST_ON',            'Просмотр списка в профилях пользователей включен');
    define('LANG_CP_LISTVIEW_ON',               'Просмотр списка на сайте включен');
    define('LANG_CP_LISTVIEW_FILTER',           'Показывать фильтр');
    define('LANG_CP_LISTVIEW_FILTER_EXPAND',    'Разворачивать панель фильтра');
    define('LANG_CP_LISTVIEW_STYLE',            'Стиль списка');
    define('LANG_CP_LISTVIEW_STYLE_HINT',       'Перечислены шаблоны из папки <b>/templates/%s/content</b>');
    define('LANG_CP_LISTVIEW_STYLE_BASIC',      'Обычный');
    define('LANG_CP_LISTVIEW_STYLE_FEATURED',   'Журнальный');
    define('LANG_CP_LISTVIEW_STYLE_TILES',      'Плитка');
    define('LANG_CP_LISTVIEW_STYLE_TABLE',      'Таблица');
    define('LANG_CP_PRIVACY_TYPE',              'Как показывать приватные записи в списке');
    define('LANG_CP_PRIVACY_TYPE_HIDE',         'Не показывать');
    define('LANG_CP_PRIVACY_TYPE_SHOW_TITLE',   'Показывать только название');
    define('LANG_CP_PRIVACY_TYPE_SHOW_ALL',     'Показывать полностью');

    define('LANG_CP_ITEMVIEW_OPTIONS',          'Просмотр записи');
    define('LANG_CP_ITEMVIEW_ON',               'Просмотр записи включен');
    define('LANG_CP_ITEMVIEW_HITS_ON',			'Считать количество просмотров');
    define('LANG_CP_ITEMVIEW_APPEND_HTML',      'Выводить HTML в конце записи');
    define('LANG_CP_ITEMVIEW_APPEND_HTML_HINT', 'Введенный здесь HTML код будет выводиться под каждой записью');

    define('LANG_CP_NUMERALS_LABELS',           'Числительные');
    define('LANG_CP_NUMERALS_1_LABEL',          'Один / одна / одно (...)');
    define('LANG_CP_NUMERALS_2_LABEL',          'Два / две (...)');
    define('LANG_CP_NUMERALS_10_LABEL',         'Много (...)');
    define('LANG_CP_ACTIONS_LABELS',            'Операции');
    define('LANG_CP_ACTION_ADD_LABEL',          'Создать (...)');
    define('LANG_CP_LIST_LABELS',               'Заголовки списков');
    define('LANG_CP_LIST_LABEL',                'Заголовок списка записей');
    define('LANG_CP_PROFILE_LABEL',             'Заголовок списка в профиле');
    define('LANG_CP_LIST_LABELS_HINT',          'Если не указан - используется название типа контента');

    define('LANG_CP_TAB',                       'Вкладка');
    define('LANG_CP_TAB_TITLE',                 'Название вкладки');
    define('LANG_CP_TAB_IS_ACTIVE',             'Показывать вкладку');

    define('LANG_CP_FIELD',                     'Поле');
    define('LANG_CP_FIELD_FORMAT',              'Формат поля');
    define('LANG_CP_FIELD_TYPE',                'Тип поля');
    define('LANG_CP_FIELD_TYPE_OPTS',           'Настройки поля');
    define('LANG_CP_FIELD_VALUES',              'Предустановленные значения');
    define('LANG_CP_FIELD_PROFILE_VALUE',       'Значение из профиля пользователя');
    define('LANG_CP_FIELD_PROFILE_VALUE_HINT',  'Поле может получать значение по-умолчанию из профиля текущего пользователя<br/>Только для текстовых полей и списков');
    define('LANG_CP_FIELD_TITLE',               'Название поля');
    define('LANG_CP_FIELD_FIELDSET',            'Группа');
    define('LANG_CP_FIELD_FIELDSET_SELECT',     'Выберите группу');
    define('LANG_CP_FIELD_FIELDSET_ADD',        'Создать новую группу');
    define('LANG_CP_FIELD_HINT',                'Подсказка для поля');
    define('LANG_CP_FIELD_ADD',                 'Создать поле');
    define('LANG_CP_FIELD_CREATED',             'Поле &laquo;%s&raquo; создано');
    define('LANG_CP_FIELD_DELETE_CONFIRM',      'Удалить поле "{title}"?');
    define('LANG_CP_FIELD_VISIBILITY',          'Видимость поля');
    define('LANG_CP_FIELD_LABELS',              'Положение заголовков');
    define('LANG_CP_FIELD_LABELS_IN_LIST',      'При просмотре списка');
    define('LANG_CP_FIELD_LABELS_IN_ITEM',      'При просмотре записи');
    define('LANG_CP_FIELD_LABEL_NONE',          'Не показывать');
    define('LANG_CP_FIELD_LABEL_LEFT',          'Слева');
    define('LANG_CP_FIELD_LABEL_TOP',           'Сверху');
    define('LANG_CP_FIELD_IN_LIST',             'Показывать в списке');
    define('LANG_CP_FIELD_IN_ITEM',             'Показывать в записи');
    define('LANG_CP_FIELD_IN_LIST_SHORT',       'В списке');
    define('LANG_CP_FIELD_IN_ITEM_SHORT',       'В записи');
    define('LANG_CP_FIELD_IN_FILTER',           'Показывать в фильтре');
    define('LANG_CP_FIELD_PRIVACY',             'Приватность');
    define('LANG_CP_FIELD_PRIVATE',             'Показывать поле только автору записи');
    define('LANG_CP_FIELD_GROUPS_READ',         'Доступ для чтения');
    define('LANG_CP_FIELD_GROUPS_EDIT',         'Доступ для изменения');

    define('LANG_CP_PROPS_NO_CATS',             'Тип контента &laquo;%s&raquo; не содержит категорий.');
    define('LANG_CP_PROPS_NO_CATS_ADD',         '<a href="%s">Создайте категории</a> чтобы добавлять свойства.');
    define('LANG_CP_PROPS_ADD',                 'Создать свойство');
    define('LANG_CP_PROPS_DELETE_CONFIRM',      'Удалить свойство "{title}"?\nСвойство будет удалено из всех категорий');
    define('LANG_CP_PROPS_BIND',                'Привязать свойство');
    define('LANG_CP_PROPS_BIND_RECURSIVE',      'включая вложенные категории');
    define('LANG_CP_PROPS_UNBIND',              'Отвязать свойство');
    define('LANG_CP_PROP_TITLE',                'Название свойства');
    define('LANG_CP_PROP_IS_ACTIVE',            'Показывать на сайте');
    define('LANG_CP_PROP_VALUES',               'Элементы списка');
    define('LANG_CP_PROP_VALUES_HINT',          'Одно значение в каждой строке');
    define('LANG_CP_PROP_CATS',                 'Привязать свойство к категориям');
    define('LANG_CP_PROP_UNITS',                'Единицы измерения');

    define('LANG_CP_DATASET',                   'Набор');
    define('LANG_CP_DATASET_ADD',               'Создать набор');
    define('LANG_CP_DATASET_TITLE',             'Название набора');
    define('LANG_CP_DATASET_CREATED',           'Набор &laquo;%s&raquo; создан');
    define('LANG_CP_DATASET_DELETE_CONFIRM',    'Удалить набор "{title}"?');
    define('LANG_CP_DATASET_IS_VISIBLE',        'Показывать набор на сайте');

    define('LANG_CP_MENU',                      'Меню');
    define('LANG_CP_MENU_ADD',                  'Создать меню');
    define('LANG_CP_MENU_EDIT',                 'Изменить меню');
    define('LANG_CP_MENU_CREATED',              'Меню &laquo;%s&raquo; создано');
    define('LANG_CP_MENU_DELETE',               'Удалить меню');
    define('LANG_CP_MENU_DELETE_CONFIRM',       'Удалить активное меню?');
    define('LANG_CP_MENU_ITEM',                 'Пункт меню');
    define('LANG_CP_MENU_ITEM_PARENT',          'Родительский пункт');
    define('LANG_CP_MENU_ITEM_CREATED',         'Пункт меню &laquo;%s&raquo; создан');
    define('LANG_CP_MENU_ITEM_TITLE',           'Название пункта');
    define('LANG_CP_MENU_ITEM_URL',             'Ссылка');
    define('LANG_CP_MENU_ITEM_ADD',             'Создать пункт');
    define('LANG_CP_MENU_ITEM_DELETE_CONFIRM',  'Удалить пункт меню "{title}"?');
    define('LANG_CP_MENU_ITEM_ACTION',          'Действие пункта меню');
    define('LANG_CP_MENU_ITEM_ACTION_URL',      'Открыть ссылку');
    define('LANG_CP_MENU_ITEM_ACTION_URL_HINT', 'Для внутренних ссылок начальный слэш не указывается<br/>Внешние ссылки должны начинаться с http://<br/>Можно указывать <a href="http://docs.instantcms.ru/manual/menu/special" target="_blank">специальные ссылки</a>');
    define('LANG_CP_MENU_ITEM_ACTION_TARGET',   'Открывать ссылку');
    define('LANG_CP_MENU_ITEM_TARGET_SELF',     'В текущем окне');
    define('LANG_CP_MENU_ITEM_TARGET_BLANK',    'В новом окне');
    define('LANG_CP_MENU_ITEM_TARGET_PARENT',   'В родительском окне');
    define('LANG_CP_MENU_ITEM_TARGET_TOP',      'Поверх всех фреймов');
    define('LANG_CP_MENU_IS_FIXED',             'Нельзя удалить системное меню');

    define('LANG_CP_WIDGETS_PAGE',              'Страница');
    define('LANG_CP_WIDGETS_ADD',               'Создать виджет');
    define('LANG_CP_WIDGETS_ADD_PAGE',          'Создать страницу');
    define('LANG_CP_WIDGETS_EDIT_PAGE',         'Редактировать');
    define('LANG_CP_WIDGETS_DELETE_PAGE',       'Удалить');
    define('LANG_CP_WIDGETS_UNBIND_ALL_WIDGETS', 'Отвязать все виджеты');
    define('LANG_CP_WIDGETS_UNBIND_ALL_WIDGETS_CONFIRM', 'Отвязать все виджеты с позиций?\nВиджеты переместятся в неиспользуемые');
    define('LANG_CP_WIDGETS_MISC',              'Общие');
    define('LANG_CP_WIDGET_DELETE_CONFIRM',     'Удалить виджет?');
    define('LANG_CP_WIDGET_PAGE_CREATED',       'Страница &laquo;%s&raquo; создана');
    define('LANG_CP_WIDGET_PAGE_URLS',          'Фильтрация URL');
    define('LANG_CP_WIDGET_PAGE_URL_MASK',      'Положительные маски');
    define('LANG_CP_WIDGET_PAGE_URL_MASK_NOT',  'Отрицательные маски');
    define('LANG_CP_WIDGETS_UNUSED',            'Неиспользуемые виджеты');
    define('LANG_CP_WIDGETS_UNUSED_HINT',       'Поместите сюда виджеты которые нужно временно скрыть или переместить на другую страницу без потери настроек');

    define('LANG_CP_USER_ADD',                  'Создать пользователя');
    define('LANG_CP_USER_CREATED',              'Пользователь &laquo;%s&raquo; создан');
    define('LANG_CP_USER_DELETE_CONFIRM',       'Удалить пользователя {nickname}?\nБудет также удален весь его контент и все загруженные им файлы!');
    define('LANG_CP_USER_DELETED',              'Пользователь %s удален');
    define('LANG_CP_USER_GROUP_ADD',            'Создать группу');
    define('LANG_CP_USER_GROUP_EDIT',           'Редактировать группу');
    define('LANG_CP_USER_GROUP_PERMS',          'Права группы');
    define('LANG_CP_USER_GROUP_DELETE',         'Удалить группу');
    define('LANG_CP_USER_GROUP_DELETE_CONFIRM', 'Удалить выбранную группу?\nПользователи не будут удалены');
    define('LANG_CP_USER_GROUP_CREATED',        'Группа &laquo;%s&raquo; создана');
    define('LANG_CP_USER_GROUP_IS_PUBLIC',      'Разрешить вступление при регистрации');
    define('LANG_CP_USER_GROUP_IS_FILTER',      'Показывать в фильтре пользователей');
    define('LANG_CP_USER_LOCKING',              'Блокировка');
    define('LANG_CP_USER_LOCKED',               'Блок');
    define('LANG_CP_USER_IS_LOCKED',            'Заблокировать пользователя');
    define('LANG_CP_USER_LOCK_UNTIL',           'Заблокировать до');
    define('LANG_CP_USER_LOCK_REASON',          'Причина блокировки');
    define('LANG_CP_USER_NOT_FOUND',            'Пользователь %s не найден');

    define('LANG_CP_CONTROLLERS_ADD',           'Установить компонент');
    define('LANG_CP_ERR_BACKEND_NOT_FOUND',     'Компонент &laquo;%s&raquo; не имеет настроек');

    define('LANG_CP_SETTINGS_SITE',             'Сайт');
    define('LANG_CP_SETTINGS_GUI',              'Интерфейс');
    define('LANG_CP_SETTINGS_FRONTPAGE',        'Главная страница');
    define('LANG_CP_SETTINGS_DATE',             'Даты');
    define('LANG_CP_SETTINGS_MAIL',             'Почта');
    define('LANG_CP_SETTINGS_CACHE',            'Кеширование');
    define('LANG_CP_SETTINGS_DEBUG',            'Отладка');
    define('LANG_CP_SETTINGS_MISC',             'Прочие');

    define('LANG_CP_SETTINGS_SITE_ENABLED',     'Сайт включен');
    define('LANG_CP_SETTINGS_SITE_REASON',      'Причина отключения сайта');
    define('LANG_CP_SETTINGS_CHECK_UPDATES',    'Автоматически проверять наличие обновлений InstantCMS при входе администратора');
    define('LANG_CP_SETTINGS_SITENAME',         'Название сайта');
    define('LANG_CP_SETTINGS_HOMETITLE',        'Заголовок главной страницы');
    define('LANG_CP_SETTINGS_METAKEYS',         'Ключевые слова');
    define('LANG_CP_SETTINGS_METADESC',         'Описание сайта');
	define('LANG_CP_SETTINGS_META_NO_DEFAULT',  'Использовать указанные выше слова и описание только для главной страницы');
	define('LANG_CP_SETTINGS_IS_SITENAME_IN_TITLE',  'Добавлять в тег title страницы название сайта');
    define('LANG_CP_SETTINGS_LANGUAGE',         'Локализация');
    define('LANG_CP_SETTINGS_TEMPLATE',         'Тема оформления');
    define('LANG_CP_SETTINGS_TEMPLATE_OPTIONS', 'Настройки темы');
    define('LANG_CP_SETTINGS_HTML_MINIFY',      'Сжимать HTML');
    define('LANG_CP_SETTINGS_MERGE_CSS',        'Объединять CSS-файлы');
    define('LANG_CP_SETTINGS_MERGE_JS',         'Объединять JS-файлы');
    define('LANG_CP_SETTINGS_CACHE_CLEAN_MERGED',  '&mdash; <a href="%s">Очистить кеш</a>');
    define('LANG_CP_SETTINGS_MERGED_CLEANED',   'Папка <b>%s</b> успешно очищена');
    define('LANG_CP_SETTINGS_MERGED_CLEAN_FAIL','Не удалось очистить папку <b>%s</b>. Проверьте права или очистите ее вручную');
	define('LANG_CP_SETTINGS_CTYPE_DEF',        'Тип контента по-умолчанию');
	define('LANG_CP_SETTINGS_CTYPE_DEF_HINT',	'В URL записей данного типа контента не будет добавляться его системное имя');
    define('LANG_CP_SETTINGS_FP_SHOW',          'Выводить на главной странице');
    define('LANG_CP_SETTINGS_FP_SHOW_NONE',     'Только виджеты');
    define('LANG_CP_SETTINGS_FP_SHOW_PROFILE',  'Профиль / авторизация');
    define('LANG_CP_SETTINGS_FP_SHOW_CONTENT',  'Контент: %s');
    define('LANG_CP_SETTINGS_TIMEZONE',         'Часовой пояс');
    define('LANG_CP_SETTINGS_DATE_FORMAT',      'Формат даты PHP');
    define('LANG_CP_SETTINGS_DATE_FORMAT_JS',   'Формат даты JavaScript');
    define('LANG_CP_SETTINGS_MAIL_TRANSPORT',   'Почтовый транспорт');
    define('LANG_CP_SETTINGS_MAIL_FROM',        'Адрес отправителя');
    define('LANG_CP_SETTINGS_MAIL_FROM_NAME',   'Название отправителя');
    define('LANG_CP_SETTINGS_MAIL_SMTP',        'Настройки SMTP');
    define('LANG_CP_SETTINGS_MAIL_SMTP_HOST',   'SMTP Сервер');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PORT',   'SMTP Порт');
    define('LANG_CP_SETTINGS_MAIL_SMTP_AUTH',   'SMTP Авторизация');
    define('LANG_CP_SETTINGS_MAIL_SMTP_USER',   'SMTP Пользователь');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PASS',   'SMTP Пароль');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC',    'SMTP Шифрование');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_NO', 'Без шифрования');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_SSL','SSL');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_TLS','TLS');
    define('LANG_CP_SETTINGS_CACHE_ENABLED',    'Кеширование включено');
    define('LANG_CP_SETTINGS_CACHE_METHOD',     'Метод кеширования');
    define('LANG_CP_SETTINGS_CACHE_METHOD_NO',  'не доступно');
    define('LANG_CP_SETTINGS_CACHE_TTL',        'Время жизни кеша, сек');
    define('LANG_CP_SETTINGS_CACHE_HOST',       'Memcached Сервер');
    define('LANG_CP_SETTINGS_CACHE_PORT',       'Memcached Порт');
    define('LANG_CP_SETTINGS_CACHE_MIN_HTML',   'Минифицировать HTML');

    define('LANG_CP_MEMCACHE_NOT_AVAILABLE',    'Модуль Memcached не найден');
    define('LANG_CP_MEMCACHE_CONNECT_ERROR',    'Не удалось подключиться к Memcached - проверьте сервер и порт');

    define('LANG_CP_SETTINGS_NOT_WRITABLE',     'Ошибка перезаписи файла конфигурации');

    define('LANG_CP_SETTINGS_DEBUG_MODE',       'Включить режим отладки');
    define('LANG_CP_SETTINGS_EMULATE_LAG',      'Имитировать сетевые задержки');

    define('LANG_CP_SETTINGS_CACHE_CLEAN',      'Очистить кеш');

    define('LANG_CP_INSTALL_PACKAGE',           'Установить пакет дополнения');
    define('LANG_CP_INSTALL_PACKAGE_DONE',      'Установка завершена');
    define('LANG_CP_INSTALL_PACKAGE_DONE_INFO', 'Пакет дополнения был успешно установлен');
    define('LANG_CP_INSTALL_PACKAGE_NOT_CLEARED', 'Папка <b>%s</b> не была очищена из-за нехватки прав, сделайте это вручную');
    define('LANG_CP_INSTALL_PACKAGE_INFO',      'Информация о пакете');
    define('LANG_CP_INSTALL_PACKAGE_FILE',      'Файл пакета');
    define('LANG_CP_INSTALL_PACKAGE_FILE_HINT', 'Файл с расширением <b>.icp</b> или <b>.zip</b>');
    define('LANG_CP_INSTALL_ERR_HINT',          'Следствие');
    define('LANG_CP_INSTALL_ERR_FIX',           'Решение');
    define('LANG_CP_INSTALL_ERR_WA',            'Обход проблемы');
    define('LANG_CP_INSTALL_NOT_WRITABLE',      'Папка <b>%s</b> не доступна для записи');
    define('LANG_CP_INSTALL_NOT_WRITABLE_HINT', 'Автоматическая загрузка пакета невозможна');
    define('LANG_CP_INSTALL_NOT_WRITABLE_FIX',  'Выставьте права 777 на указанную папку и обновите страницу');
    define('LANG_CP_INSTALL_NOT_WRITABLE_WA',   'Смените расширение пакета на <b>.zip</b>, распакуйте и загрузите содержимое в папку <b>%s</b>');
    define('LANG_CP_INSTALL_NOT_ZIP',           'Сервер не поддерживает автоматическую распаковку ZIP-архивов');
    define('LANG_CP_INSTALL_NOT_ZIP_HINT',      'Автоматическая распаковка архива не возможна');
    define('LANG_CP_INSTALL_NOT_ZIP_FIX',       'Обратитесь к хостеру с просьбой обеспечить работу класса <b>ZipArchive</b> для PHP на вашем сервере');
    define('LANG_CP_INSTALL_NOT_ZIP_WA',   'Смените расширение пакета на <b>.zip</b>, распакуйте и загрузите содержимое в папку <b>%s</b>');
    define('LANG_CP_INSTALL_ZIP_ERROR',         'Ошибка распаковки пакета');
    define('LANG_CP_INSTALL_FTP_NOTICE',        'Для загрузки содержимого пакета в нужные папки сайта необходимо указать реквизиты FTP-пользователя, имеющего права на создание папок и файлов.');
    define('LANG_CP_INSTALL_FTP_PRIVACY',       'Введенные реквизиты никуда не передаются и хранятся в сессии только до конца текущего сеанса');

    define('LANG_CP_PACKAGE_AUTHOR',            'Автор пакета');
    define('LANG_CP_PACKAGE_DESCRIPTION',       'Описание пакета');
    define('LANG_CP_PACKAGE_CONTENTS',          'Содержимое пакета');
    define('LANG_CP_PACKAGE_DEPENDS',           'Зависимости пакета');
    define('LANG_CP_PACKAGE_DEPENDS_CORE',      'Требуемая версия ядра');

    define('LANG_CP_PACKAGE_DEPENDS_PACKAGE',   'Требуемая версия установленного пакета');
    define('LANG_CP_PACKAGE_TYPE_COMPONENT_INSTALL', 'Пакет установки компонента');
    define('LANG_CP_PACKAGE_TYPE_COMPONENT_UPDATE', 'Пакет обновления компонента');
    define('LANG_CP_PACKAGE_TYPE_WIDGET_INSTALL', 'Пакет установки виджета');
    define('LANG_CP_PACKAGE_TYPE_WIDGET_UPDATE', 'Пакет обновления виджета');
    define('LANG_CP_PACKAGE_TYPE_SYSTEM_UPDATE', 'Пакет обновления InstantCMS');
    define('LANG_CP_PACKAGE_DUBLE_INSTALL', 'Пакет версии %s уже был установлен. Если вы хотите его обновить, выберите соответствующий пакет обновления. Если вы хотите переустановить пакет, то сначала удалите его в админке.');
    define('LANG_CP_PACKAGE_UPDATE_ERROR', '%s "%s" имеет номер версии <b>%s</b>. У вас установлена версия <b>%s</b>. Для обновления выберите пакет большей версии.');
    define('LANG_CP_PACKAGE_UPDATE_IS_UPDATED', 'Версия пакета обновления соответствует установленной. Обновление не требуется.');
    define('LANG_CP_PACKAGE_TYPE', 'Тип пакета');
    define('LANG_CP_PACKAGE_NONAME', 'Неизвестный автор');
    define('LANG_CP_PACKAGE_UPDATE_NOINSTALL', 'Невозможно установить пакет обновления, поскольку обновляемое дополнение не установлено');

    define('LANG_CP_COMPONENT_IS_DELETED',      'Компонент "%s" успешно удален');
    define('LANG_CP_DELETE_COMPONENT_CONFIRM',  'Вы действительно хотите удалить компонент "{title}"?');

    define('LANG_CP_FTP_ACCOUNT',               'Реквизиты FTP');
    define('LANG_CP_FTP_HOST',                  'Сервер');
    define('LANG_CP_FTP_USER',                  'Имя пользователя');
    define('LANG_CP_FTP_PASS',                  'Пароль');
    define('LANG_CP_FTP_PATH',                  'Путь папки сайта');
    define('LANG_CP_FTP_PATH_HINT',             '<a href="http://docs.instantcms.ru/manual/addons/ftppath" target="_blank">Как правильно указать путь?</a>');
    define('LANG_CP_FTP_IS_PASV',               'Пассивный режим передачи');
    define('LANG_CP_FTP_AUTH_FAILED',           'Ошибка подключения. Проверьте правильность указанных реквизитов');
    define('LANG_CP_FTP_UPLOAD_FAILED',         'Ошибка копирования файлов. Проверьте правильность пути и наличие прав');
    define('LANG_CP_FTP_MKDIR_FAILED',          'Ошибка создания директории. Проверьте правильность пути и наличие прав');
	define('LANG_CP_FTP_NO_ROOT',				'Ошибка: папка %s не найдена на сервере');
	define('LANG_CP_FTP_BAD_ROOT',				'Ошибка пути: InstantCMS 2 не найдена в <strong>%s</strong>');

    define('ERR_VALIDATE_UNIQUE_FIELD',         'Поле уже существует');
    define('LANG_CP_BACK_TO_SITE',              'Вернуться на сайт');
    define('LANG_CP_3RDPARTY_CREDITS',          'При участии');

    define('LANG_MODERATOR_ADD',             'Добавить модератора');
    define('LANG_MODERATOR_ADD_HINT',        'Введите имя пользователя которого вы хотите назначить модератором');
    define('LANG_MODERATOR_APPROVED_COUNT',  'Одобрено');
    define('LANG_MODERATOR_DELETED_COUNT',   'Удалено');
    define('LANG_MODERATOR_IDLE_COUNT',      'В процессе');
    define('LANG_MODERATOR_ASSIGNED_DATE',   'Назначен');
    define('LANG_MODERATOR_ALREADY',         'Пользователь %s уже является модератором');

    define('LANG_CP_SCHEDULER',                     'Планировщик');
    define('LANG_CP_SCHEDULER_TASK',                'Задача');
    define('LANG_CP_SCHEDULER_TASK_ADD',            'Создать задачу');
    define('LANG_CP_SCHEDULER_TASK_EDIT',           'Редактировать задачу');
    define('LANG_CP_SCHEDULER_TASK_CONTROLLER',     'Компонент');
    define('LANG_CP_SCHEDULER_TASK_HOOK',           'Хук');
    define('LANG_CP_SCHEDULER_TASK_PERIOD',         'Период, мин.');
    define('LANG_CP_SCHEDULER_TASK_LAST_RUN',       'Последний запуск');
    define('LANG_CP_SCHEDULER_TASK_DELETE_CONFIRM', 'Удалить задачу?');
    define('LANG_CP_SCHEDULER_TASK_CREATED',        'Задача создана');
    define('LANG_CP_SCHEDULER_TASK_IS_ACTIVE',      'Задача активна');
    define('LANG_CP_SCHEDULER_TASK_RUN',            'Выполнить сейчас');
    define('LANG_CP_SCHEDULER_TASK_RAN',            'Задача &laquo;%s&raquo; была выполнена %s');
    define('LANG_CP_SCHEDULER_TASK_RUN_FAIL',       'Не удалось выполнить задачу &laquo;%s&raquo;');

    define('LANG_CP_UPDATE_CHECK',                  'Проверить обновления');
    define('LANG_CP_UPDATE_DATE',                   'Дата релиза');
    define('LANG_CP_UPDATE_DOWNLOAD',               'Скачать обновление');
    define('LANG_CP_UPDATE_DOWNLOAD_FAIL',          'Не удалось скачать пакет обновления');
    define('LANG_CP_UPDATE_INSTALL',                'Установить обновление');
    define('LANG_CP_UPDATE_AVAILABLE',              'Доступно обновление %s');
    define('LANG_CP_UPDATE_NOT_AVAILABLE',          'Нет обновлений. Вы используете последнюю версию');
    define('LANG_CP_UPDATE_CHECK_FAIL',             'Не удалось проверить наличие обновлений');
    define('LANG_CP_UPDATE_MANUAL_1',               'Автоматическая загрузка не возможна, поскольку на сервере отсутствует CURL.');
    define('LANG_CP_UPDATE_MANUAL_2',               'Скачайте архив с обновлением вручную и установите через <a href="'.href_to('admin', 'install').'">установку дополнений</a>');

    define('LANG_HELP_URL_CONTENT',                 'http://docs.instantcms.ru/manual/content');
    define('LANG_HELP_URL_CONTENT_CATS',            'http://docs.instantcms.ru/manual/content/cats');
    define('LANG_HELP_URL_CTYPES',                  'http://docs.instantcms.ru/manual/ctypes');
    define('LANG_HELP_URL_CTYPES_BASIC',            'http://docs.instantcms.ru/manual/ctypes/add');
    define('LANG_HELP_URL_CTYPES_LABELS',           'http://docs.instantcms.ru/manual/ctypes/labels');
    define('LANG_HELP_URL_CTYPES_FIELDS',           'http://docs.instantcms.ru/manual/ctypes/fields');
    define('LANG_HELP_URL_CTYPES_FIELD',            'http://docs.instantcms.ru/manual/ctypes/fields/add');
    define('LANG_HELP_URL_CTYPES_PROPS',            'http://docs.instantcms.ru/manual/ctypes/props');
    define('LANG_HELP_URL_CTYPES_PROP',             'http://docs.instantcms.ru/manual/ctypes/props/add');
    define('LANG_HELP_URL_CTYPES_DATASETS',         'http://docs.instantcms.ru/manual/ctypes/datasets');
    define('LANG_HELP_URL_CTYPES_DATASET',          'http://docs.instantcms.ru/manual/ctypes/datasets/add');
    define('LANG_HELP_URL_CTYPES_PERMS',            'http://docs.instantcms.ru/manual/ctypes/permissions');
    define('LANG_HELP_URL_CTYPES_MODERATORS',       'http://docs.instantcms.ru/manual/ctypes/moderators');
    define('LANG_HELP_URL_MENU',                    'http://docs.instantcms.ru/manual/menu');
    define('LANG_HELP_URL_WIDGETS',                 'http://docs.instantcms.ru/manual/widgets');
    define('LANG_HELP_URL_WIDGETS_CFG',             'http://docs.instantcms.ru/manual/widgets/config');
    define('LANG_HELP_URL_WIDGETS_PAGES',           'http://docs.instantcms.ru/manual/widgets/pages');
    define('LANG_HELP_URL_COMPONENTS',              'http://docs.instantcms.ru/manual/components');
    define('LANG_HELP_URL_COM_AUTH',                'http://docs.instantcms.ru/manual/components/auth');
    define('LANG_HELP_URL_COM_ACTIVITY',            'http://docs.instantcms.ru/manual/components/activity');
    define('LANG_HELP_URL_COM_GROUPS',              'http://docs.instantcms.ru/manual/components/groups');
    define('LANG_HELP_URL_COM_RECAPTCHA',           'http://docs.instantcms.ru/manual/components/recaptcha');
    define('LANG_HELP_URL_COM_COMMENTS',            'http://docs.instantcms.ru/manual/components/comments');
	define('LANG_HELP_URL_COM_IMAGES',				'http://docs.instantcms.ru/manual/components/images');
    define('LANG_HELP_URL_COM_USERS',               'http://docs.instantcms.ru/manual/components/users');
    define('LANG_HELP_URL_COM_USERS_MIGRATON',      'http://docs.instantcms.ru/manual/components/users/migrations');
    define('LANG_HELP_URL_COM_MARKITUP',            'http://docs.instantcms.ru/manual/components/markitup');
    define('LANG_HELP_URL_COM_RATING',              'http://docs.instantcms.ru/manual/components/rating');
    define('LANG_HELP_URL_COM_SEARCH',              'http://docs.instantcms.ru/manual/components/search');
    define('LANG_HELP_URL_COM_TAGS',                'http://docs.instantcms.ru/manual/components/tags');
    define('LANG_HELP_URL_COM_RSS',                 'http://docs.instantcms.ru/manual/components/rss');
    define('LANG_HELP_URL_COM_SITEMAP',             'http://docs.instantcms.ru/manual/components/sitemap');
	define('LANG_HELP_URL_COM_PHOTOS',				'http://docs.instantcms.ru/manual/components/photos');
    define('LANG_HELP_URL_USERS',                   'http://docs.instantcms.ru/manual/users');
    define('LANG_HELP_URL_USERS_USER',              'http://docs.instantcms.ru/manual/users/user');
    define('LANG_HELP_URL_USERS_GROUP',             'http://docs.instantcms.ru/manual/users/group');
    define('LANG_HELP_URL_SETTINGS',                'http://docs.instantcms.ru/manual/settings');
    define('LANG_HELP_URL_SETTINGS_GLOBAL',         'http://docs.instantcms.ru/manual/settings/global');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER',      'http://docs.instantcms.ru/manual/settings/scheduler');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER_TASK', 'http://docs.instantcms.ru/manual/settings/scheduler/task');

    define('LANG_ZIP_ERROR_10', 'Файл уже существует');
    define('LANG_ZIP_ERROR_21', 'Несовместимый ZIP-архив');
    define('LANG_ZIP_ERROR_18', 'Недопустимый аргумент');
    define('LANG_ZIP_ERROR_14', 'Ошибка динамического выделения памяти');
    define('LANG_ZIP_ERROR_9', 'Нет такого файла');
    define('LANG_ZIP_ERROR_19', 'Файл не является zip архивом');
    define('LANG_ZIP_ERROR_11', 'Невозможно открыть файл');
    define('LANG_ZIP_ERROR_5', 'Ошибка чтения');
    define('LANG_ZIP_ERROR_4', 'Ошибка поиска');