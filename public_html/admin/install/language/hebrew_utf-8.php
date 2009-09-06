<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.6                                                               |
// +---------------------------------------------------------------------------+
// | hebrew_utf-8.php                                                          |
// |                                                                           |
// | Hebrew language file for the Geeklog installation script                  |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2008-2009                                                   |
// | http://lior.weissbrod.com                                                 |
// | Version 1                                                             |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'utf-8';
$LANG_DIRECTION = 'rtl';

// +---------------------------------------------------------------------------+
// | Array Format:                                                             |
// | $LANG_NAME[XX]: $LANG - variable name                                     |
// |                 NAME  - where array is used                               |
// |                 XX    - phrase id number                                  |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    0 => 'Geeklog - The Ultimate Weblog System',
    1 => 'תמיכת התקנה',
    2 => 'The Ultimate Weblog System',
    3 => 'התקנת Geeklog',
    4 => 'דרוש PHP 4.3.0',
    5 => 'מצטערים, אבל Geeklog דורש לפחות PHP 4.3.0 בשביל לרוץ (לכם יש גירסה ',
    6 => '). אנא <a href="http://www.php.net/downloads.php">שדרגו את גירסת ה-PHP שלכם</a> או בקשו ממארחי השרת שלכם לעשות זאת בשבילכם.',
    7 => 'לא אותרו הקבצים של Geeklog',
    8 => 'ההתקנה לא הצליחה לאתר את הקבצים החשובים של Geeklog. זה כנראה מפני שהיזזתם אותם ממיקום ברירת המחדל שלהם. אנא ציינו את הנתיבים לקבצים ולספריות להלן:',
    9 => 'ברוכים הבאים ותודה לכם שבחרתם Geeklog!',
    10 => 'קובץ/ספרייה',
    11 => 'הרשאות',
    12 => 'שנו ל',
    13 => 'כרגע',
    14 => '',
    15 => 'ייצוא הכותרות ב-Geeklog מכובה. ספריית ה-<code>backend</code> לא נבדקה',
    16 => 'נדידת אתר',
    17 => 'התמונות של המשתמשים מנוטרלים. ספריית ה-<code>userphotos</code> לא נבדקה',
    18 => 'התמונות במאמרים מנוטרלים. ספריית ה-<code>articles</code> לא נבדקה',
    19 => 'כדי לפעול כמו שצריך Geeklog צריך שקבצים וספריות מסוימים יהיו ניתנים לכתיבה על ידי שרת הרשת. להלן רשימת הרשאות קבצים וספריות שעליכם לשנות לפני שתמשיכו עם ההתקנה.',
    20 => 'אזהרה!',
    21 => 'המערכת לניהול תוכן והאתר לא יעבדו כמו שצריך עד שיתוקנו הבעיות המצוינות לעיל. כישלון בקיום הצעד הזה הוא הסיבה מספר אחת שאנשים מקבלים שגיאות כשהם מנסים בפעם הראשונה להריץ את Geeklog. אנא בצעו את השינויים הדרושים לפני שהנכם ממשיכים.',
    22 => 'לא ידוע',
    23 => 'ביחרו את שיטת ההתקנה שלכם:',
    24 => 'התקנה חדשה',
    25 => 'שידרוג',
    26 => 'השינוי לא מצליח',
    27 => '. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    28 => 'siteconfig.php. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    29 => 'אתר Geeklog',
    30 => 'עוד אתר מעניין של Geeklog',
    31 => 'מידע הגדרות הכרחיות',
    32 => 'שם האתר',
    33 => 'סלוגן האתר',
    34 => 'סוג מאגר המידע',
    35 => 'MySQL',
    36 => 'MySQL עם תמיכה בטבלת InnoDB',
    37 => 'Microsoft SQL',
    38 => 'שגיאה',
    39 => 'שם השרת של מאגר המידע',
    40 => 'שם מאגר המידע',
    41 => 'שם המשתמש של מאגר המידע',
    42 => 'הסיסמה למאגר המידע',
    43 => 'תחילית הטבלאות במאגר המידע',
    44 => 'הגדרות אופציונליות',
    45 => 'כתובת האתר',
    46 => '(ללא לוכסן בסוף)',
    47 => 'נתיב ספריית ה-admin',
    48 => 'כתובת האימייל של האתר',
    49 => 'כתובת האימייל של No-Reply',
    50 => 'התקנה',
    51 => 'נדרש MySQL 3.23.2 או יותר חדש',
    52 => 'מצטערים, אך Geeklog דורש לפחות MySQL 3.23.2 כדי לרוץ (לכם יש גירסה ',
    53 => '). אנא <a href="http://dev.mysql.com/downloads/mysql/">שדרגו את גירסת ה-MySQL שלכם</a> או בקשו ממארחי השרת שלכם לעשות זאת בשבילכם.',
    54 => 'מידע מאגר המידע אינו נכון',
    55 => 'מצטערים, אך מידע מאגר המידע שציינתם נראה שגוי. אנא חיזרו ונסו שוב.',
    56 => 'החיבור למאגר המידע נכשל',
    57 => 'מצטערים, אך ההתקנה לא הצליחה למצוא את מאגר המידע שציינתם. מאגר המידע אינו קיים או ששגיתם באיות שמו. אנא חיזרו ונסו שוב.',
    58 => '. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    59 => 'הערה',
    60 => 'טבלאות InnoDB אינן נתמכות על ידי גירסת ה-MySQL שלכם. האם תרצו להמשיך את ההתקנה ללא תמיכה ב-InnoDB?',
    61 => 'חזרה',
    62 => 'המשך',
    63 => 'כבר מותקן מאגר מידע של Geeklog. ההתקנה לא תאפשר לכם להריץ התקנה חדשה על מאגר מידע Geeklog קיים. כדי להמשיך הנכם חייבים לעשות אחד מהדברים הבאים:',
    64 => 'מיחקו את הטבלאות ממאגר המידע הקיים. או פשוט מיחקו את מאגר המידע וצרו אותו צחדש. ליחצו על "נסיון חוזר" שלהלן.',
    65 => 'בצעו שידרוג למאגר מידע (לגירסת Geeklog חדשה) על ידי בחירת אופציית השידרוג שלהלן.',
    66 => 'נסיון חוזר',
    67 => 'שגיאה בהקמת מאגר המידע של Geeklog',
    68 => 'מאגר המידע אינו ריק. אנא מיחקו את כל הטבלאות במאגר המידע והתחילו מחדש.',
    69 => 'שידרוג Geeklog',
    70 => 'לפני שנתחיל חשוב שתגבו את מאגר המידע של Geeklog הנוכחי שלכם. ההתקנה תשנה את מאגר המידע של Geeklog כך שאם משהו ישתבש ותאולצו להתחיל מחדש את תהליך השידרוג, תצטרכו גיבוי של מאגר המידע המקורי. *ראו הוזהרתם!*',
    71 => 'אנא ודאו שבחרתם את הגירסה הנכונה של Geeklog שאותה תרצו לשדרג. ההתקנה משדרגת בשלבים לפי כל גרסה החל מהגירסה שבחרתם (כלומר תוכלו לשדרג ישירות מכל גירסה ישנה היישר אל ',
    72 => ').',
    73 => 'אנא שימו לב שההתקנה לא תשדרג שום גרסת בטה או גרסה מועמדת לשיחרור של Geeklog.',
    74 => 'מאגר המידע כבר מעודכן!',
    75 => 'נראה שמאגר המידע שלכם כבר מעודכן. כנראה שהרצתם כבר שדרוג. אם אתם צריכים להריץ את השידרוג מחדש, אנא התקינו מחדש את גיבוי מאגר המידע שלכם ונסו שוב.',
    76 => 'בחירת גרסת ה-Geeklog הנוכחית שלכם',
    77 => 'ההתקנה לא הצליחה לזהות את הגירסה הנוכחית שלכם של Geeklog, אנא ביחרו אותה מהרשימה שלהלן:',
    78 => 'תקלה בשידרוג',
    79 => 'חלה תקלה בזמן השידרוג של התקנת Geeklog שלכם.',
    80 => 'שינוי',
    81 => 'הפסיקו!',
    82 => 'חשוב מאוד שתשנו את הרשאות הקבצים הרשומים להלן. Geeklog לא יצליח לעבור התקנה עד שתעשו זאת.',
    83 => 'תקלה בהתקנה',
    84 => 'הנתיב ',
    85 => '" נראה שאינו נכון. אנא חיזרו ונסו שוב.',
    86 => 'שפה',
    87 => 'http://www.geeklog.net/forum/index.php?forum=1',
    88 => 'שינוי הספרייה והקבצים שבה ל',
    89 => 'גירסה נוכחית:',
    90 => 'מאגר מידע ריק?',
    91 => 'נראה שמאגר המידע שלכם ריק או שהגדרות ההזדהות שציינתם בשבילו אינן נכונות. או שאולי התכוונתם לבצע התקנה חדשה (ולא שידרוג)? אנא חיזרו ונסו שוב.',
    92 => 'שימוש ב-UTF-8',
    93 => 'הצלחה',
    94 => 'הנה כמה טיפים למצוא את הנתיב הנכון:',
    95 => 'הנתיב המלא לקובץ זה (סקריפט ההתקנה) הוא:',
    96 => 'ההתקנה חיפשה את %s ב:',
    97 => 'הגדרת הרשאות קבצים',
    98 => 'משתמשים מתקדמים',
    99 => 'אם יש לכם ממשק שורת פקודה (SSH) לשרת הרשת שלכם אז תוכלו פשוט להעתיק ולהדביק את הפקודה הבאה למעטפת הפקודה שלכם:',
    100 => 'סופק מצב לא נכון',
    101 => 'שלב',
    102 => 'הכניסו את מידע הכיוון',
    103 => 'וכיוון plugins נוספים',
    104 => 'נתיב בספריית ניהול לא נכון',
    105 => 'מצטערים, אבל נתיב ספריית הניהול שהכנסתם אינו נראה נכון. אנא חיזרו אחורה ונסו שנית.'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => 'ההתקנה הושלמה',
    1 => 'ההתקנה של Geeklog ',
    2 => ' הושלמה!',
    3 => 'כל הכבוד, הצלחתם ',
    4 => ' Geeklog. אנא קחו רגע כדי לקרוא את המידע המצוין להלן.',
    5 => 'כדי להזדהות באתר ה-Geeklog החדש שלכם, אנא השתמשו בחשבון זה:',
    6 => 'שם משתמש:',
    7 => 'Admin',
    8 => 'סיסמה:',
    9 => 'password',
    10 => 'אזהרת אבטחה',
    11 => 'אל תשכחו לבצע',
    12 => 'דברים',
    13 => 'להסיר או לשנות את שם ספריית ההתקנה,',
    14 => 'לשנות ל-',
    15 => 'את סיסמת החשבון.',
    16 => 'לשנות את ההרשאות של',
    17 => 'וגם של',
    18 => 'בחזרה ל:',
    19 => '<strong>שימו לב:</strong> עקב כך ששונה מודל האבטחה, יצרנו חשבון חדש עם ההרשאות שהנכם זקוקים להן כדי לנהל את אתרכם החדש.  שם המשתמש של חשבון חדש זה הוא <b>NewAdmin</b> והסיסמה היא <b>password</b>',
    20 => 'להתקין את',
    21 => 'לשדרג את',
    22 => 'נדדה'
);

// +---------------------------------------------------------------------------+
// migrate.php

$LANG_MIGRATE = array(
    0 => 'תהליך הנדידה ישכתב כל מידע קיים במאגר המידע.',
    1 => 'לפני שתמשיכו',
    2 => 'היו בטוחים שכל plugin שהותקן בעבר הועתק לשרתכם החדש.',
    3 => 'היו בטוחים שכל התמונות מ-<code dir="ltr">public_html/images/articles/</code>, <code dir="ltr">public_html/images/topics/</code>, ו-<code dir="ltr">public_html/images/userphotos/</code>, הועתקו לשרתכם החדש.',
    4 => 'אם הנכם משדרגים מגירסת Geeklog ישנה יותר מ-<strong>1.5.0</strong>, אז היו בטוחים שהעתקתם כל קבצי ה-<tt>config.php</tt> כדי שהנדידה תוכל למצוא את הגדרותיכם.',
    5 => 'אם הנכם משדרגים לגרסת Geeklog חדשה, אז אל תעלו את ה-theme שלכם עדיין. השתמשו ב-theme ברירת המחדל הכלול עד שתוכלו להיות בטוחים שאתרכם שנדד עובד כמו שצריך.',
    6 => 'ביחרו גיבוי קיים',
    7 => 'ביחרו קובץ...',
    8 => 'מספריית הגיבויים של שרתכם',
    9 => 'מהמחשב שלכם',
    10 => 'ביחרו קובץ...',
    11 => 'לא מצאו קבצי גיבוי.',
    12 => 'גבול ההעלאה לשרת זה הוא ',
    13 => '. אם קובץ הגיבוי שלכם גדול מ ',
    14 => ' או אם נתקלתם בהודעת זמן אזל, אז עליכם להעלות את הקובץ לספריית הגיבויים של Geeklog דרך FTP.',
    15 => 'ספריית הגיבויים שלכם אינה ניתנת לכתיבה על ידי שרת הרשת. ההרשאות צריכות להיות 777.',
    16 => 'נדידה',
    17 => 'נדידה מתוך גיבוי',
    18 => 'לא נבחר קובץ גיבוי',
    19 => 'השמירה נכשלה ',
    20 => ' אל ',
    21 => 'הקובץ',
    22 => 'כבר קיים. האם תרצו להחליפו?',
    23 => 'כן',
    24 => 'לא',
    25 => 'גרסת ה-Geeklog שבחרתם שתהיה נדידה ממנה היא ישנה מדי.',
    26 => 'הערת נדידה: ',
    27 => 'ה-"',
    28 => '" plugin חסר ונוטרל. תוכלו להתקינו ולהפעילו מחדש בכל זמן מאיזור הניהול.',
    29 => 'התמונה "',
    30 => '" שרשומה בטבלה"',
    31 => '" לא נמצאה בתוך ',
    32 => 'קובץ מאגר המידע הכיל מידע מ-plugin אחד או יותר שסקריפט הנדידה לא הצליח למצוא בספרייה ',
    33 => 'שלכם. ה-plugins נוטרלו. תוכלו להתקינם ולהפעילם מחדש בכל זמן מאיזור הניהול.',
    34 => 'קובץ מאגר המידע הכיל מידע מקובץ אחד או יותר שסקריפט הנדידה לא הצליח למצוא בספרייה',
    35 => 'שלכם. בדיקו את <code>error.log</code> לפרטים נוספים.',
    36 => 'תוכלו לתקן זאת בכל זמן.',
    37 => 'הנדידה הושלמה',
    38 => 'תהליך הנדידה הושלם. עם זאת, סקריפט ההתקנה מצא את הדברים הבאים:',
    39 => 'נכשלה הגדרת נתיב PEAR include. מצטערים, אין דרך לטפל בגיבויי מאגר מידע מכווצים בלי PEAR.',
    40 => "הארכיון '%s' לא נראה שמכיל קבצי SQL.",
    41 => 'שגיאה בהוצאת גיבוי מאגר המידע \'%s\' מתוך קובץ הגיבוי המכווץ.',
    42 => 'קובץ הגיבוי \'%s\' פשוט נעלם ...',
    43 => 'היבוא בוטל. הקובץ  \'%s\' לא נראה כמו SQL dump.',
    44 => 'שגיאה חמורה: יבוא מאגר המידע נראה שנכשל. לא ברור איך להמשיך.',
    45 => 'לא היה אפשר לזהות את גרסת מאגר המידע. אנא בצעו עדכון ידני.',
    46 => '',
    47 => 'שדרוג מאגר המידע מגירסה %s לגירסה %s נכשל.',
    48 => 'אחד או יותר מה-plugins לא הצליח להתעדכן והיה אילוץ לנטרלו.',
    49 => 'Use current database content'
);

// +---------------------------------------------------------------------------+
// install-plugins.php

$LANG_PLUGINS = array(
    1 => 'התקנת Plugin',
    2 => 'שלב',
    3 => 'ה-plugins של Geeklpg הם תוספות המאפשרות שימושיות חדשה ומניפות את השירותים הפנימיים של Geeklog. כברירת מחדל, Geeklog כולל כמה plugins שימושיים שאולי תרצו להתקין.',
    4 => 'תוכלו גם לבחור להעלות plugins נוספים.',
    5 => 'הקובץ שהעלתם אינו קובץ ZIP או GZip מכווץ.',
    6 => 'ה-plugin שהעלתם כבר קיים!',
    7 => 'הצלחה!',
    8 => 'ה-plugin %s הועלה בהצלחה.',
    9 => 'העלאת plugin',
    10 => 'בחירת קובץ plugin',
    11 => 'העלאה',
    12 => 'ביחרו אילו plugins להתקין',
    13 => 'להתקין?',
    14 => 'Plugin',
    15 => 'גירסה',
    16 => 'לא ידוע',
    17 => 'הערה',
    18 => 'plugin זה דורש הפעלה ידנית מפאנל הניהול של ה-plugins.',
    19 => 'רענון',
    20 => 'אין plugins חדשים להתקנה.'
);

// +---------------------------------------------------------------------------+
// bigdump.php

$LANG_BIGDUMP = array(
    0 => 'התחלת יבוא',
    1 => ' מ ',
    2 => ' אל ',
    3 => ' ב ',
    4 => 'לא יכול לחפש ב ',
    5 => 'לא יכול להיפתח ',
    6 => ' ליבוא.',
    7 => '*לא צפוי*: ערכים לא מספריים להתחלה ולאוף-סט.',
    8 => 'מעבד את הקובץ:',
    9 => 'לא יכול להגדיר סמן קובץ אחרי סוף הקובץ.',
    10 => 'לא יכול לקבוע את סמן הקובץ לאופ-סט: ',
    11 => 'נעצר בשורה ',
    12 => '. במקום זה המשוב הנוכחי הוא מקובץ csv, אבל ',
    13 => ' לא כוון.',
    14 => 'נעצר בשורה ',
    15 => '. במקום זה המשוב הנוכחי כולל יותר מאשר ',
    16 => ' שורות dump. זה יכול לקרות אם קובץ ה-dump שלכם נוצר על ידי כלי שלא שם נקודה פסיק ואז עובר שורה בסוף של כל משוב, או שה-dump שלכם כולל הכנסות מורחבות. אנא קיראו את השאלות השכיחות של BigDump למידע נוסף.',
    17 => 'שגיאה בשורה ',
    18 => 'משוב: ',
    19 => 'MySQL: ',
    20 => 'לא מצליח לקרוא את האופ-סט של סמן הקובץ.',
    21 => 'לא אפשרי לקבצי gzip',
    22 => 'התקדמות',
    23 => 'נדידת מאגר המידע הושלמה בהצלחה! אתם תופנו בעוד רגע.',
    24 => 'מחכה ',
    25 => ' מילישניות</b> לפני המשך למהלך הבא...',
    26 => 'ליחצו כאן',
    27 => 'לביטול היבוא',
    28 => 'או חכו!',
    29 => 'התרחשה שגיאה.',
    30 => 'מתחיל מההתחלה',
    31 => '(DROP את הטבלאות הישנות לפני התחלה מחדש)'
);

// +---------------------------------------------------------------------------+
// Error Messages

$LANG_ERROR = array(
    0 => 'הקובץ שהועלה עובר את הוראת ה-upload_max_filesize ב-php.ini. אנא העלו את קובץ הגיבוי בשיטה אחרת, למשל FTP.',
    1 => 'הקובץ שהועלה עובר את הוראת MAX_FILE_SIZE שצוינה בטופס ה-HTML. אנא העלו את קובץ הגיבוי בשיטה אחרת, למשל FTP.',
    2 => 'הקובץ שהועלה הועלה רק באופן חלקי.',
    3 => 'שום קובץ לא הועלה.',
    4 => 'חסרה ספרייה זמנית.',
    5 => 'נכשלה כתיבת הקובץ לכונן.',
    6 => 'העלאת הקובץ נעצרה לפי הסיומת.',
    7 => 'הקובץ שהועלה עובר את הוראת post_max_size ב-php.ini. אנא העלו את קובץ מאגר המידע שלכם בשיטה אחרת, למשל FTP.',
    8 => 'שגיאה',
    9 => 'כשל בחיבור למאגר המידע שלכם עם השגיאה: ',
    10 => 'בידקו את הגדרות מאגר המידע שלכם'
);

// +---------------------------------------------------------------------------+
// help.php

$LANG_HELP = array(
    0 => 'תמיכה בהתקנת Geeklog',
    'site_name' => 'שם האתר שלכם.',
    'site_slogan' => 'תיאור פשוט של האתר שלכם.',
    'db_type' => 'Geeklog יכול להיות מותקן בעזרת שימוש ב-MySQL או Microsoft SQL database. אם אינכם בטוחים איזו אופצייה לבחור עליכם ליצור קשר עם מארחי השרת שלכם.</p><p class="indent"><strong>שימו לב:</strong> טבלאות InnoDB עשויות לשפר את הביצועים באתרים (מאוד) גדולים, אך גם להפוך את גיבויי מאגר המידע ליותר מסובכים.',
    'db_host' => 'שם הרשת (או כתובת ה-IP) של שרת מאגר המידע שלכם. בדרך כלל זהו "localhost". אם אינכם בטוחים צרו קשר אם מארחי השרת שלכם.',
    'db_name' => 'שם מאגר המידע שלכם. אם אינכם בטוחים מהו צרו קשר עם מארחי השרת שלכם.',
    'db_user' => 'שם המשתמש של מאגר המידע שלכם. אם אינכם בטוחים מהו צרו קשר עם מארחי השרת שלכם.',
    'db_pass' => 'סיסמת מאגר המידע שלכם. אם אינכם בטוחים מהי צרו קשר עם מארחי השרת שלכם.',
    'db_prefix' => 'חלק מהמשתמשים מעוניינים להתקין העתקים מרובים של Geeklog על אותו מאגר מידע. כדי שכל עותק של Geeklog יוכל לתפקד כמו שצריך הוא חייב שתהיה לו תחילית טבלה ייחודית (כלומר gl1_, gl2_, וכדומה).',
    'site_url' => 'ודאו שזוהי הכתובת הנכונה של האתר שלכם. כלומר, איפה שהקובץ של Geeklog בשם <code>index.php</code> נמצא (ללא לוכסן בסוף).',
    'site_admin_url' => 'לחלק ממארחי השרתים יש ספריית ניהול מוגדרת מראש. במקרה זה, תצטרכו לשנות את שם ספריית ה-admin של Geeklog למשהו כמו "myadmin" ולשנות את הכתובת שלהלן בהתאם. אל תעשו זאת אלא אם תיתקלו בבעיות כשתנסו לגשת לתפריט הניהול של Geeklog.',
    'site_mail' => 'זוהי הכתובת החוזרת בכל הודעות האימייל שישלחו מ-Geeklog ובמידע צרו קשר שמוצג בהזנות סינדיקציה.',
    'noreply_mail' => 'זוהי כתובת השולח של הודעות אימייל שנשלחות על ידי המערכת כשמשתמשים נרשמים וכדומה. היא צריכה להיות זהה לכתובת האימייל של האתר או להיות כתובת שלא מקבלת הודעות כדי למנוע מספאמרים להשיג את כתובת האימייל שלכם על ידי הרשמה לאתר. אם היא לא זהה לכתובת הרגילה, תהיה הודעה בהודעות שישלחו שלא מומלץ לענות להן.',
    'utf8' => 'ציינו האם להשתמש ב-UTF-8 בתור קידוד ברירת המחדל של האתר שלכם. מומלץ בעיקר להתקנות רב לשוניות.',
    'migrate_file' => 'ביחרו את קובץ הגיבוי שברצונכם שינדוד. הוא יכול להיות קובץ קיים בספריית "backups" שלכם או שתוכלו להעלות קובץ מהמחשב שלכם.',
    'plugin_upload' => 'ביחרו ארכיון plugin (בצורת zip, tar.gz או tgz) בשביל להעלות ולהתקין.'
);

// which texts to use as labels, so they don't have to be translated again
$LANG_LABEL = array(
    'site_name'      => $LANG_INSTALL[32],
    'site_slogan'    => $LANG_INSTALL[33],
    'db_type'        => $LANG_INSTALL[34],
    'db_host'        => $LANG_INSTALL[39],
    'db_name'        => $LANG_INSTALL[40],
    'db_user'        => $LANG_INSTALL[41],
    'db_pass'        => $LANG_INSTALL[42],
    'db_prefix'      => $LANG_INSTALL[43],
    'site_url'       => $LANG_INSTALL[45],
    'site_admin_url' => $LANG_INSTALL[47],
    'site_mail'      => $LANG_INSTALL[48],
    'noreply_mail'   => $LANG_INSTALL[49],
    'utf8'           => $LANG_INSTALL[92],
    'migrate_file'   => $LANG_MIGRATE[6],
    'plugin_upload'  => $LANG_PLUGINS[10]
);

?>
