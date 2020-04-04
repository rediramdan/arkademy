function getBiodata(name,age){
	return {
		name:name,
		age :age,
		addres : 'Jalan Raya Panjalu, Kecamatan Panumbangan, Kabupaten Ciamis',
		list_school:[
			{
				name:'SDN 1 Banjarangsana',
				year_in : 2008,
				year_out : 2014,
				major : null
			},
			{
				name:'SMPN 1 Panjalu',
				year_in : 2014,
				year_out : 2017,
				major : null
			},
			{
				name:'SMKN 1 Kawali',
				year_in : 2017,
				year_out : 2020,
				major : null
			}
		],
		skills :[
			{
				name : 'HTML',
				level : 'advanced'
			},
			{
				name : 'Javascript',
				level : 'advanced'
			},
			{
				name : 'Laravel',
				level : 'advanced'
			},
			{
				name : 'SQL',
				level : 'advanced'
			},
			{
				name: 'JQuery',
				level : 'advanced'
			}
		],
		interest_in_coding : true
	};
}

console.log(getBiodata('Redi',17));