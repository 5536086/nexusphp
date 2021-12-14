<?php

$lang_settings = array
(
	'text_yes' => "是",
	'text_no' => "否",
	'text_website_settings' => "站点设定",
	'text_configuration_file_saving_note' => "在保存设定前，请确保配置文件和其目录的访问权限已正确配置。",
	'head_save_main_settings' => "保存主要设定",
	'std_message' => "信息",
	'std_click' => "点击",
	'std_here' => "这里",
	'std_to_go_back' => "返回。",
	'head_save_basic_settings' => "保存基础设定",
	'head_save_code_settings' => "保存代码设定",
	'head_save_bonus_settings' => "保存魔力值设定",
	'head_save_account_settings' => "保存账号设定",
	'head_save_torrent_settings' => "保存种子设定",
	'head_save_smtp_settings' => "保存SMTP设定",
	'head_save_security_settings' => "保存安全设定",
	'head_save_authority_settings' => "保存权限设定",
	'head_save_tweak_settings' => "保存次要设定",
	'head_save_bot_settings' => "保存机器人设定",
	'head_bot_settings' => "机器人设定",
	'head_tweak_settings' => "次要设定",
	'row_save_user_location' => "保存用户位置",
	'text_save_user_location_note' => "默认'否'。保存用户最近访问位置。",
	'row_log_user_ips' => "记录用户IP地址",
	'text_store_user_ips_note' => "默认'是'。当用户改变IP地址时做记录。",
	'row_kps_enabled' => "开启魔力值系统",
	'text_enabled' => "开启",
	'text_disabled_but_save' => "关闭但仍记录数值",
	'text_disabled_no_save' => "完全关闭",
	'text_kps_note' => "默认‘开启’。开启或关闭魔力值系统，是否记录数值。",
	'row_tracker_founded_date' => "网站创立时间",
	'text_tracker_founded_date_note' => "时间格式为'年年年年-月月-日日'，将它设成网站创立的时间。",
	'row_save_settings' => "保存设定",
	'submit_save_settings' => "保存设定! (只需点击一次)",
	'head_smtp_settings' => "SMTP设定",
	'row_mail_function_type' => "邮件函数类型",
	'head_security_settings' => "安全设定",
	'row_enable_ssl' => "使用SSL（网页）",
	'row_enable_ssl_tracker' => "使用SSL（Tracker）",
	'text_optional' => "可选（允许用户选择）",
	'text_ssl_note' => "默认'否'。你的HTTP服务器需要做额外的配置才能支持SSL。另外，你需要一个证书（从证书签发机构申请或自签名）。",
	'row_enable_image_verification' => "开启图片验证码",
	'text_image_verification_note' => "默认'否'。用户在注册/登录/找回密码过程中需要填写验证码",
	'row_allow_email_change' => "允许用户改变邮箱",
	'text_email_change_note' => "默认'否'。设为'否'将禁止用户改变其邮箱地址。",
	'row_cheater_detection_level' => "作弊者检测级别",
	'select_none' => "无",
	'select_conservative' => "保守",
	'select_normal' => "正常",
	'select_strict' => "严格",
	'select_paranoid' => "多疑",
	'text_cheater_detection_level_note' => "默认'正常'。请将它设为最适合你的网站的级别。级别越严格，越降低同伴汇报速度。",
	'text_never_suspect' => "永远不怀疑",
	'text_or_above' => "及以上等级的用户，即对他们不做检测。默认",
	'row_max_ips' => "最多允许IP数",
	'text_max_ips_note' => "相同IP地址最大允许的注册数。",
	'row_max_login_attemps' => "最大登录尝试",
	'text_max_login_attemps_note' => "超过这个限制的IP地址将被禁用。",
	'head_authority_settings' => "权限设定",
	'row_default_class' => "默认等级",
	'text_default_user_class' => "默认用户等级：",
	'text_default' => " 默认为",
	'text_default_class_note' => "。注册时获得的等级。",
	'row_staff_member' => "管理组成员",
	'text_minimum_class' => "最低允许等级：",
	'text_staff_member_note' => "。被认为是管理组成员的等级，如可以查看管理组信箱。",
	'row_news_management' => "管理最近消息",
	'text_news_management_note' => "。添加、编辑、删除最近消息。",
	'row_post_funbox_item' => "发布趣味盒内容",
	'text_post_funbox_item_note' => "。允许发布新的趣味盒内容及编辑自己发布的趣味盒内容。",
	'row_funbox_management' => "管理趣味盒",
	'text_funbox_management_note' => "。编辑、删除、禁止任何人发布的趣味盒内容。",
	'row_shoutbox_management' => "管理群聊区",
	'text_shoutbox_management_note' => "。删除群聊区和救助区的信息。",
	'row_poll_management' => "管理投票",
	'text_poll_management_note' => "。添加、编辑、删除投票。",
	'row_apply_for_links' => "申请链接",
	'text_apply_for_links_note' => "。申请在首页的友情链接。",
	'row_link_management' => "管理友情链接",
	'text_link_management_note' => "。添加、编辑、删除友情链接。 ",
	'row_forum_post_management' => "管理论坛帖子",
	'text_forum_post_management_note' => "。编辑、删除、移动、置顶、锁定论坛帖子。",
	'row_comment_management' => "管理评论",
	'text_comment_management_note' => "。编辑、删除种子和候选的评论。",
	'row_forum_management' => "管理论坛版块",
	'text_forum_management_note' => "。添加、编辑、删除、移动论坛版块。",
	'row_view_userlist' => "查看用户列表",
	'text_view_userlist_note' => "。查看、搜索用户列表。",
	'row_torrent_management' => "管理种子",
	'text_torrent_management_note' => "。编辑、删除种子，但不能将种子设为置顶或促销。",
	'row_torrent_sticky' => "设定种子置顶",
	'text_torrent_sticky_note' => "。将种子设为置顶",
	'row_torrent_on_promotion' => "设定种子为促销",
	'text_torrent_promotion_note' => "。将种子设为促销。",
	'row_ask_for_reseed' => "请求续种",
	'text_ask_for_reseed_note' => "。当种子断种时请求续种。",
	'row_view_nfo' => "查看NFO",
	'text_view_nfo_note' => "。查看NFO文件。",
	'row_view_torrent_structure' => "查看种子结构",
	'text_view_torrent_structure_note' => "。查看种子文件的结构。",
	'row_send_invite' => "发送邀请",
	'text_send_invite_note' => "。发送加入网站的邀请函给其他人。",
	'row_view_history' => "查看历史记录",
	'text_view_history_note' => "。查看其他用户的评论和帖子历史记录。",
	'row_view_topten' => "查看排行榜",
	'text_view_topten_note' => "。查看排行榜。",
	'row_view_general_log' => "查看一般日志",
	'text_view_general_log_note' => "。查看一般日志，不能查看机密日志。",
	'row_view_confidential_log' => "查看机密日志",
	'text_view_confidential_log_note' => "。查看机密日志，如站点设定更改。",
	'row_view_user_confidential' => "查看用户机密档案",
	'text_view_user_confidential_note' => "。查看用户的机密档案，如IP地址，邮箱地址。",
	'row_view_user_torrent' => "查看用户种子历史记录",
	'text_view_user_torrent_note' => "。查看用户的种子历史记录，如下载种子的历史记录。<br />只有用户的隐私等级没有设为’强‘时才生效。",
	'row_general_profile_management' => "管理用户基本档案",
	'text_general_profile_management_note' => "。改变用户的基本档案，但不能改变其中重要的项目，如邮箱地址、用户名、上传量、下载量、魔力值数。",
	'row_crucial_profile_management' => "管理用户重要档案信息",
	'text_crucial_profile_management_note' => "。改变用户所有档案信息，除了捐赠信息外（只有",
	'text_can_manage_donation' => "能管理捐赠信息）。",
	'row_upload_subtitle' => "上传字幕",
	'text_upload_subtitle_note' => "。上传种子对应的字幕。",
	'row_delete_own_subtitle' => "删除自己的字幕",
	'text_delete_own_subtitle_note' => "。删除自己上传的字幕。",
	'row_subtitle_management' => "管理字幕",
	'text_subtitle_management' => "。删除任何字幕。",
	'row_update_external_info' => "更新外部信息",
	'text_update_external_info_note' => "。更新外部信息，如IMDb信息。",
	'row_view_anonymous' => "查看匿名者",
	'text_view_anonymous_note' => "。查看匿名者的真实身份。",
	'row_be_anonymous' => "作为匿名",
	'text_be_anonymous_note' => "。在发布种子、上传字幕时选择匿名。",
	'row_add_offer' => "添加候选",
	'text_add_offer_note' => "。允许发起候选。",
	'row_offer_management' => "管理候选",
	'text_offer_management_note' => "。通过、编辑、删除候选。",
	'row_upload_torrent' => "发布种子",
	'text_upload_torrent_note' => "。发布种子到种子区。",
	'row_upload_special_torrent' => "发布种子至特别区",
	'text_upload_special_torrent_note' => "。发布种子到特别区。",
    'row_view_special_torrent' => '查看特别区种子',
    'text_view_special_torrent_note' => '查看特别区种子。',
	'row_move_torrent' => "移动种子",
	'text_move_torrent_note' => "。将种子在各区间移动。",
	'row_chronicle_management' => "管理史册",
	'text_chronicle_management_note' => "。添加、编辑、删除史册内容。",
	'row_view_invite' => "查看邀请",
	'text_view_invite_note' => "。查看用户的邀请历史记录。",
	'row_buy_invites' => "购买邀请",
	'text_buy_invites_note' => "。允许在魔力值中心购买邀请。",
	'row_see_banned_torrents' => "查看被禁止的种子",
	'text_see_banned_torrents_note' => "。查看、下载被禁止的种子。",
	'row_vote_against_offers' => "对候选投反对票",
	'text_vote_against_offers_note' => "。对候选投反对票。",
	'row_allow_userbar' => "允许个性条",
	'text_allow_userbar_note' => "。允许用户使用个性条。",
	'head_basic_settings' => "基础设定",
	'row_site_name' => "网站名",
	'text_site_name_note' => "你的网站的名字。",
	'row_base_url' => "基础URL",
	'text_it_should_be' => "应该设为",
	'text_base_url_note' => "。<b>在末尾<u>不要</u>添加斜杠(/)！</b>",
	'row_announce_url' => "Tracker地址",
	'row_mysql_host' => "MySQL主机",
	'text_mysql_host_note' => "请填写你的MySQL主机地址。如果MySQL和HTTP服务器运行在同一台服务器上，请填写'localhost'。否则请填写运行MySQL的主机的IP地址。",
	'row_mysql_user' => "MySQL用户名",
	'text_mysql_user_note' => "请填写你的MySQL用户名。MySQL默认用户名是'root'。然而，基于安全考虑，推荐你为此网站的数据库另外创建一个用户。",
	'row_mysql_password' => "MySQL密码",
	'text_mysql_password_note' => "<b>基于安全考虑，当前MySQL用户密码未显示在此。</b>如果你要对基础设定做修改，<font color=\"red\"><b>每次都必须填写</b></font>MySQL密码。",
	'row_mysql_database_name' => "MySQL数据库名",
	'row_mysql_database_port' => "MySQL数据库端口",
	'text_mysql_database_name_note' => "请填写你的网站的MySQL数据库名字。",
	'text_mysql_database_port_note' => "请填写你的网站的MySQL数据库端口。",
	'head_code_settings' => "代码设定",
	'row_main_version' => "主版本",
	'text_main_version_note' => "代码的主版本。",
	'row_sub_version' => "次版本",
	'text_sub_version_note' => "代码的次版本",
	'row_release_date' => "发布时间",
	'text_release_date_note' => "时间格式为'年年年年-月月-日日'。代码发布的时间。",
	'row_authorize_to' => "被授权者",
	'text_authorize_to_note' => "被授权的网站或个人的名字。",
	'row_authorization_type' => "授权类型",
	'text_free' => "免费授权",
	'text_commercial' => "商业授权",
	'row_web_site' => "网站",
	'text_web_site_note' => "",
	'text_web_site_note_two' => "的网站URL。",
	'row_email' => "邮箱",
	'text_email_note_one' => "",
	'text_email_note_two' => "的联系邮箱。",
	'row_msn' => "MSN",
	'text_msn_note_one' => "",
	'text_msn_note_two' => "的联系MSN。",
	'row_qq' => "QQ",
	'text_qq_note_one' => "",
	'text_qq_note_two' => "的联系QQ。",
	'row_telephone' => "电话",
	'text_telephone_note_one' => "",
	'text_telephone_note_two' => "的联系电话。",
	'head_bonus_settings' => "魔力值设定",
	'text_bonus_by_seeding' => "做种获得魔力值",
	'row_donor_gets_double' => "捐赠者加倍",
	'text_donor_gets' => "捐赠者通过做种能获得正常情况",
	'text_times_as_many' => "倍的魔力值。默认'2'。设为'0'则将捐赠者和其他用户同等对待。",
	'row_basic_seeding_bonus' => "基础做种魔力值",
	'text_user_would_get' => "对于每个做种中的种子，用户将获得",
	'text_bonus_points' => "个魔力值，最多计算",
	'text_torrents_default' => "个种子。默认'1'，'7'。将魔力值数设为'0'来禁止此规则。",
	'row_seeding_formula' => "做种公式",
	'text_bonus_formula_one' => "每小时获得的魔力值点数由下面的公式给出",
	'text_where' => "式中",
	'text_bonus_formula_two' => "<b>A</b>为中间变量</li><li><b>Ti</b>为第<b>i</b>个种子的生存时间，即自种子发布起到现在所经过的时间, 单位是周",
	'text_bonus_formula_three' => "<b>T0</b>为参数。<b>T0</b> = ",
	'text_bonus_formula_four' => "。默认为'4'",
	'text_bonus_formula_five' => "<b>Si</b>为第<b>i</b>个种子的大小，单位是GB",
	'text_bonus_formula_six' => "<b>Ni</b>为第<b>i</b>个种子当前的做种者数</li><li><b>N0</b>为参数。<b>N0</b> = ",
	'text_bonus_formula_seven' => "。默认为'7'",
	'text_bonus_formula_eight' => "<b>B</b>为1小时中用户获得的做种魔力值点数",
	'text_bonus_formula_nine' => "<b>B0</b>为参数，代表用户1小时获得魔力值的上限。<b>B0</b> = ",
	'text_bonus_formula_ten' => "。默认为'100'",
	'text_bonus_formula_eleven' => "<b>L</b>为参数。<b>L</b> = ",
	'text_bonus_formula_twelve' => "。默认为'300'",
	'text_misc_ways_get_bonus' => "其他获取方式",
	'row_uploading_torrent' => "发布新种子",
	'text_user_would_get' => "用户将获得",
	'text_uploading_torrent_note' => "个魔力值，如果他发布一个新种子。默认'15'。",
	'row_uploading_subtitle' => "上传一个字幕",
	'text_uploading_subtitle_note' => "个魔力值，如果他上传一个字幕。默认'5'。",
	'row_starting_topic' => "发布新主题",
	'text_starting_topic_note' => "个魔力值，如果他在论坛发布一个新的主题。默认'2'。",
	'row_making_post' => "回复帖子",
	'text_making_post_note' => "个魔力值，如果他在论坛发布一个帖子。默认'1'。",
	'row_adding_comment' => "发布评论",
	'text_adding_comment_note' => "个魔力值，如果他对种子、候选发表了一次评论。默认'1'。",
	'row_voting_on_poll' => "参与调查投票",
	'text_voting_on_poll_note' => "个魔力值，如果他参与一次调查投票。默认'1'。",
	'row_voting_on_offer' => "参与候选投票",
	'text_voting_on_offer_note' => "个魔力值，如果他参与一次候选投票。默认'1'。",
	'row_voting_on_funbox' => "趣味盒投票",
	'text_voting_on_funbox_note' => "个魔力值，如果他参与一次趣味盒投票。默认'1'。",
	'row_saying_thanks' => "说谢谢",
	'text_giver_and_receiver_get' => "感谢表达者和接受者将分别得到",
	'text_saying_thanks_and' => "和",
	'text_saying_thanks_default' => "个魔力值。默认'0.5'，'0'。",
	'row_funbox_stuff_reward' => "趣味盒奖励",
	'text_funbox_stuff_reward_note' => "个魔力值，如果他发布的趣味盒内容被评为“有趣”。默认'5'。",
	'text_things_cost_bonus' => "消耗魔力值的项目",
	'row_one_gb_credit' => "1.0 GB上传量",
	'text_it_costs_user' => "用户将失去",
	'text_one_gb_credit_note' => "个魔力值，如果他选择交换1.0 GB上传量。默认'300'。",
	'row_five_gb_credit' => "5.0 GB上传量",
	'text_five_gb_credit_note' => "个魔力值，如果他选择交换5.0 GB上传量。默认'800'。",
	'row_ten_gb_credit' => "10.0 GB上传量",
	'text_ten_gb_credit_note' => "个魔力值，如果他选择交换5.0 GB上传量。默认'1200'。",
	'row_ratio_limit' => "分享率限制",
	'text_user_with_ratio' => "当用户的分享率高于",
	'text_uploaded_amount_above' => "且其上传量大于",
	'text_ratio_limit_default' => " GB时，他不能交换更多的上传量。默认'6'，'50'。将分享率设为'0'来禁止此规则。",
	'row_buy_an_invite' => "购买邀请名额",
	'text_buy_an_invite_note' => "个魔力值，如果他选择交换一个邀请名额。默认'1000'。",
	'row_custom_title' => "自定义头衔",
	'text_custom_title_note' => "个魔力值，如果他选择自定义一次头衔。默认'5000'。",
	'row_vip_status' => "贵宾待遇",
	'text_vip_status_note' => "个魔力值，如果他选择给自己换取一个月的贵宾待遇。默认'8000'。",
	'row_allow_giving_bonus_gift' => "允许魔力值赠送",
	'text_giving_bonus_gift_note' => "允许用户间相互赠送魔力值。默认'是'。",
	'head_account_settings' => "账号设定",
	'row_never_delete' => "永远保留",
	'text_delete_inactive_accounts' => "删除不活跃账号",
	'text_never_delete' => "及以上等级的账号将永远保留。默认",
	'row_never_delete_if_packed' => "封存后永远保留",
	'text_never_delete_if_packed' => "及以上等级的账号如果在封存后将永远保留。默认",
	'row_delete_packed' => "删除封存账号",
	'text_delete_packed_note_one' => "封存的账号如果连续",
	'text_delete_packed_note_two' => "天不登录，将被删除。默认'400'，设为'0'来禁止此规则。",
	'row_delete_unpacked' => "删除未封存账号",
	'text_delete_unpacked_note_one' => "未封存的账号如果连续",
	'text_delete_unpacked_note_two' => "天不登录，将被删除。默认'150'，设为'0'来禁止此规则。",
	'row_delete_no_transfer' => "删除没有流量的用户",
	'text_delete_transfer_note_one' => "没有流量的用户（即上传/下载数据都为0）如果连续",
	'text_delete_transfer_note_two' => "天不登录，或者注册时间满",
	'text_delete_transfer_note_three' => "天，将被删除账号。默认'60'，'0'。<br />注意：两条规则是分开执行的。将其中任一规则设为‘0’<b>只</b>禁止一条规则。",
	'text_user_promotion_demotion' => "用户升级和降级",
	'row_ban_peasant_one' => "禁用",
	'row_ban_peasant_two' => "",
	'text_ban_peasant_note_one' => "如果在",
	'text_ban_peasant_note_two' => "天内仍未改善分享率，将被禁用。默认'30'，设为'0'将马上禁止。",
	'row_demoted_to_peasant_one' => "降级至",
	'row_demoted_to_peasant_two' => "",
	'text_demoted_peasant_note_one' => "用户在以下任一情况下将被降为",
	'text_demoted_peasant_note_two' => "：",
	'text_downloaded_amount_larger_than' => "下载量超过",
	'text_and_ratio_below' => " GB且分享率低于",
	'text_demote_peasant_default_one' => "。默认'50'，'0.4'。",
	'text_demote_peasant_default_two' => "。默认'100'，'0.5'。",
	'text_demote_peasant_default_three' => "。默认'200'，'0.6'。",
	'text_demote_peasant_default_four' => "。默认'400'，'0.7'。",
	'text_demote_peasant_default_five' => "。默认'800'，'0.8'。",
	'text_demote_peasant_note' => "注意：<font class=striking><b>不要</b></font>改变下载量递增的排序。将下载量设为'0'将禁止相应的规则。",
	'row_promote_to_one' => "升级至",
	'row_promote_to_two' => "",
	'text_member_longer_than' => "注册时间大于",
	'text_downloaded_more_than' => "周，下载量大于",
	'text_with_ratio_above' => " 且分享率大于",
	'text_seed_points_more_than' => 'GB，做种积分大于',
	'text_be_promoted_to' => "的用户，将升级为",
	'text_promote_to_default_one' => "。默认",
	'text_promote_to_default_two' => "，他将被降级。默认",
	'text_demote_with_ratio_below' => "然而，一旦用户的分享率低于",
	'head_torrent_settings' => "种子设定",
	'row_promotion_rules' => "促销规则",
	'text_promotion_rules_note' => "开启一些自动促销规则。<font color=red><b>代码待完善，如果不清楚用处请不要启用。</b></font>",
	'row_random_promotion' => "随机促销",
	'text_random_promotion_note_one' => "种子在发布时由系统自动随机促销。",
	'text_halfleech_chance_becoming' => "%的可能成为<b><font class='halfdown'>50%</font></b>。默认'5'。",
	'text_free_chance_becoming' => "%的可能成为<b><font class='free'>免费</font></b>。默认'2'。",
	'text_twoup_chance_becoming' => "%的可能成为<b><font class='twoup'>2X</font></b>。默认'2'。",
	'text_freetwoup_chance_becoming' => "%的可能成为<b><font class='twoupfree'>2X免费</font></b>。默认'1'。",
	'text_twouphalfleech_chance_becoming' => "%的可能成为<b><font class='twouphalfdown'>2x 50%</font></b>。默认'0'。",
	'text_random_promotion_note_two' => "将值设为'0'来禁止相应规则。",
	'row_large_torrent_promotion' => "大体积种子促销",
	'text_torrent_larger_than' => "体积大于",
	'text_gb_promoted_to' => " GB的种子将在发布时由系统自动设为",
	'text_by_system_upon_uploading' => "。",
	'text_large_torrent_promotion_note' => "默认'20'，'免费'。将种子体积设为'0'来禁止此规则。",
	'row_promotion_timeout' => "促销时限",
	'text_promotion_timeout_note_one' => "种子的促销将在一段时间后过期。",
	'text_halfleech_will_become' => "<b><font class='halfdown'>50%</font></b>将变为",
	'text_after' => "，如果离发布时间已过去",
	'text_halfleech_timeout_default' => "天。默认'普通'，'150'。",
	'text_free_will_become' => "<b><font class='free'>免费</font></b>将变为",
	'text_free_timeout_default' => "天。默认'普通'，'60'。",
	'text_twoup_will_become' => "<b><font class='twoup'>2X</font></b>将变为",
	'text_twoup_timeout_default' => "天。默认'普通'，'60'。",
	'text_freetwoup_will_become' => "<b><font class='twoupfree'>2X免费</font></b>将变为",
	'text_freetwoup_timeout_default' => "天。默认'普通'，'30'。",
	'text_halfleechtwoup_will_become' => "<b><font class='twouphalfdown'>2X 50%</font></b>将变为",
	'text_halfleechtwoup_timeout_default' => "天。默认'普通'，'30'。",
	'text_normal_will_become' => "<b>普通</b>将变为",
	'text_normal_timeout_default' => "天。默认'普通'，'0'。",
	'text_promotion_timeout_note_two' => "将天数设为'0'来使促销永远不过期。",
	'row_auto_pick_hot' => "自动挑选热门种子",
	'text_torrents_uploaded_within' => "在发布后",
	'text_days_with_more_than' => "天内，如果种子的做种数曾超过",
	'text_be_picked_as_hot' => "，它将被标记为<b><font class=hot>热门</font></b>。",
	'text_auto_pick_hot_default' => "默认'7'，'10'。将天数设为'0'来禁止此规则。",
	'row_uploader_get_double' => "发布者加倍上传量",
	'text_torrent_uploader_gets' => "对于一个种子，它的发布者将得到正常情况",
	'text_times_uploading_credit' => "倍的上传量。",
	'text_uploader_get_double_default' => "默认'1'。设为'1'则将发布者和其他用户同等对待。",
	'row_delete_dead_torrents' => "删除断种",
	'text_torrents_being_dead_for' => "连续断种",
	'text_days_be_deleted' => "天的种子将被自动删除。默认'0'。设为'0'来禁止此规则。",
	'row_delete_dead_torrents_note' => "<font class=striking><b>警告</b></font>：种子一旦被删除将不可恢复。如果你的站点可能长期关闭，一定要禁止这条规则。",
	'head_main_settings' => "主要设定",
	'row_site_online' => "站点在线",
	'text_site_online_note' => "默认'是'。在做站更新和其他维护时，你可能需要临时关闭站点。<b>注意</b>：此时网站管理员仍能访问网站。",
	'row_enable_invite_system' => "开启邀请系统",
	'text_invite_system_note' => "默认'是'。允许新用户通过邀请系统注册。",
	'row_initial_uploading_amount' => "初始上传量",
	'text_initial_uploading_amount_note' => "单位为Byte，即1073741824为1 GB。新注册用户的初始上传量。默认'0'。",
	'row_initial_invites' => "初始邀请名额",
	'text_initial_invites_note' => "新注册用户的初始邀请名额。默认'0'。",
	'row_invite_timeout' => "邀请过期",
	'text_invite_timeout_note' => "单位为天。邀请码如在发出X天后仍未使用，将被删除。默认'7'。",
	'row_enable_registration_system' => "开启注册系统",
	'row_allow_registrations' => "若开启，则允许自由注册。默认'是'。",
	'row_verification_type' => "用户验证方式",
	'text_email' => "邮件",
	'text_admin' => "管理员",
	'text_automatically' => "自动",
	'text_verification_type_note' => "邮件：发送验证邮件；管理员：管理员手动；自动：注册完成后自动激活。",
	'row_enable_wait_system' => "开启等待系统",
	'text_wait_system_note' => "默认'否'。开启或关闭等待系统。参看<a href='faq.php#id46'><b>常见问题</b></a>。",
	'row_enable_max_slots_system' => "开启连接数系统",
	'text_max_slots_system_note' => "默认'否'。开启或关闭最大同时下载数限制。参看<a href='faq.php#id66'><b>常见问题</b></a>。",
	'row_show_polls' => "显示投票",
	'text_show_polls_note' => "默认'是'。在首页显示投票。",
	'row_show_stats' => "显示站点数据",
	'text_show_stats_note' => "默认'是'。在首页显示站点数据。",
	'row_show_last_posts' => "显示最近论坛帖子",
	'text_show_last_posts_note' => "默认'否'。在首页显示最近的论坛帖子。",
	'row_show_last_torrents' => "显示最近种子",
	'text_show_last_torrents_note' => "默认'否'。在首页显示最近发布的种子。",
	'row_show_server_load' => "显示服务器负载",
	'text_show_server_load_note' => "默认'是'。在首页显示服务器负载。",
	'row_show_forum_stats' => "显示论坛数据",
	'text_show_forum_stats_note' => "默认'是'。在论坛页面显示论坛数据。",
	'row_show_hot' => "显示热门资源",
	'text_show_hot_note' => "默认'是'。在首页显示热门资源。热门资源由系统自动挑选或由管理组成员挑选。",
	'row_show_classic' => "显示经典资源",
	'text_show_classic_note' => "默认'否'。在首页显示经典资源。只有指定的总版主或以上等级能够挑选热门资源。",
	'row_enable_imdb_system' => "开启IMDb系统",
	'text_imdb_system_note' => "默认'是'。全局IMDb系统设定。",
	'row_enable_pt_gen_system' => '开启 PT-Gen 系统',
	'text_enable_pt_gen_system_note' => "默认'否'。全局 PT-Gen 系统设定。",
	'row_pt_gen_api_point' => "PT-Gen 接口地址",
	'text_pt_gen_api_point_note' => "默认 ''，需要时<b><a href=\"https://github.com/Rhilip/pt-gen-cfworker\">参考文档</a></b>自行搭建。",
	'row_enable_school_system' => "开启学校系统",
	'text_school_system_note' => "默认'否'。如果对这项功能不清楚，<font class=striking><b>不要</b></font>开启它。",
	'row_restrict_email_domain' => "限制邮箱域",
	'text_restrict_email_domain_note' => "默认'否'。设为'是'则只允许指定的邮箱域来注册账号。参看<a href='allowedemails.php'><b>这里</b></a>。",
	'row_show_shoutbox' => "显示群聊区",
	'text_show_shoutbox_note' => "默认'是'。在首页显示群聊区。",
	'row_show_funbox' => "显示趣味盒",
	'text_show_funbox_note' => "默认'否'。在首页显示趣味盒。",
	'row_enable_offer_section' => "开启候选区",
	'text_offer_section_note' => "默认'是'。开启或关闭候选区。",
	'row_show_donation' => "开启捐赠",
	'text_show_donation_note' => "显示捐赠信息和捐赠排行榜。",
	'row_show_special_section' => "开启特别区",
	'text_show_special_section_note' => "默认'否'。如果对这项功能不清楚，<font class=striking><b>不要</b></font>开启它。",
	'row_weekend_free_uploading' => "周末自由发布",
	'text_weekend_free_uploading_note' => "默认'否'。设为'是'则允许所有用户在周末自由发布种子（从周六12:00到周日23:59）。",
	'row_enable_helpbox' => "开启求助区",
	'text_helpbox_note' => "默认'否'。设为'否'则禁止游客发送消息。",
	'row_enable_bitbucket' => "开启上传器",
	'text_bitbucket_note' => "默认'是'。设为'否'则禁止用户上传头像到网站。",
	'row_enable_small_description' => "开启副标题",
	'text_small_description_note' => "默认'是'。副标题显示在种子页面种子标题下面。",
	'row_ptshow_naming_style' => "PTShow命名风格",
	'text_ptshow_naming_style_note' => "默认'否'。格式为[月月.日日.年年][原始名][中文名]。如果对这项功能不清楚，<font class=striking><b>不要</b></font>开启它。",
	'row_use_external_forum' => "使用外部论坛",
	'text_use_external_forum_note' => "默认'否'。设为'是'使用外部论坛来代替内建论坛。",
	'row_external_forum_url' => "外部论坛URL",
	'text_external_forum_url_note' => "填写类似这样的地址：http://www.cc98.org",
	'row_torrents_category_mode' => "种子区分类模式",
	'text_torrents_category_mode_note' => "改变种子区的分类模式。",
	'row_special_category_mode' => "特别区分类模式",
	'text_special_category_mode_note' => "改变特别区的分类模式。",
	'row_default_site_language' => "默认站点语言",
	'text_default_site_language_note' => "改变登录页面的默认语言。",
	'row_default_stylesheet' => "默认界面风格",
	'text_default_stylesheet_note' => "新注册的用户将默认使用这个界面风格。",
	'row_max_torrent_size' => "种子文件体积限制",
	'text_max_torrent_size_note' => "单位为byte。默认1048576，即1 MB。",
	'row_announce_interval' => "汇报间隔",
	'text_announce_interval_note_one' => "单位为秒。Tracker将通知BitTorrent客户端以这个间隔时间汇报信息。<b>需要注意的是</b>，在实际情况中汇报间隔可能不同，因为BitTorrent客户端可能无视这个通知，而且用户可以选择手动连接Tracker。",
	'text_announce_default' => "默认：",
	'text_announce_default_default' => "默认'1800'，即30分钟",
	'text_for_torrents_older_than' => "发布时间超过",
	'text_days' => "天的种子：",
	'text_announce_two_default' => "默认'7'，'2700'（即45分钟)。将天数设为'0'来禁止此规则",
	'text_announce_three_default' => "默认'30'，'3600'（即60分钟）。将天数设为'0'来禁止此规则",
	'text_announce_interval_note_two' => "<b>注意</b>：<font class=striking><b>不要</b></font>改变天数递增的排序。<br />越短的间隔将获得越准确的同伴信息更新，同时带来<b>更大的服务器负载</b>。",
	'row_cleanup_interval' => "自动清理间隔",
	'text_cleanup_interval_note_one' => "每XXX秒时间做自动清理工作（用户升级、降级、添加做种魔力值等）。",
	'text_priority_one' => "优先级1：",
	'text_priority_one_note' => "更新同伴状态；添加做种魔力值。默认'900'，即15分钟。",
	'text_priority_two' => "优先级2：",
	'text_priority_two_note' => "更新种子可见性。默认'1800'，即30分钟。",
	'text_priority_three' => "优先级3：",
	'text_priority_three_note' => "更新种子做种数、下载数、评论数；更新论坛帖子/主题数；删除过期的候选；种子促销到期；自动挑选热门种子。默认'3600'，即60分钟。",
	'text_priority_four' => "优先级4：",
	'text_priority_four_note' => "删除未通过验证的账号，过期的登录尝试记录，过期的邀请码和图片验证码；清理用户账号（删除不活跃账号，账号升级、降级、禁用）；发送上传的图片；更新用户总做种和下载时间。默认'43200'，即24小时。",
	'text_priority_five' => "优先级5：",
	'text_priority_five_note' => "删除种子文件不存在的种子；锁定论坛的古老主题；删除古老的举报信息。默认'1296000'，即15天。",
	'text_cleanup_interval_note_two' => "<b>注意</b>：<font class=striking><b>不要</b></font>改变时间递增的排序。",
	'row_signup_timeout' => "注册超时",
	'text_signup_timeout_note' => "单位为秒。如用户在提交注册信息XXX秒后未通过验证，其账号将被删除。默认'259200'，即3天。",
	'row_min_offer_votes' => "最低候选投票",
	'text_min_offer_votes_note' => "当候选的支持票比反对票多XXX票时，候选被通过。默认'15'。",
	'row_offer_vote_timeout' => "候选投票超时",
	'text_offer_vote_timeout_note' => "单位为秒。如候选在发布XXX秒后未被通过，它将被删除。默认为'259200'，即72小时。设为'0'则不设置超时限制。",
	'row_offer_upload_timeout' => "候选发布超时",
	'text_offer_upload_timeout_note' => "单位为秒。如候选在通过后XXX秒内未发布种子，它将被删除。默认'86400'，即24小时。设为'0'则不设置超时限制。",
	'row_max_subtitle_size' => "最大字幕体积",
	'text_max_subtitle_size_note' => "单位为byte。允许上传的最大字幕体积。默认3145728，即3 MB。设为'0'则不设置体积限制。",
	'row_posts_per_page' => "默认每页帖子数",
	'text_posts_per_page_note' => "论坛主题每页显示的帖子数。默认'10'。<br />注意：用户的个人设置将覆盖系统默认设置。",
	'row_topics_per_page' => "默认每页主题数",
	'text_topics_per_page_note' => "论坛每页显示的主题数。默认'20'。<br />注意：用户的个人设置将覆盖系统默认设置。",
	'row_number_of_news' => "最近消息条数",
	'text_number_of_news_note' => "在首先显示的最近消息条数。默认'3'。",
	'row_torrent_dead_time' => "最大种子断种时间",
	'text_torrent_dead_time_note' => "单位为秒。当种子连续XXX秒没有任何做种者时，它将被标记为断种。默认'21600'，即6小时。",
	'row_max_users' => "最大用户数",
	'text_max_users' => "当这个限制达到时，自由注册和邀请注册都将关闭。",
	'row_https_announce_url' => "HTTPS Tracker地址",
	'text_https_announce_url_note' => "如果你的网站为HTTP和HTTPS使用同样的地址，请留空。应该设为",
	'row_site_accountant_userid' => "网站会计用户ID",
	'text_site_accountant_userid_note' => "填写数字，如'1'。捐赠者将发送捐赠信息短讯至此ID的用户。",
	'row_alipay_account' => "支付宝账号",
	'text_alipal_account_note' => "你用于接收捐赠的支付宝账号，如'yourname@gmail.com'。如果没有，请留空。",
	'row_paypal_account' => "PayPal账号",
	'text_paypal_account_note' => "你用于接收捐赠的PayPal账号，如'yourname@gmail.com'。如果没有，请留空。",
	'row_site_email' => "网站邮箱地址",
	'text_site_email_note' => "网站的邮箱地址",
	'row_report_email' => "报告邮箱地址",
	'text_report_email_note' => "用户报告的邮箱地址",
	'row_site_slogan' => "网站标语",
	'text_site_slogan_note' => "网站的标语",
	'row_icp_license' => "ICP备案信息",
	'text_icp_license_note' => "这是适用于在中国运营的网站的许可证制度。如果没有，请留空。",
	'row_torrent_directory' => "种子目录",
	'text_torrent_directory' => "默认'torrents'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_bitbucket_directory' => "上传器目录",
	'text_bitbucket_directory_note' => "默认'bitbucket'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_cache_directory' => "缓存目录",
	'text_cache_directory_note' => "默认'cache'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_torrent_name_prefix' => "种子文件名前缀",
	'text_torrent_name_prefix_note' => "在从网站下载的种子文件的文件名前添加前缀。默认'[Nexus]'。<b><u>不要</u>使用非法的文件名字符！</b>",
	'row_peering_time_calculation' => "同伴时间开始计算时间",
	'text_peering_time_calculation_note' => "请留空。该设置因历史原因保留。",
	'row_new_subtitle_id' => "新的字幕ID",
	'text_new_subtitle_id_note' => "请保持'0'。该设置因历史原因保留。",
	'head_website_settings' => "站点设定",
	'row_basic_settings' => "基础设定",
	'submit_basic_settings' => "基础设定",
	'text_basic_settings_note' => "设定最基础的项目，网站名等。",
	'row_main_settings' => "主要设定",
	'submit_main_settings' => "主要设定",
	'text_main_settings_note' => "配置你的网站各种主要项目。",
	'row_smtp_settings' => "SMTP设定",
	'submit_smtp_settings' => "SMTP设定",
	'text_smtp_settings_note' => "配置网站SMTP邮件服务器。",
	'row_security_settings' => "安全设定",
	'submit_security_settings' => "安全设定",
	'text_security_settings_note' => "管理网站的安全。",
	'row_authority_settings' => "权限设定",
	'submit_authority_settings' => "权限设定",
	'text_authority_settings_note' => "配置各等级的用户所具有的权限。",
	'row_tweak_settings' => "次要设定",
	'submit_tweak_settings' => "次要设定",
	'text_tweak_settings_note' => "配置你的网站的次要项目。",
	'row_bonus_settings' => "魔力值设定",
	'submit_bonus_settings' => "魔力值设定",
	'text_bonus_settings_note' => "配置魔力值的获取和使用。",
	'row_account_settings' => "账号设定",
	'submit_account_settings' => "账号设定",
	'text_account_settings_settings' => "配置账号的升级，降级，删除等。",
	'row_torrents_settings' => "种子设定",
	'submit_torrents_settings' => "种子设定",
	'text_torrents_settings_note' => "配置种子的促销，筛选等。",
	'row_bots_settings' => "机器人设定",
	'submit_bots_settings' => "机器人设定",
	'text_bots_settings_note' => "管理网站的机器人。如果对设定项目的功能不清楚，请<font class=striking><b>不要</b></font>做任何修改。",
	'row_code_settings' => "代码设定",
	'submit_code_settings' => "代码设定",
	'text_code_settings_note' => "配置代码的版本。如果对设定项目的功能不清楚，请<font class=striking><b>不要</b></font>做任何修改。",
	'text_smtp_default' => "默认（使用PHP默认邮件函数）",
	'text_smtp_advanced' => "高级（使用PHP默认邮件函数，添加额外的头信息。有助于防止被视为垃圾邮件过滤）",
	'text_smtp_external' => "外部（使用外部SMTP服务器）",
	'text_setting_for_advanced_type' => "高级类型设定",
	'row_smtp_host' => "SMTP主机",
	'text_smtp_host_note' => "默认：'localhost'",
	'row_smtp_port' => "SMTP端口",
	'text_smtp_port_note' => "默认：25",
	'row_smtp_sendmail_from' => "SMTP邮件发送来源",
	'text_smtp_sendmail_from_note' => "默认：",
	'row_smtp_sendmail_path' => "Sendmail路径",
	'text_smtp_sendmail_path_note' => "请在php.ini中设置好sendmail_path",
	'text_setting_for_external_type' => "外部类型设定",
	'row_outgoing_mail_address' => "SMTP地址",
	'row_outgoing_mail_port' => "SMTP端口",
	'text_outgoing_mail_address_note' => "<b>提示：</b> smtp.yourisp.com",
	'text_outgoing_mail_port_note' => "<b>提示：</b> 25",
	'row_smtp_account_name' => "用户名",
	'text_smtp_account_name_note' => "<b>提示：</b> yourname@yourisp.com",
	'row_smtp_account_password' => "用户密码",
	'text_smtp_account_password_note' => "<b>提示：</b>输入你的密码",
	'text_mail_test_note' => "如何测试发送邮件功能？很简单，点击",
	'text_here' => "这里",
	'std_error' => "错误",
	'std_mysql_connect_error' => "无法连接MySQL，请检查设定。",
	'row_enable_location' => "显示地址",
	'text_enable_location_note' => "默认'否'。根据用户的IP地址显示其地理位置。如果你没有导入IP地址库，<b>不要</b>启用本项。",
	'row_torrents_per_page' => "默认每页种子数",
	'text_torrents_per_page_note' => "种子页面每页显示的种子数。默认'50'。<br />注意：用户的个人设置将覆盖系统默认设置。",
	'row_title_keywords' => "页面标题关键字",
	'text_title_keywords_note' => "显示在页面标题末尾。填写这些关键字能帮助搜索引擎找到你的站点。多个关键字间用'|'分隔，如'BT|下载|电影'。如果想保持清爽的页面标题，请留空。",
	'row_meta_keywords' => "Meta关键字",
	'text_meta_keywords_note' => "出现在页面头部Meta标签中。填写与你站点相关的关键字。多个关键字间用半角逗号','分隔，如'BT, 下载, 电影'.",
	'row_meta_description' => "Meta描述",
	'text_meta_description_note' => "出现在页面头部Meta标签中。填写你站点的概要和描述。",
	'row_bonus_gift_tax' => "魔力值赠送税收",
	'text_system_charges' => "系统向礼物接收者索取",
	'text_bonus_points_plus' => "个魔力值 + 赠送额的",
	'text_bonus_gift_tax_note' => "%的魔力值作为税收。如设为'5'，'10'时，礼物赠送者发送100个魔力值，接收者只获得85个。默认'5'，'10'。<br /><b>注意</b>：两条规则是分开执行的，将两个值都设为'0'才能完全免除税收。",
	'row_see_sql_debug' => "查看调试信息",
	'text_allow' => "允许",
	'text_see_sql_list' => "及以上等级的用户查看调试信息（在页面底部查看SQL语句列表，PHP报告信息）。默认",
	'text_smtp_none' => "无（将彻底禁止邮件发送功能）",
	'row_attachment_settings' => "附件设定",
	'submit_attachment_settings' => "附件设定",
	'text_attachment_settings_note' => "配置附件。",
	'head_attachment_settings' => "附件设定",
	'row_enable_attachment' => "开启附件",
	'text_enable_attachment_note' => "全局附件设定。如设为'否'，所有人都不能上传附件。",
	'row_save_directory' => "附件保存位置",
	'row_http_directory' => "附件URL地址",
	'text_http_directory_note' => "可为当前URL下的相对地址或http://开头的绝对地址。<b><u>不要</u>在末尾添加斜杠(/)！</b>默认'attachments'。",
	'row_attachment_authority' => "附件权限",
	'text_can_upload_at_most' => "及以上等级用户在24小时内最多允许上传",
	'text_file_size_below' => "个附件，每个附件文件大小不超过",
	'text_with_extension_name' => "KB，允许的文件扩展名为",
	'text_authority_default_one_one' => "。默认",
	'text_authority_default_one_two' => "，'5'，'256'，'jpeg, jpg, png, gif'。",
	'text_authority_default_two_one' => "。默认",
	'text_authority_default_two_two' => "，'10'，'512'，'torrent, zip, rar, 7z, gzip, gz'。",
	'text_authority_default_three_one' => "。默认",
	'text_authority_default_three_two' => "，'20'，'1024'，'mp3, oga, ogg, flv'。",
	'text_authority_default_four_one' => "。默认",
	'text_authority_default_four_two' => "，'500'，'2048'，''。",
	'text_attachment_authority_note_two' => "<b>注意：</b><ul><li><b>不要</b>改变用户等级、文件数限制、文件大小限制递增的排序。</li><li>将文件大小限制设为'0'，文件数限制设为'0'，允许的文件扩展名设为''（即留空）才能<b>禁止</b>相应规则。</li><li>高等级的用户自动继承低等级用户的权限，所以<b>没</b>必要在多条规则中填写相同的允许文件扩展名。</li><li>多个允许的文件扩展名用半角逗号','分隔。</li><li>无论如何设置，<b>没有</b>任何人能上传文件大小超过5 MB或扩展名为'exe, com, bat, msi'之一的附件。</li></ul>",
	'text_attachment_authority_note_one' => "根据用户等级定义其拥有的上传附件的权限。",
	'text_save_directory_note' => "你保存附件的服务器路径。请确保目录访问权限已设置正确（777）。<b><u>不要</u>在末尾添加斜杠(/)！</b>默认'./attachments'。",
	'row_save_directory_type' => "保存附件方式",
	'text_one_directory' => "全部文件存入同一目录",
	'text_directories_by_monthes' => "按月份存入不同目录",
	'text_directories_by_days' => "按天存入不同目录",
	'text_save_directory_type_note' => "此设定只影响新上传的附件。默认'按月份存入不同目录'。",
	'row_image_thumbnails' => "图片缩略图",
	'text_no_thumbnail' => "1. 不启用缩略图功能。只保存原始图片。",
	'text_create_thumbnail' => "2. 为尺寸大的图片生成缩略图，同时保存缩略图和原始图片。",
	'text_resize_big_image' => "3. 缩小尺寸大的图片，只保存缩略图。",
	'text_image_thumbnail_note' => "默认'2'。",
	'row_thumbnail_quality' => "缩略图质量",
	'text_thumbnail_quality_note' => "设定缩略图的质量。该参数范围为1至100内的整数。数值越大，缩略图质量越高，同时文件大小越大。默认'80'。",
	'row_thumbnail_size' => "缩略图尺寸",
	'text_thumbnail_size_note' => "宽度 * 高度，单位为像素。<b>只</b>为宽度<b>或</b>高度超过此限制的图片生成缩略图。默认'500'，'500'。",
	'row_watermark' => "水印位置",
	'text_no_watermark' => "不启用水印功能",
	'text_left_top' => "#1",
	'text_top' => "#2",
	'text_right_top' => "#3",
	'text_left' => "#4",
	'text_center' => "#5",
	'text_right' => "#6",
	'text_left_bottom' => "#7",
	'text_bottom' => "#8",
	'text_right_bottom' => "#9",
	'text_random_position' => "随机位置",
	'text_watermark_note' => "为上传的图片文件（JPEG/PNG/GIF）添加水印。你可以替换水印PNG图片文件'pic/watermark.png'以实现不同的水印效果。选择水印添加的位置。不支持给动画GIF文件添加水印。默认'不启用水印功能'。",
	'row_image_size_for_watermark' => "水印添加条件",
	'text_watermark_size_note' => "宽度 * 高度，单位为像素。<b>只</b>为宽度<b>和</b>高度都超过此限制的图片添加水印。默认'300'，'300'。",
	'row_jpeg_quality_with_watermark' => "JPEG图片水印质量",
	'text_jpeg_watermark_quality_note' => "添加水印后的JPEG文件的图片质量。该参数范围为1至100内的整数。数值越大，缩略图质量越高，同时文件大小越大。默认'85'。",
	'head_save_attachment_settings' => "保存附件设定",
	'row_css_date' => "CSS日期",
	'text_css_date' => "时间格式为'年年年年月月日日时时分分'，如'200911030110'。修改此项目能帮助强制用户的浏览器更新CSS缓存。当你对CSS文件做一些修改后可能需要用到此项。如果不明白此项用处，请留空。默认为空。",
	'row_alternative_thumbnail_size' => "缩略图另一尺寸",
	'text_alternative_thumbnail_size_note' => "用户能选择缩略图另外一种尺寸。默认'180'，'135'。",
	'row_add_watermark_to_thumbnail' => "给缩略图添加水印",
	'text_watermark_to_thumbnail_note' => "选择是否给缩略图也添加水印。默认'否'。当全局缩略图设定启用时被项才能生效。",
	'row_advertisement_settings' => "广告设定",
	'submit_advertisement_settings' => "广告设定",
	'text_advertisement_settings_note' => "配置你站点中的广告。",
	'head_advertisement_settings' => "广告设定",
	'row_enable_advertisement' => "启用广告",
	'text_enable_advertisement_note' => "全局广告设定。",
	'row_no_advertisement' => "可关闭广告",
	'text_can_choose_no_advertisement' => "及以上等级用户可在控制面板中选择不显示广告。默认",
	'row_bonus_no_advertisement' => "魔力值交换可关闭广告",
	'text_no_advertisement_with_bonus' => "及以上等级用户可用魔力值换取一定期限内不显示广告的权限。默认",
	'row_no_advertisement_bonus_price' => "无广告魔力值",
	'text_bonus_points_to_buy' => "个魔力值，如果他选择交换",
	'text_days_without_advertisements' => "天不显示广告的权限。默认'10000'，'15'。",
	'row_click_advertisement_bonus' => "点击广告获取魔力值",
	'text_points_clicking_on_advertisements' => "个魔力值，如果他第一次点击某个广告。设为'0'来禁用此规则。<br /><b>注意</b>：一些广告服务（如Google Adsense）禁止站点激励用户点击广告的行为。",
	'head_save_advertisement_settings' => "保存广告设定",
	'row_enable_tooltip' => "允许悬浮提示",
	'text_enable_tooltip_note' => "是否允许用户使用悬浮提示功能。默认'是'。",
	'text_thirtypercentleech_chance_becoming' => "%的可能成为<b><font class='thirtypercent'>30%</font></b>。默认'0'。",
	'text_thirtypercentleech_will_become' => "<b><font class='thirtypercent'>30%</font></b>将变为",
	'text_thirtypercentleech_timeout_default' => "天。默认'普通'，'30'。",
	'row_site_logo' => "网站logo",
	'text_site_logo_note' => "网站logo图片文件。建议图片尺寸为220x70。如不填写，将使用文字。默认''。",
	'row_promotion_link_click' => "宣传链接点击",
	'text_promotion_link_note_one' => "个魔力值，如果他的宣传链接获得一次来自一个未记录的IP的点击。",
	'text_promotion_link_note_two' => "秒内最多奖励一次点击。将魔力值设为'0'来禁用宣传链接功能。默认'0'，'600'。",
	'row_promotion_link_example_image' => "宣传链接示例图片",
	'text_promotion_link_example_note' => "在<a href=\"promotionlink.php\"><b>宣传链接</b></a>介绍示例中的图片。<b>必须</b>使用相对地址，如'pic/prolink.png'.",
	'row_enable_nfo' => "启用NFO",
	'text_enable_nfo_note' => "默认'是'。全局NFO设定。",
	'row_web_analytics_code' => "网站统计代码",
	'text_web_analytics_code_note' => "填写由第三方（如Google Analytics）提供的网站统计代码。如无请留空。<br /><b>注意</b>：请确保代码安全可信。",
	'row_enable_email_notification' => "允许用户收取邮件提示",
	'text_email_notification_note' => "是否允许用户在收取新短讯、评论等时候收到邮件提示。",
	'text_users_get' => "首次升级至此等级的用户将获得",
	'text_invitations_default' => "个邀请名额。默认",
	'row_guest_visit_type' => "游客访问",
	'text_guest_visit_type_normal' => '正常',
	'text_guest_visit_type_static_page' => '展示指定静态页',
	'text_guest_visit_type_custom_content' => '展示自定义内容',
	'text_guest_visit_type_redirect' => '跳转指定 URL',
	'row_guest_visit_value_static_page' => '指定静态页',
	'row_guest_visit_value_custom_content' => '自定义内容',
	'row_guest_visit_value_redirect' => '指定 URL',
	'text_guest_visit_value_static_page' => '位于：resources/static-pages/ 目录下的文件',
	'row_login_type' => '登录方式',
	'text_login_type_normal' => '正常',
	'text_login_type_secret' => '秘密',
	'text_login_type_warning' => '当游客访问方式不为正常时，必须使用秘密登录才能登录',
	'row_login_secret' => '登录密钥',
	'text_login_secret_current' => '当前密钥',
	'text_login_url_with_secret' => '登录链接',
	'text_login_secret_regenerate_yes' => '重新生成(保存后会更新并延长有效期)',
	'text_login_secret_regenerate_no' => '保持当前(保存后不变)',
	'text_login_secret_lifetime' => '有效期',
	'text_login_secret_lifetime_unit' => '分钟',
	'row_login_secret_lifetime' => '登录密钥有效期',
	'text_login_secret_lifetime_deadline' => '当前密钥有效期至',
	'row_enable_technical_info' => '启用技术信息',
	'text_enable_technical_info' => "默认'否'。技术信息来自软件 <b><a href=\"https://mediaarea.net/en/MediaInfo\" target='_blank'>MediaInfo</a></b> Text 视图的结果",
    'row_sticky_first_level_background_color' => '一级置顶背景颜色',
    'text_sticky_first_level_background_color_note' => '一级置顶背景颜色，不设置则无背景色。',
    'row_sticky_second_level_background_color' => '二级置顶背景颜色',
    'text_sticky_second_level_background_color_note' => '二级置顶背景颜色，不设置则无背景色。',
    'row_download_support_passkey' => '支持 passkey 下载种子',
    'text_download_support_passkey_note' => '是否支持通过 passkey 下载种子（同时也需要种子 ID）。',
    'row_torrent_hr' => '设定种子 H&R',
    'text_torrent_hr_note' => '。将种子设置为参与 H&R 考察',
    'row_cancel_hr' => '消除 H&R',
    'text_cancel_hr_note' => "个魔力值，如果他需要消除一个 H&R。默认'10000'。",
);

?>
