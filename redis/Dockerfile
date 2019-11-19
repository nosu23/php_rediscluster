FROM redis:5.0.5-alpine
RUN apk add --no-cache openrc
RUN ln -sf /sbin/openrc-init /sbin/init

ENTRYPOINT ["/sbin/init"]

#redis-server /etc/redis/conf/7000_redis.conf &
#redis-server /etc/redis/conf/7001_redis.conf &
#redis-server /etc/redis/conf/7002_redis.conf &
#redis-server /etc/redis/conf/7003_redis.conf &
#redis-server /etc/redis/conf/7004_redis.conf &
#redis-server /etc/redis/conf/7005_redis.conf &
#
#redis-cli --cluster create 127.0.0.1:7000 127.0.0.1:7001 127.0.0.1:7002 \
#127.0.0.1:7003 127.0.0.1:7004 127.0.0.1:7005 \
#--cluster-replicas 1