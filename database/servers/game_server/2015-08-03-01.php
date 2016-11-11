<?php

$this->AddSQL("
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `player_daily_quest_star_award_info`(
	`pid` bigint(20) NOT NULL COMMENT '玩家id',
	`stars` int(10) NOT NULL COMMENT '当日星数',
	`lastupdatetime` bigint(12) NOT NULL COMMENT '最后修改时间',
	`awarded` varchar(50) NOT NULL COMMENT '已领阶段',
	PRIMARY KEY(`pid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家每日任务星数奖励状态';

# Dump of table daily_quest
# ------------------------------------------------------------

DROP TABLE IF EXISTS `daily_quest`;

CREATE TABLE `daily_quest` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '任务ID',
  `name` varchar(10) NOT NULL COMMENT '任务标题',
  `desc` varchar(240) DEFAULT '' COMMENT '简介',
  `require_min_level` int(11) NOT NULL COMMENT '要求玩家最低等级',
  `require_max_level` int(11) NOT NULL COMMENT '要求玩家最高等级',
  `require_open_day` varchar(10) DEFAULT '' COMMENT '开放日',
  `require_count` smallint(6) NOT NULL COMMENT '需要数量',
  `award_exp` int(11) NOT NULL COMMENT '奖励经验',
  `award_coins` bigint(20) NOT NULL DEFAULT '0' COMMENT '奖励铜钱',
  `award_physical` tinyint(4) NOT NULL DEFAULT '0' COMMENT '奖励体力',
  `award_item1_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品1',
  `award_item1_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品1数量',
  `award_item2_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品2',
  `award_item2_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品2数量',
  `award_item3_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品3',
  `award_item3_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品3数量',
  `award_item4_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品4',
  `award_item4_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励物品4数量',
  `level_type` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '关卡类型; -1 无; 0-区域关卡;1-资源关卡;2-通天塔;8-难度关卡;9-伙伴关卡;10-灵宠关卡;11-魂侍关卡',
  `level_sub_type` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '关卡子类型(-1--无;1--铜钱关卡;2--经验关卡)',
  `class` smallint(6) NOT NULL COMMENT '任务类别',
  `order` int(11) DEFAULT '0' COMMENT '显示优先级',
  `award_ingot` int(11) NOT NULL DEFAULT '0' COMMENT '奖励元宝',
  `award_stars` smallint(6) NOT NULL DEFAULT '0' COMMENT '奖励星数',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COMMENT='每日任务';

/*!40000 ALTER TABLE `daily_quest` DISABLE KEYS */;

INSERT INTO `daily_quest` (`id`, `name`, `desc`, `require_min_level`, `require_max_level`, `require_open_day`, `require_count`, `award_exp`, `award_coins`, `award_physical`, `award_item1_id`, `award_item1_num`, `award_item2_id`, `award_item2_num`, `award_item3_id`, `award_item3_num`, `award_item4_id`, `award_item4_num`, `level_type`, `level_sub_type`, `class`, `order`, `award_ingot`, `award_stars`)
VALUES
	(4,'魂侍试炼','强大的魂侍将会帮助你逆转厄运',35,40,'1 4 0',1,500,1000,0,0,0,0,0,0,0,0,0,11,-1,7,30,1,10),
	(5,'灵宠试炼','灵宠可不只是一个小小的辅助，在关键时刻它将成为你最重要的依靠',35,40,'2 5 0',1,500,1000,0,0,0,0,0,0,0,0,0,10,-1,6,35,1,10),
	(6,'伙伴试炼','一个人的强大并不是真的强大，和伙伴一起成长才能让自己成为真正的大侠',35,40,'3 6 0',1,500,1000,0,0,0,0,0,0,0,0,0,9,-1,5,40,1,10),
	(10,'勇闯深渊','深渊的魔物死亡后又重生了，该想个办法才行',15,20,'',1,200,1000,0,0,0,0,0,0,0,0,0,8,-1,4,10,1,10),
	(11,'财源滚滚','在洞天福地之中有一岛屿，岛上有取之不尽的金银珠宝，没有人知道它从何而来',25,44,'',2,500,1000,0,0,0,0,0,0,0,0,0,1,1,1,15,1,10),
	(12,'突飞猛进','在洞天福地之中有一神殿，聚天地之灵气，传说曾是武神修炼之地',25,44,'',2,500,1000,0,0,0,0,0,0,0,0,0,1,2,2,20,1,10),
	(14,'勇闯彩虹桥','没有人知道彩虹桥的另一端有什么，但是在彩虹桥上可以获得很多新的魂侍',15,20,'',1,200,1000,0,0,0,0,0,0,0,0,0,2,-1,3,25,1,10),
	(16,'爱心祈福','友谊是最大的财富',13,20,'',5,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,11,60,1,10),
	(17,'赠送爱心','快向好友表达自己的爱心吧',13,20,'',1,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,12,65,1,10),
	(18,'挑战比武场','想做大侠，那就去比武场证明自己',17,40,'',3,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,8,50,1,10),
	(20,'魂侍培养','影界果实能让魂侍成长',13,20,'',5,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,14,70,1,10),
	(21,'装备强化','强化后的装备将变的更强',14,20,'',3,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,15,75,1,10),
	(22,'装备重铸','重铸装备可以替换掉一条不适合的追加属性',20,40,'',1,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,16,80,1,10),
	(23,'灵宠幻境','在灵宠幻境中消灭的敌人越多，可以获得的灵魄也越多',30,40,'',1,500,1000,0,0,0,0,0,0,0,0,0,12,-1,17,27,1,10),
	(25,'灵宠培养','灵魄能让灵宠成长',30,40,'',5,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,19,73,1,10),
	(28,'剑山拔剑','相信在剑山你能寻找到最适合自己的剑心',30,60,'',5,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,13,85,1,10),
	(29,'齐心协力','敌人太过强大，找小伙伴一起消灭它',30,40,'',1,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,9,90,1,10),
	(30,'勤学苦练','每天勤学苦练，滴水穿石，最终武功大成',15,20,'',5,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,20,43,1,10),
	(31,'队伍友情','与伙伴一起配合演练，挥洒青春的汗水',15,20,'',5,200,1000,0,0,0,0,0,0,0,0,0,-1,-1,21,46,1,10),
	(32,'勇闯深渊贰','深渊的魔物死亡后又重生了，该想个办法才行',21,40,'',2,500,1000,0,0,0,0,0,0,0,0,0,8,-1,4,10,1,10),
	(33,'勇闯深渊叁','深渊的魔物死亡后又重生了，该想个办法才行',41,60,'',2,1000,1000,0,0,0,0,0,0,0,0,0,8,-1,4,10,1,10),
	(34,'勇闯深渊肆','深渊的魔物死亡后又重生了，该想个办法才行',61,80,'',2,3000,1000,0,0,0,0,0,0,0,0,0,8,-1,4,10,1,10),
	(35,'勇闯深渊伍','深渊的魔物死亡后又重生了，该想个办法才行',81,200,'',2,5000,1000,0,0,0,0,0,0,0,0,0,8,-1,4,10,1,10),
	(36,'财源滚滚贰','在洞天福地之中有一岛屿，岛上有取之不尽的金银珠宝，没有人知道它从何而来',45,60,'',2,1000,1000,0,682,2,0,0,0,0,0,0,1,1,1,15,1,10),
	(37,'财源滚滚叁','在洞天福地之中有一岛屿，岛上有取之不尽的金银珠宝，没有人知道它从何而来',61,80,'',2,3000,1000,0,682,2,0,0,0,0,0,0,1,1,1,15,1,10),
	(38,'财源滚滚肆','在洞天福地之中有一岛屿，岛上有取之不尽的金银珠宝，没有人知道它从何而来',81,200,'',2,5000,1000,0,682,2,0,0,0,0,0,0,1,1,1,15,1,10),
	(39,'突飞猛进贰','在洞天福地之中有一神殿，聚天地之灵气，传说曾是武神修炼之地',45,60,'',2,1000,1000,0,682,2,0,0,0,0,0,0,1,2,2,20,1,10),
	(40,'突飞猛进叁','在洞天福地之中有一神殿，聚天地之灵气，传说曾是武神修炼之地',61,80,'',2,3000,1000,0,682,2,0,0,0,0,0,0,1,2,2,20,1,10),
	(41,'突飞猛进肆','在洞天福地之中有一神殿，聚天地之灵气，传说曾是武神修炼之地',81,200,'',2,5000,1000,0,682,2,0,0,0,0,0,0,1,2,2,20,1,10),
	(42,'勇闯彩虹桥贰','没有人知道彩虹桥的另一端有什么，但是在彩虹桥上可以获得很多新的魂侍',21,40,'',1,500,1000,0,0,0,0,0,0,0,0,0,2,-1,3,25,1,10),
	(43,'勇闯彩虹桥叁','没有人知道彩虹桥的另一端有什么，但是在彩虹桥上可以获得很多新的魂侍',41,60,'',1,1000,1000,0,0,0,0,0,0,0,0,0,2,-1,3,25,1,10),
	(44,'勇闯彩虹桥肆','没有人知道彩虹桥的另一端有什么，但是在彩虹桥上可以获得很多新的魂侍',61,80,'',1,3000,1000,0,0,0,0,0,0,0,0,0,2,-1,3,25,1,10),
	(45,'勇闯彩虹桥伍','没有人知道彩虹桥的另一端有什么，但是在彩虹桥上可以获得很多新的魂侍',81,200,'',1,5000,1000,0,0,0,0,0,0,0,0,0,2,-1,3,25,1,10),
	(46,'灵宠幻境贰','在灵宠幻境中消灭的敌人越多，可以获得的灵魄也越多',41,60,'',1,1000,1000,0,0,0,0,0,0,0,0,0,12,-1,17,27,1,10),
	(47,'灵宠幻境叁','在灵宠幻境中消灭的敌人越多，可以获得的灵魄也越多',61,80,'',1,3000,1000,0,0,0,0,0,0,0,0,0,12,-1,17,27,1,10),
	(48,'灵宠幻境肆','在灵宠幻境中消灭的敌人越多，可以获得的灵魄也越多',81,200,'',1,5000,1000,0,0,0,0,0,0,0,0,0,12,-1,17,27,1,10),
	(49,'魂侍试炼贰','强大的魂侍将会帮助你逆转厄运',41,60,'1 4 0',1,1000,1000,0,0,0,0,0,0,0,0,0,11,-1,7,30,1,10),
	(50,'魂侍试炼叁','强大的魂侍将会帮助你逆转厄运',61,80,'1 4 0',1,3000,1000,0,0,0,0,0,0,0,0,0,11,-1,7,30,1,10),
	(51,'魂侍试炼肆','强大的魂侍将会帮助你逆转厄运',81,200,'1 4 0',1,5000,1000,0,0,0,0,0,0,0,0,0,11,-1,7,30,1,10),
	(52,'灵宠试炼贰','灵宠可不只是一个小小的辅助，在关键时刻它将成为你最重要的依靠',41,60,'2 5 0',1,1000,1000,0,0,0,0,0,0,0,0,0,10,-1,6,35,1,10),
	(53,'灵宠试炼叁','灵宠可不只是一个小小的辅助，在关键时刻它将成为你最重要的依靠',61,80,'2 5 0',1,3000,1000,0,0,0,0,0,0,0,0,0,10,-1,6,35,1,10),
	(54,'灵宠试炼肆','灵宠可不只是一个小小的辅助，在关键时刻它将成为你最重要的依靠',81,200,'2 5 0',1,5000,1000,0,0,0,0,0,0,0,0,0,10,-1,6,35,1,10),
	(55,'伙伴试炼贰','一个人的强大并不是真的强大，和伙伴一起成长才能让自己成为真正的大侠',41,60,'3 6 0',1,1000,1000,0,0,0,0,0,0,0,0,0,9,-1,5,40,1,10),
	(56,'伙伴试炼叁','一个人的强大并不是真的强大，和伙伴一起成长才能让自己成为真正的大侠',61,80,'3 6 0',1,3000,1000,0,0,0,0,0,0,0,0,0,9,-1,5,40,1,10),
	(57,'伙伴试炼肆','一个人的强大并不是真的强大，和伙伴一起成长才能让自己成为真正的大侠',81,200,'3 6 0',1,5000,1000,0,0,0,0,0,0,0,0,0,9,-1,5,40,1,10),
	(58,'挑战比武场贰','想做大侠，那就去比武场证明自己',41,60,'',3,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,8,50,1,10),
	(59,'挑战比武场叁','想做大侠，那就去比武场证明自己',61,80,'',3,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,8,50,1,10),
	(60,'挑战比武场肆','想做大侠，那就去比武场证明自己',81,200,'',3,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,8,50,1,10),
	(61,'爱心祈福贰','友谊是最大的财富',21,40,'',5,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,11,60,1,10),
	(62,'爱心祈福叁','友谊是最大的财富',41,60,'',5,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,11,60,1,10),
	(63,'爱心祈福肆','友谊是最大的财富',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,11,60,1,10),
	(64,'爱心祈福伍','友谊是最大的财富',81,200,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,11,60,1,10),
	(65,'赠送爱心贰','快向好友表达自己的爱心吧',21,40,'',1,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,12,65,1,10),
	(66,'赠送爱心叁','快向好友表达自己的爱心吧',41,60,'',1,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,12,65,1,10),
	(67,'赠送爱心肆','快向好友表达自己的爱心吧',61,80,'',1,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,12,65,1,10),
	(68,'赠送爱心伍','快向好友表达自己的爱心吧',81,200,'',1,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,12,65,1,10),
	(69,'魂侍培养贰','影界果实能让魂侍成长',21,40,'',5,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,14,70,1,10),
	(70,'魂侍培养叁','影界果实能让魂侍成长',41,60,'',5,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,14,70,1,10),
	(71,'魂侍培养肆','影界果实能让魂侍成长',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,14,70,1,10),
	(72,'魂侍培养伍','影界果实能让魂侍成长',81,100,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,14,70,1,10),
	(73,'灵宠培养贰','灵魄能让灵宠成长',41,60,'',5,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,19,73,1,10),
	(74,'灵宠培养叁','灵魄能让灵宠成长',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,19,73,1,10),
	(75,'灵宠培养肆','灵魄能让灵宠成长',81,100,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,19,73,1,10),
	(76,'装备强化贰','强化后的装备将变的更强',21,40,'',3,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,15,75,1,10),
	(77,'装备强化叁','强化后的装备将变的更强',41,60,'',3,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,15,75,1,10),
	(78,'装备强化肆','强化后的装备将变的更强',61,80,'',3,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,15,75,1,10),
	(79,'装备重铸贰','重铸装备可以替换掉一条不适合的追加属性',41,60,'',1,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,16,80,1,10),
	(80,'装备重铸叁','重铸装备可以替换掉一条不适合的追加属性',61,80,'',1,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,16,80,1,10),
	(81,'剑山拔剑贰','相信在剑山你能寻找到最适合自己的剑心',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,13,85,1,10),
	(82,'剑山拔剑叁','相信在剑山你能寻找到最适合自己的剑心',81,200,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,13,85,1,10),
	(83,'齐心协力贰','敌人太过强大，找小伙伴一起消灭它',41,60,'',1,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,9,90,1,10),
	(84,'齐心协力叁','敌人太过强大，找小伙伴一起消灭它',61,80,'',1,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,9,90,1,10),
	(85,'齐心协力肆','敌人太过强大，找小伙伴一起消灭它',81,200,'',1,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,9,90,1,10),
	(86,'勤学苦练贰','每天勤学苦练，滴水穿石，最终武功大成',21,40,'',5,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,20,43,1,10),
	(87,'勤学苦练叁','每天勤学苦练，滴水穿石，最终武功大成',41,60,'',5,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,20,43,1,10),
	(88,'勤学苦练肆','每天勤学苦练，滴水穿石，最终武功大成',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,20,43,1,10),
	(89,'勤学苦练伍','每天勤学苦练，滴水穿石，最终武功大成',81,200,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,20,43,1,10),
	(90,'队伍友情贰','与伙伴一起配合演练，挥洒青春的汗水',21,40,'',5,500,1000,0,0,0,0,0,0,0,0,0,-1,-1,21,46,1,10),
	(91,'队伍友情叁','与伙伴一起配合演练，挥洒青春的汗水',41,60,'',5,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,21,46,1,10),
	(92,'队伍友情肆','与伙伴一起配合演练，挥洒青春的汗水',61,80,'',5,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,21,46,1,10),
	(93,'队伍友情伍','与伙伴一起配合演练，挥洒青春的汗水',81,100,'',5,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,21,46,1,10),
	(94,'探索云海','穿云海踏山觅仙踪，寻洞天福地而修行',45,60,'',20,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,24,53,1,10),
	(95,'探索云海贰','穿云海踏山觅仙踪，寻洞天福地而修行',61,80,'',20,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,24,53,1,10),
	(96,'探索云海叁','穿云海踏山觅仙踪，寻洞天福地而修行',81,200,'',20,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,24,53,1,10),
	(97,'阵印召唤','阵印是会是你战场上的强大助力',45,60,'',4,1000,1000,0,0,0,0,0,0,0,0,0,-1,-1,23,56,1,10),
	(98,'阵印召唤贰','阵印是会是你战场上的强大助力',61,80,'',4,3000,1000,0,0,0,0,0,0,0,0,0,-1,-1,23,56,1,10),
	(99,'阵印召唤叁','阵印是会是你战场上的强大助力',81,200,'',4,5000,1000,0,0,0,0,0,0,0,0,0,-1,-1,23,56,1,10);

/*!40000 ALTER TABLE `daily_quest` ENABLE KEYS */;


# Dump of table quest_start_award
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quest_start_award`;

CREATE TABLE `quest_start_award` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(30) NOT NULL COMMENT '奖励名称',
  `stars` int(10) NOT NULL COMMENT '所需星星数量',
  `sign` varchar(30) NOT NULL COMMENT '标识',
  `ingot` int(10) NOT NULL COMMENT '奖励元宝',
  `coin` bigint(12) NOT NULL COMMENT '奖励铜钱',
  `heart` int(10) NOT NULL COMMENT '奖励爱心',
  `item1` int(10) NOT NULL COMMENT '奖励物品1',
  `item1_num` int(10) NOT NULL COMMENT '奖励物品1数量',
  `item2` int(10) NOT NULL COMMENT '奖励物品2',
  `item2_num` int(10) NOT NULL COMMENT '奖励物品2数量',
  `item3` int(10) NOT NULL COMMENT '奖励物品3',
  `item3_num` int(10) NOT NULL COMMENT '奖励物品3数量',
  `item4` int(10) NOT NULL COMMENT '奖励物品4',
  `item4_num` int(10) NOT NULL COMMENT '奖励物品4数量',
  `item5` int(10) NOT NULL COMMENT '奖励物品5',
  `item5_num` int(10) NOT NULL COMMENT '奖励物品5数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COMMENT='每日任务星数奖励';

/*!40000 ALTER TABLE `quest_start_award` DISABLE KEYS */;

INSERT INTO `quest_start_award` (`id`, `name`, `stars`, `sign`, `ingot`, `coin`, `heart`, `item1`, `item1_num`, `item2`, `item2_num`, `item3`, `item3_num`, `item4`, `item4_num`, `item5`, `item5_num`)
VALUES
	(1,'初级青铜宝箱',20,'',0,2000,0,236,4,0,0,0,0,0,0,0,0),
	(2,'中级青铜宝箱',50,'',0,5000,0,237,4,0,0,0,0,0,0,0,0),
	(3,'高级青铜宝箱',100,'',0,10000,0,238,4,0,0,0,0,0,0,0,0),
	(4,'初级白银宝箱',120,'',0,12000,0,235,8,0,0,0,0,0,0,0,0),
	(5,'中级白银宝箱',150,'',0,15000,0,236,8,0,0,0,0,0,0,0,0),
	(6,'高级白银宝箱',200,'',0,20000,0,237,8,0,0,0,0,0,0,0,0),
	(7,'初级黄金宝箱',220,'',0,22000,0,238,8,235,8,0,0,0,0,0,0),
	(8,'中级黄金宝箱',250,'',0,25000,0,236,8,237,8,0,0,0,0,0,0),
	(9,'高级黄金宝箱',300,'',0,30000,0,238,8,235,8,0,0,0,0,0,0);

/*!40000 ALTER TABLE `quest_start_award` ENABLE KEYS */;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
");