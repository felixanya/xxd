var pve_level_data = {
		/**
	 * 0 : id, smallint, 要求等级
	 * 1 : floor, smallint, 关卡层数
	 * 2 : award_item, smallint, 首次通关奖励物品ID
	 * 3 : award_num, smallint, 首次通关奖励物品数量
	 * 4 : moster_num, smallint, 怪物数量
	 * 5 : basic_award_num, smallint, 基础奖励
	 * 6 : award_factor, smallint, 奖励系数
	 * 7 : level, smallint, 要求等级 
	 */

	Id : 0,
	Floor : 1,
	Award_item : 2,
	Award_num : 3,
	Moster_num : 4,
	Basic_award_num : 5,
	Award_factor : 6,
	Level : 7,

	Each: function(cb) {
		for(var i = 0; i < this._list.length; i++) {
			cb(this._list[i]);
		}
	},

	_list: [
		[1 /*[0]*/, 1 /*[1]*/, 355 /*[2]*/, 25 /*[3]*/, 30 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/, 25 /*[7]*/],
		[2 /*[0]*/, 2 /*[1]*/, 355 /*[2]*/, 30 /*[3]*/, 30 /*[4]*/, 7 /*[5]*/, 10 /*[6]*/, 30 /*[7]*/],
		[3 /*[0]*/, 3 /*[1]*/, 355 /*[2]*/, 35 /*[3]*/, 30 /*[4]*/, 9 /*[5]*/, 20 /*[6]*/, 35 /*[7]*/],
		[4 /*[0]*/, 4 /*[1]*/, 355 /*[2]*/, 40 /*[3]*/, 30 /*[4]*/, 11 /*[5]*/, 30 /*[6]*/, 40 /*[7]*/],
		[5 /*[0]*/, 5 /*[1]*/, 355 /*[2]*/, 45 /*[3]*/, 30 /*[4]*/, 13 /*[5]*/, 40 /*[6]*/, 45 /*[7]*/],
		[6 /*[0]*/, 6 /*[1]*/, 355 /*[2]*/, 50 /*[3]*/, 30 /*[4]*/, 15 /*[5]*/, 50 /*[6]*/, 50 /*[7]*/],
		[7 /*[0]*/, 7 /*[1]*/, 355 /*[2]*/, 55 /*[3]*/, 30 /*[4]*/, 17 /*[5]*/, 60 /*[6]*/, 55 /*[7]*/],
		[8 /*[0]*/, 8 /*[1]*/, 355 /*[2]*/, 60 /*[3]*/, 30 /*[4]*/, 19 /*[5]*/, 70 /*[6]*/, 60 /*[7]*/],
		[9 /*[0]*/, 9 /*[1]*/, 355 /*[2]*/, 65 /*[3]*/, 30 /*[4]*/, 21 /*[5]*/, 80 /*[6]*/, 65 /*[7]*/],
		[10 /*[0]*/, 10 /*[1]*/, 355 /*[2]*/, 70 /*[3]*/, 30 /*[4]*/, 23 /*[5]*/, 90 /*[6]*/, 70 /*[7]*/]
	],
};
