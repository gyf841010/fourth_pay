-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: pay
-- ------------------------------------------------------
-- Server version	5.6.50-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pay_admin`
--

DROP TABLE IF EXISTS `pay_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(50) NOT NULL COMMENT '后台用户名',
  `password` varchar(32) NOT NULL COMMENT '后台用户密码',
  `groupid` tinyint(1) unsigned DEFAULT '0' COMMENT '用户组',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `google_secret_key` varchar(128) NOT NULL DEFAULT '' COMMENT '谷歌令牌密钥',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '手机号码',
  `session_random` varchar(50) NOT NULL DEFAULT '' COMMENT 'session随机字符串',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=508 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_admin`
--

LOCK TABLES `pay_admin` WRITE;
/*!40000 ALTER TABLE `pay_admin` DISABLE KEYS */;
INSERT INTO `pay_admin` VALUES (505,'taoke','e8b9f05805df33192fdf838e931f8f9e',1,1567404693,'TA3YEFYVW4QZORI6','','WdqwT2ueaLChWjNBD5J2XjtSLjTfmnNd');
/*!40000 ALTER TABLE `pay_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_apimoney`
--

DROP TABLE IF EXISTS `pay_apimoney`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_apimoney` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `payapiid` int(11) DEFAULT NULL,
  `money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `freezemoney` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
  `status` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_apimoney`
--

LOCK TABLES `pay_apimoney` WRITE;
/*!40000 ALTER TABLE `pay_apimoney` DISABLE KEYS */;
INSERT INTO `pay_apimoney` VALUES (10,6,207,18000.00,0.00,1);
/*!40000 ALTER TABLE `pay_apimoney` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_article`
--

DROP TABLE IF EXISTS `pay_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID',
  `groupid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '分组  0：所有 1：商户 2：代理',
  `title` varchar(300) NOT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1显示 0 不显示',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_article`
--

LOCK TABLES `pay_article` WRITE;
/*!40000 ALTER TABLE `pay_article` DISABLE KEYS */;
INSERT INTO `pay_article` VALUES (16,3,0,'客户告知书','<p></p><p>尊敬的商户朋友：  </p><p>           <br /></p><p>    本公司是一家正规的网络公司，是各大游戏充值卡发卡商，电商平台等中小型企业长期的合作伙伴；</p><p><br /></p><p>      本公司郑重告知，请各客户加强业务自审勿与违法违规的业务发生关联，比如涉黄、涉赌、涉及网络诈骗等；我公司一经发现有涉及违法违规的业务，我公司将把相关信息上报公安机关派驻我公司的网安警务室处理。        </p><p><br /></p><p style=\"text-align:right;\">请合作的客户知晓并认真审查业务 特此告知！  </p><p><br /></p><p style=\"text-align:right;\">2018/1/11 8:18:18</p>',1515717667,'',1,1563744064),(17,3,0,'收银台 商户收款码 使用说明','<p>如 商户收款码页面报错 请在</p><p>PHP 扩展里安装以下扩展</p><p><span>fileinfo</span></p><p><span>imagemagick</span></p>',1534324869,'系统升级公告',1,1563662418),(18,0,0,'20190721版本更新说明','<p><b>更新时间：20190721</b></p><p>前台安全机制增加 双重验证：短信和谷歌验证 可以自主选择验证方式</p><p>修正提现时间，现在可以在提现设置里自主选择任意时间。</p><p>增加系统设置栏目各个功能 需短信验证或谷歌验证。</p><p>修复后台数据清理 部分数据无法清理BUG。</p><p>优化订单金额小数点<span>限制为两位数</span>。</p><p>修改提现提醒方式 现在只在后台首页提示。</p><p><br /></p><p><b>更新时间：20190619</b></p><p>增加虚拟订单功能</p><p>修复平台LOGO无法上传BUG</p><p><b>更新时间：20190616</b></p><p>修复开启ssl后谷歌安全二维码无法显示BUG</p><p><b>更新时间：20190531</b></p><p>修复更改前台、后台路径后， 无法正常登陆bug</p><p>增加自动记录：下游上送数据，上游回调信息，无需在接口中改动。</p><p><b>更新时间：20190501</b></p><p>修复 <span>AJAX</span>跨域<span>攻击（重要！！！）</span></p><p><span>（可导致代付订单信息被篡改）</span></p><p><b>2019-04-20 </b><strong>v6.0 </strong></p><p><b>修复XSS攻击漏洞</b></p><p><b>修复前后台getshell漏洞</b></p><p><b>修复点击劫持漏洞</b></p><p><b>2019-03-26 </b><strong>v6.0 </strong></p><p>谷歌身份验证器无法使用BUG</p><p>已修复！前台后台均可正常验证</p><p>更加安全稳定！</p><p><b>2019-03-20 v6.0 （重大BUG）</b></p><p>后台管理权限账号 可提权获取服务器控制权</p><p>已修复！</p><p><b>2019-03-10 v6.0</b></p><p>修复不同权限后台登录提示 无权限BUG</p><p><b>2019-03-19 v6.0</b></p><p>更新商户中心 API帮助文档</p><p><b>2019-03-13 v6.0</b></p><p>更新商户中心UI 自适应手机浏览</p><p><br /></p><p>2019-03-10 <strong>v6.0</strong></p><p>更新前台模板一套 包含首页 注册页 登录页</p><p><br /></p>2019-02-17 <strong>v6.0</strong>修复结算方式为T0前台不显示费率修复后台设置运营费率不及时刷新<p>修复几处细节问题</p><p><br /></p>2018-12-05 <strong>v6.0</strong>修复单独设置商户提现规则<p>开启个人规则后无法关闭问题</p><p>修复几处细节问题</p>2018-11-24 <strong>v6.0</strong>修复单通道查询统计显示负数修复通道费率修改后不及时刷新<p>修复GOOGLE谷歌令牌验证几处BUG</p><p><br /></p>2018-11-18 <strong>v6.0</strong>优化完善商户中心 后台移动设备操作修复后台无法 冻结订单、解冻订单修复 导出xls文件乱码修复 统计、结算金额显示bug修复 缓存模块bug修复 商户提现无法输出json的bug<p>修复 阿里云短信模块</p><p><br /></p><p>2018-11-03 <strong>v5.8</strong></p>更新 账号轮询功能优化更新 管理后台根据用户结算周期类型结算更新 代付扩展字段添加BUG<p>增加 官方支付宝、微信、QQ钱包 对接接口</p><p><br /></p>2018-11-03 <strong>v5.6</strong>开放商户充值链接 可在后台选择开启或关闭更新 商户中心管理通道费率显示BUG优化商户管理UI 自适应手机操作修复 通道删除时的bug<p>修复 清理登录日志的bug</p><p><br /></p>2018-10-30 <strong>v5.6</strong>增加批量删除订单功能增加后台切换模板功能修复入金通道列表 费率显示BUG增加 检测http[s]网址头增加 后台订单分析/通道分析/代理分析/<p>修复 代理下级商户页面 翻页的bug</p><p><br /></p>2018-10-25 <strong>v5.6</strong>商户中心UI自适应全部移动设备，各类操作均可以在PC和移动设备上完成优化订单导出BUG，导出XLS 显示通道类别 不再显示 入金通道详细名称修复高级代理无法添加中级 普通代理BUG修复 某些页面自适应的bug更新 常用接口，易于修改和测试<p><br /></p><p><br /></p><p>功能新增列表：</p><p>1.异常订单显示，程序自动补发订单后的订单列表（无法自动补发的 可以在异常订单里快速查询到）</p><p>2. 手动订单系统（上游无补单API将无法使用该功能）</p><p>3. 模板管理（后台切换前台模板 共6套模板可供选择）</p><p>4. 用户分类修改添加管理</p><p>5. 在线升级（建议屏蔽 官方升级会自动锁定非法商业用户）</p><p>6. 版权所有（鸡肋，不用可以注释掉）</p><p>7.修复商户提现 后台提现通知语音提示</p><p>8.修复商户提现（阿里云短信API） 可定制不同的短信模板</p><p>9.修复商户代付API，已封堵SQL注入！</p><p>10.优化商户、代理中心、后台 所有UI 自适应手机访问和操作</p>',1539144000,'',1,1563743981),(19,0,0,'系统说明','<p>第四方支付 大数据版 API支付系统 支持轮询 代付API 全开源</p><p>系统的注意安装事项</p><p>1.Nginx 推荐 Tengine2.2.4(2.3.0)</p><p>2.MySQL 5.5</p><p>3.php 7.0+</p><p>4.宝塔控制台</p><p>自带8套模板 可在后台随意切换</p><p>自带已调试过的 上游API接口代码 100多个 免除您对接之忧。</p><p>以下支付平台接口均已测试  </p><p>可免费提供客户使用！</p><p>kuaikuaifu pop支付 Qpay</p><p>QQ钱包官方 微信支付官方 支付宝官方 </p><p>unpay 宝付 畅付云 新豆豆 多来米 </p><p>国付 国付宝   国通支付  国银合众 </p><p>虎付  环迅   汇达  汇通  九派  聚合融通 </p><p>开心支付  科软云  支付乐  百付  立刻支付  立客支付 </p><p>领胜支付  免签对接  免签约助手 </p><p>摩宝  蘑菇支付 浦发银行  </p><p>前海亿联 轻易付 如意金服 睿付快捷 睿付扫码 </p><p>扫呗支付  杉德  闪豆 商银信 生活圈 时时支付 </p><p>速汇付 随行付 天付宝 威富通 新希望  信付宝 </p><p>易宝 易畅付  易通银  聚优  畅优云</p><p>掌炅  智付  智能云   爰农支付 更多接口 持续整理中</p>',1540469492,'',1,1563661614);
/*!40000 ALTER TABLE `pay_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_attachment`
--

DROP TABLE IF EXISTS `pay_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_attachment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `filename` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_attachment`
--

LOCK TABLES `pay_attachment` WRITE;
/*!40000 ALTER TABLE `pay_attachment` DISABLE KEYS */;
INSERT INTO `pay_attachment` VALUES (83,5,'5d41cb255f2f9.png','Uploads/verifyinfo/5d41dcfed374b.png'),(82,5,'59afc4b290cbb.jpg','Uploads/verifyinfo/5d41dcfecdedc.jpg'),(81,5,'5d41c29a20a7a.jpg','Uploads/verifyinfo/5d41dcfec2d3b.jpg'),(80,5,'59b1ffd5a19ae.jpg','Uploads/verifyinfo/5d41db4a3db6a.jpg'),(79,5,'59afc5d5ca2b1.jpg','Uploads/verifyinfo/5d41db4a24981.jpg'),(78,5,'5d41cb255f2f9.png','Uploads/verifyinfo/5d41db49c9c1f.png'),(77,5,'59b12b3e5cb5b.jpg','Uploads/verifyinfo/5d41db49c70b8.jpg'),(76,5,'59afc4b290cbb.jpg','Uploads/verifyinfo/5d41db49c44e8.jpg'),(75,5,'5d41c29a20a7a.jpg','Uploads/verifyinfo/5d41db49c158a.jpg'),(74,5,'5d41cb255f2f9.png','Uploads/verifyinfo/5d41db04cfaba.png'),(73,5,'5d41c29a20a7a.jpg','Uploads/verifyinfo/5d41db04cca60.jpg'),(72,5,'5d41c29a20a7a.jpg','Uploads/verifyinfo/5d41da523c6a5.jpg');
/*!40000 ALTER TABLE `pay_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auth_error_log`
--

DROP TABLE IF EXISTS `pay_auth_error_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auth_error_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `auth_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0：商户登录 1：后台登录 2：商户短信验证 3：后台短信验证 4：谷歌令牌验证 5：支付密码验证 ',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auth_error_log`
--

LOCK TABLES `pay_auth_error_log` WRITE;
/*!40000 ALTER TABLE `pay_auth_error_log` DISABLE KEYS */;
INSERT INTO `pay_auth_error_log` VALUES (1,0,1,1648450244),(2,0,1,1648450250),(3,0,1,1648450256),(4,0,1,1648450261),(5,0,1,1648450314),(6,0,1,1648450347),(7,0,1,1648450460),(8,0,1,1648450485),(9,0,1,1648450649),(10,0,1,1648450815),(11,0,1,1648450816);
/*!40000 ALTER TABLE `pay_auth_error_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auth_group`
--

DROP TABLE IF EXISTS `pay_auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_manager` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1需要验证权限 0 不需要验证权限',
  `rules` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auth_group`
--

LOCK TABLES `pay_auth_group` WRITE;
/*!40000 ALTER TABLE `pay_auth_group` DISABLE KEYS */;
INSERT INTO `pay_auth_group` VALUES (1,'超级管理员',1,0,'1,133,2,3,51,4,57,5,55,56,58,59,6,44,52,53,48,70,54,7,8,60,61,62,9,63,64,65,66,10,67,68,69,11,12,79,80,81,82,83,84,85,86,87,88,89,90,91,93,94,95,96,97,98,99,100,101,120,13,14,15,92,16,73,76,77,78,17,46,121,18,19,71,75,20,72,74,22,21,23,114,115,24,25,26,125,127,130,134,27,28,108,129,29,102,30,103,106,107,119,104,105,109,110,111,128,31,32,33,34,35,36,37,38,39,113,40,112,41,42,45,47,116,122,117,123,118,124,137,138'),(2,'运营管理员',1,0,'1,133,3,51,4,57,5,55,56,59,6,44,52,70,54,12,79,80,81,82,83,84,85,86,87,93,94,98,99,13,14,15,92,73,76,77,78,46,18,19,71,22,23,24,33,34,35,36,37,38,39,113,40,112,41,42,45,47'),(3,'财务管理员',1,1,'1,133,27,29,102'),(4,'普通商户',1,1,'22,24'),(5,'普通代理商',1,1,'114,115');
/*!40000 ALTER TABLE `pay_auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auth_group_access`
--

DROP TABLE IF EXISTS `pay_auth_group_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auth_group_access`
--

LOCK TABLES `pay_auth_group_access` WRITE;
/*!40000 ALTER TABLE `pay_auth_group_access` DISABLE KEYS */;
INSERT INTO `pay_auth_group_access` VALUES (1,1),(2,1),(3,2),(504,1),(505,1);
/*!40000 ALTER TABLE `pay_auth_group_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auth_rule`
--

DROP TABLE IF EXISTS `pay_auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) DEFAULT '' COMMENT '图标',
  `menu_name` varchar(100) NOT NULL DEFAULT '' COMMENT '规则唯一标识Controller/action',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '菜单名称',
  `pid` tinyint(5) NOT NULL DEFAULT '0' COMMENT '菜单ID ',
  `is_menu` tinyint(1) unsigned DEFAULT '0' COMMENT '1:是主菜单 0否',
  `is_race_menu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1:是 0:不是',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auth_rule`
--

LOCK TABLES `pay_auth_rule` WRITE;
/*!40000 ALTER TABLE `pay_auth_rule` DISABLE KEYS */;
INSERT INTO `pay_auth_rule` VALUES (1,'fa fa-home','Index/index','管理首页',0,1,0,1,1,''),(2,'fa fa-cogs','System/#','系统设置',0,1,0,1,1,''),(3,'fa fa-cogs','System/base','基本设置',2,1,0,1,1,''),(4,'fa fa-envelope-o','System/email','邮件设置',2,1,0,1,1,''),(5,'fa fa-send','System/smssz','短信设置',2,1,0,1,1,''),(6,'fa fa-pencil-square-o','System/planning','计划任务',2,1,0,1,1,''),(7,'fa fa-user-circle','Admin/#','管理员管理',0,1,0,1,1,''),(8,'fa fa-vcard ','Admin/index','管理员信息',7,1,0,1,1,''),(9,'fa fa-life-ring','Auth/index','角色配置',7,1,0,1,1,''),(10,'fa fa-universal-access','Menu/index','权限配置',7,1,0,1,1,''),(11,'fa fa-users','User/#','用户管理',0,1,0,1,1,''),(12,'fa fa-user','User/index?status=1&authorized=1','已认证用户',11,1,0,1,1,''),(13,'fa fa-user-o','User/index?status=1&authorized=2','待认证用户',11,1,0,1,1,''),(14,'fa fa-user-plus','User/index?status=1&authorized=0','未认证用户',11,1,0,1,1,''),(15,'fa fa-user-times','User/index?status=0','冻结用户',11,1,0,1,1,''),(16,'fa fa-gift','User/invitecode','邀请码',11,1,0,1,1,''),(17,'fa fa-address-book','User/loginrecord','登录记录',11,1,0,1,1,''),(18,'fa fa-user-circle','Agent/#','代理管理',0,1,0,1,1,''),(19,'fa fa-signing','User/agentList','代理列表',18,1,0,1,1,''),(20,'fa fa-signing','Order/changeRecord?bank=9','佣金记录',18,1,0,1,1,''),(21,'fa fa-sellsy','Order/dfApiOrderList','代付Api订单',22,1,0,1,1,''),(22,'fa fa-reorder','User/#','订单管理',0,1,0,1,1,''),(23,'fa fa-indent','Order/changeRecord','流水记录',22,1,0,1,1,''),(24,'fa fa-thumbs-up','Order/index?status=1or2','成功订单',22,1,0,1,1,''),(25,'fa fa-thumbs-down','Order/index?status=0','未支付订单',22,1,0,1,1,''),(26,'fa fa-hand-o-right','Order/index?status=1','通知异常订单',22,1,0,1,1,''),(27,'fa fa-user-secret','Withdrawal','提款管理',0,1,0,1,1,''),(28,'fa fa-wrench','Withdrawal/setting','提款设置',27,1,0,1,1,''),(29,'fa fa-asl-interpreting','Withdrawal/index','手动结算',27,1,0,1,1,''),(30,'fa fa-window-restore','Withdrawal/payment','代付结算',27,1,0,1,1,''),(31,'fa fa-bank','Channel/#','通道管理',0,1,0,1,1,''),(32,'fa fa-product-hunt','Channel/index','入金渠道设置',31,1,0,1,1,''),(33,'fa fa-sitemap','Channel/product','支付产品设置',31,1,0,1,1,''),(34,'fa fa-sliders','PayForAnother/index','代付渠道设置',31,1,0,1,1,''),(35,'fa fa-book','Content/#','文章管理',0,1,0,1,1,''),(36,'fa fa-tags','Content/category','栏目列表',35,1,0,1,1,''),(37,'fa fa-list-alt','Content/article','文章列表',35,1,0,1,1,''),(38,'fa fa-line-chart','Statistics/#','财务分析',0,1,0,1,1,''),(39,'fa fa-bar-chart-o','Statistics/index','交易统计',38,1,0,1,1,''),(40,'fa fa-area-chart','Statistics/userFinance','商户交易统计',38,1,0,1,1,''),(41,'fa fa-industry','Statistics/userFinance?groupid=agent','代理商交易统计',38,1,0,1,1,''),(42,'fa fa-pie-chart','Statistics/channelFinance','接口交易统计',38,1,0,1,1,''),(43,'fa fa-cubes','Template/index','模板设置',2,1,0,1,0,''),(44,'fa fa-qq','System/mobile','手机设置',2,1,0,1,1,''),(45,'fa fa-signal','Statistics/chargeRank','充值排行榜',38,1,0,1,1,''),(46,'fa fa-first-order','Deposit/index','投诉保证金设置',11,1,0,1,1,''),(47,'fa fa-asterisk','Statistics/complaintsDeposit','投诉保证金统计',38,1,0,1,1,''),(48,'fa fa-magnet','System/clearData','数据清理',2,1,0,1,1,''),(51,'','System/SaveBase','保存设置',3,0,0,1,1,''),(52,'','System/BindMobileShow','绑定手机号码',44,0,0,1,1,''),(53,'','System/editMobileShow','手机修改',44,0,0,1,1,''),(54,'fa fa-wrench','System/editPassword','修改密码',2,1,0,1,1,''),(55,'','System/editSmstemplate','短信模板',5,0,0,1,1,''),(56,'','System/saveSmstemplate','保存短信模板',5,0,0,1,1,''),(57,'','System/saveEmail','邮件保存',4,0,0,1,1,''),(58,'','System/testMobile','测试短信',5,0,0,1,1,''),(59,'','System/deleteAdmin','删除短信模板',5,0,0,1,1,''),(60,'','Admin/addAdmin','管理员添加',8,0,0,1,1,''),(61,'','Admin/editAdmin','管理员修改',8,0,0,1,1,''),(62,'','Admin/deleteAdmin','管理员删除',8,0,0,1,1,''),(63,'','Auth/addGroup','添加角色',9,0,0,1,1,''),(64,'','Auth/editGroup','修改角色',9,0,0,1,1,''),(65,'','Auth/giveRole','选择角色',9,0,0,1,1,''),(66,'','Auth/ruleGroup','分配权限',9,0,0,1,1,''),(67,'','Menu/addMenu','添加菜单',10,0,0,1,1,''),(68,'','Menu/editMenu','修改菜单',10,0,0,1,1,''),(69,'','Menu/delMenu','删除菜单',10,0,0,1,1,''),(70,'','System/clearDataSend','数据清理提交',48,0,0,1,1,''),(71,'','User/addAgentCate','代理级别',19,0,0,1,1,''),(72,'','User/saveAgentCate','保存代理级别',18,0,0,1,1,''),(73,'','User/addInvitecode','添加激活码',16,0,0,1,1,''),(74,'','User/EditAgentCate','修改代理分类',18,0,0,1,1,''),(75,'','User/deleteAgentCate','删除代理分类',19,0,0,1,1,''),(76,'','User/setInvite','邀请码设置',16,0,0,1,1,''),(77,'','User/addInvite','创建邀请码',16,0,0,1,1,''),(78,'','User/delInvitecode','删除邀请码',16,0,0,1,1,''),(79,'','User/editUser','用户编辑',12,0,0,1,1,''),(80,'','User/changeuser','修改状态',12,0,0,1,1,''),(81,'','User/authorize','用户认证',12,0,0,1,1,''),(82,'','User/usermoney','用户资金管理',12,0,0,1,1,''),(83,'','User/userWithdrawal','用户提现设置',12,0,0,1,1,''),(84,'','User/userRateEdit','用户费率设置',12,0,0,1,1,''),(85,'','User/editPassword','用户密码修改',12,0,0,1,1,''),(86,'','User/editStatus','用户状态修改',12,0,0,1,1,''),(87,'','User/delUser','用户删除',12,0,0,1,1,''),(88,'','User/thawingFunds','T1解冻任务管理',12,0,0,1,1,''),(89,'','User/exportuser','导出用户',12,0,0,1,1,''),(90,'','User/editAuthoize','修改用户认证',12,0,0,1,1,''),(91,'','User/getRandstr','切换商户密钥',12,0,0,1,1,''),(92,'','User/suoding','用户锁定',15,0,0,1,1,''),(93,'','User/editbankcard','银行卡管理',12,0,0,1,1,''),(94,'','User/saveUser','添加用户',12,0,0,1,1,''),(95,'','User/saveUserProduct','保存用户产品',12,0,0,1,1,''),(96,'','User/saveUserRate','保存用户费率',12,0,0,1,1,''),(97,'','User/edittongdao','编辑通道',12,0,0,1,1,''),(98,'','User/frozenMoney','用户资金冻结',12,0,0,1,1,''),(99,'','User/unfrozenHandles','T1资金解冻',12,0,0,1,1,''),(100,'','User/frozenOrder','冻结订单列表',12,0,0,1,1,''),(101,'','User/frozenHandles','T1订单解冻展示',12,0,0,1,1,''),(102,'','Withdrawal/editStatus','操作状态',29,0,0,1,1,''),(103,'','Withdrawal/editwtStatus','操作订单状态',30,0,0,1,1,''),(104,'','Withdrawal/exportorder','导出数据',27,0,0,1,1,''),(105,'','Withdrawal/editwtAllStatus','批量修改提款状态',27,0,0,1,1,''),(106,'','Withdrawal/exportweituo','导出委托提现',30,0,0,1,1,''),(107,'','Payment/index','提交上游',30,0,0,1,1,''),(108,'','Withdrawal/saveWithdrawal','保存设置',28,0,0,1,1,''),(109,'','Withdrawal/AddHoliday','添加假日',27,0,0,1,1,''),(110,'','Withdrawal/settimeEdit','编辑提款时间',27,0,0,1,1,''),(111,'','Withdrawal/delHoliday','删除节假日',27,0,0,1,1,''),(112,'','Statistics/exportorder','订单数据导出',40,0,0,1,1,''),(113,'','Statistics/details','查看详情',39,0,0,1,1,''),(114,'','Order/exportorder','订单导出',23,0,0,1,1,''),(115,'','Order/exceldownload','记录导出',23,0,0,1,1,''),(116,'fa fa-area-chart','Statistics/platformReport','平台报表',38,1,0,1,1,''),(117,'fa fa-area-chart','Statistics/merchantReport','商户报表',38,1,0,1,1,''),(118,'fa fa-area-chart','Statistics/agentReport','代理报表',38,1,0,1,1,''),(119,'','Withdrawal/submitDf','代付提交',30,0,0,1,1,''),(120,'','User/editUserProduct','分配用户通道',12,0,0,1,1,''),(121,'fa fa-wrench','Transaction/index','风控设置',11,1,0,1,1,''),(122,'','Statistics/exportPlatform','导出平台报表',116,0,0,1,1,''),(123,'','Statistics/exportMerchant','导出商户报表',117,0,0,1,1,''),(124,'','Statistics/exportAgent','导出代理报表',118,0,0,1,1,''),(125,'','Order/show','查看订单',22,0,0,1,1,''),(126,'fa fa-cog','Withdrawal/checkNotice','提现申请声音提示',2,0,0,1,1,''),(127,'fa fa-smile-o','Order/index','全部订单',22,1,0,1,1,''),(128,'','Withdrawal/rejectAllDf','批量驳回代付',27,0,0,1,1,''),(129,'','User/saveWithdrawal','保存用户提款设置',28,0,0,1,1,''),(130,'fa fa-snowflake-o','Order/frozenOrder','冻结订单',22,1,0,1,1,''),(133,'fa fa-heartbeat','Index/main','后台首页',1,1,0,1,1,''),(134,'fa fa-smile-o','Order/wsrylist','虚拟订单',22,1,0,1,1,''),(137,'fa fa-asterisk','Statistics/userAnalysis','平台总报表',38,1,0,1,1,''),(138,'fa fa-asterisk','Statistics/frozenMoney','冻结资金分析',38,1,0,1,1,'');
/*!40000 ALTER TABLE `pay_auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auto_df_log`
--

DROP TABLE IF EXISTS `pay_auto_df_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auto_df_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `df_id` int(11) NOT NULL DEFAULT '0' COMMENT '代付ID',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型：1提交 2查询',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '结果 0：提交失败 1：提交成功 2：代付成功 3：代付失败',
  `msg` varchar(255) DEFAULT '' COMMENT '描述',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auto_df_log`
--

LOCK TABLES `pay_auto_df_log` WRITE;
/*!40000 ALTER TABLE `pay_auto_df_log` DISABLE KEYS */;
INSERT INTO `pay_auto_df_log` VALUES (1,19,2,0,'代付通道文件不存在',1537373341),(2,19,2,1,NULL,1537373522),(3,19,2,1,NULL,1537373701),(4,19,2,2,NULL,1537373881);
/*!40000 ALTER TABLE `pay_auto_df_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_auto_unfrozen_order`
--

DROP TABLE IF EXISTS `pay_auto_unfrozen_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_auto_unfrozen_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `freeze_money` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
  `unfreeze_time` int(11) NOT NULL DEFAULT '0' COMMENT '计划解冻时间',
  `real_unfreeze_time` int(11) NOT NULL DEFAULT '0' COMMENT '实际解冻时间',
  `is_pause` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否暂停解冻 0正常解冻 1暂停解冻',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '解冻状态 0未解冻 1已解冻',
  `create_at` int(11) NOT NULL COMMENT '记录创建时间',
  `update_at` int(11) NOT NULL COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  KEY `idx_unfreezeing` (`status`,`is_pause`,`unfreeze_time`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='投诉保证金余额';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_auto_unfrozen_order`
--

LOCK TABLES `pay_auto_unfrozen_order` WRITE;
/*!40000 ALTER TABLE `pay_auto_unfrozen_order` DISABLE KEYS */;
INSERT INTO `pay_auto_unfrozen_order` VALUES (1,180751041,89.00,0,0,0,0,1534428974,1534428974),(2,5,1000.00,1547111100,0,0,0,1547110860,1547110860);
/*!40000 ALTER TABLE `pay_auto_unfrozen_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_bankcard`
--

DROP TABLE IF EXISTS `pay_bankcard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_bankcard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `bankname` varchar(100) NOT NULL COMMENT '银行名称',
  `subbranch` varchar(100) NOT NULL COMMENT '支行名称',
  `accountname` varchar(100) NOT NULL COMMENT '开户名',
  `cardnumber` varchar(100) NOT NULL COMMENT '银行卡号',
  `province` varchar(100) NOT NULL COMMENT '所属省',
  `city` varchar(100) NOT NULL COMMENT '所属市',
  `ip` varchar(100) DEFAULT NULL COMMENT '上次修改IP',
  `ipaddress` varchar(300) DEFAULT NULL COMMENT 'IP地址',
  `alias` varchar(255) DEFAULT '' COMMENT '备注',
  `isdefault` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否默认 1是 0 否',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `IND_UID` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_bankcard`
--

LOCK TABLES `pay_bankcard` WRITE;
/*!40000 ALTER TABLE `pay_bankcard` DISABLE KEYS */;
INSERT INTO `pay_bankcard` VALUES (1,1,'中国工商银行','北京支行','测试','123456789','北京','北京',NULL,NULL,'测试',0,0);
/*!40000 ALTER TABLE `pay_bankcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_blockedlog`
--

DROP TABLE IF EXISTS `pay_blockedlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_blockedlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(100) NOT NULL COMMENT '订单号',
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '冻结金额',
  `thawtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '解冻时间',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '商户支付通道',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1 解冻 0 冻结',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='资金冻结待解冻记录';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_blockedlog`
--

LOCK TABLES `pay_blockedlog` WRITE;
/*!40000 ALTER TABLE `pay_blockedlog` DISABLE KEYS */;
INSERT INTO `pay_blockedlog` VALUES (1,'20181205193204525254',31,1.00,1544026681,902,1544009548,1),(2,'20181215143252524952',36,93.00,1544894873,902,1544855588,0),(3,'20181215143611985151',36,93.00,1544894671,902,1544855787,0),(4,'20181215143549534899',36,46.50,1544891062,902,1544855795,0),(5,'20181215143921575610',39,28.00,1544894261,902,1544855998,0),(6,'20181226153939981005',5,1.00,1545843314,903,1545811168,0),(7,'20181226161033575410',5,1.00,1545841045,903,1545811862,0),(8,'20181226161522979756',5,1.00,1545841231,903,1545812139,0),(9,'20181226183612995598',5,1.00,1545846948,903,1545820635,0),(10,'20190105205346975551',5,8000.00,1546705950,903,1546692866,0),(11,'20190105195044521011',5,0.80,1546790835,903,1546718751,0),(12,'20181226145311555710',5,40.00,1550422014,903,1550413449,0),(13,'20181226145051985750',5,40.00,1555086803,903,1555070185,0);
/*!40000 ALTER TABLE `pay_blockedlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_browserecord`
--

DROP TABLE IF EXISTS `pay_browserecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_browserecord` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `articleid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_browserecord`
--

LOCK TABLES `pay_browserecord` WRITE;
/*!40000 ALTER TABLE `pay_browserecord` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_browserecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_category`
--

DROP TABLE IF EXISTS `pay_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '父级ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1开启 0关闭',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='文章栏目';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_category`
--

LOCK TABLES `pay_category` WRITE;
/*!40000 ALTER TABLE `pay_category` DISABLE KEYS */;
INSERT INTO `pay_category` VALUES (1,'最新资讯',0,1),(2,'公司新闻',0,1),(3,'公告通知',1,1),(4,'站内公告',3,1),(5,'公司新闻',3,1);
/*!40000 ALTER TABLE `pay_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_channel`
--

DROP TABLE IF EXISTS `pay_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_channel` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '供应商通道ID',
  `code` varchar(200) DEFAULT NULL COMMENT '供应商通道英文编码',
  `title` varchar(200) DEFAULT NULL COMMENT '供应商通道名称',
  `mch_id` varchar(100) DEFAULT NULL COMMENT '商户号',
  `signkey` varchar(500) DEFAULT NULL COMMENT '签文密钥',
  `appid` varchar(100) DEFAULT NULL COMMENT '应用APPID',
  `appsecret` varchar(100) DEFAULT NULL COMMENT '安全密钥',
  `gateway` varchar(300) DEFAULT NULL COMMENT '网关地址',
  `notify_ip` text COMMENT '允许回调IP',
  `pagereturn` varchar(255) DEFAULT NULL COMMENT '页面跳转网址',
  `serverreturn` varchar(255) DEFAULT NULL COMMENT '服务器通知网址',
  `defaultrate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '下家费率',
  `fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '封顶手续费',
  `rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '银行费率',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上次更改时间',
  `unlockdomain` varchar(100) NOT NULL COMMENT '防封域名',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1开启 0关闭',
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '渠道类型: 1 微信扫码 2 微信H5 3 支付宝扫码 4 支付宝H5 5网银跳转 6网银直连 7百度钱包 8 QQ钱包 9 京东钱包',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `paying_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当天交易金额',
  `all_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当天上游可交易量',
  `last_paying_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后交易时间',
  `min_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最小交易额',
  `max_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最大交易额',
  `control_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '风控状态:0否1是',
  `offline_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '通道上线状态:0已下线，1上线',
  `t0defaultrate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0运营费率',
  `t0fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0封顶手续费',
  `t0rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0成本费率',
  `gudingmoney` varchar(800) DEFAULT NULL COMMENT '固定金额列表',
  `iphei` varchar(3000) DEFAULT NULL,
  `fudong_status` int(1) DEFAULT '0' COMMENT '浮动金额开关',
  `fudong_money` int(2) DEFAULT NULL COMMENT '浮动金额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COMMENT='供应商列表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_channel`
--

LOCK TABLES `pay_channel` WRITE;
/*!40000 ALTER TABLE `pay_channel` DISABLE KEYS */;
INSERT INTO `pay_channel` VALUES (61,'Ddzzzbj','猪八戒微信话费30,50,100,200','','','','','916','','','',0.0300,0.0300,0.0200,1598761665,'',0,2,0,0,0.00,0.00,0,1.00,3000.00,0,1,0.0300,0.0300,0.0200,'','',0,NULL),(70,'Mymapay','小志码支付当面付','','','','','','222.186.150.111,122.238.105.32','','',0.0000,0.0000,0.0000,1597817333,'',1,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,'','',0,NULL),(72,'Mymapay','支付宝当面付(码支付)','','','','','','','','',0.0000,0.0000,0.0000,1592109989,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(75,'Hbkhuafei','Hbk话费支付宝','','','','','8','','','',0.0000,0.0000,0.0000,1592119561,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(79,'Xiaolongxia','xiaolongxia','','','','','908','','','',0.0000,0.0000,0.0000,1595952173,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(83,'Mygemapay','自己支付宝转帐','','','','','alipay','','','',0.0000,0.0000,0.0000,1596854912,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(84,'Weimo','HBK淘宝现金红包通道','','','','','15','121.196.196.75,103.216.153.19,47.75.61.73','','',0.0000,0.0000,0.0000,1599293993,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(88,'Demo','测试用的，过两天再删','','','','','e2345','','','',0.0000,0.0000,0.0000,1601312062,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,NULL),(91,'Boss','BOSS转卡','','','','','','','','',0.0000,0.0000,0.0000,1604247474,'',0,4,0,0,0.00,0.00,0,200.00,30000.00,0,1,0.0000,0.0000,0.0000,'','1.85.217.25,220.202.145.225,36.184.7.217,125.124.108.54,223.104.246.149,113.15.136.242,221.218.142.146,112.96.198.7,112.224.19.199,223.104.210.179,58.22.113.148,101.247.210.41,124.240.31.207,117.136.107.143,221.207.37.54,223.104.108.150,222.83.141.146,117.136.75.153,223.104.102.243,36.4.156.14,111.41.231.3,117.136.100.98,27.156.187.205,120.32.119.36,60.13.166.237,223.104.9.155,180.130.2.160,117.136.33.46,117.136.84.63,124.160.214.178,112.192.255.47,183.195.3.156,223.104.246.72,117.136.67.25,117.182.226.180,117.136.0.16,117.136.50.197,101.71.110.84,183.92.248.158,183.3.227.102,171.36.162.128,117.136.90.111,117.24.196.47,112.17.241.76,117.157.168.218,223.104.101.200,14.117.179.225,112.36.89.210,106.122.102.69,106.122.88.227,140.243.238.235',0,0),(95,'Xiaozhi','支转卡码商小志','','','','','3','','','',0.0000,0.0000,0.0000,1605803677,'',1,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(97,'Zbjwxh5','测试猪八戒的通道','','','','','','','','',0.0000,0.0000,0.0000,1606578334,'',0,2,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(100,'Hfkm','话费卡密100,200,300','','','','','985','','','',0.0000,0.0000,0.0000,1607235559,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(101,'Daifu','代付系统测试','','','','','','','','',0.0000,0.0000,0.0000,1607518809,'',0,2,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(105,'Xiaolongxia','测试通道，一会删除','','','','','','','','',0.0000,0.0000,0.0000,1610712810,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(106,'Hxpay','幻兮支付宝扫码','','','','','','','','',0.0000,0.0000,0.0000,1612622150,'',0,3,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(107,'Jinshuo','金硕测试','','','','','','','','',0.0000,0.0000,0.0000,1616034949,'',0,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0),(108,'Dingdian','顶点免签支付宝','','','','','0','47.75.119.177','','',0.0000,0.0000,0.0000,1648621409,'',1,4,0,0,0.00,0.00,0,0.00,0.00,0,1,0.0000,0.0000,0.0000,NULL,NULL,0,0);
/*!40000 ALTER TABLE `pay_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_channel_account`
--

DROP TABLE IF EXISTS `pay_channel_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_channel_account` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '供应商通道账号ID',
  `channel_id` smallint(6) unsigned NOT NULL COMMENT '通道id',
  `mch_id` varchar(100) DEFAULT NULL COMMENT '商户号',
  `signkey` varchar(500) DEFAULT NULL COMMENT '签文密钥',
  `appid` varchar(100) DEFAULT NULL COMMENT '应用APPID',
  `appsecret` varchar(2500) DEFAULT NULL COMMENT '安全密钥',
  `defaultrate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '下家费率',
  `fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '封顶手续费',
  `rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '银行费率',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上次更改时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1开启 0关闭',
  `title` varchar(100) DEFAULT NULL COMMENT '账户标题',
  `weight` tinyint(2) DEFAULT NULL COMMENT '轮询权重',
  `custom_rate` tinyint(1) DEFAULT NULL COMMENT '是否自定义费率',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始交易时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `last_paying_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后一笔交易时间',
  `paying_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当天交易金额',
  `all_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单日可交易金额',
  `max_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔交易最大金额',
  `min_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔交易最小金额',
  `offline_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '上线状态-1上线,0下线',
  `control_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '风控状态-0不风控,1风控中',
  `is_defined` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否自定义:1-是,0-否',
  `unit_frist_paying_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间第一笔交易时间',
  `unit_paying_number` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '单时间交易笔数',
  `unit_paying_amount` decimal(11,0) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间交易金额',
  `unit_interval` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间数值',
  `time_unit` char(1) NOT NULL DEFAULT 's' COMMENT '限制时间单位',
  `unit_number` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间次数',
  `unit_all_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单位时间金额',
  `t0defaultrate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0运营费率',
  `t0fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0封顶手续费',
  `t0rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0成本费率',
  `unlockdomain` varchar(255) NOT NULL COMMENT '防封域名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='供应商账号列表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_channel_account`
--

LOCK TABLES `pay_channel_account` WRITE;
/*!40000 ALTER TABLE `pay_channel_account` DISABLE KEYS */;
INSERT INTO `pay_channel_account` VALUES (1,101,'1213','','','',0.0000,0.0000,0.0000,1648448261,1,'ceshi',1,0,0,0,0,0.00,0.00,0.00,0.00,0,0,0,0,0,0,0,'s',0,0.00,0.0000,0.0000,0.0000,''),(2,95,'2612','SV0LHAVO','','',0.0000,0.0000,0.0000,1648605295,1,'测试',1,0,0,0,0,0.00,0.00,0.00,0.00,0,0,0,0,0,0,0,'s',0,0.00,0.0000,0.0000,0.0000,''),(3,70,'2612','SV0LHAVO','','',0.0000,0.0000,0.0000,1648605398,1,'码支付测试',1,0,0,0,0,0.00,0.00,0.00,0.00,0,0,0,0,0,0,0,'s',0,0.00,0.0000,0.0000,0.0000,''),(4,108,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','','',0.0000,0.0000,0.0000,1648608267,1,'顶点免签测试账户',1,0,0,0,0,0.00,0.00,0.00,0.00,0,0,0,0,0,0,0,'s',0,0.00,0.0000,0.0000,0.0000,'');
/*!40000 ALTER TABLE `pay_channel_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_complaints_deposit`
--

DROP TABLE IF EXISTS `pay_complaints_deposit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_complaints_deposit` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `pay_orderid` varchar(100) NOT NULL DEFAULT '0' COMMENT '系统订单号',
  `out_trade_id` varchar(50) NOT NULL DEFAULT '' COMMENT '下游订单号',
  `freeze_money` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '冻结保证金额',
  `unfreeze_time` int(11) NOT NULL DEFAULT '0' COMMENT '计划解冻时间',
  `real_unfreeze_time` int(11) NOT NULL DEFAULT '0' COMMENT '实际解冻时间',
  `is_pause` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否暂停解冻 0正常解冻 1暂停解冻',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '解冻状态 0未解冻 1已解冻',
  `create_at` int(11) NOT NULL COMMENT '记录创建时间',
  `update_at` int(11) NOT NULL COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  KEY `idx_unfreezeing` (`status`,`is_pause`,`unfreeze_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投诉保证金余额';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_complaints_deposit`
--

LOCK TABLES `pay_complaints_deposit` WRITE;
/*!40000 ALTER TABLE `pay_complaints_deposit` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_complaints_deposit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_complaints_deposit_rule`
--

DROP TABLE IF EXISTS `pay_complaints_deposit_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_complaints_deposit_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `is_system` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否系统规则 1是 0否',
  `ratio` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '投诉保证金比例（百分比）',
  `freeze_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '冻结时间（秒）',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '规则是否开启 1开启 0关闭',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='投诉保证金规则表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_complaints_deposit_rule`
--

LOCK TABLES `pay_complaints_deposit_rule` WRITE;
/*!40000 ALTER TABLE `pay_complaints_deposit_rule` DISABLE KEYS */;
INSERT INTO `pay_complaints_deposit_rule` VALUES (1,180586943,1,0.00,0,0),(2,1,0,0.00,0,0),(3,17,0,0.00,0,0),(4,5,0,0.00,0,0),(5,36,0,30.00,86400,1);
/*!40000 ALTER TABLE `pay_complaints_deposit_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_df_api_order`
--

DROP TABLE IF EXISTS `pay_df_api_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_df_api_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `trade_no` varchar(30) NOT NULL DEFAULT '' COMMENT '平台订单号',
  `out_trade_no` varchar(30) NOT NULL DEFAULT '' COMMENT '商户订单号',
  `money` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `bankname` varchar(100) NOT NULL DEFAULT '' COMMENT '银行名称',
  `subbranch` varchar(100) NOT NULL DEFAULT '' COMMENT '支行名称',
  `accountname` varchar(100) NOT NULL DEFAULT '' COMMENT '开户名',
  `cardnumber` varchar(100) NOT NULL DEFAULT '' COMMENT '银行卡号',
  `province` varchar(100) NOT NULL DEFAULT '' COMMENT '所属省',
  `city` varchar(100) NOT NULL DEFAULT '' COMMENT '所属市',
  `ip` varchar(100) DEFAULT '' COMMENT 'IP地址',
  `check_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0：待审核 1：已提交后台审核 2：审核驳回',
  `extends` text COMMENT '扩展字段',
  `df_id` int(11) NOT NULL DEFAULT '0' COMMENT '代付ID',
  `notifyurl` varchar(255) DEFAULT '' COMMENT '异步通知地址',
  `reject_reason` varchar(255) NOT NULL DEFAULT '' COMMENT '驳回原因',
  `check_time` int(11) NOT NULL DEFAULT '0' COMMENT '审核时间',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `df_charge_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '代付API扣除手续费方式，0：从到账金额里扣，1：从商户余额里扣',
  PRIMARY KEY (`id`),
  KEY `IND_UID` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_df_api_order`
--

LOCK TABLES `pay_df_api_order` WRITE;
/*!40000 ALTER TABLE `pay_df_api_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_df_api_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_email`
--

DROP TABLE IF EXISTS `pay_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `smtp_host` varchar(300) DEFAULT NULL,
  `smtp_port` varchar(300) DEFAULT NULL,
  `smtp_user` varchar(300) DEFAULT NULL,
  `smtp_pass` varchar(300) DEFAULT NULL,
  `smtp_email` varchar(300) DEFAULT NULL,
  `smtp_name` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_email`
--

LOCK TABLES `pay_email` WRITE;
/*!40000 ALTER TABLE `pay_email` DISABLE KEYS */;
INSERT INTO `pay_email` VALUES (1,'smtp.163.com','465','17000000000@163.com','xa811121','17000000000@163.com','聚合支付客服');
/*!40000 ALTER TABLE `pay_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_invitecode`
--

DROP TABLE IF EXISTS `pay_invitecode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_invitecode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invitecode` varchar(32) NOT NULL,
  `fmusernameid` int(11) unsigned NOT NULL DEFAULT '0',
  `syusernameid` int(11) NOT NULL DEFAULT '0',
  `regtype` tinyint(1) unsigned NOT NULL DEFAULT '4' COMMENT '用户组 4 普通用户 5 代理商',
  `fbdatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `yxdatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `sydatetime` int(11) unsigned DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '邀请码状态 0 禁用 1 未使用 2 已使用',
  `is_admin` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否管理员添加',
  PRIMARY KEY (`id`),
  UNIQUE KEY `invitecode` (`invitecode`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_invitecode`
--

LOCK TABLES `pay_invitecode` WRITE;
/*!40000 ALTER TABLE `pay_invitecode` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_invitecode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_inviteconfig`
--

DROP TABLE IF EXISTS `pay_inviteconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_inviteconfig` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invitezt` tinyint(1) unsigned DEFAULT '1',
  `invitetype2number` int(11) NOT NULL DEFAULT '20',
  `invitetype2ff` smallint(6) NOT NULL DEFAULT '1',
  `invitetype5number` int(11) NOT NULL DEFAULT '20',
  `invitetype5ff` smallint(6) NOT NULL DEFAULT '1',
  `invitetype6number` int(11) NOT NULL DEFAULT '20',
  `invitetype6ff` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_inviteconfig`
--

LOCK TABLES `pay_inviteconfig` WRITE;
/*!40000 ALTER TABLE `pay_inviteconfig` DISABLE KEYS */;
INSERT INTO `pay_inviteconfig` VALUES (1,0,0,0,10,0,0,0);
/*!40000 ALTER TABLE `pay_inviteconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_loginrecord`
--

DROP TABLE IF EXISTS `pay_loginrecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_loginrecord` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `logindatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loginip` varchar(100) NOT NULL,
  `loginaddress` varchar(300) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型：0：前台用户 1：后台用户',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_loginrecord`
--

LOCK TABLES `pay_loginrecord` WRITE;
/*!40000 ALTER TABLE `pay_loginrecord` DISABLE KEYS */;
INSERT INTO `pay_loginrecord` VALUES (1,505,'2022-03-28 06:28:55','61.185.128.13','陕西省安康市',1),(2,505,'2022-03-28 06:33:18','61.185.128.13','陕西省安康市',1),(3,1,'2022-03-28 07:00:29','61.185.128.13','陕西-安康',0),(4,1,'2022-03-28 07:04:04','117.85.77.158','江苏-无锡',0),(5,1,'2022-03-28 07:06:36','117.85.77.158','江苏-无锡',0),(6,1,'2022-03-28 07:08:44','117.85.77.158','江苏-无锡',0),(7,1,'2022-03-28 07:36:03','61.172.17.203','上海-上海',0),(8,1,'2022-03-28 07:44:05','61.185.128.13','陕西-安康',0),(9,1,'2022-03-28 08:33:22','61.185.128.13','陕西-安康',0),(10,505,'2022-03-29 02:12:08','47.75.119.177','加拿大',1),(11,1,'2022-03-29 02:53:37','47.75.119.177','香港-',0),(12,1,'2022-03-29 03:01:41','47.75.119.177','香港-',0),(13,505,'2022-03-29 03:16:38','47.75.119.177','加拿大',1),(14,505,'2022-03-29 03:18:24','47.75.119.177','加拿大',1),(15,1,'2022-03-29 03:28:25','47.75.119.177','香港-',0),(16,1,'2022-03-29 06:12:03','47.57.189.17','香港-',0),(17,1,'2022-03-29 06:54:14','47.75.119.177','香港-',0),(18,505,'2022-03-29 07:05:33','47.57.189.17','加拿大',1),(19,505,'2022-03-29 07:45:36','47.57.189.17','加拿大',1),(20,505,'2022-03-30 07:58:01','94.74.103.155','乌克兰',1),(21,505,'2022-03-30 08:47:35','47.57.189.17','加拿大',1),(22,1,'2022-03-30 14:44:20','1.85.142.35','陕西-安康',0),(23,505,'2022-03-31 07:12:37','61.185.128.13','陕西省安康市',1),(24,505,'2022-03-31 07:17:31','61.185.128.13','陕西省安康市',1),(25,505,'2022-03-31 07:33:02','47.57.189.17','加拿大',1),(26,1,'2022-04-01 01:58:25','47.75.119.177','香港-',0),(27,505,'2022-04-01 02:23:13','47.57.189.17','加拿大',1),(28,1,'2022-04-01 03:46:16','47.57.189.17','香港-',0),(29,505,'2022-04-01 07:05:58','47.57.189.17','加拿大',1);
/*!40000 ALTER TABLE `pay_loginrecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_member`
--

DROP TABLE IF EXISTS `pay_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `groupid` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户组',
  `salt` varchar(10) NOT NULL COMMENT '密码随机字符',
  `parentid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '代理ID',
  `agent_cate` int(11) NOT NULL DEFAULT '0' COMMENT '代理级别',
  `balance` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '可用余额',
  `blockedbalance` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '冻结可用余额',
  `email` varchar(100) NOT NULL,
  `activate` varchar(200) NOT NULL,
  `regdatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `activatedatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `realname` varchar(50) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别',
  `birthday` int(11) NOT NULL DEFAULT '0',
  `sfznumber` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL COMMENT '联系电话',
  `qq` varchar(15) DEFAULT NULL COMMENT 'QQ',
  `address` varchar(200) DEFAULT NULL COMMENT '联系地址',
  `paypassword` varchar(32) DEFAULT NULL COMMENT '支付密码',
  `authorized` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1 已认证 0 未认证 2 待审核',
  `apidomain` varchar(500) DEFAULT NULL COMMENT '授权访问域名',
  `apikey` varchar(32) NOT NULL COMMENT 'APIKEY',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1激活 0未激活',
  `receiver` varchar(255) DEFAULT NULL COMMENT '台卡显示的收款人信息',
  `unit_paying_number` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间已交易次数',
  `unit_paying_amount` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单位时间已交易金额',
  `unit_frist_paying_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间已交易的第一笔时间',
  `last_paying_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '当天最后一笔已交易时间',
  `paying_money` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当天已交易金额',
  `login_ip` varchar(255) NOT NULL DEFAULT ' ' COMMENT '登录IP',
  `pay_ip` varchar(100) DEFAULT NULL COMMENT '提交支付IP',
  `last_error_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录错误时间',
  `login_error_num` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '错误登录次数',
  `google_auth` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启谷歌身份验证登录',
  `df_api` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启代付API',
  `open_charge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启充值功能',
  `df_domain` text NOT NULL COMMENT '代付域名报备',
  `df_auto_check` tinyint(1) NOT NULL DEFAULT '0' COMMENT '代付API自动审核',
  `google_secret_key` varchar(255) NOT NULL DEFAULT '' COMMENT '谷歌密钥',
  `df_ip` text NOT NULL COMMENT '代付域名报备IP',
  `session_random` varchar(50) NOT NULL DEFAULT '' COMMENT 'session随机字符串',
  `df_charge_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '代付API扣除手续费方式，0：从到账金额里扣，1：从商户余额里扣',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_member`
--

LOCK TABLES `pay_member` WRITE;
/*!40000 ALTER TABLE `pay_member` DISABLE KEYS */;
INSERT INTO `pay_member` VALUES (1,'ceshi','95d6124b39e246aeb9562793ca79d5c1',4,'4748',1,4,9217.00,0.00,'sdfds@qq.com','2828b25dfd05af4c53aea63ec737fd3b',1648448186,2022,'测试',1,-28800,'365656','65656565','1968984054','dadsada','e10adc3949ba59abbe56e057f20f883e',1,NULL,'biuw2qpwb66wbzn2ugh46cnvwqppb7m4',1,NULL,10,217.00,0,1648797198,217.00,'','',0,0,0,0,1,'',0,'','','YdmTFiY5u1hntkbgF4vSVrjeR6RUX3lU',0,1648784776),(3,'测试1','43cd6a90603448731e9ed5854065a54d',4,'9713',1,4,0.00,0.00,'3232626@qq.com','3081754ababea3b3b4a07fd75cd967e5',1648691871,2022,'侧室 2',1,-28800,'566565','5956262','656262','265656565','e10adc3949ba59abbe56e057f20f883e',1,NULL,'1avr3a100bvmsxfprn4f0u09dxrpini4',1,NULL,0,0.00,0,0,0.00,'','',0,0,0,0,1,'',0,'','','',0,0);
/*!40000 ALTER TABLE `pay_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_member_agent_cate`
--

DROP TABLE IF EXISTS `pay_member_agent_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_member_agent_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) DEFAULT NULL COMMENT '等级名',
  `desc` varchar(255) DEFAULT NULL COMMENT '等级描述',
  `ctime` int(11) DEFAULT '0' COMMENT '添加时间',
  `sort` int(11) DEFAULT '99' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_member_agent_cate`
--

LOCK TABLES `pay_member_agent_cate` WRITE;
/*!40000 ALTER TABLE `pay_member_agent_cate` DISABLE KEYS */;
INSERT INTO `pay_member_agent_cate` VALUES (4,'普通商户','',1522638122,99),(5,'普通代理商户','',1522638122,99),(6,'中级代理商户','',1522638122,99),(7,'高级代理商户','',1522638122,99);
/*!40000 ALTER TABLE `pay_member_agent_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_moneychange`
--

DROP TABLE IF EXISTS `pay_moneychange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_moneychange` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `ymoney` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '原金额',
  `money` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '变动金额',
  `gmoney` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '变动后金额',
  `datetime` datetime DEFAULT NULL COMMENT '修改时间',
  `transid` varchar(50) DEFAULT NULL COMMENT '交易流水号',
  `tongdao` smallint(6) unsigned DEFAULT '0' COMMENT '支付通道ID',
  `lx` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '类型',
  `tcuserid` int(11) DEFAULT NULL,
  `tcdengji` int(11) DEFAULT NULL,
  `orderid` varchar(50) DEFAULT NULL COMMENT '订单号',
  `contentstr` varchar(255) DEFAULT NULL COMMENT '备注',
  `t` int(4) NOT NULL DEFAULT '0' COMMENT '结算方式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_moneychange`
--

LOCK TABLES `pay_moneychange` WRITE;
/*!40000 ALTER TABLE `pay_moneychange` DISABLE KEYS */;
INSERT INTO `pay_moneychange` VALUES (1,1,0.00,10000.00,10000.00,'2022-03-30 08:45:52','',0,3,NULL,NULL,'','ggg【冲正周期:2022-03-30】',0),(2,1,10000.00,1000.00,9000.00,'2022-03-30 08:47:06','L0330012263469979',0,6,NULL,NULL,'L0330012263469979','2022-03-30 08:47:06提现操作',0),(3,1,9000.00,100.00,9100.00,'2022-03-30 09:09:20','20220329141221539848',901,1,NULL,NULL,'C20220329141221777680','C20220329141221777680订单充值,结算方式：t+0',0),(4,1,9100.00,1.00,9101.00,'2022-03-30 14:48:45','20220330112511555397',904,1,NULL,NULL,'C20220330112511960446','C20220330112511960446订单充值,结算方式：t+0',0),(5,1,9101.00,1.00,9102.00,'2022-03-30 14:50:55','20220330112504489950',904,1,NULL,NULL,'C20220330112504121527','C20220330112504121527订单充值,结算方式：t+0',0),(6,1,9102.00,1.00,9103.00,'2022-03-30 15:07:33','20220330112435515756',904,1,NULL,NULL,'C20220330112435177520','C20220330112435177520订单充值,结算方式：t+0',0),(7,1,9103.00,1.00,9104.00,'2022-03-30 15:08:30','20220330112359102539',904,1,NULL,NULL,'C20220330112359327974','C20220330112359327974订单充值,结算方式：t+0',0),(8,1,9104.00,1.00,9105.00,'2022-03-30 15:09:13','20220330112334545099',904,1,NULL,NULL,'C20220330112334519014','C20220330112334519014订单充值,结算方式：t+0',0),(9,1,9105.00,1.00,9106.00,'2022-03-30 15:15:35','20220330111924995451',904,1,NULL,NULL,'C20220330111924464691','C20220330111924464691订单充值,结算方式：t+0',0),(10,1,9106.00,1.00,9107.00,'2022-03-30 15:22:03','20220330111713571019',904,1,NULL,NULL,'C20220330111713665680','C20220330111713665680订单充值,结算方式：t+0',0),(11,1,9107.00,10.00,9117.00,'2022-03-30 17:26:49','20220330111558101515',904,1,NULL,NULL,'C20220330111558254035','C20220330111558254035订单充值,结算方式：t+0',0),(12,1,9117.00,100.00,9217.00,'2022-04-01 15:13:18','20220401151306501015',904,1,NULL,NULL,'C20220401151306762385','C20220401151306762385订单充值,结算方式：t+0',0);
/*!40000 ALTER TABLE `pay_moneychange` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_order`
--

DROP TABLE IF EXISTS `pay_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pay_memberid` varchar(100) NOT NULL COMMENT '商户编号',
  `pay_username` varchar(200) DEFAULT NULL COMMENT '用户名',
  `pay_orderid` varchar(100) NOT NULL COMMENT '系统订单号',
  `pay_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `true_amount` decimal(50,2) DEFAULT NULL COMMENT '实付金额',
  `pay_poundage` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `pay_actualamount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `pay_applydate` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '订单创建日期',
  `pay_successdate` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '订单支付成功时间',
  `pay_bankcode` varchar(100) DEFAULT NULL COMMENT '银行编码',
  `pay_notifyurl` varchar(500) NOT NULL COMMENT '商家异步通知地址',
  `pay_callbackurl` varchar(500) NOT NULL COMMENT '商家页面通知地址',
  `pay_bankname` varchar(300) DEFAULT NULL,
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '订单状态: 0 未支付 1 已支付未返回 2 已支付已返回',
  `pay_productname` varchar(80) DEFAULT NULL COMMENT '商品名称',
  `pay_tongdao` varchar(50) DEFAULT NULL,
  `pay_zh_tongdao` varchar(50) DEFAULT NULL,
  `pay_tjurl` varchar(1000) DEFAULT NULL,
  `out_trade_id` varchar(50) NOT NULL COMMENT '商户订单号',
  `num` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '已补发次数',
  `memberid` varchar(100) DEFAULT NULL COMMENT '支付渠道商家号',
  `key` varchar(500) DEFAULT NULL COMMENT '支付渠道密钥',
  `account` varchar(100) DEFAULT NULL COMMENT '渠道账号',
  `isdel` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '伪删除订单 1 删除 0 未删',
  `ddlx` int(11) DEFAULT '0',
  `pay_ytongdao` varchar(50) DEFAULT NULL,
  `pay_yzh_tongdao` varchar(50) DEFAULT NULL,
  `xx` smallint(6) unsigned NOT NULL DEFAULT '0',
  `attach` varchar(100) DEFAULT NULL COMMENT '商家附加字段,原样返回',
  `pay_channel_account` varchar(255) DEFAULT NULL COMMENT '通道账户',
  `cost` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '成本',
  `cost_rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '成本费率',
  `account_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '子账号id',
  `channel_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '渠道id',
  `t` tinyint(2) NOT NULL DEFAULT '1' COMMENT '结算周期（计算费率）',
  `last_reissue_time` int(11) NOT NULL DEFAULT '11' COMMENT '最后补发时间',
  `lock_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `yichangip` varchar(60) DEFAULT NULL,
  `order_ip` varchar(32) DEFAULT NULL COMMENT '客户端IP',
  `yichang` int(12) NOT NULL,
  `is_budan` int(12) NOT NULL,
  `mobile` varchar(64) DEFAULT NULL COMMENT '客户端类型',
  `huidiao_url` varchar(300) DEFAULT NULL COMMENT '上游给发送回调的url',
  `tijiaomoey` varchar(200) DEFAULT NULL COMMENT '提交金额备注',
  `notify_msg` varchar(500) DEFAULT NULL COMMENT '发送回调下游返回内容',
  `tongdao_msg` text COMMENT '上游回调内容',
  PRIMARY KEY (`id`),
  UNIQUE KEY `IND_ORD` (`pay_orderid`),
  KEY `account_id` (`account_id`),
  KEY `channel_id` (`channel_id`),
  KEY `id` (`id`),
  KEY `pay_memberid` (`pay_memberid`),
  KEY `pay_orderid` (`pay_orderid`),
  KEY `pay_amount` (`pay_amount`),
  KEY `pay_applydate` (`pay_applydate`),
  KEY `pay_successdate` (`pay_successdate`),
  KEY `pay_status` (`pay_status`),
  KEY `memberid` (`memberid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_order`
--

LOCK TABLES `pay_order` WRITE;
/*!40000 ALTER TABLE `pay_order` DISABLE KEYS */;
INSERT INTO `pay_order` VALUES (1,'10001','ceshi','20220328141911102995',100.00,NULL,0.00,100.00,1648448351,0,'901','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','微信H5',0,'团购商品','Daifu','代付系统测试','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220328141911600001',0,'1213','','',0,1,'Daifu','纯代付系统',0,'','ceshi',0.0000,0.0000,1,101,0,11,0,NULL,'61.185.128.13',0,0,'windows ',NULL,NULL,NULL,NULL),(2,'10001','ceshi','20220328152130975310',100.00,NULL,0.00,100.00,1648452090,0,'901','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','微信H5',0,'团购商品','Daifu','代付系统测试','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220328152130582576',0,'1213','','',0,1,'Daifu','纯代付系统',0,'','ceshi',0.0000,0.0000,1,101,0,11,0,NULL,'61.185.128.13',0,0,'android 华为',NULL,NULL,NULL,NULL),(3,'10001','ceshi','20220329141221539848',100.00,NULL,0.00,100.00,1648534341,1648602560,'901','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','微信H5',2,'团购商品','Daifu','代付系统测试','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220329141221777680',0,'1213','','',0,1,'Daifu','纯代付系统',0,'','ceshi',0.0000,0.0000,1,101,0,11,0,NULL,'47.57.189.17',0,1,'windows ',NULL,NULL,'OK','{\"TransID\":\"20220329141221539848\",\"tongdao\":\"Daifu\",\"order\":\"id desc\",\"serverType\":\"nginx\",\"sites_path\":\"\\/www\\/wwwroot\",\"site_model\":\"php\",\"ltd_end\":\"-1\",\"pro_end\":\"-1\",\"bt_user_info\":\"{\\\"status\\\":true,\\\"msg\\\":\\\"%u83B7%u53D6%u6210%u529F!\\\",\\\"data\\\":{\\\"username\\\":\\\"170****5207\\\"}}\",\"distribution\":\"centos7\",\"soft_remarks\":\"{\\\"list\\\":[\\\"%u4F01%u4E1A%u7248%u3001%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u8D60%u90012%u5F20%u5546%u7528%u8BC1%u4E66\\\",\\\"%u8D60%u90011000%u6761%u77ED%u4FE1\\\",\\\"%u4F4E%u81F31.86%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u5E74%u4ED8%u4F01%u4E1A%u7248%u670D%u52A1%u7FA4\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"pro_list\\\":[\\\"%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u4F4E%u81F31.52%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"kfqq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\",\\\"qun\\\":\\\"\\\",\\\"kf_list\\\":[{\\\"qq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\"},{\\\"qq\\\":\\\"2927440070\\\",\\\"kf\\\":\\\"http:\\/\\/wpa.qq.com\\/msgrd?v=3&uin=2927440070&site=qq&menu=yes&from=message&isappinstalled=0\\\"}],\\\"wx_list\\\":[{\\\"ps\\\":\\\"%u552E%u524D%u54A8%u8BE2\\\",\\\"kf\\\":\\\"https:\\/\\/work.weixin.qq.com\\/kfid\\/kfc72fcbde93e26a6f3\\\"}]}\",\"load_search\":\"undefined\",\"load_type\":\"null\",\"rank\":\"list\",\"file_recycle_status\":\"true\",\"site_type\":\"-1\",\"SetName\":\"\",\"ChangePath\":\"3\",\"backup_path\":\"\\/www\\/backup\",\"81c58e2747f05ee12d7cc58c8f3dd47b\":\"795df655-1ad9-409f-a6cf-7678ff7d3a86.rj8Hqdc1VFcM-qu9KAwIxg9_Irs\",\"pnull\":\"3\",\"load_page\":\"3\",\"commandInputViewUUID\":\"5PaKp6PYyz8mK2J\",\"memSize\":\"1837\",\"fd801733eac3809d480b46fbf9db9afd\":\"6752eab6-a734-4861-89f5-138a31ee00af.5VHT-B8RS8nSCd9GdMqmmeg2zjk\",\"request_token\":\"4ryy0suXSE6xvKkFJrdTWBbGCHlgPouFThDrr3qMrOicptId\",\"pay_source\":\"45\",\"refresh_software_list\":\"1\",\"force\":\"1\",\"record_paste\":\"null\",\"record_paste_type\":\"null\",\"Hm_lvt_7e007e5f112c1c9bff8cf7b3e9ba6abc\":\"1648517375\",\"PHPSESSID\":\"jifbtu94rv1tg0rmeou83g2t91\",\"Path\":\"\\/www\\/wwwroot\\/zhiyu.com\\/Application\\/Admin\\/View\\/Order\",\"think_language\":\"zh-CN\"}'),(4,'10001','ceshi','20220330101958101555',100.00,NULL,0.00,100.00,1648606798,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Mymapay','小志码支付当面付','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330101958168752',0,'2612','SV0LHAVO','',0,1,'Mymapay','码支付通道',0,'','码支付测试',0.0000,0.0000,3,70,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(5,'10001','ceshi','20220330102058979710',100.00,NULL,0.00,100.00,1648606858,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Mymapay','小志码支付当面付','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330102058175855',0,'2612','SV0LHAVO','',0,1,'Mymapay','码支付通道',0,'','码支付测试',0.0000,0.0000,3,70,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(6,'10001','ceshi','20220330103316991005',10.00,NULL,0.00,10.00,1648607596,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Mymapay','小志码支付当面付','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103316373342',0,'2612','SV0LHAVO','',0,1,'Mymapay','码支付通道',0,'','码支付测试',0.0000,0.0000,3,70,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(7,'10001','ceshi','20220330103516525397',10.00,NULL,0.00,10.00,1648607716,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103516135797',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','永鑫支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(8,'10001','ceshi','20220330103605531009',10.00,NULL,0.00,10.00,1648607765,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103605582948',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','永鑫支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(9,'10001','ceshi','20220330103629100544',10.00,NULL,0.00,10.00,1648607789,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103629772032',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','永鑫支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(10,'10001','ceshi','20220330103642975610',100.00,NULL,0.00,100.00,1648607802,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103642564724',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','永鑫支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(11,'10001','ceshi','20220330103707519754',100.00,NULL,0.00,100.00,1648607827,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103707487510',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','永鑫支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(12,'10001','ceshi','20220330103819984853',10.00,NULL,0.00,10.00,1648607899,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103818639476',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(13,'10001','ceshi','20220330103917535757',10.00,NULL,0.00,10.00,1648607957,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330103917501089',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,0,'windows ',NULL,NULL,NULL,NULL),(14,'10001','ceshi','20220330104121499951',100.00,NULL,0.00,100.00,1648608081,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330104121227471',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(15,'10001','ceshi','20220330104225495410',10.00,NULL,0.00,10.00,1648608145,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330104225517150',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(16,'10001','ceshi','20220330104345495152',100.00,NULL,0.00,100.00,1648608225,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330104345690075',0,'Gp20220330100511','cMybZO1gjEVbvomHmdDjBX8HuRR3cAm1','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(17,'10001','ceshi','20220330104434505157',10.00,NULL,0.00,10.00,1648608274,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330104434953403',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(18,'10001','ceshi','20220330104757100505',10.00,NULL,0.00,10.00,1648608477,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330104757515315',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(19,'10001','ceshi','20220330105015555099',10.00,NULL,0.00,10.00,1648608615,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330105015746892',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(20,'10001','ceshi','20220330105513491009',1.00,NULL,0.00,1.00,1648608913,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330105513260781',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(21,'10001','ceshi','20220330105538974955',1.00,NULL,0.00,1.00,1648608938,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330105537932437',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(22,'10001','ceshi','20220330105611984951',1.00,NULL,0.00,1.00,1648608971,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330105610451005',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(23,'10001','ceshi','20220330110520485748',10.00,NULL,0.00,10.00,1648609520,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330110520688676',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(24,'10001','ceshi','20220330110557534910',10.00,NULL,0.00,10.00,1648609557,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330110556474219',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(25,'10001','ceshi','20220330110740994956',10.00,NULL,0.00,10.00,1648609660,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330110739434197',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(26,'10001','ceshi','20220330110856565155',10.00,NULL,0.00,10.00,1648609736,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330110856876608',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(27,'10001','ceshi','20220330110935102485',1.00,NULL,0.00,1.00,1648609775,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330110934929349',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(28,'10001','ceshi','20220330111030541014',1.00,NULL,0.00,1.00,1648609830,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111030791041',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(29,'10001','ceshi','20220330111048569751',1.00,NULL,0.00,1.00,1648609848,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111048179689',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(30,'10001','ceshi','20220330111120565549',11.00,NULL,0.00,11.00,1648609880,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111120715719',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(31,'10001','ceshi','20220330111458504910',1.00,NULL,0.00,1.00,1648610098,0,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',0,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111457130988',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,0,'windows ',NULL,NULL,NULL,NULL),(32,'10001','ceshi','20220330111558101515',10.00,NULL,0.00,10.00,1648610158,1648632409,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111558254035',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(33,'10001','ceshi','20220330111713571019',1.00,NULL,0.00,1.00,1648610233,1648624923,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111713665680',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(34,'10001','ceshi','20220330111924995451',1.00,NULL,0.00,1.00,1648610364,1648624535,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330111924464691',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(35,'10001','ceshi','20220330112334545099',1.00,NULL,0.00,1.00,1648610614,1648624153,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',1,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330112334519014',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(36,'10001','ceshi','20220330112359102539',1.00,NULL,0.00,1.00,1648610639,1648624110,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330112359327974',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(37,'10001','ceshi','20220330112435515756',1.00,NULL,0.00,1.00,1648610675,1648624053,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',1,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330112435177520',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,NULL,NULL),(38,'10001','ceshi','20220330112504489950',1.00,NULL,0.00,1.00,1648610704,1648623055,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330112504121527',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,'OK','{\"TransID\":\"20220330112504489950\",\"tongdao\":\"Dingdian\",\"order\":\"id desc\",\"serverType\":\"nginx\",\"sites_path\":\"\\/www\\/wwwroot\",\"site_model\":\"php\",\"ltd_end\":\"-1\",\"pro_end\":\"-1\",\"bt_user_info\":\"{\\\"status\\\":true,\\\"msg\\\":\\\"%u83B7%u53D6%u6210%u529F!\\\",\\\"data\\\":{\\\"username\\\":\\\"170****5207\\\"}}\",\"distribution\":\"centos7\",\"soft_remarks\":\"{\\\"list\\\":[\\\"%u4F01%u4E1A%u7248%u3001%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u8D60%u90012%u5F20%u5546%u7528%u8BC1%u4E66\\\",\\\"%u8D60%u90011000%u6761%u77ED%u4FE1\\\",\\\"%u4F4E%u81F31.86%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u5E74%u4ED8%u4F01%u4E1A%u7248%u670D%u52A1%u7FA4\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"pro_list\\\":[\\\"%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u4F4E%u81F31.52%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"kfqq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\",\\\"qun\\\":\\\"\\\",\\\"kf_list\\\":[{\\\"qq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\"},{\\\"qq\\\":\\\"2927440070\\\",\\\"kf\\\":\\\"http:\\/\\/wpa.qq.com\\/msgrd?v=3&uin=2927440070&site=qq&menu=yes&from=message&isappinstalled=0\\\"}],\\\"wx_list\\\":[{\\\"ps\\\":\\\"%u552E%u524D%u54A8%u8BE2\\\",\\\"kf\\\":\\\"https:\\/\\/work.weixin.qq.com\\/kfid\\/kfc72fcbde93e26a6f3\\\"}]}\",\"load_search\":\"undefined\",\"load_type\":\"null\",\"rank\":\"list\",\"file_recycle_status\":\"true\",\"site_type\":\"-1\",\"SetName\":\"\",\"ChangePath\":\"3\",\"backup_path\":\"\\/www\\/backup\",\"81c58e2747f05ee12d7cc58c8f3dd47b\":\"795df655-1ad9-409f-a6cf-7678ff7d3a86.rj8Hqdc1VFcM-qu9KAwIxg9_Irs\",\"pnull\":\"3\",\"load_page\":\"3\",\"commandInputViewUUID\":\"5PaKp6PYyz8mK2J\",\"memSize\":\"1837\",\"fd801733eac3809d480b46fbf9db9afd\":\"6752eab6-a734-4861-89f5-138a31ee00af.5VHT-B8RS8nSCd9GdMqmmeg2zjk\",\"request_token\":\"4ryy0suXSE6xvKkFJrdTWBbGCHlgPouFThDrr3qMrOicptId\",\"pay_source\":\"45\",\"refresh_software_list\":\"1\",\"force\":\"1\",\"record_paste\":\"null\",\"record_paste_type\":\"null\",\"Hm_lvt_7e007e5f112c1c9bff8cf7b3e9ba6abc\":\"1648517375\",\"PHPSESSID\":\"jifbtu94rv1tg0rmeou83g2t91\",\"files_sort\":\"mtime\",\"name_reverse\":\"True\",\"Path\":\"\\/www\\/wwwroot\\/zhiyu.com\\/Application\\/Admin\\/View\\/Order\",\"think_language\":\"zh-CN\"}'),(39,'10001','ceshi','20220330112511555397',1.00,NULL,0.00,1.00,1648610711,1648622925,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220330112511960446',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'json','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.75.119.177',0,1,'windows ',NULL,NULL,'OK','{\"TransID\":\"20220330112511555397\",\"tongdao\":\"Dingdian\",\"serverType\":\"nginx\",\"order\":\"id desc\",\"sites_path\":\"\\/www\\/wwwroot\",\"site_model\":\"php\",\"ltd_end\":\"-1\",\"pro_end\":\"-1\",\"bt_user_info\":\"{\\\"status\\\":true,\\\"msg\\\":\\\"%u83B7%u53D6%u6210%u529F!\\\",\\\"data\\\":{\\\"username\\\":\\\"170****5207\\\"}}\",\"distribution\":\"centos7\",\"soft_remarks\":\"{\\\"list\\\":[\\\"%u4F01%u4E1A%u7248%u3001%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u8D60%u90012%u5F20%u5546%u7528%u8BC1%u4E66\\\",\\\"%u8D60%u90011000%u6761%u77ED%u4FE1\\\",\\\"%u4F4E%u81F31.86%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u5E74%u4ED8%u4F01%u4E1A%u7248%u670D%u52A1%u7FA4\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"pro_list\\\":[\\\"%u4E13%u4E1A%u7248%u63D2%u4EF6\\\",\\\"15%u5929%u65E0%u7406%u7531%u9000%u6B3E\\\",\\\"%u53EF%u66F4%u6362IP\\\",\\\"%u4F4E%u81F31.52%u5143\\/%u5929\\\",\\\"%u5546%u7528%u9632%u706B%u5899%u6388%u6743\\\",\\\"%u4EA7%u54C1%u6388%u6743%u8BC1%u4E66\\\"],\\\"kfqq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\",\\\"qun\\\":\\\"\\\",\\\"kf_list\\\":[{\\\"qq\\\":\\\"3007255432\\\",\\\"kf\\\":\\\"http:\\/\\/q.url.cn\\/CDfQPS?_type=wpa&qidian=true\\\"},{\\\"qq\\\":\\\"2927440070\\\",\\\"kf\\\":\\\"http:\\/\\/wpa.qq.com\\/msgrd?v=3&uin=2927440070&site=qq&menu=yes&from=message&isappinstalled=0\\\"}],\\\"wx_list\\\":[{\\\"ps\\\":\\\"%u552E%u524D%u54A8%u8BE2\\\",\\\"kf\\\":\\\"https:\\/\\/work.weixin.qq.com\\/kfid\\/kfc72fcbde93e26a6f3\\\"}]}\",\"load_search\":\"undefined\",\"load_type\":\"null\",\"rank\":\"list\",\"file_recycle_status\":\"true\",\"site_type\":\"-1\",\"SetName\":\"\",\"ChangePath\":\"3\",\"backup_path\":\"\\/www\\/backup\",\"81c58e2747f05ee12d7cc58c8f3dd47b\":\"795df655-1ad9-409f-a6cf-7678ff7d3a86.rj8Hqdc1VFcM-qu9KAwIxg9_Irs\",\"pnull\":\"3\",\"load_page\":\"3\",\"commandInputViewUUID\":\"5PaKp6PYyz8mK2J\",\"memSize\":\"1837\",\"fd801733eac3809d480b46fbf9db9afd\":\"6752eab6-a734-4861-89f5-138a31ee00af.5VHT-B8RS8nSCd9GdMqmmeg2zjk\",\"request_token\":\"4ryy0suXSE6xvKkFJrdTWBbGCHlgPouFThDrr3qMrOicptId\",\"pay_source\":\"45\",\"refresh_software_list\":\"1\",\"force\":\"1\",\"record_paste\":\"null\",\"record_paste_type\":\"null\",\"Hm_lvt_7e007e5f112c1c9bff8cf7b3e9ba6abc\":\"1648517375\",\"PHPSESSID\":\"jifbtu94rv1tg0rmeou83g2t91\",\"files_sort\":\"mtime\",\"name_reverse\":\"True\",\"think_language\":\"zh-CN\",\"Path\":\"\\/www\\/wwwroot\\/zhiyu.com\\/Application\\/Admin\\/View\\/Order\"}'),(40,'10001','ceshi','20220401151306501015',100.00,NULL,0.00,100.00,1648797186,1648797198,'904','http://47.242.170.147:60109/Pay_Charges_notify.html','http://47.242.170.147:60109/Pay_Charges_callback.html','支付宝H5',2,'团购商品','Dingdian','顶点免签支付宝','http://47.242.170.147:60109/Pay_Charges_checkout.html','C20220401151306762385',0,'Gp20220330100511','4V5t8pup8y1JODL6u9US4WZNHyd3hgef','',0,1,'Dingdian','顶点免签支付',0,'','顶点免签测试账户',0.0000,0.0000,4,108,0,11,0,NULL,'47.57.189.17',0,1,'windows ',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `pay_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_pay_channel_extend_fields`
--

DROP TABLE IF EXISTS `pay_pay_channel_extend_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_pay_channel_extend_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL DEFAULT '0' COMMENT '代付渠道ID',
  `code` varchar(64) NOT NULL DEFAULT '' COMMENT '代付渠道代码',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '扩展字段名',
  `alias` varchar(50) NOT NULL DEFAULT '' COMMENT '扩展字段别名',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `etime` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_pay_channel_extend_fields`
--

LOCK TABLES `pay_pay_channel_extend_fields` WRITE;
/*!40000 ALTER TABLE `pay_pay_channel_extend_fields` DISABLE KEYS */;
INSERT INTO `pay_pay_channel_extend_fields` VALUES (1,1,'Yibao','bankProvinceName','银行卡的所在省名称','',1533622880,1533622880),(2,1,'Yibao','bankProvinceCode','银行卡的所在省编码','',1533622891,1533622891),(3,1,'Yibao','bankCityName','银行卡的所在市名称','',1533622901,1533622901),(4,1,'Yibao','bankCityCode','银行卡的所在市编码','',1533622911,1533622911),(5,1,'Yibao','bankAreaName','银行卡的所在区名称','',1533622932,1533622932),(6,1,'Yibao','bankAreaCode','银行卡的所在区编码','',1533622945,1533622945),(7,1,'Yibao','bankId','银行卡的开户行编号','',1533622956,1533622956),(8,1,'Yibao','bankUserCert','银行卡的持卡人身份证','',1533622969,1533622969),(9,1,'Yibao','bankUserPhone','银行卡的预留手机号','',1533622991,1533622991);
/*!40000 ALTER TABLE `pay_pay_channel_extend_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_pay_for_another`
--

DROP TABLE IF EXISTS `pay_pay_for_another`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_pay_for_another` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `code` varchar(64) NOT NULL COMMENT '代付代码',
  `title` varchar(64) NOT NULL COMMENT '代付名称',
  `mch_id` varchar(255) NOT NULL DEFAULT ' ' COMMENT '商户号',
  `appid` varchar(100) NOT NULL DEFAULT ' ' COMMENT '应用APPID',
  `appsecret` varchar(100) NOT NULL DEFAULT ' ' COMMENT '应用密钥',
  `signkey` varchar(500) NOT NULL DEFAULT ' ' COMMENT '加密的秘钥',
  `public_key` varchar(1000) NOT NULL DEFAULT '  ' COMMENT '加密的公钥',
  `private_key` varchar(1000) NOT NULL DEFAULT '  ' COMMENT '加密的私钥',
  `exec_gateway` varchar(255) NOT NULL DEFAULT ' ' COMMENT '请求代付的地址',
  `query_gateway` varchar(255) NOT NULL DEFAULT ' ' COMMENT '查询代付的地址',
  `serverreturn` varchar(255) NOT NULL DEFAULT ' ' COMMENT '服务器通知网址',
  `unlockdomain` varchar(255) NOT NULL DEFAULT ' ' COMMENT '防封域名',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更改时间',
  `status` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1开启 0关闭',
  `is_default` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否默认：1是，0否',
  `cost_rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '成本费率',
  `rate_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '费率类型：按单笔收费0，按比例收费：1',
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `updatetime` (`updatetime`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='代付通道表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_pay_for_another`
--

LOCK TABLES `pay_pay_for_another` WRITE;
/*!40000 ALTER TABLE `pay_pay_for_another` DISABLE KEYS */;
INSERT INTO `pay_pay_for_another` VALUES (2,'qtpay','代付一号','12345678','','','abcdefg','','','','','','',1542860435,1,1,0.5000,0);
/*!40000 ALTER TABLE `pay_pay_for_another` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_paylog`
--

DROP TABLE IF EXISTS `pay_paylog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_paylog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `out_trade_no` varchar(50) NOT NULL,
  `result_code` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `fromuser` varchar(50) NOT NULL,
  `time_end` int(11) unsigned NOT NULL DEFAULT '0',
  `total_fee` smallint(6) unsigned NOT NULL DEFAULT '0',
  `payname` varchar(50) NOT NULL,
  `bank_type` varchar(20) DEFAULT NULL,
  `trade_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `IND_TRD` (`transaction_id`),
  UNIQUE KEY `IND_ORD` (`out_trade_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_paylog`
--

LOCK TABLES `pay_paylog` WRITE;
/*!40000 ALTER TABLE `pay_paylog` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_paylog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_product`
--

DROP TABLE IF EXISTS `pay_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '通道名称',
  `code` varchar(50) NOT NULL COMMENT '通道代码',
  `polling` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '接口模式 0 单独 1 轮询',
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '支付类型 1 微信扫码 2 微信H5 3 支付宝扫码 4 支付宝H5 5 网银跳转 6网银直连  7 百度钱包  8 QQ钱包 9 京东钱包',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `isdisplay` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户端显示 1 显示 0 不显示',
  `channel` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '通道ID',
  `weight` text COMMENT '平台默认通道权重',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=932 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_product`
--

LOCK TABLES `pay_product` WRITE;
/*!40000 ALTER TABLE `pay_product` DISABLE KEYS */;
INSERT INTO `pay_product` VALUES (901,'微信H5','Wxh5',0,2,1,1,218,''),(902,'微信扫码','Wxsan',0,1,0,0,228,' :|A:|A:'),(903,'支付宝扫码','Aliscan',0,3,1,1,215,''),(904,'支付宝H5','Alipaywap',0,4,1,1,216,'216:'),(924,'易生支付','yishengpay',0,9,0,0,0,''),(925,'拼多多支付宝H5','pdd',0,4,0,0,33,''),(926,'银联H5','Ylh5',0,14,0,0,0,''),(927,'支付宝转卡(300-30000)','zfbfzzz',0,4,1,1,0,''),(928,'支付宝代金券固定金额','zfbdjq',0,4,0,0,0,''),(929,'微信转卡(200-30000)','weixinzhuanka',0,2,0,0,0,''),(930,'支付宝话费100,200,300','Zfbhf',0,4,1,1,0,''),(931,'支付宝网关(100-2000)','zfbwg',0,4,1,1,0,'');
/*!40000 ALTER TABLE `pay_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_product_user`
--

DROP TABLE IF EXISTS `pay_product_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_product_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT ' ',
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '商户通道ID',
  `polling` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '接口模式：0 单独 1 轮询',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '通道状态 0 关闭 1 启用',
  `channel` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '指定单独通道ID',
  `weight` varchar(255) DEFAULT NULL COMMENT '通道权重',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_product_user`
--

LOCK TABLES `pay_product_user` WRITE;
/*!40000 ALTER TABLE `pay_product_user` DISABLE KEYS */;
INSERT INTO `pay_product_user` VALUES (1,1,901,0,1,101,''),(2,1,903,0,0,0,''),(3,1,904,0,1,108,''),(4,1,927,0,0,0,''),(5,1,930,0,0,0,''),(6,1,931,0,0,0,'');
/*!40000 ALTER TABLE `pay_product_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_reconciliation`
--

DROP TABLE IF EXISTS `pay_reconciliation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_reconciliation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT '0' COMMENT '用户ID',
  `order_total_count` int(11) DEFAULT '0' COMMENT '总订单数',
  `order_success_count` int(11) DEFAULT '0' COMMENT '成功订单数',
  `order_fail_count` int(11) DEFAULT '0' COMMENT '未支付订单数',
  `order_total_amount` decimal(11,2) DEFAULT '0.00' COMMENT '订单总额',
  `order_success_amount` decimal(11,2) DEFAULT '0.00' COMMENT '订单实付总额',
  `date` date DEFAULT NULL COMMENT '日期',
  `ctime` int(11) DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_reconciliation`
--

LOCK TABLES `pay_reconciliation` WRITE;
/*!40000 ALTER TABLE `pay_reconciliation` DISABLE KEYS */;
INSERT INTO `pay_reconciliation` VALUES (1,1,0,0,0,NULL,NULL,'2022-03-31',1648711638),(2,1,36,8,28,775.00,117.00,'2022-03-30',1648711639),(3,1,1,1,0,100.00,NULL,'2022-03-29',1648711639),(4,1,2,0,2,200.00,NULL,'2022-03-28',1648711639);
/*!40000 ALTER TABLE `pay_reconciliation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_redo_order`
--

DROP TABLE IF EXISTS `pay_redo_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_redo_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT '0' COMMENT '操作管理员',
  `money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：增加 2：减少',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '冲正备注',
  `date` datetime NOT NULL COMMENT '冲正周期',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_redo_order`
--

LOCK TABLES `pay_redo_order` WRITE;
/*!40000 ALTER TABLE `pay_redo_order` DISABLE KEYS */;
INSERT INTO `pay_redo_order` VALUES (1,1,505,10000.00,1,'ggg【冲正周期:2022-03-30】','2022-03-30 00:00:00',1648601152);
/*!40000 ALTER TABLE `pay_redo_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_route`
--

DROP TABLE IF EXISTS `pay_route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_route` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `urlstr` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_route`
--

LOCK TABLES `pay_route` WRITE;
/*!40000 ALTER TABLE `pay_route` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_sms`
--

DROP TABLE IF EXISTS `pay_sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_key` varchar(255) DEFAULT NULL COMMENT 'App Key',
  `app_secret` varchar(255) DEFAULT NULL COMMENT 'App Secret',
  `sign_name` varchar(255) DEFAULT NULL COMMENT '默认签名',
  `is_open` int(11) DEFAULT '0' COMMENT '是否开启，0关闭，1开启',
  `admin_mobile` varchar(255) DEFAULT NULL COMMENT '管理员接收手机',
  `is_receive` int(11) DEFAULT '0' COMMENT '是否开启，0关闭，1开启',
  `sms_channel` varchar(20) NOT NULL DEFAULT 'aliyun' COMMENT '短信通道',
  `smsbao_user` varchar(50) NOT NULL DEFAULT '' COMMENT '短信宝账号',
  `smsbao_pass` varchar(50) NOT NULL DEFAULT '' COMMENT '短信宝密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_sms`
--

LOCK TABLES `pay_sms` WRITE;
/*!40000 ALTER TABLE `pay_sms` DISABLE KEYS */;
INSERT INTO `pay_sms` VALUES (3,'LTAIdnGHysawLyL2','TFpAmGsvH6RgPF9sS5ZvbgDC3wwNFP','MT聚合支付',0,NULL,0,'aliyun','111','11112');
/*!40000 ALTER TABLE `pay_sms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_sms_template`
--

DROP TABLE IF EXISTS `pay_sms_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_sms_template` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `template_code` varchar(255) DEFAULT NULL COMMENT '模板代码',
  `call_index` varchar(255) DEFAULT NULL COMMENT '调用字符串',
  `template_content` text COMMENT '模板内容',
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_sms_template`
--

LOCK TABLES `pay_sms_template` WRITE;
/*!40000 ALTER TABLE `pay_sms_template` DISABLE KEYS */;
INSERT INTO `pay_sms_template` VALUES (3,'修改支付密码','SMS_144455941 ','editPayPassword','您正在进行修改支付密码操作，验证码为：${code} ，该验证码 5 分钟内有效，请勿泄露于他人。',1512202260),(4,'修改登录密码','SMS_169902581','editPasswordSend','您的验证码为：${code} ，你正在进行修改登录密码操作，该验证码 5 分钟内有效，请勿泄露于他人。',1512190115),(5,'异地登录','SMS_144455604','loginWarning','检测到您的账号登录异常，如非本人操纵，请及时修改账号密码。',1512202260),(6,'申请结算','SMS_144456102','clearing','您的申请结算验证码为：${code}  ，验证码只用于平台结算验证，为了您的资金安全，打死也不能告诉任何人。',1512202260),(7,'委托结算','SMS_144450916','entrusted','您的验证码为：${code} ，你正在进行 委托结算 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1512202260),(8,'绑定手机','SMS_144455941 ','bindMobile','您的验证码为：${code} ，你正在进行 绑定手机 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1514534290),(9,'更新手机','SMS_144450938','editMobile','您的验证码为：${code} ，你正在进行 更新手机 号码操作，该验证码 5 分钟内有效，请勿泄露于他人。',1514535688),(10,'更新银行卡 ','SMS_144450919','addBankcardSend','您的验证码为：${code} ，你正在进行 更新银行卡 \r\n 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1514535688),(11,'修改个人资料','SMS_144450923','saveProfile','您的验证码为：${code} ，你正在进行 修改个人资料 操作，该验证码 5 分钟内有效，请勿泄露于他人。',151453568),(12,'绑定管理员手机号码','SMS_144450927','adminbindMobile','您的验证码为：${code} ，你正在进行 绑定管理员手机号码 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(13,'修改管理员手机号码','SMS_144455951','admineditMobile','您的验证码为：${code} ，你正在进行 修改管理员手机号码 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(14,'批量删除订单','SMS_144455956','delOrderSend','您的验证码为：${code} ，你正在进行 批量删除订单  操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(15,'解绑谷歌身份验证器','SMS_119087905','unbindGoogle','您的验证码为：${code} ，你正在进行 解绑谷歌身份验证器 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(16,'设置订单为已支付','SMS_144455959','setOrderPaidSend','您的验证码为：${code} ，你正在进行 设置订单为已支付 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(17,'清理数据','SMS_169897576','clearDataSend','您的验证码为：${code} ，你正在进行 清理数据 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(18,'增加/减少余额（冲正）','SMS_111795375','adjustUserMoneySend','您的验证码为：${code} ，你正在进行 增加/减少余额（冲正） 操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(19,'提交代付','SMS_144450941','submitDfSend','您的提交代付验证码为：${code} ，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(20,'测试短信','SMS_169902737','test','您的测试短信验证码为：${code} ，您正在进行重要操作，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(21,'系统配置','SMS_169902614','sysconfigSend','您的系统配置验证码为：${code} ，该验证码 5 分钟内有效，请勿泄露于他人。',1527670734),(22,'客户提现提醒','SMS_144455785','tixian','平台有客户申请提现，请及时处理！',1536649511);
/*!40000 ALTER TABLE `pay_sms_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_systembank`
--

DROP TABLE IF EXISTS `pay_systembank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_systembank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bankcode` varchar(100) DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `images` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=198 DEFAULT CHARSET=utf8 COMMENT='结算银行';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_systembank`
--

LOCK TABLES `pay_systembank` WRITE;
/*!40000 ALTER TABLE `pay_systembank` DISABLE KEYS */;
INSERT INTO `pay_systembank` VALUES (162,'BOB','北京银行','BOB.gif'),(164,'BEA','东亚银行','BEA.gif'),(165,'ICBC','中国工商银行','ICBC.gif'),(166,'CEB','中国光大银行','CEB.gif'),(167,'GDB','广发银行','GDB.gif'),(168,'HXB','华夏银行','HXB.gif'),(169,'CCB','中国建设银行','CCB.gif'),(170,'BCM','交通银行','BCM.gif'),(171,'CMSB','中国民生银行','CMSB.gif'),(172,'NJCB','南京银行','NJCB.gif'),(173,'NBCB','宁波银行','NBCB.gif'),(174,'ABC','中国农业银行','5414c87492ad8.gif'),(175,'PAB','平安银行','5414c0929a632.gif'),(176,'BOS','上海银行','BOS.gif'),(177,'SPDB','上海浦东发展银行','SPDB.gif'),(178,'SDB','深圳发展银行','SDB.gif'),(179,'CIB','兴业银行','CIB.gif'),(180,'PSBC','中国邮政储蓄银行','PSBC.gif'),(181,'CMBC','招商银行','CMBC.gif'),(182,'CZB','浙商银行','CZB.gif'),(183,'BOC','中国银行','BOC.gif'),(184,'CNCB','中信银行','CNCB.gif'),(193,'ALIPAY','支付宝','58b83a5820644.jpg'),(194,'WXZF','微信支付','58b83a757a298.jpg');
/*!40000 ALTER TABLE `pay_systembank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_template`
--

DROP TABLE IF EXISTS `pay_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT ' ' COMMENT '模板名称',
  `theme` varchar(255) NOT NULL DEFAULT ' ' COMMENT '模板代码',
  `is_default` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否默认模板:1是，0否',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `remarks` varchar(255) NOT NULL DEFAULT ' ' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='模板表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_template`
--

LOCK TABLES `pay_template` WRITE;
/*!40000 ALTER TABLE `pay_template` DISABLE KEYS */;
INSERT INTO `pay_template` VALUES (1,' 默认模板','default',0,1524299660,1524299660,' 默认模板 无法删除 QQ1968984054原创模板'),(2,'2018新模板','view4',0,1555072900,1555072900,'包含所有页面-推荐QQ1968984054'),(3,'模板二','view2',0,1541007060,1541007060,'默认模板二，有登录页，注册页'),(4,'模板三','view3',0,1541007043,1541007043,'雀付优化模板-有登录页，注册页，支持手机浏览'),(5,'模板五','view5',0,1541007015,1541007015,'无首页-有登录页，注册页-自适应手机'),(6,'九州支付','view6',0,1541007031,1541007031,'九州支付,有登录页，不支持手机访问'),(8,'okpay-最新','view7',0,1552984915,1552984915,'只有登录注册页20190319更新'),(9,'HYIP模板','view8',0,1556695693,1556695693,'QQ1968984054原创模板'),(10,'模板9','view9',0,0,1564803363,'2019年8月新增'),(11,'模板10','view10',1,1648515818,1648515818,'贱贱2022年新模板');
/*!40000 ALTER TABLE `pay_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_tikuanconfig`
--

DROP TABLE IF EXISTS `pay_tikuanconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_tikuanconfig` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商户编号',
  `tkzxmoney` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最小提款金额',
  `tkzdmoney` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最大提款金额',
  `dayzdmoney` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当日提款最大总金额',
  `dayzdnum` int(11) NOT NULL DEFAULT '0' COMMENT '当日提款最大次数',
  `t1zt` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT 'T+1 ：1开启 0 关闭',
  `t0zt` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT 'T+0 ：1开启 0 关闭',
  `gmt0` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '购买T0',
  `tkzt` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '提款设置 1 开启 0 关闭',
  `tktype` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '提款手续费类型 1 每笔 0 比例 ',
  `systemxz` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0 系统规则 1 用户规则',
  `sxfrate` varchar(20) DEFAULT NULL COMMENT '单笔提款比例',
  `sxffixed` varchar(20) DEFAULT NULL COMMENT '单笔提款手续费',
  `issystem` tinyint(1) unsigned DEFAULT '0' COMMENT '平台规则 1 是 0 否',
  `allowstart` varchar(20) NOT NULL DEFAULT '0' COMMENT '提款允许开始时间',
  `allowend` varchar(20) NOT NULL DEFAULT '0' COMMENT '提款允许结束时间',
  `daycardzdmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '单人单卡单日最高提现额',
  `auto_df_switch` tinyint(1) NOT NULL DEFAULT '0' COMMENT '自动代付开关',
  `auto_df_maxmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '单笔代付最大金额限制',
  `auto_df_stime` varchar(20) NOT NULL DEFAULT '' COMMENT '自动代付开始时间',
  `auto_df_etime` varchar(20) NOT NULL DEFAULT '' COMMENT '自动代付结束时间',
  `auto_df_max_count` int(11) NOT NULL DEFAULT '0' COMMENT '商户每天自动代付笔数限制',
  `auto_df_max_sum` int(11) NOT NULL DEFAULT '0' COMMENT '商户每天自动代付最大总金额限制',
  `tk_charge_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '扣除手续费方式，0：从到账金额里扣，1：从商户余额里扣',
  PRIMARY KEY (`id`),
  UNIQUE KEY `IND_UID` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_tikuanconfig`
--

LOCK TABLES `pay_tikuanconfig` WRITE;
/*!40000 ALTER TABLE `pay_tikuanconfig` DISABLE KEYS */;
INSERT INTO `pay_tikuanconfig` VALUES (28,505,1000.00,1000000.00,50000000.00,100,0,0,200.00,1,1,0,'1','5',1,'00:01','23:59',1000000.00,0,50000.00,'00:00','23:59',0,0,0),(29,2,0.00,0.00,0.00,0,1,0,0.00,1,1,0,'','2',0,'0','0',0.00,0,0.00,'','',0,0,0),(30,180762223,500.00,50000.00,1000000.00,100,0,0,0.00,1,1,1,'1','5',0,'0','0',0.00,0,0.00,'','',0,0,1),(31,180751041,1.00,100.01,500.00,5,0,0,0.00,0,0,1,'0.1','',0,'0','0',0.00,0,0.00,'','',0,0,0),(32,180768736,100.00,50000.00,1100000.00,100,0,0,0.00,0,1,1,'','5',0,'0','0',0.00,0,0.00,'','',0,0,0),(33,4,0.00,0.00,0.00,0,0,0,0.00,0,0,1,'','',0,'0','0',0.00,0,0.00,'','',0,0,0),(34,31,0.00,0.00,0.00,0,1,0,0.00,0,0,1,'','',0,'0','0',0.00,0,0.00,'','',0,0,0),(35,34,1.00,100.00,0.00,0,0,0,0.00,0,0,1,'','',0,'0','0',0.00,0,0.00,'','',0,0,0),(36,48,0.00,0.00,0.00,0,0,0,0.00,0,0,0,NULL,NULL,0,'0','0',0.00,0,0.00,'','',0,0,0),(37,55,0.00,0.00,0.00,0,0,0,0.00,0,0,0,NULL,NULL,0,'0','0',0.00,0,0.00,'','',0,0,0);
/*!40000 ALTER TABLE `pay_tikuanconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_tikuanholiday`
--

DROP TABLE IF EXISTS `pay_tikuanholiday`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_tikuanholiday` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排除日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='排除节假日';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_tikuanholiday`
--

LOCK TABLES `pay_tikuanholiday` WRITE;
/*!40000 ALTER TABLE `pay_tikuanholiday` DISABLE KEYS */;
INSERT INTO `pay_tikuanholiday` VALUES (19,1562688000);
/*!40000 ALTER TABLE `pay_tikuanholiday` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_tikuanmoney`
--

DROP TABLE IF EXISTS `pay_tikuanmoney`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_tikuanmoney` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0' COMMENT '结算用户ID',
  `websiteid` int(11) NOT NULL DEFAULT '0',
  `payapiid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '结算通道ID',
  `t` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '结算方式: 1 T+1 ,0 T+0',
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `datetype` varchar(2) NOT NULL,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=691 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_tikuanmoney`
--

LOCK TABLES `pay_tikuanmoney` WRITE;
/*!40000 ALTER TABLE `pay_tikuanmoney` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_tikuanmoney` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_tikuantime`
--

DROP TABLE IF EXISTS `pay_tikuantime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_tikuantime` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `baiks` tinyint(2) unsigned DEFAULT '0' COMMENT '白天提款开始时间',
  `baijs` tinyint(2) unsigned DEFAULT '0' COMMENT '白天提款结束时间',
  `wanks` tinyint(2) unsigned DEFAULT '0' COMMENT '晚间提款开始时间',
  `wanjs` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='提款时间';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_tikuantime`
--

LOCK TABLES `pay_tikuantime` WRITE;
/*!40000 ALTER TABLE `pay_tikuantime` DISABLE KEYS */;
INSERT INTO `pay_tikuantime` VALUES (1,24,17,18,24);
/*!40000 ALTER TABLE `pay_tikuantime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_tklist`
--

DROP TABLE IF EXISTS `pay_tklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_tklist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `bankname` varchar(300) NOT NULL,
  `bankzhiname` varchar(300) NOT NULL,
  `banknumber` varchar(300) NOT NULL,
  `bankfullname` varchar(300) NOT NULL,
  `sheng` varchar(300) NOT NULL,
  `shi` varchar(300) NOT NULL,
  `sqdatetime` datetime DEFAULT NULL,
  `cldatetime` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `tkmoney` decimal(15,2) NOT NULL DEFAULT '0.00',
  `sxfmoney` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `money` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `t` int(4) NOT NULL DEFAULT '1',
  `payapiid` int(11) NOT NULL DEFAULT '0',
  `memo` text COMMENT '备注',
  `tk_charge_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '扣除手续费方式，0：从到账金额里扣，1：从商户余额里扣',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_tklist`
--

LOCK TABLES `pay_tklist` WRITE;
/*!40000 ALTER TABLE `pay_tklist` DISABLE KEYS */;
INSERT INTO `pay_tklist` VALUES (1,1,'中国工商银行','北京支行','123456789','测试','北京','北京','2022-03-30 08:47:06','2022-03-30 09:13:06',2,1000.00,5.00,995.00,0,0,NULL,0);
/*!40000 ALTER TABLE `pay_tklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_updatelog`
--

DROP TABLE IF EXISTS `pay_updatelog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_updatelog` (
  `version` varchar(20) NOT NULL DEFAULT '购买联系QQ9861262',
  `lastupdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_updatelog`
--

LOCK TABLES `pay_updatelog` WRITE;
/*!40000 ALTER TABLE `pay_updatelog` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_updatelog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_user_channel_account`
--

DROP TABLE IF EXISTS `pay_user_channel_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_user_channel_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `account_ids` varchar(255) NOT NULL DEFAULT '' COMMENT '子账号id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启指定账号',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='用户指定指账号';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_user_channel_account`
--

LOCK TABLES `pay_user_channel_account` WRITE;
/*!40000 ALTER TABLE `pay_user_channel_account` DISABLE KEYS */;
INSERT INTO `pay_user_channel_account` VALUES (4,180762223,'2,50',0),(5,180751041,'16,17',1),(6,180768751,'',0),(7,6,'74',1),(8,62,'59,60,72',1),(9,200328822,'',0),(10,200795082,'177',1),(11,200368395,'168',1),(12,200829670,'187',1),(13,200993842,'',0);
/*!40000 ALTER TABLE `pay_user_channel_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_user_code`
--

DROP TABLE IF EXISTS `pay_user_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_user_code` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT '0' COMMENT '0找回密码',
  `code` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `uptime` int(11) DEFAULT NULL COMMENT '更新时间',
  `endtime` int(11) DEFAULT NULL COMMENT '有效时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_user_code`
--

LOCK TABLES `pay_user_code` WRITE;
/*!40000 ALTER TABLE `pay_user_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_user_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_user_riskcontrol_config`
--

DROP TABLE IF EXISTS `pay_user_riskcontrol_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_user_riskcontrol_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `min_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最小金额',
  `max_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单笔最大金额',
  `unit_all_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '单位时间内交易总金额',
  `all_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '当天交易总金额',
  `start_time` tinyint(10) unsigned NOT NULL DEFAULT '0' COMMENT '一天交易开始时间',
  `end_time` tinyint(10) unsigned NOT NULL DEFAULT '0' COMMENT '一天交易结束时间',
  `unit_number` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间内交易的总笔数',
  `is_system` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否平台规则',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态:1开通，0关闭',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `edit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `time_unit` char(1) NOT NULL DEFAULT 'i' COMMENT '限制的时间单位',
  `unit_interval` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '单位时间值',
  `domain` varchar(255) NOT NULL DEFAULT ' ' COMMENT '防封域名',
  `systemxz` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0 系统规则 1 用户规则',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='交易配置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_user_riskcontrol_config`
--

LOCK TABLES `pay_user_riskcontrol_config` WRITE;
/*!40000 ALTER TABLE `pay_user_riskcontrol_config` DISABLE KEYS */;
INSERT INTO `pay_user_riskcontrol_config` VALUES (1,0,500.00,0.00,0.00,0.00,0,0,0,1,0,1543806443,0,'i',0,'',0),(2,180751041,0.00,10000.00,0.00,0.00,0,0,0,0,0,1533759190,1532768653,'s',0,'',1),(3,180768684,1.00,10000.00,0.00,299972.00,0,0,0,0,1,1532846143,1532774264,'s',0,'',1),(4,180762223,10.00,5000.00,0.00,0.00,0,0,0,0,0,1536964058,1532774447,'s',0,'',0);
/*!40000 ALTER TABLE `pay_user_riskcontrol_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_userrate`
--

DROP TABLE IF EXISTS `pay_userrate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_userrate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `payapiid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '通道ID',
  `feilv` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '运营费率',
  `fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '封顶费率',
  `t0feilv` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0运营费率',
  `t0fengding` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT 'T0封顶费率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商户通道费率';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_userrate`
--

LOCK TABLES `pay_userrate` WRITE;
/*!40000 ALTER TABLE `pay_userrate` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_userrate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_version`
--

DROP TABLE IF EXISTS `pay_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL DEFAULT '0' COMMENT '版本',
  `author` varchar(255) NOT NULL DEFAULT ' ' COMMENT '作者',
  `save_time` varchar(255) NOT NULL DEFAULT '0000-00-00' COMMENT '修改时间,格式YYYY-mm-dd',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='数据库版本表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_version`
--

LOCK TABLES `pay_version` WRITE;
/*!40000 ALTER TABLE `pay_version` DISABLE KEYS */;
INSERT INTO `pay_version` VALUES (1,'5.5','qq9861262','2018-4-8'),(2,'5.6','qq9861262','2018/9/02 17:45:33'),(3,'6.0.4','MTk2ODk4NDA1NA==','2019/07/20');
/*!40000 ALTER TABLE `pay_version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_websiteconfig`
--

DROP TABLE IF EXISTS `pay_websiteconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_websiteconfig` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `websitename` varchar(300) DEFAULT NULL COMMENT '网站名称',
  `domain` varchar(300) DEFAULT NULL COMMENT '网址',
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `qq` varchar(30) DEFAULT NULL,
  `directory` varchar(100) DEFAULT NULL COMMENT '后台目录名称',
  `icp` varchar(100) DEFAULT NULL,
  `tongji` varchar(1000) DEFAULT NULL COMMENT '统计',
  `login` varchar(100) DEFAULT NULL COMMENT '登录地址',
  `payingservice` tinyint(1) unsigned DEFAULT '0' COMMENT '商户代付 1 开启 0 关闭',
  `authorized` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '商户认证 1 开启 0 关闭',
  `invitecode` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '邀请码注册',
  `company` varchar(200) DEFAULT NULL COMMENT '公司名称',
  `serverkey` varchar(50) DEFAULT NULL COMMENT '授权服务key修改联系QQ1968984054',
  `withdraw` tinyint(1) DEFAULT '0' COMMENT '提现通知：0关闭，1开启',
  `login_warning_num` tinyint(3) unsigned NOT NULL DEFAULT '3' COMMENT '前台可以错误登录次数',
  `login_ip` varchar(1000) NOT NULL DEFAULT ' ' COMMENT '登录IP',
  `is_repeat_order` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否允许重复订单:1是，0否',
  `google_auth` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启谷歌身份验证登录',
  `df_api` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启代付API',
  `logo` varchar(255) NOT NULL DEFAULT ' ' COMMENT '公司logo',
  `random_mchno` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启随机商户号',
  `register_need_activate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户注册是否需激活',
  `admin_alone_login` tinyint(1) NOT NULL DEFAULT '0' COMMENT '管理员是否只允许同时一次登录',
  `max_auth_error_times` int(10) NOT NULL DEFAULT '5' COMMENT '验证错误最大次数',
  `auth_error_ban_time` int(10) NOT NULL DEFAULT '10' COMMENT '验证错误超限冻结时间（分钟）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_websiteconfig`
--

LOCK TABLES `pay_websiteconfig` WRITE;
/*!40000 ALTER TABLE `pay_websiteconfig` DISABLE KEYS */;
INSERT INTO `pay_websiteconfig` VALUES (1,'聚合支付','47.242.170.147:60109','kefu@qq.com','1888888888','22222222','admin','闽ICP备17031751号-1','','taoke',1,0,0,'锐驰智联科技有限公司','0d6de302cbc615de3b09463acea87662',1,3,' ',0,0,0,'Uploads/logo/5d41cdd0bcf75.png',0,0,0,999,3464);
/*!40000 ALTER TABLE `pay_websiteconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_wsry`
--

DROP TABLE IF EXISTS `pay_wsry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_wsry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shid` varchar(255) DEFAULT NULL,
  `ordernotwo` varchar(255) DEFAULT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `sjmoney` double(10,2) DEFAULT '0.00',
  `sxf` double(10,2) DEFAULT '0.00',
  `orderno` varchar(255) DEFAULT NULL,
  `ordernum` varchar(10) DEFAULT NULL,
  `paytype` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gettime` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_wsry`
--

LOCK TABLES `pay_wsry` WRITE;
/*!40000 ALTER TABLE `pay_wsry` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_wsry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_wttklist`
--

DROP TABLE IF EXISTS `pay_wttklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_wttklist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `bankname` varchar(300) NOT NULL,
  `bankzhiname` varchar(300) NOT NULL,
  `banknumber` varchar(300) NOT NULL,
  `bankfullname` varchar(300) NOT NULL,
  `sheng` varchar(300) NOT NULL,
  `shi` varchar(300) NOT NULL,
  `sqdatetime` datetime DEFAULT NULL,
  `cldatetime` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `tkmoney` decimal(15,2) NOT NULL DEFAULT '0.00',
  `sxfmoney` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '手续费',
  `money` decimal(15,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '实际到账',
  `t` int(4) NOT NULL DEFAULT '1',
  `payapiid` int(11) NOT NULL DEFAULT '0',
  `memo` text COMMENT '备注',
  `additional` varchar(1000) NOT NULL DEFAULT ' ' COMMENT '额外的参数',
  `code` varchar(64) NOT NULL DEFAULT ' ' COMMENT '代码控制器名称',
  `df_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代付通道id',
  `df_name` varchar(64) NOT NULL DEFAULT ' ' COMMENT '代付名称',
  `orderid` varchar(100) NOT NULL DEFAULT ' ' COMMENT '订单id',
  `cost` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '成本',
  `cost_rate` decimal(10,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '成本费率',
  `rate_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '费率类型：按单笔收费0，按比例收费：1',
  `extends` text COMMENT '扩展数据',
  `out_trade_no` varchar(30) DEFAULT '' COMMENT '下游订单号',
  `df_api_id` int(11) DEFAULT '0' COMMENT '代付API申请ID',
  `auto_submit_try` int(10) NOT NULL DEFAULT '0' COMMENT '自动代付尝试提交次数',
  `is_auto` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否自动提交',
  `last_submit_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后提交时间',
  `df_lock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '代付锁，防止重复提交',
  `auto_query_num` int(10) NOT NULL DEFAULT '0' COMMENT '自动查询次数',
  `channel_mch_id` varchar(50) NOT NULL DEFAULT '' COMMENT '通道商户号',
  `df_charge_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '代付API扣除手续费方式，0：从到账金额里扣，1：从商户余额里扣',
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `df_id` (`df_id`),
  KEY `orderid` (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_wttklist`
--

LOCK TABLES `pay_wttklist` WRITE;
/*!40000 ALTER TABLE `pay_wttklist` DISABLE KEYS */;
INSERT INTO `pay_wttklist` VALUES (1,190937965,'北京银行','大概给给','554634534534','发个','官方','以后','2019-10-29 14:22:08','2020-01-06 16:24:10',3,1000.00,10.00,990.00,0,0,'测试','',' ',0,' ','I1029301286916737',0.0000,0.0000,0,'','',0,0,0,0,0,0,'',0);
/*!40000 ALTER TABLE `pay_wttklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pay'
--

--
-- Dumping routines for database 'pay'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-01 15:47:53
