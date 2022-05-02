FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=filma \
  MYSQL_USER=nawa \
  MYSQL_PASSWORD=password \
  MYSQL_ROOT_PASSWORD=password \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf