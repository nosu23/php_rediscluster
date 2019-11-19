<?php
#接続は docker-compose.yml の link の設定で繋がる
$rc = new RedisCluster(null, [
    'redis:7000',
]);
var_dump($rc);
# php7だと RedisCluster::FAILOVER_DISTRIBUTE_SLAVES が動かないので、ランダムで replica にアクセスの RedisCluster::FAILOVER_DISTRIBUTE を設定。
# https://github.com/phpredis/phpredis/blob/develop/cluster.markdown#automatic-slave-failover--distribution
# https://github.com/phpredis/phpredis/issues/937
$rc->setOption(\RedisCluster::OPT_SLAVE_FAILOVER, \RedisCluster::FAILOVER_DISTRIBUTE);
var_dump($rc);
#echo "<pre>";
# master系のnodeのリストが表示できます
#print_r($rc->_masters());
# replica(slave)も含めて全てのnodeを表示
#print_r($rc->rawcommand(['172.16.239.10', 7000], 'cluster', 'nodes'));
#$t = microtime();
#$k = md5($t);
# 適当の値をセットして
#$rc->set($k, $t);
# とりあえずゲットしてみる。ゲットできていれば万事上手く動いているんじゃないんですかね
#print_r($rc->get($k));