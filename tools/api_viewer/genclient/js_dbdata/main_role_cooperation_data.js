var main_role_cooperation_data = {
		/**
	 * 0 : id, smallint, ID
	 * 1 : buddy_num, tinyint, 要求伙伴人数
	 * 2 : health, int, 生命 - health
	 * 3 : attack, int, 普攻 - attack
	 * 4 : defence, int, 普防 - defence
	 * 5 : speed, int, 速度
	 * 6 : cultivation, int, 内力 
	 */

	Id : 0,
	Buddy_num : 1,
	Health : 2,
	Attack : 3,
	Defence : 4,
	Speed : 5,
	Cultivation : 6,

	Each: function(cb) {
		for(var i = 0; i < this._list.length; i++) {
			cb(this._list[i]);
		}
	},

	_list: [
		[1 /*[0]*/, 3 /*[1]*/, 200 /*[2]*/, 40 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[2 /*[0]*/, 5 /*[1]*/, 500 /*[2]*/, 100 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[3 /*[0]*/, 7 /*[1]*/, 1000 /*[2]*/, 200 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[4 /*[0]*/, 9 /*[1]*/, 2000 /*[2]*/, 400 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[5 /*[0]*/, 11 /*[1]*/, 3000 /*[2]*/, 600 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[6 /*[0]*/, 13 /*[1]*/, 4000 /*[2]*/, 800 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[7 /*[0]*/, 15 /*[1]*/, 5000 /*[2]*/, 1000 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/],
		[8 /*[0]*/, 17 /*[1]*/, 6000 /*[2]*/, 1200 /*[3]*/, 0 /*[4]*/, 0 /*[5]*/, 0 /*[6]*/]
	],
};
