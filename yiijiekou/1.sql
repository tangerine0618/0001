DROP TABLE `t_mis_visit`;
#参观预约表
create table `t_mis_visit`(
`id` int(11) unsigned not null auto_increment comment '参观预约id',
`customerid` int(11) unsigned not null comment '客户id',
`customername` varchar(50) character set utf8 collate utf8_bin null default '' comment '客户名称',
`customersex` tinyint(2) null default 2 comment '客户性别，0男，1女，2未知',
`customerphone` char(11) character set utf8 collate utf8_bin null default '' comment '客户手机号',
`customerage` char(11) character set utf8 collate utf8_bin null default '' comment '客户年龄',
`customeraddress` varchar(50) character set utf8 collate utf8_bin null default '' comment '客户家庭住址',

`visiterid` int(11) unsigned not null comment '参观人id',
`visitername` varchar(50) character set utf8 collate utf8_bin null default '' comment '参观人名称',
`visiterphone` char(11) character set utf8 collate utf8_bin null default '' comment '参观人手机号',
`number` char(11) character set utf8 collate utf8_bin null default '' comment '参观人数',
`visittime` datetime null default current_timestamp comment '参观时间',

`stationid` int(11) unsigned not null comment '驿站id',
`stationname` varchar(50) character set utf8 collate utf8_bin null default '' comment '驿站名称',
`remarks` varchar(50) character set utf8 collate utf8_bin null default '' comment '备注',

`process_instance_id` int(11) unsigned not null comment '审批实例编号id',
`deptid` int(11) unsigned not null comment '所属部门id',
`approverid` int(11) unsigned not null comment '审批人id',
`copyid` int(11) unsigned  null comment '抄送人id',
`status` tinyint(2) null default 0 comment '履约状态，0默认未履约，1履约',

`cid` int(11) unsigned not null comment '创建人id',
`cname` varchar(50) character set utf8 collate utf8_bin null default '' comment '创建人名称',
`updatetime` datetime null default current_timestamp comment '更新时间',
primary key (`id`)
)
engine=InnoDB
default character set=utf8 collate=utf8_bin AUTO_INCREMENT=1 COMMENT '参观预约表';