#!/bin
SQL=/usr/bin/mysql
OUT_DIR=/home/weichen
LINUX_USER=root
DB_NAME=Student
DB_USER=root
DB_PASS=123456
cd $OUT_DIR
OUT_SQL="student9.sql"
$SQL -u$DB_USER -p$DB_PASS $DB_NAME < $OUT_SQL
