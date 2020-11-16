#!/bin/bash
# import database using docker container
# MODE=<backup|restore>
# S3_ACCESS_KEY=<aws-access-key>
# S3_SECRET_KEY=<aws-secret-key>
# S3_HOST_BUCKET=%(bucket)s.<ceph-host>:<ceph-port>
# S3_HOST_BASE=<ceph-host>:<ceph-port>
# S3_BACKUP_BUCKET=<s3://bucket-containing-backups>
# S3_RESTORE_FILENAME=<name of file to restore in the backup-bucket>
# MYSQL_HOST=<mysql-host>
# MYSQL_USER=<mysql-username>
# MYSQL_PASSWORD=<mysql-passwd>
# MYSQL_DATABASE=<destination mysql-db>
# MYSQL_DROP_DB_IF_EXISTS=<false|true>
# MYSQL_EXIT_SUCCESS_IF_DB_EXISTS=<false|true>
# MYSQL_ALLOW_DB_OVERWRITE=<false|true>

export MYSQL_DATABASE="database-telesoccorso.cqhnfqgml1n1.eu-west-1.rds.amazonaws.com"
export MYSQL_PORT="3306"
export MYSQL_USER="tsc"
export MYSQL_PASSWORD="Midara01"

echo 'Database' $MYSQL_DATABASE
export command="mysql -h $MYSQL_DATABASE -u $MYSQL_USER -p$MYSQL_PASSWORD"

for file in mysql-init/*.sql
do
        name=${file##*/}
        base=${name%.txt}
        echo "Executing sql $file"
		if [[ $file == *"tsc"* ]]; then
		  $command tsc < $file
		fi
		if [[ $file == *"telesoccorso"* ]]; then
		  $command telesoccorso < $file
		fi
done