FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD=pinacoteca1234
ENV MYSQL_DATABASE=pinacoteca
ENV MYSQL_USER=davinci
ENV MYSQL_PASSWORD=davinci1234

COPY pinacoteca.sql /docker-entrypoint-initdb.d/

EXPOSE 3306
