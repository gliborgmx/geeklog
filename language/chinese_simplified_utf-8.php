<?php

###############################################################################
# chinese_simplified_utf-8.php
#
# Last Modified: 2004-10-26
# Version: 1.3.10
#
# This is the Chinese Simplified (UTF-8) language set for GeekLog 1.3.10
#
# Copyright (C) 2003 Samuel M. Stone
# sam@stonemicro.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

$LANG_CHARSET = 'UTF-8';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

$LANG01 = array(
    1 => '作者︰',
    2 => '读整文',
    3 => '个评论',
    4 => '编辑',
    5 => '投票',
    6 => '结果',
    7 => '投票结果',
    8 => '投票',
    9 => '管理者功能︰',
    10 => '提交物',
    11 => '文章',
    12 => '组件',
    13 => '主题',
    14 => '连结',
    15 => '事件',
    16 => '投票',
    17 => '用户',
    18 => 'SQL 质问',
    19 => '退出',
    20 => '用户讯息︰',
    21 => '用户名',
    22 => '用户识别号',
    23 => '安全等级',
    24 => '匿名',
    25 => '回复',
    26 => '以下评论只属张贴者个人观点。',
    27 => '最近发表的',
    28 => '删除',
    29 => '没有评论。',
    30 => '旧的文章',
    31 => '允许的 HTML 标记:',
    32 => '错误，无效的用户名',
    33 => '错误，不能写系统日志;',
    34 => '错误',
    35 => '退出',
    36 => '于',
    37 => '没有文章',
    38 => '内容辛迪加',
    39 => '使新',
    40 => '你的服务器的 <tt>php.ini</tt> 里设定为 <tt>register_globals = Off</tt>. 可是此软件需要将 <tt>register_globals</tt> 设定成 <strong>on</strong>. 所以在你继续以前，必须将它设定为<strong>on</strong>，然后重新开机.',
    41 => '客人',
    42 => '作者:',
    43 => '回复这个',
    44 => '父母',
    45 => 'MySQL 错误号码',
    46 => 'MySQL 错误讯息',
    47 => '用户功能',
    48 => '帐户讯息',
    49 => '风格选择',
    50 => '错误的 SQL statement',
    51 => '帮助',
    52 => '新',
    53 => '管理者首页',
    54 => '不能打开文件。',
    55 => '错处',
    56 => '投票',
    57 => '密码',
    58 => '登入',
    59 => "没有帐户？<a href=\"{$_CONF['site_url']}/users.php?mode=new\">在此登记</a>",
    60 => '发表评论',
    61 => '新增帐户',
    62 => '字',
    63 => '评论设定',
    64 => '把文章电邮给朋友',
    65 => '观看可列印的版本',
    66 => '我的日历',
    67 => '欢迎来到',
    68 => '首页',
    69 => '联络',
    70 => '搜寻',
    71 => '投稿',
    72 => '网路资源',
    73 => '投票中心',
    74 => '日历',
    75 => '进阶搜索',
    76 => '本站统计数据',
    77 => '插件',
    78 => '即将发生的事',
    79 => '新鲜的东西',
    80 => '个新文章(',
    81 => '新的文章(',
    82 => ' 小时内)',
    83 => '评论',
    84 => '连结',
    85 => '最近四十八小时',
    86 => '没有新的评论',
    87 => '最近两个星期',
    88 => '没有新的连结',
    89 => '没有事发生',
    90 => '首页',
    91 => '载入这页用了',
    92 => '秒',
    93 => '版权',
    94 => '此网站所有的商标和版权属于他们各自的所有者.',
    95 => '动力于',
    96 => '小组',
    97 => '字词单',
    98 => '插件',
    99 => '文章',
    100 => '没有新的文章',
    101 => '你的事件',
    102 => '本站的事件',
    103 => '资料库备份',
    104 => '由',
    105 => '寄给用户',
    106 => '观看',
    107 => 'GL 版本测试',
    108 => '清除缓冲贮存区',
    109 => '报告滥用',
    110 => '报告此滥登文给网站管理员',
    111 => '看PDF 版本',
    112 => '登记用户',
    113 => '使用说明',
    114 => 'TRACKBACKS',
    115 => 'No new trackback comments',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Please continue reading on the next page:',
    119 => "Lost your <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">password</a>?",
    120 => 'Permanent link to this comment',
    121 => 'Comments (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'All HTML is allowed'
);

###############################################################################
# calendar.php

$LANG02 = array(
    1 => '事件日历',
    2 => '抱歉，没有事件。',
    3 => '时',
    4 => '地',
    5 => '事',
    6 => '新增事件',
    7 => '即将发生的事',
    8 => '在将这事加进你的日历之後，你可点击 "我的日历" 来观看',
    9 => '加进我的日历',
    10 => '从我的日历中去除',
    11 => "把这事加进 {$_USER['username']} 的日历",
    12 => '事件',
    13 => '开始',
    14 => '结束',
    15 => '回到日历'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => '发表评论',
    2 => '发表方式',
    3 => '退出',
    4 => '新增帐户',
    5 => '用户名',
    6 => '本站需要登入才可发表评论，请登入。如果你没有帐户，请使用下面的表格登记。',
    7 => '你最後发表的评论是在 ',
    8 => " 秒之前。本站限定至少 {$_CONF['commentspeedlimit']} 秒後才可再发表评论",
    9 => '评论',
    10 => '送出报告',
    11 => '发表评论',
    12 => '请填写标题注评论栏',
    13 => '供你参考',
    14 => '预览',
    15 => '报告这篇滥登文',
    16 => '标题',
    17 => '错误',
    18 => '重要的东西',
    19 => '请尽量不要离题。',
    20 => '尽可能回复别人的评论，而不是开新的评论。',
    21 => '为避免重复，发表评论之前请先读别人所写的。',
    22 => '请尽量用简洁的标题。',
    23 => '我们不会公开你的电邮地址。',
    24 => '匿名用户',
    25 => '你肯定想要报告此滥登文给网站管理员否?',
    26 => '%s 报告以下滥登的评论:',
    27 => '滥用报告'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => '用户概况',
    2 => '用户名',
    3 => '全名',
    4 => '密码',
    5 => '电子邮件',
    6 => '首页',
    7 => '小传',
    8 => 'PGP 钥匙',
    9 => '保存设定',
    10 => '给用户的最後十个评论',
    11 => '没有评论',
    12 => '用户设定',
    13 => '每夜电邮文摘',
    14 => '这是个随机的密码，请尽快更改。要更改密码请先登入系统，然後点击帐户讯息。',
    15 => "你在 {$_CONF['site_name']} 的帐户已建立了。请使用以下讯息登入系统并保留这邮件作日後参考。",
    16 => '你的帐户讯息',
    17 => '帐户并不存在',
    18 => '你提供的不是一个有效的的电邮',
    19 => '用户名或电邮已经存在',
    20 => '提供的不是一个有效的的电邮',
    21 => '错误',
    22 => "登记用 {$_CONF['site_name']} ！",
    23 => "在 {$_CONF['site_name']} 登记的用户可享有的会员好处。他们可以用自己的名字发表评论和存取本站的资源。请注意本站<b><i>绝不会</i></b>公开用户的电邮。",
    24 => '你的密码将被送到你输入的电邮信箱',
    25 => '忘记了你的密码吗？',
    26 => '请你输入的用户名和点击电邮密码，我们会发送一个新的密码到你的电邮信箱。',
    27 => '现在就登记！',
    28 => '电邮密码',
    29 => '退出时',
    30 => '登入时',
    31 => '需要登入才可用',
    32 => '署名',
    33 => '绝不会公开',
    34 => '这是你的真名',
    35 => '要改变请输入密码',
    36 => '开始是 http://',
    37 => '将会附加在你发表的评论上',
    38 => '你的简介',
    39 => '你的公共 PGP 钥匙',
    40 => '没有主题图示',
    41 => '愿意主持',
    42 => '日期格式',
    43 => '文章限度',
    44 => '没有组件',
    45 => '显示设定',
    46 => '不包括的',
    47 => '新组件配置为',
    48 => '主题',
    49 => '文章里没有图像',
    50 => '不要打钩如果你不感兴趣',
    51 => '只是新文章',
    52 => '预设值是',
    53 => '每晚接收当日的文章',
    54 => '打钩如果你不看这些主题或作者。',
    55 => '如果你没有选择，这意味你要用预设的组件。如果你选择组件，所有预设的箱将被忽略。预设的东西会用粗笔画显示。',
    56 => '作者',
    57 => '显示方式',
    58 => '排序方式',
    59 => '评论限制(个)',
    60 => '可显示你的评论吗？',
    61 => '最新或最旧的先？',
    62 => '预设是100',
    63 => '密码已被发送，你会很快收到的。',
    64 => '评论设定',
    65 => '请尝试再登入',
    66 => "你可能打错了，请尝试再登入。你是否<a href=\"{$_CONF['site_url']}/users.php?mode=new\">新用户</a>？",
    67 => '成员自',
    68 => '记住我为',
    69 => '在登入以後，我们应该记住你多久？',
    70 => "定做 {$_CONF['site_name']} 的布局和内容",
    71 => "一个 {$_CONF['site_name']} 的主要特点是你可以定做自己的布局和内容，但是你必须是本站的会员。<a href=\"{$_CONF['site_url']}/users.php?mode=new\">在此登记</a>。如果你已经是登记，请使用左边的区域登入。",
    72 => '题材',
    73 => '语言',
    74 => '改变本站外表',
    75 => '主题已电邮给',
    76 => '请只选择你感兴趣的主题，因为所有当日新张贴的文章将会电邮到你的信箱。',
    77 => '相片',
    78 => '你自己的图片',
    79 => '要删除图片，在这里打钩',
    80 => '登入',
    81 => '发送电子邮件',
    82 => '用户最近发表的十个文章为',
    83 => '用户发表统计',
    84 => '文章总数︰',
    85 => '评论总数︰',
    86 => '寻找所有发表过的文章︰',
    87 => '你的登入名',
    88 => "有人(也许是你)要了新密码 \"%s\" 于 {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\n若你真的要这样作, 请你点击以下联结:\n\n",
    89 => "你若不想要这样作, 请忽视这信息。这项事就将会被抛弃，而你的密码就保持原有.\n\n",
    90 => '你可在下面输入一个新的密码。请注意你的旧密码任然有效直到你将此表提交。',
    91 => '设定新密码',
    92 => '输入新密码',
    93 => '你在 %d 秒钟前刚要了一个新密码. 此站规定最少要 %d 秒钟以后才可再次要求新密码。',
    94 => '将用户 \'%s\' 删除',
    95 => '单据下面的 \'删除用户\' 便将你在我们资料库里的用户。请注意，你以其用户所登载过的文章和评论不会删除，可是会以无名作者的身份显示。',
    96 => '删除用户',
    97 => '确定用户删除',
    98 => '你肯定要删除你的用户吗? 其后你就不在能使用此站,除非你重新设定新用户. 若你肯定的话请再次单据下面的 “删除用户”.',
    99 => '隐私选项于',
    100 => '管理员来信',
    101 => '准许管理员来信',
    102 => '用户来信',
    103 => '准许其他用户来信',
    104 => '显示联机状况',
    105 => '让在“谁在联机”组件里显示',
    106 => '位置',
    107 => '显示在你的公开简介',
    108 => 'Confirm new password',
    109 => 'Enter the New password again here',
    110 => 'Current Password',
    111 => 'Please enter your Current password',
    112 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    113 => 'Login Attempt Failed',
    114 => 'Account Disabled',
    115 => 'Your account has been disabled, you may not login. Please contact an Administrator.',
    116 => 'Account Awaiting Activation',
    117 => 'Your account is currently awaiting activation by an administrator. You will not be able to login until your account has been approved.',
    118 => "Your {$_CONF['site_name']} account has now been activated by an administrator. You may now login to the site at the url below using your username (<username>) and password as previously emailed to you.",
    119 => 'If you have forgotten your password, you may request a new one at this url:',
    120 => 'Account Activated',
    121 => 'Service',
    122 => 'Sorry, new user registration is disabled',
    123 => "Are you a <a href=\"{$_CONF['site_url']}/users.php?mode=new\">new user</a>?"
);

###############################################################################
# index.php

$LANG05 = array(
    1 => '没有新闻可显示',
    2 => '没有新文章可显示。',
    3 => '这也许是真的没有新主题或是你的 %s 设定得太过限制性。',
    4 => '今天头条',
    5 => '下页',
    6 => '上页',
    7 => '第一',
    8 => '最终'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => '发送电子邮件时发生错误。请再尝试。',
    2 => '电邮已送出。',
    3 => '请确定你在回复栏有一个可用的电子邮件地址。',
    4 => '请填写你的名字、回复栏、主题和内容',
    5 => '错误：没有这用户。',
    6 => '发生错误。',
    7 => '用户资料',
    8 => '用户名',
    9 => '用户名的 URL',
    10 => '发送邮件到',
    11 => '你的名字：',
    12 => '回复到：',
    13 => '主题：',
    14 => '内容：',
    15 => 'HTML 不会被翻译。',
    16 => '发送邮件',
    17 => '把文章电邮给朋友',
    18 => '收件人名字',
    19 => '收件人电邮',
    20 => '寄件人名字',
    21 => '寄件人电邮',
    22 => '所有栏都要填写',
    23 => "这电子邮件是由 %s (%s) 寄给你的，他认为你也许对这篇在 {$_CONF['site_url']} 的文章感兴趣。这不是垃圾邮件(SPAM)，你的电邮地址也不会被纪录。",
    24 => '关於这个文章的评论在',
    25 => '为帮助我们防止系统被滥用，你必须登入。',
    26 => '这个表格允许你送电子邮件到你选择的用户中。请填写所有的栏位。',
    27 => '短信',
    28 => '%s 写道：',
    29 => "来自於 {$_CONF['site_name']} 的每日文摘，给予：",
    30 => ' 每日的时事通讯，给予：',
    31 => '标题',
    32 => '日期',
    33 => '完整的文章在：',
    34 => '电邮结束',
    35 => '对不起，此用户不愿意收电信.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => '进阶搜寻',
    2 => '关键词',
    3 => '主题',
    4 => '所有',
    5 => '类型',
    6 => '文章',
    7 => '评论',
    8 => '作者',
    9 => '所有',
    10 => '搜寻',
    11 => '搜寻结果',
    12 => '相配',
    13 => '搜寻结果：没有相配的',
    14 => '没有你寻找的东西︰',
    15 => '请再尝试',
    16 => '主题',
    17 => '日期',
    18 => '作者',
    19 => "搜寻整个 {$_CONF['site_name']} 的新旧文章资料库",
    20 => '日期',
    21 => '到',
    22 => '(日期格式 年-月-日 YYYY-MM-DD)',
    23 => '采样数',
    24 => '找到',
    25 => '个相配在',
    26 => '个项目中，共用了',
    27 => '秒',
    28 => '没有你所寻找的文章或评论',
    29 => '文章和评论的结果',
    30 => '没有你所寻找的连结',
    31 => '没有你所寻找的插件',
    32 => '事件',
    33 => 'URL',
    34 => '地点',
    35 => '所有日子',
    36 => '没有你所寻找的事件',
    37 => '事件的结果',
    38 => '连结的结果',
    39 => '连结',
    40 => '事件',
    41 => '搜寻的关键词最少要有三个字。',
    42 => '请使用 YYYY-MM-DD (年-月-日) 日期格式。',
    43 => '整个短语',
    44 => '所有字词',
    45 => '其中任何字词',
    46 => '以下',
    47 => '以上',
    48 => '作者',
    49 => '日期',
    50 => '采样数',
    51 => '联结',
    52 => '位置',
    53 => '文章结果',
    54 => '评论结果',
    55 => '句子',
    56 => '和',
    57 => '或',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => '本站统计数据',
    2 => '系统点击总数',
    3 => '文章(评论)总数',
    4 => '投票(获得投票)总数',
    5 => '连结(点击)总数',
    6 => '事件总数',
    7 => '最多观看的十个文章',
    8 => '文章标题',
    9 => '观看',
    10 => '看来本站没有文章或是没人观看过本站的文章。',
    11 => '最多评论的十个文章',
    12 => '评论',
    13 => '看来本站没有文章或是没人评论过本站的文章。',
    14 => '最多人投票的十个选举',
    15 => '投票标题',
    16 => '投票',
    17 => '看来本站没有投票或是没人投过票。',
    18 => '最多人点击的十个连结',
    19 => '连结',
    20 => '点击',
    21 => '看来本站没有连结或是没人点击过本站的连结。',
    22 => '最多人寄出的十个文章',
    23 => '电邮',
    24 => '看来没人寄出过本站的文章',
    25 => 'Top Ten Trackback Commented Stories',
    26 => 'No trackback comments found.',
    27 => 'Number of active users',
    28 => 'Top Ten Events',
    29 => 'Event',
    30 => 'Hits',
    31 => 'It appears that there are no events on this site or no one has ever clicked on one.'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => '有什麽是相关的',
    2 => '寄文章给朋友',
    3 => '可印的文章格式',
    4 => '文章选项',
    5 => 'PDF 文章版本'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => '你需要登入才可发表 %s ',
    2 => '登入',
    3 => '新用户',
    4 => '发表一件事',
    5 => '发表一个连结',
    6 => '发表一个文章',
    7 => '你需要登入',
    8 => '发表',
    9 => '在本站发表东西时请跟随以下建议...<ul><li>填写所有的栏<li>提供完全和准确的讯息<li>再三检查那些 URLs</ul>',
    10 => '标题',
    11 => '连结',
    12 => '开始日期',
    13 => '结束日期',
    14 => '地点',
    15 => '描述',
    16 => '如果是其他，请指定',
    17 => '类别',
    18 => '其他',
    19 => '读这先',
    20 => '错误：缺少类别',
    21 => '当选择"其他"请提供一个类别名',
    22 => '错误：缺少栏位',
    23 => '请填写所有的栏位',
    24 => '你发表的已被保存了',
    25 => '你的 %s 已被保存了',
    26 => '限速',
    27 => '用户名',
    28 => '主题',
    29 => '文章',
    30 => '你最後发表的是',
    31 => " 秒之前。本站限定至少 {$_CONF['speedlimit']} 秒後才可再发表",
    32 => '预览',
    33 => '文章 预览',
    34 => '退出',
    35 => '不准许 HTML 标记',
    36 => '发表模式',
    37 => "加事件到 {$_CONF['site_name']} 会将你的事件加到主日历中，其他的用户可随意地把它加进自己的个人日历。请<b>不要</b>把你的个人事件譬如生日和周年纪念加进去。<br><br>只要管理员批准你的事件它将出现在主日历上。",
    38 => '加事件到',
    39 => '主日历',
    40 => '个人日历',
    41 => '结束时间',
    42 => '开始时间',
    43 => '整日的事件',
    44 => '地址 1',
    45 => '地址 2',
    46 => '城市/市镇',
    47 => '州',
    48 => '邮政编码',
    49 => '事件类型',
    50 => '编辑事件类型',
    51 => '地点',
    52 => '删除',
    53 => '新加帐户'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => '要求认证',
    2 => '拒绝！不正确的登入资料',
    3 => '无效的密码',
    4 => '用户名：',
    5 => '密码：',
    6 => '这页只供授权人员使用。<br>所有存取将被记录和检查。',
    7 => '登入'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => '权力不足',
    2 => '你没有权去编辑这个组件。',
    3 => '组件编辑器',
    4 => '读取此文流时发现错误，请在你的错误记录档案 error.log 里看细节.',
    5 => '组件标题',
    6 => '主题',
    7 => '所有',
    8 => '组件安全水平',
    9 => '组件次序',
    10 => '组件类型',
    11 => '入口组件',
    12 => '正常组件',
    13 => '入口组件选项',
    14 => '文流 RDF 的 URL',
    15 => '最後的文流 RDF 更新',
    16 => '正常组件选项',
    17 => '组件内容',
    18 => '请填写组件的标题和内容。',
    19 => '组件管理员',
    20 => '组件标题',
    21 => '组件安全水平',
    22 => '组件类型',
    23 => '组件次序',
    24 => '组件主题',
    25 => '点击下面的组件可修改或删除它，点击上面的新组件可创造一个新的。',
    26 => '版面组件',
    27 => 'PHP 组件',
    28 => 'PHP 组件选项',
    29 => '组件函数',
    30 => '如果你想用自己的 PHP 函数组件，请在上面输入函数的名字。为防止执行任性的编码，PHP 组件函数名必须以 "phpblock_" 作开始 (e.g. phpblock_getweather)。请不要把空的圆括号 "()" 放在函数後。最後，建议你把所有的 PHP 组件放在 /path/to/geeklog/system/lib-custom.php 里以方便系统升级。',
    31 => 'PHP 组件错误︰函数 %s 并不存在。',
    32 => '错误︰缺少栏位。',
    33 => '在入口组件你必须把 URL 输入到 .rdf 档案',
    34 => '在 PHP 组件你必须输入主题和函数',
    35 => '在正常组件你必须输入主题和内容',
    36 => '在版面组件你必须输入内容',
    37 => '不适当的 PHP 组件函数名',
    38 => '为防止执行任性的编码，PHP 组件函数名必须以 "phpblock_" 作开始 (e.g. phpblock_getweather)。',
    39 => '放在那边',
    40 => '左',
    41 => '右',
    42 => '在本系统的预设组件你必须输入组件标题和次序',
    43 => '只可是首页',
    44 => '存取被拒绝',
    45 => "企图存取不允许的组件已被记录。请<a href=\"{$_CONF['site_admin_url']}/block.php\">反回组件管理员昼面</a>。",
    46 => '新组件',
    47 => '管理员首页',
    48 => '组件名',
    49 => ' (不可有空隔和必须是唯一的)',
    50 => '求助文件的 URL',
    51 => '包括 http://',
    52 => '如果这里留白，组件的求助文件图示将不被显示',
    53 => '使有效',
    54 => '保存',
    55 => '取消',
    56 => '删除',
    57 => '下移组件',
    58 => '上移组件',
    59 => '移组件到右边',
    60 => '移组件到左边',
    61 => 'No Title',
    62 => 'Article Limit',
    63 => 'Bad Block Title',
    64 => 'Your Title must not be empty and cannot contain HTML!',
    65 => 'Order'
);

###############################################################################
# admin/event.php

$LANG22 = array(
    1 => '事件编辑器',
    2 => 'Error',
    3 => '事件标题',
    4 => '事件 URL',
    5 => '事件开始日期',
    6 => '事件结束日期',
    7 => '事件地点',
    8 => '事件描述',
    9 => '(包括 http://)',
    10 => '你必须提供日期时间、事件主题、与事件描述！',
    11 => '事件管理员',
    12 => '点击下面的事件可修改或删除它，点击上面的新事件可创造一个新的。',
    13 => '事件标题',
    14 => '开始日期',
    15 => '结束日期',
    16 => '存取被拒绝',
    17 => "企图存取不允许的事件已被记录。请<a href=\"{$_CONF['site_admin_url']}/event.php\">反回事件管理员昼面</a>。",
    18 => '新事件',
    19 => '管理员首页',
    20 => '保存',
    21 => '取消',
    22 => '删除',
    23 => '错误的开始日期.',
    24 => '错误的结束日期.',
    25 => '结束日期在开始日期前.'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => '上篇文章',
    2 => '下篇文章',
    3 => '模式',
    4 => '发表模式',
    5 => '文章编辑器',
    6 => '没有文章',
    7 => '作者',
    8 => '保存',
    9 => '预览',
    10 => '取消',
    11 => '删除',
    12 => 'ID',
    13 => '标题',
    14 => '主题',
    15 => '日期',
    16 => '文章简介',
    17 => '文章内容',
    18 => '点击次数',
    19 => '评论',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => '文章清单',
    23 => '点击下面的文章编号可修改或删除它，点击下面的文章标题可观看它，点击上面的新文章可创造一个新的。',
    24 => '你选的用户名以有人在用。请用另一个用户名。',
    25 => 'Error when saving story',
    26 => '文章预览',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => '上载错误',
    31 => '你需要提供作者、标题和文章简介！',
    32 => '头条的',
    33 => '只可有一个头条文章',
    34 => '草稿',
    35 => '是',
    36 => '否',
    37 => '更多来自於',
    38 => '更多发表於',
    39 => '电邮',
    40 => '存取被拒绝',
    41 => "企图存取不允许的文章已被记录。你可以以唯读模式观看下面文章。看完後请<a href=\"{$_CONF['site_admin_url']}/story.php\">反回文章管理员昼面</a>。",
    42 => "企图存取不允许的文章已被记录。请<a href=\"{$_CONF['site_admin_url']}/story.php\">反回文章管理员昼面</a>。",
    43 => '新文章',
    44 => '管理员首页',
    45 => '存取权',
    46 => '<b>注意︰</b>如果你把日期改成将来，在那个日期前这篇文章将不会被发表。并且 意味着这篇文章不会包括在你的 RDF 标题内，在搜寻和统计页中会被忽略。',
    47 => '图像',
    48 => '图像',
    49 => '右',
    50 => '左',
    51 => '请用特别格式的文字([imageX]、[imageX_right] 或 [imageX_left])来插入图像， X 是你附加图像的编号。注意︰你只可使用你附加的图像否则你将无法保存你的文章。<BR><P><B>预览</B>︰最佳预览文章的方法是把文章保存成草稿而不是直击预览按钮。只有没有附加图像时才用预览按钮。',
    52 => '删除',
    53 => '没有被使用。保存前，你必须把这个图像包含在文章简介或文章内容中。',
    54 => '附加图像未被使用',
    55 => '保存你的文章时发生以下错误。请改正这些错误再保存',
    56 => '显示主题图示',
    57 => '看没味缩小的图像',
    58 => '文章管理',
    59 => '选项',
    60 => '已启动',
    61 => '自动保存',
    62 => '自动删除',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Expand the Content Edit Area size',
    68 => 'Reduce the Content Edit Area size',
    69 => 'Publish Story Date',
    70 => 'Toolbar Selection',
    71 => 'Basic Toolbar',
    72 => 'Common Toolbar',
    73 => 'Advanced Toolbar',
    74 => 'Advanced II Toolbar',
    75 => 'Full Featured',
    76 => 'Publish Options',
    77 => 'Javascript needs to be enabled for Advanced Editor. Option can be disabled in the main site config.php',
    78 => 'Click <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">here</a> to use default editor'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => '主题编辑器',
    2 => '主题编号',
    3 => '主题名',
    4 => '主题图像',
    5 => '(不可有空隔)',
    6 => '删除主题会同时删除所有有关的文章和组件！',
    7 => '你需要提供主题编号和主题名！',
    8 => '主题管理员',
    9 => '点击下面的主题可修改或删除它，点击上面的新主题可创造一个新的。在括号里你将发现你的存取级别。',
    10 => '排序次序',
    11 => '文章 / 页',
    12 => '存取被拒绝',
    13 => "企图存取不允许的主题已被记录。请<a href=\"{$_CONF['site_admin_url']}/topic.php\">反回主题管理员昼面</a>.",
    14 => '排序方法',
    15 => '按字母排序',
    16 => '预设是',
    17 => '新主题',
    18 => '管理员首页',
    19 => '保存',
    20 => '取消',
    21 => '删除',
    22 => '预设',
    23 => '用此主题作为新稿的预设主体',
    24 => '(*)',
    25 => '保存文件的题目',
    26 => '用此题目作保存文件的默认题目。只准许一个题目。',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => '用户编辑器',
    2 => '用户编号',
    3 => '用户名',
    4 => '全名',
    5 => '密码',
    6 => '安全级别',
    7 => '电邮地址',
    8 => '首页',
    9 => '(不可有空隔)',
    10 => '你需要提供用户名、全名、安全级别和电邮地址。',
    11 => '用户管理员',
    12 => '点击下面的用户可修改或删除它，点击上面的新用户可创造一个新的。在下面的表格中输入部份的用户名、电邮地址或全名 (e.g.*son* or *.edu) ，可做简单的寻找。',
    13 => '安全级别',
    14 => '登记日',
    15 => '新用户',
    16 => '管理员首页',
    17 => '改密码',
    18 => '取消',
    19 => '删除',
    20 => '保存',
    21 => '用户名已经存在',
    22 => '错误',
    23 => '大量增加',
    24 => '大量输入用户',
    25 => '你可一次过输入大量的用户到 Geeklog 。输入档案必须是一个用 tab 分隔的文字档案，栏位的顺序是︰全名、用户名、电邮地址。每一个被输入的用户将会收到一个以电子邮件发送的随机密码。档案中每一行是一个用户。没遵守这些要求将造成问题，也许需要手动作业，请再三检查你档案！',
    26 => '寻找',
    27 => '结果范围',
    28 => '在这里打钩可删除这张图片',
    29 => '路径',
    30 => '输入',
    31 => '新用户',
    32 => '处理完成。输入了 %d 个；%d 个失败',
    33 => '递交',
    34 => '错误︰你必须指定上载档案。',
    35 => '最后一次登入',
    36 => '(从未)',
    37 => 'UID',
    38 => 'Group Listing',
    39 => 'Password (again)',
    40 => 'Registration Date',
    41 => 'Last login Date',
    42 => 'Banned',
    43 => 'Awaiting Activation',
    44 => 'Awaiting Authorization',
    45 => 'Active',
    46 => 'User Status',
    47 => 'Edit'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => '批准',
    2 => '删除',
    3 => '编辑',
    4 => '简要描述',
    10 => '标题',
    11 => '开始日期',
    12 => 'URL',
    13 => '类别',
    14 => '日期',
    15 => '主题',
    16 => '用户名',
    17 => '全名',
    18 => '电子邮件',
    34 => '命令和控制',
    35 => '已递交的文章',
    36 => '已递交的连结',
    37 => '已递交的事件',
    38 => '递交',
    39 => '此时没有递交的东西',
    40 => '申请的用户'
);

###############################################################################
# calendar.php

$LANG30 = array(
    1 => 'Sunday',
    2 => 'Monday',
    3 => 'Tuesday',
    4 => 'Wednesday',
    5 => 'Thursday',
    6 => 'Friday',
    7 => 'Saturday',
    8 => '新增事件',
    9 => 'Geeklog 事件',
    10 => '事件给',
    11 => '主日历',
    12 => '我的日历',
    13 => '一月',
    14 => '二月',
    15 => '三月',
    16 => '四月',
    17 => '五月',
    18 => '六月',
    19 => '七月',
    20 => '八月',
    21 => '九月',
    22 => '十月',
    23 => '十一月',
    24 => '十二月',
    25 => '回到',
    26 => '整日',
    27 => '星期',
    28 => '个人日历︰',
    29 => '公众日历',
    30 => '删除事件',
    31 => '新增',
    32 => '事件',
    33 => '星期',
    34 => '时间',
    35 => '迅速增加',
    36 => '递交',
    37 => '抱歉，本站并不提供个人日历。',
    38 => '个人事件编辑器',
    39 => '日',
    40 => '周',
    41 => '月'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} 邮件程式",
    2 => '寄件人',
    3 => '回复到',
    4 => '主题',
    5 => '内容',
    6 => '收件人︰',
    7 => '所有用户',
    8 => '管理员',
    9 => '选项',
    10 => 'HTML',
    11 => '迫切的讯息！',
    12 => '发送',
    13 => '重设',
    14 => '忽略用户设定',
    15 => '错误，当发送到︰',
    16 => '讯息已发送到︰',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>发送其它信件</a>",
    18 => '收件人',
    19 => '注意︰如果你希望发送讯息到本站所有的成员，请在小组选择栏位中选择 Logged-in Users group。',
    20 => "已发送 <successcount> 个讯息，有 <failcount> 个不能发送。发送的细节在下面。如不想看细节，你可<a href=\"{$_CONF['site_admin_url']}/mail.php\">发送其它讯息</a> 或 <a href=\"{$_CONF['site_admin_url']}/moderation.php\">反回管理员首页</a>。",
    21 => '失败',
    22 => '成功 ',
    23 => '全部成功 ',
    24 => '全部失败',
    25 => '-- 请选小组 --',
    26 => '请填写所有表格上的栏位和选择一个小组。'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => '安装插件能损坏你的主系统。 必需要特别小心。 最好不要安装任何你不了解的插件。',
    2 => '插件安装声明',
    3 => '插件安装表格',
    4 => '插件档案',
    5 => '插件清单',
    6 => '警告︰插件已经被安装过！',
    7 => '你想安装的插件已经存在，请先把它删除再安装。',
    8 => '插件不能通过兼容性校验。',
    9 => '这插件要求一个更新版本的 Geeklog. 你可以升级你的<a href="http://www.geeklog.net">Geeklog</a>或是另找一个适合的版本。',
    10 => '<br><b>没有安装的插件。</b><br><br>',
    11 => '若想修改或删除插件，点击以下插件的名称。这会显示插件的详细内容和制作者的网站。安装的版本和从代码中来的版本都会显出来。这会让你知道此插件是否应该更新。若要安装或升级插件请咨询它的说明文件。',
    12 => 'plugineditor() 找不到插件名',
    13 => '插件编辑器',
    14 => '新插件',
    15 => '管理员首页',
    16 => '插件名字',
    17 => '插件版本',
    18 => 'Geeklog 版本',
    19 => '使有效',
    20 => '是',
    21 => '否',
    22 => '安装',
    23 => '保存',
    24 => '取消',
    25 => '删除',
    26 => '插件名',
    27 => '插件首页',
    28 => '已安装的插件版本',
    29 => 'Geeklog 版本',
    30 => '删除插件？',
    31 => '你肯定要删除这个插件吗？这麽会删除所有有关这插件的文件、资料和资料结构。如果你肯定的，请再点击下面表格中的删除钮。',
    32 => '<p><b>Error AutoLink tag not correct format</b></p>',
    33 => '代码版本',
    34 => '更新',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => '建立文流',
    2 => '保存',
    3 => '删除',
    4 => '取消',
    10 => '内容辛迪加',
    11 => '新文流',
    12 => '管理处首页',
    13 => '若要修改或删除一个文流, 再一下主题上点击. 若要建立新的文流, 点击以上的新文流.',
    14 => '标题',
    15 => '种类',
    16 => '文件名',
    17 => '格式',
    18 => '最后一次更新',
    19 => '启动',
    20 => '是',
    21 => '否',
    22 => '<i>(无文流)</i>',
    23 => '所有文章',
    24 => '文流编辑',
    25 => '文流标题',
    26 => '限定',
    27 => '条目长度',
    28 => '(0 = 无内文, 1 = 整文, other = 限定于此字数.)',
    29 => '说明',
    30 => '最后一次更新',
    31 => '字符集',
    32 => '语言',
    33 => '内容',
    34 => '条目',
    35 => '小时',
    36 => '选择文流种类',
    37 => '你有最少一个安装了的插件能配合内容辛迪加.一下你需要选择你是否要建立一个主系统文流或插件文流.',
    38 => '错误: 缺少信息',
    39 => '请填入文流标题, 说明, 和文件名.',
    40 => '请输入条目数目或小时数目.',
    41 => '连结',
    42 => '事件',
    43 => 'All',
    44 => 'None',
    45 => 'Header-link in topic',
    46 => 'Limit Results',
    47 => 'Search',
    48 => 'Edit',
    49 => 'Feed Logo',
    50 => "Relative to site url ({$_CONF['site_url']})"
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "我们已电邮了你的密码到你的电邮信箱，请跟随邮件中的指示。多谢使用 {$_CONF['site_name']}",
    2 => "多谢递交你的文章到 {$_CONF['site_name']} 。只要经过我们员工的核对，你的文章将出现在我们的纲页上。",
    3 => "多谢递交连结到 {$_CONF['site_name']} 。只要经过我们员工的核对，你的连结将出现在我们的纲页上。",
    4 => "多谢递交事件到 {$_CONF['site_name']} 。只要经过我们员工的核对，你的事件将出现在我们的<a href={$_CONF['site_url']}/calendar.php>日历</a>上。",
    5 => '你的帐户设定已被保存了。',
    6 => '你的个人设定已被保存了。',
    7 => '你的评论界面设定已被保存了。',
    8 => '你已退出。',
    9 => '你的文章已被保存了。',
    10 => '你的文章已被删除了。',
    11 => '你的组件已被保存了。',
    12 => '你的组件已被删除了。',
    13 => '你的主题已被保存了。',
    14 => '你的主题和所有相关的文章已被删除了。',
    15 => '你的连结已被保存了。',
    16 => '你的连结已被删除了。',
    17 => '你的事件已被保存了。',
    18 => '你的事件已被删除了。',
    19 => '你的投票已被保存了。',
    20 => '你的投票已被删除了。',
    21 => '用户已被保存了。',
    22 => '用户已被删除了。',
    23 => '增加事件到你的日历时发生错误，缺少了事件编号。',
    24 => '事件已增加到你的日历中。',
    25 => '你要登入才可开启你的个人日历。',
    26 => '事件已从你的日历中移除。',
    27 => '信息已发送。',
    28 => '插件已被保存了。',
    29 => '抱歉，本站并不提供个人日历。',
    30 => '存取被拒绝',
    31 => '抱歉，你不能进入文章管理的首页。请注意你的企图已被记录。',
    32 => '抱歉，你不能进入主题管理的首页。请注意你的企图已被记录。',
    33 => '抱歉，你不能进入组件管理的首页。请注意你的企图已被记录。',
    34 => '抱歉，你不能进入连结管理的首页。请注意你的企图已被记录。',
    35 => '抱歉，你不能进入事件管理的首页。请注意你的企图已被记录。',
    36 => '抱歉，你不能进入投票管理的首页。请注意你的企图已被记录。',
    37 => '抱歉，你不能进入用户管理的首页。请注意你的企图已被记录。',
    38 => '抱歉，你不能进入 Plug-in 管理的首页。请注意你的企图已被记录。',
    39 => '抱歉，你不能进入电邮管理的首页。请注意你的企图已被记录。',
    40 => '系统讯息',
    41 => '抱歉，你不能进入字词替换的首页。请注意你的企图已被记录。',
    42 => '你的字词已被保存了。',
    43 => '你的字词已被删除了。',
    44 => '插件已被安装了。',
    45 => '插件已被删除了。',
    46 => '抱歉，你不能进入资料库备份程式。请注意你的企图已被记录。',
    47 => '这只适用於 *nix 如果你的作业系统是 *nix，那麽你的缓冲器已被清除了。如果你的作业系统是 Windows，你要手动寻找文件命名为 adodb _ *.php 的档案并把它们除去。',
    48 => "感谢你申请成为 {$_CONF['site_name']} 的会员。只要经过我们员工的核对，我们会把密码寄到你所登记的电邮中。",
    49 => '你的小组已被保存了。',
    50 => '小组已被删除了。',
    51 => '此用户名已有人在用。请选择另一个。',
    52 => '你给的电信地址不像是有效。',
    53 => '你的新密码已被接受。现在以下请用你的新密码来登入.',
    54 => '你要求新密码的期限以过。请在下面从新要求。',
    55 => '已经给你寄了一封电信。请照此信的说明来设定新密码。',
    56 => '你供给的电信地址已有别的用户在使用。',
    57 => '你的用户已经成功地删除了。',
    58 => '你的文流已成功的保存了.',
    59 => '你的文流已成功的删除了.',
    60 => '插件已经更新成功',
    61 => '插件 %s: 不知名的信息占位符',
    62 => 'The trackback comment has been deleted.',
    63 => 'An error occurred when deleting the trackback comment.',
    64 => 'Your trackback comment has been successfully sent.',
    65 => 'Weblog directory service successfully saved.',
    66 => 'The weblog directory service has been deleted.',
    67 => 'The new password does not match the confirmation password!',
    68 => 'You have to enter the correct current password.',
    69 => 'Your account has been blocked!',
    70 => 'Your account is awaiting administrator approval.',
    71 => 'Your account has now been confirmed and is awaiting administrator approval.',
    72 => 'An error occured while attempting to install the plugin. See error.log for details.',
    73 => 'An error occured while attempting to uninstall the plugin. See error.log for details.',
    74 => 'The pingback has been successfully sent.',
    75 => 'Trackbacks must be sent using a POST request.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => '存取',
    'ownerroot' => '所有者/Root',
    'group' => '小组',
    'readonly' => '唯读',
    'accessrights' => '存取权',
    'owner' => '所有者',
    'grantgrouplabel' => '给予之上小组编辑权利',
    'permmsg' => '注意︰会员是指所有注册和登入的用户；而匿名是指所有非注册的浏览者或没有登入的用户。',
    'securitygroups' => '安全小组',
    'editrootmsg' => "即使你是用户管理员；但你不能编辑 root 用户。你能编辑所有的用户除了 root 用户。请注意所有企图非法地编辑 root 用户的动作已被记录。请回到<a href=\"{$_CONF['site_admin_url']}/user.php\">用户管理页</a>去。",
    'securitygroupsmsg' => '选择这位用户属於的小组。',
    'groupeditor' => '小组编辑器',
    'description' => '描述',
    'name' => '名字',
    'rights' => '权限',
    'missingfields' => '缺少栏位',
    'missingfieldsmsg' => '你必须提供小组的名字和描述',
    'groupmanager' => '小组管理员',
    'newgroupmsg' => '点击下面的小组可修改或删除它，点击上面的新小组可创造一个新的。请注意所核心小组不能被删除。',
    'groupname' => '组名',
    'coregroup' => '核心小组',
    'yes' => '是',
    'no' => '否',
    'corerightsdescr' => "这个小组的权限不能被编辑，因为这是个 {$_CONF['site_name']} 的核心小组。以下是这小组的权限清单(唯读的)。",
    'groupmsg' => '安全小组在这纲站是有等级制度的。当增加这个小组到另一组别，这个小组将得到那组别的权限。请尽可能小组加下列的组别去。如果这小组需要特别的权限，你可以在以下的"权利"区域中挑选。要把小组加到组别去，你只需要在组别旁边的挑选盒打钩。',
    'coregroupmsg' => "因为这是个 {$_CONF['site_name']} 的核心小组，这个小组的权限不能被编辑。以下是这小组的组别清单(唯读的)。",
    'rightsdescr' => '小组的权限可以是来自於小组本身或是这小组所属的组别。以下的权限中如没有检验盒即代表这权限是来自於小组所属的组别；如有检验盒即代表你可以直接把权限给予这小组。',
    'lock' => '锁住',
    'members' => '成员',
    'anonymous' => '匿名',
    'permissions' => '权限',
    'permissionskey' => 'R = 唯读， E = 编辑，有编辑权即有唯读权',
    'edit' => '编辑',
    'none' => '没有',
    'accessdenied' => '存取被拒绝',
    'storydenialmsg' => "因未被批准，你不可以观看这个文章。这是可能是因为你并不是 {$_CONF['site_name']} 的会员。请<a href=users.php?mode=new>成为会员</a>。",
    'eventdenialmsg' => "因未被批准，你不可以观看这个事件。这是可能是因为你并不是 {$_CONF['site_name']} 的会员。请<a href=users.php?mode=new>成为会员</a>。",
    'nogroupsforcoregroup' => '这小组不属於任何其它的小组',
    'grouphasnorights' => ' 这小组没有管理权。',
    'newgroup' => '新小组',
    'adminhome' => '管理员首页',
    'save' => '保存',
    'cancel' => '取消',
    'delete' => '删除',
    'canteditroot' => '因为你不属于 Root 小组，所以你对 Root 小组的修改被拒绝了。如有问题请与系统管理员联系。',
    'listusers' => '列出用户',
    'listthem' => '列出',
    'usersingroup' => '属于 "%s" 小组的用户',
    'usergroupadmin' => '用户小组管理',
    'add' => '加入',
    'remove' => '免除',
    'availmembers' => '可用的成员',
    'groupmembers' => '小组成员',
    'canteditgroup' => '若要修改此小组, 你必要时这个小组的成员. 若你认为这是错误, 请你联络系统管理员.',
    'cantlistgroup' => '要看此小组的会员，你必须是此小组的会员。你若认为这是错误，请联络系统管理员。',
    'editgroupmsg' => 'To modify the group membership, click on the member names(s) and use the add or remove buttons. If the member is a member of the group, their name will appear on the right side only. Once you are complete - press <b>Save</b> to update the group and return to the main group admin page.',
    'listgroupmsg' => 'Listing of all current members in the group: <b>%s</b>',
    'search' => 'Search',
    'submit' => 'Submit',
    'limitresults' => 'Limit Results',
    'group_id' => 'Group ID',
    'plugin_access_denied_msg' => 'You are illegally trying access a plugin administration page.  Please note that all attempts to illegally access this page are logged.',
    'groupexists' => 'Group name already exists',
    'groupexistsmsg' => 'There is already a group with this name. Group names must be unique.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => '最後十个备份',
    'do_backup' => '做备份',
    'backup_successful' => '资料库备份完成。',
    'db_explanation' => '要做新的 Geeklog 备份，点击以下的按钮',
    'not_found' => "不正确的路径或 mysqldump 程式不可执行。<br>检查<strong>\$_DB_mysqldump_path</strong>定义在 config.php.<br>变数现在被定义为︰<var>{$_DB_mysqldump_path}</var>",
    'zero_size' => '备份失败︰档案是 0 大小',
    'path_not_found' => "{$_CONF['backup_path']} 不存在或不是目录",
    'no_access' => "错误︰目录 {$_CONF['backup_path']} ，不能存取。",
    'backup_file' => '备份档案',
    'size' => '大小',
    'bytes' => '位元组',
    'total_number' => '总备份次数: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => '首页',
    2 => '联络',
    3 => '投稿',
    4 => '连结',
    5 => '投票',
    6 => '日历',
    7 => '本站统计数据',
    8 => '个人化',
    9 => '搜索',
    10 => '进阶搜寻',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 错误',
    2 => '咦，我到处都看过了但找不到<b>%s</b>.',
    3 => "<p>很抱歉，但你要求的文件不存在。请检查<a href=\"{$_CONF['site_url']}\">主页</a>或<a href=\"{$_CONF['site_url']}/search.php\">搜索页</a>看看能发现什麽。"
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => '要求登入',
    2 => '抱歉，要求登入才可存取这个区域。',
    3 => '登入',
    4 => '新用户'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'PDF 版本的作用已被禁止',
    2 => '所提供的文件没有呈递。文件已收到，但是无法处理。请肯定你所提交的文件是 html 格式的文件写于 xHTML 的标准。请注意过分复杂的 html 文件也可能无法正确呈递。你的文件提交的结果是 0 bytes 而且已被删除。你若肯定你的文件应该顺利的呈递，其再次提交。',
    3 => '不知名的PDF 文件制作错误。',
    4 => '没提供页数资料或你要用以下的特别 PDF 制作工具。若你认为你所得到的这页是错误。 请联络系统管理员。要不然，你可用以下的表格来特别制作 PDF。',
    5 => '正在装置你的文件。',
    6 => '你的文件被装置时请等待。',
    7 => '你可用右击以下的按钮，然后选 \'save target...\' or \'save link location...\' 来存续你的文件的一个拷贝。',
    8 => '在配置档案里的 HTMLDoc二进制档案路径有错误，或此系统无法执行此档案。若此问题继续发生，请联络网站管理员。',
    9 => 'PDF 制作器',
    10 => '这是特别的 PDF 制作工具。它会将任何 URL 转换成 PDF 版本。请注意，有些网页不会正确的被这工具处理成功。这是 HTMLDoc PDF 制作工具的有限之处，而这样的错误不需要报告给此网站的管理员。',
    11 => 'URL',
    12 => '制作 PDF!',
    13 => '此服务器的 PHP 配置不准许 fopen() 命令用在 URL 上。 系统管理员必须先修改  php.ini 档案，然后设定 allow_url_fopen 到 On',
    14 => '你要求的 PDF 不存在或你在非法的入取一个档案。'
);

###############################################################################
# trackback.php

$LANG_TRB = array(
    'trackback' => 'Trackback',
    'from' => 'from',
    'tracked_on' => 'Tracked on',
    'read_more' => '[read more]',
    'intro_text' => 'Here\'s what others have to say about \'%s\':',
    'no_comments' => 'No trackback comments for this entry.',
    'this_trackback_url' => 'Trackback URL for this entry:',
    'num_comments' => '%d trackback comments',
    'send_trackback' => 'Send Pings',
    'preview' => 'Preview',
    'editor_title' => 'Send trackback comment',
    'trackback_url' => 'Trackback URL',
    'entry_url' => 'Entry URL',
    'entry_title' => 'Entry Title',
    'blog_name' => 'Site Name',
    'excerpt' => 'Excerpt',
    'truncate_warning' => 'Note: The receiving site may truncate your excerpt',
    'button_send' => 'Send',
    'button_preview' => 'Preview',
    'send_error' => 'Error',
    'send_error_details' => 'Error when sending trackback comment:',
    'url_missing' => 'No Entry URL',
    'url_required' => 'Please enter at least a URL for the entry.',
    'target_missing' => 'No Trackback URL',
    'target_required' => 'Please enter a trackback URL',
    'error_socket' => 'Could not open socket.',
    'error_response' => 'Response not understood.',
    'error_unspecified' => 'Unspecified error.',
    'select_url' => 'Select Trackback URL',
    'not_found' => 'Trackback URL not found',
    'autodetect_failed' => 'Geeklog could not detect the Trackback URL for the post you want to send your comment to. Please enter it manually below.',
    'trackback_explain' => 'From the links below, please select the URL you want to send your Trackback comment to. Geeklog will then try to determine the correct Trackback URL for that post. Or you can <a href="%s">enter it manually</a> if you know it already.',
    'no_links_trackback' => 'No links found. You can not send a Trackback comment for this entry.',
    'pingback' => 'Pingback',
    'pingback_results' => 'Pingback results',
    'send_pings' => 'Send Pings',
    'send_pings_for' => 'Send Pings for "%s"',
    'no_links_pingback' => 'No links found. No Pingbacks were sent for this entry.',
    'pingback_success' => 'Pingback sent.',
    'no_pingback_url' => 'No pingback URL found.',
    'resend' => 'Resend',
    'ping_all_explain' => 'You can now notify the sites you linked to (<a href="http://en.wikipedia.org/wiki/Pingback">Pingback</a>), advertise that your site has been updated by pinging weblog directory services, or send a <a href="http://en.wikipedia.org/wiki/Trackback">Trackback</a> comment in case you wrote about a post on someone else\'s site.',
    'pingback_button' => 'Send Pingback',
    'pingback_short' => 'Send Pingbacks to all sites linked from this entry.',
    'pingback_disabled' => '(Pingback disabled)',
    'ping_button' => 'Send Ping',
    'ping_short' => 'Ping weblog directory services.',
    'ping_disabled' => '(Ping disabled)',
    'trackback_button' => 'Send Trackback',
    'trackback_short' => 'Send a Trackback comment.',
    'trackback_disabled' => '(Trackback disabled)',
    'may_take_a_while' => 'Please note that sending Pingbacks and Pings may take a while.',
    'ping_results' => 'Ping results',
    'unknown_method' => 'Unknown ping method',
    'ping_success' => 'Ping sent.',
    'error_site_name' => 'Please enter the site\'s name.',
    'error_site_url' => 'Please enter the site\'s URL.',
    'error_ping_url' => 'Please enter a valid Ping URL.',
    'no_services' => 'No weblog directory services configured.',
    'services_headline' => 'Weblog Directory Services',
    'service_explain' => 'To modify or delete a weblog directory service, click on the edit icon of that service below. To add a new weblog directory service, click on "Create New" above.',
    'service' => 'Service',
    'ping_method' => 'Ping method',
    'service_website' => 'Website',
    'service_ping_url' => 'URL to ping',
    'ping_standard' => 'Standard Ping',
    'ping_extended' => 'Extended Ping',
    'ping_unknown' => '(unknown method)',
    'edit_service' => 'Edit Weblog Directory Service',
    'trackbacks' => 'Trackbacks',
    'editor_intro' => 'Prepare your trackback comment for <a href="%s">%s</a>.',
    'editor_intro_none' => 'Prepare your trackback comment.',
    'trackback_note' => 'To send a trackback comment for a story, go to the list of stories and click on "Send Ping" for the story. To send a trackback that is not related to a story, <a href="%s">click here</a>.',
    'pingback_explain' => 'Enter a URL to send the Pingback to. The pingback will point to your site\'s homepage.',
    'pingback_url' => 'Pingback URL',
    'site_url' => 'This site\'s URL',
    'pingback_note' => 'To send a pingback for a story, go to the list of stories and click on "Send Ping" for the story. To send a pingback that is not related to a story, <a href="%s">click here</a>.',
    'pbtarget_missing' => 'No Pingback URL',
    'pbtarget_required' => 'Please enter a pingback URL',
    'pb_error_details' => 'Error when sending the pingback:'
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Article Directory',
    'title_year' => 'Article Directory for %d',
    'title_month_year' => 'Article Directory for %s %d',
    'nav_top' => 'Back to Article Directory',
    'no_articles' => 'No articles.'
);

###############################################################################
# "What's New" Time Strings
# 
# For the first two strings, you can use the following placeholders.
# Order them so it makes sense in your language:
# %i    item, "Stories"
# %n    amount, "2", "20" etc.
# %t    time, "2" (weeks)
# %s    scale, "hrs", "weeks"

$LANG_WHATSNEW = array(
    'new_string' => '%n new %i in the last %t %s',
    'new_last' => 'last %t %s',
    'minutes' => 'minutes',
    'hours' => 'hours',
    'days' => 'days',
    'weeks' => 'weeks',
    'months' => 'months',
    'minute' => 'minute',
    'hour' => 'hour',
    'day' => 'day',
    'week' => 'week',
    'month' => 'month'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Search',
    'limit_results' => 'Limit Results',
    'submit' => 'Submit',
    'edit' => 'Edit',
    'admin_home' => 'Admin Home',
    'create_new' => 'Create New',
    'enabled' => 'Enabled',
    'title' => 'Title',
    'type' => 'Type',
    'topic' => 'Topic',
    'help_url' => 'Help File URL',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'copy' => 'Copy',
    'no_results' => '- No entries found -',
    'data_error' => 'There was an error processing the subscription data. Please check the data source.'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Comments Enabled',
    -1 => 'Comments Disabled'
);


$LANG_commentmodes = array(
    'flat' => 'Flat',
    'nested' => 'Nested',
    'threaded' => 'Threaded',
    'nocomment' => 'No Comments'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 Hour',
    7200 => '2 Hours',
    10800 => '3 Hours',
    28800 => '8 Hours',
    86400 => '1 Day',
    604800 => '1 Week',
    2678400 => '1 Month'
);

$LANG_dateformats = array(
    0 => 'System Default'
);

$LANG_featurecodes = array(
    0 => 'Not Featured',
    1 => 'Featured'
);

$LANG_frontpagecodes = array(
    0 => 'Show Only in Topic',
    1 => 'Show on Front Page'
);

$LANG_postmodes = array(
    'plaintext' => 'Plain Old Text',
    'html' => 'HTML Formatted'
);

$LANG_sortcodes = array(
    'ASC' => 'Oldest First',
    'DESC' => 'Newest First'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback Enabled',
    -1 => 'Trackback Disabled'
);

?>